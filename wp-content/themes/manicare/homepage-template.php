<?php
/*
 * Template Name: Homepage Template
 *
 * @package landscape
*/

get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
    <div class="homepage-opacity">
      <div class="homepage-content">
        <h1 class="homepage-title"><? the_title(); ?></h1>
        <p class="homepage-subtitle"><? the_content(); ?></p>
      </div>
    </div>
		<div class="homepage-full">
		</div>
	<? endwhile; ?>