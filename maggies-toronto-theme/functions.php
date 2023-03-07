<?php 

function maggies_files() {
    wp_enqueue_style('maggies_general_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'maggies_files');

?>