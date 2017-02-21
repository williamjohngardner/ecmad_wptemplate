<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_theme_menus() {

  register_nav_menus(
    array(
      'primary_nav' => __( 'Primary Menu' )
    )
  );
}
add_action( 'init', 'register_theme_menus' );


function wpmad_create_widget( $name, $id, $description ) {

  register_sidebar(array(
    'name'          =>  __( $name ),
    'id'            =>  $id,
    'description'   =>  __( $description ),
    'before_widget' =>  '<div class="widget">',
    'after_widget'  =>  '</div>',
    'before_title'  =>  '<h2 class="module-heading">',
    'after_title'   =>  '</h2>'
  ));

}

wpmad_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
wpmad_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog' );



function wpmad_theme_styles() {

  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css');
  wp_enqueue_style( 'googlefont_oswald', 'https://fonts.googleapis.com/css?family=Oswald');
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css');

}
add_action( 'wp_enqueue_scripts', 'wpmad_theme_styles' );



function wpmad_theme_js() {

  wp_enqueue_script( 'sliders_js', get_template_directory_uri() . '/js/sliders.js', array('jquery'), '', false);

}
add_action( 'wp_enqueue_scripts', 'wpmad_theme_js');


$args = array(
	'default-color' => 'a21c26',
);
add_theme_support( 'custom-background', $args );


?>
