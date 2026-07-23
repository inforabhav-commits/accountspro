<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function parolls_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 220,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'parolls' ),
	) );
}
add_action( 'after_setup_theme', 'parolls_theme_setup' );

function parolls_theme_enqueue_assets() {
	wp_enqueue_style( 'parolls-theme-style', get_stylesheet_uri(), array(), '1.0.0' );
	wp_enqueue_style( 'parolls-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap', array(), null );
	wp_enqueue_style( 'parolls-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), null );
	wp_enqueue_style( 'parolls-static-style', home_url( '/assets/css/style.css' ), array(), null );
	wp_enqueue_script( 'parolls-static-main', home_url( '/assets/js/main.js' ), array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'parolls_theme_enqueue_assets' );

function parolls_fallback_menu() {
	printf(
		'<ul class="nav-menu"><li><a href="%s">%s</a></li><li><a href="%s">%s</a></li><li><a href="%s">%s</a></li></ul>',
		esc_url( home_url( '/' ) ),
		esc_html__( 'Home', 'parolls' ),
		esc_url( home_url( '/about/' ) ),
		esc_html__( 'About', 'parolls' ),
		esc_url( home_url( '/contact/' ) ),
		esc_html__( 'Contact', 'parolls' )
	);
}

function parolls_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'parolls_theme_options', array(
		'title'    => __( 'Payroll Theme Options', 'parolls' ),
		'priority' => 30,
	) );

	$wp_customize->add_setting( 'parolls_hero_heading', array(
		'default'           => __( 'Payroll & accounting support for growing businesses', 'parolls' ),
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'parolls_hero_heading', array(
		'label'   => __( 'Hero Heading', 'parolls' ),
		'section' => 'parolls_theme_options',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'parolls_hero_description', array(
		'default'           => __( 'We help founders stay compliant, organized, and confident with payroll, bookkeeping, and tax support.', 'parolls' ),
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'parolls_hero_description', array(
		'label'   => __( 'Hero Description', 'parolls' ),
		'section' => 'parolls_theme_options',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'parolls_hero_button_text', array(
		'default'           => __( 'Book a strategy call', 'parolls' ),
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'parolls_hero_button_text', array(
		'label'   => __( 'Hero Button Text', 'parolls' ),
		'section' => 'parolls_theme_options',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'parolls_hero_button_url', array(
		'default'           => home_url( '/contact/' ),
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'parolls_hero_button_url', array(
		'label'   => __( 'Hero Button URL', 'parolls' ),
		'section' => 'parolls_theme_options',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'parolls_phone', array(
		'default'           => __( '+1 (555) 123-4567', 'parolls' ),
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'parolls_phone', array(
		'label'   => __( 'Phone Number', 'parolls' ),
		'section' => 'parolls_theme_options',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'parolls_email', array(
		'default'           => get_option( 'admin_email' ),
		'sanitize_callback' => 'sanitize_email',
	) );
	$wp_customize->add_control( 'parolls_email', array(
		'label'   => __( 'Email', 'parolls' ),
		'section' => 'parolls_theme_options',
		'type'    => 'email',
	) );

	$wp_customize->add_setting( 'parolls_address', array(
		'default'           => __( '123 Business Avenue, New York, NY', 'parolls' ),
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'parolls_address', array(
		'label'   => __( 'Address', 'parolls' ),
		'section' => 'parolls_theme_options',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'parolls_footer_text', array(
		'default'           => __( '© 2026 Payroll Servicess. All rights reserved.', 'parolls' ),
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'parolls_footer_text', array(
		'label'   => __( 'Footer Text', 'parolls' ),
		'section' => 'parolls_theme_options',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'parolls_social_facebook', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'parolls_social_facebook', array(
		'label'   => __( 'Facebook URL', 'parolls' ),
		'section' => 'parolls_theme_options',
		'type'    => 'url',
	) );

	$wp_customize->add_setting( 'parolls_social_linkedin', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'parolls_social_linkedin', array(
		'label'   => __( 'LinkedIn URL', 'parolls' ),
		'section' => 'parolls_theme_options',
		'type'    => 'url',
	) );

	$wp_customize->add_setting( 'parolls_social_instagram', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'parolls_social_instagram', array(
		'label'   => __( 'Instagram URL', 'parolls' ),
		'section' => 'parolls_theme_options',
		'type'    => 'url',
	) );

	$wp_customize->add_setting( 'parolls_primary_color', array(
		'default'           => '#0B3C5D',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'parolls_primary_color', array(
		'label'   => __( 'Primary Color', 'parolls' ),
		'section' => 'parolls_theme_options',
	) ) );

	$wp_customize->add_setting( 'parolls_secondary_color', array(
		'default'           => '#0066CC',
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'parolls_secondary_color', array(
		'label'   => __( 'Secondary Color', 'parolls' ),
		'section' => 'parolls_theme_options',
	) ) );
}
add_action( 'customize_register', 'parolls_customize_register' );

function parolls_dynamic_css() {
	$primary   = sanitize_hex_color( get_theme_mod( 'parolls_primary_color', '#0B3C5D' ) );
	$secondary = sanitize_hex_color( get_theme_mod( 'parolls_secondary_color', '#0066CC' ) );
	$accent    = sanitize_hex_color( get_theme_mod( 'parolls_accent_color', '#00A6A6' ) );

	if ( empty( $primary ) ) {
		$primary = '#0B3C5D';
	}
	if ( empty( $secondary ) ) {
		$secondary = '#0066CC';
	}
	if ( empty( $accent ) ) {
		$accent = '#00A6A6';
	}

	echo '<style>:root{--c-primary:' . esc_attr( $primary ) . ';--c-secondary:' . esc_attr( $secondary ) . ';--c-accent:' . esc_attr( $accent ) . ';}</style>';
}
add_action( 'wp_head', 'parolls_dynamic_css' );

function parolls_handle_contact_form() {
	if ( ! isset( $_POST['parolls_contact_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['parolls_contact_nonce'] ) ), 'parolls_contact_form' ) ) {
		wp_die( __( 'Security check failed.', 'parolls' ) );
	}

	$name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
	$email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$phone   = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$company = isset( $_POST['company'] ) ? sanitize_text_field( wp_unslash( $_POST['company'] ) ) : '';
	$service = isset( $_POST['service'] ) ? sanitize_text_field( wp_unslash( $_POST['service'] ) ) : '';
	$message = isset( $_POST['message'] ) ? wp_kses_post( wp_unslash( $_POST['message'] ) ) : '';

	$to      = sanitize_email( get_theme_mod( 'parolls_email', get_option( 'admin_email' ) ) );
	$subject = sprintf( __( 'New contact form submission from %s', 'parolls' ), $name );
	$body    = sprintf( __( "Name: %s\nEmail: %s\nPhone: %s\nCompany: %s\nService: %s\n\nMessage:\n%s", 'parolls' ), $name, $email, $phone, $company, $service, $message );
	$headers = array( 'Reply-To: ' . $email );

	wp_mail( $to, $subject, $body, $headers );

	wp_safe_redirect( add_query_arg( 'contact', 'sent', home_url( '/contact/' ) ) );
	exit;
}
add_action( 'admin_post_nopriv_parolls_contact_form', 'parolls_handle_contact_form' );
add_action( 'admin_post_parolls_contact_form', 'parolls_handle_contact_form' );
