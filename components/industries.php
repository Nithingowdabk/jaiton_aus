<!-- Industries Section -->
<section id="industries" class="industries-section">
  <div class="container">
    <!-- Section Header -->
    <div class="section-header" data-aos="fade-up">
      <span class="section-badge blue">Industries We Serve</span>
      <h2 class="section-title">Tailored Industry Expertise</h2>
      <p class="section-desc">
        Providing domain-specific software solutions that solve exact industry problems, build operational efficiency, and satisfy local compliance requirements.
      </p>
    </div>

    <!-- Industries Grid -->
    <div class="industries-grid">
      <!-- 1. Healthcare -->
      <div class="industry-card hover-lift" data-aos="fade-up" data-aos-delay="50">
        <div class="industry-card-bg rose"></div>
        <div class="industry-icon"><i class="fa-solid fa-heart-pulse"></i></div>
        <h3 class="industry-title">Healthcare</h3>
        <p class="industry-desc">Telehealth portals, integrated medical records, and compliant health tracking systems.</p>
      </div>

      <!-- 2. Finance -->
      <div class="industry-card hover-lift" data-aos="fade-up" data-aos-delay="100">
        <div class="industry-card-bg emerald"></div>
        <div class="industry-icon"><i class="fa-solid fa-building-columns"></i></div>
        <h3 class="industry-title">Finance</h3>
        <p class="industry-desc">Robust secure ledger infrastructures, transaction gateways, and automated report portals.</p>
      </div>

      <!-- 3. Education -->
      <div class="industry-card hover-lift" data-aos="fade-up" data-aos-delay="150">
        <div class="industry-card-bg blue"></div>
        <div class="industry-icon"><i class="fa-solid fa-graduation-cap"></i></div>
        <h3 class="industry-title">Education</h3>
        <p class="industry-desc">Virtual learning management tools, student databases, and educational app platforms.</p>
      </div>

      <!-- 4. Mining -->
      <div class="industry-card hover-lift" data-aos="fade-up" data-aos-delay="200">
        <div class="industry-card-bg amber"></div>
        <div class="industry-icon"><i class="fa-solid fa-helmet-safety"></i></div>
        <h3 class="industry-title">Mining</h3>
        <p class="industry-desc">Industrial remote telemetry integration, safety operations systems, and haulage data logs.</p>
      </div>

      <!-- 5. Manufacturing -->
      <div class="industry-card hover-lift" data-aos="fade-up" data-aos-delay="50">
        <div class="industry-card-bg cyan"></div>
        <div class="industry-icon"><i class="fa-solid fa-industry"></i></div>
        <h3 class="industry-title">Manufacturing</h3>
        <p class="industry-desc">Factory line automation software, production scheduling, and inventory planning systems.</p>
      </div>

      <!-- 6. Construction -->
      <div class="industry-card hover-lift" data-aos="fade-up" data-aos-delay="100">
        <div class="industry-card-bg yellow"></div>
        <div class="industry-icon"><i class="fa-solid fa-trowel-bricks"></i></div>
        <h3 class="industry-title">Construction</h3>
        <p class="industry-desc">Site worker scheduling, site material trackers, and sub-contractor portal systems.</p>
      </div>

      <!-- 7. Retail -->
      <div class="industry-card hover-lift" data-aos="fade-up" data-aos-delay="150">
        <div class="industry-card-bg fuchsia"></div>
        <div class="industry-icon"><i class="fa-solid fa-bag-shopping"></i></div>
        <h3 class="industry-title">Retail & E-commerce</h3>
        <p class="industry-desc">High-volume checkout flows, omni-channel customer hubs, and digital discount systems.</p>
      </div>

      <!-- 8. Agriculture -->
      <div class="industry-card hover-lift" data-aos="fade-up" data-aos-delay="200">
        <div class="industry-card-bg green"></div>
        <div class="industry-icon"><i class="fa-solid fa-seedling"></i></div>
        <h3 class="industry-title">Agriculture</h3>
        <p class="industry-desc">Soil telemetry visualizations, water-use analytics, and supply-chain logistics apps.</p>
      </div>

      <!-- 9. Government -->
      <div class="industry-card hover-lift" data-aos="fade-up" data-aos-delay="50">
        <div class="industry-card-bg purple"></div>
        <div class="industry-icon"><i class="fa-solid fa-shield-halved"></i></div>
        <h3 class="industry-title">Government</h3>
        <p class="industry-desc">Highly-secure public request forms, compliance records, and public-facing databases.</p>
      </div>

      <!-- 10. Logistics -->
      <div class="industry-card hover-lift" data-aos="fade-up" data-aos-delay="100">
        <div class="industry-card-bg sky"></div>
        <div class="industry-icon"><i class="fa-solid fa-truck-fast"></i></div>
        <h3 class="industry-title">Logistics</h3>
        <p class="industry-desc">Route optimization engines, vehicle telemetry monitors, and depot intake logging.</p>
      </div>
    </div>
  </div>
