<!-- ============================================================
     HERO SECTION – Centered Hero
     ============================================================ -->
<section id="hero" class="hero-section">
  
  <!-- Background Layers -->
  <div class="hero-bg-layers">
    <div class="hero-video-container">
      <video autoplay loop muted playsinline class="hero-bg-video">
        <source src="assets/video/hero.mp4" type="video/mp4">
      </video>
    </div>
    <div class="hero-bg-grid"></div>
  </div>

  <!-- Hero Container -->
  <div class="hero-container">
    <div class="hero-content" data-aos="fade-up" data-aos-duration="600">
      <h1 class="hero-heading">
        Engineering <span class="gradient-text">Intelligent</span> Digital Platforms for <span class="gradient-text">Australia</span>'s <span class="gradient-text">Future Enterprises</span>
      </h1>
      
      <!-- CTA Action Buttons -->
      <div class="hero-ctas">
        <a href="#contact" class="btn btn-primary btn-magnetic">Book Strategy Session <i class="fa-solid fa-calendar-check"></i></a>
        <a href="#why-jaiton" class="btn btn-secondary btn-magnetic">Explore Solutions <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     HERO SCOPED STYLES
     ============================================================ -->
<style>
/* ── Section Shell ── */
.hero-section {
  position: relative;
  min-height: calc(100vh - 88px);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: var(--dark-navy);
  padding-top: 120px;
  padding-bottom: 60px;
  box-sizing: border-box;
}

/* ── Background Layers ── */
.hero-bg-layers {
  position: absolute;
  inset: 0;
  z-index: 1;
  overflow: hidden;
  pointer-events: none;
}

.hero-video-container {
  position: absolute;
  inset: 0;
  opacity: 1;
}

.hero-bg-video {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hero-bg-grid {
  position: absolute;
  inset: 0;
  background-size: 40px 40px;
  background-image:
    linear-gradient(to right, rgba(255,255,255,0.015) 1px, transparent 1px),
    linear-gradient(to bottom, rgba(255,255,255,0.015) 1px, transparent 1px);
}

/* ── Hero Container ── */
.hero-container {
  max-width: 1000px;
  width: 100%;
  padding-left: 32px;
  padding-right: 32px;
  margin: 0 auto;
  position: relative;
  z-index: 5;
  box-sizing: border-box;
}

/* ── Centered Hero Content ── */
.hero-content {
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 6px 16px;
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.1);
  border-radius: 100px;
  font-size: 0.8125rem;
  font-weight: 700;
  color: var(--white);
  margin-bottom: 24px;
}

.hero-badge i { color: #10B981; }

.hero-heading {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(36px, 4vw, 58px);
  font-weight: 700;
  line-height: 1.18;
  color: var(--white);
  letter-spacing: -0.02em;
  margin-bottom: 20px;
}

.gradient-text {
  background: linear-gradient(135deg, #a275ff 0%, #3B82F6 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  display: inline;
}

.hero-description {
  font-size: clamp(16px, 1.3vw, 19px);
  line-height: 1.6;
  color: #cbd5e1;
  max-width: 720px;
  margin: 0 auto 32px auto;
}

/* CTA Buttons */
.hero-ctas {
  display: flex;
  justify-content: center;
  gap: 16px;
  flex-wrap: wrap;
}

.hero-ctas .btn {
  height: 48px;
  padding: 0 28px;
  border-radius: 12px;
  font-size: 15px;
  font-weight: 700;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  box-sizing: border-box;
}

.hero-ctas .btn-primary {
  background: linear-gradient(135deg, var(--primary-purple), var(--royal-purple));
  color: var(--white);
  border: none;
  box-shadow: 0 4px 16px rgba(109, 40, 255, 0.3);
}

.hero-ctas .btn-primary:hover {
  box-shadow: 0 8px 24px rgba(109, 40, 255, 0.5);
  transform: translateY(-2px);
}

.hero-ctas .btn-secondary {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.15);
  color: var(--white);
}

.hero-ctas .btn-secondary:hover {
  background: rgba(255,255,255,0.1);
  border-color: var(--white);
  transform: translateY(-2px);
}

@media (max-width: 767px) {
  .hero-section {
    padding-top: 100px;
    padding-bottom: 40px;
  }

  .hero-ctas {
    flex-direction: column;
    width: 100%;
  }

  .hero-ctas .btn {
    width: 100%;
  }
}
</style>
