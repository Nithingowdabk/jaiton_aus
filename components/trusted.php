<!-- ============================================================
     TRUSTED BY SECTION – Infinite Logo Marquee
     ============================================================ -->
<section class="trusted-section" aria-label="Our Trusted Enterprise Clients">
  <div class="container">
    <div class="trusted-card glass-panel-dark">
      
      <!-- Mini header -->
      <div class="trusted-header">
        <span class="trusted-pulse"></span>
        <p class="trusted-title">TRUSTED BY INNOVATIVE ENTERPRISES GLOBALLY</p>
      </div>
      
      <!-- Infinite Scrolling Marquee -->
      <div class="logo-marquee-wrapper">
        <div class="logo-marquee-track">
          
          <!-- Set 1 -->
          <div class="client-logo logo-atlassian"><i class="fa-brands fa-atlassian"></i> <span>Atlassian</span></div>
          <div class="client-logo logo-aws"><i class="fa-brands fa-aws"></i> <span>AWS</span></div>
          <div class="client-logo logo-stripe"><i class="fa-brands fa-stripe"></i> <span>Stripe</span></div>
          <div class="client-logo logo-canva"><i class="fa-solid fa-compass-drafting"></i> <span>Canva</span></div>
          <div class="client-logo logo-salesforce"><i class="fa-brands fa-salesforce"></i> <span>Salesforce</span></div>
          <div class="client-logo logo-paypal"><i class="fa-brands fa-paypal"></i> <span>PayPal</span></div>
          <div class="client-logo logo-digitalocean"><i class="fa-brands fa-digital-ocean"></i> <span>DigitalOcean</span></div>
          <div class="client-logo logo-microsoft"><i class="fa-brands fa-microsoft"></i> <span>Microsoft</span></div>
          <div class="client-logo logo-google"><i class="fa-brands fa-google"></i> <span>Google Cloud</span></div>
          <div class="client-logo logo-hubspot"><i class="fa-brands fa-hubspot"></i> <span>HubSpot</span></div>
          
          <!-- Set 2 (duplicate for seamless loop) -->
          <div class="client-logo logo-atlassian"><i class="fa-brands fa-atlassian"></i> <span>Atlassian</span></div>
          <div class="client-logo logo-aws"><i class="fa-brands fa-aws"></i> <span>AWS</span></div>
          <div class="client-logo logo-stripe"><i class="fa-brands fa-stripe"></i> <span>Stripe</span></div>
          <div class="client-logo logo-canva"><i class="fa-solid fa-compass-drafting"></i> <span>Canva</span></div>
          <div class="client-logo logo-salesforce"><i class="fa-brands fa-salesforce"></i> <span>Salesforce</span></div>
          <div class="client-logo logo-paypal"><i class="fa-brands fa-paypal"></i> <span>PayPal</span></div>
          <div class="client-logo logo-digitalocean"><i class="fa-brands fa-digital-ocean"></i> <span>DigitalOcean</span></div>
          <div class="client-logo logo-microsoft"><i class="fa-brands fa-microsoft"></i> <span>Microsoft</span></div>
          <div class="client-logo logo-google"><i class="fa-brands fa-google"></i> <span>Google Cloud</span></div>
          <div class="client-logo logo-hubspot"><i class="fa-brands fa-hubspot"></i> <span>HubSpot</span></div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- Trusted Section Scoped Styles -->
<style>
/* ── Normal document flow — NO negative margins, NO z-index hacks ── */
.trusted-section {
  padding-top: 80px;    /* spacing after hero */
  padding-bottom: 100px; /* spacing before next section */
}

.trusted-card {
  background: rgba(255,255,255,0.02);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border: 1px solid rgba(255,255,255,0.05);
  border-radius: 24px;
  padding: 24px 32px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.3);
}

.trusted-header {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  margin-bottom: 20px;
}

.trusted-pulse {
  width: 6px;
  height: 6px;
  background: #10B981;
  border-radius: 50%;
  animation: trustedPulse 1.8s infinite;
}

@keyframes trustedPulse {
  0%  { transform: scale(0.9); box-shadow: 0 0 0 0 rgba(16,185,129,0.5); }
  70% { transform: scale(1.1); box-shadow: 0 0 0 6px rgba(16,185,129,0); }
  100%{ transform: scale(0.9); box-shadow: 0 0 0 0 rgba(16,185,129,0); }
}

.trusted-title {
  font-size: 0.6875rem;
  font-weight: 700;
  color: #94a3b8;
  text-transform: uppercase;
  letter-spacing: 0.15em;
  margin: 0;
  text-align: center;
}

.logo-marquee-wrapper {
  position: relative;
  width: 100%;
  overflow: hidden;
}

/* Gradient fade edges */
.logo-marquee-wrapper::before,
.logo-marquee-wrapper::after {
  content: "";
  position: absolute;
  top: 0;
  width: 100px;
  height: 100%;
  z-index: 5;
  pointer-events: none;
}

.logo-marquee-wrapper::before {
  left: 0;
  background: linear-gradient(to right, rgba(8,22,61,0.85), transparent);
}

.logo-marquee-wrapper::after {
  right: 0;
  background: linear-gradient(to left, rgba(8,22,61,0.85), transparent);
}

.logo-marquee-track {
  display: flex;
  gap: 20px;
  width: max-content;
  align-items: center;
  animation: infiniteScroll 25s linear infinite;
}

.client-logo {
  display: flex;
  align-items: center;
  gap: 10px;
  background: var(--white);
  border: 1px solid rgba(255,255,255,0.1);
  padding: 10px 20px;
  border-radius: 12px;
  font-family: var(--font-body);
  font-weight: 700;
  font-size: 0.875rem;
  color: var(--secondary-text);
  box-shadow: var(--shadow-sm);
  transition: all var(--transition-normal);
  cursor: pointer;
  filter: grayscale(1) opacity(0.55);
  flex-shrink: 0;
}

.client-logo:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow-md);
  filter: grayscale(0) opacity(1);
}

/* Brand hover colors */
.logo-atlassian:hover   { border-color: #0052CC; color: #0052CC; }
.logo-aws:hover         { border-color: #FF9900; color: #FF9900; }
.logo-stripe:hover      { border-color: #635BFF; color: #635BFF; }
.logo-canva:hover       { border-color: #00C4CC; color: #00C4CC; }
.logo-salesforce:hover  { border-color: #00A1E0; color: #00A1E0; }
.logo-paypal:hover      { border-color: #003087; color: #003087; }
.logo-digitalocean:hover{ border-color: #0080FF; color: #0080FF; }
.logo-microsoft:hover   { border-color: #F25022; color: #F25022; }
.logo-google:hover      { border-color: #4285F4; color: #4285F4; }
.logo-hubspot:hover     { border-color: #FF7A59; color: #FF7A59; }

@media (max-width: 991px) {
  .trusted-section {
    padding-top: 60px;
    padding-bottom: 60px;
  }
}

@media (max-width: 767px) {
  .trusted-section {
    padding-top: 40px;
    padding-bottom: 40px;
  }
  
  .trusted-card {
    padding: 16px 20px;
  }
  
  .logo-marquee-wrapper::before,
  .logo-marquee-wrapper::after {
    width: 40px;
  }
}
</style>
