<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<form class="form-box" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
	<input type="hidden" name="action" value="parolls_contact_form">
	<?php wp_nonce_field( 'parolls_contact_form', 'parolls_contact_nonce' ); ?>
	<div class="form-row">
		<div class="form-field">
			<label for="name"><?php esc_html_e( 'Name', 'parolls' ); ?> *</label>
			<input id="name" name="name" type="text" required>
		</div>
		<div class="form-field">
			<label for="email"><?php esc_html_e( 'Email', 'parolls' ); ?> *</label>
			<input id="email" name="email" type="email" required>
		</div>
	</div>
	<div class="form-row">
		<div class="form-field">
			<label for="phone"><?php esc_html_e( 'Phone', 'parolls' ); ?> *</label>
			<input id="phone" name="phone" type="tel" required>
		</div>
		<div class="form-field">
			<label for="company"><?php esc_html_e( 'Company', 'parolls' ); ?></label>
			<input id="company" name="company" type="text">
		</div>
	</div>
	<div class="form-field">
		<label for="service"><?php esc_html_e( 'Service', 'parolls' ); ?></label>
		<select id="service" name="service">
			<option><?php esc_html_e( 'Bookkeeping', 'parolls' ); ?></option>
			<option><?php esc_html_e( 'Payroll', 'parolls' ); ?></option>
			<option><?php esc_html_e( 'Tax Support', 'parolls' ); ?></option>
		</select>
	</div>
	<div class="form-field">
		<label for="message"><?php esc_html_e( 'Message', 'parolls' ); ?></label>
		<textarea id="message" name="message" rows="6"></textarea>
	</div>
	<button class="btn btn-primary" type="submit"><?php esc_html_e( 'Send message', 'parolls' ); ?></button>
</form>
