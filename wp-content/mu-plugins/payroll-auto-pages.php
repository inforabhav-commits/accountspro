<?php
/**
 * Must-Use Plugin: Payroll Servicess — Auto Page Creator
 *
 * Drop this single file into wp-content/mu-plugins/ (create the folder if
 * it doesn't exist). It runs automatically — no activation needed — and
 * creates all 11 site pages with their full original content if a page
 * with that slug doesn't already exist. Existing pages are left untouched
 * (never overwritten), so it's safe to leave this file in place permanently
 * or delete it after the pages are created.
 *
 * @package Payroll_Servicess
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'payroll_auto_create_pages', 20 );

function payroll_auto_create_pages() {

	// Only run for logged-in admins to avoid any front-end performance impact,
	// and only once — it checks for existing slugs every time but that's cheap.
	if ( ! is_admin() && ! ( defined( 'DOING_CRON' ) && DOING_CRON ) ) {
		return;
	}

	$pages = payroll_auto_pages_data();

	foreach ( $pages as $slug => $data ) {
		$existing = get_page_by_path( $slug, OBJECT, 'page' );
		if ( $existing ) {
			continue; // Never overwrite an existing page.
		}

		wp_insert_post( array(
			'post_title'     => $data['title'],
			'post_name'      => $slug,
			'post_content'   => $data['content'],
			'post_status'    => 'publish',
			'post_type'      => 'page',
			'comment_status' => 'closed',
			'ping_status'    => 'closed',
		) );
	}
}

function payroll_auto_pages_data() {
	$content_about = <<<'PGCONTENT'

<section class="hero hero-sm">
  <div class="container reveal in">
    <span class="eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;"><i class="fa-solid fa-building"></i> About Us</span>
    <h1>Built by accountants who got tired of watching businesses drown in spreadsheets</h1>
    <p>Twelve years, 480+ clients, and one principle that hasn't changed: accurate numbers, delivered on time, explained in plain English.</p>
  </div>
</section>
<div class="breadcrumb-bar">
  <div class="container">
    <div class="breadcrumb">
      <a href="/">Home</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>About Us</span>
    </div>
  </div>
</div>

<section class="section">
  <div class="container split">
    <div class="split-media reveal">
      <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=1000&auto=format&fit=crop" alt="Founding team of accountants planning at a whiteboard">
      <div class="stat-chip"><div class="card-icon" style="margin-bottom:0;"><i class="fa-solid fa-users"></i></div><div><div class="num">480+</div><div class="lbl">Businesses served</div></div></div>
    </div>
    <div class="reveal">
      <span class="eyebrow"><i class="fa-solid fa-flag"></i> Our story</span>
      <h2>Founded in 2013, on a simple frustration</h2>
      <p>Payroll Servicess was founded by a small group of accountants and payroll specialists who kept seeing the same problem: growing businesses spending nights and weekends fighting spreadsheets instead of running their companies.</p>
      <p>We started as a two-person bookkeeping shop working out of a shared office. Today we support hundreds of small and mid-sized businesses across the country — from single-location retailers to multi-state contractors — without losing the personal, plain-English approach we started with.</p>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-compass"></i> What drives us</span>
      <h2>Mission, vision, and the values behind every ledger</h2>
    </div>
    <div class="grid grid-3">
      <div class="card value-card reveal"><div class="card-icon"><i class="fa-solid fa-bullseye"></i></div><h3>Our Mission</h3><p>To give growing businesses a finance back-office that's accurate, on time, and easy to understand — so owners can spend their hours building, not reconciling.</p></div>
      <div class="card value-card reveal"><div class="card-icon"><i class="fa-solid fa-eye"></i></div><h3>Our Vision</h3><p>A future where every small and mid-sized business has access to the same financial clarity and discipline as a company ten times its size.</p></div>
      <div class="card value-card reveal"><div class="card-icon"><i class="fa-solid fa-handshake"></i></div><h3>Our Values</h3><p>Accuracy without excuses, transparent pricing, and a dedicated team that treats your ledger like it's their own.</p></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-user-tie"></i> Leadership</span>
      <h2>The team steering the numbers</h2>
    </div>
    <div class="grid grid-4">
      <div class="card leader-card reveal"><div class="leader-photo">RM</div><h3>Renata Marlow</h3><div class="role">Founder &amp; CEO</div><p>Former controller who built Payroll Servicess after one too many late tax seasons.</p></div>
      <div class="card leader-card reveal"><div class="leader-photo">DK</div><h3>Daniel Kessler</h3><div class="role">Head of Payroll Operations</div><p>Fourteen years processing payroll for multi-state employers.</p></div>
      <div class="card leader-card reveal"><div class="leader-photo">AV</div><h3>Amara Valdez</h3><div class="role">Director of Accounting</div><p>CPA leading month-end close and financial reporting standards.</p></div>
      <div class="card leader-card reveal"><div class="leader-photo">TO</div><h3>Theo Osei</h3><div class="role">Head of Client Success</div><p>Makes sure every business has a specialist who actually picks up the phone.</p></div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-timeline"></i> Milestones</span>
      <h2>Twelve years of steady growth</h2>
    </div>
    <div style="max-width:720px;margin:0 auto;" class="reveal">
      <div class="timeline">
        <div class="t-item"><span class="yr">2013</span><h4>Two-person bookkeeping shop opens</h4><p>Founded by a small group of accountants serving local small businesses.</p></div>
        <div class="t-item"><span class="yr">2016</span><h4>Payroll processing launches</h4><p>Added direct deposit and payroll tax filing for growing clients.</p></div>
        <div class="t-item"><span class="yr">2019</span><h4>100 businesses served</h4><p>Expanded to multi-state clients across retail, healthcare, and construction.</p></div>
        <div class="t-item"><span class="yr">2022</span><h4>Virtual CFO services introduced</h4><p>Added forecasting, budgeting, and cash flow strategy for scaling clients.</p></div>
        <div class="t-item"><span class="yr">2026</span><h4>480+ businesses, $180M+ processed</h4><p>Now supporting businesses nationwide with a 99.8% on-time payroll rate.</p></div>
      </div>
    </div>
  </div>
</section>
<section class="section-tight">
  <div class="container">
    <div class="cta-banner reveal">
      <h2>Ready to simplify your books and payroll?</h2>
      <p>Talk to a specialist and get a custom quote within one business day — no pressure, no jargon.</p>
      <div class="hero-actions">
        <a href="/contact/" class="btn btn-primary" style="background:#fff;color:var(--c-primary);">Get a Free Quote</a>
        <a href="/contact/" class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </div>
</section>

PGCONTENT;
	$content_services = <<<'PGCONTENT'

<section class="hero hero-sm">
  <div class="container reveal in">
    <span class="eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;"><i class="fa-solid fa-layer-group"></i> Services</span>
    <h1>Everything your finance back-office needs, under one roof</h1>
    <p>Bookkeeping, accounting, payroll, tax, and CFO-level strategy — scoped to your business and billed at one fixed monthly rate.</p>
  </div>
</section>
<div class="breadcrumb-bar">
  <div class="container">
    <div class="breadcrumb">
      <a href="/">Home</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Services</span>
    </div>
  </div>
</div>

<!--<section class="section">-->
<!--  <div class="container">-->
<!--    <div class="grid grid-3">-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-book"></i></div><h3>Bookkeeping Services</h3><p>Daily bookkeeping, catch-up bookkeeping, bank reconciliation, and general ledger management.</p></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-chart-pie"></i></div><h3>Accounting Services</h3><p>Financial statements, accounts payable and receivable, month-end and year-end closing.</p></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-money-check-dollar"></i></div><h3>Payroll Services</h3><p>Payroll processing, direct deposit, payroll tax filing, and employee payslips.</p></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div><h3>Tax Services</h3><p>Business tax preparation, individual tax returns, tax planning, and sales tax filing.</p></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-user-tie"></i></div><h3>CFO Services</h3><p>Virtual CFO guidance, budgeting and forecasting, cash flow management, financial strategy.</p></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-database"></i></div><h3>Additional Services</h3><p>Data entry, invoice and payment processing, vendor management, customer billing, and more.</p></div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->

<section class="section">
  <div class="container">
    <div class="grid grid-3">
      <div class="card reveal in">
        <div class="card-icon"><i class="fa-solid fa-book"></i></div>
        <h3>Bookkeeping Services</h3>
        <ul>
          <li>Daily Bookkeeping</li>
          <li>Catch-Up Bookkeeping</li>
          <li>Bank Reconciliation</li>
          <li>General Ledger Management</li>
        </ul>
      </div>
      <div class="card reveal in">
        <div class="card-icon"><i class="fa-solid fa-chart-pie"></i></div>
        <h3>Accounting Services</h3>
        <ul>
          <li>Financial Statements</li>
          <li>Accounts Payable</li>
          <li>Accounts Receivable</li>
          <li>Month-End &amp; Year-End Closing</li>
        </ul>
      </div>
      <div class="card reveal in">
        <div class="card-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
        <h3>Payroll Services</h3>
        <ul>
          <li>Payroll Processing</li>
          <li>Direct Deposit</li>
          <li>Payroll Tax Filing</li>
          <li>Employee Payslips</li>
        </ul>
      </div>
      <div class="card reveal in">
        <div class="card-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
        <h3>Tax Services</h3>
        <ul>
          <li>Business Tax Preparation</li>
          <li>Individual Tax Returns</li>
          <li>Tax Planning</li>
          <li>Sales Tax Filing</li>
        </ul>
      </div>
      <div class="card reveal in">
        <div class="card-icon"><i class="fa-solid fa-cloud"></i></div>
        <h3>Cloud Hosting Services</h3>
        <ul>
          <li>Cloud Server Hosting</li>
          <li>Managed Cloud Infrastructure</li>
          <li>Virtual Desktop Hosting (VDI)</li>
          <li>Secure Cloud Backup &amp; Disaster Recovery</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section" id="bookkeeping">
  <div class="container split">
    <div class="split-media reveal" style="">
      <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=1000&auto=format&fit=crop" alt="Daily records that are always ready for a close">
    </div>
    <div class="reveal">
      <span class="eyebrow"><i class="fa-solid fa-book"></i> Bookkeeping</span>
      <h2>Daily records that are always ready for a close</h2>
      <p>Your ledger stays accurate and current, so month-end never turns into a scramble.</p>
      <ul class="check-list">
        <li><i class="fa-solid fa-circle-check"></i> Daily bookkeeping</li><li><i class="fa-solid fa-circle-check"></i> Catch-up bookkeeping</li><li><i class="fa-solid fa-circle-check"></i> Bank reconciliation</li><li><i class="fa-solid fa-circle-check"></i> General ledger management</li>
      </ul>
    </div>
  </div>
</section>

<section class="section section-alt" id="accounting">
  <div class="container split">
    <div class="split-media reveal" style="order:-1;">
      <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=1000&auto=format&fit=crop" alt="Financial statements you can actually act on">
    </div>
    <div class="reveal">
      <span class="eyebrow"><i class="fa-solid fa-chart-pie"></i> Accounting</span>
      <h2>Financial statements you can actually act on</h2>
      <p>We turn transaction data into statements and reports that support real decisions.</p>
      <ul class="check-list">
        <li><i class="fa-solid fa-circle-check"></i> Financial statements</li><li><i class="fa-solid fa-circle-check"></i> Accounts payable</li><li><i class="fa-solid fa-circle-check"></i> Accounts receivable</li><li><i class="fa-solid fa-circle-check"></i> Month-end & year-end closing</li>
      </ul>
    </div>
  </div>
</section>

<section class="section" id="payroll">
  <div class="container split">
    <div class="split-media reveal" style="">
      <img src="https://images.unsplash.com/photo-1554224155-1696413565d3?q=80&w=1000&auto=format&fit=crop" alt="Payroll that lands on time, every time">
    </div>
    <div class="reveal">
      <span class="eyebrow"><i class="fa-solid fa-money-check-dollar"></i> Payroll</span>
      <h2>Payroll that lands on time, every time</h2>
      <p>A 99.8% on-time payroll rate across 480+ businesses, backed by full compliance.</p>
      <ul class="check-list">
        <li><i class="fa-solid fa-circle-check"></i> Payroll processing</li><li><i class="fa-solid fa-circle-check"></i> Direct deposit</li><li><i class="fa-solid fa-circle-check"></i> Payroll tax filing</li><li><i class="fa-solid fa-circle-check"></i> Employee payslips</li>
      </ul>
    </div>
  </div>
</section>

<section class="section section-alt" id="tax">
  <div class="container split">
    <div class="split-media reveal" style="order:-1;">
      <img src="https://images.unsplash.com/photo-1586486855514-8c633cc6fd38?q=80&w=1000&auto=format&fit=crop" alt="Filings handled, savings not left on the table">
    </div>
    <div class="reveal">
      <span class="eyebrow"><i class="fa-solid fa-file-invoice-dollar"></i> Tax</span>
      <h2>Filings handled, savings not left on the table</h2>
      <p>From quarterly filings to strategic planning, our tax team keeps you compliant and efficient.</p>
      <ul class="check-list">
        <li><i class="fa-solid fa-circle-check"></i> Business tax preparation</li><li><i class="fa-solid fa-circle-check"></i> Individual tax returns</li><li><i class="fa-solid fa-circle-check"></i> Tax planning</li><li><i class="fa-solid fa-circle-check"></i> Sales tax filing</li>
      </ul>
    </div>
  </div>
</section>

<section class="section" id="cfo">
  <div class="container split">
    <div class="split-media reveal" style="">
      <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1000&auto=format&fit=crop" alt="Strategic financial guidance, without a full-time hire">
    </div>
    <div class="reveal">
      <span class="eyebrow"><i class="fa-solid fa-user-tie"></i> CFO Services</span>
      <h2>Strategic financial guidance, without a full-time hire</h2>
      <p>Get forecasting, budgeting, and cash flow strategy from a virtual CFO who knows your numbers.</p>
      <ul class="check-list">
        <li><i class="fa-solid fa-circle-check"></i> Virtual CFO</li><li><i class="fa-solid fa-circle-check"></i> Budgeting & forecasting</li><li><i class="fa-solid fa-circle-check"></i> Cash flow management</li><li><i class="fa-solid fa-circle-check"></i> Financial strategy</li>
      </ul>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-puzzle-piece"></i> Additional services</span>
      <h2>The details that keep your back-office running</h2>
    </div>
    <div class="grid grid-4">
      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-keyboard"></i></div><h3>Data Entry</h3><p>Accurate, timely entry of financial data.</p></div>
      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-file-invoice"></i></div><h3>Invoice Processing</h3><p>Invoices captured, coded, and routed for approval.</p></div>
      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-credit-card"></i></div><h3>Payment Processing</h3><p>Payments scheduled and reconciled on time.</p></div>
      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-truck-field"></i></div><h3>Vendor Management</h3><p>Vendor records and terms kept current.</p></div>
      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div><h3>Customer Billing</h3><p>Invoices sent and tracked through to payment.</p></div>
      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-broom"></i></div><h3>Record Cleanup</h3><p>Messy books untangled and reconciled.</p></div>
      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-cloud"></i></div><h3>Cloud Accounting</h3><p>Real-time dashboards, accessible anywhere.</p></div>
      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-folder-open"></i></div><h3>Document Management</h3><p>Records organized and securely stored.</p></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-plug"></i> Platforms</span>
      <h2>Solutions for every major accounting platform</h2>
      <p>From setup to daily support, our specialists keep your systems running efficiently and securely.</p>
    </div>
    <div class="grid grid-3">
      <div class="card platform-card reveal"><div class="card-icon"><i class="fa-solid fa-q"></i></div><div><h3>QuickBooks</h3><p>Online, Desktop, Enterprise, Payroll.</p></div></div>
      <div class="card platform-card reveal"><div class="card-icon"><i class="fa-solid fa-leaf"></i></div><div><h3>Sage</h3><p>Sage 50, Sage 100, Sage 300, Intacct.</p></div></div>
      <div class="card platform-card reveal"><div class="card-icon"><i class="fa-solid fa-x"></i></div><div><h3>Xero</h3><p>Setup, migration, integrations &amp; training.</p></div></div>
      <div class="card platform-card reveal"><div class="card-icon"><i class="fa-solid fa-cubes"></i></div><div><h3>NetSuite</h3><p>ERP implementation, support &amp; reporting.</p></div></div>
      <div class="card platform-card reveal"><div class="card-icon"><i class="fa-solid fa-receipt"></i></div><div><h3>FreshBooks</h3><p>Invoicing, reporting &amp; subscription setup.</p></div></div>
      <div class="card platform-card reveal"><div class="card-icon"><i class="fa-solid fa-water"></i></div><div><h3>Wave &amp; Others</h3><p>Zoho Books, Wave, Gusto &amp; more.</p></div></div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-industry"></i> Industries</span>
      <h2>Industries we serve</h2>
    </div>
    <div style="display:flex;flex-wrap:wrap;gap:14px;justify-content:center;" class="reveal">
      <span class="tag-pill"><i class="fa-solid fa-store"></i> Small Businesses</span>
      <span class="tag-pill"><i class="fa-solid fa-rocket"></i> Startups</span>
      <span class="tag-pill"><i class="fa-solid fa-hospital"></i> Healthcare</span>
      <span class="tag-pill"><i class="fa-solid fa-house"></i> Real Estate</span>
      <span class="tag-pill"><i class="fa-solid fa-helmet-safety"></i> Construction</span>
      <span class="tag-pill"><i class="fa-solid fa-bag-shopping"></i> Retail</span>
      <span class="tag-pill"><i class="fa-solid fa-cart-shopping"></i> E-commerce</span>
      <span class="tag-pill"><i class="fa-solid fa-industry"></i> Manufacturing</span>
      <span class="tag-pill"><i class="fa-solid fa-briefcase"></i> Professional Services</span>
      <span class="tag-pill"><i class="fa-solid fa-hand-holding-heart"></i> Nonprofits</span>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-thumbs-up"></i> Benefits</span>
      <h2>What outsourcing your back-office actually gets you</h2>
    </div>
    <div class="grid grid-4">
      <div class="feature card reveal"><div class="card-icon"><i class="fa-solid fa-clock"></i></div><h3>Hours back</h3><p>No more nights spent reconciling spreadsheets.</p></div>
      <div class="feature card reveal"><div class="card-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></div><h3>Clear visibility</h3><p>Real-time dashboards replace end-of-quarter guesswork.</p></div>
      <div class="feature card reveal"><div class="card-icon"><i class="fa-solid fa-shield-halved"></i></div><h3>Fewer risks</h3><p>Compliance handled proactively, not reactively.</p></div>
      <div class="feature card reveal"><div class="card-icon"><i class="fa-solid fa-arrow-trend-up"></i></div><h3>Room to grow</h3><p>Systems that scale as your headcount and revenue do.</p></div>
    </div>
  </div>
</section>
<section class="section-tight">
  <div class="container">
    <div class="cta-banner reveal">
      <h2>See exactly which services your business needs</h2>
      <p>Tell us where you're spending the most time and we'll scope a plan that fits.</p>
      <div class="hero-actions">
        <a href="/contact/" class="btn btn-primary" style="background:#fff;color:var(--c-primary);">Get a Free Quote</a>
        <a href="/contact/" class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </div>
</section>

PGCONTENT;
	$content_bookkeeping_services = <<<'PGCONTENT'

<!--<section class="hero">-->
<!--  <div class="hero-ring"></div>-->
<!--  <div class="container hero-grid">-->
<!--    <div class="reveal in">-->
      <!--<span class="eyebrow"><i class="fa-solid fa-circle-check"></i> Trusted by 480+ growing businesses</span>-->
<!--      <h1> Pro Assist</h1>-->
<!--      <p class="lead">Meet Your New AI-Powered Financial Assistant </p>-->
<!--      <div class="hero-actions">-->
<!--        <a href="/contact/" class="btn btn-primary">Get Started <i class="fa-solid fa-arrow-right"></i></a>-->
<!--        <a href="/contact/" class="btn btn-outline">Contact Us</a>-->
<!--      </div>-->
      <!--<div class="hero-stats">-->
      <!--  <div class="stat"><b><span class="counter" data-target="12" data-suffix="+">0</span> yrs</b><span>In Practice</span></div>-->
      <!--  <div class="stat"><b><span class="counter" data-target="480" data-suffix="+">0</span></b><span>Businesses Served</span></div>-->
      <!--  <div class="stat"><b><span class="counter" data-target="99.8" data-suffix="%">0</span></b><span>On-Time Payroll Rate</span></div>-->
      <!--  <div class="stat"><b>$<span class="counter" data-target="180" data-suffix="M+">0</span></b><span>Payroll Processed / yr</span></div>-->
      <!--</div>-->
<!--    </div>-->
<!--    <div class="hero-visual reveal in">-->
<!--      <div class="paycard main">-->
        <!--<div class="pc-top"><span>Direct Deposit</span><span class="pc-logo"></span></div>-->
        <!--<div class="pc-amount">$4,215.60</div>-->
        <!--<div class="pc-row"><span>Pay period</span><span>Jun 16 – Jun 30</span></div>-->
        <!--<div class="pc-row"><span>Taxes withheld</span><span>$1,084.20</span></div>-->
        <!--<div class="pc-badge"><i class="fa-solid fa-shield-halved"></i> Filed &amp; compliant</div>-->
<!--      </div>-->
      <!--<div class="floaty f1"><i class="fa-solid fa-chart-line" style="color:var(--c-accent);"></i> Cash flow +18%</div>-->
      <!--<div class="floaty f2"><i class="fa-solid fa-clock" style="color:var(--c-secondary);"></i> Books closed on time</div>-->
      <!--<div class="floaty f3"><i class="fa-solid fa-users" style="color:var(--c-primary);"></i> 42 employees paid</div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->

<section class="hero">
  <div class="hero-ring"></div>
  <div class="container hero-grid">
    <div class="reveal in">
      <h1>Bookkeeping Services That Keep Your Business Financially Organized</h1>
      <p class="lead">We provide reliable day-to-day bookkeeping support – from daily transaction recording and catch-up work to bank reconciliation and general ledger management – so every figure in your system is accurate, current, and ready for reporting.</p>
      <div class="hero-actions">
        <a href="/contact/" class="btn btn-primary">Get a Free Quote <i class="fa-solid fa-arrow-right"></i></a>
        <a href="/contact/" class="btn btn-outline">Live Help </a>
      </div>
    </div>

    <div class="hero-visual reveal in">
      <div class="collage-item ci-1">
        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=600&auto=format&fit=crop" alt="Product screen preview">
      </div>
      <div class="collage-item ci-2">
        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=600&auto=format&fit=crop" alt="Business specialist on a call">
      </div>
      <div class="collage-item ci-3">
        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=600&auto=format&fit=crop" alt="Client reviewing finances at home">
      </div>
      
    </div>

    <!-- floating search pill, overlapping both columns -->
    <!--<div class="hero-search-float reveal in">-->
    <!--  <span class="hero-search-icon"><i class="fa-solid fa-asterisk"></i></span>-->
    <!--  <input type="text" placeholder="Type or ask something">-->
    <!--  <button type="button" aria-label="Submit"><i class="fa-solid fa-arrow-right"></i></button>-->
    <!--</div>-->
  </div>
</section>


 <section class="logo-strip">
  <div class="container">
    <p style="font-size: 16px;
    text-align: center;
    font-weight: 300;
    color: #111;">Managing your books shouldn't take time away from running your business. Our professional bookkeeping services help you maintain accurate financial records, track daily transactions, and stay prepared for tax season. Whether you're a startup, small business, or growing enterprise, we provide reliable bookkeeping solutions tailored to your needs.</p>
   
  </div>
  </section>

<section class="pa-section">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-layer-group"></i> What We Offer</span>
      <h2>Our Bookkeeping Services</h2>
    </div>

    <div class="pa-grid">

      <div class="pa-card reveal">
        <div class="pa-head pa-bookkeeping">
          <div class="pa-icon"><i class="fa-solid fa-book"></i></div>
          <h3>Daily Bookkeeping</h3>
        </div>
        <div class="pa-body">
          <p>Our Daily Bookkeeping service ensures every financial transaction is accurately recorded and categorized. From recording sales and expenses to tracking invoices and payments, we help maintain organized financial records that support informed business decisions.</p>
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Recording Daily Income &amp; Expenses</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Transaction Categorization</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Sales &amp; Purchase Entries</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Invoice Recording</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Expense Tracking</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Financial Data Updates</li>
          </ul>
        </div>
      </div>

      <div class="pa-card reveal">
        <div class="pa-head pa-accounting">
          <div class="pa-icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
          <h3>Catch-Up Bookkeeping</h3>
        </div>
        <div class="pa-body">
          <p>Fallen behind on your bookkeeping? No problem. Our Catch-Up Bookkeeping service helps organize and update overdue financial records, ensuring your books are accurate and current. Whether you're behind by a few months or several years, our experts work efficiently to restore order to your finances.</p>
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Reviewing Historical Transactions</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Updating Missing Financial Records</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Correcting Data Entry Errors</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Organizing Receipts &amp; Documents</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Preparing Financial Reports</li>
          </ul>
        </div>
      </div>

      <div class="pa-card reveal">
        <div class="pa-head pa-payroll">
          <div class="pa-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
          <h3>Accounts Receivable</h3>
        </div>
        <div class="pa-body">
          <p>Our Accounts Receivable services help businesses track outstanding invoices, improve collections, and maintain a healthy cash flow. We ensure customer payments are monitored and recorded accurately while reducing delays in receivables.</p>
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Customer Invoice Management</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Payment Tracking</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Outstanding Balance Monitoring</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Aging Reports</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Customer Account Reconciliation</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Collection Follow-Ups</li>
          </ul>
        </div>
      </div>

      <div class="pa-card reveal" style="margin-top: 4%;">
        <div class="pa-head pa-tax">
          <div class="pa-icon"><i class="fa-solid fa-building-columns"></i></div>
          <h3>Bank Reconciliation</h3>
        </div>
        <div class="pa-body">
          <p>Regular bank reconciliation helps identify discrepancies, prevent errors, and maintain accurate financial records. Our experts compare your accounting records with bank statements to ensure every transaction is accounted for correctly.</p>
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Matching Bank Transactions</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Identifying Missing Entries</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Correcting Recording Errors</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Detecting Duplicate Transactions</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Monthly Bank Statement Reconciliation</li>
          </ul>
        </div>
      </div>

      <div class="pa-card reveal" style="margin-top: 4%;">
        <div class="pa-head pa-cloud">
          <div class="pa-icon"><i class="fa-solid fa-list-check"></i></div>
          <h3>General Ledger Management</h3>
        </div>
        <div class="pa-body">
          <p>The general ledger serves as the backbone of your accounting system. We manage and maintain your general ledger to ensure every financial transaction is accurately recorded and properly classified. This helps generate reliable financial statements and supports informed business decisions.</p>
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Ledger Maintenance</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Journal Entry Management</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Account Classification</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Chart of Accounts Review</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Financial Data Verification</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Periodic Ledger Reconciliation</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<!--<section class="section">-->
<!--  <div class="container split">-->
<!--    <div class="split-media reveal">-->
<!--      <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=1000&auto=format&fit=crop" alt="Accounting team reviewing financial reports together">-->
<!--      <div class="stat-chip">-->
<!--        <div class="card-icon" style="margin-bottom:0;"><i class="fa-solid fa-award"></i></div>-->
<!--        <div><div class="num">12+ yrs</div><div class="lbl">In practice</div></div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="reveal">-->
      <!--<span class="eyebrow"><i class="fa-solid fa-building"></i> Who we are</span>-->
<!--      <h2>Industry- We Serve </h2>-->
      
<!--<ul class="check-list">-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>Small Businesses</b></li>-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>Startups</b></li>-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>Healthcare</b></li>-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>Real Estate</b></li>-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>Construction</b></li>-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>Retail</b></li>-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>E-commerce</b></li>-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>Manufacturing</b></li>-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>Professional Services</b></li>-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>Nonprofits</b></li>-->
<!--</ul>-->
<!--      <a href="/about/" class="btn btn-primary mt-40">Learn Our Story <i class="fa-solid fa-arrow-right"></i></a>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->
<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal in">
      <span class="eyebrow"><i class="fa-solid fa-industry"></i> Industries</span>
      <h2>Professional Bookkeeping Services for Every Industry</h2>
    </div>
    <div style="display:flex;flex-wrap:wrap;gap:14px;justify-content:center;" class="reveal in">
      <span class="tag-pill"><i class="fa-solid fa-store"></i> Small Businesses</span>
      <span class="tag-pill"><i class="fa-solid fa-rocket"></i> Startups</span>
      <span class="tag-pill"><i class="fa-solid fa-hospital"></i> Healthcare</span>
      <span class="tag-pill"><i class="fa-solid fa-house"></i> Real Estate</span>
      <span class="tag-pill"><i class="fa-solid fa-helmet-safety"></i> Construction</span>
      <span class="tag-pill"><i class="fa-solid fa-bag-shopping"></i> Retail</span>
      <span class="tag-pill"><i class="fa-solid fa-cart-shopping"></i> E-commerce</span>
      <span class="tag-pill"><i class="fa-solid fa-industry"></i> Manufacturing</span>
      <span class="tag-pill"><i class="fa-solid fa-briefcase"></i> Professional Services</span>
      <span class="tag-pill"><i class="fa-solid fa-hand-holding-heart"></i> Nonprofits</span>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="section-head reveal in">
      <span class="eyebrow"><i class="fa-solid fa-plug"></i> Platforms</span>
      <h2>Bookkeeping Expertise Across Leading Platforms</h2>
      <p>Reliable Solutions for Today's Top Bookkeeping Software</p><p>We work within your existing systems, so you don’t have to change tools to get better bookkeeping. Our team is familiar with widely used accounting and bookkeeping platforms and can also support customized setups.</p>
    </div>
    <div class="grid grid-3">
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-q"></i></div><div><h3>QuickBooks</h3><p>Online, Desktop, Enterprise, Payroll.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-leaf"></i></div><div><h3>Sage</h3><p>Sage 50, Sage 100, Sage 300, Intacct.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-x"></i></div><div><h3>Xero</h3><p>Setup, migration, integrations &amp; training.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-cubes"></i></div><div><h3>NetSuite</h3><p>ERP implementation, support &amp; reporting.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-receipt"></i></div><div><h3>FreshBooks</h3><p>Invoicing, reporting &amp; subscription setup.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-water"></i></div><div><h3>Wave &amp; Others</h3><p>Zoho Books, Wave, Gusto &amp; more.</p></div></div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-route"></i> Our process</span>
      <h2>Assist Pro Bookkeeping Process Designed for Accuracy</h2>
      <p>A simple, transparent process to keep your books accurate and current. 
</p>
    </div>
    <div class="process-wrap reveal">
      <div class="process-line"><div class="process-line-fill"></div></div>
      <div class="process-steps">
        <div class="p-step"><div class="p-num">1</div><h4>Understanding Your Business</h4><p>We review your operations, current records, software, and reporting needs to define scope and priorities.</p></div>
        <div class="p-step"><div class="p-num">2</div><h4>Data Collection &amp; Review</h4><p>We gather bank statements, invoices, receipts, and existing ledgers to establish a baseline and identify gaps.</p></div>
        <div class="p-step"><div class="p-num">3</div><h4>Cleanup or Catch-Up (if needed)</h4><p>We correct errors, enter missing transactions, and reconcile past periods so your books reflect reality.</p></div>
        <div class="p-step"><div class="p-num">4</div><h4>Organize &amp; Record Transactions</h4><p>We record transactions, reconcile accounts, and update ledgers on a regular schedule that fits your business.</p></div>
        
      </div>
    </div>
  </div>
</section>

<section class="section section-alt" style="background:#f8fafc;">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-shield-halved"></i> Why Choose Us</span>
      <h2>Why Businesses Rely on Assist Pro Bookkeeping</h2>
    </div>
    <div class="grid grid-3">
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Payroll</span><i class="fa-solid fa-money-check-dollar"></i></div><div class="res-body"><div class="meta">Reliable Support</div><h3>Experienced Bookkeeping Professionals</h3><p>Accurate and timely recordkeeping supported by structured processes and standardized checklists.</p><a href="/contact/" class="card-link">Get Support <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Tax Tips</span><i class="fa-solid fa-file-invoice-dollar"></i></div><div class="res-body"><div class="meta">Secure &amp; Flexible</div><h3>Secure Data Management</h3><p>Customized service plans, dependable turnaround times, and careful handling of your financial information.</p><a href="/contact/" class="card-link">Get Support <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Bookkeeping</span><i class="fa-solid fa-book"></i></div><div class="res-body"><div class="meta">Clear Communication</div><h3>Dedicated Ongoing Support</h3><p>Transparent communication, easy-to-understand reports, and a dedicated point of contact for your business.</p><a href="/contact/" class="card-link">Get Support <i class="fa-solid fa-arrow-right"></i></a></div></div>
    </div>
  </div>
</section>

<!--<section class="section section-alt">-->
<!--  <div class="container">-->
<!--    <div class="section-head reveal">-->
<!--      <span class="eyebrow"><i class="fa-solid fa-layer-group"></i> What We Offer</span>-->
<!--      <h2>Services built around your finance calendar</h2>-->
<!--      <p>Every engagement starts with the essentials businesses actually need, month after month.</p>-->
<!--    </div>-->
<!--    <div class="grid grid-3">-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-money-check-dollar"></i></div><h3>Payroll Management</h3><p>Accurate, on-time pay runs with direct deposit, payslips, and full tax compliance.</p><a href="/services/" class="card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div><h3>Tax Filing</h3><p>Business and payroll tax filings prepared and submitted correctly, every deadline.</p><a href="/services/" class="card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-heart-pulse"></i></div><h3>Employee Benefits</h3><p>Benefits deductions and contributions managed accurately inside every pay cycle.</p><a href="/services/" class="card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-shield-halved"></i></div><h3>HR Compliance</h3><p>Stay ahead of federal, state, and local labor law changes without the research.</p><a href="/services/" class="card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-book"></i></div><h3>Bookkeeping</h3><p>Daily transaction recording, bank reconciliation, and clean general ledgers.</p><a href="/services/" class="card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-chart-pie"></i></div><h3>Financial Reporting</h3><p>Monthly statements and dashboards that make your numbers easy to act on.</p><a href="/services/" class="card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->

<!--<section class="section">-->
<!--  <div class="container">-->
<!--    <div class="section-head reveal">-->
<!--      <span class="eyebrow"><i class="fa-solid fa-star"></i> Why choose us</span>-->
<!--      <h2>Built for businesses that can't afford payroll mistakes</h2>-->
<!--    </div>-->
<!--    <div class="grid grid-3">-->
<!--      <div class="feature card reveal"><div class="card-icon"><i class="fa-solid fa-bolt"></i></div><h3>Fast Payroll</h3><p>Pay runs processed well ahead of deadlines, every single cycle.</p></div>-->
<!--      <div class="feature card reveal"><div class="card-icon"><i class="fa-solid fa-lock"></i></div><h3>Secure Data</h3><p>Bank-level encryption protects every payroll and financial record.</p></div>-->
<!--      <div class="feature card reveal"><div class="card-icon"><i class="fa-solid fa-user-tie"></i></div><h3>Expert Team</h3><p>Real accountants and payroll specialists, not a call center.</p></div>-->
<!--      <div class="feature card reveal"><div class="card-icon"><i class="fa-solid fa-scale-balanced"></i></div><h3>Compliance</h3><p>A 100% compliance guarantee on every filing we submit.</p></div>-->
<!--      <div class="feature card reveal"><div class="card-icon"><i class="fa-solid fa-headset"></i></div><h3>24/7 Support</h3><p>Live help whenever payroll or bookkeeping questions come up.</p></div>-->
<!--      <div class="feature card reveal"><div class="card-icon"><i class="fa-solid fa-sack-dollar"></i></div><h3>Affordable Pricing</h3><p>Fixed monthly plans — no hourly billing surprises, ever.</p></div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->



<section class="section" style="background:#C2F5FF;">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-quote-left"></i> What Our Clients Say </span>
      <h2>Trusted by Businesses. Valued by Clients.</h2>
    </div>
    <div class="grid grid-3">
      <div class="t-card reveal">
        <div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <p class="t-quote">"Their bookkeeping services have made managing our finances effortless. Everything is organized, accurate, and always delivered on time."</p>
        <div class="t-person"><div class="t-avatar">NC</div><div><b>Nathan Collins</b><span>Retail Business Owner</span></div></div>
      </div>
      <div class="t-card reveal">
        <div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <p class="t-quote">"The team helped us catch up over a year of bookkeeping in just a few weeks. Their attention to detail and professionalism exceeded our expectations."</p>
        <div class="t-person"><div class="t-avatar">NB</div><div><b>Natalie Brooks</b><span>Construction Company</span></div></div>
      </div>
      <div class="t-card reveal">
        <div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <p class="t-quote">"From daily bookkeeping to monthly reconciliations, they've become an essential part of our business. Highly recommended for anyone looking for reliable financial support."</p>
        <div class="t-person"><div class="t-avatar">LP</div><div><b>Logan Pierce</b><span>Consulting Firm</span></div></div>
      </div>
    </div>
  </div>
</section>


<section class="section" style="background-color:#fff;">
  <div class="container split">
    <div class="reveal">
      <span class="eyebrow"><i class="fa-solid fa-comments"></i> Get in touch</span>
      <h2>Let Us Handle Your Bookkeeping</h2>
      <h3 style="color:var(--c-secondary); font-size:18px; margin-bottom:16px;">Speak with a Bookkeeping Expert</h3>
      <p>Tell us a bit about your business and a specialist will reach out within one business day.</p>
    </div>

    <div class="reveal">
      <div class="form-box">
        <form class="contact-form">
          <div class="form-field">
            <label>Name</label>
            <input type="text" placeholder="Jordan Ellis" required>
          </div>
          <div class="form-field">
            <label>Email</label>
            <input type="email" placeholder="jordan@company.com" required>
          </div>
          <div class="form-field">
            <label>Phone</label>
            <input type="tel" placeholder="(555) 123-4567" required>
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%;">
            Send Message <i class="fa-solid fa-paper-plane"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-circle-question"></i> FAQ</span>
      <h2>Frequently Asked Questions</h2>
    </div>

    <div style="max-width:760px;margin:0 auto;" class="reveal">

      <div class="faq-item">
        <div class="faq-q">What bookkeeping services do you offer? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            We provide Daily Bookkeeping, Catch-Up Bookkeeping, Bank Reconciliation, General Ledger Management, financial reporting, and customized bookkeeping solutions.
          </div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">How often should bookkeeping be updated? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            We recommend updating bookkeeping records daily or weekly to maintain accurate financial information and avoid errors.
          </div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Can you help if my books are behind? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            Yes. Our catch-up bookkeeping service is designed to bring overdue or incomplete records up to date and ready for reporting or tax filing.
          </div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Do you work with my current software? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            In most cases, yes. We work with leading accounting and bookkeeping platforms and can adapt to your existing system.
          </div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Why is bank reconciliation important? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            Bank reconciliation helps identify discrepancies, prevent fraud, correct errors, and ensure your accounting records accurately reflect your bank activity.
          </div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Is my financial information secure? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            We follow strict confidentiality practices and secure data handling protocols to protect your business information.
          </div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Can bookkeeping services be customized? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            Yes. We tailor the frequency, scope, reporting, and software support according to your business needs.
          </div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">How quickly can catch-up bookkeeping be completed? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            The timeline depends on the volume and condition of your records, but we provide a clear estimate after the initial review.
          </div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Will I receive regular bookkeeping reports? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            Yes. We provide clear summaries and reports based on the reporting schedule agreed for your business.
          </div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Can you coordinate with my tax professional? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            Yes. We can organize your books and provide accurate records to support your tax preparer or accountant.
          </div>
        </div>
      </div>

    </div>

    <div class="text-center mt-40 reveal">
      <a href="/faq/" class="btn btn-outline-dark">
        View All FAQs <i class="fa-solid fa-arrow-right"></i>
      </a>
    </div>
  </div>
</section>
<section class="section-tight">
  <div class="container">
    <div class="cta-banner reveal">
      <h2>Let Us Handle Your Bookkeeping</h2>
      <p>Speak with a bookkeeping expert and get a customized solution for your business.</p>
      <div class="hero-actions">
        <a href="/contact/" class="btn btn-primary" style="background:#fff;color:var(--c-primary);">Get a Free Quote</a>
        <a href="/contact/" class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </div>
</section>

PGCONTENT;
	$content_accounting_services = <<<'PGCONTENT'

<!--<section class="hero">-->
<!--  <div class="hero-ring"></div>-->
<!--  <div class="container hero-grid">-->
<!--    <div class="reveal in">-->
      <!--<span class="eyebrow"><i class="fa-solid fa-circle-check"></i> Trusted by 480+ growing businesses</span>-->
<!--      <h1> Pro Assist</h1>-->
<!--      <p class="lead">Meet Your New AI-Powered Financial Assistant </p>-->
<!--      <div class="hero-actions">-->
<!--        <a href="/contact/" class="btn btn-primary">Get Started <i class="fa-solid fa-arrow-right"></i></a>-->
<!--        <a href="/contact/" class="btn btn-outline">Contact Us</a>-->
<!--      </div>-->
      <!--<div class="hero-stats">-->
      <!--  <div class="stat"><b><span class="counter" data-target="12" data-suffix="+">0</span> yrs</b><span>In Practice</span></div>-->
      <!--  <div class="stat"><b><span class="counter" data-target="480" data-suffix="+">0</span></b><span>Businesses Served</span></div>-->
      <!--  <div class="stat"><b><span class="counter" data-target="99.8" data-suffix="%">0</span></b><span>On-Time Payroll Rate</span></div>-->
      <!--  <div class="stat"><b>$<span class="counter" data-target="180" data-suffix="M+">0</span></b><span>Payroll Processed / yr</span></div>-->
      <!--</div>-->
<!--    </div>-->
<!--    <div class="hero-visual reveal in">-->
<!--      <div class="paycard main">-->
        <!--<div class="pc-top"><span>Direct Deposit</span><span class="pc-logo"></span></div>-->
        <!--<div class="pc-amount">$4,215.60</div>-->
        <!--<div class="pc-row"><span>Pay period</span><span>Jun 16 – Jun 30</span></div>-->
        <!--<div class="pc-row"><span>Taxes withheld</span><span>$1,084.20</span></div>-->
        <!--<div class="pc-badge"><i class="fa-solid fa-shield-halved"></i> Filed &amp; compliant</div>-->
<!--      </div>-->
      <!--<div class="floaty f1"><i class="fa-solid fa-chart-line" style="color:var(--c-accent);"></i> Cash flow +18%</div>-->
      <!--<div class="floaty f2"><i class="fa-solid fa-clock" style="color:var(--c-secondary);"></i> Books closed on time</div>-->
      <!--<div class="floaty f3"><i class="fa-solid fa-users" style="color:var(--c-primary);"></i> 42 employees paid</div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->

<section class="hero">
  <div class="hero-ring"></div>
  <div class="container hero-grid">
    <div class="reveal in">
      <h1>Accounting Services That Keep Your Business On Track</h1>
      <p class="lead">We provide end-to-end accounting support – from financial statements to payables, receivables, and month-end/year-end closing – so you always have clear, reliable numbers for better decisions.</p>
      <div class="hero-actions">
        <a href="/contact/" class="btn btn-primary">Get a Free Quote <i class="fa-solid fa-arrow-right"></i></a>
        <a href="/contact/" class="btn btn-outline">Live Help </a>
      </div>
    </div>

    <div class="hero-visual reveal in">
      <div class="collage-item ci-1">
        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=600&auto=format&fit=crop" alt="Product screen preview">
      </div>
      <div class="collage-item ci-2">
        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=600&auto=format&fit=crop" alt="Business specialist on a call">
      </div>
      <div class="collage-item ci-3">
        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=600&auto=format&fit=crop" alt="Client reviewing finances at home">
      </div>
      
    </div>

    <!-- floating search pill, overlapping both columns -->
    <!--<div class="hero-search-float reveal in">-->
    <!--  <span class="hero-search-icon"><i class="fa-solid fa-asterisk"></i></span>-->
    <!--  <input type="text" placeholder="Type or ask something">-->
    <!--  <button type="button" aria-label="Submit"><i class="fa-solid fa-arrow-right"></i></button>-->
    <!--</div>-->
  </div>
</section>


 <section class="logo-strip">
  <div class="container">
    <p style="font-size: 16px;
    text-align: center;
    font-weight: 300;
    color: #111;">Managing business finances requires more than recording transactions—it requires accurate reporting, financial analysis, and ongoing compliance. Assist Pro accounting services help businesses maintain organized financial records while providing valuable insights that support informed decision-making. Whether you're a startup, a growing company, or an established business, our accounting experts ensure every financial detail is managed efficiently so you can gain complete visibility into your business performance.</p>
   
  </div>
  </section>

<section class="pa-section">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-layer-group"></i> What We Offer</span>
      <h2>Accounting Assist Pro Services</h2>
    </div>

    <div class="pa-grid">

      <div class="pa-card reveal">
        <div class="pa-head pa-bookkeeping">
          <div class="pa-icon"><i class="fa-solid fa-file-lines"></i></div>
          <h3>Financial Statements</h3>
        </div>
        <div class="pa-body">
          <p>We prepare accurate and easy-to-understand financial statements that give you a complete picture of your company's financial health. Our reports help business owners evaluate performance, satisfy lenders, prepare for tax filing, and make strategic business decisions.</p>
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Profit &amp; Loss Statements</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Balance Sheets</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Cash Flow Statements</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Owner's Equity Statements</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Customized Financial Reports</li>
          </ul>
        </div>
      </div>

      <div class="pa-card reveal">
        <div class="pa-head pa-accounting">
          <div class="pa-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
          <h3>Accounts Payable</h3>
        </div>
        <div class="pa-body">
          <p>Managing vendor payments accurately is essential for maintaining strong supplier relationships and healthy cash flow. Our Accounts Payable service ensures every invoice is processed correctly and payments are made on time.</p>
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Invoice Processing</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Vendor Account Management</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Payment Scheduling</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Expense Tracking</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Duplicate Payment Prevention</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Accounts Reconciliation</li>
          </ul>
        </div>
      </div>

      <div class="pa-card reveal">
        <div class="pa-head pa-payroll">
          <div class="pa-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
          <h3>Accounts Receivable</h3>
        </div>
        <div class="pa-body">
          <p>Our Accounts Receivable services help businesses track outstanding invoices, improve collections, and maintain a healthy cash flow. We ensure customer payments are monitored and recorded accurately while reducing delays in receivables.</p>
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Customer Invoice Management</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Payment Tracking</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Outstanding Balance Monitoring</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Aging Reports</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Customer Account Reconciliation</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Collection Follow-Ups</li>
          </ul>
        </div>
      </div>

      <div class="pa-card reveal" style="margin-top: 4%;">
        <div class="pa-head pa-tax">
          <div class="pa-icon"><i class="fa-solid fa-calendar-check"></i></div>
          <h3>Month-End &amp; Year-End Closing</h3>
        </div>
        <div class="pa-body">
          <p>Closing your books at the end of each month and fiscal year is essential for maintaining accurate financial records. Our accounting professionals ensure every transaction is reviewed, reconciled, and finalized according to accounting standards.</p>
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Bank Reconciliation</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Journal Entry Review</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Account Reconciliation</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Expense Verification</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Revenue Verification</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Financial Statement Preparation</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Year-End Adjustments</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<!--<section class="section">-->
<!--  <div class="container split">-->
<!--    <div class="split-media reveal">-->
<!--      <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=1000&auto=format&fit=crop" alt="Accounting team reviewing financial reports together">-->
<!--      <div class="stat-chip">-->
<!--        <div class="card-icon" style="margin-bottom:0;"><i class="fa-solid fa-award"></i></div>-->
<!--        <div><div class="num">12+ yrs</div><div class="lbl">In practice</div></div>-->
<!--      </div>-->
<!--    </div>-->
<!--    <div class="reveal">-->
      <!--<span class="eyebrow"><i class="fa-solid fa-building"></i> Who we are</span>-->
<!--      <h2>Industry- We Serve </h2>-->
      
<!--<ul class="check-list">-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>Small Businesses</b></li>-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>Startups</b></li>-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>Healthcare</b></li>-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>Real Estate</b></li>-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>Construction</b></li>-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>Retail</b></li>-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>E-commerce</b></li>-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>Manufacturing</b></li>-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>Professional Services</b></li>-->
<!--    <li><i class="fa-solid fa-circle-check"></i> <b>Nonprofits</b></li>-->
<!--</ul>-->
<!--      <a href="/about/" class="btn btn-primary mt-40">Learn Our Story <i class="fa-solid fa-arrow-right"></i></a>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->
<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal in">
      <span class="eyebrow"><i class="fa-solid fa-industry"></i> Industries</span>
      <h2>Accounting Solutions for Every Industry</h2>
    </div>
    <div style="display:flex;flex-wrap:wrap;gap:14px;justify-content:center;" class="reveal in">
      <span class="tag-pill"><i class="fa-solid fa-store"></i> Small Businesses</span>
      <span class="tag-pill"><i class="fa-solid fa-rocket"></i> Startups</span>
      <span class="tag-pill"><i class="fa-solid fa-hospital"></i> Healthcare</span>
      <span class="tag-pill"><i class="fa-solid fa-house"></i> Real Estate</span>
      <span class="tag-pill"><i class="fa-solid fa-helmet-safety"></i> Construction</span>
      <span class="tag-pill"><i class="fa-solid fa-bag-shopping"></i> Retail</span>
      <span class="tag-pill"><i class="fa-solid fa-cart-shopping"></i> E-commerce</span>
      <span class="tag-pill"><i class="fa-solid fa-industry"></i> Manufacturing</span>
      <span class="tag-pill"><i class="fa-solid fa-briefcase"></i> Professional Services</span>
      <span class="tag-pill"><i class="fa-solid fa-hand-holding-heart"></i> Nonprofits</span>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="section-head reveal in">
      <span class="eyebrow"><i class="fa-solid fa-plug"></i> Platforms</span>
      <h2>Expertise Across Leading Accounting Platforms</h2>
      <p>Reliable Solutions for Today's Top Accounting Software</p><p>Our experienced professionals provide expert support across leading accounting and financial management platforms. From setup and daily operations to troubleshooting and optimization, we ensure your systems remain secure, efficient, and fully aligned with your business needs.</p>
    </div>
    <div class="grid grid-3">
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-q"></i></div><div><h3>QuickBooks</h3><p>Online, Desktop, Enterprise, Payroll.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-leaf"></i></div><div><h3>Sage</h3><p>Sage 50, Sage 100, Sage 300, Intacct.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-x"></i></div><div><h3>Xero</h3><p>Setup, migration, integrations &amp; training.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-cubes"></i></div><div><h3>NetSuite</h3><p>ERP implementation, support &amp; reporting.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-receipt"></i></div><div><h3>FreshBooks</h3><p>Invoicing, reporting &amp; subscription setup.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-water"></i></div><div><h3>Wave &amp; Others</h3><p>Zoho Books, Wave, Gusto &amp; more.</p></div></div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-route"></i> Our process</span>
      <h2>A Simple Process Designed Around Your Business</h2>
      <p>We start by understanding your current accounting setup, systems, and reporting needs. Based on this, we define a clear scope for financial statements, payables, receivables, and closing support.</p>
    </div>
    <div class="process-wrap reveal">
      <div class="process-line"><div class="process-line-fill"></div></div>
      <div class="process-steps">
        <div class="p-step"><div class="p-num">1</div><h4>Understanding Your Business</h4><p>We learn about your operations, accounting requirements, and financial goals.</p></div>
        <div class="p-step"><div class="p-num">2</div><h4>Organizing Financial Data</h4><p>We collect and review financial records, invoices, bank statements, and supporting documents.</p></div>
        
        <div class="p-step"><div class="p-num">3</div><h4>Financial Reporting</h4><p>Receive detailed monthly reports and financial statements that provide complete visibility into your business performance.</p></div>
        
        <div class="p-step"><div class="p-num">4</div><h4>Continuous Support</h4><p>Our accounting team remains available throughout the year to answer questions and support your business growth.</p></div>
        
      </div>
    </div>
  </div>
</section>

<section class="section section-alt" style="background:#f8fafc;">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-shield-halved"></i> Why Choose Us</span>
      <h2>Why Businesses Choose Assist Pro Accounting Services</h2>
    </div>
    <div class="grid grid-3">
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Payroll</span><i class="fa-solid fa-money-check-dollar"></i></div><div class="res-body"><div class="meta">Reliable Support</div><h3>Experienced Accounting Professionals</h3><p>Accurate financial reporting and timely month-end closings delivered by experienced accounting specialists.</p><a href="/contact/" class="card-link">Get Support <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Tax Tips</span><i class="fa-solid fa-file-invoice-dollar"></i></div><div class="res-body"><div class="meta">Secure &amp; Flexible</div><h3>Secure &amp; Scalable Accounting</h3><p>Confidential data management, industry-specific solutions, and scalable services designed for growing businesses.</p><a href="/contact/" class="card-link">Get Support <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Bookkeeping</span><i class="fa-solid fa-book"></i></div><div class="res-body"><div class="meta">Clear Communication</div><h3>Transparent Communication</h3><p>Clear updates, dependable support, and accounting services customized around your operational needs.</p><a href="/contact/" class="card-link">Get Support <i class="fa-solid fa-arrow-right"></i></a></div></div>
    </div>
  </div>
</section>

<!--<section class="section section-alt">-->
<!--  <div class="container">-->
<!--    <div class="section-head reveal">-->
<!--      <span class="eyebrow"><i class="fa-solid fa-layer-group"></i> What We Offer</span>-->
<!--      <h2>Services built around your finance calendar</h2>-->
<!--      <p>Every engagement starts with the essentials businesses actually need, month after month.</p>-->
<!--    </div>-->
<!--    <div class="grid grid-3">-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-money-check-dollar"></i></div><h3>Payroll Management</h3><p>Accurate, on-time pay runs with direct deposit, payslips, and full tax compliance.</p><a href="/services/" class="card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div><h3>Tax Filing</h3><p>Business and payroll tax filings prepared and submitted correctly, every deadline.</p><a href="/services/" class="card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-heart-pulse"></i></div><h3>Employee Benefits</h3><p>Benefits deductions and contributions managed accurately inside every pay cycle.</p><a href="/services/" class="card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-shield-halved"></i></div><h3>HR Compliance</h3><p>Stay ahead of federal, state, and local labor law changes without the research.</p><a href="/services/" class="card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-book"></i></div><h3>Bookkeeping</h3><p>Daily transaction recording, bank reconciliation, and clean general ledgers.</p><a href="/services/" class="card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-chart-pie"></i></div><h3>Financial Reporting</h3><p>Monthly statements and dashboards that make your numbers easy to act on.</p><a href="/services/" class="card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->

<!--<section class="section">-->
<!--  <div class="container">-->
<!--    <div class="section-head reveal">-->
<!--      <span class="eyebrow"><i class="fa-solid fa-star"></i> Why choose us</span>-->
<!--      <h2>Built for businesses that can't afford payroll mistakes</h2>-->
<!--    </div>-->
<!--    <div class="grid grid-3">-->
<!--      <div class="feature card reveal"><div class="card-icon"><i class="fa-solid fa-bolt"></i></div><h3>Fast Payroll</h3><p>Pay runs processed well ahead of deadlines, every single cycle.</p></div>-->
<!--      <div class="feature card reveal"><div class="card-icon"><i class="fa-solid fa-lock"></i></div><h3>Secure Data</h3><p>Bank-level encryption protects every payroll and financial record.</p></div>-->
<!--      <div class="feature card reveal"><div class="card-icon"><i class="fa-solid fa-user-tie"></i></div><h3>Expert Team</h3><p>Real accountants and payroll specialists, not a call center.</p></div>-->
<!--      <div class="feature card reveal"><div class="card-icon"><i class="fa-solid fa-scale-balanced"></i></div><h3>Compliance</h3><p>A 100% compliance guarantee on every filing we submit.</p></div>-->
<!--      <div class="feature card reveal"><div class="card-icon"><i class="fa-solid fa-headset"></i></div><h3>24/7 Support</h3><p>Live help whenever payroll or bookkeeping questions come up.</p></div>-->
<!--      <div class="feature card reveal"><div class="card-icon"><i class="fa-solid fa-sack-dollar"></i></div><h3>Affordable Pricing</h3><p>Fixed monthly plans — no hourly billing surprises, ever.</p></div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->



<section class="section" style="background:#C2F5FF;">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-quote-left"></i> What Our Clients Say </span>
      <h2>Trusted by Businesses. Valued by Clients.</h2>
    </div>
    <div class="grid grid-3">
      <div class="t-card reveal">
        <div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <p class="t-quote">"Working with this team has transformed the way we manage our finances. Their monthly financial reports are always accurate, and the insights they provide help us make confident business decisions. Their professionalism and responsiveness are outstanding."</p>
        <div class="t-person"><div class="t-avatar">SM</div><div><b>Sarah Mitchell</b><span>Owner</span></div></div>
      </div>
      <div class="t-card reveal">
        <div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <p class="t-quote">"Their accounts payable and receivable management has significantly improved our cash flow. We no longer worry about missed payments or overdue invoices. The team is knowledgeable, dependable, and always available when we need assistance."</p>
        <div class="t-person"><div class="t-avatar">DC</div><div><b>David Carter</b><span>Managing Director</span></div></div>
      </div>
      <div class="t-card reveal">
        <div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <p class="t-quote">"The month-end and year-end closing process used to be stressful for our business. Since partnering with them, everything is completed on time and with exceptional accuracy. Their accounting expertise has allowed us to focus on growing our company."</p>
        <div class="t-person"><div class="t-avatar">JA</div><div><b>Jennifer Adams</b><span>CEO</span></div></div>
      </div>
    </div>
  </div>
</section>


<section class="section" style="background-color:#fff;">
  <div class="container split">
    <div class="reveal">
      <span class="eyebrow"><i class="fa-solid fa-comments"></i> Get in touch</span>
      <h2>Let Our Experts Handle Your Accounting</h2>
      <h3 style="color:var(--c-secondary); font-size:18px; margin-bottom:16px;">Talk to an Accounting Expert</h3>
      <p>Tell us a bit about your business and a specialist will reach out within one business day.</p>
    </div>

    <div class="reveal">
      <div class="form-box">
        <form class="contact-form">
          <div class="form-field">
            <label>Name</label>
            <input type="text" placeholder="Jordan Ellis" required>
          </div>
          <div class="form-field">
            <label>Email</label>
            <input type="email" placeholder="jordan@company.com" required>
          </div>
          <div class="form-field">
            <label>Phone</label>
            <input type="tel" placeholder="(555) 123-4567" required>
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%;">
            Send Message <i class="fa-solid fa-paper-plane"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-circle-question"></i> FAQ</span>
      <h2>Frequently Asked Questions</h2>
    </div>

    <div style="max-width:760px;margin:0 auto;" class="reveal">

      <div class="faq-item">
        <div class="faq-q">What accounting services do you provide? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">We provide Financial Statements, Accounts Payable, Accounts Receivable, Month-End Closing, Year-End Closing, financial reporting, and ongoing accounting support.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Can you work with my existing accounting software? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Yes. We work with leading accounting platforms and can adapt to your existing financial systems.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">How often will I receive financial reports? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Depending on your business requirements, reports can be provided weekly, monthly, quarterly, or annually.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Is my financial information secure? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Absolutely. We follow strict confidentiality practices and secure data management protocols to protect your financial information.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Can you customize accounting services? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Yes. Every business has unique accounting requirements, and we offer customized solutions based on your industry and operational needs.</div></div>
      </div>

    </div>

    <div class="text-center mt-40 reveal">
      <a href="/faq/" class="btn btn-outline-dark">
        View All FAQs <i class="fa-solid fa-arrow-right"></i>
      </a>
    </div>
  </div>
</section>
<section class="section-tight">
  <div class="container">
    <div class="cta-banner reveal">
      <h2>Let Our Experts Handle Your Accounting</h2>
      <p>Talk to an accounting expert and get a customized solution for your business.</p>
      <div class="hero-actions">
        <a href="/contact/" class="btn btn-primary" style="background:#fff;color:var(--c-primary);">Get a Free Quote</a>
        <a href="/contact/" class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </div>
</section>



PGCONTENT;
	$content_resources = <<<'PGCONTENT'

<section class="hero hero-sm">
  <div class="container reveal in">
    <span class="eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;"><i class="fa-solid fa-lightbulb"></i> Resources</span>
    <h1>Payroll and accounting knowledge, without the jargon</h1>
    <p>Guides, tips, and real client stories to help you run a tighter financial operation.</p>
  </div>
</section>
<div class="breadcrumb-bar">
  <div class="container">
    <div class="breadcrumb">
      <a href="/">Home</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Resources</span>
    </div>
  </div>
</div>
<section class="section"><div class="container"><div class="grid grid-3">
    <div class="res-card reveal">
      <div class="res-thumb" style="background-image:linear-gradient(135deg, rgba(11,60,93,.85), rgba(0,102,204,.75)), url('https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=800&auto=format&fit=crop'); background-size:cover; background-position:center;">
        <i class="fa-solid fa-newspaper"></i>
      </div>
      <div class="res-body">
        <h3>Blog</h3>
        <p>Ongoing insight on running the financial side of a growing business.</p>
        <a href="/blog/" class="card-link">Explore Blog <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
    <div class="res-card reveal">
      <div class="res-thumb" style="background-image:linear-gradient(135deg, rgba(11,60,93,.85), rgba(0,102,204,.75)), url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=800&auto=format&fit=crop'); background-size:cover; background-position:center;">
        <i class="fa-solid fa-book"></i>
      </div>
      <div class="res-body">
        <h3>Accounting Guides</h3>
        <p>Step-by-step guides covering bookkeeping and accounting fundamentals.</p>
        <a href="/accounting-guides/" class="card-link">Explore Accounting Guides <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
    <div class="res-card reveal">
      <div class="res-thumb" style="background-image:linear-gradient(135deg, rgba(11,60,93,.85), rgba(0,102,204,.75)), url('https://images.unsplash.com/photo-1586486855514-8c633cc6fd38?q=80&w=800&auto=format&fit=crop'); background-size:cover; background-position:center;">
        <i class="fa-solid fa-file-invoice-dollar"></i>
      </div>
      <div class="res-body">
        <h3>Tax Tips</h3>
        <p>Practical tips to file on time and keep more of what you earn.</p>
        <a href="/tax-tips/" class="card-link">Explore Tax Tips <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
    <div class="res-card reveal">
      <div class="res-thumb" style="background-image:linear-gradient(135deg, rgba(11,60,93,.85), rgba(0,102,204,.75)), url('https://images.unsplash.com/photo-1554224155-1696413565d3?q=80&w=800&auto=format&fit=crop'); background-size:cover; background-position:center;">
        <i class="fa-solid fa-money-check-dollar"></i>
      </div>
      <div class="res-body">
        <h3>Payroll Resources</h3>
        <p>Everything about running accurate, compliant payroll.</p>
        <a href="/payroll-resources/" class="card-link">Explore Payroll Resources <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
    <div class="res-card reveal">
      <div class="res-thumb" style="background-image:linear-gradient(135deg, rgba(11,60,93,.85), rgba(0,102,204,.75)), url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&w=800&auto=format&fit=crop'); background-size:cover; background-position:center;">
        <i class="fa-solid fa-chart-line"></i>
      </div>
      <div class="res-body">
        <h3>Business Finance Articles</h3>
        <p>Cash flow, budgeting, and financial strategy for growing teams.</p>
        <a href="/business-finance/" class="card-link">Explore Business Finance Articles <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
    <div class="res-card reveal">
      <div class="res-thumb" style="background-image:linear-gradient(135deg, rgba(11,60,93,.85), rgba(0,102,204,.75)), url('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=800&auto=format&fit=crop'); background-size:cover; background-position:center;">
        <i class="fa-solid fa-circle-question"></i>
      </div>
      <div class="res-body">
        <h3>FAQs</h3>
        <p>Quick, straight answers to the questions we hear most.</p>
        <a href="/faq/" class="card-link">Explore FAQs <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
    <div class="res-card reveal">
      <div class="res-thumb" style="background-image:linear-gradient(135deg, rgba(11,60,93,.85), rgba(0,102,204,.75)), url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=800&auto=format&fit=crop'); background-size:cover; background-position:center;">
        <i class="fa-solid fa-briefcase"></i>
      </div>
      <div class="res-body">
        <h3>Case Studies</h3>
        <p>Real businesses, real numbers, real results.</p>
        <a href="/case-studies/" class="card-link">Explore Case Studies <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div></div></div></section><section class="section-tight">
  <div class="container">
    <div class="cta-banner reveal">
      <h2>Have a question we haven't covered?</h2>
      <p>Reach out and a specialist will get back to you within one business day.</p>
      <div class="hero-actions">
        <a href="/contact/" class="btn btn-primary" style="background:#fff;color:var(--c-primary);">Get a Free Quote</a>
        <a href="/contact/" class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </div>
</section>

PGCONTENT;
	$content_faq = <<<'PGCONTENT'

<section class="hero hero-sm">
  <div class="container reveal in">
    <span class="eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;"><i class="fa-solid fa-circle-question"></i> FAQs</span>
    <h1>Frequently asked questions</h1>
    <p>Straight answers about payroll, bookkeeping, accounting, tax, and CFO services.</p>
  </div>
</section>
<div class="breadcrumb-bar">
  <div class="container">
    <div class="breadcrumb">
      <a href="/">Home</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>FAQs</span>
    </div>
  </div>
</div>

<section class="section">
  <div class="container">
    <div style="max-width:780px;margin:0 auto;" class="reveal">
      
      <div class="faq-item">
        <div class="faq-q">What are payroll services? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Payroll services handle calculating employee wages, withholding taxes, processing direct deposits, and filing payroll tax forms — so businesses don't have to manage it manually.</div></div>
      </div>
      <div class="faq-item">
        <div class="faq-q">What does a payroll company do? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">A payroll company processes employee pay, handles tax withholdings and filings, manages benefits deductions, and ensures compliance with labor laws.</div></div>
      </div>
      <div class="faq-item">
        <div class="faq-q">How do I choose the right payroll company? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Look for accurate tax filing, transparent pricing, integration with your accounting software, responsive support, and scalability as your team grows.</div></div>
      </div>
      <div class="faq-item">
        <div class="faq-q">What do bookkeeping services include? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Bookkeeping services cover recording daily transactions, reconciling bank accounts, tracking expenses, and maintaining accurate financial records for your business.</div></div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Do small businesses need bookkeeping services? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Yes — accurate books help small businesses track cash flow, prepare for tax season, and make informed financial decisions.</div></div>
      </div>
      <div class="faq-item">
        <div class="faq-q">What's the difference between bookkeeping and accounting services? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Bookkeeping records transactions; accounting services interpret that data — producing financial statements, analysis, and strategic guidance.</div></div>
      </div>
      <div class="faq-item">
        <div class="faq-q">When should a business hire an accounting service? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Once financial complexity grows — multiple revenue streams, investors, or tax planning needs — outsourcing accounting saves time and reduces errors.</div></div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Can tax services help reduce my business taxes? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Yes — through strategic planning like deductions, entity structuring, and timing of expenses and income, tax professionals can legally lower your tax burden.</div></div>
      </div>
      <div class="faq-item">
        <div class="faq-q">What are CFO services? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">CFO services (often called \'fractional CFO\') provide high-level financial strategy — forecasting, cash flow management, fundraising support — without the cost of a full-time CFO.</div></div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Who needs CFO services? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Growing businesses needing strategic financial guidance but not yet ready for a full-time executive hire.</div></div>
      </div>
    </div>
  </div>
</section>
<section class="section-tight">
  <div class="container">
    <div class="cta-banner reveal">
      <h2>Still have questions?</h2>
      <p>Our specialists are one message away and typically respond within one business day.</p>
      <div class="hero-actions">
        <a href="/contact/" class="btn btn-primary" style="background:#fff;color:var(--c-primary);">Get a Free Quote</a>
        <a href="/contact/" class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </div>
</section>

PGCONTENT;
	$content_contact = <<<'PGCONTENT'

<section class="hero hero-sm">
  <div class="container reveal in">
    <span class="eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;"><i class="fa-solid fa-envelope"></i> Contact Us</span>
    <h1>Let's talk about your books</h1>
    <p>Tell us a bit about your business and a specialist will reach out within one business day.</p>
  </div>
</section>
<div class="breadcrumb-bar">
  <div class="container">
    <div class="breadcrumb">
      <a href="/">Home</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Contact Us</span>
    </div>
  </div>
</div>

<section class="section">
  <div class="container contact-wrap">
    <div class="reveal">
      <div class="info-card">
        <div class="row"><i class="fa-solid fa-location-dot"></i><div><b>Office Address</b><span>480 Ledger Avenue, Suite 300, Austin, TX 78701</span></div></div>
        <div class="row"><i class="fa-solid fa-phone"></i><div><b>Phone</b><span>(800) 555-0134</span></div></div>
        <div class="row"><i class="fa-solid fa-envelope"></i><div><b>Email</b><span>hello@payrollservicess.com</span></div></div>
        <div class="row"><i class="fa-solid fa-clock"></i><div><b>Business Hours</b><span>Mon – Fri, 8:00 AM – 6:00 PM CT</span></div></div>
      </div>
      <div class="footer-social" style="margin:0 0 20px;">
        <a href="#" style="background:rgba(11,60,93,0.08);color:var(--c-primary);" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" style="background:rgba(11,60,93,0.08);color:var(--c-primary);" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="#" style="background:rgba(11,60,93,0.08);color:var(--c-primary);" aria-label="Twitter/X"><i class="fa-brands fa-x-twitter"></i></a>
        <a href="#" style="background:rgba(11,60,93,0.08);color:var(--c-primary);" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
      </div>
      <div class="map-box">
        <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=-97.755%2C30.260%2C-97.735%2C30.280&layer=mapnik" style="border:0;width:100%;height:100%;" loading="lazy" title="Office location map"></iframe>
      </div>
    </div>
    <div class="reveal">
      <div class="form-box">
        <h3>Send us a message</h3>
        <p style="margin-bottom:16px;">Fill out the form and a specialist will follow up within one business day.</p>
        <form class="contact-form">
          <div class="form-row">
            <div class="form-field"><label>Full name</label><input type="text" placeholder="Jordan Ellis" required></div>
            <div class="form-field"><label>Company name</label><input type="text" placeholder="Ellis Retail Co."></div>
          </div>
          <div class="form-row">
            <div class="form-field"><label>Email address</label><input type="email" placeholder="jordan@company.com" required></div>
            <div class="form-field"><label>Phone number</label><input type="tel" placeholder="(555) 123-4567"></div>
          </div>
          <div class="form-field">
            <label>Service you're interested in</label>
            <select>
              <option>Bookkeeping</option>
              <option>Accounting</option>
              <option>Payroll</option>
              <option>Tax Services</option>
              <option>CFO Services</option>
              <option>Not sure yet</option>
            </select>
          </div>
          <div class="form-field"><label>Message</label><textarea rows="4" placeholder="Tell us a bit about your business and what you need help with."></textarea></div>
          <button type="submit" class="btn btn-primary" style="width:100%;">Send Message <i class="fa-solid fa-paper-plane"></i></button>
        </form>
      </div>
    </div>
  </div>
</section>
<section class="section-tight">
  <div class="container">
    <div class="cta-banner reveal">
      <h2>Prefer to talk it through first?</h2>
      <p>Use Live Help to chat with a specialist right now, no forms required.</p>
      <div class="hero-actions">
        <a href="/contact/" class="btn btn-primary" style="background:#fff;color:var(--c-primary);">Get a Free Quote</a>
        <a href="/contact/" class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </div>
</section>

PGCONTENT;
	$content_privacy_policy = <<<'PGCONTENT'

<section class="hero hero-sm">
  <div class="container reveal in">
    <span class="eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;"><i class="fa-solid fa-shield-halved"></i> Legal</span>
    <h1>Privacy Policy</h1>
    <p>How Payroll Servicess collects, uses, stores, and protects your information.</p>
  </div>
</section>
<div class="breadcrumb-bar">
  <div class="container">
    <div class="breadcrumb">
      <a href="/">Home</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Privacy Policy</span>
    </div>
  </div>
</div>

<section class="section" style="padding-bottom:34px;">
  <div class="container">
    <div class="reveal">

      <h2>Please Read the Following Terms of Our Privacy Policy</h2>
      <p>By accessing and using PayrollServicess.com, you acknowledge that you have read, understood, and agreed to the terms outlined in this Privacy Policy. This Privacy Policy explains how Payroll Servicess collects, uses, stores, and protects the information you provide while using our Website and services.</p>
      <p>This Privacy Policy applies to all visitors, users, and customers who browse our Website or use any of our payroll, accounting, bookkeeping, tax preparation, and financial support services.</p>
      <p>The personal information you provide may be used to communicate with you regarding your inquiries, requested services, account updates, newsletters, promotional offers, or other information related to our business. Your personal information may include, but is not limited to, your name, company name, email address, phone number, mailing address, billing details, financial information, and any documents you voluntarily submit through our Website.</p>

      <h2>Personal Information We May Collect</h2>
      <p>To provide our services efficiently, we may collect certain personal and business information when you contact us, request a consultation, submit an inquiry, or purchase our services.</p>
      <p>The information we may collect includes: Full Name, Company Name, Email Address, Phone Number, Business Address, Billing Information, Payroll and Accounting Information, Tax-Related Information, and documents submitted for service processing.</p>
      <p>When you visit our Website, certain technical information may also be collected automatically, including: IP Address, Browser Type, Device Information, Operating System, Pages Visited, Date and Time of Visit, Referral Website, and Website Usage Statistics.</p>
      <p>Please note that your IP address is collected for security and analytical purposes and does not personally identify you.</p>
      <p>Our Website and services are intended for individuals who are at least 18 years of age. We do not knowingly collect personal information from children under the age of 13. If we become aware that such information has been collected, we will promptly remove it from our records.</p>

      <h2>How We Use the Information We Collect</h2>
      <p>Payroll Servicess collects and stores your information solely for legitimate business purposes. We use your information to provide high-quality services and improve your overall experience with our Website.</p>
      <p>Your information may be used to improve our Website and customer experience, monitor Website performance and security, understand visitor demographics and Website traffic, communicate important updates regarding our services, and send newsletters, business updates, and promotional offers where permitted by law.</p>

      <h2>Sharing of Information</h2>
      <p>Payroll Servicess values your privacy and does not sell, rent, or trade your personal information to third parties for marketing purposes.</p>
      <p>However, in order to provide our services effectively, we may share limited information with trusted third-party providers such as payment processing providers, cloud hosting providers, IT service providers, accounting software partners, email communication providers, and government agencies when legally required.</p>
      <p>These third parties are only permitted to use your information to perform services on our behalf and are required to protect your information appropriately.</p>
      <p>We may also disclose your personal information when required to comply with applicable laws, court orders, subpoenas, government investigations, or to protect our legal rights, customers, employees, or business interests.</p>

      <h2>Cookies and Tracking Technologies</h2>
      <p>Our Website uses cookies and similar technologies to improve your browsing experience. Cookies help us remember your preferences, analyze Website traffic, improve Website performance, enhance Website security, understand visitor behavior, and deliver a more personalized browsing experience.</p>
      <p>Cookies do not collect sensitive personal information such as passwords or payment credentials. You may choose to disable cookies through your browser settings; however, certain Website features may not function properly if cookies are disabled.</p>

      <h2>Data Security</h2>
      <p>Protecting your information is one of our highest priorities. Payroll Servicess uses appropriate administrative, technical, and physical security measures to safeguard your personal information from unauthorized access, misuse, alteration, or disclosure.</p>
      <p>Although we take reasonable precautions to secure your information, no method of data transmission over the internet or electronic storage can be guaranteed to be completely secure.</p>

      <h2>Third-Party Links</h2>
      <p>Our Website may contain links to third-party websites for your convenience. Payroll Servicess is not responsible for the privacy practices, content, or policies of these external websites. We encourage you to review their privacy policies before providing any personal information.</p>

      <h2>Changes to This Privacy Policy</h2>
      <p>Payroll Servicess reserves the right to modify or update this Privacy Policy at any time without prior notice. Any changes will become effective immediately upon being posted on this Website. We encourage users to review this Privacy Policy periodically to remain informed about how we protect their information.</p>

      <h2>Contact Us</h2>
      <p>If you have any questions regarding this Privacy Policy or the handling of your personal information, please contact us:</p>
      <p><b>Payroll Servicess</b><br>
      <b>Business Address: </b>USA<br>
      <b>Email:</b> support@payrollservicess.com<br>
      <b>Phone:</b> +91 9876543210</p>

    </div>
  </div>
</section>
<section class="section-tight">
  <div class="container">
    <div class="cta-banner reveal">
      <h2>Questions about how we handle your data?</h2>
      <p>Reach out any time — a specialist will get back to you within one business day.</p>
      <div class="hero-actions">
        <a href="/contact/" class="btn btn-primary" style="background:#fff;color:var(--c-primary);">Get a Free Quote</a>
        <a href="/contact/" class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </div>
</section>
PGCONTENT;

	$content_payroll_services = <<<'PGCONTENT'

<section class="hero">
  <div class="hero-ring"></div>
  <div class="container hero-grid">
    <div class="reveal in">
      <h1>Secure &amp; Hassle-Free Payroll Services for Modern Business</h1>
      <p class="lead">We provide reliable end-to-end payroll support—from accurate wage calculations and direct deposits to payroll tax filing and employee payslips—so your team is paid correctly, securely, and on time.</p>

      <div style="display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:12px;margin:24px 0;">
        <div><i class="fa-solid fa-circle-check" style="color:var(--c-secondary);"></i> Experienced Payroll Professionals</div>
        <div><i class="fa-solid fa-circle-check" style="color:var(--c-secondary);"></i> Accurate Payroll Calculations</div>
        <div><i class="fa-solid fa-circle-check" style="color:var(--c-secondary);"></i> On-Time Payroll Processing</div>
        <div><i class="fa-solid fa-circle-check" style="color:var(--c-secondary);"></i> Secure Employee Data Management</div>
      </div>

      <div class="hero-actions">
        <a href="/contact/" class="btn btn-primary">Get a Free Quote <i class="fa-solid fa-arrow-right"></i></a>
        <a href="/contact/" class="btn btn-outline">Live Help</a>
      </div>
    </div>

    <div class="hero-visual reveal in">
      <div class="collage-item ci-1">
        <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&amp;w=600&amp;auto=format&amp;fit=crop" alt="Payroll professional reviewing employee payments">
      </div>
      <div class="collage-item ci-2">
        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&amp;w=600&amp;auto=format&amp;fit=crop" alt="Payroll team supporting a business">
      </div>
      <div class="collage-item ci-3">
        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&amp;w=600&amp;auto=format&amp;fit=crop" alt="Payroll reports and employee records">
      </div>
    </div>
  </div>
</section>

<section class="logo-strip">
  <div class="container">
    <p style="font-size:16px;text-align:center;font-weight:300;color:#111;">At Accounting Assist Pro, managing payroll should not take hours out of your week or keep you up at night worrying about compliance. Our end-to-end payroll services automate the heavy lifting, reduce administrative pressure, and help ensure your employees are paid accurately and on time—so you can focus on scaling your business.</p>
  </div>
</section>

<section class="pa-section">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-layer-group"></i> What We Offer</span>
      <h2>Our Payroll Core Services</h2>
      <p>Comprehensive Payroll Solutions Built for Modern Teams</p>
    </div>

    <div class="pa-grid">
      <div class="pa-card reveal">
        <div class="pa-head pa-bookkeeping">
          <div class="pa-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
          <h3>Payroll Processing</h3>
        </div>
        <div class="pa-body">
          <p>Timely and accurate payroll processing is essential for maintaining employee satisfaction and business compliance. We calculate wages, overtime, bonuses, deductions, commissions, and other payroll components while ensuring every payroll cycle is completed correctly.</p>
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Weekly, bi-weekly, semi-monthly, and monthly payroll</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Salary and hourly wage calculations</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Overtime and bonus calculations</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Employee deductions and reimbursements</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> New hire and termination payroll</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Payroll reporting</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Customized payroll schedules</li>
          </ul>
        </div>
      </div>

      <div class="pa-card reveal">
        <div class="pa-head pa-accounting">
          <div class="pa-icon"><i class="fa-solid fa-building-columns"></i></div>
          <h3>Direct Deposit</h3>
        </div>
        <div class="pa-body">
          <p>Provide your employees with fast, secure, and convenient payment through direct deposit. We manage the direct deposit process so employees receive their wages directly into their bank accounts on payday.</p>
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Faster employee payments</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Secure electronic fund transfers</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Reduced paperwork</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Lower payroll administration costs</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Improved employee satisfaction</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Reliable payment scheduling</li>
          </ul>
        </div>
      </div>

      <div class="pa-card reveal">
        <div class="pa-head pa-payroll">
          <div class="pa-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
          <h3>Payroll Tax Filing</h3>
        </div>
        <div class="pa-body">
          <p>Payroll tax compliance can be challenging due to changing tax regulations. Our payroll professionals prepare and file payroll taxes accurately and on time, helping your business avoid penalties and costly mistakes.</p>
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Federal payroll tax filings</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> State payroll tax filings</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Local payroll tax reporting</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Quarterly payroll tax returns</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Annual payroll tax forms</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Payroll tax deposits</li>
          </ul>
        </div>
      </div>

      <div class="pa-card reveal" style="margin-top:4%;">
        <div class="pa-head pa-tax">
          <div class="pa-icon"><i class="fa-solid fa-receipt"></i></div>
          <h3>Employee Payslips</h3>
        </div>
        <div class="pa-body">
          <p>Employees deserve clear and professional payroll records. We generate accurate payslips that provide complete earnings and deduction details for every payroll cycle.</p>
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Gross and net pay</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Tax deductions</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Benefits deductions</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Overtime earnings</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Bonuses and commissions</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Digital payslip delivery</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head reveal in">
      <span class="eyebrow"><i class="fa-solid fa-plug"></i> Payroll Platforms</span>
      <h2>Payroll Software We Work With</h2>
      <p><strong>Your Payroll, Your Software, Our Expertise</strong></p>
      <p>Already using a payroll platform? Great—we will work within your existing system. Whether you are processing payroll for a handful of employees or managing a growing workforce, our experts help ensure accurate payroll, timely tax filings, and seamless employee payments without disrupting your workflow.</p>
    </div>
    <div class="grid grid-3">
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-q"></i></div><div><h3>QuickBooks</h3><p>Online, Desktop, Enterprise, Payroll.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-leaf"></i></div><div><h3>Sage</h3><p>Sage 50, Sage 100, Sage 300, Intacct.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-x"></i></div><div><h3>Xero</h3><p>Setup, migration, integrations &amp; training.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-cubes"></i></div><div><h3>NetSuite</h3><p>ERP implementation, support &amp; reporting.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-receipt"></i></div><div><h3>FreshBooks</h3><p>Invoicing, reporting &amp; subscription setup.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-water"></i></div><div><h3>Wave &amp; Others</h3><p>Zoho Books, Wave, Gusto &amp; more.</p></div></div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal in">
      <span class="eyebrow"><i class="fa-solid fa-industry"></i> Industries</span>
      <h2>Industries We Serve</h2>
      <p>We provide dependable payroll services for businesses across a wide range of industries.</p>
    </div>
    <div style="display:flex;flex-wrap:wrap;gap:14px;justify-content:center;" class="reveal in">
      <span class="tag-pill"><i class="fa-solid fa-store"></i> Small Businesses</span>
      <span class="tag-pill"><i class="fa-solid fa-rocket"></i> Startups</span>
      <span class="tag-pill"><i class="fa-solid fa-hospital"></i> Healthcare</span>
      <span class="tag-pill"><i class="fa-solid fa-house"></i> Real Estate</span>
      <span class="tag-pill"><i class="fa-solid fa-helmet-safety"></i> Construction</span>
      <span class="tag-pill"><i class="fa-solid fa-bag-shopping"></i> Retail</span>
      <span class="tag-pill"><i class="fa-solid fa-cart-shopping"></i> E-commerce</span>
      <span class="tag-pill"><i class="fa-solid fa-industry"></i> Manufacturing</span>
      <span class="tag-pill"><i class="fa-solid fa-briefcase"></i> Professional Services</span>
      <span class="tag-pill"><i class="fa-solid fa-hand-holding-heart"></i> Nonprofits</span>
    </div>
  </div>
</section>

<section class="section section-alt" style="background:#f8fafc;">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-shield-halved"></i> Why Choose Us</span>
      <h2>Why Do Modern Businesses Trust Assist Pro for Payroll Services?</h2>
      <p>Accurate, compliant, and stress-free payroll management tailored for growing teams.</p>
    </div>
    <div class="grid grid-3">
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Expertise</span><i class="fa-solid fa-user-tie"></i></div><div class="res-body"><div class="meta">Professional Support</div><h3>Experienced Payroll Professionals</h3><p>Payroll specialists who understand employee payments, deductions, taxes, compliance requirements, and reporting.</p><a href="/contact/" class="card-link">Get Support <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Accuracy</span><i class="fa-solid fa-calculator"></i></div><div class="res-body"><div class="meta">Reliable Processing</div><h3>Accurate &amp; Timely Payroll</h3><p>Structured checks and reliable processing help ensure every employee is paid correctly and on schedule.</p><a href="/contact/" class="card-link">Get Support <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Security</span><i class="fa-solid fa-lock"></i></div><div class="res-body"><div class="meta">Protected Information</div><h3>Secure Data Management</h3><p>Confidential payroll and employee information is handled through secure, controlled processes.</p><a href="/contact/" class="card-link">Get Support <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Flexible</span><i class="fa-solid fa-sliders"></i></div><div class="res-body"><div class="meta">Built Around You</div><h3>Customized Service Plans</h3><p>Payroll services and schedules are tailored to your workforce, pay frequency, and operational requirements.</p><a href="/contact/" class="card-link">Get Support <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Responsive</span><i class="fa-solid fa-bolt"></i></div><div class="res-body"><div class="meta">Fast Delivery</div><h3>Quick Turnaround Time</h3><p>Prompt processing, timely filings, and efficient issue resolution help keep every payroll cycle on track.</p><a href="/contact/" class="card-link">Get Support <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Support</span><i class="fa-solid fa-headset"></i></div><div class="res-body"><div class="meta">Clear Communication</div><h3>Dedicated Ongoing Support</h3><p>Receive transparent updates and dependable support from a team that understands your payroll setup.</p><a href="/contact/" class="card-link">Get Support <i class="fa-solid fa-arrow-right"></i></a></div></div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-route"></i> Our Process</span>
      <h2>Assist Pro Payroll Process Designed for Accuracy</h2>
      <p>A simple, transparent process to keep payroll accurate, compliant, and on schedule.</p>
    </div>
    <div class="process-wrap reveal">
      <div class="process-line"><div class="process-line-fill"></div></div>
      <div class="process-steps">
        <div class="p-step"><div class="p-num">1</div><h4>Setup &amp; Onboarding</h4><p>We gather your payroll details and securely set up employee information, tax data, and payroll preferences.</p></div>
        <div class="p-step"><div class="p-num">2</div><h4>Payroll Processing</h4><p>We accurately calculate wages, deductions, taxes, bonuses, commissions, reimbursements, and benefits for every pay period.</p></div>
        <div class="p-step"><div class="p-num">3</div><h4>Payments &amp; Tax Filing</h4><p>We process employee payments and file payroll taxes on time to help keep your business compliant.</p></div>
        <div class="p-step"><div class="p-num">4</div><h4>Reports &amp; Support</h4><p>Receive payroll reports, employee payslips, and ongoing expert support whenever you need it.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="section" style="background:#C2F5FF;">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-quote-left"></i> What Our Clients Say</span>
      <h2>Trusted by Businesses. Valued by Clients.</h2>
    </div>
    <div class="grid grid-3">
      <div class="t-card reveal">
        <div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <p class="t-quote">"Accounting Assist Pro has completely streamlined our payroll process. Employees are paid accurately and on time every pay period, and we no longer worry about payroll tax deadlines. Their team is responsive, professional, and a pleasure to work with."</p>
        <div class="t-person"><div class="t-avatar">DH</div><div><b>Dylan Hayes</b><span>Small Business Owner</span></div></div>
      </div>
      <div class="t-card reveal">
        <div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <p class="t-quote">"Managing payroll used to take hours every week. Since partnering with Accounting Assist Pro, everything from direct deposits to employee payslips is handled efficiently. Their attention to detail has saved us both time and stress."</p>
        <div class="t-person"><div class="t-avatar">OM</div><div><b>Owen Murphy</b><span>Operations Manager</span></div></div>
      </div>
      <div class="t-card reveal">
        <div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <p class="t-quote">"We needed a payroll service that could grow with our business, and Accounting Assist Pro exceeded our expectations. Their payroll processing is accurate, tax filings are always on time, and their support team is quick to answer our questions."</p>
        <div class="t-person"><div class="t-avatar">CE</div><div><b>Connor Ellis</b><span>CEO</span></div></div>
      </div>
    </div>
  </div>
</section>

<section class="section" style="background-color:#fff;">
  <div class="container split">
    <div class="reveal">
      <span class="eyebrow"><i class="fa-solid fa-comments"></i> Get in Touch</span>
      <h2>Ready to Simplify Your Payroll?</h2>
      <h3 style="color:var(--c-secondary);font-size:18px;margin-bottom:16px;">Speak with a Payroll Expert</h3>
      <p>Tell us about your team and payroll requirements. A specialist will reach out within one business day.</p>
    </div>

    <div class="reveal">
      <div class="form-box">
        <form class="contact-form">
          <div class="form-field">
            <label>Name</label>
            <input type="text" placeholder="Jordan Ellis" required>
          </div>
          <div class="form-field">
            <label>Email</label>
            <input type="email" placeholder="jordan@company.com" required>
          </div>
          <div class="form-field">
            <label>Phone</label>
            <input type="tel" placeholder="(555) 123-4567" required>
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%;">Send Message <i class="fa-solid fa-paper-plane"></i></button>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-circle-question"></i> FAQ</span>
      <h2>Frequently Asked Questions</h2>
    </div>

    <div style="max-width:760px;margin:0 auto;" class="reveal">
      <div class="faq-item">
        <div class="faq-q">How long does it take to switch from my current payroll provider? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">We handle the entire migration for you. Our onboarding team extracts your historical data, sets up employee profiles, and verifies your tax accounts so you can transition seamlessly between pay periods.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Can you handle payroll for remote employees in different states? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Absolutely. We support distributed teams and help calculate the applicable state and local payroll taxes based on where employees live and work.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">How often can payroll be processed? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">We support weekly, bi-weekly, semi-monthly, and monthly payroll schedules based on your business needs.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Do you provide direct deposit? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Yes. We offer secure direct deposit services to help ensure employees receive timely payments directly in their bank accounts.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Can you handle payroll tax filings? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Absolutely. We prepare and file federal, state, and local payroll taxes while helping your business stay compliant.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Will employees receive payslips? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Yes. Every payroll cycle includes detailed employee payslips showing earnings, deductions, taxes, benefits, bonuses, and net pay.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Is payroll information kept secure? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Yes. We use secure processes and controlled access practices to protect sensitive payroll and employee information.</div></div>
      </div>
    </div>

    <div class="text-center mt-40 reveal">
      <a href="/faq/" class="btn btn-outline-dark">View All FAQs <i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<section class="section-tight">
  <div class="container">
    <div class="cta-banner reveal">
      <h2>Ready to Simplify Your Payroll?</h2>
      <p>Speak with a payroll expert and get a customized payroll solution for your business.</p>
      <div class="hero-actions">
        <a href="/contact/" class="btn btn-primary" style="background:#fff;color:var(--c-primary);">Get a Free Quote</a>
        <a href="/contact/" class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </div>
</section>
PGCONTENT;
	$content_tax_services = <<<'PGCONTENT'

<section class="hero">
  <div class="hero-ring"></div>
  <div class="container hero-grid">
    <div class="reveal in">
      <h1>Assist Pro Tax Services</h1>
      <p class="lead">Professional Tax Solutions for Individuals &amp; Businesses</p>

      <div style="display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:12px;margin:24px 0;">
        <div><i class="fa-solid fa-circle-check" style="color:var(--c-secondary);"></i> Experienced Tax Professionals</div>
        <div><i class="fa-solid fa-circle-check" style="color:var(--c-secondary);"></i> Accurate Tax Preparation</div>
        <div><i class="fa-solid fa-circle-check" style="color:var(--c-secondary);"></i> On-Time Tax Filing</div>
        <div><i class="fa-solid fa-circle-check" style="color:var(--c-secondary);"></i> Secure Financial Data Management</div>
      </div>

      <div class="hero-actions">
        <a href="/contact/" class="btn btn-primary">Get a Free Quote <i class="fa-solid fa-arrow-right"></i></a>
        <a href="/contact/" class="btn btn-outline">Live Help</a>
      </div>
    </div>

    <div class="hero-visual reveal in">
      <div class="collage-item ci-1">
        <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?q=80&amp;w=600&amp;auto=format&amp;fit=crop" alt="Tax professional reviewing financial documents">
      </div>
      <div class="collage-item ci-2">
        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&amp;w=600&amp;auto=format&amp;fit=crop" alt="Tax professionals supporting a business client">
      </div>
      <div class="collage-item ci-3">
        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&amp;w=600&amp;auto=format&amp;fit=crop" alt="Tax records and financial documents">
      </div>
    </div>
  </div>
</section>

<section class="logo-strip">
  <div class="container">
    <p style="font-size:16px;text-align:center;font-weight:300;color:#111;">At Accounting Assist Pro, we handle the complexities of both local regulations and federal tax codes so you can focus on what matters most. Whether you run a business or need personal filing support, our tax professionals guide you through every step with confidence.</p>
  </div>
</section>

<section class="pa-section">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-layer-group"></i> What We Offer</span>
      <h2>Our Tax Services</h2>
      <p>Strategic Tax Solutions Built for Precision &amp; Compliance</p>
    </div>

    <div class="pa-grid">
      <div class="pa-card reveal">
        <div class="pa-head pa-bookkeeping">
          <div class="pa-icon"><i class="fa-solid fa-file-signature"></i></div>
          <h3>Business Tax Preparation</h3>
        </div>
        <div class="pa-body">
          <p>Accurate and compliant tax return preparation for businesses of all sizes. We help maximize deductions, minimize liabilities, and ensure timely filing.</p>
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Business tax return preparation</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Federal and state tax filing</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Tax deduction review</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Financial statement review</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Estimated tax calculations</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Year-end tax reporting</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Tax compliance support</li>
          </ul>
        </div>
      </div>

      <div class="pa-card reveal">
        <div class="pa-head pa-accounting">
          <div class="pa-icon"><i class="fa-solid fa-user-check"></i></div>
          <h3>Individual Tax Returns</h3>
        </div>
        <div class="pa-body">
          <p>Professional tax preparation services designed to help individuals file confidently while claiming all eligible credits and deductions.</p>
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Federal tax returns</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> State income tax returns</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Self-employed tax returns</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Investment income reporting</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Retirement income reporting</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Tax credits and deductions</li>
          </ul>
        </div>
      </div>

      <div class="pa-card reveal">
        <div class="pa-head pa-payroll">
          <div class="pa-icon"><i class="fa-solid fa-chart-line"></i></div>
          <h3>Tax Planning</h3>
        </div>
        <div class="pa-body">
          <p>Proactive tax strategies that help reduce future tax burdens, improve financial decisions, and support long-term growth.</p>
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Year-round tax planning</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Tax-saving strategies</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Estimated tax planning</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Business tax planning</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Retirement tax planning</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Growth-focused tax advice</li>
          </ul>
        </div>
      </div>

      <div class="pa-card reveal" style="margin-top:4%;">
        <div class="pa-head pa-tax">
          <div class="pa-icon"><i class="fa-solid fa-cash-register"></i></div>
          <h3>Sales Tax Filing</h3>
        </div>
        <div class="pa-body">
          <p>Timely and accurate sales tax filing services help businesses stay compliant with state regulations and avoid costly penalties.</p>
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Sales tax registration assistance</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Sales tax calculations</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Monthly, quarterly, and annual filings</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Multi-state sales tax support</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Sales tax reporting</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Compliance monitoring</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head reveal in">
      <span class="eyebrow"><i class="fa-solid fa-plug"></i> Tax Platforms</span>
      <h2>Tax Expertise Across Leading Platforms</h2>
      <p>Our professionals are experienced with leading tax preparation and accounting platforms, allowing us to work seamlessly within your existing systems.</p>
    </div>
    <div class="grid grid-3">
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-q"></i></div><div><h3>QuickBooks</h3><p>Online, Desktop, Enterprise, Payroll.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-leaf"></i></div><div><h3>Sage</h3><p>Sage 50, Sage 100, Sage 300, Intacct.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-x"></i></div><div><h3>Xero</h3><p>Setup, migration, integrations &amp; training.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-cubes"></i></div><div><h3>NetSuite</h3><p>ERP implementation, support &amp; reporting.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-receipt"></i></div><div><h3>FreshBooks</h3><p>Invoicing, reporting &amp; subscription setup.</p></div></div>
      <div class="card platform-card reveal in"><div class="card-icon"><i class="fa-solid fa-water"></i></div><div><h3>Wave &amp; Others</h3><p>Zoho Books, Wave, Gusto &amp; more.</p></div></div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal in">
      <span class="eyebrow"><i class="fa-solid fa-industry"></i> Industries</span>
      <h2>Industries We Serve</h2>
      <p>Our tax services are tailored for businesses and individuals across a wide range of industries.</p>
    </div>
    <div style="display:flex;flex-wrap:wrap;gap:14px;justify-content:center;" class="reveal in">
      <span class="tag-pill"><i class="fa-solid fa-store"></i> Small Businesses</span>
      <span class="tag-pill"><i class="fa-solid fa-rocket"></i> Startups</span>
      <span class="tag-pill"><i class="fa-solid fa-hospital"></i> Healthcare</span>
      <span class="tag-pill"><i class="fa-solid fa-house"></i> Real Estate</span>
      <span class="tag-pill"><i class="fa-solid fa-helmet-safety"></i> Construction</span>
      <span class="tag-pill"><i class="fa-solid fa-bag-shopping"></i> Retail</span>
      <span class="tag-pill"><i class="fa-solid fa-cart-shopping"></i> E-commerce</span>
      <span class="tag-pill"><i class="fa-solid fa-industry"></i> Manufacturing</span>
      <span class="tag-pill"><i class="fa-solid fa-briefcase"></i> Professional Services</span>
      <span class="tag-pill"><i class="fa-solid fa-hand-holding-heart"></i> Nonprofits</span>
    </div>
  </div>
</section>

<section class="section section-alt" style="background:#f8fafc;">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-shield-halved"></i> Why Choose Us</span>
      <h2>Why Choose Accounting Assist Pro for Tax Preparation Services?</h2>
      <p>Businesses and individuals trust us because we make tax filing simple, accurate, and stress-free.</p>
    </div>
    <div class="grid grid-3">
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Expertise</span><i class="fa-solid fa-user-tie"></i></div><div class="res-body"><div class="meta">Professional Support</div><h3>Experienced Tax Professionals</h3><p>Experienced tax specialists who understand business returns, individual filings, deductions, credits, and regulatory requirements.</p><a href="/contact/" class="card-link">Get Support <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Accuracy</span><i class="fa-solid fa-calculator"></i></div><div class="res-body"><div class="meta">Reliable Processing</div><h3>Accurate &amp; Timely Tax Preparation</h3><p>Structured reviews and quality checks help ensure your tax returns are prepared accurately and filed on time.</p><a href="/contact/" class="card-link">Get Support <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Security</span><i class="fa-solid fa-lock"></i></div><div class="res-body"><div class="meta">Protected Information</div><h3>Secure Data Management</h3><p>Confidential tax and financial information is handled through secure, controlled processes.</p><a href="/contact/" class="card-link">Get Support <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Flexible</span><i class="fa-solid fa-sliders"></i></div><div class="res-body"><div class="meta">Built Around You</div><h3>Personalized Tax Strategies</h3><p>Tax strategies and preparation services are tailored to your income, industry, entity type, and financial goals.</p><a href="/contact/" class="card-link">Get Support <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Responsive</span><i class="fa-solid fa-bolt"></i></div><div class="res-body"><div class="meta">Fast Delivery</div><h3>Quick Turnaround Time</h3><p>Prompt preparation, timely filings, and efficient issue resolution help keep your tax obligations on track.</p><a href="/contact/" class="card-link">Get Support <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Support</span><i class="fa-solid fa-headset"></i></div><div class="res-body"><div class="meta">Clear Communication</div><h3>Dedicated Ongoing Support</h3><p>Receive transparent updates and dedicated year-round support from professionals who understand your tax situation.</p><a href="/contact/" class="card-link">Get Support <i class="fa-solid fa-arrow-right"></i></a></div></div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-route"></i> Our Process</span>
      <h2>Our Simple, 4-Step Tax Process</h2>
      <p>A simple, transparent process designed to keep your tax preparation accurate, compliant, and organized.</p>
    </div>
    <div class="process-wrap reveal">
      <div class="process-line"><div class="process-line-fill"></div></div>
      <div class="process-steps">
        <div class="p-step"><div class="p-num">1</div><h4>Financial Review</h4><p>We review your financial records, income, expenses, and tax documents to understand your tax situation.</p></div>
        <div class="p-step"><div class="p-num">2</div><h4>Business Tax Preparation</h4><p>Our experts prepare accurate tax returns while identifying eligible deductions and credits.</p></div>
        <div class="p-step"><div class="p-num">3</div><h4>Filing &amp; Compliance</h4><p>We file your tax returns on time and help ensure compliance with applicable tax regulations.</p></div>
        <div class="p-step"><div class="p-num">4</div><h4>Ongoing Tax Support</h4><p>Receive guidance on tax planning, future filings, and strategies that may help reduce your tax burden throughout the year.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="section" style="background:#C2F5FF;">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-quote-left"></i> What Our Clients Say</span>
      <h2>Trusted by Businesses. Valued by Clients.</h2>
    </div>
    <div class="grid grid-3">
      <div class="t-card reveal">
        <div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <p class="t-quote">"Tax season used to be a complete nightmare. Assist Pro found deductions our old software missed entirely and saved our business thousands this year."</p>
        <div class="t-person"><div class="t-avatar">MV</div><div><b>Marcus Vance</b><span>Founder &amp; Real Estate Investor</span></div></div>
      </div>
      <div class="t-card reveal">
        <div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <p class="t-quote">"Incredibly fast, accurate, and professional. They handled our multi-state corporate returns and personal filings seamlessly without a single hiccup."</p>
        <div class="t-person"><div class="t-avatar">ER</div><div><b>Elena Rostova</b><span>E-commerce Retailer</span></div></div>
      </div>
      <div class="t-card reveal">
        <div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <p class="t-quote">"They do not just file your taxes; they actually plan ahead. Their proactive strategy legally reduced our tax liability for the upcoming year."</p>
        <div class="t-person"><div class="t-avatar">AE</div><div><b>Avery Ellis</b><span>Real Estate Investor</span></div></div>
      </div>
    </div>
  </div>
</section>

<section class="section" style="background-color:#fff;">
  <div class="container split">
    <div class="reveal">
      <span class="eyebrow"><i class="fa-solid fa-comments"></i> Get in Touch</span>
      <h2>Ready to Simplify Your Taxes?</h2>
      <h3 style="color:var(--c-secondary);font-size:18px;margin-bottom:16px;">Speak with a Tax Expert</h3>
      <p>Tell us about your tax preparation or planning needs. A tax specialist will reach out within one business day.</p>
    </div>

    <div class="reveal">
      <div class="form-box">
        <form class="contact-form">
          <div class="form-field">
            <label>Name</label>
            <input type="text" placeholder="Jordan Ellis" required>
          </div>
          <div class="form-field">
            <label>Email</label>
            <input type="email" placeholder="jordan@company.com" required>
          </div>
          <div class="form-field">
            <label>Phone</label>
            <input type="tel" placeholder="(555) 123-4567" required>
          </div>
          <button type="submit" class="btn btn-primary" style="width:100%;">Send Message <i class="fa-solid fa-paper-plane"></i></button>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-circle-question"></i> FAQ</span>
      <h2>Frequently Asked Questions</h2>
    </div>

    <div style="max-width:760px;margin:0 auto;" class="reveal">
      <div class="faq-item">
        <div class="faq-q">When should I start preparing my taxes? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">It is best to organize your financial records throughout the year and begin preparing well before applicable filing deadlines.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Can you prepare both business and personal tax returns? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Yes. We provide tax preparation services for businesses, individuals, and self-employed professionals.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Do you offer year-round tax planning? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Absolutely. We provide proactive year-round tax planning designed to help minimize future tax liabilities and support better financial decisions.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Can you help with sales tax filing? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Yes. We prepare and file sales tax returns while helping businesses stay compliant with applicable state requirements.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Can professional tax services help reduce my business taxes? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Yes. Through proactive tax planning—including deduction strategies, entity-structure considerations, and optimized timing of eligible business expenses—our professionals help identify lawful opportunities to reduce tax liability.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">What platforms do you use to prepare and manage tax records? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">We support leading platforms including QuickBooks, Xero, Sage, NetSuite, FreshBooks, Wave, and specialized tax preparation tools. Your historical data remains organized and clearly categorized.</div></div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Is my tax and financial information kept secure? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a"><div class="faq-a-inner">Yes. We use secure processes and controlled-access practices to protect sensitive tax, personal, and financial information.</div></div>
      </div>
    </div>

    <div class="text-center mt-40 reveal">
      <a href="/faq/" class="btn btn-outline-dark">View All FAQs <i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<section class="section-tight">
  <div class="container">
    <div class="cta-banner reveal">
      <h2>Ready to Simplify Your Taxes?</h2>
      <p>Speak with a tax expert and get a customized tax preparation or planning solution for your needs.</p>
      <div class="hero-actions">
        <a href="/contact/" class="btn btn-primary" style="background:#fff;color:var(--c-primary);">Get a Free Quote</a>
        <a href="/contact/" class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </div>
</section>
PGCONTENT;


	$content_terms_and_conditions = <<<'PGCONTENT'

<section class="hero hero-sm">
  <div class="container reveal in">
    <span class="eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;"><i class="fa-solid fa-file-contract"></i> Legal</span>
    <h1>Terms and Conditions</h1>
    <p>Please read these terms carefully before using Payroll Servicess.</p>
  </div>
</section>
<div class="breadcrumb-bar">
  <div class="container">
    <div class="breadcrumb">
      <a href="/">Home</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Terms and Conditions</span>
    </div>
  </div>
</div>

<section class="section">
  <div class="container" style="max-width:860px;">
    <div class="reveal">

      <p>By using our website, you agree to the terms and conditions outlined below. If you do not agree with these terms, please do not use our services. We may update these terms periodically, so please check this page regularly.</p>

      <h2>Payroll and Accounting Services</h2>
      <p>Payroll Servicess offers payroll processing, bookkeeping, tax filing support, and related accounting services. Charges apply only once a service has been delivered. For returns or refunds, please refer to our <a href="/refund-policy/" style="color:var(--c-secondary);font-weight:600;">Refund Policy</a> on the website.</p>

      <h2>Customer Support</h2>
      <p>Our certified payroll and accounting specialists are available to assist with account setup, filings, and general queries. Support services are prepaid; refund requests are handled per our published <a href="/refund-policy/" style="color:var(--c-secondary);font-weight:600;">Refund Policy</a>.</p>

      <h2>Right to Modify Services</h2>
      <p>Payroll Servicess reserves the right to change, update, or discontinue any product or service at any time, without prior notice.</p>

      <h2>Limitation of Liability</h2>
      <p>Payroll Servicess' total liability for any claim shall not exceed the amount paid for the relevant service. We are not liable for indirect damages, service interruptions, delays, or business losses arising from use of our services.</p>

      <h2>Governing Law</h2>
      <p>These terms are governed by the laws of the State of Nevada. Any disputes shall be resolved exclusively in the courts of Las Vegas, Nevada. Claims against Payroll Servicess must be brought within one year of the relevant invoice date.</p>

      <h2>Indemnification</h2>
      <p>By using our services, you agree to indemnify and hold harmless Payroll Servicess, its officers, employees, and affiliates from any claims arising out of your use of the services or violation of this agreement.</p>

      <h2>Third-Party Sites</h2>
      <p>Payroll Servicess is not responsible for content, products, or services offered by third-party sites linked from our website. Please review their respective policies independently.</p>

      <h2>Copyright and Trademarks</h2>
      <p>All content on the Payroll Servicess website — including text, graphics, and interfaces — is the property of Payroll Servicess and may not be copied or reproduced without authorization.</p>

      <h2>Payment Terms</h2>
      <p>Payments are processed in US dollars via credit card, debit card, or PayPal. Sufficient funds must be available at the time of billing. Incomplete or outdated payment information may result in account suspension. Services are not automatically renewed unless stated in the applicable Service Agreement.</p>

      <h2>Contact</h2>
      <p>For questions regarding these Terms and Conditions, please contact us through our website.</p>

      <h2>Disclaimer</h2>
      <p>Payroll Servicess is an independent third-party service provider and is not affiliated with, endorsed by, or sponsored by Intuit Inc. or any of its products or services. All trademarks, logos, and brand names, including the Intuit name and logo, are the property of their respective owners. The use of such trademarks and logos on this website is strictly for informational and identification purposes only and does not imply any official association, authorization, or endorsement. By using this website, you acknowledge and agree that we are a third-party service provider and that any reliance on the information provided here is at your own discretion.</p>

      <h2>Changes</h2>
      <p>We reserve the right to amend this policy at any time without prior notice to you.</p>

      <h2>Questions</h2>
      <p>If you have any questions about this Disclaimer, please contact us at:</p>
      <p><b>Email:</b> support@payrollservicess.com</p>

    </div>
  </div>
</section>
<section class="section-tight">
  <div class="container">
    <div class="cta-banner reveal">
      <h2>Have a question about our terms?</h2>
      <p>Reach out any time — a specialist will get back to you within one business day.</p>
      <div class="hero-actions">
        <a href="/contact/" class="btn btn-primary" style="background:#fff;color:var(--c-primary);">Get a Free Quote</a>
        <a href="/contact/" class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </div>
</section>

PGCONTENT;
	$content_disclaimer = <<<'PGCONTENT'

<section class="hero hero-sm">
  <div class="container reveal in">
    <span class="eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;"><i class="fa-solid fa-circle-exclamation"></i> Legal</span>
    <h1>Disclaimer</h1>
    <p>Important information about our relationship to third-party brands.</p>
  </div>
</section>
<div class="breadcrumb-bar">
  <div class="container">
    <div class="breadcrumb">
      <a href="/">Home</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Disclaimer</span>
    </div>
  </div>
</div>

<section class="section">
  <div class="container">
    <div class="reveal">

      <p>Payroll Servicess is an independent third-party service provider and is not affiliated with, endorsed by, or sponsored by Intuit Inc. or any of its products or services. All trademarks, logos, and brand names, including the Intuit name and logo, are the property of their respective owners. The use of such trademarks and logos on this website is strictly for informational and identification purposes only and does not imply any official association, authorization, or endorsement. By using this website, you acknowledge and agree that we are a third-party service provider and that any reliance on the information provided here is at your own discretion.</p>

      <h2>Changes</h2>
      <p>We reserve the right to amend this policy at any time without prior notice to you.</p>

      <h2>Questions</h2>
      <p>If you have any questions about this Disclaimer, please contact us at:</p>
      <p><b>Email:</b> support@payrollservicess.com</p>

    </div>
  </div>
</section>
<section class="section-tight">
  <div class="container">
    <div class="cta-banner reveal">
      <h2>Have a question about this disclaimer?</h2>
      <p>Reach out any time — a specialist will get back to you within one business day.</p>
      <div class="hero-actions">
        <a href="/contact/" class="btn btn-primary" style="background:#fff;color:var(--c-primary);">Get a Free Quote</a>
        <a href="/contact/" class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </div>
</section>

PGCONTENT;
	$content_refund_policy = <<<'PGCONTENT'

<section class="hero hero-sm">
  <div class="container reveal in">
    <span class="eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;"><i class="fa-solid fa-rotate-left"></i> Legal</span>
    <h1>Returns &amp; Refunds Policy</h1>
    <p>How refund eligibility works for Payroll Servicess plans and services.</p>
  </div>
</section>
<div class="breadcrumb-bar">
  <div class="container">
    <div class="breadcrumb">
      <a href="/">Home</a>
      <i class="fa-solid fa-chevron-right"></i>
      <span>Refund Policy</span>
    </div>
  </div>
</div>

<section class="section">
  <div class="container">
    <div class="reveal">

      <p>Our services are provided on an individual, per-customer basis, and refund eligibility is limited accordingly. The fee charged for the Service is a flat rate, independent of actual usage. If the core Service purchased was not delivered, the customer may request a refund, provided the request is made within 7 days of the original transaction date. In the event a payment is accidentally charged twice on the same transaction, the customer is entitled to a full refund of the duplicate amount.</p>

      <h2>1. Work Already Completed Is Non-Refundable</h2>
      <p>Fees paid for payroll processing, tax filings, reconciliations, reports, and consultations that have already been carried out are final and non-refundable.</p>

      <h2>2. Prepaid Packages &amp; Retainer Plans</h2>
      <p>For customers on prepaid bundles or monthly retainers, the cost of services already performed will be subtracted from the total amount paid. Any remaining, unused balance may qualify for a partial refund, at the sole discretion of Payroll Servicess.</p>

      <h2>3. Accuracy of Client-Provided Information</h2>
      <p>Clients must supply complete and accurate payroll and financial data in a timely manner. We are not able to issue refunds for service delays or errors that result from missing, late, or incorrect information supplied by the client.</p>

      <h2>4. Cancelling Ongoing Services</h2>
      <p>To cancel an active service and avoid being billed for the next cycle, clients must provide written notice (via email) at least 7 days before the upcoming billing date.</p>

      <h2>5. Delays Due to Missed Communication</h2>
      <p>If a scheduled meeting is missed or a request for information goes unanswered, resulting service delays will not be treated as grounds for a refund.</p>

      <h2>6. Reporting Issues &amp; Corrections</h2>
      <p>Should you be unhappy with any part of our service, let us know within 5 business days of delivery. We will work to fix genuine errors or omissions at no extra charge. While refunds aren't automatic, we may offer one in exceptional situations.</p>

      <h2>7. Refund Turnaround Time</h2>
      <p>Approved refunds are issued back to the original payment method within 7–10 business days.</p>

      <h2>8. If Services Are Terminated</h2>
      <p>Payroll Servicess may end a service agreement at its discretion. Where this happens, a prorated refund for any unused prepaid balance may be provided.</p>

      <h2>9. Get in Touch</h2>
      <p>For refund requests or related questions, please email us at support@payrollservicess.com with your service details.</p>

    </div>
  </div>
</section>
<section class="section-tight">
  <div class="container">
    <div class="cta-banner reveal">
      <h2>Have a refund request?</h2>
      <p>Email our team with your service details and we'll take care of it within one business day.</p>
      <div class="hero-actions">
        <a href="/contact/" class="btn btn-primary" style="background:#fff;color:var(--c-primary);">Get a Free Quote</a>
        <a href="/contact/" class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </div>
</section>

PGCONTENT;

	return array(
		'about' => array( 'title' => 'About Us', 'content' => $content_about ),
		'services' => array( 'title' => 'Services', 'content' => $content_services ),
		'bookkeeping-services' => array( 'title' => 'Bookkeeping Services', 'content' => $content_bookkeeping_services ),
		'accounting-services' => array( 'title' => 'Accounting Services', 'content' => $content_accounting_services ),
		 'payroll-services' => array( 'title' => 'Payroll Services', 'content' => $content_payroll_services ),
         'tax-services' => array( 'title' => 'Tax Services', 'content' => $content_tax_services ),
		'resources' => array( 'title' => 'Resources', 'content' => $content_resources ),
		'faq' => array( 'title' => 'FAQ', 'content' => $content_faq ),
		'contact' => array( 'title' => 'Contact Us', 'content' => $content_contact ),
		'privacy-policy' => array( 'title' => 'Privacy Policy', 'content' => $content_privacy_policy ),
		'terms-and-conditions' => array( 'title' => 'Terms and Conditions', 'content' => $content_terms_and_conditions ),
		'disclaimer' => array( 'title' => 'Disclaimer', 'content' => $content_disclaimer ),
		'refund-policy' => array( 'title' => 'Refund Policy', 'content' => $content_refund_policy ),
	);
}
