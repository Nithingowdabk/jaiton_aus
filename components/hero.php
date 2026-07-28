<!-- Hero Section (92vh locked screen layout) -->
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

  <div class="container hero-container-wrapper">
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
        
        <!-- CTA Action Buttons -->
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

      <!-- Right Column: Interactive Composition (45%) -->
      <div class="hero-visual-col" data-aos="fade-left" data-aos-duration="800">
        <div class="visual-interactive-canvas">
          
          <!-- Central Interactive Grid Mockup Panel -->
          <div class="canvas-mockup-panel glass-panel-dark">
            <div class="mockup-header">
              <span class="dot red"></span>
              <span class="dot yellow"></span>
              <span class="dot green"></span>
              <span class="mockup-path">transform.jaiton.com.au</span>
            </div>
            <div class="mockup-body">
              <svg viewBox="0 0 400 240" class="canvas-svg">
                <!-- Glowing Cybersecurity Shield -->
                <path d="M200,30 C225,30 245,38 245,38 C245,38 245,100 200,135 C155,100 155,38 155,38 C155,38 175,30 200,30 Z" fill="rgba(16, 185, 129, 0.05)" stroke="#10B981" stroke-width="2" class="shield-pulse" />
                <text x="200" y="85" fill="#fff" font-size="8" font-weight="bold" text-anchor="middle">SECUREGATE</text>

                <!-- Cloud Infrastructure block -->
                <rect x="30" y="65" width="80" height="35" rx="5" fill="rgba(59, 130, 246, 0.08)" stroke="#3B82F6" stroke-width="1.5" />
                <text x="70" y="86" fill="#cbd5e1" font-size="8" text-anchor="middle">AWS CLOUD</text>
                <circle cx="45" cy="83" r="3" fill="#3B82F6" class="pulse-node" />

                <!-- AI Neural Node block -->
                <rect x="290" y="65" width="80" height="35" rx="5" fill="rgba(109, 40, 255, 0.08)" stroke="#6D28FF" stroke-width="1.5" />
                <text x="330" y="86" fill="#cbd5e1" font-size="8" text-anchor="middle">COGNITIVE AI</text>
                <circle cx="305" cy="83" r="3" fill="#a275ff" class="pulse-node" />

                <!-- Active connector lines -->
                <line x1="110" y1="82" x2="155" y2="82" stroke="rgba(255,255,255,0.1)" stroke-width="1" stroke-dasharray="3 3" />
                <line x1="245" y1="82" x2="290" y2="82" stroke="rgba(255,255,255,0.1)" stroke-width="1" stroke-dasharray="3 3" />

                <!-- Moving particles along paths -->
                <circle cx="110" cy="82" r="2" fill="#3B82F6" class="particle-flow-right" />
                <circle cx="290" cy="82" r="2" fill="#a275ff" class="particle-flow-left" />

                <!-- Real-time Chart path drawing -->
                <path d="M 40,195 Q 140,165 240,185 T 360,160" fill="none" stroke="#6D28FF" stroke-width="1.5" class="chart-draw-line" />
              </svg>
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

    <!-- Bottom Horizontal Statistics Row (4 Glass cards) -->
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
    // Fallback trigger
    setTimeout(countStats, 500);
  }
});
</script>

