<!DOCTYPE html>
<head>
    <title><?php get_my_title_tag();?></title>
    <link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_the_excerpt(); ?>">
    <link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory')?>/js/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/flexslider.css" type="text/css">
   
    <script type="text/javascript" charset="utf-8">
        $(window).load(function() {
        $('.flexslider').flexslider();
        });
    </script>
    <!-- WP head start -->
    <?php wp_head(); ?>
    <!-- WP head end -->
    </head>
    <body <?php body_class();?>>
        <div id="#">
            <a href="<?php echo get_settings('home');?>"><img src="<?php bloginfo('template_directory');?>/images/logo.png" class="#" />
                
            <h1 class="#">Seattle Hiroshima Club</h1></a>
        </div>
    
        <nav class="menu">     
        <?php wp_nav_menu( array('container_class' => 'menu',));?>

</nav>