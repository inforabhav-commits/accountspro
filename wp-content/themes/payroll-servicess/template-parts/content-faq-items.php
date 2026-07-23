<?php
/**
 * Reusable FAQ accordion list.
 *
 * Accepts an optional $args['limit'] (int) to show only the first N
 * questions (used in the homepage FAQ preview). The JS accordion behavior
 * lives in assets/js/main.js (.faq-item / .faq-q / .faq-a).
 *
 * @package Payroll_Servicess
 */

$faqs = array(
	array(
		'q' => __( 'What are payroll services?', 'payroll-servicess' ),
		'a' => __( "Payroll services handle calculating employee wages, withholding taxes, processing direct deposits, and filing payroll tax forms — so businesses don't have to manage it manually.", 'payroll-servicess' ),
	),
	array(
		'q' => __( 'What does a payroll company do?', 'payroll-servicess' ),
		'a' => __( 'A payroll company processes employee pay, handles tax withholdings and filings, manages benefits deductions, and ensures compliance with labor laws.', 'payroll-servicess' ),
	),
	array(
		'q' => __( 'How do I choose the right payroll company?', 'payroll-servicess' ),
		'a' => __( 'Look for accurate tax filing, transparent pricing, integration with your accounting software, responsive support, and scalability as your team grows.', 'payroll-servicess' ),
	),
	array(
		'q' => __( 'What do bookkeeping services include?', 'payroll-servicess' ),
		'a' => __( 'Bookkeeping services cover recording daily transactions, reconciling bank accounts, tracking expenses, and maintaining accurate financial records for your business.', 'payroll-servicess' ),
	),
	array(
		'q' => __( 'Do small businesses need bookkeeping services?', 'payroll-servicess' ),
		'a' => __( 'Yes — accurate books help small businesses track cash flow, prepare for tax season, and make informed financial decisions.', 'payroll-servicess' ),
	),
	array(
		'q' => __( "What's the difference between bookkeeping and accounting services?", 'payroll-servicess' ),
		'a' => __( 'Bookkeeping records transactions; accounting services interpret that data by producing financial statements, analysis, and strategic guidance.', 'payroll-servicess' ),
	),
	array(
		'q' => __( 'When should a business hire an accounting service?', 'payroll-servicess' ),
		'a' => __( 'Once financial complexity grows — multiple revenue streams, investors, or tax planning needs — outsourcing accounting saves time and reduces errors.', 'payroll-servicess' ),
	),
	array(
		'q' => __( 'Can tax services help reduce my business taxes?', 'payroll-servicess' ),
		'a' => __( 'Yes — through strategic planning like deductions, entity structuring, and timing of expenses and income, tax professionals can legally lower your tax burden.', 'payroll-servicess' ),
	),
	array(
		'q' => __( 'What are CFO services?', 'payroll-servicess' ),
		'a' => __( 'CFO services (often called "fractional CFO") provide high-level financial strategy, forecasting, cash flow management, and fundraising support without the cost of a full-time CFO.', 'payroll-servicess' ),
	),
	array(
		'q' => __( 'Who needs CFO services?', 'payroll-servicess' ),
		'a' => __( 'Growing businesses needing strategic financial guidance but not yet ready for a full-time executive hire can benefit from CFO services.', 'payroll-servicess' ),
	),
);

if ( ! empty( $args ) && ! empty( $args['limit'] ) ) {
	$faqs = array_slice( $faqs, 0, (int) $args['limit'] );
}

foreach ( $faqs as $faq ) :
	?>
	<div class="faq-item">
		<div class="faq-q"><?php echo esc_html( $faq['q'] ); ?> <i class="fa-solid fa-plus"></i></div>
		<div class="faq-a">
			<div class="faq-a-inner"><?php echo esc_html( $faq['a'] ); ?></div>
		</div>
	</div>
<?php endforeach; ?>
