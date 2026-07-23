<?php
/**
 * The front page template.
 *
 * Rebuilt from the original index.html. Hero content, buttons, and images
 * are editable via Appearance → Customize → Homepage Hero Section. The
 * "Our Blog" section automatically pulls the 3 latest posts.
 *
 * @package Payroll_Servicess
 */

get_header();
?>

<section class="hero">
	<div class="hero-ring"></div>
	<div class="container hero-grid">
		<div class="reveal in">
			<h1 style="font-size:74px"><?php echo esc_html( payroll_mod( 'payroll_hero_heading', 'Pro Assist' ) ); ?></h1>
			<p class="lead typewriter"><?php echo esc_html( payroll_mod( 'payroll_hero_subheading', 'Meet Your New AI-Powered Financial Assistant' ) ); ?></p>
			<div class="hero-actions">
				<a href="<?php echo esc_url( payroll_mod( 'payroll_hero_primary_btn_url', home_url( '/contact/' ) ) ); ?>" class="btn btn-primary">
					<?php echo esc_html( payroll_mod( 'payroll_hero_primary_btn_text', 'Get a Free Quote' ) ); ?> <i class="fa-solid fa-arrow-right"></i>
				</a>
				<a href="<?php echo esc_url( payroll_mod( 'payroll_hero_secondary_btn_url', home_url( '/contact/' ) ) ); ?>" class="btn btn-outline">
					<?php echo esc_html( payroll_mod( 'payroll_hero_secondary_btn_text', 'Contact For Live Help' ) ); ?>
				</a>
			</div>
		</div>

		<div class="hero-visual reveal in">
			<?php
			$hero_defaults = array(
				'https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=600&auto=format&fit=crop',
				'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=600&auto=format&fit=crop',
				'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=600&auto=format&fit=crop',
			);
			for ( $i = 1; $i <= 3; $i++ ) :
				$img = payroll_mod( "payroll_hero_image_{$i}", $hero_defaults[ $i - 1 ] );
				?>
				<div class="collage-item ci-<?php echo (int) $i; ?>">
					<img src="<?php echo esc_url( $img ); ?>" alt="<?php esc_attr_e( 'Payroll Servicess', 'payroll-servicess' ); ?>">
				</div>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="logo-strip">
	<div class="container">
		<p style="font-size: 16px; text-align: center; font-weight: 300; color: #111;">
			<?php echo esc_html( payroll_mod( 'payroll_hero_intro_text', 'Pro Assist provides reliable accounting, bookkeeping, payroll, and tax services with personalized support, helping businesses save time, stay compliant, and grow with confidence.' ) ); ?>
		</p>
	</div>
</section>

