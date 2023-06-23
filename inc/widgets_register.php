<?php


// Widget Sidebar

function halim_widgets_register(){
    register_sidebar([
        'name' => __('Main Widget Area', 'mdabdulhalim'),
        'id' => 'sidebar-01',
        'description' => __('This is the main widget area.', 'mdabdulhalim'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ]);

// Footer 01

      register_sidebar([
      'name' => __('Footer 01', 'mdabdulhalim'),
      'id' => 'footer-01',
      'description' => __('This is the main widget area.', 'mdabdulhalim'),
      'before_widget' => '<div class="child_sidebar">',
          'after_widget' => '</div>',
      'before_title' => '<h2 class="title">',
          'after_title' => '</h2>',
      ]);

// Footer 02
        register_sidebar([
        'name' => __('Footer 02', 'mdabdulhalim'),
        'id' => 'footer-02',
        'description' => __('This is the main widget area.', 'mdabdulhalim'),
        'before_widget' => '<div class="child_sidebar">',
            'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
            'after_title' => '</h2>',
        ]);
        
// Footer 03
          register_sidebar([
          'name' => __('Footer 03', 'mdabdulhalim'),
          'id' => 'footer-03',
          'description' => __('This is the main widget area.', 'mdabdulhalim'),
          'before_widget' => '<div class="child_sidebar">',
              'after_widget' => '</div>',
          'before_title' => '<h2 class="title">',
              'after_title' => '</h2>',
          ]);
}

add_action('widgets_init', 'halim_widgets_register');