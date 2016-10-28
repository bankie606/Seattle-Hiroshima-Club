        <?php 

        if(is_page()) {

            if($post->post_parent){// check if page is parent...

                echo '<h3>'.get_the_title($post->post_parent).'</h3>';
                echo '<ul>';
                wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent,)); //... list current page
                echo '</ul>';
            } else { // if page does not have a parent...

                echo '<h3>'.get_the_title($post->ID).'</h3>';
                echo '<ul>';
                wp_list_pages(array('title_li' => '', 'child_of' => $post->ID,));// ... do this
                echo '</ul>';
            }
            
            echo '<h3>Events</h3>';
            
            echo '<a href="/donate"><button type="button" class="btn btn-block">donate</button></a>';
            echo '<h3>Newsletter</h3>';
            /*echo '<form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                    <input type="text" class="form-control" placeholder="Sign up for our mailing list">
                    </div>
                    </form>';*/
            
        }

        if(!(is_page())) {

            echo '<h3>Blog</h3>';
            echo '<ul>';
            wp_list_categories(array('title_li' => '',));
            echo '</ul>';
            }
        ?>