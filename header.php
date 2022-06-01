<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <?php // Insert Google Fonts <link> here. Please use &display=swap in your URL! ?>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="top">

    <?php wp_body_open(); ?>

    <?php
        // gets client logo image set in Theme Settings
        // @todo — replace with get_custom_logo
        $logo_id    = fx_get_client_logo_image_id(); 
        $home_url   = get_home_url();
        $phone = get_field('phone', 'option');
        $contact_us = get_field('contact_us', 'option');
        $contact_url = $contact_us['url'] ?? '';
        $contact_title = $contact_us['title'] ?? '';
        $contact_target = $contact_us['target'] ?? '';
        $schedule_button = get_field('schedule_button', 'option');
        $schedule_url = $schedule_button['url'] ?? '';
        $schedule_title = $schedule_button['title'] ?? '';
        $schedule_target = $schedule_button['target'] ?? '';
    ?>

     <header class="page-header clearfix">
        <div class="header-top clearfix hidden-md-down">
            <div class="container clearfix">
                <?php if( $phone ): ?>
                    <div class="header-top-left">
                        <a href="tel:<?php echo $phone; ?>"><i class="icon-phone"></i> <?php echo $phone; ?> </a>
                    </div>
                <?php endif; ?>    
                <div class="header-top-right">
                    <div class="header-secondary-menu">
                        <?php
                            wp_nav_menu(
                                [
                                    'menu_class'        => 'menu-top-navigation',
                                    'depth'             => 1,
                                    'theme_location'    => 'top_menu',
                                ]
                            );
                        ?>
                    </div>
                    <div class="header-search hidden-md-down">
                        <?php get_search_form(); ?>
                        <!--
                        <input type="text" placeholder="Search…">
                        <button type="submit"><i class="icon-search"></i></button>
                    -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container clearfix">
            <div class="header-main clearfix">
                <div class="logo">
                    <a href="<?php echo $home_url; ?>">
                        <?php echo fx_get_image_tag( $logo_id, 'logo' ); ?>
                    </a>
                </div>
                <div class="header-right">
                    <div class="search-icon hidden-sm-up js-search-toggle"><i class="icon-search"></i></div>
                    <div class="header-search hidden-xs-down hidden-lg">
                        <?php get_search_form(); ?>
                        <!--
                        <input type="text" placeholder="Search…">
                        <button type="submit"><i class="icon-search"></i></button>
                    -->
                    </div>
                    <?php if( $schedule_url ): ?>
                        <div class="header-schedule-btn hidden-md-down"><a href="<?php echo $schedule_url; ?>" target="<?php echo $schedule_target; ?>"> Schedule a <span> FREE</span> In-home Estimate </a></div>
                    <?php endif; ?>    
                    <nav class="nav-primary clearfix">
                        <?php
                            wp_nav_menu(
                                [
                                    'menu_class'        => 'menu-main-navigation',
                                    'depth'             => 3,
                                    'theme_location'    => 'main_menu',
                                ]
                            );
                        ?>
                    </nav>

                </div>
            </div>
        </div>

        <div class="header-bottom hidden-xs-down hidden-lg clearfix">
            <div class="container clearfix">
                <?php if( $phone ): ?>
                    <div class="header-call"><a href="tel:<?php echo $phone; ?>"><i class="icon-phone"></i> <?php echo $phone; ?> </a></div>
                <?php endif; ?> 
                <?php if( $schedule_url ): ?>
                    <div class="header-btn"><a href="<?php echo $schedule_url; ?>" target="<?php echo $schedule_target; ?>"><i class="icon-speech-bubble"></i> Schedule a <span> FREE</span> In-home Estimate </a></div>
                <?php endif; ?>     
                <div class="toggle-menu"><div><i class="icon-z-menu"></i><span>MENU</span></div></div>
            </div>
        </div>

        <div class="nav-fixed hidden-sm-up clearfix">
            <?php if( $phone ): ?>
                <div class="fixed-call"><a href="tel:<?php echo $phone; ?>"><i class="icon-phone"></i> Call Now </a></div>
            <?php endif; ?>    
            <?php if( $contact_url && $contact_title ): ?>
                <div class="fixed-btn"><a href="<?php echo $contact_url; ?>" target="<?php echo $contact_target; ?>"><i class="icon-speech-bubble"></i> <?php echo $contact_title; ?></a> </div>
            <?php endif; ?>
            <div class="toggle-menu"><div><i class="icon-z-menu"></i><span>MENU</span></div></div>
        </div>
    </header>

    <div class="mobile-nav">
        <?php
            wp_nav_menu(
                [
                    'menu_class'        => 'menu-main-navigation',
                    'depth'             => 3,
                    'theme_location'    => 'main_menu',
                ]
            );
        ?>
        <div class="nav-fixed clearfix">
            <?php if( $phone ): ?>
                <div class="fixed-call"><a href="tel:<?php echo $phone; ?>"><i class="icon-phone"></i> Call Now </a></div>
            <?php endif; ?> 
            <?php if( $contact_url && $contact_title ): ?>
                <div class="fixed-btn"><a href="<?php echo $contact_url; ?>" target="<?php echo $contact_target; ?>"><i class="icon-speech-bubble"></i> <?php echo $contact_title; ?></a> </div>
            <?php endif; ?>     
            <div class="toggle-menu"><div><i class="close"></i><span>MENU</span></div></div>
        </div>
    </div>


    <div class="mobile-menu__search header-search">
        <div class="container clearfix">
            <div class="search-content">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>

