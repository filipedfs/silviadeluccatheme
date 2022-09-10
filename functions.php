<?php 
function myStyle(){
    wp_enqueue_style('reset.css', get_template_directory_uri().'/assets/css/reset.css', false);
    wp_enqueue_style('style.css', get_template_directory_uri().'/assets/css/main.css', false);
}

function myScript(){
    wp_enqueue_script('script.js', get_template_directory_uri().'/assets/js/script.js', false);
}

function console_log($data){
    echo '<script>';
    echo 'console.log('.json_encode($data).')';
    echo '</script>';
}

add_action('wp_enqueue_scripts', 'myStyle');
add_action('wp_enqueue_scripts', 'myScript');

