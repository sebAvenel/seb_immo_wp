<?php
/**
 * Plugin Name: Agence plugin
 */
add_action('init', function (){
    register_post_type('bien', [
        'label' => 'Bien',
        'labels' => [
            'name' => __('Property', 'agence'),
            'singular_name' => __('Property', 'agence'),
            'edit_item' => __('Edit Property', 'agence'),
            'new_item' => __('New property', 'agence'),
            'view_item' => __('View property', 'agence'),
            'view_items' => __('View properties', 'agence'),
            'search_items' => __('search properties', 'agence'),
            'not_found' => __('No properties found', 'agence'),
            'not_found_in_trash' => __('No properties found in trash', 'agence'),
            'all_items' => __('All properties', 'agence'),
            'archives' => __('Property archive', 'agence'),
            'attributes' => __('Property attributes', 'agence'),
            'insert_into_item' => __('Insert into property', 'agence'),
            'uploaded_to_this_item' => __('New property', 'agence'),
            'filter_item_list' => __('Filter properties list', 'agence'),
            'items_list_navigation' => __('Properties list navigation', 'agence'),
            'items_list' => __('Properties list', 'agence'),
            'item_published' => __('Property published', 'agence'),
            'item_published_privately' => __('Property published privately', 'agence'),
            'item_reverted_to draft' => __('Property reverted to trash', 'agence'),
            'item_scheduled' => __('Property scheduled', 'agence'),
            'item_uploaded' => __('Property updated', 'agence'),
        ],
        'public' => true, // rendre le post type public, accessible
        'hierrachical' => false, // ne pas avoir de biens avec des sous-biens
        'exclude_from_search' => false, // on veut que ça apparaisse dans la recherche
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail']
    ]);
});