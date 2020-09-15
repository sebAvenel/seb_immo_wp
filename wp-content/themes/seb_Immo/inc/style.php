<?php
add_filter('next_posts_link_attributes', function (string $attrs): string {
    return $attrs . ' class="btn"';
});

/**
 * Gérer l'active du menu en fonction de la page sur laquelle on se trouve
 */
add_filter('nav_menu_css_class', function (array $classes, WP_Post $item): array {
    // Supprimer l'active sur 'Actualités' si on ne se trouve pas sur cette page
    if (is_singular('property') || is_post_type_archive('property')){
        $classes = array_filter($classes, function (string $class){
            return $class !== 'current_page_parent';
        });
    }
    // Placer l'active sur 'louer' ou 'acheter' selon le type de bien sur lequel on se trouve
    if (is_singular('property')){
        $property = get_queried_object();
        $category = get_field('property_category', $property);
        if ($category === 'buy'){
            $condition = agence_is_buy_url($item->url);
        } else {
            $condition = agence_is_rent_url($item->url);
        }
        if ($condition){
            $classes[] = 'current_page_parent';
        }
    }
    return $classes;
}, 10, 2);
