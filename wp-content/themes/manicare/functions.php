<?php
/**
 * manicare functions and definitions
 *
 * @package manicare
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 */
if ( ! isset( $content_width ) )
	$content_width = 1000; /* pixels */

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );


if ( ! function_exists( 'manicare_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 */
function manicare_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on manicare, use a find and replace
	 * to change 'manicare' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'manicare', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'featured-thumbnail', 1440, 500, true );
	add_image_size( 'index-thumbnail', 1000, 200, true );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'manicare' ),
		'footer' => __( 'Footer Menu', 'manicare' )
	) );
	
	add_editor_style();

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside' ) );
}
endif; // manicare_setup
add_action( 'after_setup_theme', 'manicare_setup' );

/**
 * if lt IE 9
 */
function manicare_head(){
?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
}
add_action( 'wp_head', 'manicare_head');

/**
 * Enqueue scripts and styles
 */

function manicare_scripts() {
	// deregister the jquery version bundled with wordpress
	wp_deregister_script( 'jquery' );

	// vendor scripts
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js');
  wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js');
	//custom css & scripts
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	// wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js');
	wp_enqueue_script('manicare', get_template_directory_uri() . '/js/manicare.js');

}
add_action( 'wp_enqueue_scripts', 'manicare_scripts' );

/**
 * Adds custom background support
 */

$args = array(
	'default-color' => 'ffffff',
);
add_theme_support( 'custom-background', $args );


/**
 * Implement the Custom Header feature
 */
require( get_template_directory() . '/inc/custom-header.php' );


//////CUSTOM FUNCTIONS//////

/* Remove Contact Form 7 scripts and styles when shortcode isn't used! */

function cf7unloaded_deregister_contact_form() {
	global $post;
  if ( $post->post_name == 'reserve-now' || $post->post_name == 'contact-us' ) {
    wp_enqueue_scripts('wpcf7_enqueue_styles');
    wp_enqueue_scripts('wpcf7_enqueue_scripts');
  } else {
  	remove_action('wp_enqueue_scripts', 'wpcf7_enqueue_styles');
  	remove_action('wp_enqueue_scripts', 'wpcf7_enqueue_scripts');
  }
}
add_action( 'wp', 'cf7unloaded_deregister_contact_form');

/* Rename posts to services */

function change_post_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Services';
    $submenu['edit.php'][5][0] = 'Services';
    $submenu['edit.php'][10][0] = 'Add Service';
    $submenu['edit.php'][16][0] = 'Services Tags';
    echo '';
}
function change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Services';
    $labels->singular_name = 'Service';
    $labels->add_new = 'Add Service';
    $labels->add_new_item = 'Add Service';
    $labels->edit_item = 'Edit Service';
    $labels->new_item = 'Service';
    $labels->view_item = 'View Service';
    $labels->search_items = 'Search Services';
    $labels->not_found = 'No Services found';
    $labels->not_found_in_trash = 'No Services found in Trash';
    $labels->all_items = 'All Services';
    $labels->menu_name = 'Services';
    $labels->name_admin_bar = 'Services';
}
 
add_action( 'admin_menu', 'change_post_label' );
add_action( 'init', 'change_post_object' );

/* add Charities post type */

function charities_register() {
  $labels = array(
      'name' => _x('Charities', 'post type general name'),
      'singular_name' => _x('Charity', 'post type singular name'),
      'add_new' => _x('Add New', 'rep'),
      'add_new_item' => __('Add New Charity'),
      'edit_item' => __('Edit Charity'),
      'new_item' => __('New Charity'),
      'view_item' => __('View Charity'),
      'search_items' => __('Search Charities'),
      'not_found' =>  __('Nothing found'),
      'not_found_in_trash' => __('Nothing found in Trash'),
      'parent_item_colon' => ''
  );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'query_var' => true,
      'menu_icon' => '',
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'menu_position' => null,
      'supports' => array('title', 'thumbnail', 'editor', 'page-attributes')
  );
  register_post_type( 'charities' , $args );
}
add_action('init', 'charities_register');


?>