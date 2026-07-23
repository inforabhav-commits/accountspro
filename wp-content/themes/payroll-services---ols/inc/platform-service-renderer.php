<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

function payroll_platform_industries( $heading, $copy ) {
	return [
		'heading' => $heading,
		'copy'    => $copy,
		'items'   => [
			[ 'icon' => 'fa-solid fa-store', 'label' => 'Small Businesses' ],
			[ 'icon' => 'fa-solid fa-rocket', 'label' => 'Startups' ],
			[ 'icon' => 'fa-solid fa-hospital', 'label' => 'Healthcare' ],
			[ 'icon' => 'fa-solid fa-house', 'label' => 'Real Estate' ],
			[ 'icon' => 'fa-solid fa-helmet-safety', 'label' => 'Construction' ],
			[ 'icon' => 'fa-solid fa-bag-shopping', 'label' => 'Retail' ],
			[ 'icon' => 'fa-solid fa-cart-shopping', 'label' => 'E-commerce' ],
			[ 'icon' => 'fa-solid fa-industry', 'label' => 'Manufacturing' ],
			[ 'icon' => 'fa-solid fa-briefcase', 'label' => 'Professional Services' ],
			[ 'icon' => 'fa-solid fa-hand-holding-heart', 'label' => 'Nonprofits' ],
		],
	];
}

