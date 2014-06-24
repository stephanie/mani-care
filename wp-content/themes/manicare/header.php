<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package landscape
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8" />
<!-- <meta name="viewport" content="width=device-width"> -->
<title><?php bloginfo('name'); ?></title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="shortcut icon" href="<? bloginfo('template_directory'); ?>/favicon.ico">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header class="site-header" role="banner">
    <div class ="top-nav">
      <img src="<? bloginfo('template_directory'); ?>/images/logo.png">
      <p class="slogan">
        the manicure to show you care
      </p>
  		<nav role="navigation" class="site-navigation main-navigation">
  			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
  		</nav><!-- .site-navigation .main-navigation -->
    </div>
    <div class="sub-nav">
      <p class="reservation-hotline">
        Reservation Hotline: (973) 760-2325
      </p>
      <p class="sub-nav-btns">
        <span class="fb-link">Follow us on Facebook</span>
        <a href="#" class="button alert">Pay Now</a>
      </p>
    </div>
	</header><!-- #masthead .site-header -->

<div id="main" class="site-main">
