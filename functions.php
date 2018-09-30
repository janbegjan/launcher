<?php

/**
* launcher theme cache busting
*/



if(site_url() == 'http://local.wordpress.test/'){
  define('VERSION', wp_get_theme()->get('Version'));
  
}else{
  define('VERSION', time());
}

/**
* launcher theme bootstrap
*/
function launcher_bootstrapping(){
  load_theme_textdomain( 'launcher' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  // register_nav_menu('Top_menu', __('Top menu', 'launcher'));
  // register_nav_menu('Footer_menu', __('Footer menu', 'launcher'));
}
add_action('after_setup_theme', 'launcher_bootstrapping');

/**
* launcher theme assets
*/
function launcher_assets(){
  wp_enqueue_style('animate-css', get_theme_file_uri('/assets/css/animate.css'));
  wp_enqueue_style('bootstrap-css', get_theme_file_uri('/assets/css/bootstrap.css'));
  wp_enqueue_style('icomoon-css', get_theme_file_uri('/assets/css/icomoon.css'));
  wp_enqueue_style('style-css', get_theme_file_uri('/assets/css/style.css'));
  wp_enqueue_style('launcher_stylesheet-css', get_stylesheet_uri(), null, VERSION);
  
  wp_enqueue_script('jquery-easing-js', get_theme_file_uri('/assets/js/jquery.easing.1.3.js'), array('jquery'), null, true);
  wp_enqueue_script('bootstrap-js', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), null, true);
  wp_enqueue_script('waypoints-js', get_theme_file_uri('/assets/js/jquery.waypoints.min.js'), array('jquery'), null, true);
  wp_enqueue_script('simplyCountdown-js', get_theme_file_uri('/assets/js/simplyCountdown.js'), array('jquery'), null, true);
  wp_enqueue_script('main-js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), VERSION, true);

}
add_action('wp_enqueue_scripts', 'launcher_assets');

/**
* Add Footer sidebar register.
*/
function launcher_register_sidebar() {
  register_sidebar( array(
  'name'          => __( 'Footer left Sidebar', 'launcher' ),
  'id'            => 'sidebar_footer_left',
  'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'launcher' ),
  'before_widget' => '<section id="%1s" class="widget %2s">',
  'after_widget'  => '</section>',
  'before_title'  => '<h2 class="widget-title">',
  'after_title'   => '</h2>',
  ));
  register_sidebar( array(
  'name'          => __( 'Footer right Sidebar', 'launcher' ),
  'id'            => 'sidebar_footer_right',
  'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'launcher' ),
  'before_widget' => '<section id="%1s" class=" text-right widget %2s">',
  'after_widget'  => '</section>',
  'before_title'  => '<h2 class="widget-title">',
  'after_title'   => '</h2>',
  ));
}
add_action( 'widgets_init', 'launcher_register_sidebar' );

