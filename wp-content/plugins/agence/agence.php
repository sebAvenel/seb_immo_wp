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
        'public' => true, // rendre le post type public, accessible
        'hierrachical' => false, // ne pas avoir de biens avec des sous-biens
        'exclude_from_search' => false, // on veut que ça apparaisse dans la recherche
        'taxonomies' => ['property_type'],
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail']
    ]);
    register_taxonomy('property_type', 'property', [
        'labels'  => [
            'name'                      => __('Types', 'agence'),
            'singular_name'             => __('Type', 'agence'),
            'search_items'              => __('Search types', 'agence'),
            'popular_items'             => __('Popular types', 'agence'),
            'all_items'                 => __('All types', 'agence'),
            'parent_item'               => __('Parent category', 'agence'),
            'parent_item_colon'         => __('Parent category:', 'agence'),
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
            'most_used'                 => __('Most used', 'agence'),
            'back_to_items'             => __('&larr; Back to types', 'agence'),
        ]
    ]);
});

register_activation_hook(__FILE__, 'flush_rewrite_rules'); // réécriture des règles à l'activation du plugin
register_deactivation_hook(__FILE__, 'flush_rewrite_rules'); // réécriture des règles à la désactivation du plugin