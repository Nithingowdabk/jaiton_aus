<!-- Hero Section -->
<section id="hero" class="hero-section">
  <!-- Background Video -->
  <div class="hero-video-container">
    <video autoplay loop muted playsinline class="hero-bg-video">
      <source src="assets/video/hero.mp4" type="video/mp4">
    </video>
    <div class="hero-video-overlay"></div>
  </div>

  <!-- Background Glowing Gradients and Animated Grid Mesh -->
  <div class="hero-glow purple"></div>
  <div class="hero-glow blue"></div>
  <div class="hero-grid-mesh"></div>

  <div class="container hero-container">
    <!-- Left Column: Copy, CTAs & Stats -->
    <div class="hero-content">
      <span class="hero-badge">
        <i class="fa-solid fa-circle-check"></i> Australian Enterprise Technology Partner
      </span>
      <h1 class="hero-headline">
        Engineering Intelligent <br>Digital Platforms <br>
        <span class="gradient-text">for Australia's Future Enterprises</span>
      </h1>
      <p class="hero-support">
        Helping Australian organisations modernise operations through AI, Cloud Engineering, Enterprise Software, Data Platforms, Cybersecurity and Intelligent Automation.
      </p>
      
      <div class="hero-buttons">
        <a href="#contact" class="btn btn-primary ripple-btn">Book Strategy Session <i class="fa-solid fa-calendar-check"></i></a>
        <a href="#why-jaiton" class="btn btn-secondary">Explore Solutions <i class="fa-solid fa-arrow-right"></i></a>
        <a href="#" class="btn-watch"><i class="fa-solid fa-play"></i> Watch Capabilities</a>
      </div>

      <!-- Trust Indicators / Statistics -->
      <div class="hero-stats">
        <div class="stat-item">
          <div class="stat-val-container">
            <span class="stat-number" data-target="120">0</span><span class="stat-plus">+</span>
          </div>
          <span class="stat-label">Projects Delivered</span>
        </div>
        <div class="stat-item">
          <div class="stat-val-container">
            <span class="stat-number" data-target="98">0</span><span class="stat-plus">%</span>
          </div>
          <span class="stat-label">Client Satisfaction</span>
        </div>
        <div class="stat-item">
          <div class="stat-val-container">
            <span class="stat-number">24/7</span>
          </div>
          <span class="stat-label">Support SLA</span>
        </div>
        <div class="stat-item">
          <div class="stat-val-container">
            <span class="stat-number" data-target="10">0</span><span class="stat-plus">+</span>
          </div>
          <span class="stat-label">Industries Served</span>
        </div>
      </div>
    </div>

    <!-- Right Column: Interactive 3D AI Network & Glass Technology Cards -->
    <div class="hero-visual">
      <div class="visual-network">
        <!-- SVG Animated AI Neural Network Graph -->
        <svg class="ai-network-svg" viewBox="0 0 500 500" aria-hidden="true">
          <defs>
            <radialGradient id="node-glow" cx="50%" cy="50%" r="50%">
              <stop offset="0%" stop-color="#6D28FF" stop-opacity="0.3"/>
              <stop offset="100%" stop-color="#6D28FF" stop-opacity="0"/>
            </radialGradient>
          </defs>
          <!-- Neural connections (glowing paths) -->
          <g class="network-lines">
            <line x1="80" y1="120" x2="220" y2="80" />
            <line x1="220" y1="80" x2="380" y2="140" />
            <line x1="380" y1="140" x2="320" y2="340" />
            <line x1="320" y1="340" x2="160" y2="380" />
            <line x1="160" y1="380" x2="80" y2="120" />
            <line x1="220" y1="80" x2="260" y2="220" />
            <line x1="80" y1="120" x2="260" y2="220" />
            <line x1="380" y1="140" x2="260" y2="220" />
            <line x1="320" y1="340" x2="260" y2="220" />
            <line x1="160" y1="380" x2="260" y2="220" />
          </g>
          <!-- Neural nodes (particles) -->
          <g class="network-nodes">
            <circle cx="80" cy="120" r="5" class="node-pulse" />
            <circle cx="220" cy="80" r="7" />
            <circle cx="380" cy="140" r="6" />
            <circle cx="320" cy="340" r="8" class="node-pulse" />
            <circle cx="160" cy="380" r="5" />
            <circle cx="260" cy="220" r="9" />
          </g>
        </svg>
      </div>

      <!-- Glass Floating Technology Cards (Parallax Active) -->
      <div class="floating-tech-card tech-ai parallax-item" data-speed="1.5">
        <div class="tech-card-icon bg-purple"><i class="fa-solid fa-brain"></i></div>
        <span>Artificial Intelligence</span>
      </div>
      <div class="floating-tech-card tech-cloud parallax-item" data-speed="-1.0">
        <div class="tech-card-icon bg-blue"><i class="fa-solid fa-cloud"></i></div>
        <span>Cloud Engineering</span>
      </div>
      <div class="floating-tech-card tech-cyber parallax-item" data-speed="2.0">
        <div class="tech-card-icon bg-cyan"><i class="fa-solid fa-shield-halved"></i></div>
        <span>Cybersecurity</span>
      </div>
      <div class="floating-tech-card tech-data parallax-item" data-speed="-1.5">
        <div class="tech-card-icon bg-purple"><i class="fa-solid fa-database"></i></div>
        <span>Data Platforms</span>
      </div>
    </div>
  </div>