<section class="pa-section">
	<div class="container">
		<div class="section-head reveal">
			<span class="eyebrow"><i class="fa-solid fa-layer-group"></i> What we offer</span>
			<h2><?php esc_html_e( 'Pro Assist Services', 'payroll-servicess' ); ?></h2>
		</div>

		<div class="pa-grid">
			<?php
			$services = array(
				array( 'class' => 'pa-bookkeeping', 'icon' => 'fa-solid fa-book', 'title' => 'Bookkeeping Services', 'items' => array( 'Daily Bookkeeping', 'Catch-Up Bookkeeping', 'Bank Reconciliation', 'General Ledger Management' ) ),
				array( 'class' => 'pa-accounting', 'icon' => 'fa-solid fa-chart-pie', 'title' => 'Accounting Services', 'items' => array( 'Financial Statements', 'Accounts Payable', 'Accounts Receivable', 'Month-End & Year-End Closing' ) ),
				array( 'class' => 'pa-payroll', 'icon' => 'fa-solid fa-money-check-dollar', 'title' => 'Payroll Services', 'items' => array( 'Payroll Processing', 'Direct Deposit', 'Payroll Tax Filing', 'Employee Payslips' ) ),
				array( 'class' => 'pa-tax', 'icon' => 'fa-solid fa-file-invoice-dollar', 'title' => 'Tax Services', 'items' => array( 'Business Tax Preparation', 'Individual Tax Returns', 'Tax Planning', 'Sales Tax Filing' ) ),
				array( 'class' => 'pa-cloud', 'icon' => 'fa-solid fa-cloud', 'title' => 'Cloud Hosting Services', 'items' => array( 'Cloud Server Hosting', 'Managed Cloud Infrastructure', 'Virtual Desktop Hosting (VDI)', 'Secure Cloud Backup & Disaster Recovery' ) ),
			);
			foreach ( $services as $service ) :
				?>
				<div class="pa-card reveal in">
					<div class="pa-head <?php echo esc_attr( $service['class'] ); ?>">
						<div class="pa-icon"><i class="<?php echo esc_attr( $service['icon'] ); ?>"></i></div>
						<h3><?php echo esc_html( $service['title'] ); ?></h3>
					</div>
					<div class="pa-body">
						<ul>
							<?php foreach ( $service['items'] as $item ) : ?>
								<li><span class="li-dot"><i class="fa-solid fa-check"></i></span> <?php echo esc_html( $item ); ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section-alt">
	<div class="container">
		<div class="section-head reveal in">
			<span class="eyebrow"><i class="fa-solid fa-industry"></i> Industries</span>
			<h2><?php esc_html_e( 'Industries we serve', 'payroll-servicess' ); ?></h2>
		</div>
		<div style="display:flex;flex-wrap:wrap;gap:14px;justify-content:center;" class="reveal in">
			<?php
			$industries = array(
				array( 'fa-solid fa-store', 'Small Businesses' ),
				array( 'fa-solid fa-rocket', 'Startups' ),
				array( 'fa-solid fa-hospital', 'Healthcare' ),
				array( 'fa-solid fa-house', 'Real Estate' ),
				array( 'fa-solid fa-helmet-safety', 'Construction' ),
				array( 'fa-solid fa-bag-shopping', 'Retail' ),
				array( 'fa-solid fa-cart-shopping', 'E-commerce' ),
				array( 'fa-solid fa-industry', 'Manufacturing' ),
				array( 'fa-solid fa-briefcase', 'Professional Services' ),
				array( 'fa-solid fa-hand-holding-heart', 'Nonprofits' ),
			);
			foreach ( $industries as $ind ) :
				?>
				<span class="tag-pill"><i class="<?php echo esc_attr( $ind[0] ); ?>"></i> <?php echo esc_html( $ind[1] ); ?></span>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section-alt">
	<div class="container">
		<div class="section-head reveal">
			<span class="eyebrow"><i class="fa-solid fa-plug"></i> Platforms</span>
			<h2><?php esc_html_e( 'Solutions for every major accounting platform', 'payroll-servicess' ); ?></h2>
			<p><?php esc_html_e( 'From setup to daily support, our specialists keep your systems running efficiently and securely.', 'payroll-servicess' ); ?></p>
		</div>
		<div class="grid grid-3">
			<div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-q"></i></div><div><h3>QuickBooks</h3><p><?php esc_html_e( 'Online, Desktop, Enterprise, Payroll.', 'payroll-servicess' ); ?></p></div></div>
			<div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-leaf"></i></div><div><h3>Sage</h3><p><?php esc_html_e( 'Sage 50, Sage 100, Sage 300, Intacct.', 'payroll-servicess' ); ?></p></div></div>
			<div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-x"></i></div><div><h3>Xero</h3><p><?php esc_html_e( 'Setup, migration, integrations & training.', 'payroll-servicess' ); ?></p></div></div>
			<div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-cubes"></i></div><div><h3>NetSuite</h3><p><?php esc_html_e( 'ERP implementation, support & reporting.', 'payroll-servicess' ); ?></p></div></div>
			<div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-receipt"></i></div><div><h3>FreshBooks</h3><p><?php esc_html_e( 'Invoicing, reporting & subscription setup.', 'payroll-servicess' ); ?></p></div></div>
			<div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-water"></i></div><div><h3>Wave & Others</h3><p><?php esc_html_e( 'Zoho Books, Wave, Gusto & more.', 'payroll-servicess' ); ?></p></div></div>
		</div>
	</div>
</section>

<section class="section section-alt">
	<div class="container">
		<div class="section-head reveal">
			<span class="eyebrow"><i class="fa-solid fa-route"></i> Our process</span>
			<h2><?php esc_html_e( 'A Simple, Streamlined Process for Better Business Solutions', 'payroll-servicess' ); ?></h2>
			<p><?php esc_html_e( 'From consultation to completion, we ensure every project is handled with precision, transparency, and efficiency.', 'payroll-servicess' ); ?></p>
		</div>
		<div class="process-wrap reveal">
			<div class="process-line"><div class="process-line-fill"></div></div>
			<div class="process-steps">
				<div class="p-step"><div class="p-num">1</div><h4><?php esc_html_e( 'Share Your Requirements', 'payroll-servicess' ); ?></h4><p><?php esc_html_e( 'Tell us about your business challenges and objectives. Our team takes the time to understand your unique needs before recommending the right solution.', 'payroll-servicess' ); ?></p></div>
				<div class="p-step"><div class="p-num">2</div><h4><?php esc_html_e( 'Solution Planning', 'payroll-servicess' ); ?></h4><p><?php esc_html_e( 'Our specialists evaluate your requirements and develop a customized strategy designed to deliver secure, accurate, and cost-effective results.', 'payroll-servicess' ); ?></p></div>
				<div class="p-step"><div class="p-num">3</div><h4><?php esc_html_e( 'Implementation', 'payroll-servicess' ); ?></h4><p><?php esc_html_e( 'Once approved, we begin the project using proven processes and industry best practices to ensure timely and seamless execution.', 'payroll-servicess' ); ?></p></div>
				<div class="p-step"><div class="p-num">4</div><h4><?php esc_html_e( 'Ongoing Support & Success', 'payroll-servicess' ); ?></h4><p><?php esc_html_e( "Our commitment doesn't end with delivery. We provide continuous support, regular updates, and expert assistance to keep your business running smoothly.", 'payroll-servicess' ); ?></p></div>
			</div>
		</div>
	</div>
