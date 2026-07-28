<!-- Hero Section (90vh enterprise layout) -->
<section id="hero" class="hero-section">
  
  <!-- Background Ambient Video & Mesh overlay -->
  <div class="hero-video-container">
    <video autoplay loop muted playsinline class="hero-bg-video">
      <source src="assets/video/hero.mp4" type="video/mp4">
    </video>
    <div class="hero-video-overlay"></div>
  </div>

  <div class="hero-glow purple"></div>
  <div class="hero-glow blue"></div>
  <div class="hero-grid-mesh"></div>

  <!-- Hero Container (Max-width 1440px, padding 64px) -->
  <div class="hero-container-wrapper">
    <div class="hero-grid-two-column">
      
      <!-- Left Column: Context copy & CTAs (55%) -->
      <div class="hero-content-col" data-aos="fade-up" data-aos-duration="600">
        <span class="hero-badge">
          <i class="fa-solid fa-circle-check"></i> Australian Enterprise Technology Partner
        </span>
        <h1 class="hero-headline">
          Engineering <span class="gradient-text">Intelligent</span> Digital Platforms for <span class="gradient-text">Australia</span>'s <span class="gradient-text">Future Enterprises</span>
        </h1>
        <p class="hero-support">
          Helping Australian organisations modernise operations through AI, Cloud Engineering, Enterprise Software, Data Platforms, Cybersecurity and Intelligent Automation.
        </p>
        
        <!-- CTA Action Buttons (56px high) -->
        <div class="hero-action-ctas">
          <a href="#contact" class="btn btn-primary btn-magnetic">Book Strategy Session <i class="fa-solid fa-calendar-check"></i></a>
          <a href="#why-jaiton" class="btn btn-secondary btn-magnetic">Explore Solutions <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <!-- Trust Indicators row -->
        <div class="hero-trust-row">
          <div class="trust-indicator-item">
            <span class="trust-check-icon">✔</span>
            <span class="trust-lbl">Australian Quality Standards</span>
          </div>
          <div class="trust-indicator-item">
            <span class="trust-check-icon">✔</span>
            <span class="trust-lbl">Enterprise Security</span>
          </div>
          <div class="trust-indicator-item">
            <span class="trust-check-icon">✔</span>
            <span class="trust-lbl">Agile Delivery</span>
          </div>
          <div class="trust-indicator-item">
            <span class="trust-check-icon">✔</span>
            <span class="trust-lbl">Global Delivery Team</span>
          </div>
          <div class="trust-indicator-item">
            <span class="trust-check-icon">✔</span>
            <span class="trust-lbl">ISO Ready Development</span>
          </div>
        </div>
      </div>

      <!-- Right Column: Premium Enterprise AI Dashboard Illustration (45%) -->
      <div class="hero-visual-col" data-aos="fade-left" data-aos-duration="800">
        <div class="visual-interactive-canvas">
          
          <!-- Large Enterprise AI Dashboard Card (Fills entire right side) -->
          <div class="canvas-mockup-panel glass-panel-dark">
            <div class="mockup-header">
              <div class="mockup-dots">
                <span class="dot red"></span>
                <span class="dot yellow"></span>
                <span class="dot green"></span>
              </div>
              <span class="mockup-path"><i class="fa-solid fa-shield-halved"></i> enterprise-ai.jaiton.com.au</span>
              <span class="live-badge"><span class="live-dot"></span> LIVE METRICS</span>
            </div>

            <div class="mockup-dashboard-grid">
              <!-- Top Metrics Cards Row -->
              <div class="dashboard-mini-metrics">
                <div class="mini-metric-card">
                  <span class="mini-lbl">AI Model Throughput</span>
                  <span class="mini-val text-purple">1.2M req/sec</span>
                </div>
                <div class="mini-metric-card">
                  <span class="mini-lbl">System Latency</span>
                  <span class="mini-val text-green">1.4 ms</span>
                </div>
                <div class="mini-metric-card">
                  <span class="mini-lbl">Security Shield</span>
                  <span class="mini-val text-blue">ISO 27001 ACTIVE</span>
                </div>
              </div>

              <!-- Main SVG Vector Illustration Canvas -->
              <div class="dashboard-svg-wrapper">
                <svg viewBox="0 0 520 260" class="canvas-svg">
                  <defs>
                    <linearGradient id="ai-glow" x1="0%" y1="0%" x2="100%" y2="100%">
                      <stop offset="0%" stop-color="#6D28FF" stop-opacity="0.25"/>
                      <stop offset="100%" stop-color="#3B82F6" stop-opacity="0.05"/>
                    </linearGradient>
                  </defs>

                  <!-- Central Network Grid Overlay -->
                  <g stroke="rgba(255,255,255,0.04)" stroke-width="1">
                    <line x1="60" y1="0" x2="60" y2="260" />
                    <line x1="180" y1="0" x2="180" y2="260" />
                    <line x1="300" y1="0" x2="300" y2="260" />
                    <line x1="420" y1="0" x2="420" y2="260" />
                  </g>

                  <!-- Cybersecurity Shield Icon Center -->
                  <path d="M260,35 C295,35 320,45 320,45 C320,45 320,120 260,165 C200,120 200,45 200,45 C200,45 225,35 260,35 Z" fill="rgba(16, 185, 129, 0.06)" stroke="#10B981" stroke-width="2.5" class="shield-pulse" />
                  <text x="260" y="95" fill="#fff" font-size="10" font-weight="bold" text-anchor="middle">ENTERPRISE CORE</text>
                  <text x="260" y="112" fill="#10B981" font-size="8" font-weight="600" text-anchor="middle">ENCRYPTED</text>

                  <!-- Cloud Infrastructure Node -->
                  <rect x="40" y="70" width="100" height="45" rx="8" fill="url(#ai-glow)" stroke="#3B82F6" stroke-width="1.5" />
                  <text x="90" y="93" fill="#fff" font-size="9" font-weight="bold" text-anchor="middle">AWS / AZURE</text>
                  <text x="90" y="106" fill="#cbd5e1" font-size="7" text-anchor="middle">CLUSTER STABLE</text>
                  <circle cx="55" cy="92" r="3" fill="#3B82F6" class="pulse-node" />

                  <!-- Cognitive AI Tensor Node -->
                  <rect x="380" y="70" width="100" height="45" rx="8" fill="url(#ai-glow)" stroke="#6D28FF" stroke-width="1.5" />
                  <text x="430" y="93" fill="#fff" font-size="9" font-weight="bold" text-anchor="middle">COGNITIVE AI</text>
                  <text x="430" y="106" fill="#a275ff" font-size="7" text-anchor="middle">NEURAL AGENTS</text>
                  <circle cx="395" cy="92" r="3" fill="#a275ff" class="pulse-node" />

                  <!-- Active Connector Lines & Signals -->
                  <line x1="140" y1="92" x2="200" y2="92" stroke="rgba(255,255,255,0.15)" stroke-width="1.5" stroke-dasharray="4 4" />
                  <line x1="320" y1="92" x2="380" y2="92" stroke="rgba(255,255,255,0.15)" stroke-width="1.5" stroke-dasharray="4 4" />

                  <!-- Flowing Data Particles -->
                  <circle cx="140" cy="92" r="2.5" fill="#3B82F6" class="particle-flow-right" />
                  <circle cx="380" cy="92" r="2.5" fill="#a275ff" class="particle-flow-left" />

                  <!-- Real-time Chart Path Animation -->
                  <path d="M 40,220 Q 160,180 260,205 T 480,175" fill="none" stroke="#6D28FF" stroke-width="2" class="chart-draw-line" />
                </svg>
              </div>
            </div>
          </div>

          <!-- Floating Technology Glass Pills -->
          <div class="floating-tech-pill pill-ai parallax-item" data-speed="1.3">
            <div class="pill-icon bg-purple"><i class="fa-solid fa-brain"></i></div>
            <span>Artificial Intelligence</span>
          </div>
          <div class="floating-tech-pill pill-cloud parallax-item" data-speed="-0.8">
            <div class="pill-icon bg-blue"><i class="fa-solid fa-cloud"></i></div>
            <span>Cloud Engineering</span>
          </div>
          <div class="floating-tech-pill pill-cyber parallax-item" data-speed="1.6">
            <div class="pill-icon bg-green"><i class="fa-solid fa-shield-halved"></i></div>
            <span>Cybersecurity</span>
          </div>
          <div class="floating-tech-pill pill-data parallax-item" data-speed="-1.2">
            <div class="pill-icon bg-cyan"><i class="fa-solid fa-database"></i></div>
            <span>Data Platforms</span>
          </div>

        </div>
      </div>

    </div>

    <!-- Bottom Horizontal Statistics Glass Row (All 4 metrics in horizontal row) -->
    <div class="hero-stats-horizontal" data-aos="fade-up" data-aos-delay="200">
      <div class="stat-glass-card glass-panel-dark">
        <div class="stat-digit-row">
          <span class="stat-num" data-target="120">0</span><span class="stat-plus">+</span>
        </div>
        <span class="stat-lbl">Projects Delivered</span>
      </div>
      <div class="stat-glass-card glass-panel-dark">
        <div class="stat-digit-row">
          <span class="stat-num" data-target="98">0</span><span class="stat-plus">%</span>
        </div>
        <span class="stat-lbl">Client Satisfaction</span>
      </div>
      <div class="stat-glass-card glass-panel-dark">
        <div class="stat-digit-row">
          <span class="stat-num">24/7</span>
        </div>
        <span class="stat-lbl">Support SLA</span>
      </div>
      <div class="stat-glass-card glass-panel-dark">
        <div class="stat-digit-row">
          <span class="stat-num" data-target="10">0</span><span class="stat-plus">+</span>
        </div>
        <span class="stat-lbl">Industries Served</span>
      </div>
    </div>

  </div>
