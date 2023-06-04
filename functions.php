<?php
/*
* This is the header template area
 */

 // This is used for title tag <title></title>
 add_theme_support('title-tag');


 // load css and js file for Easy Code theme
 
 function easycode_css_js_file_calling(){
    // load css file
    wp_enqueue_style( 'easycode-style', get_stylesheet_uri());
 };

 add_action( 'wp_enqueue_scripts', 'easycode_css_js_file_calling');