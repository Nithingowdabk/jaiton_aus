<!-- ============================================================
     HERO SECTION – Reduced Compact Scale
     ============================================================ -->
<section id="hero" class="hero-section">
  
  <!-- Background Layers -->
  <div class="hero-bg-layers">
    <div class="hero-video-container">
      <video autoplay loop muted playsinline class="hero-bg-video">
        <source src="assets/video/hero.mp4" type="video/mp4">
      </video>
    </div>
    <div class="hero-bg-gradient"></div>
    <div class="hero-bg-grid"></div>
    <div class="hero-glow hero-glow--purple"></div>
    <div class="hero-glow hero-glow--blue"></div>
  </div>

  <!-- Hero Container -->
  <div class="hero-container">
    <div class="hero-grid">
      
      <!-- LEFT COLUMN (58%) – Reduced Scale Copy & 44px CTAs -->
      <div class="hero-left" data-aos="fade-up" data-aos-duration="600">
        <span class="hero-badge">
          <i class="fa-solid fa-circle-check"></i> Australian Enterprise Technology Partner
        </span>

        <h1 class="hero-heading">
          Engineering <span class="gradient-text">Intelligent</span> Digital Platforms for <span class="gradient-text">Australia</span>'s <span class="gradient-text">Future Enterprises</span>
        </h1>

        <p class="hero-description">
          Helping Australian organisations modernise operations through AI, Cloud Engineering, Enterprise Software, Data Platforms, Cybersecurity and Intelligent Automation.
        </p>
        
        <!-- CTA Action Buttons (44px Height) -->
        <div class="hero-ctas">
          <a href="#contact" class="btn btn-primary btn-magnetic">Book Strategy Session <i class="fa-solid fa-calendar-check"></i></a>
          <a href="#why-jaiton" class="btn btn-secondary btn-magnetic">Explore Solutions <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <!-- Trust Indicators -->
        <div class="hero-trust">
          <div class="trust-item"><span class="trust-icon">✔</span><span>Australian Quality Standards</span></div>
          <div class="trust-item"><span class="trust-icon">✔</span><span>Enterprise Security</span></div>
          <div class="trust-item"><span class="trust-icon">✔</span><span>Agile Delivery</span></div>
          <div class="trust-item"><span class="trust-icon">✔</span><span>Global Delivery Team</span></div>
          <div class="trust-item"><span class="trust-icon">✔</span><span>ISO Ready Development</span></div>
        </div>
      </div>

      <!-- RIGHT COLUMN (42%) – Ultra Compact Dashboard Illustration -->
      <div class="hero-right" data-aos="fade-left" data-aos-duration="800">
        <div class="hero-dashboard">
          
          <!-- Dashboard Panel -->
          <div class="dashboard-panel">
            <div class="dashboard-toolbar">
              <div class="toolbar-dots">
                <span class="dot dot--red"></span>
                <span class="dot dot--yellow"></span>
                <span class="dot dot--green"></span>
              </div>
              <span class="toolbar-url"><i class="fa-solid fa-shield-halved"></i> enterprise-ai.jaiton.com.au</span>
              <span class="toolbar-live"><span class="toolbar-live-dot"></span> LIVE</span>
            </div>

            <!-- Mini Metrics Row -->
            <div class="dashboard-metrics">
              <div class="metric-chip">
                <span class="metric-label">AI Throughput</span>
                <span class="metric-value metric-value--purple">1.2M req/s</span>
              </div>
              <div class="metric-chip">
                <span class="metric-label">Latency</span>
                <span class="metric-value metric-value--green">1.4 ms</span>
              </div>
              <div class="metric-chip">
                <span class="metric-label">Security</span>
                <span class="metric-value metric-value--blue">ISO 27001</span>
              </div>
            </div>

            <!-- SVG Diagram -->
            <div class="dashboard-canvas">
              <svg viewBox="0 0 520 150" class="dashboard-svg" aria-hidden="true">
                <defs>
                  <linearGradient id="hero-ai-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#6D28FF" stop-opacity="0.25"/>
                    <stop offset="100%" stop-color="#3B82F6" stop-opacity="0.05"/>
                  </linearGradient>
                </defs>

                <!-- Grid lines -->
                <g stroke="rgba(255,255,255,0.04)" stroke-width="1">
                  <line x1="60" y1="0" x2="60" y2="150"/>
                  <line x1="180" y1="0" x2="180" y2="150"/>
                  <line x1="300" y1="0" x2="300" y2="150"/>
                  <line x1="420" y1="0" x2="420" y2="150"/>
                </g>

                <!-- Shield -->
                <path d="M260,8 C295,8 320,18 320,18 C320,18 320,72 260,105 C200,72 200,18 200,18 C200,18 225,8 260,8 Z" fill="rgba(16,185,129,0.06)" stroke="#10B981" stroke-width="2" class="shield-pulse"/>
                <text x="260" y="50" fill="#fff" font-size="9" font-weight="bold" text-anchor="middle">ENTERPRISE CORE</text>
                <text x="260" y="63" fill="#10B981" font-size="7.5" font-weight="600" text-anchor="middle">ENCRYPTED</text>

                <!-- Cloud Node -->
                <rect x="40" y="34" width="96" height="34" rx="6" fill="url(#hero-ai-grad)" stroke="#3B82F6" stroke-width="1.5"/>
                <text x="88" y="52" fill="#fff" font-size="8.5" font-weight="bold" text-anchor="middle">AWS / AZURE</text>
                <text x="88" y="62" fill="#cbd5e1" font-size="6.5" text-anchor="middle">CLUSTER STABLE</text>
                <circle cx="53" cy="51" r="2.5" fill="#3B82F6" class="pulse-node"/>

                <!-- AI Node -->
                <rect x="384" y="34" width="96" height="34" rx="6" fill="url(#hero-ai-grad)" stroke="#6D28FF" stroke-width="1.5"/>
                <text x="432" y="52" fill="#fff" font-size="8.5" font-weight="bold" text-anchor="middle">COGNITIVE AI</text>
                <text x="432" y="62" fill="#a275ff" font-size="6.5" text-anchor="middle">NEURAL AGENTS</text>
                <circle cx="397" cy="51" r="2.5" fill="#a275ff" class="pulse-node"/>

                <!-- Connectors -->
                <line x1="136" y1="51" x2="200" y2="51" stroke="rgba(255,255,255,0.15)" stroke-width="1.5" stroke-dasharray="4 4"/>
                <line x1="320" y1="51" x2="384" y2="51" stroke="rgba(255,255,255,0.15)" stroke-width="1.5" stroke-dasharray="4 4"/>

                <!-- Flow Particles -->
                <circle cx="136" cy="51" r="2" fill="#3B82F6" class="particle-flow-right"/>
                <circle cx="384" cy="51" r="2" fill="#a275ff" class="particle-flow-left"/>

                <!-- Chart -->
                <path d="M 40,132 Q 160,105 260,120 T 480,100" fill="none" stroke="#6D28FF" stroke-width="1.8" class="chart-draw-line"/>
              </svg>
            </div>
          </div>

          <!-- Service Glass Pills (12px font-size) -->
          <div class="floating-pill floating-pill--ai">
            <div class="pill-dot pill-dot--purple"><i class="fa-solid fa-brain"></i></div>
            <span>Artificial Intelligence</span>
          </div>
          <div class="floating-pill floating-pill--cloud">
            <div class="pill-dot pill-dot--blue"><i class="fa-solid fa-cloud"></i></div>
            <span>Cloud Engineering</span>
          </div>
          <div class="floating-pill floating-pill--cyber">
            <div class="pill-dot pill-dot--green"><i class="fa-solid fa-shield-halved"></i></div>
            <span>Cybersecurity</span>
          </div>
          <div class="floating-pill floating-pill--data">
            <div class="pill-dot pill-dot--cyan"><i class="fa-solid fa-database"></i></div>
            <span>Data Platforms</span>
          </div>

        </div>
      </div>

    </div>

    <!-- Statistics Row (Reduced Scale) -->
    <div class="hero-stats" data-aos="fade-up" data-aos-delay="200">
      <div class="stat-card">
        <div class="stat-number-row">
          <span class="stat-count" data-target="120">0</span><span class="stat-suffix">+</span>
        </div>
        <span class="stat-label">Projects Delivered</span>
      </div>
      <div class="stat-card">
        <div class="stat-number-row">
          <span class="stat-count" data-target="98">0</span><span class="stat-suffix">%</span>
        </div>
        <span class="stat-label">Client Satisfaction</span>
      </div>
      <div class="stat-card">
        <div class="stat-number-row">
          <span class="stat-count">24/7</span>
        </div>
        <span class="stat-label">Support SLA</span>
      </div>
      <div class="stat-card">
        <div class="stat-number-row">
          <span class="stat-count" data-target="10">0</span><span class="stat-suffix">+</span>
        </div>
        <span class="stat-label">Industries Served</span>
      </div>
    </div>

  </div>
