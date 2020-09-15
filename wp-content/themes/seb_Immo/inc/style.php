<?php
add_filter('next_posts_link_attributes', function (string $attrs): string {
    return $attrs . ' class="btn"';
});

/**
 * Gérer l'active du menu en fonction de la page sur laquelle on se trouve
 */
add_filter('nav_menu_css_class', function (array $classes): array {
    // Supprimer l'active sur 'Actualités' si on ne se trouve pas sur cette page
    if (is_singular('property') || is_post_type_archive('property')){
        $classes = array_filter($classes, function (string $class){
            return $class !== 'current_page_parent';
        });
    }

    return $classes;
});