</section>

<!-- Numeric Count-up Trigger Scripts -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const statNumbers = document.querySelectorAll(".hero-stats-horizontal .stat-num");

  const countStats = () => {
    statNumbers.forEach(num => {
      const targetAttr = num.getAttribute("data-target");
      if (!targetAttr) return; // Skip 24/7 stat card
      
      const target = parseInt(targetAttr);
      const tempVal = { val: 0 };
      
      if (typeof gsap !== "undefined") {
        gsap.to(tempVal, {
          val: target,
          duration: 1.5,
          ease: "power2.out",
          onUpdate: () => {
            num.innerText = Math.floor(tempVal.val);
          }
        });
      } else {
        num.innerText = target;
      }
    });
  };

  // Trigger counts once stats row enters viewport
  if (typeof ScrollTrigger !== "undefined") {
    ScrollTrigger.create({
      trigger: ".hero-stats-horizontal",
      start: "top bottom-=50",
      once: true,
      onEnter: countStats
    });
  } else {
    setTimeout(countStats, 500);
  }
});
</script>

<!-- CSS Specifically for Enterprise Scaled Hero Component -->
<style>
.hero-section {
  position: relative;
  height: 90vh;
  min-height: 850px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  background-color: var(--dark-navy);
  overflow: hidden;
  padding-top: 148px; /* Header height (88px) + 60px padding = 148px */
  padding-bottom: 40px;
  box-sizing: border-box;
}

