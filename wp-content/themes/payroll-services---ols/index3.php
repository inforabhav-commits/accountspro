<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Payroll Servicess | Payroll & Accounting Services</title>
<meta name="description" content="Professional payroll, bookkeeping, accounting, tax, and CFO services for growing businesses.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,400;1,9..144,500&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<style>
  :root{
    --paper:#F2F4EE;
    --paper-2:#EAEDE3;
    --ink:#15291F;
    --ink-soft:#1B2420;
    --green:#2F5C46;
    --green-soft:#3E6E54;
    --brass:#B98D4A;
    --brass-soft:#D8B87C;
    --red:#A63B2E;
    --line: rgba(21,41,31,0.14);
    --line-strong: rgba(21,41,31,0.28);
    --paper-rgb: 242,244,238;
    --shadow: 0 20px 50px -25px rgba(21,41,31,0.35);

    --font-display: 'Fraunces', serif;
    --font-body: 'Inter', sans-serif;
    --font-mono: 'IBM Plex Mono', monospace;
  }

  *{box-sizing:border-box; margin:0; padding:0;}
  html{scroll-behavior:smooth;}
  body{
    font-family: var(--font-body);
    background: var(--paper);
    color: var(--ink-soft);
    line-height:1.6;
    -webkit-font-smoothing:antialiased;
  }
  img{max-width:100%; display:block;}
  a{color:inherit; text-decoration:none;}
  ul{list-style:none;}
  button{font-family:inherit; cursor:pointer;}
  .wrap{ max-width:1180px; margin:0 auto; padding:0 32px; }
  @media (max-width:640px){ .wrap{ padding:0 20px; } }

  ::selection{ background: var(--brass); color:var(--paper); }
  :focus-visible{ outline: 2px solid var(--brass); outline-offset: 3px; }

  @media (prefers-reduced-motion: reduce){
    *{ animation-duration: 0.01ms !important; animation-iteration-count: 1 !important; transition-duration: 0.01ms !important; scroll-behavior:auto !important;}
  }

  /* ---------- Ledger rule / dividers ---------- */
  .rule{
    position:relative;
    height:1px;
    background: var(--line);
  }
  .rule::before, .rule::after{
    content:"";
    position:absolute; top:-3px;
    width:1px; height:7px;
    background: var(--line-strong);
  }
  .rule::before{ left:32px; }
  .rule::after{ right:32px; }

  .folio{
    font-family: var(--font-mono);
    font-size:12px;
    letter-spacing:.12em;
    color: var(--brass);
    text-transform:uppercase;
  }

  .eyebrow{
    font-family: var(--font-mono);
    font-size:12.5px;
    letter-spacing:.16em;
    text-transform:uppercase;
    color: var(--green);
    display:flex;
    align-items:center;
    gap:10px;
    margin-bottom:18px;
  }
  .eyebrow::before{
    content:"";
    width:22px; height:1px;
    background: var(--brass);
  }

  h1,h2,h3{ font-family: var(--font-display); color: var(--ink); font-weight:500; letter-spacing:-.01em; }
  h1{ font-weight:400; }

  .btn{
    display:inline-flex; align-items:center; justify-content:center; gap:8px;
    font-family: var(--font-body); font-weight:600; font-size:14.5px;
    padding:15px 28px;
    border-radius:2px;
    border:1px solid transparent;
    transition: all .25s ease;
    white-space:nowrap;
  }
  .btn-primary{
    background: var(--ink);
    color: var(--paper);
  }
  .btn-primary:hover{ background: var(--green); transform: translateY(-1px); box-shadow: var(--shadow); }
  .btn-ghost{
    border-color: var(--line-strong);
    color: var(--ink);
    background:transparent;
  }
  .btn-ghost:hover{ border-color: var(--ink); background: rgba(21,41,31,0.04); }

  /* ---------- Header ---------- */
  header{
    position:sticky; top:0; z-index:100;
    background: rgba(242,244,238,0.92);
    backdrop-filter: blur(10px);
    border-bottom:1px solid var(--line);
  }
  .nav{
    display:flex; align-items:center; justify-content:space-between;
    height:82px;
  }
  .logo{
    display:flex; align-items:center; gap:11px;
    font-family: var(--font-display); font-size:19px; color:var(--ink);
    font-weight:600;
  }
  .logo-mark{
    width:38px; height:38px;
    border:1.5px solid var(--ink);
    border-radius:50%;
    display:flex; align-items:center; justify-content:center;
    font-family: var(--font-mono); font-size:12px; letter-spacing:.02em;
    position:relative;
  }
  .logo-mark::after{
    content:"";
    position:absolute; inset:4px;
    border:1px solid var(--brass);
    border-radius:50%;
  }
  .nav-links{
    display:flex; align-items:center; gap:38px;
    font-size:14.5px; font-weight:500;
  }
  .nav-links a{
    position:relative; padding:4px 0; color: var(--ink-soft);
  }
  .nav-links a::after{
    content:""; position:absolute; left:0; bottom:0; width:0; height:1px;
    background: var(--brass); transition: width .25s ease;
  }
  .nav-links a:hover::after{ width:100%; }
  .nav-cta{ display:flex; align-items:center; gap:14px; }
  .nav-tel{ font-family: var(--font-mono); font-size:13.5px; color:var(--green); display:flex; align-items:center; gap:6px;}
  .burger{ display:none; }

  @media (max-width: 920px){
    .nav-links{ display:none; }
    .nav-tel{ display:none; }
    .burger{
      display:flex; flex-direction:column; gap:5px; background:none; border:none; padding:6px;
    }
    .burger span{ width:22px; height:1.5px; background:var(--ink); display:block; }
  }

  /* ---------- Hero ---------- */
  .hero{
    padding:76px 0 0;
    position:relative;
    overflow:hidden;
  }
  .hero::before{
    content:"";
    position:absolute; top:0; right:-10%;
    width:60%; height:100%;
    background: radial-gradient(ellipse at top right, rgba(185,141,74,0.10), transparent 60%);
    pointer-events:none;
  }
  .hero-grid{
    display:grid; grid-template-columns: 1.05fr .95fr; gap:64px; align-items:center;
    position:relative;
  }
  .hero h1{
    font-size:clamp(34px, 4.6vw, 56px);
    line-height:1.08;
    margin-bottom:22px;
    max-width:640px;
  }
  .hero h1 em{ font-style:italic; color:var(--green); }
  .hero p.lead{
    font-size:17px; color:#3A4A42; max-width:520px; margin-bottom:34px;
  }
  .hero-actions{ display:flex; gap:14px; flex-wrap:wrap; margin-bottom:52px; }

  .ledger-strip{
    border-top:1px solid var(--line-strong);
    border-bottom:1px solid var(--line-strong);
    display:grid; grid-template-columns:repeat(4,1fr);
  }
  .ledger-cell{
    padding:20px 18px 20px 0;
    border-right:1px solid var(--line);
  }
  .ledger-cell:last-child{ border-right:none; padding-right:0;}
  .ledger-cell .num{
    font-family: var(--font-mono); font-size:26px; color:var(--ink); font-weight:600;
    display:flex; align-items:baseline; gap:2px;
  }
  .ledger-cell .num .count{ min-width:1ch; }
  .ledger-cell .lbl{
    font-size:12px; color:#5C6B62; margin-top:6px; letter-spacing:.02em;
  }
  @media (max-width:640px){
    .ledger-strip{ grid-template-columns:repeat(2,1fr); row-gap:18px; }
    .ledger-cell:nth-child(2){ border-right:none; }
    .ledger-cell{ padding-right:14px; }
  }

  .hero-media{ position:relative; }
  .hero-media .frame{
    position:relative;
    border:1px solid var(--line-strong);
    padding:14px;
    background: var(--paper);
  }
  .hero-media img{
    width:100%; height:520px; object-fit:cover;
    filter: saturate(0.92) contrast(1.02);
  }
  .stamp{
    position:absolute; left:-38px; bottom:38px;
    width:128px; height:128px;
    border-radius:50%;
    background: var(--paper);
    border:2px solid var(--red);
    color: var(--red);
    display:flex; flex-direction:column; align-items:center; justify-content:center;
    text-align:center;
    transform: rotate(-11deg);
    box-shadow: var(--shadow);
    font-family: var(--font-mono);
  }
  .stamp::before{
    content:"";
    position:absolute; inset:9px;
    border:1px dashed var(--red);
    border-radius:50%;
    opacity:.6;
  }
  .stamp .big{ font-family: var(--font-display); font-size:26px; font-weight:600; line-height:1;}
  .stamp .small{ font-size:8.5px; letter-spacing:.08em; text-transform:uppercase; margin-top:6px; line-height:1.3; max-width:82px;}
  @media (max-width:920px){
    .hero-grid{ grid-template-columns:1fr; }
    .hero-media{ order:-1; }
    .hero-media img{ height:340px; }
    .stamp{ width:100px; height:100px; left:-14px; bottom:-14px; }
    .stamp .big{ font-size:20px; }
  }

  /* ---------- Section shell ---------- */
  section{ padding:96px 0; position:relative; }
  @media (max-width:640px){ section{ padding:64px 0; } }
  .section-head{ max-width:640px; margin-bottom:56px; }
  .section-head h2{ font-size:clamp(26px,3.2vw,38px); line-height:1.15; }
  .section-head p{ color:#3A4A42; font-size:16px; margin-top:16px; }

  /* ---------- About / Why choose ---------- */
  .about-grid{ display:grid; grid-template-columns: .85fr 1.15fr; gap:72px; align-items:center; }
  .about-media{ position:relative; }
  .about-media img{ width:100%; height:460px; object-fit:cover; border:1px solid var(--line-strong); }
  .about-media .tag{
    position:absolute; top:20px; left:-20px;
    background:var(--ink); color:var(--paper);
    font-family:var(--font-mono); font-size:11px; letter-spacing:.1em; text-transform:uppercase;
    padding:9px 16px;
  }
  .checklist{ margin-top:32px; display:grid; gap:0; }
  .checklist li{
    display:flex; gap:18px; padding:18px 0;
    border-top:1px solid var(--line);
    align-items:flex-start;
  }
  .checklist li:last-child{ border-bottom:1px solid var(--line); }
  .checklist .idx{ font-family:var(--font-mono); color:var(--brass); font-size:13px; padding-top:2px; }
  .checklist p{ font-size:15px; color:var(--ink-soft); }
  @media (max-width:920px){ .about-grid{ grid-template-columns:1fr; gap:40px; } .about-media img{ height:320px; } }

  /* ---------- Services ---------- */
  .services-band{ background: var(--ink); color: var(--paper); }
  .services-band .eyebrow{ color: var(--brass-soft); }
  .services-band .eyebrow::before{ background: var(--brass-soft); }
  .services-band .section-head h2{ color:var(--paper); }
  .services-band .section-head p{ color: rgba(242,244,238,0.65); }

  .svc-grid{ display:grid; grid-template-columns:repeat(5,1fr); gap:1px; background: rgba(242,244,238,0.14); border:1px solid rgba(242,244,238,0.14); }
  .svc-card{
    background: var(--ink);
    padding:32px 22px;
    transition: background .25s ease;
  }
  .svc-card:hover{ background:#1C3627; }
  .svc-code{
    font-family:var(--font-mono); font-size:12px; color:var(--brass-soft);
    width:38px; height:38px; border:1px solid rgba(242,244,238,0.3); border-radius:50%;
    display:flex; align-items:center; justify-content:center; margin-bottom:22px;
  }
  .svc-card h3{ color:var(--paper); font-size:18px; margin-bottom:14px; }
  .svc-card ul li{
    font-size:13.5px; color:rgba(242,244,238,0.62); padding:6px 0;
    border-top:1px solid rgba(242,244,238,0.10);
  }
  .svc-card ul li:first-child{ border-top:none; }
  @media (max-width:920px){ .svc-grid{ grid-template-columns:repeat(2,1fr); } }
  @media (max-width:560px){ .svc-grid{ grid-template-columns:1fr; } }

  .tag-row{ margin-top:64px; display:grid; grid-template-columns:1fr 1fr; gap:48px; }
  .tag-row h4{
    font-family:var(--font-mono); font-size:12px; letter-spacing:.12em; text-transform:uppercase;
    color: var(--brass-soft); margin-bottom:18px;
  }
  .pill-list{ display:flex; flex-wrap:wrap; gap:10px; }
  .pill{
    font-size:13px; padding:9px 16px; border:1px solid rgba(242,244,238,0.24);
    color: rgba(242,244,238,0.85);
    border-radius:999px;
  }
  @media (max-width:700px){ .tag-row{ grid-template-columns:1fr; } }

  /* ---------- Platforms ---------- */
  .plat-grid{ display:grid; grid-template-columns:repeat(3,1fr); gap:1px; background:var(--line); border:1px solid var(--line); }
  .plat-card{
    background: var(--paper); padding:30px 26px; display:flex; gap:16px; align-items:flex-start;
  }
  .plat-code{
    font-family:var(--font-mono); font-size:13px; color:var(--ink);
    width:44px; height:44px; border:1px solid var(--line-strong);
    display:flex; align-items:center; justify-content:center; flex-shrink:0;
  }
  .plat-card h3{ font-size:16.5px; margin-bottom:4px; }
  .plat-card p{ font-size:13.5px; color:#5C6B62; }
  @media (max-width:800px){ .plat-grid{ grid-template-columns:repeat(2,1fr); } }
  @media (max-width:560px){ .plat-grid{ grid-template-columns:1fr; } }

  /* ---------- Process ---------- */
  .process-list{ margin-top:8px; }
  .proc-item{
    display:grid; grid-template-columns:120px 1fr; gap:28px;
    padding:36px 0; border-top:1px solid var(--line);
  }
  .process-list .proc-item:last-child{ border-bottom:1px solid var(--line); }
  .proc-item .folio{ font-size:15px; padding-top:4px; }
  .proc-item h3{ font-size:20px; margin-bottom:10px; }
  .proc-item p{ color:#3A4A42; font-size:15px; max-width:560px; }
  @media (max-width:640px){ .proc-item{ grid-template-columns:1fr; gap:8px; } }

  /* ---------- Testimonials ---------- */
  .testi-wrap{ position:relative; max-width:760px; margin:0 auto; text-align:center; }
  .stars{ color:var(--brass); font-size:15px; letter-spacing:3px; margin-bottom:26px; }
  .testi-quote{
    font-family:var(--font-display); font-style:italic; font-weight:400;
    font-size:clamp(19px,2.4vw,25px); line-height:1.5; color:var(--ink);
    margin-bottom:30px;
  }
  .testi-name{ font-weight:600; font-size:15px; }
  .testi-role{ font-size:13px; color:#5C6B62; margin-top:2px; }
  .testi-nav{ display:flex; justify-content:center; gap:16px; margin-top:40px; }
  .testi-nav button{
    width:42px; height:42px; border-radius:50%; border:1px solid var(--line-strong);
    background:transparent; display:flex; align-items:center; justify-content:center;
    font-size:16px; color:var(--ink); transition:all .2s ease;
  }
  .testi-nav button:hover{ background:var(--ink); color:var(--paper); }
  .testi-dots{ display:flex; justify-content:center; gap:8px; margin-top:22px; }
  .testi-dots span{ width:6px; height:6px; border-radius:50%; background:var(--line-strong); transition:background .2s ease; }
  .testi-dots span.active{ background:var(--brass); }

  /* ---------- Contact CTA ---------- */
  .contact-band{ background: var(--paper-2); }
  .contact-grid{ display:grid; grid-template-columns:.9fr 1.1fr; gap:70px; }
  .contact-info h2{ font-size:clamp(28px,3.4vw,40px); margin-bottom:16px; }
  .contact-info > p{ color:#3A4A42; margin-bottom:36px; max-width:420px; }
  .contact-line{ display:flex; flex-direction:column; gap:22px; margin-bottom:36px; }
  .contact-line a{
    font-family:var(--font-mono); font-size:15px; color:var(--ink); font-weight:500;
    border-bottom:1px solid var(--line-strong); padding-bottom:10px; display:inline-flex; width:fit-content;
  }
  .contact-meta{ display:grid; grid-template-columns:1fr 1fr; gap:24px; max-width:420px; }
  .contact-meta .lbl{ font-size:11px; text-transform:uppercase; letter-spacing:.1em; color:var(--brass); font-family:var(--font-mono); margin-bottom:6px; }
  .contact-meta .val{ font-size:14px; color:var(--ink-soft); }

  .form-card{
    background: var(--paper); border:1px solid var(--line-strong); padding:40px;
  }
  .form-row{ display:grid; grid-template-columns:1fr 1fr; gap:18px; margin-bottom:18px; }
  .field label{ display:block; font-size:12px; text-transform:uppercase; letter-spacing:.06em; color:#5C6B62; margin-bottom:8px; font-family:var(--font-mono); }
  .field input{
    width:100%; padding:13px 14px; border:1px solid var(--line-strong); background:transparent;
    font-family:var(--font-body); font-size:14.5px; color:var(--ink); border-radius:0;
  }
  .field input:focus{ outline:none; border-color:var(--green); }
  .ticket-row{ display:grid; grid-template-columns:repeat(3,1fr); gap:10px; margin-bottom:26px; }
  .ticket{
    border:1px solid var(--line-strong); padding:14px 10px; text-align:center; cursor:pointer;
    font-size:13px; font-weight:600; transition:all .2s ease; background:transparent;
  }
  .ticket.active{ background:var(--ink); color:var(--paper); border-color:var(--ink); }
  .form-card .btn-primary{ width:100%; }
  @media (max-width:920px){ .contact-grid{ grid-template-columns:1fr; gap:44px; } }
  @media (max-width:560px){ .form-row{ grid-template-columns:1fr; } .form-card{ padding:26px; } }

  /* ---------- FAQ ---------- */
  .faq-list{ max-width:820px; }
  .faq-item{ border-top:1px solid var(--line); }
  .faq-list .faq-item:last-child{ border-bottom:1px solid var(--line); }
  .faq-q{
    width:100%; text-align:left; background:none; border:none; padding:24px 0;
    display:flex; justify-content:space-between; align-items:center; gap:20px;
    font-family:var(--font-body); font-size:16px; font-weight:600; color:var(--ink);
  }
  .faq-q .plus{ font-family:var(--font-mono); font-size:18px; color:var(--brass); transition:transform .25s ease; flex-shrink:0; }
  .faq-item.open .plus{ transform:rotate(45deg); }
  .faq-a{ max-height:0; overflow:hidden; transition:max-height .3s ease; }
  .faq-a p{ padding-bottom:24px; color:#3A4A42; font-size:15px; max-width:660px; }

  /* ---------- Footer ---------- */
  footer{ background: var(--ink); color: rgba(242,244,238,0.75); padding:72px 0 30px; }
  .foot-top{ display:grid; grid-template-columns:1.2fr 2fr; gap:60px; margin-bottom:56px; }
  .foot-logo{ color:var(--paper); font-family:var(--font-display); font-size:20px; margin-bottom:14px; }
  .foot-logo-row{ display:flex; align-items:center; gap:11px; margin-bottom:18px;}
  .foot-desc{ font-size:14px; max-width:280px; line-height:1.7; }
  .foot-cols{ display:grid; grid-template-columns:repeat(3,1fr); gap:24px; }
  .foot-cols h5{ font-family:var(--font-mono); font-size:11.5px; letter-spacing:.1em; text-transform:uppercase; color:var(--brass-soft); margin-bottom:16px; }
  .foot-cols a{ display:block; font-size:14px; padding:6px 0; color: rgba(242,244,238,0.7); }
  .foot-cols a:hover{ color: var(--paper); }
  .foot-bottom{ border-top:1px solid rgba(242,244,238,0.14); padding-top:26px; display:flex; justify-content:space-between; flex-wrap:wrap; gap:12px; font-size:12.5px; color:rgba(242,244,238,0.5); font-family:var(--font-mono); }
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
      <a href="tel:8005550184" class="nav-tel">☎ (800) 555-0184</a>
      <a href="#contact" class="btn btn-primary">Get a Free Quote</a>
      <button class="burger" aria-label="Menu"><span></span><span></span><span></span></button>
    </div>
  </div>
</header>

<main>

  <!-- HERO -->
  <section class="hero" id="home">
    <div class="wrap">
      <div class="hero-grid">
        <div>
          <div class="eyebrow">Professional Finance Support</div>
          <h1>The back-office finance team for businesses that are <em>done guessing.</em></h1>
          <p class="lead">Precise bookkeeping, clean accounting, on-time payroll, and tax filings — handled by people who treat your ledger like it's their own.</p>
          <div class="hero-actions">
            <a href="#contact" class="btn btn-primary">Get a Free Quote</a>
            <a href="tel:8005550184" class="btn btn-ghost">Live Help — Call Now</a>
          </div>
          <div class="ledger-strip">
            <div class="ledger-cell"><div class="num"><span class="count" data-count="12">0</span>+</div><div class="lbl">Years in Practice</div></div>
            <div class="ledger-cell"><div class="num"><span class="count" data-count="450">0</span>+</div><div class="lbl">Businesses Served</div></div>
            <div class="ledger-cell"><div class="num"><span class="count" data-count="99.8" data-decimal="1">0</span>%</div><div class="lbl">On-Time Payroll Rate</div></div>
            <div class="ledger-cell"><div class="num">$<span class="count" data-count="180">0</span>M+</div><div class="lbl">Payroll Processed / yr</div></div>
          </div>
        </div>
        <div class="hero-media">
          <div class="frame">
            <img src="https://jigana.in/project-07-07-2026/assets/img/premium-hero.jpg" alt="Professional payroll and accounting consultation in a modern office">
          </div>
          <div class="stamp">
            <div class="big">99.8%</div>
            <div class="small">On-Time Payroll Rate</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="wrap"><div class="rule"></div></div>

  <!-- ABOUT -->
  <section id="about">
    <div class="wrap">
      <div class="about-grid">
        <div class="about-media">
          <span class="tag">Est. 2013</span>
          <img src="https://jigana.in/project-07-07-2026/assets/img/premium-consulting.jpg" alt="Finance team reviewing accounting dashboards">
        </div>
        <div>
          <div class="eyebrow">Why Choose Us</div>
          <h2 style="font-size:clamp(26px,3.2vw,38px); line-height:1.18; max-width:520px;">A finance back-office that actually feels like part of your team.</h2>
          <p style="color:#3A4A42; margin-top:20px; max-width:520px;">Payroll Servicess was founded in 2013 by a small group of accountants and payroll specialists who kept seeing the same problem: growing businesses spending nights and weekends fighting spreadsheets instead of running their companies.</p>
          <p style="color:#3A4A42; margin-top:14px; max-width:520px;">Today we support hundreds of small and mid-sized businesses across the country — from single-location retailers to multi-state contractors — with the principle we started with: accurate numbers, delivered on time, explained in plain English.</p>
          <ul class="checklist">
            <li><span class="idx">01</span><p>Dedicated bookkeeper &amp; accountant assigned to your account</p></li>
            <li><span class="idx">02</span><p>Cloud-based dashboards, updated in real time</p></li>
            <li><span class="idx">03</span><p>Payroll and tax filings backed by a 100% compliance guarantee</p></li>
            <li><span class="idx">04</span><p>Fixed monthly pricing — no hourly surprises</p></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="services-band" id="services">
    <div class="wrap">
      <div class="section-head">
        <div class="eyebrow">Our Services</div>
        <h2>What we offer</h2>
        <p>Five core practice areas, each staffed by specialists — not generalists spread thin across your books.</p>
      </div>

      <div class="svc-grid">
        <div class="svc-card">
          <div class="svc-code">BK</div>
          <h3>Bookkeeping</h3>
          <ul>
            <li>Daily Bookkeeping</li>
            <li>Catch-Up Bookkeeping</li>
            <li>Bank Reconciliation</li>
            <li>General Ledger Management</li>
          </ul>
        </div>
        <div class="svc-card">
          <div class="svc-code">AC</div>
          <h3>Accounting</h3>
          <ul>
            <li>Financial Statements</li>
            <li>Accounts Payable</li>
            <li>Accounts Receivable</li>
            <li>Month-End &amp; Year-End Closing</li>
          </ul>
        </div>
        <div class="svc-card">
          <div class="svc-code">PR</div>
          <h3>Payroll</h3>
          <ul>
            <li>Payroll Processing</li>
            <li>Direct Deposit</li>
            <li>Payroll Tax Filing</li>
            <li>Employee Payslips</li>
          </ul>
        </div>
        <div class="svc-card">
          <div class="svc-code">TX</div>
          <h3>Tax Services</h3>
          <ul>
            <li>Business Tax Preparation</li>
            <li>Individual Tax Returns</li>
            <li>Tax Planning</li>
            <li>Sales Tax Filing</li>
          </ul>
        </div>
        <div class="svc-card">
          <div class="svc-code">CF</div>
          <h3>CFO Services</h3>
          <ul>
            <li>Virtual CFO</li>
            <li>Budgeting &amp; Forecasting</li>
            <li>Cash Flow Management</li>
            <li>Financial Strategy</li>
          </ul>
        </div>
      </div>

      <div class="tag-row">
        <div>
          <h4>Additional Services</h4>
          <div class="pill-list">
            <span class="pill">Data Entry</span>
            <span class="pill">Invoice Processing</span>
            <span class="pill">Payment Processing</span>
            <span class="pill">Vendor Management</span>
            <span class="pill">Customer Billing</span>
            <span class="pill">Financial Record Cleanup</span>
            <span class="pill">Cloud Accounting</span>
            <span class="pill">Document Management</span>
          </div>
        </div>
        <div>
          <h4>Industries We Serve</h4>
          <div class="pill-list">
            <span class="pill">Small Businesses</span>
            <span class="pill">Startups</span>
            <span class="pill">Healthcare</span>
            <span class="pill">Real Estate</span>
            <span class="pill">Construction</span>
            <span class="pill">Retail</span>
            <span class="pill">E-commerce</span>
            <span class="pill">Manufacturing</span>
            <span class="pill">Professional Services</span>
            <span class="pill">Nonprofits</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PLATFORMS -->
  <section>
    <div class="wrap">
      <div class="section-head">
        <div class="eyebrow">Expertise Across Leading Platforms</div>
        <h2>Solutions for every major accounting platform</h2>
        <p>From accounting to financial management software, our experts provide seamless support, ensuring your systems run efficiently and securely.</p>
      </div>
      <div class="plat-grid">
        <div class="plat-card"><div class="plat-code">Qu</div><div><h3>QuickBooks</h3><p>Online, Desktop, Enterprise, Payroll</p></div></div>
        <div class="plat-card"><div class="plat-code">Sa</div><div><h3>Sage</h3><p>Sage 50, Sage 100, Sage 300, Intacct</p></div></div>
        <div class="plat-card"><div class="plat-code">Xe</div><div><h3>Xero</h3><p>Setup, migration, integrations &amp; training</p></div></div>
        <div class="plat-card"><div class="plat-code">Ne</div><div><h3>NetSuite</h3><p>ERP implementation, support &amp; reporting</p></div></div>
        <div class="plat-card"><div class="plat-code">Fr</div><div><h3>FreshBooks</h3><p>Invoicing, reporting &amp; subscription setup</p></div></div>
        <div class="plat-card"><div class="plat-code">Wa</div><div><h3>Wave &amp; Others</h3><p>Zoho Books, Wave, Gusto &amp; more</p></div></div>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section id="process">
    <div class="wrap">
      <div class="section-head">
        <div class="eyebrow">Our Process</div>
        <h2>A simple, streamlined process for better business solutions</h2>
        <p>From consultation to completion, we ensure every project is handled with precision, transparency, and efficiency.</p>
      </div>
      <div class="process-list">
        <div class="proc-item">
          <span class="folio">§ 01</span>
          <div><h3>Share Your Requirements</h3><p>Tell us about your business challenges and objectives. Our team takes the time to understand your unique needs before recommending the right solution.</p></div>
        </div>
        <div class="proc-item">
          <span class="folio">§ 02</span>
          <div><h3>Solution Planning</h3><p>Our specialists evaluate your requirements and develop a customized strategy designed to deliver secure, accurate, and cost-effective results.</p></div>
        </div>
        <div class="proc-item">
          <span class="folio">§ 03</span>
          <div><h3>Implementation</h3><p>Once approved, we begin the project using proven processes and industry best practices to ensure timely and seamless execution.</p></div>
        </div>
        <div class="proc-item">
          <span class="folio">§ 04</span>
          <div><h3>Ongoing Support &amp; Success</h3><p>Our commitment doesn't end with delivery. We provide continuous support, regular updates, and expert assistance to keep your business running smoothly.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section>
    <div class="wrap">
      <div class="section-head" style="margin-left:auto; margin-right:auto; text-align:center;">
        <div class="eyebrow" style="justify-content:center;">What Our Clients Say</div>
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
        <div class="testi-dots" id="testiDots">
          <span class="active"></span><span></span><span></span>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="contact-band" id="contact">
    <div class="wrap">
      <div class="contact-grid">
        <div class="contact-info">
          <div class="eyebrow">Contact CTA</div>
          <h2>Let's talk about your books.</h2>
          <p>Tell us a bit about your business and a specialist will reach out within one business day.</p>
          <div class="contact-line">
            <a href="tel:8005550184">Call Us — (800) 555-0184</a>
            <a href="mailto:hello@payrollservicess.com">Email Us — hello@payrollservicess.com</a>
          </div>
          <div class="contact-meta">
            <div><div class="lbl">Office</div><div class="val">200 Ledger Ave, Suite 410, Austin, TX</div></div>
            <div><div class="lbl">Hours</div><div class="val">Mon – Fri, 8:00 AM – 6:00 PM CT</div></div>
          </div>
        </div>
        <form class="form-card" onsubmit="event.preventDefault(); this.querySelector('.btn-primary').textContent='Request Sent ✓';">
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
          <button type="submit" class="btn btn-primary">Reserve Now</button>
        </form>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section>
    <div class="wrap">
      <div class="section-head">
        <div class="eyebrow">FAQs</div>
        <h2>Frequently asked questions</h2>
      </div>
      <div class="faq-list" id="faqList">
        <div class="faq-item">
          <button class="faq-q">What are payroll services?<span class="plus">+</span></button>
          <div class="faq-a"><p>Payroll services handle calculating employee wages, withholding taxes, processing direct deposits, and filing payroll tax forms — so businesses don't have to manage it manually.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">What does a payroll company do?<span class="plus">+</span></button>
          <div class="faq-a"><p>A payroll company processes employee pay, handles tax withholdings and filings, manages benefits deductions, and ensures compliance with labor laws.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">How do I choose the right payroll company?<span class="plus">+</span></button>
          <div class="faq-a"><p>Look for accurate tax filing, transparent pricing, integration with your accounting software, responsive support, and scalability as your team grows.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">What do bookkeeping services include?<span class="plus">+</span></button>
          <div class="faq-a"><p>Bookkeeping services cover recording daily transactions, reconciling bank accounts, tracking expenses, and maintaining accurate financial records for your business.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">Do small businesses need bookkeeping services?<span class="plus">+</span></button>
          <div class="faq-a"><p>Yes — accurate books help small businesses track cash flow, prepare for tax season, and make informed financial decisions.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">What's the difference between bookkeeping and accounting services?<span class="plus">+</span></button>
          <div class="faq-a"><p>Bookkeeping records transactions; accounting services interpret that data — producing financial statements, analysis, and strategic guidance.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">When should a business hire an accounting service?<span class="plus">+</span></button>
          <div class="faq-a"><p>Once financial complexity grows — multiple revenue streams, investors, or tax planning needs — outsourcing accounting saves time and reduces errors.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">Can tax services help reduce my business taxes?<span class="plus">+</span></button>
          <div class="faq-a"><p>Yes — through strategic planning like deductions, entity structuring, and timing of expenses and income, tax professionals can legally lower your tax burden.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">What are CFO services?<span class="plus">+</span></button>
          <div class="faq-a"><p>CFO services, often fractional CFO, provide high-level financial strategy — forecasting, cash flow management, fundraising support — without the cost of a full-time CFO.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q">Who needs CFO services?<span class="plus">+</span></button>
          <div class="faq-a"><p>Growing businesses needing strategic financial guidance but not yet ready for a full-time executive hire.</p></div>
        </div>
      </div>
    </div>
  </section>

</main>

<footer>
  <div class="wrap">
    <div class="foot-top">
      <div>
        <div class="foot-logo-row">
          <span class="logo-mark" style="border-color:var(--paper); color:var(--paper);">PS</span>
          <span class="foot-logo">Payroll Servicess</span>
        </div>
        <p class="foot-desc">The back-office finance team for growing businesses — accurate numbers, delivered on time, explained in plain English.</p>
      </div>
      <div class="foot-cols">
        <div>
          <h5>Company</h5>
          <a href="#about">About Us</a>
          <a href="#services">Services</a>
          <a href="#contact">Contact Us</a>
          <a href="#contact">Pricing</a>
        </div>
        <div>
          <h5>Resources</h5>
          <a href="#">Blog</a>
          <a href="#">Accounting Guides</a>
          <a href="#">Tax Tips</a>
          <a href="#">Case Studies</a>
        </div>
        <div>
          <h5>Legal</h5>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms &amp; Conditions</a>
          <a href="#">Cookie Policy</a>
          <a href="#">Disclaimer</a>
        </div>
      </div>
    </div>
    <div class="foot-bottom">
      <span>© 2026 Payroll Servicess. All rights reserved.</span>
      <span>Ledger folio № 1147 · Austin, TX</span>
    </div>
  </div>
</footer>

<script>
  // Count-up stats
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

  // FAQ accordion
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

  // Ticket type selector
  document.querySelectorAll('.ticket').forEach(t=>{
    t.addEventListener('click', ()=>{
      document.querySelectorAll('.ticket').forEach(x=>x.classList.remove('active'));
      t.classList.add('active');
    });
  });

  // Testimonials carousel
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
