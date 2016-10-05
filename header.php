<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Multitopics
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Mono' rel='stylesheet' type='text/css'>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

<?php wp_head(); ?>

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>                               
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->  

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'multitopics' ); ?></a>

	<!-- HEADER
        ================================================== -->
        <header class="site-header" role="banner">
		
		<!-- NAVBAR                ================================================== -->
                <div class="navbar-wrapper">

                        <div class="navbar navbar-default navbar-fixed-top" role="navigation">

                                <div class="container">
                                        <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                                        <span class="sr-only">Toggle navigation</span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                </button>
						<!-- Logo  -->
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mbhlogo.png" alt="Modern Black Hand"  ></a>
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mbh-word.png" alt="Modern Black Hand"  ></a>

                                        </div><!-- navbar-header -->

                                        <!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->

                                        <?php
                                                wp_nav_menu( array(

                                                        'theme_location'        => 'primary',
                                                        'container'             => 'nav',
                                                        'container_class'       => 'navbar-collapse collapse',
                                                        'menu_class'            => 'nav navbar-nav navbar-right'

                                                ) );
                                        ?>

                                </div><!-- container -->

                        </div><!-- navbar -->

                </div><!-- navbar-wrapper -->

	
	</header>
	