/* Background video opacity lock */
.hero-video-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  overflow: hidden;
  opacity: 0.22;
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
  background: radial-gradient(circle at center, transparent 30%, var(--dark-navy) 100%);
  z-index: 2;
}

/* Background grid overlays */
.hero-grid-mesh {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-size: 40px 40px;
  background-image: 
    linear-gradient(to right, rgba(255, 255, 255, 0.015) 1px, transparent 1px),
    linear-gradient(to bottom, rgba(255, 255, 255, 0.015) 1px, transparent 1px);
  z-index: 3;
}

.hero-glow {
  position: absolute;
  width: 600px;
  height: 600px;
  border-radius: 50%;
  filter: blur(160px);
  opacity: 0.25;
  pointer-events: none;
  z-index: 3;
}

.hero-glow.purple { top: -10%; right: 10%; background-color: var(--primary-purple); }
.hero-glow.blue { bottom: -10%; left: 10%; background-color: var(--electric-blue); }

/* Exact Hero Container Specification */
.hero-container-wrapper {
  max-width: 1440px;
  width: 100%;
  margin: 0 auto;
  padding-left: 64px;
  padding-right: 64px;
  position: relative;
  z-index: 5;
  box-sizing: border-box;
}

/* Two-Column Grid Setup: Left 55%, Right 45% */
.hero-grid-two-column {
  display: grid;
  grid-template-cols: 55% 45%;
  gap: 48px;
  align-items: center;
  width: 100%;
}

.hero-content-col {
  text-align: left;
}

.hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 8px 18px;
  background-color: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 100px;
  font-size: 0.875rem;
  font-weight: 700;
  color: var(--white);
  margin-bottom: 24px;
}

.hero-badge i {
  color: #10B981;
}

/* Poppins Heading Specification */
.hero-headline {
  font-family: 'Poppins', sans-serif;
  font-size: 72px;
  font-weight: 700;
  line-height: 1.1;
  color: var(--white);
  max-width: 700px;
  margin-bottom: 24px;
  letter-spacing: -0.02em;
}

