<?php
/**
 * Theme Customizer.
 *
 * Everything the client needs to manage without touching code lives here:
 * header button, contact details, social links, footer text, and the
 * homepage hero content. Reach these under Appearance → Customize.
 *
 * @package Payroll_Servicess
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function payroll_customize_register( $wp_customize ) {

	/* ==========================================================
	 * 1. Header Options — CTA button in the navbar
	 * ========================================================== */
	$wp_customize->add_section( 'payroll_header_options', array(
		'title'    => __( 'Header Options', 'payroll-servicess' ),
		'priority' => 30,
	) );

	$wp_customize->add_setting( 'payroll_header_button_text', array(
		'default'           => __( 'Get a Free Quote', 'payroll-servicess' ),
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'payroll_header_button_text', array(
		'label'   => __( 'Header Button Text', 'payroll-servicess' ),
		'section' => 'payroll_header_options',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'payroll_header_button_url', array(
		'default'           => home_url( '/contact/' ),
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'payroll_header_button_url', array(
		'label'   => __( 'Header Button URL', 'payroll-servicess' ),
		'section' => 'payroll_header_options',
		'type'    => 'url',
	) );

	$wp_customize->add_setting( 'payroll_header_secondary_text', array(
		'default'           => __( 'Live Help', 'payroll-servicess' ),
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'payroll_header_secondary_text', array(
		'label'   => __( 'Header Secondary Button Text', 'payroll-servicess' ),
		'section' => 'payroll_header_options',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'payroll_header_secondary_url', array(
		'default'           => home_url( '/contact/' ),
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'payroll_header_secondary_url', array(
		'label'   => __( 'Header Secondary Button URL', 'payroll-servicess' ),
		'section' => 'payroll_header_options',
		'type'    => 'url',
	) );

	/* ==========================================================
	 * 2. Contact Information
	 * ========================================================== */
	$wp_customize->add_section( 'payroll_contact_info', array(
		'title'    => __( 'Contact Information', 'payroll-servicess' ),
		'priority' => 35,
	) );

	$wp_customize->add_setting( 'payroll_contact_email', array(
		'default'           => 'hello@payrollservicess.com',
		'sanitize_callback' => 'sanitize_email',
	) );
	$wp_customize->add_control( 'payroll_contact_email', array(
		'label'   => __( 'Contact Email', 'payroll-servicess' ),
		'section' => 'payroll_contact_info',
		'type'    => 'email',
	) );

	$wp_customize->add_setting( 'payroll_contact_phone', array(
		'default'           => '(800) 555-0134',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'payroll_contact_phone', array(
		'label'   => __( 'Phone Number', 'payroll-servicess' ),
		'section' => 'payroll_contact_info',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'payroll_contact_address', array(
		'default'           => '480 Ledger Avenue, Suite 300, Austin, TX 78701',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'payroll_contact_address', array(
		'label'   => __( 'Office Address', 'payroll-servicess' ),
		'section' => 'payroll_contact_info',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'payroll_business_hours', array(
		'default'           => 'Mon – Fri, 8:00 AM – 6:00 PM CT',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'payroll_business_hours', array(
		'label'   => __( 'Business Hours', 'payroll-servicess' ),
		'section' => 'payroll_contact_info',
		'type'    => 'text',
	) );

	/* ==========================================================
	 * 3. Social Media Links
	 * ========================================================== */
	$wp_customize->add_section( 'payroll_social_links', array(
		'title'    => __( 'Social Media Links', 'payroll-servicess' ),
		'priority' => 40,
	) );

	$socials = array(
		'facebook'  => 'Facebook URL',
		'linkedin'  => 'LinkedIn URL',
		'twitter'   => 'Twitter / X URL',
		'instagram' => 'Instagram URL',
	);
	foreach ( $socials as $key => $label ) {
		$wp_customize->add_setting( 'payroll_social_' . $key, array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		) );
		$wp_customize->add_control( 'payroll_social_' . $key, array(
			'label'   => __( $label, 'payroll-servicess' ),
			'section' => 'payroll_social_links',
			'type'    => 'url',
		) );
	}

	/* ==========================================================
	 * 4. Footer Options
	 * ========================================================== */
	$wp_customize->add_section( 'payroll_footer_options', array(
		'title'    => __( 'Footer Options', 'payroll-servicess' ),
		'priority' => 45,
	) );

	$wp_customize->add_setting( 'payroll_footer_description', array(
		'default'           => "The back-office finance team for growing businesses — bookkeeping, accounting, payroll, and tax filings handled by people who treat your ledger like it's their own.",
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'payroll_footer_description', array(
		'label'   => __( 'Footer Description', 'payroll-servicess' ),
		'section' => 'payroll_footer_options',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'payroll_footer_copyright', array(
		'default'           => '© ' . gmdate( 'Y' ) . ' Payroll Servicess. All rights reserved.',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'payroll_footer_copyright', array(
		'label'   => __( 'Footer Copyright Text', 'payroll-servicess' ),
		'section' => 'payroll_footer_options',
		'type'    => 'text',
	) );

	/* ==========================================================
	 * 5. Homepage Hero Section
	 * ========================================================== */
	$wp_customize->add_section( 'payroll_hero_section', array(
		'title'       => __( 'Homepage Hero Section', 'payroll-servicess' ),
		'priority'    => 25,
		'description' => __( 'Controls the large banner at the top of the homepage.', 'payroll-servicess' ),
	) );

	$wp_customize->add_setting( 'payroll_hero_heading', array(
		'default'           => 'Pro Assist',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'payroll_hero_heading', array(
		'label'   => __( 'Hero Heading', 'payroll-servicess' ),
		'section' => 'payroll_hero_section',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'payroll_hero_subheading', array(
		'default'           => 'Meet Your New AI-Powered Financial Assistant',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'payroll_hero_subheading', array(
		'label'   => __( 'Hero Subheading (typewriter text)', 'payroll-servicess' ),
		'section' => 'payroll_hero_section',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'payroll_hero_primary_btn_text', array(
		'default'           => 'Get a Free Quote',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'payroll_hero_primary_btn_text', array(
		'label'   => __( 'Hero Primary Button Text', 'payroll-servicess' ),
		'section' => 'payroll_hero_section',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'payroll_hero_primary_btn_url', array(
		'default'           => home_url( '/contact/' ),
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'payroll_hero_primary_btn_url', array(
		'label'   => __( 'Hero Primary Button URL', 'payroll-servicess' ),
		'section' => 'payroll_hero_section',
		'type'    => 'url',
	) );

	$wp_customize->add_setting( 'payroll_hero_secondary_btn_text', array(
		'default'           => 'Contact For Live Help',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'payroll_hero_secondary_btn_text', array(
		'label'   => __( 'Hero Secondary Button Text', 'payroll-servicess' ),
		'section' => 'payroll_hero_section',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'payroll_hero_secondary_btn_url', array(
		'default'           => home_url( '/contact/' ),
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'payroll_hero_secondary_btn_url', array(
		'label'   => __( 'Hero Secondary Button URL', 'payroll-servicess' ),
		'section' => 'payroll_hero_section',
		'type'    => 'url',
	) );

	// Three hero collage images.
	for ( $i = 1; $i <= 3; $i++ ) {
		$wp_customize->add_setting( "payroll_hero_image_{$i}", array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "payroll_hero_image_{$i}", array(
			'label'   => sprintf( __( 'Hero Collage Image %d', 'payroll-servicess' ), $i ),
			'section' => 'payroll_hero_section',
		) ) );
	}

	$wp_customize->add_setting( 'payroll_hero_intro_text', array(
		'default'           => 'Pro Assist provides reliable accounting, bookkeeping, payroll, and tax services with personalized support, helping businesses save time, stay compliant, and grow with confidence.',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'payroll_hero_intro_text', array(
		'label'   => __( 'Intro Strip Text (below hero)', 'payroll-servicess' ),
		'section' => 'payroll_hero_section',
		'type'    => 'textarea',
	) );
}
add_action( 'customize_register', 'payroll_customize_register' );

/**
 * Small helper: fetch a theme mod with a safe default, always escaped by caller.
 *
 * WordPress returns saved empty strings as real Customizer values. That can
 * hide required homepage copy, buttons, and hero images, so blanks fall back.
 */
function payroll_mod( $key, $default = '' ) {
	$value = get_theme_mod( $key, $default );

	if ( is_string( $value ) && '' === trim( $value ) && '' !== $default ) {
		return $default;
	}

	return $value;
}
