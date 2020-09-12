<?php
/**
 * Plugin Name: Agence plugin
 */
add_action('init', function (){
    register_post_type('property', [
        'label' => __('Property', 'agence'),
        'menu_icon' => 'dashicons-admin-multisite',
        'labels' => [
            'name'                      => __('Property', 'agence'),
            'singular_name'             => __('Property', 'agence'),
            'edit_item'                 => __('Edit Property', 'agence'),
            'new_item'                  => __('New property', 'agence'),
            'view_item'                 => __('View property', 'agence'),
            'view_items'                => __('View properties', 'agence'),
            'search_items'              => __('search properties', 'agence'),
            'not_found'                 => __('No properties found', 'agence'),
            'not_found_in_trash'        => __('No properties found in trash', 'agence'),
            'all_items'                 => __('All properties', 'agence'),
            'archives'                  => __('Property archive', 'agence'),
            'attributes'                => __('Property attributes', 'agence'),
            'insert_into_item'          => __('Insert into property', 'agence'),
            'uploaded_to_this_item'     => __('New property', 'agence'),
            'filter_item_list'          => __('Filter properties list', 'agence'),
            'items_list_navigation'     => __('Properties list navigation', 'agence'),
            'items_list'                => __('Properties list', 'agence'),
            'item_published'            => __('Property published', 'agence'),
            'item_published_privately'  => __('Property published privately', 'agence'),
            'item_reverted_to draft'    => __('Property reverted to trash', 'agence'),
            'item_scheduled'            => __('Property scheduled', 'agence'),
            'item_uploaded'             => __('Property updated', 'agence'),
        ],
        'has_archive' => true,
        'public' => true, // rendre le post type public, accessible
        'hierrachical' => false, // ne pas avoir de biens avec des sous-biens
        'exclude_from_search' => false, // on veut que ça apparaisse dans la recherche
        'taxonomies' => ['property_type', 'property_city', 'property_option'],
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail']
    ]);
    register_taxonomy('property_type', 'property', [
        'meta_box_cb' => 'post_categories_meta_box',
        'labels'  => [
            'name'                      => __('Types', 'agence'),
            'singular_name'             => __('Type', 'agence'),
            'search_items'              => __('Search types', 'agence'),
            'popular_items'             => __('Popular types', 'agence'),
            'all_items'                 => __('All types', 'agence'),
            'edit_item'                 => __('Edit type', 'agence'),
            'view_item'                 => __('View type', 'agence'),
            'update_item'               => __('Update type', 'agence'),
            'add_new_item'              => __('Add new type', 'agence'),
            'new_item_name'             => __('New type name', 'agence'),
            'separate_items_with_commas'=> __('Separate types with commas', 'agence'),
            'add_or_remove_items'       => __('Add or remove types', 'agence'),
            'choose_from_most_used'     => __('Choose from your most used types', 'agence'),
            'not_found'                 => __('No types found', 'agence'),
            'no_terms'                  => __('No types', 'agence'),
            'items_list_navigation'     => __('Types list navigation', 'agence'),
            'items_list'                => __('Types list', 'agence'),
            'back_to_items'             => __('&larr; Back to types', 'agence'),
        ]
    ]);
    register_taxonomy('property_city', 'property', [
        'meta_box_cb' => 'post_categories_meta_box',
        'labels'  => [
            'name'                      => __('Cities', 'agence'),
            'singular_name'             => __('City', 'agence'),
            'search_items'              => __('Search cities', 'agence'),
            'popular_items'             => __('Popular cities', 'agence'),
            'all_items'                 => __('All cities', 'agence'),
            'edit_item'                 => __('Edit city', 'agence'),
            'view_item'                 => __('View city', 'agence'),
            'update_item'               => __('Update city', 'agence'),
            'add_new_item'              => __('Add new city', 'agence'),
            'new_item_name'             => __('New type name', 'agence'),
            'separate_items_with_commas'=> __('Separate cities with commas', 'agence'),
            'add_or_remove_items'       => __('Add or remove cities', 'agence'),
            'choose_from_most_used'     => __('Choose from your most used cities', 'agence'),
            'not_found'                 => __('No cities found', 'agence'),
            'no_terms'                  => __('No cities', 'agence'),
            'items_list_navigation'     => __('Types list navigation', 'agence'),
            'items_list'                => __('Types list', 'agence'),
            'back_to_items'             => __('&larr; Back to cities', 'agence'),
        ]
    ]);
    register_taxonomy('property_option', 'property', [
        'meta_box_cb' => 'post_categories_meta_box',
        'labels'  => [
            'name'                      => __('Options', 'agence'),
            'singular_name'             => __('Option', 'agence'),
            'search_items'              => __('Search options', 'agence'),
            'popular_items'             => __('Popular options', 'agence'),
            'all_items'                 => __('All options', 'agence'),
            'edit_item'                 => __('Edit option', 'agence'),
            'view_item'                 => __('View option', 'agence'),
            'update_item'               => __('Update option', 'agence'),
            'add_new_item'              => __('Add new option', 'agence'),
            'new_item_name'             => __('New type name', 'agence'),
            'separate_items_with_commas'=> __('Separate options with commas', 'agence'),
            'add_or_remove_items'       => __('Add or remove options', 'agence'),
            'choose_from_most_used'     => __('Choose from your most used options', 'agence'),
            'not_found'                 => __('No options found', 'agence'),
            'no_terms'                  => __('No options', 'agence'),
            'items_list_navigation'     => __('Types list navigation', 'agence'),
            'items_list'                => __('Types list', 'agence'),
            'back_to_items'             => __('&larr; Back to options', 'agence'),
        ]
    ]);
});

register_activation_hook(__FILE__, 'flush_rewrite_rules'); // réécriture des règles à l'activation du plugin
register_deactivation_hook(__FILE__, 'flush_rewrite_rules'); // réécriture des règles à la désactivation du plugin

/**
 * fonction de récupération de la ville et du code postal
 * @param WP_Post|int|null $post
 */
function agence_city($post = null){
    if ($post === null){
        $post = get_post();
    }
    $cities = get_the_terms($post, 'property_city');
    if (empty($cities)){
        return;
    }
    $city = $cities[0];
    echo $city->name;
    $postalCode = get_field('postal_code', $city);
    if ($postalCode){
        echo ' (' . $postalCode . ')';
    }
}