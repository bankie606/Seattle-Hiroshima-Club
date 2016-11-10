<?php get_header(); ?>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<!-- WP content start -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>  
        <div class="page-content">
            <?php the_content(); ?>
            <p>page.php</p>
        </div><!-- entry -->
        <div class="page-sidebar">
            <?php get_sidebar(); ?>
        </div>
        
<?php endwhile; ?>
<?php endif; ?>

<!-- WP content end -->
<?php get_footer(); ?>