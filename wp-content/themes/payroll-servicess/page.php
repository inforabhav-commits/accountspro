<?php
/**
 * The template for displaying all static pages
 * (About, Services, Contact, FAQ, Resources, Legal pages, etc.).
 *
 * Each page's content — including its own hero banner, breadcrumb,
 * content sections, and closing CTA banner — is authored directly in
 * the WordPress editor as raw HTML (Custom HTML block or Classic editor),
 * exactly matching the structure of the original static page it replaces.
 * This keeps every page's text 100% editable from wp-admin while
 * preserving the original design pixel-for-pixel.
 *
 * @package Payroll_Servicess
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	while ( have_posts() ) :
		the_post();
		the_content();

		// Optional: link/page break pagination support for very long pages.
		wp_link_pages( array(
			'before' => '<div class="page-links container">',
			'after'  => '</div>',
		) );
	endwhile;
	?>
</main>

<?php get_footer(); ?>
