<?php
/**
 * Ce fichier permet de déclarer les filtres supplémentaires (achat, vente) pour les biens
 */

defined('ABSPATH') or die('rien à voir');  // empêche l'éxécution de ce fichier directement

$propertyCategories = [];

// Filtre les biens à acheter ou louer via le paramètrge property_category
add_filter('query_vars', function (array $params): array {
    $params[] = 'property_category';
    return $params;
});
add_action('pre_get_posts', function (WP_Query $query) use(&$propertyCategories): void {
    if (is_admin() || !$query->is_main_query() || !is_post_type_archive('property')){
        return;
    }

    //var_dump(get_query_var('property_category')); die();
    $values = array_keys($propertyCategories);
    if (in_array(get_query_var('property_category'), $values)){
        $meta_query = $query->get('meta_query', []);
        $meta_query[] = [
            'key' => 'property_category',
            'value' => $propertyCategories[get_query_var('property_category')]
        ];
        $query->set('meta_query', $meta_query);
    }
});

// réécriture d'URL
add_action('init', function () use (&$propertyCategories){
    $propertyCategories = [
        _x('buy', 'URL', 'agence') => 'buy',
        _x('rent', 'URL', 'agence') => 'rent'
    ];
    add_rewrite_rule(
        _x('property', 'URL', 'agence') . '/(' . implode('|' , array_keys($propertyCategories)) . ')/?$',
        'index.php?post_type=property&property_category=$matches[1]',
        'top'
    );
});

function agence_is_rent_url(string $url): bool {
    return strpos($url, _x('property', 'URL', 'agence') . '/' . _x('rent', 'URL', 'agence'));
}