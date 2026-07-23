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
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="brand-mark"><i class="fa-solid fa-coins"></i></span>Payroll Servicess</a>
		<button class="mn-close" aria-label="Close menu"><i class="fa-solid fa-xmark"></i></button>
	</div>
	<ul>
		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
		<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a></li>
		<li>
			<a href="#" class="mn-parent">Resources <i class="fa-solid fa-chevron-down"></i></a>
			<div class="mobile-accordion">
				<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><i class="fa-solid fa-newspaper"></i> Blog</a>
				<a href="<?php echo esc_url( home_url( '/accounting-guides/' ) ); ?>"><i class="fa-solid fa-book"></i> Accounting Guides</a>
				<a href="<?php echo esc_url( home_url( '/tax-tips/' ) ); ?>"><i class="fa-solid fa-file-invoice-dollar"></i> Tax Tips</a>
				<a href="<?php echo esc_url( home_url( '/payroll-resources/' ) ); ?>"><i class="fa-solid fa-money-check-dollar"></i> Payroll Resources</a>
				<a href="<?php echo esc_url( home_url( '/business-finance/' ) ); ?>"><i class="fa-solid fa-chart-line"></i> Business Finance Articles</a>
				<a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"><i class="fa-solid fa-circle-question"></i> FAQs</a>
				<a href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>"><i class="fa-solid fa-briefcase"></i> Case Studies</a>
			</div>
		</li>
		<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a></li>
	</ul>
	<div class="mn-cta"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Get a Free Quote</a></div>
</div>
<nav class="navbar">
	<div class="container nav-inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand"><span class="brand-mark"><i class="fa-solid fa-coins"></i></span>Payroll Servicess</a>
		<ul class="nav-menu">
			<li class="active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
			<li class="has-dropdown">
				<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services <i class="fa-solid fa-chevron-down" style="font-size:10px;"></i></a>
				<ul class="dropdown">
					<li><a href="#"><i class="fa-solid fa-book-open"></i> Bookkeeping Services</a></li>
					<li><a href="#"><i class="fa-solid fa-calculator"></i> Accounting Services</a></li>
					<li><a href="#"><i class="fa-solid fa-money-check-dollar"></i> Payroll Services</a></li>
					<li><a href="#"><i class="fa-solid fa-file-invoice-dollar"></i> Tax Services</a></li>
					<li><a href="#"><i class="fa-solid fa-receipt"></i> TurboTax</a></li>
					<li><a href="#"><i class="fa-solid fa-cloud"></i> Cloud Hosting Services</a></li>
				</ul>
			</li>
			<li class="has-dropdown">
				<a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">Resources <i class="fa-solid fa-chevron-down" style="font-size:10px;"></i></a>
				<ul class="dropdown">
					<li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><i class="fa-solid fa-newspaper"></i>Blog</a></li>
					<li><a href="<?php echo esc_url( home_url( '/accounting-guides/' ) ); ?>"><i class="fa-solid fa-book"></i>Accounting Guides</a></li>
					<li><a href="<?php echo esc_url( home_url( '/tax-tips/' ) ); ?>"><i class="fa-solid fa-file-invoice-dollar"></i>Tax Tips</a></li>
					<li><a href="<?php echo esc_url( home_url( '/payroll-resources/' ) ); ?>"><i class="fa-solid fa-money-check-dollar"></i>Payroll Resources</a></li>
					<li><a href="<?php echo esc_url( home_url( '/business-finance/' ) ); ?>"><i class="fa-solid fa-chart-line"></i>Business Finance Articles</a></li>
				</ul>
			</li>
			<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a></li>
			<li class="has-dropdown">
				<a href="#">Legal <i class="fa-solid fa-chevron-down" style="font-size:10px;"></i></a>
				<ul class="dropdown">
					<li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><i class="fa-solid fa-user-shield"></i> Privacy Policy</a></li>
					<li><a href="<?php echo esc_url( home_url( '/terms-and-conditions/' ) ); ?>"><i class="fa-solid fa-file-contract"></i> Terms &amp; Conditions</a></li>
					<li><a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>"><i class="fa-solid fa-triangle-exclamation"></i> Disclaimer</a></li>
				</ul>
			</li>
		</ul>
		<div class="nav-cta">
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-dark btn-sm">Live Help</a>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-sm">Get a Free Quote</a>
		</div>
		<button class="nav-toggle" aria-label="Open menu"><i class="fa-solid fa-bars"></i></button>
	</div>
</nav>
