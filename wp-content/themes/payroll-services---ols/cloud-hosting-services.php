<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Assist Pro Cloud Hosting Services | Payroll Servicess</title>
<meta name="description" content="Secure, scalable cloud hosting services including cloud servers, managed cloud infrastructure, VDI, backups, and disaster recovery.">
<meta property="og:title" content="Assist Pro Cloud Hosting Services | Payroll Servicess">
<meta property="og:description" content="Move your business to a secure cloud environment with enterprise-grade cloud hosting and technical support.">
<meta property="og:type" content="website">
<link rel="icon" href="data:,">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/style.css">
<style>
.hero{
  position:relative;
  overflow:hidden;
  background:#0A1330;
  padding:180px 0 80px;
  color:#fff;
}
.hero::before{
  content:'';
  position:absolute;
  inset:0;
  background:
    radial-gradient(ellipse 900px 700px at 12% 55%, rgba(47,91,255,0.85), transparent 60%),
    radial-gradient(ellipse 620px 520px at 30% 25%, rgba(0,166,166,0.45), transparent 55%);
  filter:blur(30px);
}
.hero-grid{ position:relative; z-index:1; }
.hero h1{
  color:#fff;
  font-size:clamp(38px,5vw,58px);
  font-weight:800;
  line-height:1.08;
  margin-bottom:22px;
}
.hero p.lead{
  color:rgba(255,255,255,0.86);
  font-size:16px;
  line-height:1.65;
  max-width:620px;
  margin-bottom:28px;
}
.hero-list{
  display:grid;
  grid-template-columns:repeat(2,minmax(0,1fr));
  gap:12px 18px;
  max-width:650px;
  margin:0 0 34px;
}
.hero-list li{
  display:flex;
  gap:10px;
  align-items:flex-start;
  color:rgba(255,255,255,0.88);
  font-size:14px;
  font-weight:600;
}
.hero-list i{ color:var(--c-accent); margin-top:4px; }
.hero-visual{ position:relative; height:420px; }
.collage-item{
  position:absolute;
  border-radius:16px;
  overflow:hidden;
  box-shadow:0 20px 40px rgba(0,0,0,0.35);
}
.collage-item img{ width:100%; height:100%; object-fit:cover; display:block; }
.ci-1{ top:0; left:18%; width:42%; height:170px; z-index:2; }
.ci-2{ top:155px; left:0; width:44%; height:185px; z-index:3; }
.ci-3{ top:24px; right:0; width:36%; height:330px; z-index:1; }
.cloud-stat{
  position:absolute;
  right:12%;
  bottom:0;
  z-index:4;
  background:#fff;
  color:var(--c-primary);
  border-radius:16px;
  padding:18px 20px;
  min-width:210px;
  box-shadow:0 25px 55px rgba(0,0,0,0.35);
}
.cloud-stat b{ display:block; font-family:var(--font-display); font-size:28px; color:var(--c-secondary); }
.cloud-stat span{ color:var(--c-text-muted); font-size:13px; }
.logo-strip .container > p{
  max-width:1240px;
  margin:0 auto;
  font-size:16px !important;
  line-height:1.75;
  text-align:center;
  font-weight:300;
  color:#111;
}
.pa-section{
  position:relative;
  overflow:hidden;
  padding:110px 0;
  background:#0A1330;
}
.pa-section::before{
  content:'';
  position:absolute;
  inset:0;
  background:
    radial-gradient(ellipse 800px 600px at 85% 15%, rgba(47,91,255,0.35), transparent 60%),
    radial-gradient(ellipse 700px 550px at 10% 90%, rgba(0,166,166,0.25), transparent 55%);
  filter:blur(10px);
}
.pa-section .section-head{ position:relative; z-index:1; }
.pa-section .section-head h2{ color:#fff; }
.pa-section .section-head p{ color:rgba(255,255,255,0.65); }
.pa-section .eyebrow{ background:rgba(255,255,255,0.1); color:#fff; }
.pa-grid{
  position:relative;
  z-index:1;
  display:flex;
  flex-wrap:wrap;
  justify-content:center;
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
  flex:0 1 calc(50% - 14px);
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
  background:linear-gradient(135deg,#2f5bff 0%, #074b85 100%);
}
.pa-head::after{
  content:'';
  position:absolute;
  left:0;
  right:0;
  bottom:-1px;
  height:26px;
  background:var(--c-surface,#fff);
  border-radius:24px 24px 0 0;
}
.pa-icon{
  width:52px;
  height:52px;
  border-radius:14px;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:20px;
  margin-bottom:20px;
  background:rgba(255,255,255,0.18);
  position:relative;
  z-index:1;
  border:1px solid rgba(255,255,255,0.25);
}
.pa-head h3{
  color:#fff;
  font-size:21px;
  position:relative;
  z-index:1;
  margin-bottom:0;
  line-height:1.3;
}
.pa-body{
  background:var(--c-surface,#fff);
  padding:8px 28px 30px;
  flex:1;
  display:flex;
  flex-direction:column;
}
.pa-body p{ font-size:14.5px; }
.feature-list{ display:grid; grid-template-columns:repeat(2,1fr); gap:12px 20px; }
.feature-list li{
  display:flex;
  gap:10px;
  color:var(--c-text);
  font-size:14px;
  font-weight:600;
}
.feature-list i{ color:var(--c-accent); margin-top:4px; }
.pricing-grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:28px;
}
.price-card{
  background:#fff;
  border:1px solid var(--c-border);
  border-radius:18px;
  padding:30px;
  box-shadow:var(--shadow-sm);
  display:flex;
  flex-direction:column;
}
.price-card.featured{
  border-color:var(--c-secondary);
  box-shadow:var(--shadow-lg);
}
.price-card h3{ font-size:22px; margin-bottom:10px; }
.price-card .quote{ color:var(--c-secondary); font-weight:800; margin-bottom:22px; }
.price-card ul{ margin-bottom:24px; }
.price-card li{
  display:flex;
  gap:10px;
  padding:9px 0;
  border-bottom:1px solid var(--c-border);
  font-size:13.5px;
  color:var(--c-text);
}
.price-card li:last-child{ border-bottom:none; }
.price-card li i{ color:var(--c-accent); margin-top:4px; flex:none; }
.price-card .btn{ margin-top:auto; }
@media (max-width:1080px){
  .hero-grid{ grid-template-columns:1fr; }
  .hero-visual{ height:340px; margin-top:20px; }
  .pricing-grid{ grid-template-columns:1fr; }
}
@media (max-width:768px){
  .hero{ padding:150px 0 70px; }
  .hero-visual{ display:none; }
  .hero-list,.feature-list{ grid-template-columns:1fr; }
  .pa-card{ flex-basis:100%; }
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
    <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>
    <li><a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">Resources</a></li>
    <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a></li>
  </ul>
  <div class="mn-cta"><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Get a Free Quote</a></div>
</div>
<nav class="navbar">
  <div class="container nav-inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand"><span class="brand-mark"><i class="fa-solid fa-coins"></i></span>Payroll Servicess</a>
    <ul class="nav-menu">
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
      <li class="has-dropdown">
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services <i class="fa-solid fa-chevron-down" style="font-size:10px;"></i></a>
        <ul class="dropdown">
          <li><a href="<?php echo esc_url( home_url( '/bookkeeping-services/' ) ); ?>"><i class="fa-solid fa-book-open"></i> Bookkeeping Services</a></li>
          <li><a href="<?php echo esc_url( home_url( '/accounting-services/' ) ); ?>"><i class="fa-solid fa-calculator"></i> Accounting Services</a></li>
          <li><a href="<?php echo esc_url( home_url( '/payroll-services/' ) ); ?>"><i class="fa-solid fa-money-check-dollar"></i> Payroll Services</a></li>
          <li><a href="<?php echo esc_url( home_url( '/tax-services/' ) ); ?>"><i class="fa-solid fa-file-invoice-dollar"></i> Tax Services</a></li>
          <li><a href="<?php echo esc_url( home_url( '/cloud-hosting-services/' ) ); ?>"><i class="fa-solid fa-cloud"></i> Cloud Hosting Services</a></li>
        </ul>
      </li>
      <li><a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">Resources</a></li>
      <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a></li>
    </ul>
    <div class="nav-cta">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-dark btn-sm">Live Help</a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-sm">Get a Free Quote</a>
    </div>
    <button class="nav-toggle" aria-label="Open menu"><i class="fa-solid fa-bars"></i></button>
  </div>
</nav>

<section class="hero">
  <div class="hero-ring"></div>
  <div class="container hero-grid">
    <div class="reveal in">
      <span class="eyebrow" style="background:rgba(255,255,255,0.15);color:#fff;"><i class="fa-solid fa-cloud"></i> Cloud Hosting</span>
      <h1>Assist Pro Cloud Hosting Services</h1>
      <p class="lead">Secure, scalable and high-performance cloud solutions for modern enterprise. Move your business to a secure cloud environment with AccountingAssistPro's Cloud Hosting Services.</p>
      <ul class="hero-list">
        <li><i class="fa-solid fa-circle-check"></i>Enterprise-grade cloud infrastructure</li>
        <li><i class="fa-solid fa-circle-check"></i>99.9%+ uptime for maximum availability</li>
        <li><i class="fa-solid fa-circle-check"></i>Multi-layer security protection</li>
        <li><i class="fa-solid fa-circle-check"></i>High-performance SSD storage</li>
        <li><i class="fa-solid fa-circle-check"></i>Automatic backups</li>
        <li><i class="fa-solid fa-circle-check"></i>24/7 technical support</li>
      </ul>
      <div class="hero-actions">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Get a Free Quote <i class="fa-solid fa-arrow-right"></i></a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Live Help</a>
      </div>
    </div>
    <div class="hero-visual reveal in">
      <div class="collage-item ci-1">
        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=700&auto=format&fit=crop" alt="Cloud server racks in a secure data center">
      </div>
      <div class="collage-item ci-2">
        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=700&auto=format&fit=crop" alt="Remote professional using cloud applications">
      </div>
      <div class="collage-item ci-3">
        <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=700&auto=format&fit=crop" alt="Secure cloud monitoring dashboard">
      </div>
      <div class="cloud-stat"><b>99.9%+</b><span>Cloud availability for supported environments</span></div>
    </div>
  </div>
</section>

<section class="logo-strip">
  <div class="container">
    <p>Whether you need cloud servers, managed infrastructure, virtual desktops, or disaster recovery, our enterprise-grade solutions help you work from anywhere while keeping your applications and data protected.</p>
  </div>
</section>

<section class="pa-section">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-layer-group"></i> What We Offer</span>
      <h2>Our Cloud Hosting Services</h2>
      <p>Host your business applications on a secure, high-performance cloud environment that scales as you grow.</p>
    </div>
    <div class="pa-grid">
      <div class="pa-card reveal">
        <div class="pa-head"><div class="pa-icon"><i class="fa-solid fa-server"></i></div><h3>Cloud Server Hosting</h3></div>
        <div class="pa-body"><p>Deploy your accounting software, databases, and business applications on high-performance cloud servers. Benefit from fast speeds, 99.9% uptime, and resources that scale up or down based on demand.</p></div>
      </div>
      <div class="pa-card reveal">
        <div class="pa-head"><div class="pa-icon"><i class="fa-solid fa-gears"></i></div><h3>Managed Cloud Infrastructure</h3></div>
        <div class="pa-body"><p>Leave the technical heavy lifting to us. We handle setup, continuous monitoring, security patching, and optimization of your entire cloud ecosystem.</p></div>
      </div>
      <div class="pa-card reveal">
        <div class="pa-head"><div class="pa-icon"><i class="fa-solid fa-desktop"></i></div><h3>Virtual Desktop Hosting (VDI)</h3></div>
        <div class="pa-body"><p>Empower remote and hybrid teams with secure virtual workspaces. Employees can access desktops, accounting tools, and internal systems from any device.</p></div>
      </div>
      <div class="pa-card reveal">
        <div class="pa-head"><div class="pa-icon"><i class="fa-solid fa-shield-halved"></i></div><h3>Secure Cloud Backup &amp; Disaster Recovery</h3></div>
        <div class="pa-body"><p>Protect critical financial records against cyber threats, hardware failures, and natural disasters with automated encrypted backup systems.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-plug"></i> Platforms</span>
      <h2>Cloud Expertise Across Leading Platforms</h2>
      <p>We work with trusted cloud platforms and virtualization technologies to deliver secure and scalable hosting solutions tailored to your business needs.</p>
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
      <h2>Industries We Serve</h2>
      <p>Our cloud hosting services are tailored for businesses and individuals across a wide range of industries.</p>
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
  <div class="container split">
    <div class="split-media reveal">
      <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1000&auto=format&fit=crop" alt="Cloud infrastructure network visualization">
    </div>
    <div class="reveal">
      <span class="eyebrow"><i class="fa-solid fa-shield"></i> Why Choose Us</span>
      <h2>Why Choose Assist Pro for Cloud Hosting Services?</h2>
      <p>We combine reliable cloud technology with expert support to deliver secure, scalable, and high-performing hosting solutions.</p>
      <ul class="feature-list">
        <li><i class="fa-solid fa-check"></i>Secure remote access from anywhere</li>
        <li><i class="fa-solid fa-check"></i>High-performance cloud infrastructure</li>
        <li><i class="fa-solid fa-check"></i>Reduced IT maintenance costs</li>
        <li><i class="fa-solid fa-check"></i>Automatic backups and disaster recovery</li>
        <li><i class="fa-solid fa-check"></i>Flexible resource upgrades</li>
        <li><i class="fa-solid fa-check"></i>Business continuity and high availability</li>
        <li><i class="fa-solid fa-check"></i>Enterprise-grade data protection</li>
        <li><i class="fa-solid fa-check"></i>Dedicated technical support</li>
      </ul>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-route"></i> Our Process</span>
      <h2>Cloud Hosting Process</h2>
      <p>A structured process for planning, migration, implementation, and ongoing support.</p>
    </div>
    <div class="process-wrap reveal">
      <div class="process-line"><div class="process-line-fill"></div></div>
      <div class="process-steps">
        <div class="p-step"><div class="p-num">1</div><h4>Consultation &amp; Assessment</h4><p>We evaluate your business requirements, applications, and infrastructure to recommend the right cloud solution.</p></div>
        <div class="p-step"><div class="p-num">2</div><h4>Deployment &amp; Migration</h4><p>Our specialists configure your cloud environment and securely migrate applications and data with minimal disruption.</p></div>
        <div class="p-step"><div class="p-num">3</div><h4>Zero-Downtime Implementation</h4><p>We schedule migration during low-traffic periods to avoid disruption to your daily workflow.</p></div>
        <div class="p-step"><div class="p-num">4</div><h4>Ongoing Management &amp; Support</h4><p>Our team monitors systems, updates security protocols, and provides live help whenever needed.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-tags"></i> Pricing</span>
      <h2>Flexible Cloud Hosting Plans</h2>
      <p>Simple, scalable, and secure cloud solutions for every business. Plans are customized to your infrastructure and performance requirements.</p>
    </div>
    <div class="pricing-grid">
      <div class="price-card reveal">
        <h3>Basic</h3>
        <div class="quote">Request a Quote</div>
        <ul>
          <li><i class="fa-solid fa-check"></i>4 GB RAM</li>
          <li><i class="fa-solid fa-check"></i>AMD EPYC processor</li>
          <li><i class="fa-solid fa-check"></i>Windows Server 2022 Datacenter</li>
          <li><i class="fa-solid fa-check"></i>100 TB bandwidth on a 10Gbps port</li>
          <li><i class="fa-solid fa-check"></i>100 GB usable NVME storage</li>
          <li><i class="fa-solid fa-check"></i>Daily backup system</li>
          <li><i class="fa-solid fa-check"></i>Chat/Ticket Support</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-dark">Request Quote</a>
      </div>
      <div class="price-card featured reveal">
        <h3>Plus</h3>
        <div class="quote">Request a Quote</div>
        <ul>
          <li><i class="fa-solid fa-check"></i>4 GB RAM</li>
          <li><i class="fa-solid fa-check"></i>AMD EPYC processor</li>
          <li><i class="fa-solid fa-check"></i>DDOS FENS + Server Defense System</li>
          <li><i class="fa-solid fa-check"></i>Hardware firewall installed</li>
          <li><i class="fa-solid fa-check"></i>10 GBPS internal network</li>
          <li><i class="fa-solid fa-check"></i>Anti-malware and anti-ransomware setup</li>
          <li><i class="fa-solid fa-check"></i>Priority Support</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Request Quote</a>
      </div>
      <div class="price-card reveal">
        <h3>Premium</h3>
        <div class="quote">Request a Quote</div>
        <ul>
          <li><i class="fa-solid fa-check"></i>NVME hard drive for faster execution</li>
          <li><i class="fa-solid fa-check"></i>Microsoft Office Pro Plus pre-installed</li>
          <li><i class="fa-solid fa-check"></i>Dedicated internet connection with dedicated IP</li>
          <li><i class="fa-solid fa-check"></i>No maintenance costs</li>
          <li><i class="fa-solid fa-check"></i>Daily backup system</li>
          <li><i class="fa-solid fa-check"></i>Enterprise security controls</li>
          <li><i class="fa-solid fa-check"></i>Priority Support</li>
        </ul>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline-dark">Request Quote</a>
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
      <div class="t-card reveal"><div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div><p class="t-quote">"Migrating to AccountingAssistPro's cloud hosting was one of the best decisions for our CPA firm. Our team can securely access QuickBooks from anywhere."</p><div class="t-person"><div class="t-avatar">LA</div><div><b>Logan Ashford</b><span>Business Owner</span></div></div></div>
      <div class="t-card reveal"><div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div><p class="t-quote">"The managed cloud service eliminated our server maintenance headaches, and the secure backup solution gives us peace of mind."</p><div class="t-person"><div class="t-avatar">BD</div><div><b>Brielle Donovan</b><span>Operations Manager</span></div></div></div>
      <div class="t-card reveal"><div class="t-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div><p class="t-quote">"The Virtual Desktop Hosting solution transformed how our remote employees work. It is fast, secure, and easier to manage than our old setup."</p><div class="t-person"><div class="t-avatar">PW</div><div><b>Preston Whitaker</b><span>IT Director</span></div></div></div>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="section-head reveal">
      <span class="eyebrow"><i class="fa-solid fa-circle-question"></i> FAQ</span>
      <h2>Frequently Asked Questions</h2>
    </div>
    <div class="faq-wrap reveal" style="max-width:850px;margin:0 auto;">
      <div class="faq-item"><div class="faq-q">What is cloud hosting? <i class="fa-solid fa-plus"></i></div><div class="faq-a"><div class="faq-a-inner">Cloud hosting stores your applications and data on secure remote servers, allowing access from anywhere with an internet connection.</div></div></div>
      <div class="faq-item"><div class="faq-q">Is cloud hosting secure? <i class="fa-solid fa-plus"></i></div><div class="faq-a"><div class="faq-a-inner">Yes. We use encryption, firewalls, multi-factor authentication, security monitoring, and backup systems to protect business data.</div></div></div>
      <div class="faq-item"><div class="faq-q">Can you migrate my existing applications? <i class="fa-solid fa-plus"></i></div><div class="faq-a"><div class="faq-a-inner">Yes. We provide secure cloud migration services with minimal downtime and complete data integrity.</div></div></div>
      <div class="faq-item"><div class="faq-q">Do you offer backup and disaster recovery? <i class="fa-solid fa-plus"></i></div><div class="faq-a"><div class="faq-a-inner">Yes. We provide automated cloud backups and disaster recovery solutions to help protect your business from data loss and downtime.</div></div></div>
      <div class="faq-item"><div class="faq-q">Who can benefit from cloud hosting? <i class="fa-solid fa-plus"></i></div><div class="faq-a"><div class="faq-a-inner">Small businesses, enterprises, accounting firms, healthcare providers, legal firms, and teams that need secure remote access can benefit.</div></div></div>
      <div class="faq-item"><div class="faq-q">Can you host platforms like Sage and QuickBooks? <i class="fa-solid fa-plus"></i></div><div class="faq-a"><div class="faq-a-inner">Yes. We specialize in hosting multi-user environments for QuickBooks Desktop, QuickBooks Enterprise, Sage, and other financial applications.</div></div></div>
      <div class="faq-item"><div class="faq-q">What is the difference between Cloud Server Hosting and VDI? <i class="fa-solid fa-plus"></i></div><div class="faq-a"><div class="faq-a-inner">Cloud Server Hosting focuses on backend applications and infrastructure, while VDI provides full virtual desktop environments for end users.</div></div></div>
      <div class="faq-item"><div class="faq-q">How long does migration take? <i class="fa-solid fa-plus"></i></div><div class="faq-a"><div class="faq-a-inner">Most migrations are completed in days with zero or minimal downtime, depending on data volume and application complexity.</div></div></div>
    </div>
  </div>
</section>

<section class="section-tight">
  <div class="container">
    <div class="cta-banner reveal">
      <h2>Ready to Move Your Business to the Cloud?</h2>
      <p>Speak with a cloud expert and get a customized hosting solution for your applications, team, and data.</p>
      <div class="hero-actions">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="background:#fff;color:var(--c-primary);">Get a Free Quote</a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Live Help</a>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="brand"><span class="brand-mark"><i class="fa-solid fa-coins"></i></span>Payroll Servicess</div>
        <p>Secure cloud hosting, virtual desktop, backup, and managed infrastructure solutions for modern businesses.</p>
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
          <li><a href="<?php echo esc_url( home_url( '/industries/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Industries</a></li>
          <li><a href="<?php echo esc_url( home_url( '/pricing/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Pricing</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Contact</a></li>
        </ul>
      </div>
      <div>
        <h4>Resources</h4>
        <ul class="footer-links">
          <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Blog</a></li>
          <li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Privacy Policy</a></li>
          <li><a href="<?php echo esc_url( home_url( '/terms-and-conditions/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Terms &amp; Conditions</a></li>
          <li><a href="<?php echo esc_url( home_url( '/payroll-resources/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Payroll Resources</a></li>
          <li><a href="<?php echo esc_url( home_url( '/business-finance/' ) ); ?>"><i class="fa-solid fa-angle-right"></i>Business Finance</a></li>
        </ul>
      </div>
      <div>
        <h4>Stay Informed</h4>
        <p style="font-size:14px;color:rgba(255,255,255,0.6);">Cloud hosting tips and security updates, once a month. No spam.</p>
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
        <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a>
        <a href="<?php echo esc_url( home_url( '/terms-and-conditions/' ) ); ?>">Terms &amp; Conditions</a>
      </div>
    </div>
  </div>
</footer>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>
