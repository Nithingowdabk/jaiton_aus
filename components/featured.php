<!-- Featured Projects Section -->
<section id="featured" class="featured-section">
  <div class="container">
    <!-- Section Header -->
    <div class="section-header" data-aos="fade-up">
      <span class="section-badge">Case Studies</span>
      <h2 class="section-title">Featured Enterprise Work</h2>
      <p class="section-desc">
        Explore how Jaiton partner teams architected custom cloud infrastructure, AI models, and real-time trackers to drive bottom-line enterprise growth.
      </p>
    </div>

    <!-- 3 Project Cards Grid -->
    <div class="featured-grid">
      
      <!-- Card 1 -->
      <div class="project-card hover-lift" data-aos="fade-up" data-aos-delay="50">
        <div class="project-image">
          <img src="assets/images/project_aura_iot.png" alt="Aura IoT Mining Telemetry Project Mockup">
          <span class="project-industry"><i class="fa-solid fa-helmet-safety"></i> Mining</span>
        </div>
        <div class="project-body">
          <div class="project-tech">
            <span class="tech-tag">React</span>
            <span class="tech-tag">Docker</span>
            <span class="tech-tag">AWS IoT Core</span>
          </div>
          <h3 class="project-title">Aura IoT: Automated Telemetry Dashboard</h3>
          <p class="project-summary">
            A real-time telemetry processing platform engineered for site machinery monitoring and incident logs tracking in harsh regional hubs.
          </p>
          <div class="project-outcome">
            <div class="outcome-label">Key Business Outcome:</div>
            <div class="outcome-value"><i class="fa-solid fa-arrow-trend-up"></i> 38% Reduction in Machine Downtime</div>
          </div>
          <a href="#" class="btn btn-outline btn-full ripple-btn">View Case Study <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="project-card hover-lift" data-aos="fade-up" data-aos-delay="100">
        <div class="project-image">
          <img src="assets/images/project_medai.png" alt="MedAI Diagnostic Imaging Platform Mockup">
          <span class="project-industry"><i class="fa-solid fa-heart-pulse"></i> Healthcare</span>
        </div>
        <div class="project-body">
          <div class="project-tech">
            <span class="tech-tag">Python</span>
            <span class="tech-tag">TensorFlow</span>
            <span class="tech-tag">Next.js</span>
          </div>
          <h3 class="project-title">MedAI: Clinic Diagnostic Processing Portal</h3>
          <p class="project-summary">
            An automated imaging engine using deep learning convolutional networks to extract, score, and flag diagnostic irregularities.
          </p>
          <div class="project-outcome">
            <div class="outcome-label">Key Business Outcome:</div>
            <div class="outcome-value"><i class="fa-solid fa-arrow-trend-up"></i> 94% Diagnosis Verification Speedup</div>
          </div>
          <a href="#" class="btn btn-outline btn-full ripple-btn">View Case Study <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="project-card hover-lift" data-aos="fade-up" data-aos-delay="150">
        <div class="project-image">
          <img src="assets/images/project_ledgerhub.png" alt="LedgerHub Transaction Tracker Mockup">
          <span class="project-industry"><i class="fa-solid fa-building-columns"></i> Finance</span>
        </div>
        <div class="project-body">
          <div class="project-tech">
            <span class="tech-tag">Node.js</span>
            <span class="tech-tag">PostgreSQL</span>
            <span class="tech-tag">Kubernetes</span>
          </div>
          <h3 class="project-title">LedgerHub: Scalable Payment Reconciliation</h3>
          <p class="project-summary">
            A high-throughput secure gateway mapping and checking digital ledger transactions across multiple corporate branches in real-time.
          </p>
          <div class="project-outcome">
            <div class="outcome-label">Key Business Outcome:</div>
            <div class="outcome-value"><i class="fa-solid fa-arrow-trend-up"></i> AUD $1.2M Saved in Operational Overhead</div>
          </div>
          <a href="#" class="btn btn-outline btn-full ripple-btn">View Case Study <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CSS specifically for Featured Work component structure -->
<style>
.featured-section {
  padding: 100px 0;
  background-color: var(--light-bg);
}

.featured-grid {
  display: grid;
  grid-template-cols: repeat(3, 1fr);
  gap: 30px;
}

.project-card {
  background-color: var(--white);
  border: 1px solid var(--border-color);
  border-radius: 20px;
  overflow: hidden;
  box-shadow: var(--shadow-sm);
  display: flex;
  flex-direction: column;
}

.project-image {
  position: relative;
  width: 100%;
  aspect-ratio: 1.6;
  background-color: var(--dark-navy);
  overflow: hidden;
}

.project-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-slow);
}

.project-card:hover .project-image img {
  transform: scale(1.04);
}

.project-industry {
  position: absolute;
  top: 16px;
  left: 16px;
  background-color: rgba(8, 22, 61, 0.7);
  backdrop-filter: blur(8px);
  color: var(--white);
  padding: 6px 12px;
  border-radius: 6px;
  font-size: 0.75rem;
  font-weight: 600;
  border: 1px solid rgba(255, 255, 255, 0.08);
}

.project-body {
  padding: 28px;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
}

.project-tech {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  margin-bottom: 16px;
}

.tech-tag {
  background-color: rgba(106, 27, 255, 0.05);
  color: var(--primary-purple);
  padding: 4px 10px;
  border-radius: 4px;
  font-size: 0.7rem;
  font-weight: 700;
  text-transform: uppercase;
  border: 1px solid rgba(106, 27, 255, 0.08);
}

.project-title {
  font-size: 1.15rem;
  font-weight: 700;
  color: var(--dark-navy);
  margin-bottom: 12px;
  line-height: 1.35;
}

.project-summary {
  font-size: 0.8125rem;
  line-height: 1.6;
  color: var(--secondary-text);
  margin-bottom: 24px;
  flex-grow: 1;
}

.project-outcome {
  background-color: var(--light-bg);
  border-radius: 10px;
  padding: 14px 16px;
  margin-bottom: 24px;
  border: 1px solid var(--border-color);
}

.outcome-label {
  font-size: 0.7rem;
  font-weight: 700;
  text-transform: uppercase;
  color: var(--secondary-text);
  margin-bottom: 4px;
  letter-spacing: 0.02em;
}

.outcome-value {
  font-size: 0.8125rem;
  font-weight: 700;
  color: var(--success-color);
  display: flex;
  align-items: center;
  gap: 6px;
}

.btn-full {
  width: 100%;
}

.project-card:hover .btn-outline {
  border-color: var(--primary-purple);
  color: var(--primary-purple);
  background-color: rgba(106, 27, 255, 0.02);
}

@media (max-width: 991px) {
  .featured-grid {
    grid-template-cols: 1fr;
  }
}
</style>
