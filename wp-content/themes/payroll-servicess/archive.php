<?php
/**
 * The template for displaying category archives:
 * Blog, Accounting Guides, Tax Tips, Payroll Resources,
 * Business Finance, and Case Studies all use this template,
 * matching the original site's "resource listing" page design.
 *
 * @package Payroll_Servicess
 */

get_header();

$term          = get_queried_object();
$icon_data     = payroll_category_icon( is_a( $term, 'WP_Term' ) ? $term->slug : '' );
$archive_title = is_a( $term, 'WP_Term' ) ? $term->name : get_the_archive_title();
$description   = is_a( $term, 'WP_Term' ) ? $term->description : '';

payroll_page_hero(
	__( 'Resources', 'payroll-servicess' ),
	$icon_data['icon'],
	wp_strip_all_tags( $archive_title ),
	wp_strip_all_tags( $description )
);
payroll_breadcrumb( wp_strip_all_tags( $archive_title ) );
?>

<section class="section">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<div class="grid grid-3">
				<?php
				while ( have_posts() ) :
					the_post();
					payroll_resource_card();
				endwhile;
				?>
			</div>

			<div class="pagination-wrap mt-40 text-center">
				<?php
				the_posts_pagination( array(
					'prev_text' => __( '&larr; Previous', 'payroll-servicess' ),
					'next_text' => __( 'Next &rarr;', 'payroll-servicess' ),
				) );
				?>
			</div>
		<?php else : ?>
			<p><?php esc_html_e( 'No resources have been published in this category yet — check back soon.', 'payroll-servicess' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
payroll_cta_banner(
	__( 'Want this handled for you instead of just read about?', 'payroll-servicess' ),
	__( 'Let a specialist take bookkeeping, payroll, or tax off your plate this month.', 'payroll-servicess' )
);

get_footer();
