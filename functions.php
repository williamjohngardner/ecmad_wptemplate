<?php

function wpmad_theme_styles() {

  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css');
  wp_enqueue_style( 'googlefont_oswald', 'https://fonts.googleapis.com/css?family=Oswald');
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');

}
add_action( 'wp_enqueue_scripts', 'wpmad_theme_styles' );

function wpmad_theme_js() {

  wp_enqueue_script( 'sliders_js', get_template_directory_uri() . '/js/sliders.js', array('jquery'), '', false);

}
add_action( 'wp_enqueue_scripts', 'wpmad_theme_js')

?>
