<div id="primary" class="content-area">
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

      $services_posts = get_posts( $args ); 
      foreach ($services_posts as $service_post): ?> 
      <? if ( has_post_thumbnail($service_post->ID) ): 
          $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($service_post->ID), 'large' );
          $thumbnail = $thumbnail[0];
        endif ?>
        <li class="services-item">
          <div class="item-bg" style="background-image: url(<?= $thumbnail ?>);">
            <div class="item-title">
              <h2><?= $service_post->post_title; ?></h2>
              <div class="hr"></div>
              <h3><?= $service_post->price; ?></h3>
            </div>
            <? if ($service_post->post_content != ""): ?>
              <div class="item-subtitle not-empty">
                <p><?= $service_post->post_content; ?></p>
            <? else: ?>
              <div class="item-subtitle">
            <? endif; ?>
              <div class="buttons">
                <? $post_title_param = $service_post->post_title; ?>
                <? $post_title_param = rawurlencode($post_title_param) ?>
                <a href="/reserve-now/?service=<?=$post_title_param?>" class="button order-btn">Inquire now</a>
<!--                  <a href="#" class="button alert pay-btn">Pay Now</a>
-->                </div>
            </div>
          </div>
        </li>
      <? endforeach; ?>
    </ul>
    <? wp_reset_postdata(); ?>

    <div class="services-description">
      <?= apply_filters('the_content', $service_post->post_content); ?>
    </div>

  </div><!-- #content .site-content -->
</div><!-- #primary .content-area -->