function payroll_render_platform_service_page( array $page ) {
	$title       = $page['title'];
	$meta_desc   = $page['meta_description'];
	$hero        = $page['hero'];
	$offer       = $page['offer'];
	$products    = $page['products'] ?? null;
	$industries  = $page['industries'];
	$why         = $page['why'];
	$process     = $page['process'];
	$testimonials = $page['testimonials'];
	$faqs        = $page['faqs'];
	$cta         = $page['cta'];
	?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo esc_html( $title ); ?></title>
<meta name="description" content="<?php echo esc_attr( $meta_desc ); ?>">
<meta property="og:title" content="<?php echo esc_attr( $title ); ?>">
<meta property="og:description" content="<?php echo esc_attr( $meta_desc ); ?>">
<meta property="og:type" content="website">
<link rel="icon" href="data:,">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/style.css">
<style>
.hero{position:relative;overflow:hidden;background:#0A1330;padding:180px 0 80px;color:#fff;}
.hero::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 900px 700px at 12% 55%,rgba(47,91,255,.85),transparent 60%),radial-gradient(ellipse 620px 520px at 30% 25%,rgba(0,166,166,.45),transparent 55%);filter:blur(30px);}
.hero-grid{position:relative;z-index:1;}
.hero h1{color:#fff;font-size:clamp(38px,5vw,58px);font-weight:800;line-height:1.08;margin-bottom:22px;}
.hero p.lead{color:rgba(255,255,255,.86);font-size:16px;line-height:1.65;max-width:620px;margin-bottom:28px;}
.hero-list{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:12px 18px;max-width:650px;margin:0 0 34px;}
.hero-list li{display:flex;gap:10px;align-items:flex-start;color:rgba(255,255,255,.88);font-size:14px;font-weight:600;}
.hero-list i{color:var(--c-accent);margin-top:4px;}
.hero-visual{position:relative;height:420px;}
.collage-item{position:absolute;border-radius:16px;overflow:hidden;box-shadow:0 20px 40px rgba(0,0,0,.35);}
.collage-item img{width:100%;height:100%;object-fit:cover;display:block;}
.ci-1{top:0;left:18%;width:42%;height:170px;z-index:2;}
.ci-2{top:155px;left:0;width:44%;height:185px;z-index:3;}
.ci-3{top:24px;right:0;width:36%;height:330px;z-index:1;}
.cloud-stat{position:absolute;right:12%;bottom:0;z-index:4;background:#fff;color:var(--c-primary);border-radius:16px;padding:18px 20px;min-width:210px;box-shadow:0 25px 55px rgba(0,0,0,.35);}
.cloud-stat b{display:block;font-family:var(--font-display);font-size:28px;color:var(--c-secondary);}
.cloud-stat span{color:var(--c-text-muted);font-size:13px;}
.logo-strip .container>p{max-width:1240px;margin:0 auto;font-size:16px!important;line-height:1.75;text-align:center;font-weight:300;color:#111;}
.pa-section{position:relative;overflow:hidden;padding:110px 0;background:#0A1330;}
.pa-section::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 800px 600px at 85% 15%,rgba(47,91,255,.35),transparent 60%),radial-gradient(ellipse 700px 550px at 10% 90%,rgba(0,166,166,.25),transparent 55%);filter:blur(10px);}
.pa-section .section-head,.pa-grid{position:relative;z-index:1;}
.pa-section .section-head h2{color:#fff;}
.pa-section .section-head p{color:rgba(255,255,255,.65);}
.pa-section .eyebrow{background:rgba(255,255,255,.1);color:#fff;}
.pa-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;}
.pa-card{background:rgba(255,255,255,.04);backdrop-filter:blur(6px);border-radius:22px;overflow:hidden;border:1px solid rgba(255,255,255,.1);transition:transform .35s ease,box-shadow .35s ease,border-color .35s ease;display:flex;flex-direction:column;}
.pa-card:hover{transform:translateY(-10px);box-shadow:0 30px 60px rgba(0,0,0,.45);border-color:rgba(255,255,255,.25);}
.pa-head{position:relative;padding:34px 28px 58px;color:#fff;overflow:hidden;background:linear-gradient(135deg,#2f5bff 0%,#074b85 100%);}
.pa-head::after{content:'';position:absolute;left:0;right:0;bottom:-1px;height:26px;background:var(--c-surface,#fff);border-radius:24px 24px 0 0;}
.pa-icon{width:52px;height:52px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:20px;margin-bottom:20px;background:rgba(255,255,255,.18);position:relative;z-index:1;border:1px solid rgba(255,255,255,.25);}
.pa-head h3{color:#fff;font-size:20px;position:relative;z-index:1;margin-bottom:0;line-height:1.3;}
.pa-body{background:var(--c-surface,#fff);padding:8px 28px 30px;flex:1;display:flex;flex-direction:column;}
.pa-body p{font-size:14.5px;}
.mini-list{margin-top:auto;}
.mini-list li{display:flex;gap:10px;padding:9px 0;border-bottom:1px solid var(--c-border);font-size:13.5px;color:var(--c-text);}
.mini-list li:last-child{border-bottom:none;}
.mini-list i,.feature-list i{color:var(--c-accent);margin-top:4px;flex:none;}
.feature-list{display:grid;grid-template-columns:repeat(2,1fr);gap:12px 20px;}
.feature-list li{display:flex;gap:10px;color:var(--c-text);font-size:14px;font-weight:600;}
@media (max-width:1080px){.hero-grid{grid-template-columns:1fr;}.hero-visual{height:340px;margin-top:20px;}.pa-grid{grid-template-columns:repeat(2,1fr);}}
@media (max-width:768px){.hero{padding:150px 0 70px;}.hero-visual{display:none;}.hero-list,.feature-list,.pa-grid{grid-template-columns:1fr;}.pa-section{padding:70px 0;}}
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="nav-overlay"></div>
<div class="mobile-nav">
  <div class="mn-top"><div class="brand"><span class="brand-mark"><i class="fa-solid fa-coins"></i></span>Payroll Servicess</div><button class="mn-close" aria-label="Close menu"><i class="fa-solid fa-xmark"></i></button></div>
  <ul><li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li><li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li><li><a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">Resources</a></li><li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a></li></ul>
  <div class="mn-cta"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Get a Free Quote</a></div>
</div>
<nav class="navbar">
  <div class="container nav-inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand"><span class="brand-mark"><i class="fa-solid fa-coins"></i></span>Payroll Servicess</a>
    <ul class="nav-menu">
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
      <li class="has-dropdown"><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services <i class="fa-solid fa-chevron-down" style="font-size:10px;"></i></a>
        <ul class="dropdown">
          <li><a href="<?php echo esc_url( home_url( '/quickbooks/' ) ); ?>"><i class="fa-solid fa-q"></i> QuickBooks</a></li>
          <li><a href="<?php echo esc_url( home_url( '/sage/' ) ); ?>"><i class="fa-solid fa-leaf"></i> Sage</a></li>
          <li><a href="<?php echo esc_url( home_url( '/xero/' ) ); ?>"><i class="fa-solid fa-x"></i> Xero</a></li>
          <li><a href="<?php echo esc_url( home_url( '/cloud-hosting-services/' ) ); ?>"><i class="fa-solid fa-cloud"></i> Cloud Hosting Services</a></li>
        </ul>
      </li>
      <li><a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">Resources</a></li>
      <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a></li>
    </ul>
    <div class="nav-cta"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-dark btn-sm">Live Help</a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-sm">Get a Free Quote</a></div>
    <button class="nav-toggle" aria-label="Open menu"><i class="fa-solid fa-bars"></i></button>
  </div>
</nav>

<section class="hero">
  <div class="hero-ring"></div>
  <div class="container hero-grid">
    <div class="reveal in">
      <span class="eyebrow" style="background:rgba(255,255,255,.15);color:#fff;"><i class="<?php echo esc_attr( $hero['icon'] ); ?>"></i> <?php echo esc_html( $hero['eyebrow'] ); ?></span>
      <h1><?php echo esc_html( $hero['heading'] ); ?></h1>
      <p class="lead"><?php echo esc_html( $hero['subheading'] ); ?></p>
      <ul class="hero-list">
        <?php foreach ( $hero['bullets'] as $bullet ) : ?><li><i class="fa-solid fa-circle-check"></i><?php echo esc_html( $bullet ); ?></li><?php endforeach; ?>
      </ul>
      <div class="hero-actions"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Get a Free Quote <i class="fa-solid fa-arrow-right"></i></a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Live Help</a></div>
    </div>
    <div class="hero-visual reveal in">
      <?php foreach ( $hero['images'] as $index => $image ) : ?><div class="collage-item ci-<?php echo esc_attr( (string) ( $index + 1 ) ); ?>"><img src="<?php echo esc_url( $image['src'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"></div><?php endforeach; ?>
      <div class="cloud-stat"><b><?php echo esc_html( $hero['stat'] ); ?></b><span><?php echo esc_html( $hero['stat_label'] ); ?></span></div>
    </div>
  </div>
</section>

<section class="logo-strip"><div class="container"><p><?php echo esc_html( $page['intro'] ); ?></p></div></section>

<section class="pa-section">
  <div class="container">
    <div class="section-head reveal"><span class="eyebrow"><i class="fa-solid fa-layer-group"></i> What We Offer</span><h2><?php echo esc_html( $offer['heading'] ); ?></h2><p><?php echo esc_html( $offer['copy'] ); ?></p></div>
    <div class="pa-grid">
      <?php foreach ( $offer['cards'] as $card ) : ?>
        <div class="pa-card reveal"><div class="pa-head"><div class="pa-icon"><i class="<?php echo esc_attr( $card['icon'] ); ?>"></i></div><h3><?php echo esc_html( $card['title'] ); ?></h3></div><div class="pa-body"><p><?php echo esc_html( $card['copy'] ); ?></p><?php if ( ! empty( $card['items'] ) ) : ?><ul class="mini-list"><?php foreach ( $card['items'] as $item ) : ?><li><i class="fa-solid fa-check"></i><?php echo esc_html( $item ); ?></li><?php endforeach; ?></ul><?php endif; ?></div></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php if ( $products ) : ?>
<section class="section"><div class="container"><div class="section-head reveal"><span class="eyebrow"><i class="fa-solid fa-boxes-stacked"></i> Products</span><h2><?php echo esc_html( $products['heading'] ); ?></h2></div><div class="grid grid-3"><?php foreach ( $products['cards'] as $card ) : ?><div class="card platform-card reveal"><div class="card-icon"><i class="<?php echo esc_attr( $card['icon'] ); ?>"></i></div><div><h3><?php echo esc_html( $card['title'] ); ?></h3><p><?php echo esc_html( $card['copy'] ); ?></p></div></div><?php endforeach; ?></div></div></section>
<?php endif; ?>

<section class="section section-alt"><div class="container"><div class="section-head reveal"><span class="eyebrow"><i class="fa-solid fa-industry"></i> Industries</span><h2><?php echo esc_html( $industries['heading'] ); ?></h2><p><?php echo esc_html( $industries['copy'] ); ?></p></div><div style="display:flex;flex-wrap:wrap;gap:14px;justify-content:center;" class="reveal"><?php foreach ( $industries['items'] as $item ) : ?><span class="tag-pill"><i class="<?php echo esc_attr( $item['icon'] ); ?>"></i> <?php echo esc_html( $item['label'] ); ?></span><?php endforeach; ?></div></div></section>

<section class="section"><div class="container split"><div class="split-media reveal"><img src="<?php echo esc_url( $why['image'] ); ?>" alt="<?php echo esc_attr( $why['image_alt'] ); ?>"></div><div class="reveal"><span class="eyebrow"><i class="fa-solid fa-shield"></i> Why Choose Us</span><h2><?php echo esc_html( $why['heading'] ); ?></h2><p><?php echo esc_html( $why['copy'] ); ?></p><ul class="feature-list"><?php foreach ( $why['items'] as $item ) : ?><li><i class="fa-solid fa-check"></i><?php echo esc_html( $item ); ?></li><?php endforeach; ?></ul></div></div></section>

<section class="section section-alt"><div class="container"><div class="section-head reveal"><span class="eyebrow"><i class="fa-solid fa-route"></i> Our Process</span><h2><?php echo esc_html( $process['heading'] ); ?></h2><p><?php echo esc_html( $process['copy'] ); ?></p></div><div class="process-wrap reveal"><div class="process-line"><div class="process-line-fill"></div></div><div class="process-steps"><?php foreach ( $process['steps'] as $i => $step ) : ?><div class="p-step"><div class="p-num"><?php echo esc_html( (string) ( $i + 1 ) ); ?></div><h4><?php echo esc_html( $step['title'] ); ?></h4><p><?php echo esc_html( $step['copy'] ); ?></p></div><?php endforeach; ?></div></div></div></section>

<section class="section" style="background:#C2F5FF;"><div class="container"><div class="section-head reveal"><span class="eyebrow"><i class="fa-solid fa-quote-left"></i> What Our Clients Say</span><h2>Trusted by Businesses. Valued by Clients.</h2></div><div class="grid grid-3"><?php foreach ( $testimonials as $t ) : ?><div class="t-card reveal"><div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div><p class="t-quote">"<?php echo esc_html( $t['quote'] ); ?>"</p><div class="t-person"><div class="t-avatar"><?php echo esc_html( $t['initials'] ); ?></div><div><b><?php echo esc_html( $t['name'] ); ?></b><span><?php echo esc_html( $t['role'] ); ?></span></div></div></div><?php endforeach; ?></div></div></section>

<section class="section section-alt"><div class="container"><div class="section-head reveal"><span class="eyebrow"><i class="fa-solid fa-circle-question"></i> FAQ</span><h2>Frequently Asked Questions</h2></div><div class="faq-wrap reveal" style="max-width:850px;margin:0 auto;"><?php foreach ( $faqs as $faq ) : ?><div class="faq-item"><div class="faq-q"><?php echo esc_html( $faq['q'] ); ?> <i class="fa-solid fa-plus"></i></div><div class="faq-a"><div class="faq-a-inner"><?php echo esc_html( $faq['a'] ); ?></div></div></div><?php endforeach; ?></div></div></section>

<section class="section-tight"><div class="container"><div class="cta-banner reveal"><h2><?php echo esc_html( $cta['heading'] ); ?></h2><p><?php echo esc_html( $cta['copy'] ); ?></p><div class="hero-actions"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="background:#fff;color:var(--c-primary);"><?php echo esc_html( $cta['button'] ); ?></a><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Live Help</a></div></div></div></section>

<footer><div class="container"><div class="footer-grid"><div class="footer-brand"><div class="brand"><span class="brand-mark"><i class="fa-solid fa-coins"></i></span>Payroll Servicess</div><p><?php echo esc_html( $page['footer_copy'] ); ?></p><div class="footer-social"><a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a><a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a><a href="#" aria-label="Twitter/X"><i class="fa-brands fa-x-twitter"></i></a><a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a></div></div><div><h4>Quick Links</h4><ul class="footer-links"><li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>About Us</a></li><li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Services</a></li><li><a href="<?php echo esc_url( home_url( '/industries/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Industries</a></li><li><a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Pricing</a></li><li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Contact</a></li></ul></div><div><h4>Resources</h4><ul class="footer-links"><li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Blog</a></li><li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Privacy Policy</a></li><li><a href="<?php echo esc_url( home_url( '/terms-and-conditions/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Terms &amp; Conditions</a></li><li><a href="<?php echo esc_url( home_url( '/payroll-resources/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Payroll Resources</a></li><li><a href="<?php echo esc_url( home_url( '/business-finance/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Business Finance</a></li></ul></div><div><h4>Stay Informed</h4><p style="font-size:14px;color:rgba(255,255,255,.6);">Accounting software tips and business updates, once a month. No spam.</p><form class="newsletter"><input type="email" placeholder="Your email address" required><button type="submit" aria-label="Subscribe"><i class="fa-solid fa-arrow-right"></i></button></form><ul class="footer-contact" style="margin-top:24px;"><li><i class="fa-solid fa-phone"></i><span>(800) 555-0134</span></li><li><i class="fa-solid fa-envelope"></i><span>hello@payrollservicess.com</span></li></ul></div></div><div class="footer-bottom"><span>&copy; 2026 Payroll Servicess. All rights reserved.</span><div><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a><a href="<?php echo esc_url( home_url( '/terms-and-conditions/' ) ); ?>">Terms &amp; Conditions</a></div></div></div></footer>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>
	<?php
}
