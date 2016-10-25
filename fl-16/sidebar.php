<div id="sidebar">
    <div id="#">

        <?php 

        if(is_page()) {

            if($post->post_parent){// check if page is parent...

                echo '<h2>'.get_the_title($post->post_parent).'</h2>';
                echo '<ul>';
                wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent,)); //... list current page
                echo '</ul>';
            } else { // if page does not have a parent...

                echo '<h2>'.get_the_title($post->ID).'</h2>';
                echo '<ul>';
                wp_list_pages(array('title_li' => '', 'child_of' => $post->ID,));// ... do this
                echo '</ul>';
            }

        }

        if(!(is_page())) {

            echo '<h2>Blog</h2>';
            echo '<ul>';
            wp_list_categories(array('title_li' => '',));
            echo '</ul>';
            }
        ?>
    </div>
    
    <!-- quote start -->
    <div id="my-quote">
    <?php if (get_post_meta($post->ID, 'quote', true)) : ?>
            
   <blockquote><?php echo get_post_meta($post->ID, 'quote', true);?></blockquote>
        
    <?php endif; ?>
    </div>
    <!-- quote end -->
    
    
    <!-- dynamic widget start -->
    <div id="dynamic-widgets">
    <?php dynamic_sidebar(); ?>
    </div>
    
    <!-- dynamic widget end -->
    
</div>