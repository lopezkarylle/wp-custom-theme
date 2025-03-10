<?php
/**
 * CustomTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

if ( ! defined( 'CUSTOMTHEME_VERSION' ) ) {
	define( 'CUSTOMTHEME_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 */
function customtheme_setup() {
	load_theme_textdomain( 'customtheme', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'header-menu' => esc_html__( 'Primary', 'customtheme' ),
		)
	);

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

	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'ffffff',
		)
	);

	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_editor_style( 'assets/css/editor-style.css' );
	add_theme_support( "wp-block-styles" );
}
add_action( 'after_setup_theme', 'customtheme_setup' );

function customtheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'customtheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'customtheme_content_width', 0 );

function customtheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'customtheme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'customtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'customtheme_widgets_init' );

require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

function customtheme_scripts() {
	wp_enqueue_style( 'google-fonts', wptt_get_webfont_url( 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap' ), array(), CUSTOMTHEME_VERSION, 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), CUSTOMTHEME_VERSION, 'all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), CUSTOMTHEME_VERSION, 'all' );
	wp_enqueue_style( 'customtheme-style', get_stylesheet_uri(), array(), CUSTOMTHEME_VERSION, 'all' );
	wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), CUSTOMTHEME_VERSION, 'all' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), CUSTOMTHEME_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), CUSTOMTHEME_VERSION, true );
	wp_enqueue_script( 'customtheme-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), CUSTOMTHEME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'customtheme_scripts' );

require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/custom-styles.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function customtheme_posts_link_attributes() {
	return 'class="btn btn-primary text-uppercase text-black"';
}
add_filter('next_posts_link_attributes', 'customtheme_posts_link_attributes');
add_filter('previous_posts_link_attributes', 'customtheme_posts_link_attributes');
