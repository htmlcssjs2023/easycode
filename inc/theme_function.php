<?php
function easycode_customizar_register($wp_customize){

//======================= Header area =============================
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

//======================= Footer area =============================
$wp_customize->add_section('easycode_footer_option', [
'title' =>__('Footer Option', 'mdabdulhalim'),
'description' => 'If you interested to update your footer area, you can do it from here.'
]);

$wp_customize->add_setting('easycode_copyright_option',[
'default' => '&copy; Copyright 2023 || EasyCode'
]);

$wp_customize-> add_control('easycode_copyright_option', [
'label' => 'Copyright Text',
'description' => 'You can change your copyright option',
'setting' => 'easycode_copyright_option',
'section' => 'easycode_footer_option',
]);



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
wp_enqueue_style('easycode_google_fonts',
'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap',
false);
}

add_action('wp_enqueue_scripts', 'easycode_add_google_fonts');