<?php
/**
 * Reusable contact form markup.
 *
 * The form posts nowhere by default (main.js intercepts submit for a demo
 * "sent" confirmation) — connect it to Contact Form 7, WPForms, or a
 * custom form-handler action as needed for production email delivery.
 *
 * @package Payroll_Servicess
 */
?>
<div class="form-box">
	<form class="contact-form" method="post" action="">
		<div class="form-field">
			<label><?php esc_html_e( 'Name', 'payroll-servicess' ); ?></label>
			<input type="text" name="name" placeholder="Jordan Ellis" required>
		</div>
		<div class="form-field">
			<label><?php esc_html_e( 'Email', 'payroll-servicess' ); ?></label>
			<input type="email" name="email" placeholder="jordan@company.com" required>
		</div>
		<div class="form-field">
			<label><?php esc_html_e( 'Phone', 'payroll-servicess' ); ?></label>
			<input type="tel" name="phone" placeholder="(555) 123-4567" required>
		</div>
		<button type="submit" class="btn btn-primary" style="width:100%;">
			<?php esc_html_e( 'Send Message', 'payroll-servicess' ); ?> <i class="fa-solid fa-paper-plane"></i>
		</button>
	</form>
</div>
