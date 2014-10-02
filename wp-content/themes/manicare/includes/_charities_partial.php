<div class="charities">

<? 
  $args = array(
    'posts_per_page'   => -1,
    'offset'           => 0,
    'category'         => '',
    'orderby'          => 'menu_order',
    'order'            => 'ASC',
    'post_type'        => 'charities',
    'post_status'      => 'publish',
    'suppress_filters' => true 
  );

  $charities = get_posts( $args ); 
  foreach ($charities as $charity): ?> 
  <? if ( has_post_thumbnail($charity->ID) ): 
      $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($charity->ID), 'thumbnail' );
      $thumbnail = $thumbnail[0];
    endif ?>

    <div class="charity-post">
      <div class="charity-img">
        <a href="<?= $thumbnail; ?>">
          <img src="<?= $thumbnail; ?>" alt="<?= $charity->post_title; ?> Logo" width="150" height="150" />
        </a>
      </div>
      <div class="charity-description">
        <h4><?= $charity->post_title; ?></h4>
        <p><?= $charity->post_content; ?></p>
      </div>
    </div>

  <? endforeach; ?>

</div>