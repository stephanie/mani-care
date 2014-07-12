<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package landscape
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<? $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<div class="masthead" style="background-image: url('<?= $url; ?>');">
	</div>
	<div class="page-header <?= $pagename; ?>">
		<h1 class="page-title"><? the_title(); ?></h1>
		<h2 class="page-description"><? the_field('title_subheading'); ?></h2>
	</div>

	<div id="primary" class="content-area">
		<div id="content" class="page-content" role="main">
			<? the_content(); ?>
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>