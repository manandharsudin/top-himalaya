<?php
/**
 * Top Himalaya functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Top_Himalaya
 */

if ( ! defined( 'TOP_HIMALAYA_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'TOP_HIMALAYA_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function top_himalaya_setup() {
	/*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on Top Himalaya, use a find and replace
    * to change 'top-himalaya' to the name of your theme in all the template files.
    */
	load_theme_textdomain( 'top-himalaya', get_template_directory() . '/languages' );

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
			'primary' => esc_html__( 'Primary', 'top-himalaya' ),
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
			'top_himalaya_custom_background_args',
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
add_action( 'after_setup_theme', 'top_himalaya_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function top_himalaya_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'top_himalaya_content_width', 640 );
}
add_action( 'after_setup_theme', 'top_himalaya_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function top_himalaya_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'top-himalaya' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'top-himalaya' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'top_himalaya_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function top_himalaya_scripts() {
    wp_enqueue_style( 'top-himalaya-google-fonts', top_himalaya_google_fonts_url(), array(), null );
	wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/css/aos.css', array(), TOP_HIMALAYA_VERSION );
    wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/assets/css/icomoon.css', array(), TOP_HIMALAYA_VERSION );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.min.css', array(), TOP_HIMALAYA_VERSION );
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.min.css', array(), TOP_HIMALAYA_VERSION );
    wp_enqueue_style( 'top-himalaya-megamenu', get_template_directory_uri() . '/assets/css/megamenu.css', array(), TOP_HIMALAYA_VERSION );    
    wp_enqueue_style( 'top-himalaya-style', get_template_directory_uri() . '/assets/css/main.css', array(), TOP_HIMALAYA_VERSION );

	wp_enqueue_script( 'tailwind', get_template_directory_uri() . '/assets/js/tailwind.js', array(), TOP_HIMALAYA_VERSION, true );
    wp_enqueue_script( 'tailwind-config', get_template_directory_uri() . '/assets/js/tailwind.config.js', array(), TOP_HIMALAYA_VERSION, true );
	wp_enqueue_script( 'jquery-ui-touch-punch', get_template_directory_uri() . '/assets/js/jquery.ui.touch-punch.min.js', array( 'jquery', 'jquery-ui-core' ), TOP_HIMALAYA_VERSION, true );
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js', array(), TOP_HIMALAYA_VERSION, true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), TOP_HIMALAYA_VERSION, true );
    wp_enqueue_script( 'iscroll', get_template_directory_uri() . '/assets/js/iscroll.min.js', array(), TOP_HIMALAYA_VERSION, true );
    wp_enqueue_script( 'top-himalaya-megamenu', get_template_directory_uri() . '/assets/js/megamenu.js', array(), TOP_HIMALAYA_VERSION, true );
    wp_enqueue_script( 'top-himalaya-main', get_template_directory_uri() . '/assets/js/main.js', array(), TOP_HIMALAYA_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'top_himalaya_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';