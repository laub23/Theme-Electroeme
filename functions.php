<?php
/**
** activation theme
**/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
// enqueue child styles
wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/style.css', array('parent-style'));
}
?>