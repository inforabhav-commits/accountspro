<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
$slug = '';
if ( is_front_page() || is_home() ) {
    $template = 'index.php';
} elseif ( is_page() ) {
    $slug = get_post_field( 'post_name', get_queried_object_id() );
    $template = $slug . '.php';
} else {
    $template = 'index.php';
}
$path = get_template_directory() . '/' . $template;
if ( file_exists( $path ) && basename( $path ) !== 'index.php' ) {
    include $path;
    return;
}
include get_template_directory() . '/home-static.php';
