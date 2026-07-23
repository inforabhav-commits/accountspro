<?php
/**
 * The template for displaying 404 (Not Found) pages.
 *
 * @package Payroll_Servicess
 */

get_header();
?>

<section class="hero hero-sm">
	<div class="container reveal in">
		<span class="eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;"><i class="fa-solid fa-triangle-exclamation"></i> 404</span>
		<h1><?php esc_html_e( "This page took a wrong turn somewhere", 'payroll-servicess' ); ?></h1>
		<p><?php esc_html_e( "The page you're looking for doesn't exist or may have moved. Let's get you back on track.", 'payroll-servicess' ); ?></p>
	</div>
</section>
<?php payroll_breadcrumb( __( 'Page Not Found', 'payroll-servicess' ) ); ?>

<section class="section">
	<div class="container" style="max-width:640px;text-align:center;">
		<div class="reveal in">
			<div class="form-box">
				<h3><?php esc_html_e( 'Try searching instead', 'payroll-servicess' ); ?></h3>
				<?php get_search_form(); ?>
			</div>
			<div class="hero-actions" style="justify-content:center;margin-top:30px;">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Back to Homepage', 'payroll-servicess' ); ?> <i class="fa-solid fa-arrow-right"></i></a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-dark"><?php esc_html_e( 'Contact Us', 'payroll-servicess' ); ?></a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
