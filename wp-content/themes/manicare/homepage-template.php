<?php
/*
 * Template Name: Homepage Template
 *
 * @package landscape
*/

get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
  <? $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
    <div class="homepage-opacity">

      <div class="row">
        <div class="small-4 medium-12 medium-centered columns homepage-content">
          <h1 class="homepage-title"><? the_title(); ?></h1>
          <p class="homepage-subtitle"><? the_content(); ?></p>
        </div>
      </div>
<!--       <div class="homepage-content">
        <h1 class="homepage-title"><? the_title(); ?></h1>
        <p class="homepage-subtitle"><? the_content(); ?></p>
      </div> -->
    </div>
		<div class="homepage-full" style="background-image: url('<?= $url; ?>');">
		</div>
	<? endwhile; ?>

<? wp_footer(); ?>