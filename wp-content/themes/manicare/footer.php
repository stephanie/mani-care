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
      <nav role="navigation" class="footer-links left">
        <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
      </nav>
  		<div class="site-info right">
  			© 2014 ManiCare. All rights reserved.
  		</div><!-- .site-info -->
  	</footer><!-- #colophon .site-footer -->


    <?php wp_footer(); ?>

  </body>
</html>