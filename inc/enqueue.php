<?php
 function easycode_css_js_file_calling(){
 // load css file
 wp_enqueue_style( 'easycode-style', get_stylesheet_uri());
 // wp_register_style( $handle:string, $src:string|false, $deps:array, $ver:string|boolean|null, $media:string )

 //load own bootstrap file in your theme
 wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', [], '5.2.3', 'all');
 wp_enqueue_style('bootstrap');

 // load own css file in your theme
 wp_register_style( 'custom', get_template_directory_uri().'/css/custom.css', [], '1.0.0', 'all');
 wp_enqueue_style('custom');

 // Load jQuery file from your default wp theme.
 wp_enqueue_script('jquery');

 // load bootstrap file from local
 wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', [], '5.2.3', true);
 wp_enqueue_script('bootstrap');
 // load bootstrap file from local
 wp_register_script('main', get_template_directory_uri().'/js/main.js', [], '1.0.0', true);
 wp_enqueue_script('main');
 }

 add_action( 'wp_enqueue_scripts', 'easycode_css_js_file_calling');
