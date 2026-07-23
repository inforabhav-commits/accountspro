<?php
/**
 * The footer for the theme.
 *
 * Reused on every page via get_footer(). Two of the four footer columns
 * are real widget areas (Appearance → Widgets) so the client can manage
 * the links without touching code; the rest is Customizer-driven.
 *
 * @package Payroll_Servicess
 */
?>
	<footer>
		<div class="container">
			<div class="footer-grid">

				<div class="footer-brand">
				<div class="brand-mark" style="width: 125px;">
    <img src="https://accountingassistpro.com/wp-content/uploads/2026/07/cropped-cropped-logo.jpeg"
         alt="<?php bloginfo('name'); ?>">
</div>
					<p><?php echo esc_html( payroll_mod( 'payroll_footer_description', get_bloginfo( 'description' ) ) ); ?></p>
					<div class="footer-social">
						<?php payroll_social_icons(); ?>
					</div>
				</div>

				<div>
					<?php if ( is_active_sidebar( 'footer-quick-links' ) ) : ?>
						<?php dynamic_sidebar( 'footer-quick-links' ); ?>
					<?php else : ?>
						<h4><?php esc_html_e( 'Quick Links', 'payroll-servicess' ); ?></h4>
						<ul class="footer-links">
							<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><i class="fa-solid fa-angle-right"></i><?php esc_html_e( 'About Us', 'payroll-servicess' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><i class="fa-solid fa-angle-right"></i><?php esc_html_e( 'Services', 'payroll-servicess' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>"><i class="fa-solid fa-angle-right"></i><?php esc_html_e( 'Case Studies', 'payroll-servicess' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"><i class="fa-solid fa-angle-right"></i><?php esc_html_e( 'FAQs', 'payroll-servicess' ); ?></a></li>
							<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><i class="fa-solid fa-angle-right"></i><?php esc_html_e( 'Contact', 'payroll-servicess' ); ?></a></li>
						</ul>
					
					<?php endif; ?>
				</div>

				<div>
					<?php if ( is_active_sidebar( 'footer-resources' ) ) : ?>
						<?php dynamic_sidebar( 'footer-resources' ); ?>
					<?php else : ?>
						<h4><?php esc_html_e( 'Resources', 'payroll-servicess' ); ?></h4>
						<ul class="footer-links">
							<?php
							$resource_cats = array( 'blog', 'accounting-guides', 'tax-tips', 'payroll-resources', 'business-finance' );
							foreach ( $resource_cats as $slug ) :
								$term = get_category_by_slug( $slug );
								if ( ! $term ) {
									continue;
								}
								?>
								<li><a href="<?php echo esc_url( get_category_link( $term ) ); ?>"><i class="fa-solid fa-angle-right"></i><?php echo esc_html( $term->name ); ?></a></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>

				<div>
					<?php if ( is_active_sidebar( 'footer-newsletter' ) ) : ?>
						<?php dynamic_sidebar( 'footer-newsletter' ); ?>
					<?php else : ?>
						<h4><?php esc_html_e( 'Stay Informed', 'payroll-servicess' ); ?></h4>
						<p style="font-size:14px;color:rgba(255,255,255,0.6);"><?php esc_html_e( 'Payroll deadlines and tax tips, once a month. No spam.', 'payroll-servicess' ); ?></p>
					<?php endif; ?>
				
					<ul class="footer-contact" style="margin-top:24px;">
						<li><i class="fa-solid fa-phone"></i><span><?php echo esc_html( payroll_mod( 'payroll_contact_phone', '(800) 555-0134' ) ); ?></span></li>
						<li><i class="fa-solid fa-envelope"></i><span><?php echo esc_html( payroll_mod( 'payroll_contact_email', 'info@payrollservicess.com' ) ); ?></span></li>
					</ul>
						<form class="newsletter">
						<input type="email" placeholder="<?php esc_attr_e( 'Your email address', 'payroll-servicess' ); ?>" required>
						<button type="submit" aria-label="<?php esc_attr_e( 'Subscribe', 'payroll-servicess' ); ?>"><i class="fa-solid fa-arrow-right"></i></button>
					</form>
				</div>
			</div>

			<div class="footer-bottom">
				<span><?php echo esc_html( payroll_mod( 'payroll_footer_copyright', '© ' . gmdate( 'Y' ) . ' ' . get_bloginfo( 'name' ) . '. All rights reserved.' ) ); ?></span>
				<div>
					<?php
					if ( has_nav_menu( 'legal' ) ) {
						wp_nav_menu( array(
							'theme_location' => 'legal',
							'container'      => false,
							'items_wrap'     => '%3$s',
							'depth'          => 1,
						) );
					} else {
						?>
						<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><?php esc_html_e( 'Privacy Policy', 'payroll-servicess' ); ?></a>
						<a href="<?php echo esc_url( home_url( '/terms-and-conditions/' ) ); ?>"><?php esc_html_e( 'Terms & Conditions', 'payroll-servicess' ); ?></a>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>
