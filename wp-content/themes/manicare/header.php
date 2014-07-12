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
<meta name="viewport" content="width=device-width">
<title><?php bloginfo('name'); ?></title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="shortcut icon" href="<? bloginfo('template_directory'); ?>/favicon.ico">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52723602-1', 'auto');
  ga('send', 'pageview');

</script>

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header class="site-header" role="banner">
    <div class ="top-nav">
      <a href="/">
        <img src="<? bloginfo('template_directory'); ?>/images/logo.png">
      </a>
      <p class="slogan">
        the manicure to show you care
      </p>
  		<nav role="navigation" class="site-navigation main-navigation show-for-medium-up">
  			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
  		</nav><!-- .site-navigation .main-navigation -->
    </div>
    <div class="sub-nav">
      <p class="reservation-hotline">
        <a href="tel:+1-862-305-0012" class="nav-phone">
          Reservation Hotline: (862) 305-0012
        </a>
      </p>
      <p class="sub-nav-btns">
        <span class="nav-social">
          <span class="show-for-medium-up">Follow us on</span><a href="https://www.facebook.com/manicarenyc" class="show-for-medium-up"><i class="fa fa-facebook-square fa-lg social-icon"></i></a><a href="http://instagram.com/manicareny" class="show-for-medium-up"><i class="fa fa-instagram fa-lg social-icon"></i></a>
        </span>
        <a href="#" class="button alert" id="nav-pay-now">
          Order Now
        </a>
        <div id="nav-paypal">
         <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
         <input type="hidden" name="cmd" value="_s-xclick">
         <input type="hidden" name="hosted_button_id" value="V95GLPDQHS7AU">
         <table>
         <tr><td><input type="hidden" name="on0" value="Select your service">Select your service</td></tr><tr><td><select name="os0">
          <option value="Manicure">Manicure $80.00 USD</option>
          <option value="Pedicure">Pedicure $135.00 USD</option>
          <option value="Manicure and Pedicure">Manicure and Pedicure $165.00 USD</option>
          <option value="Shellac Manicure">Shellac Manicure $90.00 USD</option>
         </select> </td></tr>
         </table>
         <input type="hidden" name="currency_code" value="USD">
         <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
         <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
         </form>
       </div>
      </p>
    </div>
	</header><!-- #masthead .site-header -->

<div id="main" class="site-main">