.gradient-text {
  background: linear-gradient(135deg, #a275ff 0%, #3B82F6 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  display: inline-block;
}

.hero-support {
  font-size: 22px;
  line-height: 1.65;
  color: #cbd5e1;
  max-width: 620px;
  margin-bottom: 36px;
}

/* CTA buttons: 56px high */
.hero-action-ctas {
  display: flex;
  gap: 20px;
  margin-bottom: 36px;
}

.hero-action-ctas .btn {
  height: 56px;
  padding: 0 36px;
  border-radius: 16px;
  font-size: 16px;
  font-weight: 700;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  box-sizing: border-box;
}

.hero-action-ctas .btn-primary {
  background: linear-gradient(135deg, var(--primary-purple) 0%, var(--royal-purple) 100%);
  color: var(--white);
  border: none;
  box-shadow: 0 4px 14px rgba(109, 40, 255, 0.25);
  transition: all var(--transition-normal);
}

.hero-action-ctas .btn-primary:hover {
  box-shadow: 0 8px 24px rgba(109, 40, 255, 0.45);
  transform: translateY(-2px);
}

.hero-action-ctas .btn-secondary {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.15);
  color: var(--white);
}

.hero-action-ctas .btn-secondary:hover {
  background-color: rgba(255, 255, 255, 0.08);
  border-color: var(--white);
  transform: translateY(-2px);
}

/* Trust Indicators Row */
.hero-trust-row {
  display: flex;
  flex-wrap: wrap;
  gap: 12px 20px;
  border-top: 1px solid rgba(255, 255, 255, 0.05);
  padding-top: 24px;
}

.trust-indicator-item {
  display: flex;
  align-items: center;
  gap: 6px;
}

.trust-check-icon {
  color: #10B981;
  font-weight: 800;
  font-size: 0.875rem;
}

.trust-lbl {
  font-size: 0.8125rem;
  font-weight: 600;
  color: #94a3b8;
}

/* Right Column Visual composition - Premium Enterprise Dashboard */
.hero-visual-col {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
}

.visual-interactive-canvas {
  position: relative;
  width: 100%;
  height: 480px;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Large Enterprise AI Dashboard Card (Fills entire right side) */
.canvas-mockup-panel {
  background-color: rgba(3, 8, 17, 0.7);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 20px;
  box-shadow: 0 24px 60px rgba(0,0,0,0.45);
  padding: 20px;
  width: 100%;
  height: 100%;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  z-index: 5;
}

.mockup-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-bottom: 1px solid rgba(255, 255, 255, 0.06);
  padding-bottom: 12px;
  margin-bottom: 12px;
}

.mockup-dots {
  display: flex;
  gap: 6px;
}

.mockup-header .dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
}

