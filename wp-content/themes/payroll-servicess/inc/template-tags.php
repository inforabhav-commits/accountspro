<?php
/**
 * Reusable template helper functions.
 *
 * @package Payroll_Servicess
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Small page-top hero banner (used on every inner page: About, Services,
 * Contact, FAQ, single posts, archives, search, 404...).
 *
 * @param string $eyebrow      Small label above the heading, e.g. "About Us".
 * @param string $eyebrow_icon Font Awesome icon class, e.g. "fa-solid fa-building".
 * @param string $heading      Main <h1>.
 * @param string $subheading   Supporting paragraph.
 */
function payroll_page_hero( $eyebrow, $eyebrow_icon, $heading, $subheading = '' ) {
	?>
	<section class="hero hero-sm">
		<div class="container reveal in">
			<span class="eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;">
				<i class="<?php echo esc_attr( $eyebrow_icon ); ?>"></i> <?php echo esc_html( $eyebrow ); ?>
			</span>
			<h1><?php echo esc_html( $heading ); ?></h1>
			<?php if ( $subheading ) : ?>
				<p><?php echo esc_html( $subheading ); ?></p>
			<?php endif; ?>
		</div>
	</section>
	<?php
}

/**
 * Breadcrumb bar directly under the hero.
 *
 * @param string $current Label of the current page (last, non-linked crumb).
 */
function payroll_breadcrumb( $current ) {
	?>
	<div class="breadcrumb-bar">
		<div class="container">
			<div class="breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'payroll-servicess' ); ?></a>
				<i class="fa-solid fa-chevron-right"></i>
				<span><?php echo esc_html( $current ); ?></span>
			</div>
		</div>
	</div>
	<?php
}

/**
 * The reusable bottom-of-page call-to-action banner.
 *
 * @param string $heading Banner heading.
 * @param string $text    Supporting text.
 */
function payroll_cta_banner( $heading = '', $text = '' ) {
	if ( ! $heading ) {
		$heading = __( 'Ready to simplify your books and payroll?', 'payroll-servicess' );
	}
	if ( ! $text ) {
		$text = __( 'Talk to a specialist and get a custom quote within one business day — no pressure, no jargon.', 'payroll-servicess' );
	}
	$primary_url = payroll_mod( 'payroll_header_button_url', home_url( '/contact/' ) );
	?>
	<section class="section-tight">
		<div class="container">
			<div class="cta-banner reveal in">
				<h2><?php echo esc_html( $heading ); ?></h2>
				<p><?php echo esc_html( $text ); ?></p>
				<div class="hero-actions">
					<a href="<?php echo esc_url( $primary_url ); ?>" class="btn btn-primary" style="background:#fff;color:var(--c-primary);"><?php esc_html_e( 'Get a Free Quote', 'payroll-servicess' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline"><?php esc_html_e( 'Contact Us', 'payroll-servicess' ); ?></a>
				</div>
			</div>
		</div>
	</section>
	<?php
}

/**
 * Maps a resource/case-study category slug to a Font Awesome icon + tag label,
 * used when a post has no featured image, so cards always look designed.
 */
function payroll_category_icon( $slug ) {
	$map = array(
		'blog'                 => array( 'icon' => 'fa-solid fa-newspaper', 'tag' => 'Blog' ),
		'accounting-guides'    => array( 'icon' => 'fa-solid fa-book', 'tag' => 'Guide' ),
		'tax-tips'             => array( 'icon' => 'fa-solid fa-file-invoice-dollar', 'tag' => 'Tax Tips' ),
		'payroll-resources'    => array( 'icon' => 'fa-solid fa-money-check-dollar', 'tag' => 'Payroll' ),
		'business-finance'     => array( 'icon' => 'fa-solid fa-chart-line', 'tag' => 'Finance' ),
		'case-studies'         => array( 'icon' => 'fa-solid fa-briefcase', 'tag' => 'Case Study' ),
	);
	return isset( $map[ $slug ] ) ? $map[ $slug ] : array( 'icon' => 'fa-solid fa-file-lines', 'tag' => 'Article' );
}

/**
 * A single resource/blog/case-study card, used in archive.php, search.php,
 * and the homepage "Our Blog" section.
 */
function payroll_resource_card() {
	$categories = get_the_category();
	$icon_data  = array( 'icon' => 'fa-solid fa-file-lines', 'tag' => 'Article' );
	if ( ! empty( $categories ) ) {
		$icon_data = payroll_category_icon( $categories[0]->slug );
	}
	?>
	<div class="res-card reveal in">
		<div class="res-thumb">
			<span class="res-tag"><?php echo esc_html( $icon_data['tag'] ); ?></span>
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'payroll-card' ); ?>
			<?php else : ?>
				<i class="<?php echo esc_attr( $icon_data['icon'] ); ?>"></i>
			<?php endif; ?>
		</div>
		<div class="res-body">
			<div class="meta"><?php echo esc_html( get_the_date() ); ?> · <?php echo esc_html( payroll_reading_time() ); ?> min read</div>
			<h3><a href="<?php the_permalink(); ?>" style="color:inherit;"><?php the_title(); ?></a></h3>
			<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18 ) ); ?></p>
			<a href="<?php the_permalink(); ?>" class="card-link"><?php esc_html_e( 'Read more', 'payroll-servicess' ); ?> <i class="fa-solid fa-arrow-right"></i></a>
		</div>
	</div>
	<?php
}

/**
 * Rough reading-time estimate (200 wpm) for the card meta line.
 */
function payroll_reading_time() {
	$content = get_post_field( 'post_content', get_the_ID() );
	$words   = str_word_count( wp_strip_all_tags( $content ) );
	return max( 1, (int) ceil( $words / 200 ) );
}

/**
 * Renders the site brand: the Customizer "Custom Logo" if one has been
 * uploaded (Appearance → Customize → Site Identity), otherwise falls back
 * to the original coin-icon + site-title text mark.
 */
function payroll_render_brand( $linked = true ) {
	if ( has_custom_logo() ) {
		the_custom_logo();
		return;
	}
	$name = get_bloginfo( 'name' );
	if ( $linked ) {
		printf(
			'<a href="%1$s" class="brand"><span class="brand-mark"><i class="fa-solid fa-coins"></i></span>%2$s</a>',
			esc_url( home_url( '/' ) ),
			esc_html( $name )
		);
	} else {
		printf(
			'<span class="brand-mark"><i class="fa-solid fa-coins"></i></span>%s',
			esc_html( $name )
		);
	}
}

/**
 * Renders the social icon row using Customizer values. Only prints icons
 * whose URL has been filled in by the client.
 */
function payroll_social_icons( $style = '' ) {
	$links = array(
		'facebook'  => array( 'icon' => 'fa-brands fa-facebook-f', 'label' => 'Facebook' ),
		'linkedin'  => array( 'icon' => 'fa-brands fa-linkedin-in', 'label' => 'LinkedIn' ),
		'twitter'   => array( 'icon' => 'fa-brands fa-x-twitter', 'label' => 'Twitter/X' ),
		'instagram' => array( 'icon' => 'fa-brands fa-instagram', 'label' => 'Instagram' ),
	);
	foreach ( $links as $key => $data ) {
		$url = payroll_mod( 'payroll_social_' . $key, '' );
		if ( ! $url ) {
			continue;
		}
		printf(
			'<a href="%1$s" aria-label="%2$s"%3$s><i class="%4$s"></i></a>',
			esc_url( $url ),
			esc_attr( $data['label'] ),
			$style ? ' style="' . esc_attr( $style ) . '"' : '',
			esc_attr( $data['icon'] )
		);
	}
}
