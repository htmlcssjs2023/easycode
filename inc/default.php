<?php

// Theme file
 add_theme_support('title-tag');

// Thumbnail Image Area
add_theme_support( 'post-thumbnails', array('page', 'post') );
add_image_size( 'post-thumbnails');


// Except to 40 word
function halim_excerpt_more($more){
    return '<br><br> <a class="readmore readmore1" href="'.get_permalink(). '">' . 'Read More' .'</a>'; 
}

add_filter( 'excerpt_more', 'halim_excerpt_more');

function halim_excerpt_length($length){
    return 10;
}
add_filter( 'excerpt_length','halim_excerpt_length' , 999);