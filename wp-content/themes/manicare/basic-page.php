<?php
/*
 * Template Name: Basic page
 *
 * @package landscape
*/

get_header(); ?>

	<? $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<!-- 	<div class="services masthead" style="background-image: url('<?= $url; ?>');">
	</div> -->
	<div class="basic">
		<div class="basic-header">
			<h1 class="basic-title"><? the_title(); ?></h1>
		</div>


		<? if (is_page('services')): ?>

			<? include(TEMPLATEPATH ."/includes/_services_partial.php"); ?>

		<? else: ?>

			<div id="primary" class="content-area">
				<div id="content" class="page-content" role="main">
					<?= apply_filters('the_content', $post->post_content); ?>
				</div>
			</div>

		<? endif; ?>
	</div>

<?php get_footer(); ?>