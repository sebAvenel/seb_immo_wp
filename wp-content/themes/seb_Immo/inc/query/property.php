<?php
add_action('pre_get_posts', function (WP_Query $query){
    if (is_admin() || !is_post_type_archive('property')){
        return;
    }
    $query->set('posts_per_page', 20);
});
