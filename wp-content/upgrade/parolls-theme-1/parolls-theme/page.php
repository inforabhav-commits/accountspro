<?php get_header(); ?>
<main id="main" class="site-main">
	<section class="section section-alt">
		<div class="container" style="max-width: 860px;">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="section-head left">
					<p class="eyebrow"><i class="fa-solid fa-file-lines"></i> <?php esc_html_e( 'Page', 'parolls' ); ?></p>
					<h1><?php the_title(); ?></h1>
				</div>
				<div class="card reveal">
					<?php the_content(); ?>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</section>
</main>
<?php get_footer(); ?>
