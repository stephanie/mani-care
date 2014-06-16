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
					'include'          => '',
					'exclude'          => '',
					'meta_key'         => '',
					'meta_value'       => '',
					'post_type'        => 'post',
					'post_mime_type'   => '',
					'post_parent'      => '',
					'post_status'      => 'publish',
					'suppress_filters' => true 
				);

				$posts = get_posts( $args ); 
				foreach ($posts as $post): ?> 
					<li class="services-item">
						<div class="item-bg">
							<div class="item-title">
								<h2><?= $post->post_title; ?></h2>
								<div class="hr"></div>
								<h3>$<?= $post->price; ?></h3>
							</div>
							<div class="item-subtitle">
								<p><?= $post->post_content; ?></p>
								<a href="#" class="button order-btn">Order Now</a>
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