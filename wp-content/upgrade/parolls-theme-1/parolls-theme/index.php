<?php get_header(); ?>
<main id="main" class="site-main">
	<section class="section section-alt">
		<div class="container">
			<div class="section-head left">
				<p class="eyebrow"><i class="fa-solid fa-newspaper"></i> <?php esc_html_e( 'Latest updates', 'parolls' ); ?></p>
				<h1><?php esc_html_e( 'Our latest insights', 'parolls' ); ?></h1>
				<p><?php esc_html_e( 'Browse helpful articles, guides, and resource posts from the Payroll Servicess team.', 'parolls' ); ?></p>
			</div>
			<div class="grid grid-3">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article class="card reveal">
						<div class="card-icon"><i class="fa-solid fa-file-lines"></i></div>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p>
						<a class="card-link" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read more', 'parolls' ); ?> <i class="fa-solid fa-arrow-right"></i></a>
					</article>
				<?php endwhile; else : ?>
					<div class="card reveal">
						<h3><?php esc_html_e( 'No posts found', 'parolls' ); ?></h3>
						<p><?php esc_html_e( 'Please check back soon for new content.', 'parolls' ); ?></p>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
