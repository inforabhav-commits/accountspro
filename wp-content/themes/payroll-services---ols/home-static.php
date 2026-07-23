<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payroll & Accounting Services for Growing Businesses | Payroll Servicess</title>
<meta name="description" content="Payroll Servicess is the back-office finance team for growing businesses — bookkeeping, accounting, payroll, and tax filings handled by real specialists.">
<meta property="og:title" content="Payroll & Accounting Services for Growing Businesses | Payroll Servicess">
<meta property="og:description" content="Payroll Servicess is the back-office finance team for growing businesses — bookkeeping, accounting, payroll, and tax filings handled by real specialists.">
<meta property="og:type" content="website">
<link rel="icon" href="data:,">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/style.css">
<style>.hero{
  position:relative; overflow:hidden;
  background:#0A1330;
  padding:180px 0 70px; color:#fff;
}
.hero h1{
  color:#fff;
  font-size:clamp(44px, 6vw, 76px);   /* was clamp(34px,4.6vw,58px) */
  font-weight:700;
  letter-spacing:-0.02em;
  line-height:1.08;                    /* thoda tighter, bade text ke liye zaroori */
  margin-bottom:26px;
}

.hero p.lead{
  color:rgba(255,255,255,0.85);
  font-size:clamp(18px, 1.6vw, 22px);  /* was fixed 18px */
  line-height:1.5;
  max-width:560px;                     /* thoda wide kiya bade h1 ke saath balance ke liye */
  margin-bottom:34px;
}
.hero::before{
  content:'';
  position:absolute; inset:0;
  background:
    radial-gradient(ellipse 900px 700px at 12% 55%, rgba(47,91,255,0.85), transparent 60%),
    radial-gradient(ellipse 600px 500px at 28% 25%, rgba(80,120,255,0.5), transparent 55%);
  filter: blur(30px);
}
.hero-grid{ position:relative; z-index:1; }

.hero-visual{
  position:relative;
  height:420px;
}
.collage-item{
  position:absolute; border-radius:16px; overflow:hidden;
  box-shadow:0 20px 40px rgba(0,0,0,0.35);
}
.collage-item img{ width:100%; height:100%; object-fit:cover; display:block; }

.ci-1{ top:0; left:20%; width:38%; height:160px; z-index:2; }
.ci-2{ top:150px; left:0; width:42%; height:180px; z-index:3; }
.ci-3{ top:0; right:0; width:32%; height:330px; z-index:1; }
.ci-4{ bottom:0; left:24%; width:40%; z-index:2; }

.ci-card{
  background:#0F1B3D; color:#fff; border-radius:16px; padding:18px 20px;
}
.ci-card-label{ font-size:12px; color:rgba(255,255,255,0.65); }
.ci-card-amount{
  font-family:var(--font-display); font-size:28px; font-weight:700;
  color:#1E8E5A; margin:6px 0;
}
.ci-card p{ font-size:12.5px; color:rgba(255,255,255,0.6); margin:0; }

