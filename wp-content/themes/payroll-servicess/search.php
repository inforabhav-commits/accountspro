<?php
/**
 * The template for displaying search results.
 *
 * @package Payroll_Servicess
 */

get_header();

$search_query = get_search_query();
?>

<?php
payroll_page_hero(
	__( 'Search', 'payroll-servicess' ),
	'fa-solid fa-magnifying-glass',
	/* translators: %s: search term */
	sprintf( __( 'Search results for: %s', 'payroll-servicess' ), $search_query )
);
payroll_breadcrumb( __( 'Search Results', 'payroll-servicess' ) );
?>

<section class="section">
	<div class="container">
		<?php if ( have_posts() ) : ?>
			<div class="grid grid-3">
				<?php
				while ( have_posts() ) :
					the_post();
					if ( 'post' === get_post_type() ) {
						payroll_resource_card();
					} else {
						?>
						<div class="card reveal in">
							<h3><a href="<?php the_permalink(); ?>" style="color:inherit;"><?php the_title(); ?></a></h3>
							<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
							<a href="<?php the_permalink(); ?>" class="card-link"><?php esc_html_e( 'View page', 'payroll-servicess' ); ?> <i class="fa-solid fa-arrow-right"></i></a>
						</div>
						<?php
					}
				endwhile;
				?>
			</div>
			<div class="mt-40">
				<?php the_posts_pagination(); ?>
			</div>
		<?php else : ?>
			<div class="reveal in" style="max-width:600px;margin:0 auto;text-align:center;">
				<p><?php esc_html_e( "Nothing matched your search. Try different keywords, or get in touch and a specialist will point you in the right direction.", 'payroll-servicess' ); ?></p>
				<?php get_search_form(); ?>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php
payroll_cta_banner();
get_footer();
