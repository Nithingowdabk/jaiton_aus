<!-- ============================================================
     ENTERPRISE PARTNERSHIP SECTION – Dark Cinematic Immersive Experience
     Completely different from the white About section above
     ============================================================ -->
<section id="mission-vision" class="dark-partnership-section">
  
  <!-- Dark Background Effects -->
  <div class="dp-bg-effects" aria-hidden="true">
    <div class="dp-gradient-mesh"></div>
    <div class="dp-grid-overlay"></div>
  </div>

  <div class="dp-container">
    
    <!-- ============================================================
         CENTERED HEADER BLOCK (Not split like About section)
         ============================================================ -->
    <div class="dp-header-block">
      <span class="dp-eyebrow">
        <span class="dp-eyebrow-line"></span>
        OUR DELIVERY MODEL
        <span class="dp-eyebrow-line"></span>
      </span>
      <h2 class="dp-main-title">
        Built Around Long-Term<br>Technology Partnerships
      </h2>
      <p class="dp-subtitle">
        From strategic discovery to continuous cloud optimisation — one accountable<br>
        engineering partner across the entire technology lifecycle.
      </p>
    </div>

    <!-- ============================================================
         SINGLE CINEMATIC HERO IMAGE (Not a collage)
         ============================================================ -->
    <div class="dp-cinematic-hero">
      <div class="dp-hero-frame">
        <img src="assets/images/aus-sydney-office.png" 
             alt="Australian Enterprise Technology Leadership" 
             class="dp-hero-img">
        <div class="dp-hero-overlay"></div>
        
        <!-- Inline floating caption — NOT a glass metric card -->
        <div class="dp-hero-caption">
          <span class="dp-caption-icon"><i class="fa-solid fa-play"></i></span>
          <div class="dp-caption-text">
            <strong>Sydney, Australia</strong>
            <small>Enterprise Engineering Headquarters</small>
          </div>
        </div>
      </div>
    </div>

    <!-- ============================================================
         5 HORIZONTAL PROCESS STEPS (Not vertical cards)
         ============================================================ -->
    <div class="dp-process-row">
      
      <div class="dp-step" data-step="01">
        <div class="dp-step-number">01</div>
        <div class="dp-step-content">
          <h3 class="dp-step-title">Discovery</h3>
          <p class="dp-step-desc">Strategic workshops, goal alignment & enterprise roadmap design.</p>
        </div>
        <div class="dp-step-bar"><div class="dp-bar-fill"></div></div>
      </div>

      <div class="dp-step" data-step="02">
        <div class="dp-step-number">02</div>
        <div class="dp-step-content">
          <h3 class="dp-step-title">Architecture</h3>
          <p class="dp-step-desc">Cloud-native blueprints, security frameworks & API design.</p>
        </div>
        <div class="dp-step-bar"><div class="dp-bar-fill"></div></div>
      </div>

      <div class="dp-step" data-step="03">
        <div class="dp-step-number">03</div>
        <div class="dp-step-content">
          <h3 class="dp-step-title">Engineering</h3>
          <p class="dp-step-desc">Agile development squads, AI models & enterprise software.</p>
        </div>
        <div class="dp-step-bar"><div class="dp-bar-fill"></div></div>
      </div>

      <div class="dp-step" data-step="04">
        <div class="dp-step-number">04</div>
        <div class="dp-step-content">
          <h3 class="dp-step-title">Deployment</h3>
          <p class="dp-step-desc">CI/CD pipelines, cloud migration & zero-downtime launch.</p>
        </div>
        <div class="dp-step-bar"><div class="dp-bar-fill"></div></div>
      </div>

      <div class="dp-step" data-step="05">
        <div class="dp-step-number">05</div>
        <div class="dp-step-content">
          <h3 class="dp-step-title">Optimisation</h3>
          <p class="dp-step-desc">24×7 monitoring, AI evolution & continuous platform growth.</p>
        </div>
        <div class="dp-step-bar"><div class="dp-bar-fill"></div></div>
      </div>

    </div>

    <!-- ============================================================
         BOTTOM METRICS ROW (Completely different from About's glass panels)
         ============================================================ -->
    <div class="dp-bottom-metrics">
      <div class="dp-metric-block">
        <span class="dp-metric-number">120+</span>
        <span class="dp-metric-label">Enterprise Projects Delivered</span>
      </div>
      <div class="dp-metric-sep"></div>
      <div class="dp-metric-block">
        <span class="dp-metric-number">98%</span>
        <span class="dp-metric-label">Client Retention Rate</span>
      </div>
      <div class="dp-metric-sep"></div>
      <div class="dp-metric-block">
        <span class="dp-metric-number">24/7</span>
        <span class="dp-metric-label">Engineering Operations</span>
      </div>
      <div class="dp-metric-sep"></div>
      <div class="dp-metric-block">
        <span class="dp-metric-number">5+</span>
        <span class="dp-metric-label">Global Delivery Centres</span>
      </div>
    </div>

  </div>
</section>

<!-- ============================================================
     DARK PARTNERSHIP SECTION STYLES
     ============================================================ -->
<style>
/* ================================================================
   SECTION SHELL: Dark navy background — instantly different
   from the white About section above
   ================================================================ */
.dark-partnership-section {
  position: relative;
  padding: 120px 0 100px 0;
  background: #0B1120;
  overflow: hidden;
}

/* ── Dark Background Effects ── */
.dp-bg-effects {
  position: absolute;
  inset: 0;
  pointer-events: none;
  z-index: 1;
}

.dp-gradient-mesh {
  position: absolute;
  inset: 0;
  background: 
    radial-gradient(ellipse 600px 400px at 20% 30%, rgba(106, 27, 255, 0.08) 0%, transparent 70%),
    radial-gradient(ellipse 500px 350px at 80% 70%, rgba(56, 189, 248, 0.06) 0%, transparent 70%);
}

.dp-grid-overlay {
  position: absolute;
  inset: 0;
  background-image: 
    linear-gradient(rgba(255, 255, 255, 0.025) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255, 255, 255, 0.025) 1px, transparent 1px);
  background-size: 60px 60px;
}

