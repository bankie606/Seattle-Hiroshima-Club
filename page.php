  <?php get_header(); ?>
    <!-- WP content start -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>  
        <div class="entry">
            <?php the_content(); ?>
        </div><!-- entry -->
<?php endwhile; ?>
<?php endif; ?>
<!-- WP content end -->
<?php get_footer(); ?>