<?php
/**
 * Payroll Servicess Theme functions and definitions.
 *
 * @package Payroll_Servicess
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/** Theme version constant — bump this on every asset change to bust the cache. */
define( 'PAYROLL_THEME_VERSION', '1.0.1' );
define( 'PAYROLL_THEME_DIR', get_template_directory() );
define( 'PAYROLL_THEME_URI', get_template_directory_uri() );

/**
 * Theme setup: supports, menus, text domain.
 */
function payroll_theme_setup() {

	// Makes the theme translation ready.
	load_theme_textdomain( 'payroll-servicess', PAYROLL_THEME_DIR . '/languages' );

	// Standard WP feature support.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'align-wide' );

	// Custom logo (Appearance → Customize → Site Identity).
	add_theme_support( 'custom-logo', array(
		'height'      => 60,
		'width'       => 200,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'brand', 'brand-mark' ),
	) );

	// Custom header (used only as a data source — this theme renders its own hero markup, see front-page.php).
	add_theme_support( 'custom-header', array(
		'width'       => 1920,
		'height'      => 900,
		'flex-height' => true,
		'flex-width'  => true,
		'video'       => false,
	) );

	// Custom background (Appearance → Customize → Background).
	add_theme_support( 'custom-background', array(
		'default-color' => 'F8FAFC',
	) );

	// Featured images sized for resource/blog cards.
	set_post_thumbnail_size( 600, 340, true );
	add_image_size( 'payroll-card', 600, 340, true );

	// Register navigation menus.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'payroll-servicess' ),
		'legal'   => __( 'Legal Menu (footer)', 'payroll-servicess' ),
	) );
}
add_action( 'after_setup_theme', 'payroll_theme_setup' );

/**
 * This theme's page/post design is authored as raw, hand-built HTML markup
 * (added via the Custom HTML block or the Classic editor's "Text" tab) —
 * this preserves the original site's exact structure. wpautop would inject
 * stray <p> tags into structural <div>s, so it is disabled on the_content().
 * Standard paragraphs typed as normal text still render fine without it.
 */
remove_filter( 'the_content', 'wpautop' );

/**
 * Enqueue theme assets: Google Fonts, Font Awesome, main stylesheet, main.js.
 */