</section>

<!-- CSS specifically for Hero component structure -->
<style>
.hero-section {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  background-color: var(--dark-navy);
  overflow: hidden;
  padding: 120px 0 60px 0;
  box-sizing: border-box;
}

/* Background Video Elements */
.hero-video-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  overflow: hidden;
}

.hero-bg-video {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hero-video-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, rgba(8, 19, 39, 0.75) 0%, rgba(8, 19, 39, 0.9) 100%);
  z-index: 2;
}

/* Background Gradients & Grid Mesh */
.hero-glow {
  position: absolute;
  width: 600px;
  height: 600px;
  border-radius: 50%;
  filter: blur(140px);
  opacity: 0.25;
  pointer-events: none;
  z-index: 3;
}

.hero-glow.purple {
  top: -10%;
  right: 10%;
  background-color: var(--primary-purple);
}

.hero-glow.blue {
  bottom: -10%;
  left: 10%;
  background-color: var(--electric-blue);
}

.hero-grid-mesh {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-size: 50px 50px;
  background-image: 
    linear-gradient(to right, rgba(109, 40, 255, 0.05) 1px, transparent 1px),
    linear-gradient(to bottom, rgba(109, 40, 255, 0.05) 1px, transparent 1px);
  z-index: 3;
  opacity: 0.8;
}

.hero-container {
  display: grid;
  grid-template-cols: 1.15fr 0.85fr;
  gap: 60px;
  align-items: center;
  position: relative;
  z-index: 4;
  width: 100%;
}

.hero-content {
  width: 100%;
  text-align: left;
}

/* Badge */
.hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 8px 18px;
  background-color: rgba(255, 255, 255, 0.06);
  border: 1px solid rgba(255, 255, 255, 0.1);
  box-shadow: var(--shadow-sm);
  border-radius: 100px;
  font-size: 0.8125rem;
  font-weight: 700;
  color: var(--white);
  margin-bottom: 28px;
}

.hero-badge i {
  color: #a275ff;
}

/* Title & Support Text */
.hero-headline {
  font-size: clamp(40px, 4.8vw, 76px); /* Fluid headline typography */
  font-weight: 800;
  line-height: 1.1;
  margin-bottom: 24px;
  letter-spacing: -0.03em;
  color: var(--white);
}

.gradient-text {
  background: linear-gradient(135deg, #a275ff 0%, #38bdf8 50%, var(--electric-blue) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  display: inline-block;
}

.hero-support {
  font-size: clamp(16px, 1.3vw, 20px);
  line-height: 1.65;
  color: var(--muted-text);
  margin-bottom: 40px;
  max-width: 680px;
}

/* Buttons and watch link */
.hero-buttons {
  display: flex;
  align-items: center;
  gap: 20px;
  margin-bottom: 64px;
}

.hero-buttons .btn-primary {
  background: linear-gradient(135deg, var(--primary-purple) 0%, var(--royal-purple) 100%);
  border: none;
  box-shadow: 0 4px 14px rgba(109, 40, 255, 0.2);
  color: var(--white);
  padding: 14px 28px;
  border-radius: 100px;
  font-weight: 600;
}

.hero-buttons .btn-primary:hover {
  box-shadow: 0 8px 24px rgba(109, 40, 255, 0.45);
  transform: translateY(-2px);
}

.hero-buttons .btn-secondary {
  background-color: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.15);
  color: var(--white);
  padding: 14px 28px;
  border-radius: 100px;
  font-weight: 600;
}

.hero-buttons .btn-secondary:hover {
  background-color: rgba(255, 255, 255, 0.1);
  border-color: rgba(255, 255, 255, 0.3);
  transform: translateY(-2px);
}

.btn-watch {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  color: var(--white);
  font-weight: 600;
  font-size: 0.9rem;
  transition: all var(--transition-fast);
  padding: 10px 16px;
  border-radius: 100px;
}

.btn-watch i {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 32px;
  height: 32px;
  background-color: rgba(109, 40, 255, 0.15);
  border-radius: 50%;
  font-size: 0.8rem;
  transition: all var(--transition-fast);
}