/* floating search pill */
.hero-search-float{
  position:relative; z-index:5;
  grid-column:1 / -1;
  margin-top:-60px;
  max-width:640px;
  background:#fff; border-radius:999px;
  display:flex; align-items:center; gap:14px;
  padding:10px 10px 10px 24px;
  box-shadow:0 25px 60px rgba(0,0,0,0.4);
}
.hero-search-icon{ color:#2F5BFF; font-size:16px; }
.hero-search-float input{
  flex:1; border:none; outline:none; font-size:15px; color:#1D1D1D; background:transparent;
}
.hero-search-float button{
  width:44px; height:44px; border-radius:50%; background:#1D1D1D; color:#fff;
  border:none; display:flex; align-items:center; justify-content:center; flex:none;
}

@media (max-width:1080px){
  .hero-visual{ height:340px; margin-top:20px; }
  .hero-search-float{ margin-top:20px; }
}
@media (max-width:768px){
  .hero-visual{ display:none; } /* collage hides on small screens, keeps it clean */
  .hero-search-float{ margin-top:0; }
}
.typewriter{
  display:inline-block;
  overflow:hidden;
  white-space:nowrap;
  width:0;
  animation: typing 2.8s steps(40, end) forwards;
  /* border-right aur blink-cursor animation hata diya */
}

@keyframes typing{
  from{ width:0; }
  to{ width:100%; }
}
/* ---------- Pro Assist Services section ---------- */
.pa-section{
  position:relative;
  overflow:hidden;
  padding:110px 0;
  background:#0A1330;
}
.pa-section::before{
  content:'';
  position:absolute; inset:0;
  background:
    radial-gradient(ellipse 800px 600px at 85% 15%, rgba(47,91,255,0.35), transparent 60%),
    radial-gradient(ellipse 700px 550px at 10% 90%, rgba(30,142,90,0.25), transparent 55%);
  filter:blur(10px);
}
.pa-section .section-head{ position:relative; z-index:1; }
.pa-section .section-head h2{ color:#fff; }
.pa-section .section-head p{ color:rgba(255,255,255,0.65); }
.pa-section .eyebrow{
  background:rgba(255,255,255,0.1); color:#fff;
}
.pa-section .eyebrow i{ color:var(--c-accent); }

/*.pa-grid{*/
/*  position:relative; z-index:1;*/
/*  display:grid;*/
/*  grid-template-columns:repeat(3,1fr);*/
/*  gap:28px;*/
/*}*/

/*.pa-card{*/
/*  background:rgba(255,255,255,0.04);*/
/*  backdrop-filter:blur(6px);*/
/*  border-radius:22px;*/
/*  overflow:hidden;*/
/*  border:1px solid rgba(255,255,255,0.1);*/
/*  transition:transform .35s ease, box-shadow .35s ease, border-color .35s ease;*/
/*}*/

.pa-grid{
  position:relative; 
  z-index:1;
  display:grid;
  grid-template-columns:repeat(3,1fr);
  grid-auto-rows:1fr;
  align-items:stretch;
  gap:28px;
}

.pa-card{
  background:rgba(255,255,255,0.04);
  backdrop-filter:blur(6px);
  border-radius:22px;
  overflow:hidden;
  border:1px solid rgba(255,255,255,0.1);
  transition:transform .35s ease, box-shadow .35s ease, border-color .35s ease;
  display:flex;
  flex-direction:column;
  box-sizing:border-box;
}
.pa-card:hover{
  transform:translateY(-10px);
  box-shadow:0 30px 60px rgba(0,0,0,0.45);
  border-color:rgba(255,255,255,0.25);
}

.pa-head{
  position:relative;
  padding:34px 28px 60px;
  color:#fff;
  overflow:hidden;
}
.pa-head::after{
  content:'';
  position:absolute; left:0; right:0; bottom:-1px;
  width:auto;
  height:54px;
  background:var(--c-surface, #fff);
  border-radius:24px 24px 0 0;
}
.pa-icon{
  width:52px; height:52px;
  border-radius:14px;
  display:flex; align-items:center; justify-content:center;
  font-size:20px; margin-bottom:20px;
  background:rgba(255,255,255,0.18);
  backdrop-filter:blur(4px);
  position:relative; z-index:1;
  border:1px solid rgba(255,255,255,0.25);
}
.pa-head h3{
  color:#fff;
  font-size:21px;
  position:relative; z-index:1;
  margin-bottom:0;
  line-height:1.3;
}

.pa-body{
  background:var(--c-surface, #fff);
  padding:8px 28px 30px;
  position:relative;
  flex:1;
  display:flex;
  flex-direction:column;
}
.pa-body ul{ margin-top:auto; margin-bottom:0; }
.pa-body li{
  display:flex; align-items:center; gap:12px;
  font-size:14px; color:var(--c-text);
  padding:11px 0;
  border-bottom:1px solid var(--c-border);
}
.pa-body li:last-child{ border-bottom:none; }
.pa-body li .li-dot{
  width:22px; height:22px; border-radius:50%;
  display:flex; align-items:center; justify-content:center;
  background:rgba(0,166,166,0.12);
  color:var(--c-accent);
  font-size:10px;
  flex:none;
}

/* gradient variants, tuned to feel part of the same navy family */
.pa-bookkeeping{ background:linear-gradient(135deg,#2f5bff 0%, #074b85 100%); }
.pa-accounting{ background:linear-gradient(135deg,#2f5bff 0%, #074b85 100%); }
.pa-payroll{ background:linear-gradient(135deg,#2f5bff 0%, #074b85 100%); }
.pa-tax{ background:linear-gradient(135deg, #2f5bff 0%, #074b85 100%); }
.pa-cloud{ background:linear-gradient(135deg, #2f5bff 0%, #074b85 100%); }

@media (max-width:1080px){
  .pa-grid{ grid-template-columns:repeat(2,1fr); }
}
@media (max-width:768px){
  .pa-grid{ grid-template-columns:1fr; }
  .pa-section{ padding:70px 0; }
}

</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="nav-overlay"></div>
<div class="mobile-nav">
  <div class="mn-top">
    <div class="brand"><span class="brand-mark"><i class="fa-solid fa-coins"></i></span>Payroll Servicess</div>
    <button class="mn-close" aria-label="Close menu"><i class="fa-solid fa-xmark"></i></button>
  </div>
  <ul>
    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
    <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a></li>
    <!--<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>-->
    <li>
      <a href="#" class="mn-parent">Resources <i class="fa-solid fa-chevron-down"></i></a>
      <div class="mobile-accordion">
        <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><i class="fa-solid fa-newspaper"></i> Blog</a>
<a href="<?php echo esc_url( home_url( '/accounting-guides/' ) ); ?>"><i class="fa-solid fa-book"></i> Accounting Guides</a>
<a href="<?php echo esc_url( home_url( '/tax-tips/' ) ); ?>"><i class="fa-solid fa-file-invoice-dollar"></i> Tax Tips</a>
<a href="<?php echo esc_url( home_url( '/payroll-resources/' ) ); ?>"><i class="fa-solid fa-money-check-dollar"></i> Payroll Resources</a>
<a href="<?php echo esc_url( home_url( '/business-finance/' ) ); ?>"><i class="fa-solid fa-chart-line"></i> Business Finance Articles</a>
<a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"><i class="fa-solid fa-circle-question"></i> FAQs</a>
<a href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>"><i class="fa-solid fa-briefcase"></i> Case Studies</a>

      </div>
    </li>
    <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a></li>
  </ul>
  <div class="mn-cta"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Get a Free Quote</a></div>
</div>
<nav class="navbar">
  <div class="container nav-inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand"><span class="brand-mark"><i class="fa-solid fa-coins"></i></span>Payroll Servicess</a>
    <ul class="nav-menu">
      <li class="active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
<!--<li class=""><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a></li>-->
<!--<li class=""><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>-->
<li class="has-dropdown">
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services <i class="fa-solid fa-chevron-down" style="font-size:10px;"></i></a>
        <ul class="dropdown">
<li><a href="#"><i class="fa-solid fa-book-open"></i> Bookkeeping Services</a></li>

<li><a href="#"><i class="fa-solid fa-calculator"></i> Accounting Services</a></li>

<li><a href="#"><i class="fa-solid fa-money-check-dollar"></i> Payroll Services</a></li>

<li><a href="#"><i class="fa-solid fa-file-invoice-dollar"></i> Tax Services</a></li>

<li><a href="#"><i class="fa-solid fa-receipt"></i> TurboTax</a></li>

<li><a href="<?php echo esc_url( home_url( '/cloud-hosting-services/' ) ); ?>"><i class="fa-solid fa-cloud"></i> Cloud Hosting Services</a></li>


        </ul>
      </li>
<li class="has-dropdown">
        <a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">Resources <i class="fa-solid fa-chevron-down" style="font-size:10px;"></i></a>
        <ul class="dropdown">
          <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><i class="fa-solid fa-newspaper"></i>Blog</a></li>
<li><a href="<?php echo esc_url( home_url( '/accounting-guides/' ) ); ?>"><i class="fa-solid fa-book"></i>Accounting Guides</a></li>
<li><a href="<?php echo esc_url( home_url( '/tax-tips/' ) ); ?>"><i class="fa-solid fa-file-invoice-dollar"></i>Tax Tips</a></li>
<li><a href="<?php echo esc_url( home_url( '/payroll-resources/' ) ); ?>"><i class="fa-solid fa-money-check-dollar"></i>Payroll Resources</a></li>
<li><a href="<?php echo esc_url( home_url( '/business-finance/' ) ); ?>"><i class="fa-solid fa-chart-line"></i>Business Finance Articles</a></li>
<!--<li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"><i class="fa-solid fa-circle-question"></i>FAQs</a></li>-->
<!--<li><a href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>"><i class="fa-solid fa-briefcase"></i>Case Studies</a></li>-->

        </ul>
      </li>
      <li class=""><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a></li>
      <li class="has-dropdown">
    <a href="#">
        Legal <i class="fa-solid fa-chevron-down" style="font-size:10px;"></i>
    </a>

    <ul class="dropdown">
        <li>
            <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">
                <i class="fa-solid fa-user-shield"></i> Privacy Policy
            </a>
        </li>

        <li>
            <a href="<?php echo esc_url( home_url( '/terms-and-conditions/' ) ); ?>">
                <i class="fa-solid fa-file-contract"></i> Terms &amp; Conditions
            </a>
        </li>

        <li>
            <a href="<?php echo esc_url( home_url( '/cookie-policy/' ) ); ?>">
                <i class="fa-solid fa-cookie-bite"></i> Cookie Policy
            </a>
        </li>

        <li>
            <a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>">
                <i class="fa-solid fa-triangle-exclamation"></i> Disclaimer
            </a>
        </li>
    </ul>
</li>
    </ul>
    <div class="nav-cta">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-dark btn-sm">Live Help</a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-sm">Get a Free Quote</a>
    </div>
    <button class="nav-toggle" aria-label="Open menu"><i class="fa-solid fa-bars"></i></button>
  </div>
</nav>

<!--<section class="hero">-->
<!--  <div class="hero-ring"></div>-->
<!--  <div class="container hero-grid">-->
<!--    <div class="reveal in">-->
      <!--<span class="eyebrow"><i class="fa-solid fa-circle-check"></i> Trusted by 480+ growing businesses</span>-->
<!--      <h1> Pro Assist</h1>-->
<!--      <p class="lead">Meet Your New AI-Powered Financial Assistant </p>-->
<!--      <div class="hero-actions">-->
<!--        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Get Started <i class="fa-solid fa-arrow-right"></i></a>-->
<!--        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Contact Us</a>-->
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
      <h1>Pro Assist</h1>
      <p class="lead typewriter">Meet Your New AI-Powered Financial Assistant</p>
      <div class="hero-actions">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Get a Free Quote <i class="fa-solid fa-arrow-right"></i></a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Contact For Live Help </a>
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
    color: #111;">Pro Assist provides reliable accounting, bookkeeping, payroll, and tax services with personalized support, helping businesses save time, stay compliant, and grow with confidence. </p>
   
  </div>
  </section>

<section class="pa-section">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-layer-group"></i> What we offer</span>
      <h2>Pro Assist Services</h2>
      
    </div>

    <div class="pa-grid">

      <div class="pa-card reveal">
        <div class="pa-head pa-bookkeeping">
          <div class="pa-icon"><i class="fa-solid fa-book"></i></div>
          <h3>Bookkeeping Services</h3>
        </div>
        <div class="pa-body">
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Daily Bookkeeping</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Catch-Up Bookkeeping</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Bank Reconciliation</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> General Ledger Management</li>
          </ul>
        </div>
      </div>

      <div class="pa-card reveal">
        <div class="pa-head pa-accounting">
          <div class="pa-icon"><i class="fa-solid fa-chart-pie"></i></div>
          <h3>Accounting Services</h3>
        </div>
        <div class="pa-body">
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Financial Statements</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Accounts Payable</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Accounts Receivable</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Month-End &amp; Year-End Closing</li>
          </ul>
        </div>
      </div>

      <div class="pa-card reveal">
        <div class="pa-head pa-payroll">
          <div class="pa-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
          <h3>Payroll Services</h3>
        </div>
        <div class="pa-body">
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Payroll Processing</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Direct Deposit</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Payroll Tax Filing</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Employee Payslips</li>
          </ul>
        </div>
      </div>

      <div class="pa-card reveal">
        <div class="pa-head pa-tax">
          <div class="pa-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
          <h3>Tax Services</h3>
        </div>
        <div class="pa-body">
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Business Tax Preparation</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Individual Tax Returns</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Tax Planning</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Sales Tax Filing</li>
          </ul>
        </div>
      </div>

      <div class="pa-card reveal">
        <div class="pa-head pa-cloud">
          <div class="pa-icon"><i class="fa-solid fa-cloud"></i></div>
          <h3>Cloud Hosting Services</h3>
        </div>
        <div class="pa-body">
          <ul>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Cloud Server Hosting</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Managed Cloud Infrastructure</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Virtual Desktop Hosting (VDI)</li>
            <li><span class="li-dot"><i class="fa-solid fa-check"></i></span> Secure Cloud Backup &amp; Disaster Recovery</li>
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
<!--      <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-primary mt-40">Learn Our Story <i class="fa-solid fa-arrow-right"></i></a>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->
<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal in">
      <span class="eyebrow"><i class="fa-solid fa-industry"></i> Industries</span>
      <h2>Industries we serve</h2>
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
      <h2>Expertise Across Leading Platforms</h2>
      <!--<p>From setup to daily support, our specialists keep your systems running efficiently and securely.</p>-->
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
      <h2>A Simple, Streamlined Process for Better Business Solutions </h2>
      <p>From consultation to completion, we ensure every project is handled with precision, transparency, and efficiency. 
</p>
    </div>
    <div class="process-wrap reveal">
      <div class="process-line"><div class="process-line-fill"></div></div>
      <div class="process-steps">
        <div class="p-step"><div class="p-num">1</div><h4>Share Your Requirements</h4><p>Tell us about your business challenges and objectives. Our team takes the time to understand your unique needs before recommending the right solution.</p></div>
        <div class="p-step"><div class="p-num">2</div><h4>Solution Planning</h4><p>Our specialists evaluate your requirements and develop a customized strategy designed to deliver secure, accurate, and cost-effective results.</p></div>
        <div class="p-step"><div class="p-num">3</div><h4>Implementation</h4><p>Once approved, we begin the project using proven processes and industry best practices to ensure timely and seamless execution.</p></div>
        <div class="p-step"><div class="p-num">4</div><h4>Ongoing Support & Success</h4><p>Our commitment doesn't end with delivery. We provide continuous support, regular updates, and expert assistance to keep your business running smoothly.
.</p></div>
        
      </div>
    </div>
  </div>
</section>

<section class="section section-alt" style="background:#f8fafc;">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-lightbulb"></i>Our Blog</span>
      <h2>Payroll and accounting insight, plainly explained</h2>
    </div>
    <div class="grid grid-3">
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Payroll</span><i class="fa-solid fa-money-check-dollar"></i></div><div class="res-body"><div class="meta">Payroll Resources · 5 min read</div><h3>Direct Deposit vs. Paper Checks: What's Right for Your Team</h3><p>A practical comparison for businesses choosing a pay method.</p><a href="<?php echo esc_url( home_url( '/payroll-resources/' ) ); ?>" class="card-link">Read more <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Tax Tips</span><i class="fa-solid fa-file-invoice-dollar"></i></div><div class="res-body"><div class="meta">Tax Tips · 6 min read</div><h3>Quarterly Estimated Taxes: A Simple Checklist</h3><p>Avoid penalties with a clear, repeatable filing routine.</p><a href="<?php echo esc_url( home_url( '/tax-tips/' ) ); ?>" class="card-link">Read more <i class="fa-solid fa-arrow-right"></i></a></div></div>
      <div class="res-card reveal"><div class="res-thumb"><span class="res-tag">Bookkeeping</span><i class="fa-solid fa-book"></i></div><div class="res-body"><div class="meta">Accounting Guides · 7 min read</div><h3>Bank Reconciliation 101 for Small Business Owners</h3><p>Why monthly reconciliation matters and how it's done right.</p><a href="<?php echo esc_url( home_url( '/accounting-guides/' ) ); ?>" class="card-link">Read more <i class="fa-solid fa-arrow-right"></i></a></div></div>
    </div>
  </div>
</section>

<!--<section class="section section-alt">-->
<!--  <div class="container">-->
<!--    <div class="section-head reveal">-->
<!--      <span class="eyebrow"><i class="fa-solid fa-layer-group"></i> What we offer</span>-->
<!--      <h2>Services built around your finance calendar</h2>-->
<!--      <p>Every engagement starts with the essentials businesses actually need, month after month.</p>-->
<!--    </div>-->
<!--    <div class="grid grid-3">-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-money-check-dollar"></i></div><h3>Payroll Management</h3><p>Accurate, on-time pay runs with direct deposit, payslips, and full tax compliance.</p><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div><h3>Tax Filing</h3><p>Business and payroll tax filings prepared and submitted correctly, every deadline.</p><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-heart-pulse"></i></div><h3>Employee Benefits</h3><p>Benefits deductions and contributions managed accurately inside every pay cycle.</p><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-shield-halved"></i></div><h3>HR Compliance</h3><p>Stay ahead of federal, state, and local labor law changes without the research.</p><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-book"></i></div><h3>Bookkeeping</h3><p>Daily transaction recording, bank reconciliation, and clean general ledgers.</p><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>-->
<!--      <div class="card reveal"><div class="card-icon"><i class="fa-solid fa-chart-pie"></i></div><h3>Financial Reporting</h3><p>Monthly statements and dashboards that make your numbers easy to act on.</p><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="card-link">Learn more <i class="fa-solid fa-arrow-right"></i></a></div>-->
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
        <p class="t-quote">"The team made our accounting process effortless. Their accuracy and timely support have helped us keep our finances organized and make better business decisions."</p>
        <div class="t-person"><div class="t-avatar">LH</div><div><b>Laurence Herrera</b><span>Chief Innovation Officer</span></div></div>
      </div>
      <div class="t-card reveal">
        <div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <p class="t-quote">"Managing payroll used to be stressful, but their experts made it seamless. Employees are paid accurately and on time, with no more compliance worries."</p>
        <div class="t-person"><div class="t-avatar">MA</div><div><b>Maeva Ahearn</b><span>Founder &amp; CEO</span></div></div>
      </div>
      <div class="t-card reveal">
        <div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
        <p class="t-quote">"Their tax professionals guided us through every step with confidence, helped maximize our savings, and made the entire tax season stress-free."</p>
        <div class="t-person"><div class="t-avatar">SL</div><div><b>Stefanos Loukanis</b><span>Director of Digital Strategy</span></div></div>
      </div>
    </div>
  </div>
</section>


<section class="section" style="background-color:#fff;">
  <div class="container split">
    <div class="reveal">
      <span class="eyebrow"><i class="fa-solid fa-comments"></i> Get in touch</span>
      <h2>Let's talk about your books.</h2>
      <h3 style="color:var(--c-secondary); font-size:18px; margin-bottom:16px;">Payroll Servicess</h3>
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
        <div class="faq-q">What are payroll services? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            Payroll services handle calculating employee wages, withholding taxes, processing direct deposits, and filing payroll tax forms—so businesses don't have to manage it manually.
          </div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">What does a payroll company do? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            A payroll company processes employee pay, handles tax withholdings and filings, manages benefits deductions, and ensures compliance with labor laws.
          </div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">How do I choose the right payroll company? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            Look for accurate tax filing, transparent pricing, integration with your accounting software, responsive support, and scalability as your team grows.
          </div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">What do bookkeeping services include? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            Bookkeeping services cover recording daily transactions, reconciling bank accounts, tracking expenses, and maintaining accurate financial records for your business.
          </div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Do small businesses need bookkeeping services? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            Yes—accurate books help small businesses track cash flow, prepare for tax season, and make informed financial decisions.
          </div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">What's the difference between bookkeeping and accounting services? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            Bookkeeping records transactions; accounting services interpret that data by producing financial statements, analysis, and strategic guidance.
          </div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">When should a business hire an accounting service? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            Once financial complexity grows—multiple revenue streams, investors, or tax planning needs—outsourcing accounting saves time and reduces errors.
          </div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Can tax services help reduce my business taxes? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            Yes—through strategic planning like deductions, entity structuring, and timing of expenses and income, tax professionals can legally lower your tax burden.
          </div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">What are CFO services? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            CFO services (often called "fractional CFO") provide high-level financial strategy, forecasting, cash flow management, and fundraising support without the cost of a full-time CFO.
          </div>
        </div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Who needs CFO services? <i class="fa-solid fa-plus"></i></div>
        <div class="faq-a">
          <div class="faq-a-inner">
            Growing businesses needing strategic financial guidance but not yet ready for a full-time executive hire can benefit from CFO services.
          </div>
        </div>
      </div>

    </div>

    <div class="text-center mt-40 reveal">
      <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="btn btn-outline-dark">
        View All FAQs <i class="fa-solid fa-arrow-right"></i>
      </a>
    </div>
  </div>
</section>
<section class="section-tight">
  <div class="container">
    <div class="cta-banner reveal">
      <h2>Ready to simplify your books and payroll?</h2>
      <p>Talk to a specialist and get a custom quote within one business day — no pressure, no jargon.</p>
      <div class="hero-actions">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="background:#fff;color:var(--c-primary);">Get a Free Quote</a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Contact Us</a>
      </div>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="brand"><span class="brand-mark"><i class="fa-solid fa-coins"></i></span>Payroll Servicess</div>
        <p>The back-office finance team for growing businesses — bookkeeping, accounting, payroll, and tax filings handled by people who treat your ledger like it's their own.</p>
        <div class="footer-social">
          <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#" aria-label="Twitter/X"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
        </div>
      </div>
      <div>
        <h4>Quick Links</h4>
        <ul class="footer-links">
          <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>About Us</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Services</a></li>
          <li><a href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Case Studies</a></li>
          <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>FAQs</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Contact</a></li>
        </ul>
      </div>
      <div>
        <h4>Resources</h4>
        <ul class="footer-links">
          <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Blog</a></li>
          <li><a href="<?php echo esc_url( home_url( '/accounting-guides/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Accounting Guides</a></li>
          <li><a href="<?php echo esc_url( home_url( '/tax-tips/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Tax Tips</a></li>
          <li><a href="<?php echo esc_url( home_url( '/payroll-resources/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Payroll Resources</a></li>
          <li><a href="<?php echo esc_url( home_url( '/business-finance/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Business Finance</a></li>
        </ul>
      </div>
      <div>
        <h4>Stay Informed</h4>
        <p style="font-size:14px;color:rgba(255,255,255,0.6);">Payroll deadlines and tax tips, once a month. No spam.</p>
        <form class="newsletter">
          <input type="email" placeholder="Your email address" required>
          <button type="submit" aria-label="Subscribe"><i class="fa-solid fa-arrow-right"></i></button>
        </form>
        <ul class="footer-contact" style="margin-top:24px;">
          <li><i class="fa-solid fa-phone"></i><span>(800) 555-0134</span></li>
          <li><i class="fa-solid fa-envelope"></i><span>hello@payrollservicess.com</span></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; 2026 Payroll Servicess. All rights reserved.</span>
      <div>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms &amp; Conditions</a>
      </div>
    </div>
  </div>
</footer>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>
