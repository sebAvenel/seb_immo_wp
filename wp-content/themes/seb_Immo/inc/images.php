<?php
add_action('afetr_setup_theme', function (){
    set_post_thumbnail_size(250,250,true);
    add_image_size('property-carousel', 777, 400, true);
});