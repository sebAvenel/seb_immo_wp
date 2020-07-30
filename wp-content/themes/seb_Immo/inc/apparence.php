<?php

add_action('customize_register', function (WP_Customize_Manager $manager){
    $manager->add_section('seb_immo_appearance', [
        'title' => __('Theme appearance')
    ]);

    $manager->add_setting('logo', [
        'sanitize_callback' => 'esc_url_raw'
    ]);

    $manager->add_control(new WP_Customize_Image_Control($manager, 'logo', [
        'label' => __('Logo', 'Seb Immo'),
        'section' => 'seb_immo_appearance'
    ]));
});
