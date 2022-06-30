<?php

function  aswwu_register_styles() {
    
    wp_enqueue_style( 'original_css', get_template_directory_uri() . "style/css", array(), '1.0', 'all');

}

$hook_name = 'wp_enqueue_scripts';
add_action( $hook_name, 'aswwu_register_styles');

?>