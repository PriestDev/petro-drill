<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="body-innerwrapper">

<!-- Modern Header -->
<header id="sp-header-wrapper" class="">
    <div class="container">
        <div id="sp-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div style="display: inline-flex; align-items: center; gap: 0.5rem;">
                    <span class="logo"></span>
                    <span style="font-size: 1.25rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em;">
                        <?php bloginfo( 'name' ); ?>
                    </span>
                </div>
            </a>
        </div>

        <div id="sp-top-info">
            <?php
            if ( has_nav_menu( 'social' ) ) {
                wp_nav_menu( array( 
                    'theme_location' => 'social',
                    'container'      => 'div',
                    'menu_class'     => 'social-icons',
                    'depth'          => 1,
                    'fallback_cb'    => false,
                ) );
            }
            ?>
        </div>
    </div>
</header>

<!-- Navigation Menu -->
<section id="sp-menu-wrapper">
    <div class="container">
        <div id="sp-menu">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'sp-menu level-0',
                'container'      => false,
                'depth'          => 2,
                'fallback_cb'    => 'wp_page_menu',
            ) );
            ?>
        </div>

        <div id="sp-search">
            <?php get_search_form(); ?>
        </div>
    </div>
</section>

<!-- Main Content Area -->
<div id="content" class="site-content">
