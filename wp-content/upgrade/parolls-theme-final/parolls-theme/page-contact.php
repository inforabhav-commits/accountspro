<?php
/*
Template Name: Contact Page
*/
get_header(); ?>
<main id="main" class="site-main">
	<section class="section section-alt">
		<div class="container contact-wrap">
			<div>
				<p class="eyebrow"><i class="fa-solid fa-phone"></i> <?php esc_html_e( 'Contact us', 'parolls' ); ?></p>
				<h1><?php the_title(); ?></h1>
				<p><?php esc_html_e( 'Need support with payroll, bookkeeping, or tax compliance? Reach out and we will help you get started.', 'parolls' ); ?></p>
				<div class="info-card reveal">
					<div class="row"><i class="fa-solid fa-phone"></i><div><b><?php esc_html_e( 'Phone', 'parolls' ); ?></b><span><?php echo esc_html( get_theme_mod( 'parolls_phone', '+1 (555) 123-4567' ) ); ?></span></div></div>
					<div class="row"><i class="fa-solid fa-envelope"></i><div><b><?php esc_html_e( 'Email', 'parolls' ); ?></b><span><?php echo esc_html( get_theme_mod( 'parolls_email', get_option( 'admin_email' ) ) ); ?></span></div></div>
					<div class="row"><i class="fa-solid fa-location-dot"></i><div><b><?php esc_html_e( 'Address', 'parolls' ); ?></b><span><?php echo esc_html( get_theme_mod( 'parolls_address', '123 Business Avenue, New York, NY' ) ); ?></span></div></div>
				</div>
			</div>
			<div>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
				<?php get_template_part( 'template-parts/contact', 'form' ); ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
