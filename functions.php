<?php

//load stylesheets
function load_css(){
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');

  //your own css must be last
  wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
  wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts','load_css');

// load font awesome

function enqueue_load_fa() {
  wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );


//load javascript
function load_js()
{
		wp_enqueue_script('jquery');

		wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
		wp_enqueue_script('bootstrap');


}
add_action('wp_enqueue_scripts', 'load_js');


// theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support('custom-logo');

// Menus
register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
    'footer-menu' => 'Footer Menu Location',
  )
);

//custom image size
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-small', 300, 200, true);

// custom posttype
function add_resource_post()
{
  $args = array(
      'labels' => array(
        'name' => 'Resources',
        'singular_name' => 'Resource',
      ),
      'hierarchical' => true, //boolean value toggles between pages & posts without labels
      'menu-icon' => 'dashicons-book' ,
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail','custom-fields' ),
    );
      register_post_type( 'resources', $args);
}

add_action( 'init', 'add_resource_post' );

// custom taxonomy

function resources_taxonomy()
{
    $args = array(
        'labels' => array(
            'name' => 'Topics',
            'singular_name' => 'Topic',
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('topics', array('resources'), $args);
}

add_action('init', 'resources_taxonomy');


// Register sidebars
function my_sidebars(){
  register_sidebar(
      array(
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
      )
    );

    register_sidebar(
        array(
          'name' => 'Blog Sidebar',
          'id' => 'blog-sidebar',
          'before_title' => '<h4 class="widget-title">',
          'after_title' => '</h4>'
        )
      );
}

add_action('widgets_init', 'my_sidebars');

// customizer api
require_once get_template_directory() . '/customizer.php';

remove_action('wp_head', 'wp_generator'); //for security. it wont show what version of wp is used.