.mockup-header .dot.red { background-color: #EF4444; }
.mockup-header .dot.yellow { background-color: #F59E0B; }
.mockup-header .dot.green { background-color: #10B981; }

.mockup-path {
  font-size: 0.7rem;
  color: #cbd5e1;
  font-family: monospace;
  display: flex;
  align-items: center;
  gap: 6px;
}

.live-badge {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 0.625rem;
  font-weight: 800;
  color: #10B981;
  background-color: rgba(16, 185, 129, 0.1);
  padding: 4px 10px;
  border-radius: 4px;
  letter-spacing: 0.05em;
}

.live-dot {
  width: 6px;
  height: 6px;
  background-color: #10B981;
  border-radius: 50%;
  animation: pulseGlow 1.8s infinite;
}

.dashboard-mockup-grid {
  display: flex;
  flex-direction: column;
  gap: 16px;
  height: 100%;
}

.dashboard-mini-metrics {
  display: grid;
  grid-template-cols: repeat(3, 1fr);
  gap: 12px;
}

.mini-metric-card {
  background-color: rgba(255, 255, 255, 0.02);
  border: 1px solid rgba(255, 255, 255, 0.05);
  border-radius: 10px;
  padding: 10px 14px;
  display: flex;
  flex-direction: column;
}

.mini-lbl {
  font-size: 0.625rem;
  color: #94a3b8;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-bottom: 4px;
}

.mini-val {
  font-family: 'Poppins', sans-serif;
  font-size: 0.95rem;
  font-weight: 800;
}

.mini-val.text-purple { color: #a275ff; }
.mini-val.text-green { color: #10B981; }
.mini-val.text-blue { color: #3B82F6; }

.dashboard-svg-wrapper {
  width: 100%;
  flex-grow: 1;
  display: flex;
  align-items: center;
}

.canvas-svg {
  width: 100%;
  height: auto;
}

/* Floating Technology Glass Pills */
.floating-tech-pill {
  position: absolute;
  display: flex;
  align-items: center;
  gap: 8px;
  background: rgba(8, 19, 39, 0.7);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border: 1px solid rgba(255, 255, 255, 0.12);
  padding: 10px 18px;
  border-radius: 100px;
  color: var(--white);
  font-size: 0.8125rem;
  font-weight: 700;
  box-shadow: var(--shadow-lg);
  z-index: 10;
  transition: all var(--transition-fast);
}

.floating-tech-pill:hover {
  border-color: rgba(109, 40, 255, 0.4);
  transform: scale(1.05);
  box-shadow: 0 0 20px rgba(109, 40, 255, 0.3);
}

.pill-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  font-size: 0.75rem;
}

.pill-icon.bg-purple { background-color: rgba(109, 40, 255, 0.2); color: #a275ff; }
.pill-icon.bg-blue { background-color: rgba(59, 130, 246, 0.2); color: var(--electric-blue); }
.pill-icon.bg-green { background-color: rgba(16, 185, 129, 0.2); color: #10B981; }
.pill-icon.bg-cyan { background-color: rgba(6, 182, 212, 0.2); color: var(--cyan); }

.pill-ai { top: -4%; left: -4%; }
.pill-cloud { top: -2%; right: -4%; }
.pill-cyber { bottom: 8%; left: -6%; }
.pill-data { bottom: 6%; right: -4%; }

/* SVG Flow Animations */
.shield-pulse { animation: shieldPulse 3s infinite alternate; }
.particle-flow-right { animation: flowRight 2.5s infinite linear; }
.particle-flow-left { animation: flowLeft 2.5s infinite linear; }

@keyframes flowRight {
  0% { cx: 140; cy: 92; opacity: 1; }
  90% { cx: 200; cy: 92; opacity: 1; }
  100% { cx: 200; cy: 92; opacity: 0; }
}

@keyframes flowLeft {
  0% { cx: 380; cy: 92; opacity: 1; }
  90% { cx: 320; cy: 92; opacity: 1; }
  100% { cx: 320; cy: 92; opacity: 0; }
}

/* Horizontal Statistics Row */
.hero-stats-horizontal {
  display: grid;
  grid-template-cols: repeat(4, 1fr);
  gap: 24px;
  width: 100%;
  margin-top: 36px;
  border-top: 1px solid rgba(255, 255, 255, 0.05);
  padding-top: 28px;
}

.stat-glass-card {
  background: rgba(255, 255, 255, 0.02);
  border: 1px solid rgba(255, 255, 255, 0.05);
  border-radius: 16px;
  padding: 18px 24px;
  display: flex;
  flex-direction: column;
  box-sizing: border-box;
}

.stat-digit-row {
  display: flex;
  align-items: baseline;
}

.stat-glass-card .stat-num {
  font-family: 'Poppins', sans-serif;
  font-size: 2rem;
  font-weight: 800;
  color: var(--white);
}

.stat-glass-card .stat-plus {
  font-size: 1.4rem;
  font-weight: 700;
  color: var(--primary-purple);
  margin-left: 2px;
}

.stat-glass-card .stat-lbl {
  font-size: 0.75rem;
  font-weight: 600;
  color: #94a3b8;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-top: 4px;
}

/* Responsive grid adjustments */
@media (max-width: 1199px) {
  .hero-headline {
    font-size: 58px;
  }
  .hero-support {
    font-size: 18px;
  }
}

@media (max-width: 991px) {
  .hero-section {
    height: auto;
    min-height: auto;
    padding-top: 140px;
    padding-bottom: 60px;
  }

  .hero-container-wrapper {
    padding-left: 32px;
    padding-right: 32px;
  }

  .hero-grid-two-column {
    grid-template-cols: 1fr;
    gap: 48px;
  }

  .hero-headline {
    font-size: 56px;
    max-width: 100%;
  }

  .hero-stats-horizontal {
    grid-template-cols: repeat(2, 1fr);
  }
}

@media (max-width: 767px) {
  .hero-container-wrapper {
    padding-left: 20px;
    padding-right: 20px;
  }

  .hero-headline {
    font-size: 42px;
  }

  .hero-support {
    font-size: 16px;
  }

  .hero-action-ctas {
    flex-direction: column;
    width: 100%;
  }

  .hero-action-ctas .btn {
    width: 100%;
  }

  .hero-stats-horizontal {
    grid-template-cols: 1fr;
  }
}
</style>