/* ── Container ── */
.dp-container {
  max-width: 1200px;
  width: 100%;
  margin: 0 auto;
  padding: 0 40px;
  position: relative;
  z-index: 5;
}

/* ================================================================
   CENTERED HEADER — Not split like About section
   ================================================================ */
.dp-header-block {
  text-align: center;
  margin-bottom: 60px;
}

.dp-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  font-size: 12px;
  font-weight: 800;
  letter-spacing: 2.5px;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.5);
  margin-bottom: 20px;
}

.dp-eyebrow-line {
  display: inline-block;
  width: 32px;
  height: 1px;
  background: rgba(255, 255, 255, 0.2);
}

.dp-main-title {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(36px, 4vw, 54px);
  font-weight: 800;
  line-height: 1.12;
  color: #FFFFFF;
  letter-spacing: -0.03em;
  margin: 0 0 20px 0;
}

.dp-subtitle {
  font-size: 17px;
  line-height: 1.7;
  color: rgba(255, 255, 255, 0.55);
  max-width: 620px;
  margin: 0 auto;
  font-weight: 500;
}

/* ================================================================
   SINGLE CINEMATIC HERO IMAGE — Not a collage
   ================================================================ */
.dp-cinematic-hero {
  margin-bottom: 60px;
}

.dp-hero-frame {
  position: relative;
  width: 100%;
  height: 420px;
  border-radius: 24px;
  overflow: hidden;
  border: 1px solid rgba(255, 255, 255, 0.08);
  box-shadow: 
    0 30px 80px rgba(0, 0, 0, 0.4),
    0 0 0 1px rgba(255, 255, 255, 0.05) inset;
}

.dp-hero-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 8s cubic-bezier(0.16, 1, 0.3, 1);
}

.dp-hero-frame:hover .dp-hero-img {
  transform: scale(1.04);
}

.dp-hero-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(
    180deg,
    rgba(11, 17, 32, 0) 0%,
    rgba(11, 17, 32, 0.15) 50%,
    rgba(11, 17, 32, 0.7) 100%
  );
  pointer-events: none;
}

.dp-hero-caption {
  position: absolute;
  bottom: 28px;
  left: 28px;
  display: flex;
  align-items: center;
  gap: 14px;
  z-index: 5;
}

.dp-caption-icon {
  width: 42px;
  height: 42px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.12);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  color: #FFFFFF;
  font-size: 14px;
  transition: background 300ms ease;
}

.dp-hero-frame:hover .dp-caption-icon {
  background: rgba(106, 27, 255, 0.5);
}

