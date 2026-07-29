<!-- Interactive Delivery Process Section -->
<section id="process" class="process-section">
  <div class="container">
    
    <!-- Section Header -->
    <div class="section-header" data-aos="fade-up">
      <span class="section-badge">Delivery Process</span>
      <h2 class="section-title">Engineered Delivery Lifecycle</h2>
      <p class="section-desc">
        A systematic, transparent, and rigorous engineering workflow built to guarantee high-performance, compliant, and zero-defect systems.
      </p>
    </div>

    <!-- Timeline Widget Container -->
    <div class="timeline-wrapper">
      
      <!-- Horizontal Connected Progress Line -->
      <div class="timeline-connector-bar">
        <div class="timeline-progress-fill" id="timeline-progress-fill"></div>
      </div>

      <div class="timeline-grid">
        
        <!-- Step 1: Discovery -->
        <div class="timeline-step active" data-step="1" data-aos="fade-up" data-aos-delay="50">
          <div class="step-marker">
            <div class="step-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
            <span class="step-counter">01</span>
          </div>
          <h3 class="step-title">Discovery</h3>
          <p class="step-desc">Translating high-level needs into operational architecture requirements and compliance grids.</p>
          <div class="step-details-card glass-panel">
            <strong>Key Deliverables:</strong>
            <ul>
              <li>Stakeholder Interviews</li>
              <li>Feasibility Audits</li>
              <li>Scope Lock Documents</li>
            </ul>
          </div>
        </div>

        <!-- Step 2: Architecture -->
        <div class="timeline-step" data-step="2" data-aos="fade-up" data-aos-delay="100">
          <div class="step-marker">
            <div class="step-icon"><i class="fa-solid fa-compass"></i></div>
            <span class="step-counter">02</span>
          </div>
          <h3 class="step-title">Architecture</h3>
          <p class="step-desc">Designing scalable data schemas, microservices maps, and security layers.</p>
          <div class="step-details-card glass-panel">
            <strong>Key Deliverables:</strong>
            <ul>
              <li>UML Data Schemas</li>
              <li>AWS/Azure Maps</li>
              <li>ISO Security Models</li>
            </ul>
          </div>
        </div>

        <!-- Step 3: Development -->
        <div class="timeline-step" data-step="3" data-aos="fade-up" data-aos-delay="150">
          <div class="step-marker">
            <div class="step-icon"><i class="fa-solid fa-code"></i></div>
            <span class="step-counter">03</span>
          </div>
          <h3 class="step-title">Development</h3>
          <p class="step-desc">Executing clean modular programming, unit tests, and CI/CD pipelines.</p>
          <div class="step-details-card glass-panel">
            <strong>Key Deliverables:</strong>
            <ul>
              <li>Modular Repositories</li>
              <li>API Swagger Specs</li>
              <li>Continuous Test Scopes</li>
            </ul>
          </div>
        </div>

        <!-- Step 4: Deployment -->
        <div class="timeline-step" data-step="4" data-aos="fade-up" data-aos-delay="200">
          <div class="step-marker">
            <div class="step-icon"><i class="fa-solid fa-rocket"></i></div>
            <span class="step-counter">04</span>
          </div>
          <h3 class="step-title">Deployment</h3>
          <p class="step-desc">Publishing builds to production servers with zero data loss or downtime.</p>
          <div class="step-details-card glass-panel">
            <strong>Key Deliverables:</strong>
            <ul>
              <li>CI/CD Docker Builds</li>
              <li>Automated DNS Flips</li>
              <li>Security Signoff</li>
            </ul>
          </div>
        </div>

        <!-- Step 5: Innovation -->
        <div class="timeline-step" data-step="5" data-aos="fade-up" data-aos-delay="250">
          <div class="step-marker">
            <div class="step-icon"><i class="fa-solid fa-arrows-spin"></i></div>
            <span class="step-counter">05</span>
          </div>
          <h3 class="step-title">Continuous Innovation</h3>
          <p class="step-desc">Active performance audits, telemetry monitoring, and model optimization loops.</p>
          <div class="step-details-card glass-panel">
            <strong>Key Deliverables:</strong>
            <ul>
              <li>24/7 SLA Telemetry</li>
              <li>Optimization Reviews</li>
              <li>Feature Scopes</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- CSS specifically for Delivery Process -->
<style>
.process-section {
  padding: 120px 0;
  background-color: var(--white);
  position: relative;
  overflow: hidden;
}

.timeline-wrapper {
  position: relative;
  width: 100%;
  margin-top: 64px;
}

