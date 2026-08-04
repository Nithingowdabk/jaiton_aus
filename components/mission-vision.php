<!-- ============================================================
     OUR DELIVERY MODEL SECTION
     Clean, Seamless Enterprise Partnership Roadmap (Light Theme)
     ============================================================ -->
<section id="mission-vision" class="delivery-model-section">
  <div class="container container-1300">
    
    <!-- Section Header -->
    <div class="delivery-header text-center" data-aos="fade-up">
      <span class="sub-label">OUR DELIVERY MODEL</span>
      <h2 class="heading_text">
        Built Around Long-Term <span class="highlight-badge">Technology Partnerships</span>
      </h2>
      <p class="heading_description max-w-750 mx-auto">
        From strategic discovery to continuous cloud optimization — one accountable engineering partner across the entire technology lifecycle.
      </p>
    </div>

    <!-- 5-Step Strategic Roadmap Grid -->
    <div class="delivery-roadmap-grid" data-aos="fade-up" data-aos-delay="100">
      
      <!-- Step 01 -->
      <div class="delivery-step-card">
        <div class="step-card-header">
          <span class="step-badge-num">01</span>
          <div class="step-icon-box icon-purple"><i class="fa-solid fa-compass"></i></div>
        </div>
        <h3 class="step-card-title">Discovery</h3>
        <p class="step-card-desc">Strategic workshops, business goal alignment & enterprise roadmap design.</p>
        <div class="step-accent-line"></div>
      </div>

      <!-- Step 02 -->
      <div class="delivery-step-card">
        <div class="step-card-header">
          <span class="step-badge-num">02</span>
          <div class="step-icon-box icon-cyan"><i class="fa-solid fa-sitemap"></i></div>
        </div>
        <h3 class="step-card-title">Architecture</h3>
        <p class="step-card-desc">Cloud-native blueprints, security governance & robust API design.</p>
        <div class="step-accent-line"></div>
      </div>

      <!-- Step 03 -->
      <div class="delivery-step-card">
        <div class="step-card-header">
          <span class="step-badge-num">03</span>
          <div class="step-icon-box icon-blue"><i class="fa-solid fa-code"></i></div>
        </div>
        <h3 class="step-card-title">Engineering</h3>
        <p class="step-card-desc">Agile development squads building custom AI models & web applications.</p>
        <div class="step-accent-line"></div>
      </div>

      <!-- Step 04 -->
      <div class="delivery-step-card">
        <div class="step-card-header">
          <span class="step-badge-num">04</span>
          <div class="step-icon-box icon-emerald"><i class="fa-solid fa-rocket"></i></div>
        </div>
        <h3 class="step-card-title">Deployment</h3>
        <p class="step-card-desc">Automated CI/CD pipelines, cloud migration & zero-downtime launch.</p>
        <div class="step-accent-line"></div>
      </div>

      <!-- Step 05 -->
      <div class="delivery-step-card">
        <div class="step-card-header">
          <span class="step-badge-num">05</span>
          <div class="step-icon-box icon-amber"><i class="fa-solid fa-chart-line"></i></div>
        </div>
        <h3 class="step-card-title">Optimization</h3>
        <p class="step-card-desc">24×7 monitoring, SLA support & continuous platform evolution.</p>
        <div class="step-accent-line"></div>
      </div>

    </div>

  </div>
</section>

<!-- ============================================================
     DELIVERY MODEL SECTION SCOPED STYLES
     ============================================================ -->
<style>
.delivery-model-section {
  padding: 100px 0;
  background-color: #FAFBFF;
  border-top: 1px solid #F1F5F9;
  border-bottom: 1px solid #F1F5F9;
  position: relative;
  overflow: hidden;
}

.container-1300 {
  max-width: 1300px;
  margin: 0 auto;
  padding: 0 32px;
}

.max-w-750 { max-width: 750px; }

.delivery-roadmap-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 20px;
  margin-top: 50px;
}

.delivery-step-card {
  background: #FFFFFF;
  padding: 30px 24px;
  border-radius: 20px;
  border: 1px solid #E2E8F0;
  box-shadow: 0 4px 15px rgba(15, 23, 42, 0.03);
  display: flex;
  flex-direction: column;
  height: 100%;
  position: relative;
  overflow: hidden;
  transition: transform 300ms ease, border-color 300ms ease, box-shadow 300ms ease;
}

.delivery-step-card:hover {
  transform: translateY(-6px);
  border-color: #6A1BFF;
  box-shadow: 0 14px 30px rgba(106, 27, 255, 0.08);
}

.delivery-step-card:hover .step-accent-line {
  background: linear-gradient(90deg, #6A1BFF 0%, #38BDF8 100%);
}

.step-card-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 20px;
}

.step-badge-num {
  font-family: 'Poppins', sans-serif;
  font-size: 24px;
  font-weight: 800;
  color: #CBD5E1;
  line-height: 1;
}

.step-icon-box {
  width: 44px;
  height: 44px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
}

.icon-purple { background: rgba(106, 27, 255, 0.1); color: #6A1BFF; }
.icon-cyan { background: rgba(56, 189, 248, 0.12); color: #0284C7; }
.icon-blue { background: rgba(99, 102, 241, 0.1); color: #6366F1; }
.icon-emerald { background: rgba(16, 185, 129, 0.1); color: #10B981; }
.icon-amber { background: rgba(245, 158, 11, 0.1); color: #F59E0B; }

.step-card-title {
  font-family: 'Poppins', sans-serif;
  font-size: 18px;
  font-weight: 700;
  color: #0B1120;
  margin-bottom: 10px;
}

.step-card-desc {
  font-size: 13px;
  line-height: 1.6;
  color: #64748B;
  margin: 0;
  flex-grow: 1;
}

.step-accent-line {
  height: 3px;
  width: 100%;
  background: #E2E8F0;
  border-radius: 100px;
  margin-top: 20px;
  transition: background 300ms ease;
}

/* Responsive Rules */
@media (max-width: 1200px) {
  .delivery-roadmap-grid {
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
  }
}

@media (max-width: 768px) {
  .delivery-roadmap-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }
}
</style>
