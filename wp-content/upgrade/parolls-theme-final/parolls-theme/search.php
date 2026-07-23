<?php get_header(); ?>
<main id="main" class="site-main">
	<section class="section section-alt">
		<div class="container">
			<div class="section-head left">
				<p class="eyebrow"><i class="fa-solid fa-magnifying-glass"></i> <?php esc_html_e( 'Search results', 'parolls' ); ?></p>
				<h1><?php printf( esc_html__( 'Showing results for: %s', 'parolls' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</div>
			<div class="grid grid-3">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article class="card reveal">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p>
					</article>
				<?php endwhile; else : ?>
					<div class="card reveal"><p><?php esc_html_e( 'No results found.', 'parolls' ); ?></p></div>
				<?php endif; ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
