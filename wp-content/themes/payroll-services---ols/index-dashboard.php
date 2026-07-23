<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Payroll Servicess | Payroll & Accounting Services</title>
<meta name="description" content="Professional payroll, bookkeeping, accounting, tax, and CFO services for growing businesses.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<style>
  :root{
    --navy:#0E2238;
    --navy-2:#132A44;
    --paper:#F7F8FA;
    --paper-2:#EEF1F5;
    --card:#FFFFFF;
    --teal:#128577;
    --teal-bright:#1DBFAA;
    --amber:#E2A63B;
    --ink:#101826;
    --muted:#5B6673;
    --line: rgba(16,24,38,0.10);
    --line-strong: rgba(16,24,38,0.16);
    --shadow: 0 24px 60px -30px rgba(14,34,56,0.35);
    --shadow-sm: 0 10px 26px -16px rgba(14,34,56,0.28);

    --font-display:'Space Grotesk', sans-serif;
    --font-body:'Manrope', sans-serif;
    --font-mono:'JetBrains Mono', monospace;
  }
  *{ box-sizing:border-box; margin:0; padding:0; }
  html{ scroll-behavior:smooth; }
  body{ font-family:var(--font-body); background:var(--paper); color:var(--ink); line-height:1.65; -webkit-font-smoothing:antialiased; }
  img{ max-width:100%; display:block; }
  a{ color:inherit; text-decoration:none; }
  ul{ list-style:none; }
  button{ font-family:inherit; cursor:pointer; }
  .wrap{ max-width:1180px; margin:0 auto; padding:0 32px; }
  @media (max-width:640px){ .wrap{ padding:0 20px; } }
  ::selection{ background:var(--teal-bright); color:#fff; }
  :focus-visible{ outline:2px solid var(--teal-bright); outline-offset:3px; border-radius:2px; }
  @media (prefers-reduced-motion: reduce){ *{ animation-duration:.01ms !important; transition-duration:.01ms !important; scroll-behavior:auto !important; } }

  h1,h2,h3{ font-family:var(--font-display); color:var(--ink); font-weight:600; letter-spacing:-0.01em; }

  .eyebrow{
    display:inline-flex; align-items:center; gap:8px;
    font-family:var(--font-mono); font-size:12px; letter-spacing:.06em; text-transform:uppercase;
    color:var(--teal); background: rgba(18,133,119,0.09);
    padding:7px 14px; border-radius:999px; margin-bottom:20px;
  }
  .eyebrow .dot{ width:6px; height:6px; border-radius:50%; background:var(--teal-bright); }

  .btn{
    display:inline-flex; align-items:center; justify-content:center; gap:8px;
    font-family:var(--font-body); font-weight:700; font-size:14.5px;
    padding:15px 26px; border-radius:999px; border:1px solid transparent;
    transition:all .25s ease;
  }
  .btn-primary{ background:var(--navy); color:#fff; }
  .btn-primary:hover{ background:var(--teal); transform:translateY(-2px); box-shadow:var(--shadow-sm); }
  .btn-accent{ background:var(--teal-bright); color:#04231D; }
  .btn-accent:hover{ background:#17A896; transform:translateY(-2px); box-shadow:var(--shadow-sm); }
  .btn-ghost{ border-color:var(--line-strong); color:var(--ink); background:#fff; }
  .btn-ghost:hover{ border-color:var(--navy); }

  /* Header */
  header{ position:sticky; top:0; z-index:100; background:rgba(247,248,250,0.9); backdrop-filter:blur(12px); border-bottom:1px solid var(--line); }
  .nav{ display:flex; align-items:center; justify-content:space-between; height:80px; }
  .logo{ display:flex; align-items:center; gap:10px; font-family:var(--font-display); font-size:18px; font-weight:700; color:var(--ink); }
  .logo-mark{ width:36px; height:36px; border-radius:10px; background:var(--navy); color:#fff; display:flex; align-items:center; justify-content:center; font-family:var(--font-mono); font-size:12px; }
  .nav-links{ display:flex; gap:34px; font-size:14.5px; font-weight:600; }
  .nav-links a{ position:relative; color:var(--muted); transition:color .2s ease; }
  .nav-links a:hover{ color:var(--ink); }
  .nav-cta{ display:flex; align-items:center; gap:12px; }
  .nav-tel{ font-family:var(--font-mono); font-size:13px; color:var(--teal); font-weight:500; }
  .burger{ display:none; flex-direction:column; gap:5px; background:none; border:none; padding:6px; }
  .burger span{ width:22px; height:2px; background:var(--ink); border-radius:2px; }
  @media (max-width:920px){ .nav-links,.nav-tel{ display:none; } .burger{ display:flex; } }

  /* Hero */
  .hero{ padding:80px 0 100px; position:relative; overflow:hidden; }
  .index-line{ position:absolute; left:0; right:0; top:60px; width:100%; height:220px; opacity:.55; pointer-events:none; }
  .hero-grid{ display:grid; grid-template-columns:1.05fr .95fr; gap:56px; align-items:center; position:relative; }
  .hero h1{ font-size:clamp(32px,4.4vw,52px); line-height:1.1; margin-bottom:20px; max-width:600px; }
  .hero h1 span{ color:var(--teal); }
  .hero p.lead{ font-size:17px; color:var(--muted); max-width:510px; margin-bottom:32px; }
  .hero-actions{ display:flex; gap:14px; flex-wrap:wrap; margin-bottom:48px; }

  .stat-grid{ display:grid; grid-template-columns:repeat(4,1fr); gap:14px; }
  .stat-tile{
    background:var(--card); border:1px solid var(--line); border-radius:14px; padding:18px 16px;
    box-shadow:var(--shadow-sm);
  }
  .stat-tile .trend{ display:flex; align-items:center; gap:5px; font-size:11px; color:var(--teal); font-family:var(--font-mono); margin-bottom:10px; }
  .stat-tile .num{ font-family:var(--font-mono); font-size:22px; font-weight:600; color:var(--ink); }
  .stat-tile .lbl{ font-size:11.5px; color:var(--muted); margin-top:6px; }
  @media (max-width:640px){ .stat-grid{ grid-template-columns:repeat(2,1fr); } }

  .hero-media{ position:relative; }
  .hero-media .frame{ border-radius:22px; overflow:hidden; box-shadow:var(--shadow); }
  .hero-media img{ width:100%; height:480px; object-fit:cover; }
  .verify-card{
    position:absolute; right:-24px; bottom:32px; width:210px;
    background:var(--card); border-radius:16px; padding:18px 20px; box-shadow:var(--shadow);
    border:1px solid var(--line);
  }
  .verify-card .top{ display:flex; align-items:center; gap:10px; margin-bottom:12px; }
  .verify-badge{ width:30px; height:30px; border-radius:9px; background:var(--teal-bright); color:#04231D; display:flex; align-items:center; justify-content:center; font-weight:700; }
  .verify-card .title{ font-size:12.5px; font-weight:700; }
  .verify-card .sub{ font-size:10.5px; color:var(--muted); }
  .verify-card .num{ font-family:var(--font-mono); font-size:26px; font-weight:600; color:var(--navy); }
  .verify-card .cap{ font-size:11px; color:var(--muted); margin-top:4px; }
  @media (max-width:920px){
    .hero-grid{ grid-template-columns:1fr; }
    .hero-media{ order:-1; }
    .hero-media img{ height:320px; }
    .verify-card{ right:12px; bottom:-24px; width:180px; }
  }

  section{ padding:100px 0; }
  @media (max-width:640px){ section{ padding:64px 0; } }
  .section-head{ max-width:620px; margin-bottom:52px; }
  .section-head h2{ font-size:clamp(26px,3.1vw,36px); line-height:1.2; }
  .section-head p{ color:var(--muted); font-size:16px; margin-top:14px; }

  /* About */
  .about-grid{ display:grid; grid-template-columns:.85fr 1.15fr; gap:64px; align-items:center; }
  .about-media img{ width:100%; height:440px; object-fit:cover; border-radius:20px; box-shadow:var(--shadow-sm); }
  .checklist{ margin-top:28px; display:grid; gap:14px; }
  .checklist li{ display:flex; gap:14px; align-items:flex-start; background:var(--card); border:1px solid var(--line); border-radius:12px; padding:16px 18px; }
  .check-ico{ width:24px; height:24px; border-radius:7px; background:rgba(18,133,119,0.12); color:var(--teal); display:flex; align-items:center; justify-content:center; flex-shrink:0; font-size:13px; font-weight:700; }
  .checklist p{ font-size:14.5px; color:var(--ink); }
  @media (max-width:920px){ .about-grid{ grid-template-columns:1fr; gap:36px; } .about-media img{ height:300px; } }

  /* Services */
  .services-band{ background:var(--navy); color:#fff; }
  .services-band .eyebrow{ background:rgba(29,191,170,0.16); color:var(--teal-bright); }
  .services-band .section-head h2{ color:#fff; }
  .services-band .section-head p{ color:rgba(255,255,255,0.62); }
  .svc-grid{ display:grid; grid-template-columns:repeat(5,1fr); gap:16px; }
  .svc-card{ background:var(--navy-2); border:1px solid rgba(255,255,255,0.08); border-radius:16px; padding:26px 20px; transition:transform .25s ease, border-color .25s ease; }
  .svc-card:hover{ transform:translateY(-4px); border-color:var(--teal-bright); }
  .svc-ico{ width:40px; height:40px; border-radius:11px; background:rgba(29,191,170,0.16); color:var(--teal-bright); display:flex; align-items:center; justify-content:center; font-family:var(--font-mono); font-size:12px; margin-bottom:18px; }
  .svc-card h3{ color:#fff; font-size:17px; margin-bottom:12px; }
  .svc-card ul li{ font-size:13px; color:rgba(255,255,255,0.6); padding:5px 0; display:flex; gap:8px; align-items:flex-start; }
  .svc-card ul li::before{ content:"→"; color:var(--teal-bright); flex-shrink:0; }
  @media (max-width:920px){ .svc-grid{ grid-template-columns:repeat(2,1fr); } }
  @media (max-width:560px){ .svc-grid{ grid-template-columns:1fr; } }

  .tag-row{ margin-top:56px; display:grid; grid-template-columns:1fr 1fr; gap:44px; }
  .tag-row h4{ font-family:var(--font-mono); font-size:11.5px; letter-spacing:.1em; text-transform:uppercase; color:var(--teal-bright); margin-bottom:16px; }
  .pill-list{ display:flex; flex-wrap:wrap; gap:9px; }
  .pill{ font-size:12.5px; padding:8px 15px; border:1px solid rgba(255,255,255,0.18); color:rgba(255,255,255,0.82); border-radius:999px; }
  @media (max-width:700px){ .tag-row{ grid-template-columns:1fr; } }

  /* Platforms */
  .plat-grid{ display:grid; grid-template-columns:repeat(3,1fr); gap:16px; }
  .plat-card{ background:var(--card); border:1px solid var(--line); border-radius:16px; padding:26px; display:flex; gap:14px; align-items:flex-start; box-shadow:var(--shadow-sm); }
  .plat-ico{ width:42px; height:42px; border-radius:11px; background:var(--paper-2); display:flex; align-items:center; justify-content:center; font-family:var(--font-mono); font-size:13px; flex-shrink:0; }
  .plat-card h3{ font-size:16px; margin-bottom:4px; }
  .plat-card p{ font-size:13px; color:var(--muted); }
  @media (max-width:800px){ .plat-grid{ grid-template-columns:repeat(2,1fr); } }
  @media (max-width:560px){ .plat-grid{ grid-template-columns:1fr; } }

  /* Process */
  .process-grid{ display:grid; grid-template-columns:repeat(4,1fr); gap:16px; }
  .proc-card{ background:var(--card); border:1px solid var(--line); border-radius:16px; padding:26px 22px; box-shadow:var(--shadow-sm); position:relative; }
  .proc-num{ font-family:var(--font-mono); font-size:12px; color:var(--teal); background:rgba(18,133,119,0.1); width:32px; height:32px; border-radius:9px; display:flex; align-items:center; justify-content:center; margin-bottom:18px; }
  .proc-card h3{ font-size:16.5px; margin-bottom:10px; }
  .proc-card p{ font-size:13.5px; color:var(--muted); }
  @media (max-width:920px){ .process-grid{ grid-template-columns:1fr 1fr; } }
  @media (max-width:560px){ .process-grid{ grid-template-columns:1fr; } }

  /* Testimonials */
  .testi-wrap{ position:relative; max-width:760px; margin:0 auto; text-align:center; background:var(--card); border:1px solid var(--line); border-radius:22px; padding:52px 48px; box-shadow:var(--shadow-sm); }
  @media (max-width:640px){ .testi-wrap{ padding:36px 24px; } }
  .stars{ color:var(--amber); font-size:15px; letter-spacing:3px; margin-bottom:24px; }
  .testi-quote{ font-family:var(--font-display); font-weight:500; font-size:clamp(18px,2.2vw,23px); line-height:1.5; color:var(--ink); margin-bottom:26px; }
  .testi-name{ font-weight:700; font-size:15px; }
  .testi-role{ font-size:13px; color:var(--muted); margin-top:2px; }
  .testi-nav{ display:flex; justify-content:center; gap:14px; margin-top:34px; }
  .testi-nav button{ width:40px; height:40px; border-radius:50%; border:1px solid var(--line-strong); background:#fff; display:flex; align-items:center; justify-content:center; font-size:16px; transition:all .2s ease; }
  .testi-nav button:hover{ background:var(--navy); color:#fff; border-color:var(--navy); }
  .testi-dots{ display:flex; justify-content:center; gap:8px; margin-top:18px; }
  .testi-dots span{ width:6px; height:6px; border-radius:50%; background:var(--line-strong); transition:background .2s ease; }
  .testi-dots span.active{ background:var(--teal); }

  /* Contact */
  .contact-band{ background:var(--paper-2); }
  .contact-grid{ display:grid; grid-template-columns:.9fr 1.1fr; gap:64px; }
  .contact-info h2{ font-size:clamp(28px,3.3vw,38px); margin-bottom:14px; }
  .contact-info > p{ color:var(--muted); margin-bottom:32px; max-width:420px; }
  .contact-line{ display:flex; flex-direction:column; gap:14px; margin-bottom:32px; }
  .contact-line a{ display:inline-flex; align-items:center; gap:10px; background:var(--card); border:1px solid var(--line); border-radius:12px; padding:14px 18px; font-family:var(--font-mono); font-size:14px; font-weight:500; width:fit-content; }
  .contact-meta{ display:grid; grid-template-columns:1fr 1fr; gap:20px; max-width:420px; }
  .contact-meta .lbl{ font-size:11px; text-transform:uppercase; letter-spacing:.08em; color:var(--teal); font-family:var(--font-mono); margin-bottom:6px; }
  .contact-meta .val{ font-size:13.5px; color:var(--ink); }

  .form-card{ background:var(--card); border:1px solid var(--line); border-radius:20px; padding:38px; box-shadow:var(--shadow-sm); }
  .form-row{ display:grid; grid-template-columns:1fr 1fr; gap:16px; margin-bottom:16px; }
  .field label{ display:block; font-size:11.5px; text-transform:uppercase; letter-spacing:.05em; color:var(--muted); margin-bottom:8px; font-family:var(--font-mono); }
  .field input{ width:100%; padding:13px 14px; border:1px solid var(--line-strong); background:var(--paper); font-family:var(--font-body); font-size:14.5px; color:var(--ink); border-radius:10px; }
  .field input:focus{ outline:none; border-color:var(--teal); background:#fff; }
  .ticket-row{ display:grid; grid-template-columns:repeat(3,1fr); gap:10px; margin-bottom:24px; }
  .ticket{ border:1px solid var(--line-strong); border-radius:10px; padding:13px 10px; text-align:center; cursor:pointer; font-size:13px; font-weight:700; transition:all .2s ease; background:#fff; }
  .ticket.active{ background:var(--navy); color:#fff; border-color:var(--navy); }
  .form-card .btn{ width:100%; }
  @media (max-width:920px){ .contact-grid{ grid-template-columns:1fr; gap:40px; } }
  @media (max-width:560px){ .form-row{ grid-template-columns:1fr; } .form-card{ padding:24px; } }

  /* FAQ */
  .faq-list{ max-width:800px; display:grid; gap:12px; }
  .faq-item{ background:var(--card); border:1px solid var(--line); border-radius:14px; overflow:hidden; }
  .faq-q{ width:100%; text-align:left; background:none; border:none; padding:20px 22px; display:flex; justify-content:space-between; align-items:center; gap:20px; font-family:var(--font-body); font-size:15.5px; font-weight:700; color:var(--ink); }
  .faq-q .plus{ font-family:var(--font-mono); font-size:16px; color:var(--teal); transition:transform .25s ease; flex-shrink:0; width:26px; height:26px; border-radius:50%; background:rgba(18,133,119,0.1); display:flex; align-items:center; justify-content:center; }
  .faq-item.open .plus{ transform:rotate(45deg); }
  .faq-a{ max-height:0; overflow:hidden; transition:max-height .3s ease; }
  .faq-a p{ padding:0 22px 22px; color:var(--muted); font-size:14.5px; max-width:640px; }

  /* Footer */
  footer{ background:var(--navy); color:rgba(255,255,255,0.7); padding:64px 0 28px; }
  .foot-top{ display:grid; grid-template-columns:1.2fr 2fr; gap:56px; margin-bottom:48px; }
  .foot-logo-row{ display:flex; align-items:center; gap:10px; margin-bottom:16px; }
  .foot-logo{ color:#fff; font-family:var(--font-display); font-size:19px; font-weight:700; }
  .foot-desc{ font-size:13.5px; max-width:280px; line-height:1.7; }
  .foot-cols{ display:grid; grid-template-columns:repeat(3,1fr); gap:24px; }
  .foot-cols h5{ font-family:var(--font-mono); font-size:11px; letter-spacing:.08em; text-transform:uppercase; color:var(--teal-bright); margin-bottom:14px; }
  .foot-cols a{ display:block; font-size:13.5px; padding:5px 0; color:rgba(255,255,255,0.65); }
  .foot-cols a:hover{ color:#fff; }
  .foot-bottom{ border-top:1px solid rgba(255,255,255,0.12); padding-top:24px; display:flex; justify-content:space-between; flex-wrap:wrap; gap:10px; font-size:12px; color:rgba(255,255,255,0.45); font-family:var(--font-mono); }
  @media (max-width:800px){ .foot-top{ grid-template-columns:1fr; } .foot-cols{ grid-template-columns:1fr 1fr; } }
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
  <div class="wrap nav">
    <a href="#home" class="logo">
      <span class="logo-mark">PS</span>
      Payroll Servicess
    </a>
    <nav class="nav-links">
      <a href="#home">Home</a>
      <a href="#about">About Us</a>
      <a href="#services">Services</a>
      <a href="#process">Process</a>
      <a href="#contact">Contact</a>
    </nav>
    <div class="nav-cta">
      <a href="tel:8005550184" class="nav-tel">(800) 555-0184</a>
      <a href="#contact" class="btn btn-accent">Get a Free Quote</a>
      <button class="burger" aria-label="Menu"><span></span><span></span><span></span></button>
    </div>
  </div>
</header>

<main>

  <!-- HERO -->
  <section class="hero" id="home">
    <svg class="index-line" viewBox="0 0 1180 220" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <polyline points="0,170 90,150 180,180 270,120 360,140 450,80 540,100 630,50 720,70 810,30 900,55 990,20 1080,40 1180,10"
        fill="none" stroke="#1DBFAA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" opacity="0.35"/>
      <polyline points="0,170 90,150 180,180 270,120 360,140 450,80 540,100 630,50 720,70 810,30 900,55 990,20 1080,40 1180,10"
        fill="none" stroke="#128577" stroke-width="1" stroke-dasharray="4 6" opacity="0.5"/>
    </svg>
    <div class="wrap">
      <div class="hero-grid">
        <div>
          <div class="eyebrow"><span class="dot"></span>Professional Finance Support</div>
          <h1>The back-office finance team for businesses <span>done guessing.</span></h1>
          <p class="lead">Payroll Servicess is the back-office finance team for growing businesses — precise bookkeeping, clean accounting, on-time payroll, and tax filings, handled by people who treat your ledger like it's their own.</p>
          <div class="hero-actions">
            <a href="#contact" class="btn btn-primary">Get a Free Quote</a>
            <a href="tel:8005550184" class="btn btn-ghost">Live Help</a>
          </div>
          <div class="stat-grid">
            <div class="stat-tile"><div class="trend">▲ TRACK</div><div class="num"><span class="count" data-count="12">0</span>+</div><div class="lbl">Years in Practice</div></div>
            <div class="stat-tile"><div class="trend">▲ TRACK</div><div class="num"><span class="count" data-count="450">0</span>+</div><div class="lbl">Businesses Served</div></div>
            <div class="stat-tile"><div class="trend">▲ TRACK</div><div class="num"><span class="count" data-count="99.8" data-decimal="1">0</span>%</div><div class="lbl">On-Time Payroll</div></div>
            <div class="stat-tile"><div class="trend">▲ TRACK</div><div class="num">$<span class="count" data-count="180">0</span>M+</div><div class="lbl">Processed / yr</div></div>
          </div>
        </div>
        <div class="hero-media">
          <div class="frame">
            <img src="https://jigana.in/project-07-07-2026/assets/img/premium-hero.jpg" alt="Professional payroll and accounting consultation in a modern office">
          </div>
          <div class="verify-card">
            <div class="top">
              <div class="verify-badge">✓</div>
              <div>
                <div class="title">Payroll Verified</div>
                <div class="sub">This pay cycle</div>
              </div>
            </div>
            <div class="num">99.8%</div>
            <div class="cap">On-time payroll rate with clean reporting</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section id="about">
    <div class="wrap">
      <div class="about-grid">
        <div class="about-media">
          <img src="https://jigana.in/project-07-07-2026/assets/img/premium-consulting.jpg" alt="Finance team reviewing accounting dashboards">
        </div>
        <div>
          <div class="eyebrow"><span class="dot"></span>Why Choose Us</div>
          <h2 style="font-size:clamp(26px,3.1vw,36px); line-height:1.2; max-width:520px;">A finance back-office that actually feels like part of your team.</h2>
          <p style="color:var(--muted); margin-top:18px; max-width:520px;">Payroll Services was founded in 2013 by a small group of accountants and payroll specialists who kept seeing the same problem: growing businesses spending nights and weekends fighting spreadsheets instead of running their companies.</p>
          <p style="color:var(--muted); margin-top:12px; max-width:520px;">Today we support hundreds of small and mid-sized businesses across the country — from single-location retailers to multi-state contractors — with the same principle we started with: accurate numbers, delivered on time, explained in plain English.</p>
          <ul class="checklist">
            <li><span class="check-ico">✓</span><p>Dedicated bookkeeper &amp; accountant assigned to your account</p></li>
            <li><span class="check-ico">✓</span><p>Cloud-based dashboards, updated in real time</p></li>
            <li><span class="check-ico">✓</span><p>Payroll and tax filings backed by a 100% compliance guarantee</p></li>
            <li><span class="check-ico">✓</span><p>Fixed monthly pricing — no hourly surprises</p></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="services-band" id="services">
    <div class="wrap">
      <div class="section-head">
        <div class="eyebrow"><span class="dot"></span>Our Services</div>
        <h2>What we offer</h2>
        <p>Five core practice areas, each staffed by specialists — not generalists spread thin across your books.</p>
      </div>

      <div class="svc-grid">
        <div class="svc-card"><div class="svc-ico">BK</div><h3>Bookkeeping</h3>
          <ul><li>Daily Bookkeeping</li><li>Catch-Up Bookkeeping</li><li>Bank Reconciliation</li><li>General Ledger Management</li></ul>
        </div>
        <div class="svc-card"><div class="svc-ico">AC</div><h3>Accounting</h3>
          <ul><li>Financial Statements</li><li>Accounts Payable</li><li>Accounts Receivable</li><li>Month-End &amp; Year-End Closing</li></ul>
        </div>
        <div class="svc-card"><div class="svc-ico">PR</div><h3>Payroll</h3>
          <ul><li>Payroll Processing</li><li>Direct Deposit</li><li>Payroll Tax Filing</li><li>Employee Payslips</li></ul>
        </div>
        <div class="svc-card"><div class="svc-ico">TX</div><h3>Tax Services</h3>
          <ul><li>Business Tax Preparation</li><li>Individual Tax Returns</li><li>Tax Planning</li><li>Sales Tax Filing</li></ul>
        </div>
        <div class="svc-card"><div class="svc-ico">CF</div><h3>CFO Services</h3>
          <ul><li>Virtual CFO</li><li>Budgeting &amp; Forecasting</li><li>Cash Flow Management</li><li>Financial Strategy</li></ul>
        </div>
      </div>

      <div class="tag-row">
        <div>
          <h4>Additional Services</h4>
          <div class="pill-list">
            <span class="pill">Data Entry</span><span class="pill">Invoice Processing</span><span class="pill">Payment Processing</span>
            <span class="pill">Vendor Management</span><span class="pill">Customer Billing</span><span class="pill">Financial Record Cleanup</span>
            <span class="pill">Cloud Accounting</span><span class="pill">Document Management</span>
          </div>
        </div>
        <div>
          <h4>Industries We Serve</h4>
          <div class="pill-list">
            <span class="pill">Small Businesses</span><span class="pill">Startups</span><span class="pill">Healthcare</span>
            <span class="pill">Real Estate</span><span class="pill">Construction</span><span class="pill">Retail</span>
            <span class="pill">E-commerce</span><span class="pill">Manufacturing</span><span class="pill">Professional Services</span><span class="pill">Nonprofits</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PLATFORMS -->
  <section>
    <div class="wrap">
      <div class="section-head">
        <div class="eyebrow"><span class="dot"></span>Expertise Across Leading Platforms</div>
        <h2>Solutions for every major accounting platform</h2>
        <p>From accounting to financial management software, our experts provide seamless support, ensuring your systems run efficiently and securely.</p>
      </div>
      <div class="plat-grid">
        <div class="plat-card"><div class="plat-ico">Qu</div><div><h3>QuickBooks</h3><p>Online, Desktop, Enterprise, Payroll</p></div></div>
        <div class="plat-card"><div class="plat-ico">Sa</div><div><h3>Sage</h3><p>Sage 50, Sage 100, Sage 300, Intacct</p></div></div>
        <div class="plat-card"><div class="plat-ico">Xe</div><div><h3>Xero</h3><p>Setup, migration, integrations &amp; training</p></div></div>
        <div class="plat-card"><div class="plat-ico">Ne</div><div><h3>NetSuite</h3><p>ERP implementation, support &amp; reporting</p></div></div>
        <div class="plat-card"><div class="plat-ico">Fr</div><div><h3>FreshBooks</h3><p>Invoicing, reporting &amp; subscription setup</p></div></div>
        <div class="plat-card"><div class="plat-ico">Wa</div><div><h3>Wave &amp; Others</h3><p>Zoho Books, Wave, Gusto &amp; more</p></div></div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section id="process">
    <div class="wrap">
      <div class="section-head">
        <div class="eyebrow"><span class="dot"></span>Our Process</div>
        <h2>A simple, streamlined process for better business solutions</h2>
        <p>From consultation to completion, we ensure every project is handled with precision, transparency, and efficiency.</p>
      </div>
      <div class="process-grid">
        <div class="proc-card"><div class="proc-num">01</div><h3>Share Your Requirements</h3><p>Tell us about your business challenges and objectives. Our team takes the time to understand your unique needs before recommending the right solution.</p></div>
        <div class="proc-card"><div class="proc-num">02</div><h3>Solution Planning</h3><p>Our specialists evaluate your requirements and develop a customized strategy designed to deliver secure, accurate, and cost-effective results.</p></div>
        <div class="proc-card"><div class="proc-num">03</div><h3>Implementation</h3><p>Once approved, we begin the project using proven processes and industry best practices to ensure timely and seamless execution.</p></div>
        <div class="proc-card"><div class="proc-num">04</div><h3>Ongoing Support &amp; Success</h3><p>Our commitment doesn't end with delivery. We provide continuous support, regular updates, and expert assistance to keep your business running smoothly.</p></div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section>
    <div class="wrap">
      <div class="section-head" style="margin-left:auto; margin-right:auto; text-align:center;">
        <div class="eyebrow" style="justify-content:center;"><span class="dot"></span>What Our Clients Say</div>
        <h2>Trusted by businesses. Valued by clients.</h2>
      </div>
      <div class="testi-wrap">
        <div class="stars">★★★★★</div>
        <div id="testiQuote" class="testi-quote">"The team made our accounting process effortless. Their accuracy, professionalism, and timely support have helped us keep our finances organized and make better business decisions."</div>
        <div id="testiName" class="testi-name">Laurence Herrera</div>
        <div id="testiRole" class="testi-role">Chief Innovation Officer</div>
        <div class="testi-nav">
          <button id="testiPrev" aria-label="Previous testimonial">‹</button>
          <button id="testiNext" aria-label="Next testimonial">›</button>
        </div>
        <div class="testi-dots" id="testiDots"><span class="active"></span><span></span><span></span></div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="contact-band" id="contact">
    <div class="wrap">
      <div class="contact-grid">
        <div class="contact-info">
          <div class="eyebrow"><span class="dot"></span>Contact CTA</div>
          <h2>Let's talk about your books.</h2>
          <p>Tell us a bit about your business and a specialist will reach out within one business day.</p>
          <div class="contact-line">
            <a href="tel:8005550184">📞 Call Us — (800) 555-0184</a>
            <a href="mailto:hello@payrollservicess.com">✉ Email Us — hello@payrollservicess.com</a>
          </div>
          <div class="contact-meta">
            <div><div class="lbl">Office</div><div class="val">200 Ledger Ave, Suite 410, Austin, TX</div></div>
            <div><div class="lbl">Hours</div><div class="val">Mon – Fri, 8:00 AM – 6:00 PM CT</div></div>
          </div>
        </div>
        <form class="form-card" onsubmit="event.preventDefault(); this.querySelector('.btn').textContent='Request Sent ✓';">
          <div class="form-row">
            <div class="field"><label for="fname">Full Name *</label><input id="fname" required type="text" placeholder="Jordan Blake"></div>
            <div class="field"><label for="fcompany">Company</label><input id="fcompany" type="text" placeholder="Blake & Co."></div>
          </div>
          <div class="form-row">
            <div class="field"><label for="femail">Email Address *</label><input id="femail" required type="email" placeholder="jordan@company.com"></div>
            <div class="field"><label for="fphone">Phone Number</label><input id="fphone" type="tel" placeholder="(800) 555-0184"></div>
          </div>
          <div class="field" style="margin-bottom:12px;"><label>Ticket Type</label></div>
          <div class="ticket-row">
            <button type="button" class="ticket active">Standard</button>
            <button type="button" class="ticket">Professional</button>
            <button type="button" class="ticket">Executive</button>
          </div>
          <button type="submit" class="btn btn-accent">Reserve Now</button>
        </form>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section>
    <div class="wrap">
      <div class="section-head">
        <div class="eyebrow"><span class="dot"></span>FAQs</div>
        <h2>Frequently asked questions</h2>
      </div>
      <div class="faq-list" id="faqList">
        <div class="faq-item"><button class="faq-q">What are payroll services?<span class="plus">+</span></button><div class="faq-a"><p>Payroll services handle calculating employee wages, withholding taxes, processing direct deposits, and filing payroll tax forms — so businesses don't have to manage it manually.</p></div></div>
        <div class="faq-item"><button class="faq-q">What does a payroll company do?<span class="plus">+</span></button><div class="faq-a"><p>A payroll company processes employee pay, handles tax withholdings and filings, manages benefits deductions, and ensures compliance with labor laws.</p></div></div>
        <div class="faq-item"><button class="faq-q">How do I choose the right payroll company?<span class="plus">+</span></button><div class="faq-a"><p>Look for accurate tax filing, transparent pricing, integration with your accounting software, responsive support, and scalability as your team grows.</p></div></div>
        <div class="faq-item"><button class="faq-q">What do bookkeeping services include?<span class="plus">+</span></button><div class="faq-a"><p>Bookkeeping services cover recording daily transactions, reconciling bank accounts, tracking expenses, and maintaining accurate financial records for your business.</p></div></div>
        <div class="faq-item"><button class="faq-q">Do small businesses need bookkeeping services?<span class="plus">+</span></button><div class="faq-a"><p>Yes — accurate books help small businesses track cash flow, prepare for tax season, and make informed financial decisions.</p></div></div>
        <div class="faq-item"><button class="faq-q">What's the difference between bookkeeping and accounting services?<span class="plus">+</span></button><div class="faq-a"><p>Bookkeeping records transactions; accounting services interpret that data — producing financial statements, analysis, and strategic guidance.</p></div></div>
        <div class="faq-item"><button class="faq-q">When should a business hire an accounting service?<span class="plus">+</span></button><div class="faq-a"><p>Once financial complexity grows — multiple revenue streams, investors, or tax planning needs — outsourcing accounting saves time and reduces errors.</p></div></div>
        <div class="faq-item"><button class="faq-q">Can tax services help reduce my business taxes?<span class="plus">+</span></button><div class="faq-a"><p>Yes — through strategic planning like deductions, entity structuring, and timing of expenses and income, tax professionals can legally lower your tax burden.</p></div></div>
        <div class="faq-item"><button class="faq-q">What are CFO services?<span class="plus">+</span></button><div class="faq-a"><p>CFO services, often fractional CFO, provide high-level financial strategy — forecasting, cash flow management, fundraising support — without the cost of a full-time CFO.</p></div></div>
        <div class="faq-item"><button class="faq-q">Who needs CFO services?<span class="plus">+</span></button><div class="faq-a"><p>Growing businesses needing strategic financial guidance but not yet ready for a full-time executive hire.</p></div></div>
      </div>
    </div>
  </section>

</main>

<footer>
  <div class="wrap">
    <div class="foot-top">
      <div>
        <div class="foot-logo-row">
          <span class="logo-mark">PS</span>
          <span class="foot-logo">Payroll Servicess</span>
        </div>
        <p class="foot-desc">The back-office finance team for growing businesses — accurate numbers, delivered on time, explained in plain English.</p>
      </div>
      <div class="foot-cols">
        <div><h5>Company</h5><a href="#about">About Us</a><a href="#services">Services</a><a href="#contact">Contact Us</a><a href="#contact">Pricing</a></div>
        <div><h5>Resources</h5><a href="#">Blog</a><a href="#">Accounting Guides</a><a href="#">Tax Tips</a><a href="#">Case Studies</a></div>
        <div><h5>Legal</h5><a href="#">Privacy Policy</a><a href="#">Terms &amp; Conditions</a><a href="#">Cookie Policy</a><a href="#">Disclaimer</a></div>
      </div>
    </div>
    <div class="foot-bottom">
      <span>© 2026 Payroll Servicess. All rights reserved.</span>
      <span>Dashboard build · Austin, TX</span>
    </div>
  </div>
</footer>

<script>
  const counters = document.querySelectorAll('.count');
  const io = new IntersectionObserver((entries)=>{
    entries.forEach(entry=>{
      if(entry.isIntersecting){
        const el = entry.target;
        const target = parseFloat(el.dataset.count);
        const decimals = el.dataset.decimal ? 1 : 0;
        let cur = 0;
        const step = target / 40;
        const tick = ()=>{
          cur += step;
          if(cur >= target){ el.textContent = target.toFixed(decimals); return; }
          el.textContent = cur.toFixed(decimals);
          requestAnimationFrame(tick);
        };
        tick();
        io.unobserve(el);
      }
    });
  }, {threshold:0.5});
  counters.forEach(c=>io.observe(c));

  document.querySelectorAll('.faq-item').forEach(item=>{
    const q = item.querySelector('.faq-q');
    const a = item.querySelector('.faq-a');
    q.addEventListener('click', ()=>{
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item.open').forEach(o=>{
        o.classList.remove('open');
        o.querySelector('.faq-a').style.maxHeight = null;
      });
      if(!isOpen){
        item.classList.add('open');
        a.style.maxHeight = a.scrollHeight + 'px';
      }
    });
  });

  document.querySelectorAll('.ticket').forEach(t=>{
    t.addEventListener('click', ()=>{
      document.querySelectorAll('.ticket').forEach(x=>x.classList.remove('active'));
      t.classList.add('active');
    });
  });

  const testimonials = [
    {q:`"The team made our accounting process effortless. Their accuracy, professionalism, and timely support have helped us keep our finances organized and make better business decisions."`, n:"Laurence Herrera", r:"Chief Innovation Officer"},
    {q:`"Managing payroll used to be stressful, but their experts made it seamless. Employees are paid accurately and on time, and we no longer worry about compliance or payroll errors."`, n:"Maeva Ahearn", r:"Founder & CEO"},
    {q:`"Their tax professionals guided us through every step with confidence. They helped maximize our savings, ensured timely filing, and made the entire tax season completely stress-free."`, n:"Stefanos Loukanis", r:"Director of Digital Strategy"}
  ];
  let ti = 0;
  const qEl = document.getElementById('testiQuote');
  const nEl = document.getElementById('testiName');
  const rEl = document.getElementById('testiRole');
  const dots = document.querySelectorAll('#testiDots span');
  function renderTesti(){
    qEl.textContent = testimonials[ti].q;
    nEl.textContent = testimonials[ti].n;
    rEl.textContent = testimonials[ti].r;
    dots.forEach((d,i)=>d.classList.toggle('active', i===ti));
  }
  document.getElementById('testiNext').addEventListener('click', ()=>{ ti = (ti+1)%testimonials.length; renderTesti(); });
  document.getElementById('testiPrev').addEventListener('click', ()=>{ ti = (ti-1+testimonials.length)%testimonials.length; renderTesti(); });
</script>

<?php wp_footer(); ?>
</body>
</html>