</section>

<!-- Count-up Animation Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".hero-stats .stat-count");

  const animateCounters = () => {
    counters.forEach(el => {
      const target = el.getAttribute("data-target");
      if (!target) return;
      const end = parseInt(target);
      const obj = { val: 0 };
      
      if (typeof gsap !== "undefined") {
        gsap.to(obj, {
          val: end,
          duration: 1.5,
          ease: "power2.out",
          onUpdate: () => { el.innerText = Math.floor(obj.val); }
        });
      } else {
        el.innerText = end;
      }
    });
  };

  if (typeof ScrollTrigger !== "undefined") {
    ScrollTrigger.create({
      trigger: ".hero-stats",
      start: "top bottom-=50",
      once: true,
      onEnter: animateCounters
    });
  } else {
    setTimeout(animateCounters, 500);
  }
});
</script>

<!-- ============================================================
     HERO SCOPED STYLES (Further Reduced Compact Scale)
     ============================================================ -->
<style>
/* ── Section Shell ── */
.hero-section {
  position: relative;
  min-height: calc(100vh - 20px);
  display: flex;
  flex-direction: column;
  justify-content: center;
  background-color: var(--dark-navy);
  padding-top: 105px;   /* Header top clearance */
  padding-bottom: 16px;
  box-sizing: border-box;
}

