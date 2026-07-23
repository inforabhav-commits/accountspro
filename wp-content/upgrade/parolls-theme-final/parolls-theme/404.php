<?php get_header(); ?>
<main id="main" class="site-main">
	<section class="section section-alt">
		<div class="container" style="max-width: 760px; text-align: center;">
			<p class="eyebrow"><i class="fa-solid fa-triangle-exclamation"></i> <?php esc_html_e( 'Page not found', 'parolls' ); ?></p>
			<h1><?php esc_html_e( 'We could not find that page.', 'parolls' ); ?></h1>
			<p><?php esc_html_e( 'The page you are looking for may have moved or no longer exists.', 'parolls' ); ?></p>
			<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'parolls' ); ?></a>
		</div>
	</section>
</main>
<?php get_footer(); ?>
