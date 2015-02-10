<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >

    <header class="header u-gridContainer">
        <div class="u-gridRow">
            
            <img class="header-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/header.png">
            
            <div class="u-gridCol8 top-slider">
                <div class="Slider">
                    <?php

                        $args = array(
                            'post_type' => 'slides',
                            'posts_per_page'=>999
                        );
                        $slides = new WP_Query( $args );
                        $num = count($slides);
                        $counter = 0;
                        if( $slides->have_posts() ) {
                            while( $slides->have_posts() ) {
                                $slides->the_post();
                                $counter++;
                                ?>
                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                      $image_url = $image[0];
                                ?>
                                
                                <img src="<?php echo $image_url; ?>">

                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
         <img class="sticker" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sticker.png">   
    </header>

        <div class="Bot-Nav">
            <div class="u-gridContainer">
                <div class="Nav-toggle u-cf">
                    <a class="Navigation-menuToggle" id="js-navCollapse">
                        <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                            <use xlink:href="#icon-menu2"></use>
                        </svg>
                    </a>


                     <div class="Mob-contact-ico">
                        <a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:020-6942755">
                            <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                                <use xlink:href="#icon-phone"></use>
                            </svg>
                        </a>
                    
                            <a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:info@kaza-wasserij.nl">
                            <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                                <use xlink:href="#icon-envelope"></use>
                            </svg>
                        </a>
                    </div><!-- header-contact -->
                </div>

                <div class="show-for-small-only"><?php include 'includes/navigation.php'; ?></div>
                
               
            </div>
          </div>

  <div class="wrapper-content"> <!--wrapper content open-->
