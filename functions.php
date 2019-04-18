<?php
 
function betacloud_enqueue_styles() {
    wp_register_style('betacloud', get_template_directory_uri() . '/betacloud/css/bootstrap.min.css' );
    $dependencies = array('betacloud');
    wp_enqueue_style( 'betacloud-style', get_stylesheet_uri(), $dependencies ); 
}
 
function betacloud_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('betacloud', get_template_directory_uri().'/betacloud/js/bootstrap.min.js', $dependencies, '4.1.3', true );
}

function betacloud_wp_setup() {
    add_theme_support( 'title-tag' );
}
 
// add_action( 'wp_enqueue_scripts', 'betacloud_enqueue_styles' );
// add_action( 'wp_enqueue_scripts', 'betacloud_enqueue_scripts' );
add_action( 'after_setup_theme', 'betacloud_wp_setup' );
 
?>
