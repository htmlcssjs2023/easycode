<?php

// Theme file
 add_theme_support('title-tag');

// Thumbnail Image Area . . . ........................................

add_theme_support( 'post-thumbnails', array('page', 'post') );
add_image_size( 'post-thumbnails');


// Excerpt to 40 word .................................................

function halim_excerpt_more($more){
    return '<br><br> <a class="readmore readmore1" href="'.get_permalink(). '">' . 'Read More' .'</a>'; 
}

add_filter( 'excerpt_more', 'halim_excerpt_more');

function halim_excerpt_length($length){
    return 40;
}
add_filter( 'excerpt_length','halim_excerpt_length' , 999);



// Theme pagination ...............................................

function halim_pagenav(){
    global $wp_query, $wp_rewrite;
    $pages = '';

    $max = $wp_query->max_num_pages;  //  2 of 10 pages
    if(!$current = get_query_var('paged')) $current = 1; 

    $args['base'] = str_replace(99999, '%#%', get_pagenum_link(99999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = 'Prev';
    $args['next_text'] = 'Next';

    if($max > 1) echo '</pre> 
    <div class="wp_pagenav">';

    if($total == 1 && $max > 1) $pages = '<p class="pages"> Page ' . $current . '<span> of </span>'. $max . '</p>';
    // if($total == 1 && $max > 1) $pages = '<p> Pages : '. $current . '<span> of </span>'. $max . '</p>';

    echo $pages . paginate_links( ($args) );

    if($max > 1) echo '</div><pre>';

}

// Theme Widgets ........................................................

