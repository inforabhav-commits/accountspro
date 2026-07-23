<?php
/**
 * The template for displaying comments.
 *
 * @package Payroll_Servicess
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
			printf(
				/* translators: %s: number of comments */
				esc_html( _n( '%s Comment', '%s Comments', get_comments_number(), 'payroll-servicess' ) ),
				esc_html( number_format_i18n( get_comments_number() ) )
			);
			?>
		</h3>

		<ul class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ul',
				'short_ping' => true,
			) );
			?>
		</ul>

		<?php the_comments_navigation(); ?>
	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'payroll-servicess' ); ?></p>
	<?php endif; ?>

	<div class="form-box">
		<?php
		comment_form( array(
			'class_submit' => 'btn btn-primary',
			'title_reply'  => __( 'Leave a Comment', 'payroll-servicess' ),
		) );
		?>
	</div>
</div>
