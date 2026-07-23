<footer>
	<div class="container">
		<div class="footer-grid">
			<div class="footer-brand">
				<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<span class="brand-mark"><i class="fa-solid fa-coins"></i></span>
					<span><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>
				</a>
				<p><?php echo esc_html( get_theme_mod( 'parolls_footer_text', __( '© 2026 Payroll Servicess. All rights reserved.', 'parolls' ) ) ); ?></p>
				<div class="footer-social">
					<?php $facebook = get_theme_mod( 'parolls_social_facebook', '#' ); ?>
					<?php if ( ! empty( $facebook ) ) : ?><a href="<?php echo esc_url( $facebook ); ?>" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a><?php endif; ?>
					<?php $linkedin = get_theme_mod( 'parolls_social_linkedin', '#' ); ?>
					<?php if ( ! empty( $linkedin ) ) : ?><a href="<?php echo esc_url( $linkedin ); ?>" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a><?php endif; ?>
					<?php $instagram = get_theme_mod( 'parolls_social_instagram', '#' ); ?>
					<?php if ( ! empty( $instagram ) ) : ?><a href="<?php echo esc_url( $instagram ); ?>" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a><?php endif; ?>
				</div>
			</div>
			<div>
				<h4><?php esc_html_e( 'Quick Links', 'parolls' ); ?></h4>
				<ul class="footer-links">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'parolls' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About', 'parolls' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact', 'parolls' ); ?></a></li>
				</ul>
			</div>
			<div>
				<h4><?php esc_html_e( 'Services', 'parolls' ); ?></h4>
				<ul class="footer-links">
					<li><a href="#"><?php esc_html_e( 'Bookkeeping', 'parolls' ); ?></a></li>
					<li><a href="#"><?php esc_html_e( 'Payroll', 'parolls' ); ?></a></li>
					<li><a href="#"><?php esc_html_e( 'Tax Support', 'parolls' ); ?></a></li>
				</ul>
			</div>
			<div>
				<h4><?php esc_html_e( 'Contact Us', 'parolls' ); ?></h4>
				<ul class="footer-contact">
					<li><i class="fa-solid fa-phone"></i><span><?php echo esc_html( get_theme_mod( 'parolls_phone', '+1 (555) 123-4567' ) ); ?></span></li>
					<li><i class="fa-solid fa-envelope"></i><span><?php echo esc_html( get_theme_mod( 'parolls_email', get_option( 'admin_email' ) ) ); ?></span></li>
					<li><i class="fa-solid fa-location-dot"></i><span><?php echo esc_html( get_theme_mod( 'parolls_address', '123 Business Avenue, New York, NY' ) ); ?></span></li>
				</ul>
			</div>
		</div>
		<div class="footer-bottom">
			<span><?php echo esc_html( get_theme_mod( 'parolls_footer_text', __( '© 2026 Payroll Servicess. All rights reserved.', 'parolls' ) ) ); ?></span>
			<div>
				<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><?php esc_html_e( 'Privacy Policy', 'parolls' ); ?></a>
				<a href="<?php echo esc_url( home_url( '/terms-and-conditions/' ) ); ?>"><?php esc_html_e( 'Terms', 'parolls' ); ?></a>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
