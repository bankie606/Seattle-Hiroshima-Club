  <?php get_header(); ?>
    <!-- WP content start -->
<div id="#">
    <div id="#">
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <h2><?php the_title(); ?></h2>     
    <?php the_content(''); ?>
    <?php endwhile; endif; ?>
        <p>page.php</p>
    </div>
<?php get_sidebar();?>
</div>
<!-- WP content end -->
<?php get_footer(); ?>