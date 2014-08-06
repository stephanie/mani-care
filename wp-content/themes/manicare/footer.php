<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package landscape
 */
?>

      </div><!-- #main .site-main -->
    </div><!-- #page .hfeed .site -->
  	<footer id="colophon" class="site-footer" role="contentinfo">
      <div class="site-info left">
        © 2014 ManiCare. All rights reserved.
        Designed and coded by <a href="http://www.stephaniesiaw.com">SWYS</a>.
      </div><!-- .site-info -->
      <nav role="navigation" class="footer-links right">
        <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
      </nav>
  	</footer><!-- #colophon .site-footer -->


    <?php wp_footer(); ?>

  </body>
</html>