</section>

<section class="section section-alt" style="background:#f8fafc;">
	<div class="container">
		<div class="section-head reveal">
			<span class="eyebrow"><i class="fa-solid fa-lightbulb"></i> Our Blog</span>
			<h2><?php esc_html_e( 'Payroll and accounting insight, plainly explained', 'payroll-servicess' ); ?></h2>
		</div>
		<div class="grid grid-3">
			<?php
			$latest_posts = new WP_Query( array(
				'post_type'      => 'post',
				'posts_per_page' => 3,
				'ignore_sticky_posts' => true,
			) );
			if ( $latest_posts->have_posts() ) :
				while ( $latest_posts->have_posts() ) :
					$latest_posts->the_post();
					payroll_resource_card();
				endwhile;
				wp_reset_postdata();
			else :
				?>
				<p><?php esc_html_e( 'Publish your first post to see it featured here.', 'payroll-servicess' ); ?></p>
				<?php
			endif;
			?>
		</div>
	</div>
</section>

<section class="section" style="background:#C2F5FF;">
	<div class="container">
		<div class="section-head reveal">
			<span class="eyebrow"><i class="fa-solid fa-quote-left"></i> What Our Clients Say</span>
			<h2><?php esc_html_e( 'Trusted by Businesses. Valued by Clients.', 'payroll-servicess' ); ?></h2>
		</div>
		<div class="grid grid-3">
			<?php
			$testimonials = array(
				array( 'quote' => 'The team made our accounting process effortless. Their accuracy and timely support have helped us keep our finances organized and make better business decisions.', 'initials' => 'LH', 'name' => 'Laurence Herrera', 'role' => 'Chief Innovation Officer' ),
				array( 'quote' => 'Managing payroll used to be stressful, but their experts made it seamless. Employees are paid accurately and on time, with no more compliance worries.', 'initials' => 'MA', 'name' => 'Maeva Ahearn', 'role' => 'Founder & CEO' ),
				array( 'quote' => 'Their tax professionals guided us through every step with confidence, helped maximize our savings, and made the entire tax season stress-free.', 'initials' => 'SL', 'name' => 'Stefanos Loukanis', 'role' => 'Director of Digital Strategy' ),
			);
			foreach ( $testimonials as $t ) :
				?>
				<div class="t-card reveal">
					<div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
					<p class="t-quote">&ldquo;<?php echo esc_html( $t['quote'] ); ?>&rdquo;</p>
					<div class="t-person"><div class="t-avatar"><?php echo esc_html( $t['initials'] ); ?></div><div><b><?php echo esc_html( $t['name'] ); ?></b><span><?php echo esc_html( $t['role'] ); ?></span></div></div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section" style="background-color:#fff;">
	<div class="container split">
		<div class="reveal">
			<span class="eyebrow"><i class="fa-solid fa-comments"></i> <?php esc_html_e( 'Get in touch', 'payroll-servicess' ); ?></span>
			<h2><?php esc_html_e( "Let's talk about your books.", 'payroll-servicess' ); ?></h2>
			<h3 style="color:var(--c-secondary); font-size:18px; margin-bottom:16px;"><?php bloginfo( 'name' ); ?></h3>
			<p><?php esc_html_e( 'Tell us a bit about your business and a specialist will reach out within one business day.', 'payroll-servicess' ); ?></p>
		</div>
		<div class="reveal">
			<?php get_template_part( 'template-parts/content', 'contact-form' ); ?>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-head reveal">
			<span class="eyebrow"><i class="fa-solid fa-circle-question"></i> FAQ</span>
			<h2><?php esc_html_e( 'Frequently Asked Questions', 'payroll-servicess' ); ?></h2>
		</div>
		<div style="max-width:760px;margin:0 auto;" class="reveal">
			<?php get_template_part( 'template-parts/content', 'faq-items' ); ?>
		</div>
		<div class="text-center mt-40 reveal">
			<a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="btn btn-outline-dark">
				<?php esc_html_e( 'View All FAQs', 'payroll-servicess' ); ?> <i class="fa-solid fa-arrow-right"></i>
			</a>
		</div>
	</div>
</section>

<?php payroll_cta_banner(); ?>

<?php get_footer(); ?>
