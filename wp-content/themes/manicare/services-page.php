<?php
/*
 * Template Name: Services
 *
 * @package landscape
*/

get_header(); ?>

	<? $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<div class="services masthead" style="background-image: url('<?= $url; ?>');">
	</div>
	<div class="services page-header">
		<h1 class="services page-title"><? the_title(); ?></h1>
	</div>

	<div id="primary" class="content-area services">
		<div id="content" class="page-content" role="main">

			<ul class="large-block-grid-3 medium-block-grid-2 small-block-grid-1 services-items">
				<? 
				$args = array(
					'posts_per_page'   => -1,
					'offset'           => 0,
					'category'         => '',
					'orderby'          => 'menu_order',
					'order'            => 'ASC',
					'post_type'        => 'post',
					'post_status'      => 'publish',
					'suppress_filters' => true 
				);

				$posts = get_posts( $args ); 
				foreach ($posts as $post): ?> 
				<? if ( has_post_thumbnail($post->ID) ): 
 						$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
 						$thumbnail = $thumbnail[0];
					endif ?>
					<li class="services-item">
						<div class="item-bg" style="background-image: url(<?= $thumbnail ?>);">
							<div class="item-title">
								<h2><?= $post->post_title; ?></h2>
								<div class="hr"></div>
								<h3><?= $post->price; ?></h3>
							</div>
							<? if ($post->post_content != ""): ?>
								<div class="item-subtitle not-empty">
									<p><?= $post->post_content; ?></p>
							<? else: ?>
								<div class="item-subtitle">
							<? endif; ?>
								<div class="buttons">
									<a href="#" class="button order-btn">Reserve</a>
									<a href="#" class="button alert pay-btn">Pay Now</a>
								</div>
							</div>
						</div>
					</li>
				<? endforeach; ?>
			</ul>
			<? wp_reset_postdata(); ?>

			<div class="services-description">
				<?= apply_filters('the_content', $post->post_content); ?>
			</div>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->


<?php get_footer(); ?>