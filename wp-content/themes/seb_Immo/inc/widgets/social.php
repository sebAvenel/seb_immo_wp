<?php

class SebImmo_Social_widget extends WP_Widget {

    public $fields = [];

    public function __construct()
    {
        parent::__construct('seb_immo_social_widget', __('Social widget', 'seb_Immo'));
        $this->fields = [
            'title' => __('Title', 'seb_Immo'),
            'credits' => __('Credits', 'seb_Immo'),
            'twitter' => 'Twitter',
            'facebook' => 'facebook',
            'instagram' => 'Instagram',
        ];
    }

    /**
     * Retourne le contenu html du widget
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance):void
    {
        echo $args['before_widget'];
        if (isset($instance['title'])){
            $title = apply_filters('widget_title', $instance['title']);
            echo $args['before_title'] . $title . $args['after_title'];
        }
        $template = locate_template('template-parts/widgets/social.php');
        if (!empty($template)){
            include($template); // Accès dans le template aux variables qui ont été crées dans le même contexte ($args, $instance...)
        }
        echo $args['after_widget'];
    }

    /**
     * Retourne le formulaire du widget
     * @param array $instance
     * @return string|void
     */
    public function form($instance):void
    {
        foreach ($this->fields as $field => $label){
            $value = $instance[$field] ?? '';
            ?>
            <p>
                <label for="<?= $this->get_field_id($field) ?>"><?= esc_html($label) ?></label>
                <input
                    type="text"
                    class="widefat"
                    name="<?= $this->get_field_name($field) ?>"
                    id="<?= $this->get_field_id($field) ?>"
                    value="<?= esc_attr($value) ?>"
                >
            </p>
            <?php
        }

    }

    /**
     * Permet de traiter les données du widget
     * @param array $new_instance
     * @param array $old_instance
     * @return array
     */
    public function update($new_instance, $old_instance):array
    {
        $output = [];
        foreach ($this->fields as $field => $label){
            if (!empty($new_instance[$field])){
                $output[$field] = $new_instance[$field];
            }
        }
        return $output;
    }
}
