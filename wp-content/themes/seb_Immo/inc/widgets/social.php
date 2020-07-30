<?php

class SebImmo_Social_widget extends WP_Widget {

    public function __construct()
    {
        parent::__construct('seb_immo_social_widget', __('Social widget', 'seb_Immo'));
    }

    /**
     * Retourne le contenu html du widget
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
        echo $args['before_widget'];
        if (isset($instance['title'])){
            $title = apply_filters('widget_title', $instance['title']);
            echo $args['before_title'] . $title . $args['after_title'];
        }
        echo 'Réseaux sociaux !!';
        echo $args['after_widget'];
    }

}