/* ── Background Layers ── */
.hero-bg-layers {
  position: absolute;
  inset: 0;
  z-index: 1;
  overflow: hidden;
  pointer-events: none;
}

.hero-video-container {
  position: absolute;
  inset: 0;
  opacity: 0.18;
}

.hero-bg-video {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hero-bg-gradient {
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at center, transparent 30%, var(--dark-navy) 100%);
}

.hero-bg-grid {
  position: absolute;
  inset: 0;
  background-size: 40px 40px;
  background-image:
    linear-gradient(to right, rgba(255,255,255,0.015) 1px, transparent 1px),
    linear-gradient(to bottom, rgba(255,255,255,0.015) 1px, transparent 1px);
}

.hero-glow {
  position: absolute;
  width: 420px;
  height: 420px;
  border-radius: 50%;
  filter: blur(120px);
  opacity: 0.2;
}

.hero-glow--purple { top: -10%; right: 10%; background: var(--primary-purple); }
.hero-glow--blue   { bottom: -10%; left: 10%; background: var(--electric-blue); }

/* ── Hero Container ── */
.hero-container {
  max-width: 1440px;
  width: 100%;
  padding-left: 48px;
  padding-right: 48px;
  margin: 0 auto;
  position: relative;
  z-index: 5;
  box-sizing: border-box;
}

/* ── Hero Grid ── */
.hero-grid {
  display: grid;
  grid-template-columns: 58% 42%;
  gap: 36px;
  align-items: center;
  width: 100%;
}

/* ── Left Column Copy ── */
.hero-left {
  text-align: left;
}

.hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 4px 12px;
  background: rgba(255,255,255,0.05);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: 100px;
  font-size: 0.75rem;
  font-weight: 700;
  color: var(--white);
  margin-bottom: 12px;
}

