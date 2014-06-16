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
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" conlandscapet="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header class="site-header" role="banner">
    <img src="<? bloginfo('template_directory'); ?>/images/logo.png">
    <p class="slogan">
      the manicure to show you care
    </p>
		<nav role="navigation" class="site-navigation main-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- .site-navigation .main-navigation -->
	</header><!-- #masthead .site-header -->

<div id="main" class="site-main">
