</div>    
<div id="shc-footer panel">
    <div class="row panel-footer">
        <div class="col-md-4">
            <img src="<?php bloginfo('template_directory');?>/images/100x100.png" class="img-circle" />       
                <h4 class="#">Seattle Hiroshima Club</h4>
                <h6 class="#">1000 Main St, Seattle WA 98104</h6>
                <h6 class="#">1 800 636 252</h6>
        </div>
        <div class="col-md-2 shc-nav-footer">
            <?php wp_nav_menu( array ( 'theme_location' => 'footer' )); ?>
        </div>
        <div class="col-md-2 shc-nav-footer">
            <?php wp_nav_menu( array ( 'theme_location' => 'footer-pt2' )); ?>
        </div>
        <div class="col-md-4">
        
        </div>
    </div>
</div>
        <!-- WP footer begin -->
        <?php wp_footer(); ?>
        <!-- WP footer eng -->
    </body>
</html>