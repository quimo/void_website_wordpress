<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zencom
 */

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta http-equiv="x-ua-compatible" content="ie=edge">    
    <base href="<?php echo get_site_url().'/' ?>">
    <meta name="author" content="<?php echo get_bloginfo() ?>">    
    <!-- Facebook START -->
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/images/logo_facebook.jpg">
    <meta property="og:title" content="<?php echo get_the_title() ?>">
    <meta property="og:url" content="<?php echo zencom_get_page_url() ?>">
    <meta property="og:locale" content="<?php echo get_bloginfo('language') ?>" >
    <meta property="og:site_name" content="<?php echo get_bloginfo() ?>">
    <meta property="og:type" content="website">
    <meta property="og:description" content="<?php echo get_bloginfo('description','display') ?>">
    <!-- Facebook END -->    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- icone create con http://iconifier.net/ -->
    <link rel="icon" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!--[if it IE 8]>
        <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico">
    <![endif]-->    
    <!-- Realizzato da Zenzero Comunicazione, Parma, <?php echo get_theme_mod( 'zencom_theme_month_option', 'mm'); ?>/<?php echo get_theme_mod( 'zencom_theme_year_option', 'YYYY'); ?> --> 
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <noscript>Per accedere alla completa funzionalità di questo sito è necessario attivare javascript.</noscript>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    
    
    
	   <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'zencom' ); ?></a>
    
        <header id="masthead" class="site-header" role="banner">
            <div class="wrapper">
                <nav class="header__topmenu">
                    <ul class="menu">
                        <li class="first"><a href="#">Azienda</a></li>
                        <li><a href="#">Contatti</a></li>
                        <li><a href="#">News</a></li>
                        <li class="last"><a href="#">Blog</a></li>
                    </ul>
                </nav>
                <div id="logo"><a href="#" title="Home"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt=""></a></div>
                <div id="searchbox" class="searchbox">
                    <form>
                        <input type="search" id="keywords" class="keywords" placeholder="Cerca">
                        <input type="submit" id="search" value="Cerca">
                    </form>
                </div><!--searchbox-->
                <div id="togglemenu"><i class="fa fa-bars"></i></div>
                <nav class="header__mainmenu">
                    <ul class="menu">
                        <li class="first"><a href="#">Uno</a></li>
                        <li><a href="#">Seconda voce di menu che sul 320 va su due righe</a></li>
                        <li class="active"><a href="#">Terza voce di menu che sul 320 va su due righe</a>
                            <ul class="submenu">
                                <li class="first"><a href="#">Tre Uno</a>
                                    <ul class="submenu">
                                        <li class="first"><a href="#">Tre Uno Uno</a>
                                        <li><a href="#">Tre Uno Due</a>
                                    </ul>
                                </li>
                                <li class="active"><a href="#">Tre Due voce di menu che sul 320 va su due righe</a></li>
                                <li><a href="#">Tre Tre</a></li>
                                <li class="last"><a href="#">Tre Quattro</a></li>
                            </ul>
                        </li>
                        <li class="last"><a href="#">Quattro</a></li>
                    </ul>
                </nav><!--mainmenu-->
            </div><!--wrapper-->	
        </header><!--header-->
    
    
       
    
    
    
    
    
    
    
    

    
    <!-- TO DO - MENU WORDPRESS
	

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'zencom' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
	
    -->
	