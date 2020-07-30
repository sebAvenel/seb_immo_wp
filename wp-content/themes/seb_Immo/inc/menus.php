<?php
add_action('after_setup_theme', function (){
    register_nav_menu('header', __('Main navigation', 'seb_Immo'));
});

require_once('widgets/social.php');

add_action('widgets_init', function (){
    register_widget(SebImmo_Social_widget::class);
    register_sidebar([
        'id' => 'footer',
        'name' => __('Footer', 'seb_Immo'),
        'before_title' => '<div class="footer__title">',
        'after_title' => '</div>',
        'before_widget' => '<div class="footer__col">',
        'after_widget' => '</div>'
    ]);
});