.hero-badge i { color: #10B981; }

/* Further Reduced Headline Scale (44px Desktop) */
.hero-heading {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(32px, 2.8vw, 44px);
  font-weight: 700;
  line-height: 1.15;
  color: var(--white);
  letter-spacing: -0.02em;
  margin-bottom: 14px;
}

.gradient-text {
  background: linear-gradient(135deg, #a275ff 0%, #3B82F6 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  display: inline;
}

/* Further Reduced Description Scale (15px Desktop) */
.hero-description {
  font-size: clamp(13px, 1vw, 15px);
  line-height: 1.5;
  color: #cbd5e1;
  max-width: 540px;
  margin-bottom: 20px;
}

/* Compact CTA Buttons (44px Height) */
.hero-ctas {
  display: flex;
  gap: 14px;
  margin-bottom: 20px;
}

.hero-ctas .btn {
  height: 44px;
  padding: 0 22px;
  border-radius: 12px;
  font-size: 14px;
  font-weight: 700;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  box-sizing: border-box;
}

.hero-ctas .btn-primary {
  background: linear-gradient(135deg, var(--primary-purple), var(--royal-purple));
  color: var(--white);
  border: none;
  box-shadow: 0 4px 14px rgba(109,40,255,0.25);
}

.hero-ctas .btn-primary:hover {
  box-shadow: 0 8px 24px rgba(109,40,255,0.45);
  transform: translateY(-2px);
}

.hero-ctas .btn-secondary {
  background: rgba(255,255,255,0.03);
  border: 1px solid rgba(255,255,255,0.15);
  color: var(--white);
}

.hero-ctas .btn-secondary:hover {
  background: rgba(255,255,255,0.08);
  border-color: var(--white);
  transform: translateY(-2px);
}

/* Trust Indicators */
.hero-trust {
  display: flex;
  flex-wrap: wrap;
  gap: 8px 14px;
  border-top: 1px solid rgba(255,255,255,0.05);
  padding-top: 16px;
}

.trust-item {
  display: flex;
  align-items: center;
  gap: 5px;
}

.trust-icon {
  color: #10B981;
  font-weight: 800;
  font-size: 13px;
}

.trust-item span:last-child {
  font-size: 0.75rem;
  font-weight: 600;
  color: #94a3b8;
}

/* ── Right Column – Ultra Compact Dashboard Illustration ── */
.hero-right {
  width: 100%;
}

.hero-dashboard {
  position: relative;
  width: 100%;
}

.dashboard-panel {
  background: rgba(3,8,17,0.7);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: 14px;
  box-shadow: 0 16px 40px rgba(0,0,0,0.45);
  padding: 12px;
  display: flex;
  flex-direction: column;
  gap: 8px;
  max-height: 250px;
}

.dashboard-toolbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-bottom: 1px solid rgba(255,255,255,0.06);
  padding-bottom: 5px;
}

.toolbar-dots { display: flex; gap: 4px; }

.toolbar-dots .dot {
  width: 5px;
  height: 5px;
  border-radius: 50%;
}

.dot--red    { background: #EF4444; }
.dot--yellow { background: #F59E0B; }
.dot--green  { background: #10B981; }

.toolbar-url {
  font-size: 0.58rem;
  color: #cbd5e1;
  font-family: monospace;
  display: flex;
  align-items: center;
  gap: 4px;
}

.toolbar-live {
  display: flex;
  align-items: center;
  gap: 4px;
  font-size: 0.55rem;
  font-weight: 800;
  color: #10B981;
  background: rgba(16,185,129,0.1);
  padding: 2px 5px;
  border-radius: 4px;
  letter-spacing: 0.05em;
}

.toolbar-live-dot {
  width: 4px;
  height: 4px;
  background: #10B981;
  border-radius: 50%;
  animation: pulseGlow 1.8s infinite;
}

.dashboard-metrics {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 6px;
}

.metric-chip {
  background: rgba(255,255,255,0.02);
  border: 1px solid rgba(255,255,255,0.05);
  border-radius: 6px;
  padding: 5px 8px;
  display: flex;
  flex-direction: column;
}

.metric-label {
  font-size: 0.52rem;
  color: #94a3b8;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-bottom: 2px;
}

.metric-value {
  font-family: 'Poppins', sans-serif;
  font-size: 0.75rem;
  font-weight: 800;
}

.metric-value--purple { color: #a275ff; }
.metric-value--green  { color: #10B981; }
.metric-value--blue   { color: #3B82F6; }

.dashboard-canvas { width: 100%; }
.dashboard-svg { width: 100%; height: auto; display: block; }

/* Service Glass Pills (12px Font Size) */
.floating-pill {
  position: absolute;
  display: flex;
  align-items: center;
  gap: 5px;
  background: rgba(8,19,39,0.75);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border: 1px solid rgba(255,255,255,0.12);
  padding: 4px 10px;
  border-radius: 100px;
  color: var(--white);
  font-size: 12px;
  font-weight: 700;
  box-shadow: var(--shadow-lg);
  z-index: 6;
  transition: all var(--transition-fast);
}

.floating-pill:hover {
  border-color: rgba(109,40,255,0.4);
  transform: scale(1.04);
  box-shadow: 0 0 14px rgba(109,40,255,0.3);
}

.pill-dot {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 16px;
  height: 16px;
  border-radius: 50%;
  font-size: 0.6rem;
}

.pill-dot--purple { background: rgba(109,40,255,0.2); color: #a275ff; }
.pill-dot--blue   { background: rgba(59,130,246,0.2); color: var(--electric-blue); }
.pill-dot--green  { background: rgba(16,185,129,0.2); color: #10B981; }
.pill-dot--cyan   { background: rgba(6,182,212,0.2); color: var(--cyan); }

.floating-pill--ai    { top: -8px; left: 6px; }
.floating-pill--cloud { top: -8px; right: 6px; }
.floating-pill--cyber { bottom: -8px; left: 6px; }
.floating-pill--data  { bottom: -8px; right: 6px; }

/* ── SVG Animations ── */
.shield-pulse       { animation: shieldPulse 3s infinite alternate; }
.particle-flow-right { animation: heroFlowRight 2.5s infinite linear; }
.particle-flow-left  { animation: heroFlowLeft 2.5s infinite linear; }

@keyframes shieldPulse {
  0%   { stroke-opacity: 1; }
  100% { stroke-opacity: 0.4; }
}

@keyframes heroFlowRight {
  0%   { cx: 136; opacity: 1; }
  90%  { cx: 200; opacity: 1; }
  100% { cx: 200; opacity: 0; }
}

@keyframes heroFlowLeft {
  0%   { cx: 384; opacity: 1; }
  90%  { cx: 320; opacity: 1; }
  100% { cx: 320; opacity: 0; }
}

/* ── Statistics Row (Ultra Compact Scale) ── */
.hero-stats {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 14px;
  width: 100%;
  margin-top: 18px;
  border-top: 1px solid rgba(255,255,255,0.05);
  padding-top: 14px;
}

.stat-card {
  background: rgba(255,255,255,0.02);
  border: 1px solid rgba(255,255,255,0.05);
  border-radius: 10px;
  padding: 10px 14px;
  display: flex;
  flex-direction: column;
}

.stat-number-row {
  display: flex;
  align-items: baseline;
}

.stat-count {
  font-family: 'Poppins', sans-serif;
  font-size: 32px; /* 32px digit scale */
  font-weight: 800;
  color: var(--white);
  line-height: 1.0;
}

.stat-suffix {
  font-size: 1rem;
  font-weight: 700;
  color: var(--primary-purple);
  margin-left: 2px;
}

.stat-label {
  font-size: 0.65rem;
  font-weight: 600;
  color: #94a3b8;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-top: 2px;
}

/* ── Responsive ── */
@media (max-width: 1199px) {
  .hero-heading { font-size: 36px; }
  .hero-description { font-size: 14px; }
  .hero-grid { grid-template-columns: 55% 45%; gap: 24px; }
}

@media (max-width: 991px) {
  .hero-section {
    min-height: auto;
    max-height: none;
    padding-top: 105px;
    padding-bottom: 30px;
  }

  .hero-container {
    padding-left: 24px;
    padding-right: 24px;
  }

  .hero-grid {
    grid-template-columns: 1fr;
    gap: 24px;
  }

  .hero-heading { font-size: 32px; }

  .hero-stats {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 767px) {
  .hero-container {
    padding-left: 16px;
    padding-right: 16px;
  }

  .hero-heading { font-size: 28px; }
  .hero-description { font-size: 13px; }

  .hero-ctas {
    flex-direction: column;
  }

  .hero-ctas .btn { width: 100%; }

  .hero-stats {
    grid-template-columns: 1fr;
  }

  .floating-pill { display: none; }
}
</style>
