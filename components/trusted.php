<!-- Trusted By Section (Floating Glassmorphic Capsule layout) -->
<section class="trusted-section">
  <div class="container">
    <div class="trusted-card">
      
      <!-- Section Mini Header with pulse indicator -->
      <div class="trusted-header">
        <span class="trusted-pulse"></span>
        <p class="trusted-title">Trusted by innovative enterprises globally</p>
      </div>
      
      <!-- Infinite Horizontal Scrolling Logo Marquee -->
      <div class="logo-marquee-wrapper">
        <div class="logo-marquee-track">
          
          <!-- Mock Client Logos with Brand Colors on Hover -->
          <div class="client-logo logo-atlassian">
            <i class="fa-brands fa-atlassian"></i> <span>Atlassian</span>
          </div>
          <div class="client-logo logo-aws">
            <i class="fa-brands fa-aws"></i> <span>AWS</span>
          </div>
          <div class="client-logo logo-stripe">
            <i class="fa-brands fa-stripe"></i> <span>Stripe</span>
          </div>
          <div class="client-logo logo-canva">
            <i class="fa-brands fa-canva"></i> <span>Canva</span>
          </div>
          <div class="client-logo logo-salesforce">
            <i class="fa-brands fa-salesforce"></i> <span>Salesforce</span>
          </div>
          <div class="client-logo logo-paypal">
            <i class="fa-brands fa-paypal"></i> <span>PayPal</span>
          </div>
          <div class="client-logo logo-digitalocean">
            <i class="fa-brands fa-digital-ocean"></i> <span>DigitalOcean</span>
          </div>
          
          <!-- Repeated for seamless loop -->
          <div class="client-logo logo-atlassian">
            <i class="fa-brands fa-atlassian"></i> <span>Atlassian</span>
          </div>
          <div class="client-logo logo-aws">
            <i class="fa-brands fa-aws"></i> <span>AWS</span>
          </div>
          <div class="client-logo logo-stripe">
            <i class="fa-brands fa-stripe"></i> <span>Stripe</span>
          </div>
          <div class="client-logo logo-canva">
            <i class="fa-brands fa-canva"></i> <span>Canva</span>
          </div>
          <div class="client-logo logo-salesforce">
            <i class="fa-brands fa-salesforce"></i> <span>Salesforce</span>
          </div>
          <div class="client-logo logo-paypal">
            <i class="fa-brands fa-paypal"></i> <span>PayPal</span>
          </div>
          <div class="client-logo logo-digitalocean">
            <i class="fa-brands fa-digital-ocean"></i> <span>DigitalOcean</span>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- CSS specifically for Trusted component structure -->
<style>
.trusted-section {
  position: relative;
  z-index: 10;
  margin-top: -50px; /* Overlap bottom of Hero section */
  margin-bottom: 50px;
  padding: 0;
  overflow: visible;
}

.trusted-card {
  background: rgba(255, 255, 255, 0.8);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border: 1px solid rgba(106, 27, 255, 0.08);
  border-radius: 32px;
  padding: 32px 40px;
  box-shadow: 0 20px 40px rgba(8, 22, 61, 0.04), 0 1px 3px rgba(8, 22, 61, 0.01);
}

.trusted-header {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  margin-bottom: 24px;
}

.trusted-pulse {
  width: 6px;
  height: 6px;
  background-color: var(--primary-purple);
  border-radius: 50%;
  animation: pulseGlow 1.8s infinite;
}

.trusted-title {
  font-size: 0.75rem;
  font-weight: 700;
  color: var(--secondary-text);
  text-transform: uppercase;
  letter-spacing: 0.12em;
  margin: 0;
  text-align: center;
}

.logo-marquee-wrapper {
  position: relative;
  width: 100%;
  overflow: hidden;
}

/* Gradient fade masks on left/right edges */
.logo-marquee-wrapper::before,
.logo-marquee-wrapper::after {
  content: "";
  position: absolute;
  top: 0;
  width: 80px;
  height: 100%;
  z-index: 5;
  pointer-events: none;
}

.logo-marquee-wrapper::before {
  left: 0;
  background: linear-gradient(to right, rgba(255, 255, 255, 0.9), transparent);
}

.logo-marquee-wrapper::after {
  right: 0;
  background: linear-gradient(to left, rgba(255, 255, 255, 0.9), transparent);
}

.logo-marquee-track {
  display: flex;
  gap: 24px;
  width: max-content;
  align-items: center;
  animation: infiniteScroll 30s linear infinite;
}

.client-logo {
  display: flex;
  align-items: center;
  gap: 12px;
  background: var(--white);
  border: 1px solid var(--border-color);
  padding: 10px 24px;
  border-radius: 16px;
  font-family: var(--font-body);
  font-weight: 700;
  font-size: 0.95rem;
  box-shadow: var(--shadow-sm);
  transition: all var(--transition-normal);
  cursor: pointer;
}

.client-logo i {
  font-size: 1.25rem;
  transition: transform var(--transition-fast) ease;
}

/* Interactive Brand Hover states */
.client-logo:hover {
  transform: translateY(-3px);
  box-shadow: var(--shadow-md);
}

.client-logo:hover i {
  transform: scale(1.1);
}

/* Permanent Brand Colors & Subtle Borders */
.logo-atlassian { border-color: rgba(0, 82, 204, 0.12); color: #0052CC !important; }
.logo-aws { border-color: rgba(255, 153, 0, 0.12); color: #FF9900 !important; }
.logo-stripe { border-color: rgba(99, 91, 255, 0.12); color: #635BFF !important; }
.logo-canva { border-color: rgba(0, 196, 204, 0.12); color: #00C4CC !important; }
.logo-salesforce { border-color: rgba(0, 161, 224, 0.12); color: #00A1E0 !important; }
.logo-paypal { border-color: rgba(0, 48, 135, 0.12); color: #003087 !important; }
.logo-digitalocean { border-color: rgba(0, 128, 255, 0.12); color: #0080FF !important; }

/* Interactive Hover Background enhancements */
.logo-atlassian:hover { border-color: #0052CC; background-color: rgba(0, 82, 204, 0.04); }
.logo-aws:hover { border-color: #FF9900; background-color: rgba(255, 153, 0, 0.04); }
.logo-stripe:hover { border-color: #635BFF; background-color: rgba(99, 91, 255, 0.04); }
.logo-canva:hover { border-color: #00C4CC; background-color: rgba(0, 196, 204, 0.04); }
.logo-salesforce:hover { border-color: #00A1E0; background-color: rgba(0, 161, 224, 0.04); }
.logo-paypal:hover { border-color: #003087; background-color: rgba(0, 48, 135, 0.04); }
.logo-digitalocean:hover { border-color: #0080FF; background-color: rgba(0, 128, 255, 0.04); }

/* Responsive adjustments */
@media (max-width: 767px) {
  .trusted-section {
    margin-top: -30px;
    margin-bottom: 30px;
  }
  
  .trusted-card {
    padding: 24px 20px;
    border-radius: 24px;
  }
  
  .logo-marquee-wrapper::before,
  .logo-marquee-wrapper::after {
    width: 40px;
  }
}
</style>
