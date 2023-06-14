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

 

 // Theme function customization..
// function abc($wp_customize){}
// add_action( 'themecustomizer', 'abc' );


function easycode_customizar_register($wp_customize){
      $wp_customize->add_section('easycode_header_area', [
      'title' =>__('Header Area', 'mdabdulhalim'),
      'description' => 'If you interested to update your header area, you can do it here.'
      ]);

      $wp_customize->add_setting('easycode_logo',[
         'default' => get_bloginfo('template_directory') . '/img/zoomit.png',
      ]);

      $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'easycode_logo', [
         'label' => 'Logo Upload',
         'description' => 'If you interested to change or update your logo you can do it.',
         'setting' => 'easycode_logo',
         'section' => 'easycode_header_area',
      ]));

      

      // ================ Menu Position ============== 
      $wp_customize->add_section('halim_menu_option', [
         'title' => __('Menu Option', 'mdabdulhalim'),
         'description' => 'This is created by Abdul Halim'
      ]);

      $wp_customize->add_setting('halim_menu_position',[
         'default' => 'right_menu'
      ]);

      $wp_customize->add_control('halim_menu_position',[
            'label' => 'Menu Position',
            'description' => 'You can change your menu position',
            'setting' => 'halim_menu_position',
            'section' => 'halim_menu_option',
            'type' => 'radio',
            'choices' => [
               'left_menu' => 'Left Menu',
               'right_menu' => 'Right Menu',
               'center_menu' => 'Center Menu'
            ]
      ]);

      // Menu Positioning
    
}

add_action('customize_register', 'easycode_customizar_register');






// Google Fonts Enqueue
function easycode_add_google_fonts(){
wp_enqueue_style('easycode_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap',
false);
}

add_action('wp_enqueue_scripts', 'easycode_add_google_fonts');
// Menu Register
register_nav_menu( 'main_menu', __('Main Menu', 'mdabdulhalim') );