.btn-watch:hover {
  color: #a275ff;
}

.btn-watch:hover i {
  background-color: var(--primary-purple);
  transform: scale(1.1);
}

/* Hero Stats */
.hero-stats {
  display: grid;
  grid-template-cols: repeat(4, 1fr);
  gap: 24px;
  border-top: 1px solid rgba(255, 255, 255, 0.08);
  padding-top: 36px;
}

.stat-item {
  display: flex;
  flex-direction: column;
}

.stat-val-container {
  display: flex;
  align-items: baseline;
  color: var(--white);
}

.stat-number {
  font-family: var(--font-heading);
  font-size: clamp(28px, 2.5vw, 38px);
  font-weight: 800;
}

.stat-plus {
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--primary-purple);
  margin-left: 2px;
}

.stat-label {
  font-size: 0.75rem;
  font-weight: 600;
  color: var(--muted-text);
  margin-top: 4px;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

/* Right Side Visual Neural Network & floating badges */
.hero-visual {
  position: relative;
  width: 100%;
  height: 480px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.visual-network {
  position: absolute;
  width: 100%;
  height: 100%;
  opacity: 0.85;
}

.ai-network-svg {
  width: 100%;
  height: 100%;
}

.network-lines line {
  stroke: rgba(109, 40, 255, 0.15);
  stroke-width: 1.5;
  stroke-dasharray: 4 4;
  animation: lineDash 20s linear infinite;
}

.network-nodes circle {
  fill: var(--white);
  stroke: var(--primary-purple);
  stroke-width: 3;
  filter: drop-shadow(0 0 8px rgba(109, 40, 255, 0.5));
}

.network-nodes circle.node-pulse {
  animation: nodePulse 2.5s ease-in-out infinite alternate;
}

/* Floating Glass Technology Cards */
.floating-tech-card {
  position: absolute;
  display: inline-flex;
  align-items: center;
  gap: 12px;
  background: rgba(8, 19, 39, 0.6);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border: 1px solid rgba(255, 255, 255, 0.1);
  padding: 10px 18px;
  border-radius: 100px;
  color: var(--white);
  font-size: 0.875rem;
  font-weight: 700;
  box-shadow: var(--shadow-xl);
  transition: border-color var(--transition-fast);
}

.floating-tech-card:hover {
  border-color: rgba(109, 40, 255, 0.4);
}

.tech-card-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  font-size: 0.85rem;
}

.tech-card-icon.bg-purple { background-color: rgba(109, 40, 255, 0.2); color: #a275ff; }
.tech-card-icon.bg-blue { background-color: rgba(59, 130, 246, 0.2); color: var(--electric-blue); }
.tech-card-icon.bg-cyan { background-color: rgba(6, 182, 212, 0.2); color: var(--cyan); }

/* Floating placements */
.tech-ai { top: 15%; left: 5%; }
.tech-cloud { top: 10%; right: 5%; }
.tech-cyber { bottom: 20%; left: 0%; }
.tech-data { bottom: 15%; right: 8%; }

/* Keyframe Animations */
@keyframes lineDash {
  to {
    stroke-dashoffset: -100;
  }
}

@keyframes nodePulse {
  0% {
    r: 5px;
    fill: var(--white);
  }
  100% {
    r: 9px;
    fill: #a275ff;
  }
}

@keyframes pulseGlow {
  0% {
    transform: scale(0.95);
    box-shadow: 0 0 0 0 rgba(109, 40, 255, 0.4);
  }
  70% {
    transform: scale(1);
    box-shadow: 0 0 0 8px rgba(109, 40, 255, 0);
  }
  100% {
    transform: scale(0.95);
    box-shadow: 0 0 0 0 rgba(109, 40, 255, 0);
  }
}

/* Responsive adjustments */
@media (max-width: 991px) {
  .hero-section {
    padding: 100px 0 60px 0;
  }

  .hero-container {
    grid-template-cols: 1fr;
    gap: 48px;
  }

  .hero-content {
    text-align: center;
  }

  .hero-support {
    margin-left: auto;
    margin-right: auto;
  }

  .hero-buttons {
    justify-content: center;
  }

  .hero-stats {
    justify-content: center;
  }

  .hero-visual {
    height: 380px;
  }
}

@media (max-width: 767px) {
  .hero-buttons {
    flex-direction: column;
    width: 100%;
    gap: 12px;
  }

  .hero-buttons .btn,
  .hero-buttons .btn-watch {
    width: 100%;
    justify-content: center;
  }

  .hero-stats {
    grid-template-cols: repeat(2, 1fr);
    gap: 20px;
  }
}
</style>
