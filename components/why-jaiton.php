<!-- Why Jaiton Section -->
<section id="why-jaiton" class="why-jaiton-section">
  <div class="container">
    
    <!-- Large Split Header Layout -->
    <div class="why-split-header">
      <div class="why-header-left">
        <span class="section-badge">Why Jaiton</span>
        <h2 class="section-title text-left">
          Redefining Tech Partnership <br>
          <span class="gradient-text">For Complex Enterprises</span>
        </h2>
      </div>
      <div class="why-header-right">
        <p class="why-jaiton-desc">
          Jaiton Technologies combines regional domain knowledge with a world-class engineering team to build scalable, compliant, and highly performant custom systems. We partner with leaders to accelerate modernization and secure long-term enterprise growth.
        </p>
      </div>
    </div>

    <!-- 6 Premium Feature Cards Grid -->
    <div class="why-grid">
      
      <!-- Card 1: AI Engineering -->
      <div class="why-card glass-card hover-lift">
        <div class="why-card-icon-container bg-purple">
          <i class="fa-solid fa-brain"></i>
        </div>
        <h3>AI Engineering</h3>
        <p>Deploy secure machine learning models, custom NLP agents, and predictive decision frameworks aligned with local corporate compliance.</p>
        <a href="#contact" class="why-card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <!-- Card 2: Cloud Modernisation -->
      <div class="why-card glass-card hover-lift">
        <div class="why-card-icon-container bg-blue">
          <i class="fa-solid fa-cloud"></i>
        </div>
        <h3>Cloud Modernisation</h3>
        <p>Scale workloads efficiently using AWS/Azure cloud grids, Docker and Kubernetes clustering, and optimized serverless microservices.</p>
        <a href="#contact" class="why-card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <!-- Card 3: Enterprise Software -->
      <div class="why-card glass-card hover-lift">
        <div class="why-card-icon-container bg-cyan">
          <i class="fa-solid fa-laptop-code"></i>
        </div>
        <h3>Enterprise Software</h3>
        <p>Architect robust enterprise systems, high-throughput portals, and custom secure software solutions tailored for regional business hubs.</p>
        <a href="#contact" class="why-card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <!-- Card 4: Data Intelligence -->
      <div class="why-card glass-card hover-lift">
        <div class="why-card-icon-container bg-purple">
          <i class="fa-solid fa-database"></i>
        </div>
        <h3>Data Intelligence</h3>
        <p>Centralize corporate data streams, configure automated pipelines, and build interactive intelligence reports for leadership dashboards.</p>
        <a href="#contact" class="why-card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <!-- Card 5: Cybersecurity -->
      <div class="why-card glass-card hover-lift">
        <div class="why-card-icon-container bg-blue">
          <i class="fa-solid fa-shield-halved"></i>
        </div>
        <h3>Cybersecurity</h3>
        <p>Configure complete cloud protection, rigorous security audits, data encryption, threat detection, and local compliance certification.</p>
        <a href="#contact" class="why-card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <!-- Card 6: IoT Engineering -->
      <div class="why-card glass-card hover-lift">
        <div class="why-card-icon-container bg-cyan">
          <i class="fa-solid fa-microchip"></i>
        </div>
        <h3>IoT Engineering</h3>
        <p>Harness real-time equipment telemetry, custom sensor boards, and industrial hardware tracking architectures in harsh environments.</p>
        <a href="#contact" class="why-card-link">Learn More <i class="fa-solid fa-arrow-right"></i></a>
      </div>

    </div>
  </div>
</section>

<!-- CSS specifically for Why Jaiton Section -->
<style>
.why-jaiton-section {
  padding: 120px 0;
  background-color: var(--white);
  position: relative;
  overflow: hidden;
}

.why-split-header {
  display: grid;
  grid-template-cols: 1.1fr 0.9fr;
  gap: 60px;
  align-items: flex-end;
  margin-bottom: 64px;
}

.why-header-left {
  text-align: left;
}

.why-jaiton-desc {
  font-size: 1.125rem;
  line-height: 1.65;
  color: var(--secondary-text);
}

.why-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 32px;
}

/* Glass Card styling */
.why-card {
  background: rgba(248, 250, 252, 0.6);
  border: 1px solid var(--border-color);
  border-radius: var(--radius-lg);
  padding: 40px;
  box-shadow: var(--shadow-sm);
  transition: all var(--transition-normal);
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  text-align: left;
  position: relative;
}

.why-card::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: var(--radius-lg);
  border: 2px solid transparent;
  background: linear-gradient(135deg, var(--primary-purple), var(--electric-blue)) border-box;
  -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
  -webkit-mask-composite: destination-out;
  mask-composite: exclude;
  opacity: 0;
  transition: opacity var(--transition-normal);
}

.why-card:hover::before {
  opacity: 1;
}

.why-card:hover {
  transform: translateY(-6px);
  background-color: var(--white);
  box-shadow: var(--shadow-xl);
  border-color: transparent;
}

/* Icon Containers with Gradients */
.why-card-icon-container {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 56px;
  height: 56px;
  border-radius: 14px;
  font-size: 1.5rem;
  margin-bottom: 28px;
  transition: all var(--transition-normal);
}

.why-card-icon-container.bg-purple { background-color: rgba(109, 40, 255, 0.08); color: var(--primary-purple); }
.why-card-icon-container.bg-blue { background-color: rgba(59, 130, 246, 0.08); color: var(--electric-blue); }
.why-card-icon-container.bg-cyan { background-color: rgba(6, 182, 212, 0.08); color: var(--cyan); }

.why-card:hover .why-card-icon-container {
  transform: scale(1.1) rotate(5deg);
}

.why-card:hover .why-card-icon-container.bg-purple { background-color: var(--primary-purple); color: var(--white); }
.why-card:hover .why-card-icon-container.bg-blue { background-color: var(--electric-blue); color: var(--white); }
.why-card:hover .why-card-icon-container.bg-cyan { background-color: var(--cyan); color: var(--white); }

.why-card h3 {
  font-size: 1.35rem;
  font-weight: 800;
  color: var(--dark-navy);
  margin-bottom: 16px;
}

.why-card p {
  font-size: 0.95rem;
  line-height: 1.6;
  color: var(--secondary-text);
  margin-bottom: 24px;
  flex-grow: 1;
}

.why-card-link {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 0.875rem;
  font-weight: 700;
  color: var(--primary-purple);
  transition: all var(--transition-fast);
}

.why-card-link i {
  font-size: 0.75rem;
  transition: transform var(--transition-fast);
}

.why-card:hover .why-card-link {
  color: var(--royal-purple);
}

.why-card:hover .why-card-link i {
  transform: translateX(4px);
}

/* Responsive adjustments */
@media (max-width: 991px) {
  .why-split-header {
    grid-template-cols: 1fr;
    gap: 24px;
    margin-bottom: 48px;
  }
  
  .why-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
  }
}

@media (max-width: 767px) {
  .why-jaiton-section {
    padding: 80px 0;
  }

  .why-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }

  .why-card {
    padding: 32px;
  }
}
</style>