.dp-caption-text {
  display: flex;
  flex-direction: column;
}

.dp-caption-text strong {
  font-family: 'Poppins', sans-serif;
  font-size: 15px;
  font-weight: 700;
  color: #FFFFFF;
}

.dp-caption-text small {
  font-size: 12px;
  color: rgba(255, 255, 255, 0.55);
  font-weight: 500;
}

/* ================================================================
   HORIZONTAL PROCESS ROW — Not vertical cards
   ================================================================ */
.dp-process-row {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 16px;
  margin-bottom: 60px;
}

.dp-step {
  position: relative;
  padding: 28px 22px 20px 22px;
  border-radius: 20px;
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.06);
  transition: 
    background 400ms cubic-bezier(0.2, 0.8, 0.2, 1),
    border-color 400ms ease,
    transform 400ms cubic-bezier(0.2, 0.8, 0.2, 1);
  cursor: default;
}

.dp-step:hover {
  background: rgba(106, 27, 255, 0.08);
  border-color: rgba(106, 27, 255, 0.25);
  transform: translateY(-6px);
}


.dp-step-number {
  font-family: 'Poppins', sans-serif;
  font-size: 38px;
  font-weight: 900;
  line-height: 1;
  color: rgba(255, 255, 255, 0.06);
  margin-bottom: 16px;
  transition: color 400ms ease;
}

.dp-step:hover .dp-step-number {
  color: rgba(106, 27, 255, 0.3);
}

.dp-step-title {
  font-family: 'Poppins', sans-serif;
  font-size: 17px;
  font-weight: 800;
  color: #FFFFFF;
  margin: 0 0 8px 0;
}

.dp-step-desc {
  font-size: 13px;
  line-height: 1.55;
  color: rgba(255, 255, 255, 0.45);
  margin: 0 0 16px 0;
  font-weight: 500;
}

/* Bottom progress bar inside each step */
.dp-step-bar {
  width: 100%;
  height: 3px;
  background: rgba(255, 255, 255, 0.06);
  border-radius: 3px;
  overflow: hidden;
}

.dp-bar-fill {
  width: 0%;
  height: 100%;
  background: linear-gradient(90deg, #6A1BFF, #38BDF8);
  border-radius: 3px;
  transition: width 600ms cubic-bezier(0.2, 0.8, 0.2, 1);
}


.dp-step:hover .dp-bar-fill {
  width: 70%;
}

/* ================================================================
   BOTTOM METRICS ROW — Completely different from About section
   No glass panels, no floating cards. Simple dark inline strip.
   ================================================================ */
.dp-bottom-metrics {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0;
  padding: 32px 0 0 0;
  border-top: 1px solid rgba(255, 255, 255, 0.06);
}

.dp-metric-block {
  flex: 1;
  text-align: center;
  padding: 0 24px;
}

.dp-metric-number {
  display: block;
  font-family: 'Poppins', sans-serif;
  font-size: 32px;
  font-weight: 900;
  color: #FFFFFF;
  line-height: 1.1;
  letter-spacing: -0.02em;
}

.dp-metric-label {
  display: block;
  font-size: 13px;
  font-weight: 600;
  color: rgba(255, 255, 255, 0.35);
  margin-top: 4px;
}

.dp-metric-sep {
  width: 1px;
  height: 44px;
  background: rgba(255, 255, 255, 0.08);
  flex-shrink: 0;
}

/* ================================================================
   RESPONSIVE
   ================================================================ */
@media (max-width: 1100px) {
  .dp-process-row {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media (max-width: 767px) {
  .dark-partnership-section {
    padding: 80px 0 60px 0;
  }

  .dp-container {
    padding: 0 20px;
  }

  .dp-main-title {
    font-size: 30px;
  }

  .dp-subtitle br {
    display: none;
  }

  .dp-hero-frame {
    height: 260px;
    border-radius: 16px;
  }

  .dp-process-row {
    grid-template-columns: 1fr;
    gap: 12px;
  }

  .dp-step {
    padding: 20px;
  }

  .dp-step-number {
    font-size: 28px;
    margin-bottom: 10px;
  }

  .dp-bottom-metrics {
    flex-wrap: wrap;
    gap: 24px;
  }

  .dp-metric-sep {
    display: none;
  }

  .dp-metric-block {
    flex: 0 0 calc(50% - 12px);
    padding: 0;
  }
}
</style>