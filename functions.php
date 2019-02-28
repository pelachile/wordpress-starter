<?php

  function armory_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    //wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/dist/css/style.css', array( $parent_style ));

    wp_enqueue_style( 'ao-stylesheet', get_stylesheet_directory_uri() . '/dist/css/style.css', array(), '1.0.0', 'all' );

    wp_enqueue_script( 'child-scripts', get_stylesheet_directory_uri() . '/dist/js/bundle.js', array('jquery'), '1.0.0', true);
  }

add_action( 'wp_enqueue_scripts', 'armory_enqueue_styles');