</section>

<!-- CSS specifically for Industries component structure -->
<style>
.industries-section {
  padding: 100px 0;
  background-color: var(--white);
  position: relative;
  overflow: hidden;
}

.industries-grid {
  display: grid;
  grid-template-cols: repeat(5, 1fr);
  gap: 20px;
}

.industry-card {
  position: relative;
  background-color: var(--white);
  border: 1px solid var(--border-color);
  border-radius: 16px;
  padding: 24px;
  overflow: hidden;
  box-shadow: var(--shadow-sm);
  transition: all var(--transition-normal);
  display: flex;
  flex-direction: column;
  height: 240px;
}

/* Background gradients that appear on hover */
.industry-card-bg {
  position: absolute;
  right: -40px;
  bottom: -40px;
  width: 120px;
  height: 120px;
  border-radius: 50%;
  filter: blur(25px);
  opacity: 0;
  transition: opacity var(--transition-slow);
  pointer-events: none;
  z-index: 1;
}

.industry-card:hover .industry-card-bg {
  opacity: 1;
}

.industry-card-bg.rose { background-image: radial-gradient(circle, rgba(244, 63, 94, 0.15) 0%, transparent 70%); }
.industry-card-bg.emerald { background-image: radial-gradient(circle, rgba(16, 185, 129, 0.15) 0%, transparent 70%); }
.industry-card-bg.blue { background-image: radial-gradient(circle, rgba(59, 130, 246, 0.15) 0%, transparent 70%); }
.industry-card-bg.amber { background-image: radial-gradient(circle, rgba(245, 158, 11, 0.15) 0%, transparent 70%); }
.industry-card-bg.cyan { background-image: radial-gradient(circle, rgba(6, 182, 212, 0.15) 0%, transparent 70%); }
.industry-card-bg.yellow { background-image: radial-gradient(circle, rgba(234, 179, 8, 0.15) 0%, transparent 70%); }
.industry-card-bg.fuchsia { background-image: radial-gradient(circle, rgba(217, 70, 239, 0.15) 0%, transparent 70%); }
.industry-card-bg.green { background-image: radial-gradient(circle, rgba(34, 197, 94, 0.15) 0%, transparent 70%); }
.industry-card-bg.purple { background-image: radial-gradient(circle, rgba(139, 92, 246, 0.15) 0%, transparent 70%); }
.industry-card-bg.sky { background-image: radial-gradient(circle, rgba(14, 165, 233, 0.15) 0%, transparent 70%); }

.industry-icon {
  position: relative;
  z-index: 2;
  width: 44px;
  height: 44px;
  border-radius: 10px;
  background-color: var(--light-bg);
  border: 1px solid var(--border-color);
  color: var(--dark-navy);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.1rem;
  margin-bottom: 20px;
  box-shadow: var(--shadow-sm);
  transition: all var(--transition-normal);
}

.industry-card:hover .industry-icon {
  background-color: var(--primary-purple);
  color: var(--white);
  border-color: var(--primary-purple);
}

.industry-title {
  position: relative;
  z-index: 2;
  font-size: 1rem;
  font-weight: 700;
  margin-bottom: 8px;
  color: var(--dark-navy);
}

.industry-desc {
  position: relative;
  z-index: 2;
  font-size: 0.8125rem;
  line-height: 1.5;
  color: var(--secondary-text);
}

@media (max-width: 1024px) {
  .industries-grid {
    grid-template-cols: repeat(3, 1fr);
  }
}

@media (max-width: 767px) {
  .industries-grid {
    grid-template-cols: repeat(2, 1fr);
  }
}
</style>
