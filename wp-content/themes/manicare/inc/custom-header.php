<?php
/**
 * Sample implementation of the Custom Header feature
 * http://codex.wordpress.org/Custom_Headers
 *
 * 
 * @package landscape
 */

/**
 * Setup the WordPress core custom header feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for previous versions.
 * Use feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 *
 * @package landscape
 */
$args = array(
  'width'         => 1440,
  'height'        => 500,
  'default-image' => get_template_directory_uri() . '/images/default-header.jpg',
  'header-text'   => false,
  'uploads'       => true,
);
add_theme_support( 'custom-header', $args );



if ( ! function_exists( 'landscape_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see landscape_custom_header_setup().
 *
 * @since landscape 1.0
 */
function landscape_admin_header_image() { ?>
  <div id="headimg">
    <?php
    if ( 'blank' == get_header_textcolor() || '' == get_header_textcolor() )
      $style = ' style="display:none;"';
    else
      $style = ' style="color:#' . get_header_textcolor() . ';"';
    ?>
    <h1><a id="name"<?php echo $style; ?> onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <div id="desc"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></div>
  </div>
<?php }
endif; // landscape_admin_header_image


if ( ! function_exists( 'landscape_custom_header_image' ) ) :
/**
 * Header image styles for custom header and featured images
 *
 * @since landscape 1.0
 */
function landscape_custom_header_image() {

  $header_image = get_header_image();
  global $content_width;
?>

<?php
}
endif; // landscape_custom_header_image

add_action( 'wp_head', 'landscape_custom_header_image' );