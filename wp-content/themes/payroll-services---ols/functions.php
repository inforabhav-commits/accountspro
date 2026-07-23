<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

function payroll_services_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', [ 'height' => 100, 'width' => 320, 'flex-height' => true, 'flex-width' => true ] );
    register_nav_menus( [ 'primary' => __( 'Primary Menu', 'payroll-services' ) ] );
}
add_action( 'after_setup_theme', 'payroll_services_setup' );

function payroll_services_assets() {
    wp_enqueue_style( 'payroll-main', get_template_directory_uri() . '/assets/css/style.css', [], '1.0.0' );
    wp_enqueue_script( 'payroll-main', get_template_directory_uri() . '/assets/js/main.js', [], '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'payroll_services_assets' );

function payroll_services_create_pages() {
    $pages = [
        'home'                    => [ 'title' => 'Home', 'template' => 'default' ],
        'about'                   => [ 'title' => 'About', 'template' => 'page-templates/template-about.php' ],
        'services'                => [ 'title' => 'Services', 'template' => 'page-templates/template-services.php' ],
        'contact'                 => [ 'title' => 'Contact', 'template' => 'page-templates/template-contact.php' ],
        'accounting-services'     => [ 'title' => 'Accounting Services', 'template' => 'page-templates/template-accounting-services.php' ],
        'bookkeeping-services'    => [ 'title' => 'Bookkeeping Services', 'template' => 'page-templates/template-bookkeeping-services.php' ],
        'blog'                    => [ 'title' => 'Blog', 'template' => 'page-templates/template-blog.php' ],
        'faq'                     => [ 'title' => 'FAQ', 'template' => 'page-templates/template-faq.php' ],
        'privacy-policy'          => [ 'title' => 'Privacy Policy', 'template' => 'page-templates/template-privacy-policy.php' ],
        'terms-and-conditions'    => [ 'title' => 'Terms and Conditions', 'template' => 'page-templates/template-terms-and-conditions.php' ],
        'refund-policy'           => [ 'title' => 'Refund Policy', 'template' => 'page-templates/template-refund-policy.php' ],
        'disclaimer'              => [ 'title' => 'Disclaimer', 'template' => 'page-templates/template-disclaimer.php' ],
        'resources'               => [ 'title' => 'Resources', 'template' => 'page-templates/template-resources.php' ],
        'case-studies'            => [ 'title' => 'Case Studies', 'template' => 'page-templates/template-case-studies.php' ],
        'business-finance'        => [ 'title' => 'Business Finance', 'template' => 'page-templates/template-business-finance.php' ],
        'payroll-resources'       => [ 'title' => 'Payroll Resources', 'template' => 'page-templates/template-payroll-resources.php' ],
        'tax-tips'                => [ 'title' => 'Tax Tips', 'template' => 'page-templates/template-tax-tips.php' ],
        'accounting-guides'       => [ 'title' => 'Accounting Guides', 'template' => 'page-templates/template-accounting-guides.php' ],
    ];

    foreach ( $pages as $slug => $data ) {
        $page = get_page_by_path( $slug );
        if ( ! $page ) {
            $page_id = wp_insert_post( [
                'post_title'   => $data['title'],
                'post_name'    => $slug,
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
            ] );
        } else {
            $page_id = $page->ID;
        }

        if ( $page_id && ! is_wp_error( $page_id ) && 'default' !== $data['template'] ) {
            update_post_meta( $page_id, '_wp_page_template', $data['template'] );
        }
    }

    $home = get_page_by_path( 'home' );
    if ( $home ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $home->ID );
    }

    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'payroll_services_create_pages' );

function payroll_services_repair_page_templates() {
    if ( current_user_can( 'manage_options' ) && isset( $_GET['payroll_repair_templates'] ) ) {
        check_admin_referer( 'payroll_repair_templates' );
        payroll_services_create_pages();
        wp_safe_redirect( admin_url( 'themes.php?payroll_templates_repaired=1' ) );
        exit;
    }
}
add_action( 'admin_init', 'payroll_services_repair_page_templates' );

function payroll_services_admin_notice() {
    if ( isset( $_GET['payroll_templates_repaired'] ) ) {
        echo '<div class="notice notice-success is-dismissible"><p>Payroll Services page templates repaired and assigned successfully.</p></div>';
    }
}
add_action( 'admin_notices', 'payroll_services_admin_notice' );
