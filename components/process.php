<!-- Delivery Process Timeline -->
<section class="process-section">
  <div class="container">
    <!-- Section Header -->
    <div class="section-header" data-aos="fade-up">
      <span class="section-badge">Our Process</span>
      <h2 class="section-title">Our Delivery Methodology</h2>
      <p class="section-desc">
        A systematic, transparent, and rigorous engineering workflow built to guarantee high-performance, compliant, and zero-defect systems.
      </p>
    </div>

    <!-- Timeline Widget Container -->
    <div class="timeline-container">
      <!-- Animated Progress Line -->
      <div class="timeline-progress-line">
        <div class="timeline-progress-line-fill" id="timeline-progress-fill"></div>
      </div>

      <div class="timeline-grid">
        <!-- Step 1 -->
        <div class="timeline-step" data-aos="fade-up" data-aos-delay="50">
          <div class="step-bubble">
            <div class="step-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
            <span class="step-number">01</span>
          </div>
          <h3 class="step-title">Discovery</h3>
          <p class="step-desc">Understanding your corporate scope, system integrations, and business requirements.</p>
        </div>

        <!-- Step 2 -->
        <div class="timeline-step" data-aos="fade-up" data-aos-delay="100">
          <div class="step-bubble">
            <div class="step-icon"><i class="fa-solid fa-compass"></i></div>
            <span class="step-number">02</span>
          </div>
          <h3 class="step-title">Planning</h3>
          <p class="step-desc">Structuring the engineering roadmap, architecture design, and timeline milestones.</p>
        </div>

        <!-- Step 3 -->
        <div class="timeline-step" data-aos="fade-up" data-aos-delay="150">
          <div class="step-bubble">
            <div class="step-icon"><i class="fa-solid fa-palette"></i></div>
            <span class="step-number">03</span>
          </div>
          <h3 class="step-title">Design</h3>
          <p class="step-desc">Wireframing, interactive UI layouts, and establishing design tokens.</p>
        </div>

        <!-- Step 4 -->
        <div class="timeline-step" data-aos="fade-up" data-aos-delay="200">
          <div class="step-bubble">
            <div class="step-icon"><i class="fa-solid fa-laptop-code"></i></div>
            <span class="step-number">04</span>
          </div>
          <h3 class="step-title">Development</h3>
          <p class="step-desc">Clean modular coding in PHP/Next.js/NestJS adhering to Australian standards.</p>
        </div>

        <!-- Step 5 -->
        <div class="timeline-step" data-aos="fade-up" data-aos-delay="250">
          <div class="step-bubble">
            <div class="step-icon"><i class="fa-solid fa-circle-check"></i></div>
            <span class="step-number">05</span>
          </div>
          <h3 class="step-title">Testing</h3>
          <p class="step-desc">Thorough performance audits, automation scripts, and regression checks.</p>
        </div>

        <!-- Step 6 -->
        <div class="timeline-step" data-aos="fade-up" data-aos-delay="300">
          <div class="step-bubble">
            <div class="step-icon"><i class="fa-solid fa-rocket"></i></div>
            <span class="step-number">06</span>
          </div>
          <h3 class="step-title">Deployment</h3>
          <p class="step-desc">CI/CD server builds, cloud launch sequence, and compliance signoff.</p>
        </div>

        <!-- Step 7 -->
        <div class="timeline-step" data-aos="fade-up" data-aos-delay="355">
          <div class="step-bubble">
            <div class="step-icon"><i class="fa-solid fa-handshake-angle"></i></div>
            <span class="step-number">07</span>
          </div>
          <h3 class="step-title">Support</h3>
          <p class="step-desc">24/7 monitoring, security updates, and performance optimizations.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CSS specifically for Process component structure -->
<style>
.process-section {
  padding: 100px 0;
  background-color: var(--light-bg);
  position: relative;
  overflow: hidden;
}

.timeline-container {
  position: relative;
  margin-top: 40px;
}

.timeline-grid {
  display: grid;
  grid-template-cols: repeat(7, 1fr);
  gap: 16px;
  position: relative;
  z-index: 10;
}

.timeline-step {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}

.step-bubble {
  position: relative;
  margin-bottom: 24px;
}

.step-icon {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background-color: var(--white);
  border: 2px solid var(--border-color);
  color: var(--dark-navy);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.15rem;
  box-shadow: var(--shadow-sm);
  transition: all var(--transition-normal);
  z-index: 5;
  position: relative;
}

.timeline-step:hover .step-icon {
  border-color: var(--primary-purple);
  color: var(--primary-purple);
  transform: scale(1.05);
}

.step-number {
  position: absolute;
  top: -6px;
  right: -6px;
  background-color: var(--primary-purple);
  color: var(--white);
  font-size: 0.65rem;
  font-weight: 700;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 2px 4px rgba(106, 27, 255, 0.2);
  z-index: 6;
}

.step-title {
  font-size: 0.95rem;
  font-weight: 700;
  margin-bottom: 8px;
  color: var(--dark-navy);
}

.step-desc {
  font-size: 0.75rem;
  color: var(--secondary-text);
  line-height: 1.5;
  max-width: 140px;
}

@media (max-width: 991px) {
  .timeline-grid {
    grid-template-cols: 1fr;
    gap: 32px;
  }
  
  .timeline-step {
    flex-direction: row;
    text-align: left;
    gap: 20px;
  }
  
  .step-bubble {
    margin-bottom: 0;
  }
  
  .step-desc {
    max-width: 100%;
  }
}
</style>