function payroll_enqueue_assets() {

	// Google Fonts (Poppins + Inter), matching the original design.
	wp_enqueue_style(
		'payroll-google-fonts',
		'https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap',
		array(),
		null
	);

	// Font Awesome icon set used throughout the design.
	wp_enqueue_style(
		'font-awesome',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
		array(),
		'6.5.1'
	);

	// Core design system (design tokens, layout, components) — extracted from the original site.
	wp_enqueue_style(
		'payroll-theme-style',
		PAYROLL_THEME_URI . '/assets/css/theme-style.css',
		array( 'font-awesome' ),
		PAYROLL_THEME_VERSION
	);

	// Front-page-only styles (hero collage, Pro Assist cards, typewriter effect).
	if ( is_front_page() ) {
		wp_enqueue_style(
			'payroll-front-page',
			PAYROLL_THEME_URI . '/assets/css/front-page.css',
			array( 'payroll-theme-style' ),
			PAYROLL_THEME_VERSION
		);
	}

	// style.css itself (theme header only — kept enqueued for WP.org theme-check compliance).
	wp_enqueue_style( 'payroll-servicess-style', get_stylesheet_uri(), array(), PAYROLL_THEME_VERSION );

	// Main interactive script (nav, FAQ accordion, reveal animations, counters, ripple, forms).
	wp_enqueue_script(
		'payroll-main',
		PAYROLL_THEME_URI . '/assets/js/main.js',
		array(),
		PAYROLL_THEME_VERSION,
		true
	);

	// Threaded comment reply script where needed.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'payroll_enqueue_assets' );

/**
 * Register widget/sidebar areas: 3 footer columns + a blog/page sidebar.
 */
function payroll_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Footer — Quick Links', 'payroll-servicess' ),
		'id'            => 'footer-quick-links',
		'description'   => __( 'Displayed in the second footer column. Add a Navigation Menu widget here.', 'payroll-servicess' ),
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer — Resources', 'payroll-servicess' ),
		'id'            => 'footer-resources',
		'description'   => __( 'Displayed in the third footer column. Add a Navigation Menu widget here.', 'payroll-servicess' ),
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer — Stay Informed', 'payroll-servicess' ),
		'id'            => 'footer-newsletter',
		'description'   => __( 'Displayed in the fourth footer column, above the contact details.', 'payroll-servicess' ),
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Blog / Page Sidebar', 'payroll-servicess' ),
		'id'            => 'sidebar-main',
		'description'   => __( 'Optional sidebar shown on single blog posts.', 'payroll-servicess' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'payroll_widgets_init' );

/**
 * Additional includes.
 */
require PAYROLL_THEME_DIR . '/inc/customizer.php';
require PAYROLL_THEME_DIR . '/inc/template-tags.php';
require PAYROLL_THEME_DIR . '/inc/nav-walker.php';

/**
 * Smart fallback menu.
 *
 * If the client hasn't created a menu yet under Appearance → Menus, this
 * automatically builds a working navbar from every published Page (with
 * automatic dropdowns for any child pages), so the site never ships with
 * an empty navbar. As soon as a real menu is assigned to the "Primary
 * Menu" location, this fallback stops being used automatically.
 *
 * @param bool $mobile Whether this is being rendered for the mobile nav panel.
 */
function payroll_fallback_menu( $mobile = false ) {

	$pages = get_pages( array(
		'sort_column' => 'menu_order,post_title',
		'parent'      => 0,
	) );

	if ( empty( $pages ) ) {
		echo '<ul class="nav-menu"><li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'payroll-servicess' ) . '</a></li></ul>';
		return;
	}

	echo '<ul class="nav-menu">';

	// Always lead with a Home link back to the front page.
	echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'payroll-servicess' ) . '</a></li>';

	foreach ( $pages as $page ) {
		$children = get_pages( array(
			'sort_column' => 'menu_order,post_title',
			'parent'      => $page->ID,
		) );

		$has_children = ! empty( $children );
		$li_class     = $has_children ? ' class="has-dropdown"' : '';

		echo '<li' . $li_class . '>';
		echo '<a href="' . esc_url( get_permalink( $page ) ) . '">' . esc_html( get_the_title( $page ) );
		if ( $has_children ) {
			echo ' <i class="fa-solid fa-chevron-down" style="font-size:10px;"></i>';
		}
		echo '</a>';

		if ( $has_children ) {
			echo '<ul class="dropdown">';
			foreach ( $children as $child ) {
				echo '<li><a href="' . esc_url( get_permalink( $child ) ) . '">' . esc_html( get_the_title( $child ) ) . '</a></li>';
			}
			echo '</ul>';
		}

		echo '</li>';
	}

	// Resource categories (Blog, Tax Tips, etc.) as a dropdown, only if they contain posts.
	$categories = get_categories( array( 'hide_empty' => true ) );
	if ( ! empty( $categories ) ) {
		echo '<li class="has-dropdown"><a href="#">' . esc_html__( 'Resources', 'payroll-servicess' ) . ' <i class="fa-solid fa-chevron-down" style="font-size:10px;"></i></a>';
		echo '<ul class="dropdown">';
		foreach ( $categories as $cat ) {
			echo '<li><a href="' . esc_url( get_category_link( $cat ) ) . '">' . esc_html( $cat->name ) . '</a></li>';
		}
		echo '</ul></li>';
	}

	echo '</ul>';
}

/**
 * Excerpt length/ellipsis tuned for resource/case-study cards.
 */
add_filter( 'excerpt_length', function( $length ) {
	return 20;
} );
add_filter( 'excerpt_more', function( $more ) {
	return '&hellip;';
} );
