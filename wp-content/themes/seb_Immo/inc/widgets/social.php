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
    public function widget(array $args, array $instance):void
    {
        echo $args['before_widget'];
        if (isset($instance['title'])){
            $title = apply_filters('widget_title', $instance['title']);
            echo $args['before_title'] . $title . $args['after_title'];
        }
        echo 'Réseaux sociaux !!';
        echo $args['after_widget'];
    }

    /**
     * Retourne le formulaire du widget
     * @param array $instance
     * @return string|void
     */
    public function form(array $instance):void
    {
        $credits = $instance['credits'] ?? '';
        ?>
        <p>
            <label for="<?= $this->get_field_id('credits') ?>"><?= __('Credits', 'seb_Immo') ?></label>
            <input
                type="text"
                class="widefat"
                name="<?= $this->get_field_name('credits') ?>"
                id="<?= $this->get_field_id('credits') ?>"
                value="<?= esc_attr($credits) ?>"
            >
        </p>
        <?php
    }

    /**
     * Permet de traiter les données du widget
     * @param array $new_instance
     * @param array $old_instance
     * @return array
     */
    public function update(array $new_instance, array $old_instance):array
    {
        return [
            'credits' => $new_instance['credits']
        ];
    }
}
