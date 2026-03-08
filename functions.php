<?php
/**
 * brittmillerspace functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package brittmillerspace
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function brittmillerspace_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on brittmillerspace, use a find and replace
		* to change 'brittmillerspace' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'brittmillerspace', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'brittmillerspace' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'brittmillerspace_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'brittmillerspace_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function brittmillerspace_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'brittmillerspace_content_width', 640 );
}
add_action( 'after_setup_theme', 'brittmillerspace_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function brittmillerspace_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'brittmillerspace' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'brittmillerspace' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'brittmillerspace' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'brittmillerspace' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'brittmillerspace_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function brittmillerspace_scripts() {
	wp_enqueue_style( 'brittmillerspace-style', get_stylesheet_uri(), array(), _S_VERSION );
	//wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
	wp_enqueue_style('googlFonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), null);
	wp_enqueue_style('googlFonts');
	wp_enqueue_style( 'mytheme-custom', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'star-style', get_template_directory_uri() . '/css/stars.css' );
	wp_enqueue_style( 'card-style', get_template_directory_uri() . '/css/cards.css' );
	// wp_enqueue_style( 'jquery-ui-style', 'https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css' );
	if ( is_page('home') ) {
		wp_enqueue_style( 'home-styles', get_stylesheet_directory_uri() . '/css/home.css' );
	}
	
	wp_style_add_data( 'brittmillerspace-style', 'rtl', 'replace' );
	//wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.3.min.js');
	//wp_enqueue_script( 'jqueryUI', 'https://code.jquery.com/ui/1.10.4/jquery-ui.js');
	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
	if ( is_page( 'observation-programs' ) ) {
        wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js',  array( 'jquery' ), '1.0', true );
	}
}
add_action( 'wp_enqueue_scripts', 'brittmillerspace_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}








add_action('admin_init', 'rm34_jetpack_deactivate_modules');
function rm34_jetpack_deactivate_modules() {
    if (class_exists('Jetpack') && Jetpack::is_module_active('notes')) {
        Jetpack::deactivate_module('notes');
    }
}


// Stop image compression
add_filter('jpeg_quality', function($arg){return 100;});