/* Connector line */
.timeline-connector-bar {
  position: absolute;
  top: 36px;
  left: 10%;
  right: 10%;
  height: 4px;
  background-color: var(--border-color);
  z-index: 1;
}

.timeline-progress-fill {
  width: 0%;
  height: 100%;
  background: linear-gradient(to right, var(--primary-purple), var(--electric-blue));
  border-radius: 100px;
  transition: width 1.5s cubic-bezier(0.16, 1, 0.3, 1);
}

.timeline-progress-fill.animated {
  width: 100%;
}

.timeline-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 24px;
  position: relative;
  z-index: 2;
}

/* Step marker */
.timeline-step {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  cursor: pointer;
}

.step-marker {
  position: relative;
  margin-bottom: 28px;
}

.step-icon {
  width: 72px;
  height: 72px;
  border-radius: 50%;
  background-color: var(--white);
  border: 2px solid var(--border-color);
  color: var(--secondary-text);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.4rem;
  box-shadow: var(--shadow-sm);
  transition: all var(--transition-normal);
}

.step-counter {
  position: absolute;
  bottom: -4px;
  right: -4px;
  background-color: var(--dark-navy);
  color: var(--white);
  font-size: 0.6875rem;
  font-weight: 800;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 2px solid var(--white);
  box-shadow: var(--shadow-sm);
  transition: all var(--transition-normal);
}

/* Step Typography */
.step-title {
  font-size: 1.2rem;
  font-weight: 800;
  color: var(--dark-navy);
  margin-bottom: 12px;
  transition: color var(--transition-fast);
}

.step-desc {
  font-size: 0.875rem;
  line-height: 1.5;
  color: var(--muted-text);
  max-width: 200px;
  transition: color var(--transition-fast);
}

/* Detail Card shown on hover/active */
.step-details-card {
  margin-top: 24px;
  padding: 16px;
  width: 220px;
  opacity: 0;
  visibility: hidden;
  transform: translateY(10px);
  transition: all var(--transition-normal);
  text-align: left;
}

.step-details-card strong {
  display: block;
  font-size: 0.75rem;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  color: var(--primary-purple);
  margin-bottom: 8px;
}

.step-details-card ul {
  display: flex;
  flex-direction: column;
  gap: 6px;
}

.step-details-card ul li {
  font-size: 0.75rem;
  color: var(--secondary-text);
  position: relative;
  padding-left: 12px;
}

.step-details-card ul li::before {
  content: "•";
  position: absolute;
  left: 0;
  color: var(--primary-purple);
}

/* Hover & Active triggers */
.timeline-step:hover .step-icon,
.timeline-step.active .step-icon {
  background-color: var(--primary-purple);
  border-color: var(--primary-purple);
  color: var(--white);
  box-shadow: 0 8px 24px rgba(106, 2, 197, 0.25);
  transform: scale(1.05);
}

.timeline-step:hover .step-counter,
.timeline-step.active .step-counter {
  background-color: var(--white);
  color: var(--primary-purple);
  border-color: var(--primary-purple);
}

.timeline-step:hover .step-title,
.timeline-step.active .step-title {
  color: var(--primary-purple);
}

.timeline-step:hover .step-desc,
.timeline-step.active .step-desc {
  color: var(--primary-text);
}

.timeline-step:hover .step-details-card,
.timeline-step.active .step-details-card {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}

/* Responsive adjustments */
@media (max-width: 991px) {
  .timeline-connector-bar {
    display: none;
  }
  
  .timeline-grid {
    grid-template-columns: 1fr;
    gap: 36px;
  }

  .timeline-step {
    flex-direction: row;
    align-items: flex-start;
    text-align: left;
  }

  .step-marker {
    margin-bottom: 0;
    margin-right: 24px;
    flex-shrink: 0;
  }

  .step-details-card {
    margin-top: 12px;
    width: 100%;
    max-width: 320px;
    opacity: 1;
    visibility: visible;
    transform: none;
    display: block;
  }

  .step-desc {
    max-width: 100%;
  }
}

@media (max-width: 767px) {
  .process-section {
    padding: 80px 0;
  }
}
</style>

<script>
// Simple Interactive Step Active State Controller
document.addEventListener("DOMContentLoaded", () => {
  const steps = document.querySelectorAll(".timeline-step");
  steps.forEach(step => {
    step.addEventListener("mouseenter", () => {
      steps.forEach(s => s.classList.remove("active"));
      step.classList.add("active");
    });
  });
});
</script>
