<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="nav-overlay"></div>
<div class="mobile-nav">
	<div class="mn-top">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<span class="brand-mark"><i class="fa-solid fa-coins"></i></span>
			<span><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>
		</a>
		<button class="mn-close" aria-label="Close menu"><i class="fa-solid fa-xmark"></i></button>
	</div>
	<?php
	wp_nav_menu( array(
		'theme_location' => 'primary',
		'container'      => false,
		'menu_class'     => 'mobile-menu',
		'fallback_cb'    => 'parolls_fallback_menu',
	) );
	?>
</div>
<header class="navbar">
	<div class="container">
		<div class="nav-inner">
			<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<span class="brand-mark"><i class="fa-solid fa-coins"></i></span>
					<span><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>
				<?php endif; ?>
			</a>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'nav-menu',
				'fallback_cb'    => 'parolls_fallback_menu',
			) );
			?>
			<div class="nav-cta">
				<a class="btn btn-outline-dark btn-sm" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get Started', 'parolls' ); ?></a>
				<button class="nav-toggle" aria-label="Toggle menu"><i class="fa-solid fa-bars"></i></button>
			</div>
		</div>
	</div>
</header>
