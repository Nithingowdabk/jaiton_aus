<!-- ============================================================
     HERO SECTION – Premium Light Enterprise 2-Column Layout (Tekni Style)
     ============================================================ -->
<section id="hero" class="hero-section">
  
  <!-- Clean Light Enterprise Background Layers with Soft Glows & Curved Backdrop -->
  <div class="hero-bg-backdrop" aria-hidden="true">
    <div class="hero-soft-glow glow-purple"></div>
    <div class="hero-soft-glow glow-blue"></div>
    <svg class="hero-curved-shape" viewBox="0 0 1440 900" fill="none" preserveAspectRatio="none">
      <path d="M750 0C900 150 1100 200 1440 100V900H0V0H750Z" fill="rgba(239, 246, 255, 0.6)"/>
      <path d="M850 0C1050 220 1200 350 1440 300V900H650C750 600 800 200 850 0Z" fill="rgba(109, 40, 255, 0.03)"/>
    </svg>
  </div>

  <!-- Hero Container -->
  <div class="container hero-container">
    <div class="hero-grid">
      
      <!-- ============================================================
           LEFT COLUMN (52%): Headline with Stylized Underline, Subtitle & Buttons
           ============================================================ -->
      <div class="hero-left-content" data-aos="fade-right" data-aos-duration="700">
        
        <h1 class="hero-title">
          Get More Insight With Effective 
          <span class="highlight-wrapper">
            Software & AI
            <svg class="wavy-underline" viewBox="0 0 240 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3 12C50 3 100 18 150 8C180 2 210 15 237 9" stroke="url(#wavyGrad)" stroke-width="4.5" stroke-linecap="round"/>
              <defs>
                <linearGradient id="wavyGrad" x1="0" y1="0" x2="240" y2="0" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#6A1BFF"/>
                  <stop offset="1" stop-color="#3B82F6"/>
                </linearGradient>
              </defs>
            </svg>
          </span>
        </h1>

        <p class="hero-subtitle">
          High-performance enterprise software, AI models, and cloud platforms engineered for Australian businesses and global scale.
        </p>

        <!-- Checklist Items -->
        <div class="hero-checklist">
          <div class="check-item">
            <span class="check-icon"><i class="fa-solid fa-circle-check"></i></span>
            <span>100% Australian-based onshore strategy team</span>
          </div>
          <div class="check-item">
            <span class="check-icon"><i class="fa-solid fa-circle-check"></i></span>
            <span>ISO aligned security & cloud architecture</span>
          </div>
          <div class="check-item">
            <span class="check-icon"><i class="fa-solid fa-circle-check"></i></span>
            <span>Flexible engineering squads tailored to your roadmap</span>
          </div>
        </div>

        <!-- Action Buttons (Gradient Pill & Clean Glass Outline) -->
        <div class="hero-action-buttons">
          <a href="#contact" class="btn btn-hero-gradient">
            Get Started <i class="fa-solid fa-arrow-right"></i>
          </a>
          <a href="#services" class="btn btn-hero-outline">
            Learn More
          </a>
        </div>

      </div>

      <!-- ============================================================
           RIGHT COLUMN (48%): Minimalist Enterprise Tech Illustration
           ============================================================ -->
      <div class="hero-right-illustration" data-aos="fade-left" data-aos-duration="900">
        <div class="illustration-card-wrapper">
          
          <img src="assets/images/hero-minimalist-illustration.png" alt="Minimalist Enterprise Data Science & Software Engineering" class="hero-minimalist-art-img">

          <!-- Floating Metric Badges -->
          <div class="hero-float-chip chip-left" data-aos="zoom-in" data-aos-delay="200">
            <div class="chip-icon-bg"><i class="fa-solid fa-chart-line text-blue"></i></div>
            <div class="chip-text">
              <strong>99.99%</strong>
              <small>Reliability SLA</small>
            </div>
          </div>

          <div class="hero-float-chip chip-right" data-aos="zoom-in" data-aos-delay="400">
            <div class="chip-icon-bg"><i class="fa-solid fa-brain text-purple"></i></div>
            <div class="chip-text">
              <strong>Enterprise AI</strong>
              <small>Model Deployments</small>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     HERO SCOPED STYLES (Light Enterprise Theme - Tekni Style)
     ============================================================ -->
<style>
/* ── Hero Section Shell ── */
.hero-section {
  position: relative;
  min-height: calc(100vh - 88px);
  display: flex;
  align-items: center;
  background: #FFFFFF;
  padding-top: 130px;
  padding-bottom: 80px;
  box-sizing: border-box;
  overflow: hidden;
}

/* ── Light Curved Background Backdrop & Soft Glows ── */
.hero-bg-backdrop {
  position: absolute;
  inset: 0;
  pointer-events: none;
  overflow: hidden;
}

.hero-soft-glow {
  position: absolute;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  filter: blur(180px);
  opacity: 0.25;
}

