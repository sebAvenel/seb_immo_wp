<?php

defined('ABSPATH') or die('rien à voir');  // empêche l'éxécution de ce fichier directement

add_action('template_redirect', function (){
    if (is_post_type_archive('property')){
        $authorizedValues = [agence_buy_route_name(), agence_rent_route_name()];
        if (isset($_GET['property_category']) && in_array($_GET['property_category'], $authorizedValues)){
            $filteredParams = [];
            foreach($_GET as $key => $value){
                if ($key !== 'property_category' && $key !== ''){
                    $filteredParams[$key] = $value;
                }
            }
            wp_redirect('/' . basename(site_url()) . '/' . _x('property', 'URL', 'agence') . '/' . $_GET['property_category'] . '?' . http_build_query($filteredParams));
            exit();
        }
    }
});
