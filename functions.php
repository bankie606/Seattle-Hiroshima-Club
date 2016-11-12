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
register_sidebars(1, array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));

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

function get_child_pages() {
	
	global $post;
	
	rewind_posts(); // stop any previous loops 
	query_posts(array('post_type' => 'page', 'posts_per_page' => -1, 'post_status' => publish,'post_parent' => $post->ID,'order' => 'ASC','orderby' => 'menu_order')); // query and order child pages 
    
	while (have_posts()) : the_post(); 
	
		$childPermalink = get_permalink( $post->ID ); // post permalink
		$childID = $post->ID; // post id
		$childTitle = $post->post_title; // post title
		$childExcerpt = $post->post_excerpt; // post excerpt
        
		echo '<article id="page-excerpt-'.$childID.'" class="page-excerpt">';
		echo '<h3><a href="'.$childPermalink.'">'.$childTitle.' &raquo;</a></h3>';
		echo '<p>'.$childExcerpt.' <a href="'.$childPermalink.'">Read More&nbsp;&raquo;</a></p>';
		echo '</article>';
        
	endwhile;
	
	wp_reset_query(); // reset query
        
}


?>