.glow-purple { top: -100px; left: -100px; background: #6A1BFF; }
.glow-blue   { bottom: -100px; right: -50px; background: #3B82F6; }

.hero-curved-shape {
  position: absolute;
  right: 0;
  top: 0;
  width: 55%;
  height: 100%;
  pointer-events: none;
}

/* ── Hero Container & Grid ── */
.hero-container {
  max-width: 1440px;
  width: 100%;
  padding-left: 40px;
  padding-right: 40px;
  margin: 0 auto;
  position: relative;
  z-index: 5;
}

.hero-grid {
  display: grid;
  grid-template-columns: 52% calc(48% - 40px);
  gap: 40px;
  align-items: center;
}

/* ── Left Column Content ── */
.hero-left-content {
  text-align: left;
}

.hero-title {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(38px, 4vw, 56px);
  font-weight: 800;
  line-height: 1.15;
  color: #0F172A;
  letter-spacing: -0.02em;
  margin-bottom: 20px;
}

.highlight-wrapper {
  position: relative;
  display: inline-block;
  color: #6A1BFF;
}

.wavy-underline {
  position: absolute;
  bottom: -10px;
  left: 0;
  width: 100%;
  height: 18px;
  pointer-events: none;
}

.hero-subtitle {
  font-size: clamp(16px, 1.2vw, 19px);
  line-height: 1.65;
  color: #475569;
  max-width: 560px;
  margin-bottom: 30px;
}

/* Checklist Items */
.hero-checklist {
  display: flex;
  flex-direction: column;
  gap: 12px;
  margin-bottom: 36px;
}

.check-item {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 15px;
  font-weight: 600;
  color: #1E293B;
}

.check-icon {
  color: #0055FF;
  font-size: 1.1rem;
  display: flex;
  align-items: center;
}

/* Action Buttons */
.hero-action-buttons {
  display: flex;
  gap: 16px;
  align-items: center;
}

.btn-hero-gradient {
  height: 52px;
  padding: 0 32px;
  border-radius: 100px;
  background: linear-gradient(135deg, #6A1BFF 0%, #0055FF 100%);
  color: #FFFFFF;
  font-size: 15px;
  font-weight: 700;
  display: inline-flex;
  align-items: center;
  gap: 10px;
  border: none;
  box-shadow: 0 8px 24px rgba(0, 85, 255, 0.3);
  transition: all 250ms ease;
  text-decoration: none;
}

.btn-hero-gradient:hover {
  box-shadow: 0 12px 32px rgba(0, 85, 255, 0.5);
  transform: translateY(-2px);
  color: #FFFFFF;
}

.btn-hero-outline {
  height: 52px;
  padding: 0 32px;
  border-radius: 100px;
  background: #FFFFFF;
  border: 1.5px solid #CBD5E1;
  color: #1E293B;
  font-size: 15px;
  font-weight: 700;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transition: all 250ms ease;
  text-decoration: none;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
}

.btn-hero-outline:hover {
  border-color: #0055FF;
  color: #0055FF;
  background: rgba(0, 85, 255, 0.04);
  transform: translateY(-2px);
}

/* ── Right Column Minimalist Illustration ── */
.hero-right-illustration {
  width: 100%;
}

.illustration-card-wrapper {
  position: relative;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.hero-minimalist-art-img {
  width: 100%;
  max-width: 520px;
  height: auto;
  display: block;
  filter: drop-shadow(0 16px 36px rgba(0, 43, 128, 0.08));
}

/* Floating Metric Badges */
.hero-float-chip {
  position: absolute;
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  padding: 12px 18px;
  border-radius: 16px;
  box-shadow: 0 16px 36px rgba(0, 43, 128, 0.12);
  display: flex;
  align-items: center;
  gap: 12px;
  z-index: 10;
  animation: chipFloat 4s ease-in-out infinite alternate;
}

@keyframes chipFloat {
  0% { transform: translateY(0); }
  100% { transform: translateY(-8px); }
}

.chip-left {
  top: 10%;
  left: -20px;
  animation-delay: 0s;
}

.chip-right {
  bottom: 8%;
  right: 0;
  animation-delay: 1.8s;
}

.chip-icon-bg {
  width: 38px;
  height: 38px;
  border-radius: 12px;
  background: rgba(0, 85, 255, 0.08);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 16px;
}

.chip-text {
  display: flex;
  flex-direction: column;
}

.chip-text strong {
  font-size: 15px;
  font-weight: 800;
  color: #0F172A;
}

.chip-text small {
  font-size: 11px;
  color: #64748B;
  font-weight: 600;
}

/* Responsive */
@media (max-width: 1199px) {
  .hero-grid {
    grid-template-columns: 1fr;
    gap: 50px;
  }

  .hero-curved-shape {
    display: none;
  }

  .hero-title {
    font-size: 42px;
  }

  .chip-left { top: 5%; left: 5%; }
  .chip-right { bottom: 5%; right: 5%; }
}

@media (max-width: 767px) {
  .hero-section {
    padding-top: 110px;
    padding-bottom: 60px;
  }

  .hero-container {
    padding-left: 20px;
    padding-right: 20px;
  }

  .hero-action-buttons {
    flex-direction: column;
    width: 100%;
  }

  .btn-hero-gradient,
  .btn-hero-outline {
    width: 100%;
  }
}
</style>
