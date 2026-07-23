<?php get_header(); ?>
<main id="main" class="site-main">
	<section class="hero">
		<div class="container hero-grid">
			<div>
				<p class="eyebrow"><i class="fa-solid fa-shield-halved"></i> <?php esc_html_e( 'Trusted back-office support', 'parolls' ); ?></p>
				<h1><?php echo esc_html( get_theme_mod( 'parolls_hero_heading', __( 'Payroll & accounting support for growing businesses', 'parolls' ) ) ); ?></h1>
				<p class="lead"><?php echo esc_html( get_theme_mod( 'parolls_hero_description', __( 'We help founders stay compliant, organized, and confident with payroll, bookkeeping, and tax support.', 'parolls' ) ) ); ?></p>
				<div class="hero-actions">
					<a class="btn btn-primary" href="<?php echo esc_url( get_theme_mod( 'parolls_hero_button_url', home_url( '/contact/' ) ) ); ?>"><?php echo esc_html( get_theme_mod( 'parolls_hero_button_text', __( 'Book a strategy call', 'parolls' ) ) ); ?></a>
					<a class="btn btn-outline" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'Explore services', 'parolls' ); ?></a>
				</div>
				<div class="hero-stats">
					<div class="stat"><b class="counter" data-target="99" data-suffix="%">0%</b><span><?php esc_html_e( 'On-time filings', 'parolls' ); ?></span></div>
					<div class="stat"><b class="counter" data-target="24" data-suffix="/7">0</b><span><?php esc_html_e( 'Support access', 'parolls' ); ?></span></div>
				</div>
			</div>
			<div class="hero-visual" aria-hidden="true">
				<div class="paycard main">
					<div class="pc-top"><span><?php esc_html_e( 'Quarterly summary', 'parolls' ); ?></span><span class="pc-logo"></span></div>
					<div class="pc-amount">$48,220</div>
					<div class="pc-row"><span><?php esc_html_e( 'Payroll processed', 'parolls' ); ?></span><span>1,240</span></div>
					<div class="pc-row"><span><?php esc_html_e( 'Tax filings', 'parolls' ); ?></span><span>18</span></div>
				<div class="pc-badge"><i class="fa-solid fa-circle-check"></i> <?php esc_html_e( 'Live dashboard', 'parolls' ); ?></div>
				</div>
				<div class="floaty f1"><i class="fa-solid fa-chart-line"></i> <?php esc_html_e( 'Accuracy first', 'parolls' ); ?></div>
				<div class="floaty f2"><i class="fa-solid fa-file-contract"></i> <?php esc_html_e( 'Compliance ready', 'parolls' ); ?></div>
				<div class="floaty f3"><i class="fa-solid fa-shield-halved"></i> <?php esc_html_e( 'Secure records', 'parolls' ); ?></div>
				<div class="hero-ring"></div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="section-head">
				<p class="eyebrow"><i class="fa-solid fa-suitcase"></i> <?php esc_html_e( 'Our services', 'parolls' ); ?></p>
				<h2><?php esc_html_e( 'Everything your finance team needs, in one place', 'parolls' ); ?></h2>
				<p><?php esc_html_e( 'From bookkeeping to payroll and tax support, we help growing teams stay compliant and efficient.', 'parolls' ); ?></p>
			</div>
			<div class="grid grid-3">
				<article class="card reveal">
					<div class="card-icon"><i class="fa-solid fa-book-open"></i></div>
					<h3><?php esc_html_e( 'Bookkeeping', 'parolls' ); ?></h3>
					<p><?php esc_html_e( 'Accurate monthly bookkeeping and reporting for founders who need clean financials.', 'parolls' ); ?></p>
				</article>
				<article class="card reveal">
					<div class="card-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
					<h3><?php esc_html_e( 'Payroll', 'parolls' ); ?></h3>
					<p><?php esc_html_e( 'Reliable payroll processing with direct deposit, tax calculations, and filings.', 'parolls' ); ?></p>
				</article>
				<article class="card reveal">
					<div class="card-icon"><i class="fa-solid fa-scale-balanced"></i></div>
					<h3><?php esc_html_e( 'Tax & compliance', 'parolls' ); ?></h3>
					<p><?php esc_html_e( 'Stay ahead of deadlines with proactive guidance and filing support.', 'parolls' ); ?></p>
				</article>
			</div>
		</div>
	</section>

	<section class="section section-alt">
		<div class="container split">
			<div class="reveal">
				<p class="eyebrow"><i class="fa-solid fa-circle-info"></i> <?php esc_html_e( 'Why companies choose us', 'parolls' ); ?></p>
				<h2><?php esc_html_e( 'A dependable finance partner for modern teams', 'parolls' ); ?></h2>
				<p><?php esc_html_e( 'We combine expert support with responsive communication so your internal team can focus on growth.', 'parolls' ); ?></p>
				<ul class="check-list">
					<li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Certified specialists with hands-on experience', 'parolls' ); ?></li>
					<li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Clear monthly reporting and actionable insights', 'parolls' ); ?></li>
					<li><i class="fa-solid fa-check"></i> <?php esc_html_e( 'Fast response times and secure workflows', 'parolls' ); ?></li>
				</ul>
			</div>
			<div class="split-media reveal">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-work.webp' ); ?>" alt="Finance team reviewing reports" loading="lazy">
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
