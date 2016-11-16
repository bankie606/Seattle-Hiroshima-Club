<!DOCTYPE html>
<head>
    <title><?php get_my_title_tag();?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <meta name="description" content="<?php echo get_the_excerpt(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/acad8e30f8.js"></script>
    <link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet"/>
    <!-- WP head start -->
    <?php wp_head(); ?>
    <!-- WP head end -->
    </head>
    <body <?php body_class();?>>
        <div class="search-login">
            <a href="#">LOG IN</a>
            <a href="#">SEARCH </a>
        </div>
        <div class="everything">
        <div class="header-img-nav container-fluid">
        <nav class="navbar shc-main-nav" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="<?php echo get_option('home')?>" class="navbar-left"><img src="http://www.seattle-hc.frcrescioni.net/wp-content/uploads/2016/11/shc_logo.png" class="shc-main-logo" />
                    <div id="shc-name-h4">
                        <h4>Seattle Hiroshima Club</h4>
                        <h4>シアトル広島県人会</h4>
                    </div>
                </a>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
                    <?php
                    wp_nav_menu( array(
                        'menu'              => 'SHC-menu',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    );
                ?>
            
        </div>
        </nav>
        </div>
        <div class="main-content">