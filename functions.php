<?php

/*

Theme Name: Spring 2016 Demo
Author: Milo
Author URI: http://www.milo.sh
Description: This is a demo WP theme for web170
Version: 0.0.1

*/

//menu registry 

function register_navs() {
    register_nav_menus(
        array(
            'main-menu' => __( 'SHC-menu' ),
            'footer' => __('SHC-footer' ),
            'footer-pt2' => __('SHC-footer2')
        )
    );
}

add_action( 'init', 'register_navs');

//sidebar registry
register_sidebars();

//wp-bootstrap-navwalker info
require_once('wp_bootstrap_navwalker.php');

//thumbnail support
add_theme_support('post-thumbnails');


//my title tag

function get_my_title_tag() {
    
    global $post;
    
    if (is_front_page()) { // front page
        
        bloginfo('description'); // get site tagline
    
    } elseif (is_page() || is_single() ){
        
        the_title(); //the page or post title
        
    } else {
        
        bloginfo('description');
        
    }
    
    echo ' ';
    echo ' | ';
    bloginfo('name'); // site name
    
}


 //add excerpt support for pages

add_post_type_support( 'page', 'excerpt' );


// add flexslider

function get_flexslider () {
    
    echo '<div class="flexslider">';
    echo '<ul class="slides">';
    
    echo '</ul>';
    echo '</div>';
    
    
}



?>