<?php
/**
 * The sidebar containing the "Blog / Page Sidebar" widget area.
 *
 * @package Payroll_Servicess
 */

if ( ! is_active_sidebar( 'sidebar-main' ) ) {
	return;
}
?>
<div class="form-box" style="position:sticky;top:100px;">
	<?php dynamic_sidebar( 'sidebar-main' ); ?>
</div>
