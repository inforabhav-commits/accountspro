<?php
/**
 * The header for the theme.
 *
 * Reused on every page via get_header(). Contains the mobile nav panel,
 * the main navbar (logo + dynamic menu + CTA buttons), and the opening
 * <html>/<body> tags.
 *
 * @package Payroll_Servicess
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="nav-overlay"></div>

<!-- Mobile Navigation Panel -->
<div class="mobile-nav">
	<div class="mn-top">
		<div class="brand">
			<?php payroll_render_brand( false ); ?>
		</div>
		<button class="mn-close" aria-label="<?php esc_attr_e( 'Close menu', 'payroll-servicess' ); ?>"><i class="fa-solid fa-xmark"></i></button>
	</div>

	<?php
	if ( has_nav_menu( 'primary' ) ) {
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'container'      => false,
			'items_wrap'     => '<ul>%3$s</ul>',
			'walker'         => new Payroll_Nav_Walker(),
		) );
	} else {
		payroll_fallback_menu();
	}
	?>

	<div class="mn-cta">
		<a href="<?php echo esc_url( payroll_mod( 'payroll_header_button_url', home_url( '/contact/' ) ) ); ?>" class="btn btn-primary">
			<?php echo esc_html( payroll_mod( 'payroll_header_button_text', __( 'Get a Free Quote', 'payroll-servicess' ) ) ); ?>
		</a>
	</div>
</div>

<!-- Main Navbar -->
<nav class="navbar">
	<div class="container nav-inner">
		<?php payroll_render_brand( true ); ?>

		<?php
		if ( has_nav_menu( 'primary' ) ) {
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'nav-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'walker'         => new Payroll_Nav_Walker(),
			) );
		} else {
			payroll_fallback_menu();
		}
		?>

		<div class="nav-cta">
			<a href="<?php echo esc_url( payroll_mod( 'payroll_header_secondary_url', home_url( '/contact/' ) ) ); ?>" class="btn btn-outline-dark btn-sm">
				<?php echo esc_html( payroll_mod( 'payroll_header_secondary_text', __( 'Live Help', 'payroll-servicess' ) ) ); ?>
			</a>
			<a href="<?php echo esc_url( payroll_mod( 'payroll_header_button_url', home_url( '/contact/' ) ) ); ?>" class="btn btn-primary btn-sm">
				<?php echo esc_html( payroll_mod( 'payroll_header_button_text', __( 'Get a Free Quote', 'payroll-servicess' ) ) ); ?>
			</a>
		</div>

		<button class="nav-toggle" aria-label="<?php esc_attr_e( 'Open menu', 'payroll-servicess' ); ?>"><i class="fa-solid fa-bars"></i></button>
	</div>
</nav>
