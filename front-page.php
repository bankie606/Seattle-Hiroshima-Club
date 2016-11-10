  <?php get_header(); ?>
    <!-- WP content start -->
<div id="front-page-main-content">
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); // start loop one ?>
        <?php the_content(''); // get the home page's content ?>
        <?php endwhile; endif; // end loop one ?>
        <div id="cta">
        <div class="box">
            <div class="cta-text">
                <h3>Who we are</h3>
                <img src="<?php bloginfo('template_directory');?>/images/cta1v2.gif"  />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitDuis non mauris libero. Suspendisse faucibus aliquam lacus nec porttitor.</p>
                    <a href="#">Learn More ></a>
            </div>
        </div>
        <div class="box">
            <div class="cta-text">
                <h3>What we do</h3>
                <img src="<?php bloginfo('template_directory');?>/images/cta2v2.gif"  />
                <p>pretium euismod sem. Sed accumsan laoreet pretium. Pellentesque bibendum mi id libero faucibus, nec mattis arcu bibendum Fusce.</p>
                <a href="#">Learn More ></a>
            </div>
        </div>
        <div class="box">
            <div class="cta-text">
                <h3>Get Involved</h3>
                <img src="<?php bloginfo('template_directory');?>/images/cta3v2.gif"  />
                <p>Aliquam non nisl et nunc volutpat tempor eget eu tortor. Donec eu mauris lorem. Curabitur porttitor volutpat orci quis dapibus.</p>
                <a href="#">Learn More ></a>
            </div>
        </div>
    </div>
</div>
<!-- WP content end -->
<?php get_footer(); ?>