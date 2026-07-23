<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
$slug = get_post_field( 'post_name', get_queried_object_id() );
$path = get_template_directory() . '/' . $slug . '.php';
if ( file_exists( $path ) ) { include $path; return; }
get_header();
while ( have_posts() ) { the_post(); echo '<main style="max-width:1200px;margin:140px auto 60px;padding:0 20px">'; the_title('<h1>','</h1>'); the_content(); echo '</main>'; }
get_footer();
