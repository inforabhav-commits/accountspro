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
    wp_enqueue_style( 'payroll-main', get_template_directory_uri() . '/assets/css/style.css', [], '1.0.4' );
    wp_enqueue_script( 'payroll-main', get_template_directory_uri() . '/assets/js/main.js', [], '1.0.4', true );
}
add_action( 'wp_enqueue_scripts', 'payroll_services_assets' );

function payroll_services_disable_customizer_css() {
    remove_action( 'wp_head', 'wp_custom_css_cb', 101 );
}
add_action( 'wp_enqueue_scripts', 'payroll_services_disable_customizer_css', 20 );

function payroll_services_create_pages() {
    $pages = [
        'home'                    => [ 'title' => 'Home', 'template' => 'default' ],
        'about'                   => [ 'title' => 'About', 'template' => 'page-templates/template-about.php' ],
        'services'                => [ 'title' => 'Services', 'template' => 'page-templates/template-services.php' ],
        'contact'                 => [ 'title' => 'Contact', 'template' => 'page-templates/template-contact.php' ],
        'accounting-services'     => [ 'title' => 'Accounting Services', 'template' => 'page-templates/template-accounting-services.php' ],
        'bookkeeping-services'    => [ 'title' => 'Bookkeeping Services', 'template' => 'page-templates/template-bookkeeping-services.php' ],
        'cloud-hosting-services'  => [ 'title' => 'Cloud Hosting Services', 'template' => 'page-templates/template-cloud-hosting-services.php' ],
        'quickbooks'              => [ 'title' => 'QuickBooks', 'template' => 'page-templates/template-quickbooks.php' ],
        'sage'                    => [ 'title' => 'Sage', 'template' => 'page-templates/template-sage.php' ],
        'xero'                    => [ 'title' => 'Xero', 'template' => 'page-templates/template-xero.php' ],
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

function payroll_services_ensure_platform_pages() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    $pages = [
        'cloud-hosting-services' => [ 'title' => 'Cloud Hosting Services', 'template' => 'page-templates/template-cloud-hosting-services.php' ],
        'quickbooks'             => [ 'title' => 'QuickBooks', 'template' => 'page-templates/template-quickbooks.php' ],
        'sage'                   => [ 'title' => 'Sage', 'template' => 'page-templates/template-sage.php' ],
        'xero'                   => [ 'title' => 'Xero', 'template' => 'page-templates/template-xero.php' ],
    ];

    $created = false;

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

            if ( $page_id && ! is_wp_error( $page_id ) ) {
                update_post_meta( $page_id, '_wp_page_template', $data['template'] );
                $created = true;
            }

            continue;
        }

        update_post_meta( $page->ID, '_wp_page_template', $data['template'] );
    }

    if ( $created ) {
        flush_rewrite_rules();
    }
}
add_action( 'admin_init', 'payroll_services_ensure_platform_pages' );

function payroll_services_clean_accounting_process_step( $content ) {
    if ( ! is_page( 'accounting-services' ) ) {
        return $content;
    }

    $content = preg_replace(
        '#\s*<div class="p-step"><div class="p-num">3</div><h4>Managing Daily Accounting</h4><p>Our experts maintain accurate accounting records while tracking receivables, payables, and financial transactions\.</p></div>#',
        '',
        $content
    );

    $content = str_replace(
        '<div class="p-step"><div class="p-num">4</div><h4>Financial Reporting</h4>',
        '<div class="p-step"><div class="p-num">3</div><h4>Financial Reporting</h4>',
        $content
    );

    $content = str_replace(
        '<div class="p-step"><div class="p-num">5</div><h4>Continuous Support</h4>',
        '<div class="p-step"><div class="p-num">4</div><h4>Continuous Support</h4>',
        $content
    );

    return $content;
}
add_filter( 'the_content', 'payroll_services_clean_accounting_process_step', 20 );
