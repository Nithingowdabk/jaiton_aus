<!-- Why Jaiton Section -->
<section id="why-jaiton" class="why-jaiton-section">
  <div class="container">
    <div class="why-grid">
      
      <!-- Left Column: Generated Illustration Graphic -->
      <div class="why-visual" data-aos="fade-right">
        <div class="why-image-wrapper glass-panel">
          <img src="assets/images/why_jaiton_tech.png" alt="Enterprise Technology Integration Illustration">
        </div>
        
        <!-- Animated Count Floating Badge -->
        <div class="why-floating-badge" data-aos="zoom-in" data-aos-delay="200">
          <div class="badge-number">10+</div>
          <div class="badge-info">
            <span class="badge-tag">Years of</span>
            <span class="badge-title">Australian Quality</span>
          </div>
        </div>
      </div>

      <!-- Right Column: Animated Checklist -->
      <div class="why-content" data-aos="fade-left">
        <span class="section-badge">Why Partner With Us</span>
        <h2 class="section-title text-left">Engineered for Australian Business Success</h2>
        <p class="section-desc text-left mb-32">
          Jaiton Technologies combines regional domain knowledge with a world-class engineering team to build scalable, compliant, and highly performant custom systems.
        </p>

        <!-- Checklist -->
        <div class="checklist">
          <!-- Item 1 -->
          <div class="check-item hover-lift">
            <div class="check-icon"><i class="fa-solid fa-circle-check"></i></div>
            <div class="check-info">
              <h4>Australian Quality Standards</h4>
              <p>Rigorous development standards, secure code practices, and strict alignment with local compliance guidelines.</p>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="check-item hover-lift">
            <div class="check-icon"><i class="fa-solid fa-circle-check"></i></div>
            <div class="check-info">
              <h4>Transparent Communication</h4>
              <p>Direct access to lead engineers, regular status briefings, and transparent sprint dashboards.</p>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="check-item hover-lift">
            <div class="check-icon"><i class="fa-solid fa-circle-check"></i></div>
            <div class="check-info">
              <h4>Agile Methodology</h4>
              <p>Rapid delivery schedules, feedback loops, and iterative adjustments to match evolving requirements.</p>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="check-item hover-lift">
            <div class="check-icon"><i class="fa-solid fa-circle-check"></i></div>
            <div class="check-info">
              <h4>Enterprise Security</h4>
              <p>End-to-end encryption, multi-factor authentication systems, and ISO/IEC 27001 standard practices.</p>
            </div>
          </div>

          <!-- Item 5 -->
          <div class="check-item hover-lift">
            <div class="check-icon"><i class="fa-solid fa-circle-check"></i></div>
            <div class="check-info">
              <h4>Scalable Architecture</h4>
              <p>Future-proof setups engineered to support high concurrent visitor traffic and heavy operational loads.</p>
            </div>
          </div>

          <!-- Item 6 -->
          <div class="check-item hover-lift">
            <div class="check-icon"><i class="fa-solid fa-circle-check"></i></div>
            <div class="check-info">
              <h4>Dedicated Development Teams</h4>
              <p>Engineers hand-picked for your stack, operating as an aligned extension of your internal IT department.</p>
            </div>
          </div>

          <!-- Item 7 -->
          <div class="check-item hover-lift">
            <div class="check-icon"><i class="fa-solid fa-circle-check"></i></div>
            <div class="check-info">
              <h4>Long-term Support</h4>
              <p>Ongoing security patches, updates, optimizations, and cloud scaling support after project launch.</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- CSS specifically for Why Jaiton component structure -->
<style>
.why-jaiton-section {
  padding: 100px 0;
  background-color: var(--white);
}

.why-grid {
  display: grid;
  grid-template-cols: 0.9fr 1.1fr;
  gap: 80px;
  align-items: center;
}

.why-visual {
  position: relative;
  display: flex;
  justify-content: center;
}

.why-image-wrapper {
  width: 100%;
  max-width: 420px;
  aspect-ratio: 1;
  overflow: hidden;
  padding: 16px;
}

.why-image-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 16px;
  background-color: var(--dark-navy);
}

.why-floating-badge {
  position: absolute;
  bottom: -20px;
  right: 10px;
  background-color: var(--dark-navy);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 20px;
  padding: 16px 24px;
  box-shadow: var(--shadow-xl);
  display: flex;
  align-items: center;
  gap: 16px;
  color: var(--white);
  z-index: 10;
}

.badge-number {
  font-family: var(--font-heading);
  font-size: 1.5rem;
  font-weight: 700;
  background-color: var(--primary-purple);
  width: 44px;
  height: 44px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.badge-info {
  display: flex;
  flex-direction: column;
}

.badge-tag {
  font-size: 0.65rem;
  font-weight: 700;
  text-transform: uppercase;
  color: var(--primary-blue);
  letter-spacing: 0.05em;
}

.badge-title {
  font-size: 0.8125rem;
  font-weight: 700;
}

.checklist {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.check-item {
  display: flex;
  gap: 16px;
  padding: 12px;
  border-radius: 12px;
  transition: all var(--transition-fast);
}

.check-item:hover {
  background-color: var(--light-bg);
}

.check-icon {
  font-size: 1.25rem;
  color: var(--primary-purple);
  margin-top: 2px;
}

.check-info h4 {
  font-size: 0.95rem;
  font-weight: 700;
  color: var(--dark-navy);
  margin-bottom: 4px;
  transition: color var(--transition-fast);
}

.check-item:hover h4 {
  color: var(--primary-purple);
}

.check-info p {
  font-size: 0.8125rem;
  line-height: 1.5;
  color: var(--secondary-text);
}

@media (max-width: 991px) {
  .why-grid {
    grid-template-cols: 1fr;
    gap: 60px;
  }
}
</style>
