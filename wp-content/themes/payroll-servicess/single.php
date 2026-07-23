<?php
/**
 * The template for displaying a single post
 * (Blog, Accounting Guides, Tax Tips, Payroll Resources,
 * Business Finance, or Case Studies).
 *
 * @package Payroll_Servicess
 */

get_header();

while ( have_posts() ) :
	the_post();

	$categories = get_the_category();
	$icon_data  = ! empty( $categories ) ? payroll_category_icon( $categories[0]->slug ) : array( 'icon' => 'fa-solid fa-file-lines' );
	$cat_name   = ! empty( $categories ) ? $categories[0]->name : __( 'Article', 'payroll-servicess' );

	payroll_page_hero( $cat_name, $icon_data['icon'], get_the_title() );
	payroll_breadcrumb( get_the_title() );
	?>

	<?php $has_sidebar = is_active_sidebar( 'sidebar-main' ); ?>
	<section class="section">
		<div class="container<?php echo $has_sidebar ? ' split' : ''; ?>">
			<div class="reveal in">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="split-media" style="margin-bottom:30px;">
						<?php the_post_thumbnail( 'large' ); ?>
					</div>
				<?php endif; ?>

				<div class="single-post-content">
					<?php the_content(); ?>
				</div>

				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">',
					'after'  => '</div>',
				) );
				?>

				<?php if ( comments_open() || get_comments_number() ) : ?>
					<div style="margin-top:50px;">
						<?php comments_template(); ?>
					</div>
				<?php endif; ?>
			</div>

			<?php if ( $has_sidebar ) : ?>
				<aside class="reveal in">
					<?php get_sidebar(); ?>
				</aside>
			<?php endif; ?>
		</div>
	</section>

	<?php
	payroll_cta_banner();

endwhile;

get_footer();
