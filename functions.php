<?php

  function armory_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'ao-stylesheet', get_stylesheet_directory_uri() . '/dist/css/style.css', array(), '1.0.0', 'all' );

    wp_enqueue_script( 'child-scripts', get_stylesheet_directory_uri() . '/dist/js/bundle.js', array('jquery'), '1.0.0', true);
  }

add_action( 'wp_enqueue_scripts', 'armory_enqueue_styles');

  function armory_load_fonts() {
    wp_register_style('ao-googleFonts', 'https://fonts.googleapis.com/css?family=Cinzel|Fredericka+the+Great|Roboto+Slab');
    wp_enqueue_style( 'ao-googleFonts' );
  }

  add_action('wp_print_styles', 'armory_load_fonts');
