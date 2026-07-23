<?php
/**
 * The main template file — required by every WordPress theme.
 *
 * This is the fallback used any time a more specific template
 * (front-page.php, page.php, single.php, archive.php...) doesn't match.
 *
 * @package Payroll_Servicess
 */

get_header();
?>

<?php payroll_page_hero( __( 'Latest', 'payroll-servicess' ), 'fa-solid fa-layer-group', get_the_title() ? get_the_title() : __( 'Latest Posts', 'payroll-servicess' ) ); ?>
<?php payroll_breadcrumb( __( 'Latest', 'payroll-servicess' ) ); ?>

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
			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<p><?php esc_html_e( 'Nothing found.', 'payroll-servicess' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php payroll_cta_banner(); ?>

<?php get_footer(); ?>
