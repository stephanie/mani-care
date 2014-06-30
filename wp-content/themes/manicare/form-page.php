<?php
/*
 * Template Name: Forms
 *
 * @package landscape
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div id="primary" class="content-area forms">
		<div id="content" class="page-content" role="main">

			<? if (is_page('reserve-now')): ?>
				
				<div class="row">

					<div class="large-6 large-centered medium-8 medium-centered columns form-left">
						<h2>Make a booking inquiry</h2>
<!-- 						<span class="or-form-divider show-for-large-up">or</span>
 -->						<hr>

						<div class="form">
							<div id="select_service">

							 <label>Desired service</label>
							    <select id="select-service-item" name="select-service-item">
							      <option value="No service selected" selected>-Please select a service-</option>
							      <? $args = array(
	     						    'posts_per_page'   => -1,
	     	              'orderby'          => 'menu_order',
	     	              'order'            => 'DESC',
	     	              'post_type'        => 'post',
	     	              'post_status'      => 'publish',
	     						  );
	     						  $service_posts = get_posts($args);
	     						  foreach ($service_posts as $service_post):
	     						    $post_title = $service_post->post_title; ?>
	     						  	<option value="<?= $post_title; ?>" id="service-item"><?= $post_title; ?></option>
	     						  <? endforeach; ?>
							    </select>
							  </div>

							<?= do_shortcode("[contact-form-7 id='63' title='Make an inquiry']"); ?>
						</div>
					</div>
<!-- 
					<div class="large-6 columns form-right">
						<h2>Purchase a ManiCare gift voucher: <span class="red">Step 1</span></h2>
						<hr>
						<?= do_shortcode("[contact-form-7 id='67' title='Purchase gift voucher']"); ?>
					</div>
 -->
				</div>

			<? else: ?>
				<div class="gift-purchase-page">
					<div class="row">
						<h2>Purchase a ManiCare gift voucher: <span class="red">Step 2</span></h2>
						<hr>
						<div class="gift-purchase-content">
							<? the_content(); ?>
						</div>
					</div>
				</div>
			<? endif; ?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>