<!-- CSS Specifically for Refined Hero Component -->
<style>
.hero-section {
  position: relative;
  height: 92vh;
  min-height: 820px;
  display: flex;
  align-items: center;
  background-color: var(--dark-navy);
  overflow: hidden;
  padding: 110px 0 30px 0; /* Padding offsets fixed header */
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
  opacity: 0.22; /* Constrained opacity */
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

.hero-container-wrapper {
  position: relative;
  z-index: 5;
  width: 100%;
}

/* Two-Column Grid Setup */
.hero-grid-two-column {
  display: grid;
  grid-template-cols: 1.1fr 0.9fr; /* 55% to 45% proportions */
  gap: 60px;
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
  font-size: 0.8125rem;
  font-weight: 700;
  color: var(--white);
  margin-bottom: 24px;
}

.hero-badge i {
  color: #10B981;
}

/* Poppins Heading Override */
.hero-headline {
  font-family: 'Poppins', sans-serif;
  font-size: 72px;
  font-weight: 700;
  line-height: 1.1;
  color: var(--white);
  max-width: 700px;
  margin-bottom: 20px;
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
  line-height: 1.7;
  color: #cbd5e1; /* Increased contrast slate */
  max-width: 620px;
  margin-bottom: 32px;
}

/* CTA buttons with 56px heights */
.hero-action-ctas {
  display: flex;
  gap: 20px;
  margin-bottom: 40px;
}

.hero-action-ctas .btn {
  height: 56px;
  padding: 0 32px;
  border-radius: 16px;
  font-size: 0.9rem;
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

/* Trust Indicators Row below CTAs */
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
  font-size: 0.75rem;
  font-weight: 600;
  color: #94a3b8;
}

/* Right Column Visual composition */
.hero-visual-col {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
}

.visual-interactive-canvas {
  position: relative;
  width: 100%;
  height: 400px;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Central interactive dashboard mockup */
.canvas-mockup-panel {
  background-color: rgba(3, 8, 17, 0.6);
  border: 1px solid rgba(255, 255, 255, 0.05);
  border-radius: var(--radius-lg);
  box-shadow: 0 20px 40px rgba(0,0,0,0.3);
  padding: 16px;
  width: 90%;
  max-width: 380px;
  z-index: 5;
}

.mockup-header {
  display: flex;
  align-items: center;
  gap: 6px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
  padding-bottom: 10px;
  margin-bottom: 10px;
}

.mockup-header .dot {
  width: 6px;
  height: 6px;
  border-radius: 50%;
}

.mockup-header .dot.red { background-color: #EF4444; }
.mockup-header .dot.yellow { background-color: #F59E0B; }
.mockup-header .dot.green { background-color: #10B981; }

.mockup-path {
  font-size: 0.55rem;
  color: #cbd5e1;
  font-family: monospace;
  margin-left: 8px;
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
  background: rgba(8, 19, 39, 0.6);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border: 1px solid rgba(255, 255, 255, 0.1);
  padding: 8px 16px;
  border-radius: 100px;
  color: var(--white);
  font-size: 0.75rem;
  font-weight: 700;
  box-shadow: var(--shadow-lg);
  z-index: 10;
  transition: all var(--transition-fast);
}

.floating-tech-pill:hover {
  border-color: rgba(109, 40, 255, 0.35);
  transform: scale(1.05);
  box-shadow: 0 0 15px rgba(109, 40, 255, 0.2);
}

.pill-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 22px;
  height: 22px;
  border-radius: 50%;
  font-size: 0.65rem;
}

.pill-icon.bg-purple { background-color: rgba(109, 40, 255, 0.2); color: #a275ff; }
.pill-icon.bg-blue { background-color: rgba(59, 130, 246, 0.2); color: var(--electric-blue); }
.pill-icon.bg-green { background-color: rgba(16, 185, 129, 0.2); color: #10B981; }
.pill-icon.bg-cyan { background-color: rgba(6, 182, 212, 0.2); color: var(--cyan); }

/* Floating locations placement */
.pill-ai { top: 10%; left: 0; }
.pill-cloud { top: 5%; right: 0; }
.pill-cyber { bottom: 15%; left: -5%; }
.pill-data { bottom: 10%; right: -2%; }

/* SVG Flow Animations */
.shield-pulse { animation: shieldPulse 3s infinite alternate; }
.particle-flow-right { animation: flowRight 2.5s infinite linear; }
.particle-flow-left { animation: flowLeft 2.5s infinite linear; }

@keyframes flowRight {
  0% { cx: 110; cy: 82; opacity: 1; }
  90% { cx: 155; cy: 82; opacity: 1; }
  100% { cx: 155; cy: 82; opacity: 0; }
}

@keyframes flowLeft {
  0% { cx: 290; cy: 82; opacity: 1; }
  90% { cx: 245; cy: 82; opacity: 1; }
  100% { cx: 245; cy: 82; opacity: 0; }
}

/* Horizontal Statistics Row */
.hero-stats-horizontal {
  display: grid;
  grid-template-cols: repeat(4, 1fr);
  gap: 24px;
  width: 100%;
  margin-top: 54px;
  border-top: 1px solid rgba(255, 255, 255, 0.05);
  padding-top: 36px;
}

.stat-glass-card {
  background: rgba(255, 255, 255, 0.02);
  border: 1px solid rgba(255, 255, 255, 0.05);
  border-radius: 16px;
  padding: 20px 24px;
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
    font-size: 60px;
  }
}

@media (max-width: 991px) {
  .hero-section {
    height: auto;
    min-height: auto;
    padding: 140px 0 60px 0;
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

  .floating-tech-pill {
    padding: 6px 12px;
  }
}

@media (max-width: 767px) {
  .hero-headline {
    font-size: 42px;
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
