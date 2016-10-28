  <?php get_header(); ?>
    <!-- WP content start -->
<div id="#">
    <div id="#">
    <?php if ( have_posts() ) : while( have_posts() ) : the_post(); // start loop one ?>
        <?php the_content(''); // get the home page's content ?>
        <?php endwhile; endif; // end loop one ?>
        <p>front-page.php</p>
    </div>
</div>
<!-- WP content end -->
<?php get_footer(); ?>