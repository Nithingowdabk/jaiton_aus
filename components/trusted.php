<!-- ============================================================
     TRUSTED BY SECTION – Premium Glass Enterprise Panel
     ============================================================ -->
<section class="trusted-section" aria-label="Our Trusted Enterprise Clients">
  
  <!-- Subtle background glowing accents (soft blur behind floating glass panel) -->
  <div class="trusted-bg-glows" aria-hidden="true">
    <div class="trusted-radial-glow"></div>
  </div>

  <div class="container">
    
    <!-- Centered Glass Panel -->
    <div class="enterprise-glass-panel" data-aos="fade-up" data-aos-duration="600">
      
      <!-- Animated Gradient Border Overlay -->
      <div class="glass-gradient-border"></div>

      <!-- Section Heading with glowing purple dot -->
      <div class="trusted-header">
        <span class="glowing-pulse-dot"></span>
        <h3 class="trusted-heading">TRUSTED BY GLOBAL ENTERPRISES</h3>
      </div>

      <!-- Individual Glass Logo Cards Grid (8 logos in 1 row on Desktop) -->
      <div class="enterprise-logo-grid">
        
        <div class="enterprise-logo-card logo-microsoft" data-aos="fade-up" data-aos-delay="50">
          <i class="fa-brands fa-microsoft"></i>
          <span>Microsoft</span>
        </div>

        <div class="enterprise-logo-card logo-aws" data-aos="fade-up" data-aos-delay="100">
          <i class="fa-brands fa-aws"></i>
          <span>AWS</span>
        </div>

        <div class="enterprise-logo-card logo-stripe" data-aos="fade-up" data-aos-delay="150">
          <i class="fa-brands fa-stripe"></i>
          <span>Stripe</span>
        </div>

        <div class="enterprise-logo-card logo-google" data-aos="fade-up" data-aos-delay="200">
          <i class="fa-brands fa-google"></i>
          <span>Google Cloud</span>
        </div>

        <div class="enterprise-logo-card logo-atlassian" data-aos="fade-up" data-aos-delay="250">
          <i class="fa-brands fa-atlassian"></i>
          <span>Atlassian</span>
        </div>

        <div class="enterprise-logo-card logo-salesforce" data-aos="fade-up" data-aos-delay="300">
          <i class="fa-brands fa-salesforce"></i>
          <span>Salesforce</span>
        </div>

        <div class="enterprise-logo-card logo-hubspot" data-aos="fade-up" data-aos-delay="350">
          <i class="fa-brands fa-hubspot"></i>
          <span>HubSpot</span>
        </div>

        <div class="enterprise-logo-card logo-paypal" data-aos="fade-up" data-aos-delay="400">
          <i class="fa-brands fa-paypal"></i>
          <span>PayPal</span>
        </div>

      </div>

    </div>

  </div>
</section>

<!-- Scoped Styles for Premium Glass Enterprise Panel -->
<style>
.trusted-section {
  position: relative;
  padding-top: 48px;
  padding-bottom: 72px;
}

/* Background soft radial glow */
.trusted-bg-glows {
  position: absolute;
  inset: 0;
  pointer-events: none;
  overflow: hidden;
  z-index: 1;
}

.trusted-radial-glow {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 700px;
  height: 300px;
  background: radial-gradient(circle, rgba(109, 40, 255, 0.12) 0%, rgba(59, 130, 246, 0.05) 50%, transparent 75%);
  filter: blur(80px);
}

/* Centered Glass Panel (Max-width 1320px) */
.enterprise-glass-panel {
  position: relative;
  max-width: 1320px;
  width: 100%;
  margin: 0 auto;
  padding: 32px;
  border-radius: 24px;
  background: rgba(255, 255, 255, 0.06);
  backdrop-filter: blur(24px);
  -webkit-backdrop-filter: blur(24px);
  border: 1px solid rgba(255, 255, 255, 0.12);
  box-shadow: 0 20px 60px rgba(8, 22, 61, 0.18);
  overflow: hidden;
  z-index: 5;
}

/* Animated Gradient Border Overlay (15-20% opacity slow movement) */
.glass-gradient-border {
  position: absolute;
  inset: 0;
  border-radius: 24px;
  padding: 1px;
  background: linear-gradient(135deg, rgba(109, 40, 255, 0.2), rgba(59, 130, 246, 0.2), rgba(109, 40, 255, 0.1));
  mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
  -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  pointer-events: none;
  animation: borderGlowSlow 10s ease-in-out infinite alternate;
}

@keyframes borderGlowSlow {
  0% { opacity: 0.15; filter: hue-rotate(0deg); }
  100% { opacity: 0.25; filter: hue-rotate(45deg); }
}

/* Section Header */
.trusted-header {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  margin-bottom: 28px;
}

.glowing-pulse-dot {
  width: 7px;
  height: 7px;
  background: #6D28FF;
  border-radius: 50%;
  box-shadow: 0 0 10px #6D28FF;
  animation: pulsePurpleDot 2s infinite;
}

@keyframes pulsePurpleDot {
  0% { transform: scale(0.9); box-shadow: 0 0 0 0 rgba(109, 40, 255, 0.6); }
  70% { transform: scale(1.15); box-shadow: 0 0 0 8px rgba(109, 40, 255, 0); }
  100% { transform: scale(0.9); box-shadow: 0 0 0 0 rgba(109, 40, 255, 0); }
}

.trusted-heading {
  font-family: 'Poppins', sans-serif;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: #94a3b8;
  margin: 0;
}

/* Logo Grid: 8 logos in 1 row on Desktop */
.enterprise-logo-grid {
  display: grid;
  grid-template-columns: repeat(8, 1fr);
  gap: 20px;
  width: 100%;
}

/* Individual Glass Logo Cards */
.enterprise-logo-card {
  height: 72px;
  border-radius: 18px;
  background: rgba(255, 255, 255, 0.85);
  border: 1px solid rgba(255, 255, 255, 0.4);
  padding: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  cursor: pointer;
  transition: all 250ms ease;
  box-sizing: border-box;
}

.enterprise-logo-card i {
  font-size: 1.25rem;
}

.enterprise-logo-card span {
  font-family: var(--font-body);
  font-weight: 700;
  font-size: 0.875rem;
  color: #0F172A;
  white-space: nowrap;
}

/* Authentic Brand Colors (Default Visible) */
.logo-microsoft i   { color: #F25022; }
.logo-aws i         { color: #FF9900; }
.logo-stripe i      { color: #635BFF; }
.logo-google i      { color: #4285F4; }
.logo-atlassian i   { color: #0052CC; }
.logo-salesforce i  { color: #00A1E0; }
.logo-hubspot i     { color: #FF7A59; }
.logo-paypal i      { color: #003087; }

/* Hover Behavior: Scale 1.04, Lift, Soft Purple Glow, Blue-Purple Border */
.enterprise-logo-card:hover {
  transform: translateY(-4px) scale(1.04);
  box-shadow: 0 12px 28px rgba(109, 40, 255, 0.18);
  border-color: rgba(109, 40, 255, 0.4);
}

/* Responsive Grid Breakpoints */
@media (max-width: 1199px) {
  .enterprise-logo-grid {
    grid-template-columns: repeat(4, 1fr);
  }
}

@media (max-width: 767px) {
  .enterprise-glass-panel {
    padding: 24px 16px;
  }
  
  .enterprise-logo-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
  }
  
  .enterprise-logo-card {
    height: 64px;
    padding: 12px;
  }
  
  .enterprise-logo-card span {
    font-size: 0.8125rem;
  }
}
</style>
