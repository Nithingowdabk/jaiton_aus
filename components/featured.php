<!-- Premium Full-Screen Immersive Case Studies Experience -->
<section id="featured" class="featured-storyteller">
  
  <!-- Glowing Animated Mesh & Particle Background -->
  <div class="story-bg-mesh"></div>
  <div class="story-radial-light"></div>
  <div class="story-grid-overlay"></div>
  
  <!-- Persistent Section Header & Horizontal Counters Row (Fixed at top) -->
  <div class="story-header-fixed">
    <div class="story-header-content">
      <div class="story-title-wrap">
        <span class="section-badge">Case Studies</span>
        <h2 class="section-title text-white">Featured <span class="gradient-text">Enterprise Transformations</span></h2>
        <p class="section-desc text-slate-300">
          See how Jaiton architects AI, cloud platforms, enterprise software, and automation systems that deliver measurable business outcomes.
        </p>
      </div>
      
      <!-- Horizontal Counters Row -->
      <div class="header-counters-row">
        <div class="header-counter-item">
          <div class="counter-digits">
            <span class="counter-num" data-target="120">0</span><span class="counter-suffix">+</span>
          </div>
          <span class="counter-lbl">Projects Delivered</span>
        </div>
        <div class="header-counter-item">
          <div class="counter-digits">
            <span class="counter-num" data-target="98">0</span><span class="counter-suffix">%</span>
          </div>
          <span class="counter-lbl">Client Satisfaction</span>
        </div>
        <div class="header-counter-item">
          <div class="counter-digits">
            <span class="counter-num" data-target="15">0</span><span class="counter-suffix">+</span>
          </div>
          <span class="counter-lbl">Industries Served</span>
        </div>
        <div class="header-counter-item">
          <div class="counter-digits">
            <span class="counter-suffix">$</span><span class="counter-num" data-target="25">0</span><span class="counter-suffix">M+</span>
          </div>
          <span class="counter-lbl">Business Value</span>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Pinned Expandable Project Navigator (Left) -->
  <div class="timeline-nav">
    <div class="timeline-nav-title">PROJECTS</div>
    <div class="timeline-links">
      <button class="nav-link-item active" data-slide="0">
        <i class="fa-solid fa-cloud"></i>
        <span class="nav-label">Cloud Modernisation</span>
      </button>
      <button class="nav-link-item" data-slide="1">
        <i class="fa-solid fa-brain"></i>
        <span class="nav-label">AI Platform</span>
      </button>
      <button class="nav-link-item" data-slide="2">
        <i class="fa-solid fa-microchip"></i>
        <span class="nav-label">IoT Monitoring</span>
      </button>
      <button class="nav-link-item" data-slide="3">
        <i class="fa-solid fa-diagram-project"></i>
        <span class="nav-label">Enterprise ERP</span>
      </button>
      <button class="nav-link-item" data-slide="4">
        <i class="fa-solid fa-shield-halved"></i>
        <span class="nav-label">Cybersecurity</span>
      </button>
    </div>
  </div>

  <!-- Horizontal Scroll Container -->
  <div class="story-slides-wrapper">
    
    <!-- Slide 1: Cloud Modernisation -->
    <div class="story-slide" id="slide-story-1">
      <div class="slide-grid">
        
        <!-- Left Side: Project details (40% Viewport width) -->
        <div class="slide-info-side">
          <span class="industry-badge"><i class="fa-solid fa-cloud"></i> Cloud Infrastructure</span>
          <h3 class="slide-project-title">Aura IoT: Intelligent Telemetry Platform</h3>
          <p class="slide-project-desc">
            <strong>The Challenge:</strong> Remote drilling equipment faced constant data gaps due to unstable local server processing.<br><br>
            <strong>The Solution:</strong> Migrated telemetry processors to AWS ECS Docker containers with low-latency API sockets.<br><br>
            <strong>The Outcome:</strong> Achieved absolute operational coverage, completely eliminating processing bottleneck faults.
          </p>

          <!-- Glass Metrics cards -->
          <div class="slide-metrics-cards">
            <div class="slide-metric-box glass-panel-dark">
              <span class="metric-hdr">Before</span>
              <span class="metric-v text-red">18% Faults</span>
            </div>
            <div class="slide-metric-box glass-panel-dark">
              <span class="metric-hdr">After</span>
              <span class="metric-v text-green">1% Faults</span>
            </div>
            <div class="slide-metric-box glass-panel-dark highlighted">
              <span class="metric-hdr">ROI</span>
              <span class="metric-v text-purple">+38% Uptime</span>
            </div>
          </div>

          <!-- Stack & Buttons -->
          <div class="slide-footer-tags">
            <div class="glowing-pills">
              <span>AWS</span>
              <span>Docker</span>
              <span>React</span>
            </div>
            <div class="slide-ctas">
              <a href="#contact" class="btn btn-secondary btn-magnetic">View Case Study</a>
              <a href="#contact" class="btn btn-outline-white btn-magnetic">Book Similar Project</a>
            </div>
          </div>
        </div>

        <!-- Right Side: Large Animated Dashboard (60% Viewport width) -->
        <div class="slide-visual-side">
          <div class="dashboard-canvas glass-panel-dark">
            <div class="canvas-header">
              <span class="canvas-title"><i class="fa-solid fa-server"></i> Cloud Infrastructure Telemetry</span>
              <span class="canvas-status green">SYSTEM NORMAL</span>
            </div>
            
            <!-- SVG Cloud Architecture Visual -->
            <svg class="visual-svg" viewBox="0 0 500 320">
              <defs>
                <linearGradient id="cloud-glow-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="#3B82F6" stop-opacity="0.2"/>
                  <stop offset="100%" stop-color="#7C3AED" stop-opacity="0.05"/>
                </linearGradient>
              </defs>

              <!-- Central Cloud Server Node -->
              <rect x="180" y="30" width="140" height="70" rx="10" fill="url(#cloud-glow-grad)" stroke="#6D28FF" stroke-width="2" />
              <text x="250" y="70" fill="#fff" font-size="12" font-weight="bold" text-anchor="middle">AWS ECS CLUSTER</text>
              <circle cx="210" cy="50" r="4" fill="#10B981" class="pulse-node" />

              <!-- Lower Containers -->
              <g transform="translate(60, 200)">
                <rect x="0" y="0" width="90" height="45" rx="6" fill="rgba(255,255,255,0.02)" stroke="rgba(255,255,255,0.1)" stroke-width="1" />
                <text x="45" y="27" fill="#cbd5e1" font-size="10" text-anchor="middle">API Node 1</text>
                <line x1="45" y1="0" x2="160" y2="-100" stroke="#3B82F6" stroke-width="1.5" stroke-dasharray="4 4" class="dash-flow-up" />
              </g>

              <g transform="translate(200, 200)">
                <rect x="0" y="0" width="90" height="45" rx="6" fill="rgba(255,255,255,0.02)" stroke="rgba(255,255,255,0.1)" stroke-width="1" />
                <text x="45" y="27" fill="#cbd5e1" font-size="10" text-anchor="middle">DB Worker</text>
                <line x1="45" y1="0" x2="50" y2="-100" stroke="#6D28FF" stroke-width="1.5" stroke-dasharray="4 4" class="dash-flow-up" />
              </g>

              <g transform="translate(340, 200)">
                <rect x="0" y="0" width="90" height="45" rx="6" fill="rgba(255,255,255,0.02)" stroke="rgba(255,255,255,0.1)" stroke-width="1" />
                <text x="45" y="27" fill="#cbd5e1" font-size="10" text-anchor="middle">Telemetry</text>
                <line x1="45" y1="0" x2="-60" y2="-100" stroke="#06B6D4" stroke-width="1.5" stroke-dasharray="4 4" class="dash-flow-up" />
              </g>

              <!-- Running Graph Path -->
              <path d="M 50,290 Q 150,260 250,280 T 450,250" fill="none" stroke="#10B981" stroke-width="2" class="chart-line-draw" />
            </svg>
          </div>
        </div>

      </div>
    </div>

    <!-- Slide 2: AI Platform -->
    <div class="story-slide" id="slide-story-2">
      <div class="slide-grid">
        
        <!-- Left Side -->
        <div class="slide-info-side">
          <span class="industry-badge"><i class="fa-solid fa-brain"></i> Artificial Intelligence</span>
          <h3 class="slide-project-title">MedAI: Pathology Image scanner</h3>
          <p class="slide-project-desc">
            <strong>The Challenge:</strong> Manual diagnostics created massive backlogs in pathology auditing timelines.<br><br>
            <strong>The Solution:</strong> Deployed automated pathology vision scanners integrated with custom convolutional tensor structures.<br><br>
            <strong>The Outcome:</strong> Reduced diagnostics from hours to 15 seconds, maximizing scanner clinical throughput.
          </p>

          <!-- Glass Metrics cards -->
          <div class="slide-metrics-cards">
            <div class="slide-metric-box glass-panel-dark">
              <span class="metric-hdr">Before</span>
              <span class="metric-v text-red">4-Hour Audits</span>
            </div>
            <div class="slide-metric-box glass-panel-dark">
              <span class="metric-hdr">After</span>
              <span class="metric-v text-green">15-Sec Scan</span>
            </div>
            <div class="slide-metric-box glass-panel-dark highlighted">
              <span class="metric-hdr">ROI</span>
              <span class="metric-v text-purple">94% Speedup</span>
            </div>
          </div>

          <!-- Stack & Buttons -->
          <div class="slide-footer-tags">
            <div class="glowing-pills">
              <span>Python</span>
              <span>TensorFlow</span>
              <span>OpenAI</span>
            </div>
            <div class="slide-ctas">
              <a href="#contact" class="btn btn-secondary btn-magnetic">View Case Study</a>
              <a href="#contact" class="btn btn-outline-white btn-magnetic">Book Similar Project</a>
            </div>
          </div>
        </div>

        <!-- Right Side -->
        <div class="slide-visual-side">
          <div class="dashboard-canvas glass-panel-dark">
            <div class="canvas-header">
              <span class="canvas-title"><i class="fa-solid fa-microchip"></i> AI pathology Neural Diagnostics</span>
              <span class="canvas-status green">ACCURACY: 98.6%</span>
            </div>
            
            <!-- SVG AI Platform Neural Net -->
            <svg class="visual-svg" viewBox="0 0 500 320">
              <g stroke="rgba(109, 40, 255, 0.15)" stroke-width="1.5">
                <line x1="80" y1="150" x2="200" y2="80" />
                <line x1="80" y1="150" x2="200" y2="150" />
                <line x1="80" y1="150" x2="200" y2="220" />

                <line x1="200" y1="80" x2="380" y2="100" />
                <line x1="200" y1="150" x2="380" y2="100" />
                <line x1="200" y1="150" x2="380" y2="200" />
                <line x1="200" y1="220" x2="380" y2="200" />
              </g>

              <circle cx="80" cy="150" r="5" fill="#3B82F6" />
              <circle cx="200" cy="80" r="5" fill="#6D28FF" />
              <circle cx="200" cy="150" r="5" fill="#6D28FF" />
              <circle cx="200" cy="220" r="5" fill="#6D28FF" />
              <circle cx="380" cy="100" r="5" fill="#06B6D4" />
              <circle cx="380" cy="200" r="5" fill="#06B6D4" />

              <circle cx="80" cy="150" r="3" fill="#fff" class="flow-signal-1" />
              <circle cx="80" cy="150" r="3" fill="#fff" class="flow-signal-2" />

              <text x="250" y="280" fill="#cbd5e1" font-size="10" text-anchor="middle" font-family="monospace">Convolutional Feature Map Nodes</text>
            </svg>
          </div>
        </div>

      </div>
    </div>

    <!-- Slide 3: IoT Monitoring -->
    <div class="story-slide" id="slide-story-3">
      <div class="slide-grid">
        
        <!-- Left Side -->
        <div class="slide-info-side">
          <span class="industry-badge"><i class="fa-solid fa-microchip"></i> Internet of Things</span>
          <h3 class="slide-project-title">Aura Fleet: Live Quarry Telemetry</h3>
          <p class="slide-project-desc">
            <strong>The Challenge:</strong> Standard wireless tracking failed inside deep mining quarries, losing asset coordination telemetry.<br><br>
            <strong>The Solution:</strong> Structured low-power CAN telemetry nodes connected directly back to central tracking loops.<br><br>
            <strong>The Outcome:</strong> Achieved complete vehicle telemetry coverage, optimizing quarry transport paths.
          </p>

          <!-- Glass Metrics cards -->
          <div class="slide-metrics-cards">
            <div class="slide-metric-box glass-panel-dark">
              <span class="metric-hdr">Before</span>
              <span class="metric-v text-red">No Coverage</span>
            </div>
            <div class="slide-metric-box glass-panel-dark">
              <span class="metric-hdr">After</span>
              <span class="metric-v text-green">100% Tracking</span>
            </div>
            <div class="slide-metric-box glass-panel-dark highlighted">
              <span class="metric-hdr">ROI</span>
              <span class="metric-v text-purple">AUD $840K Saved</span>
            </div>
          </div>

          <!-- Stack & Buttons -->
          <div class="slide-footer-tags">
            <div class="glowing-pills">
              <span>Next.js</span>
              <span>PostgreSQL</span>
              <span>AWS IoT Core</span>
            </div>
            <div class="slide-ctas">
              <a href="#contact" class="btn btn-secondary btn-magnetic">View Case Study</a>
              <a href="#contact" class="btn btn-outline-white btn-magnetic">Book Similar Project</a>
            </div>
          </div>
        </div>

        <!-- Right Side -->
        <div class="slide-visual-side">
          <div class="dashboard-canvas glass-panel-dark">
            <div class="canvas-header">
              <span class="canvas-title"><i class="fa-solid fa-map-location-dot"></i> Live Fleet Tracker Grid Map</span>
              <span class="canvas-status green">DEVICES: 48 ACTIVE</span>
            </div>
            
            <!-- SVG Map Grid IoT Telemetry -->
            <svg class="visual-svg" viewBox="0 0 500 320">
              <g stroke="rgba(255,255,255,0.03)" stroke-width="1">
                <line x1="50" y1="0" x2="50" y2="320" />
                <line x1="150" y1="0" x2="150" y2="320" />
                <line x1="250" y1="0" x2="250" y2="320" />
                <line x1="350" y1="0" x2="350" y2="320" />
                <line x1="450" y1="0" x2="450" y2="320" />
              </g>

              <path d="M 50,150 C 150,120 200,250 320,80 S 450,200 480,220" fill="none" stroke="rgba(255, 255, 255, 0.08)" stroke-width="4" />
              <path d="M 50,150 C 150,120 200,250 320,80 S 450,200 480,220" fill="none" stroke="#6D28FF" stroke-width="2" class="map-path-draw" />

              <circle cx="50" cy="150" r="6" fill="#10B981">
                <animateMotion path="M 0,0 C 100,-30 150,100 270,-70 S 400,50 430,70" dur="8s" repeatCount="indefinite" />
              </circle>

              <circle cx="200" cy="150" r="4" fill="#3B82F6" class="pulse-node" />
              <circle cx="320" cy="80" r="4" fill="#06B6D4" class="pulse-node" />
            </svg>
          </div>
        </div>

      </div>
    </div>

    <!-- Slide 4: Enterprise ERP -->
    <div class="story-slide" id="slide-story-4">
      <div class="slide-grid">
        
        <!-- Left Side -->
        <div class="slide-info-side">
          <span class="industry-badge"><i class="fa-solid fa-diagram-project"></i> Enterprise software</span>
          <h3 class="slide-project-title">LedgerHub: Transaction Reconciliation Gateway</h3>
          <p class="slide-project-desc">
            <strong>The Challenge:</strong> Manual transactional reconciliation across multiple branches was slow and prone to audit leaks.<br><br>
            <strong>The Solution:</strong> Designed a secure relational transaction mapping pipeline syncing ledger logs instantly.<br><br>
            <strong>The Outcome:</strong> Completely automated financial reconciliations, saving AUD $1.2M annually.
          </p>

          <!-- Glass Metrics cards -->
          <div class="slide-metrics-cards">
            <div class="slide-metric-box glass-panel-dark">
              <span class="metric-hdr">Before</span>
              <span class="metric-v text-red">Manual Audit</span>
            </div>
            <div class="slide-metric-box glass-panel-dark">
              <span class="metric-hdr">After</span>
              <span class="metric-v text-green">Real-time DB</span>
            </div>
            <div class="slide-metric-box glass-panel-dark highlighted">
              <span class="metric-hdr">ROI</span>
              <span class="metric-v text-purple">AUD $1.2M Saved</span>
            </div>
          </div>

          <!-- Stack & Buttons -->
          <div class="slide-footer-tags">
            <div class="glowing-pills">
              <span>Node.js</span>
              <span>PostgreSQL</span>
              <span>Kubernetes</span>
            </div>
            <div class="slide-ctas">
              <a href="#contact" class="btn btn-secondary btn-magnetic">View Case Study</a>
              <a href="#contact" class="btn btn-outline-white btn-magnetic">Book Similar Project</a>
            </div>
          </div>
        </div>

        <!-- Right Side -->
        <div class="slide-visual-side">
          <div class="dashboard-canvas glass-panel-dark">
            <div class="canvas-header">
              <span class="canvas-title"><i class="fa-solid fa-calculator"></i> Ledger Transaction Flow Mapper</span>
              <span class="canvas-status green">DB STABLE</span>
            </div>
            
            <!-- SVG ERP Departments connected -->
            <svg class="visual-svg" viewBox="0 0 500 320">
              <circle cx="100" cy="80" r="32" fill="rgba(59, 130, 246, 0.08)" stroke="#3B82F6" stroke-width="2" />
              <text x="100" y="84" fill="#fff" font-size="8" text-anchor="middle">SALES</text>

              <circle cx="400" cy="80" r="32" fill="rgba(6, 182, 212, 0.08)" stroke="#06B6D4" stroke-width="2" />
              <text x="400" y="84" fill="#fff" font-size="8" text-anchor="middle">LOGISTICS</text>

              <circle cx="250" cy="180" r="40" fill="rgba(109, 40, 255, 0.08)" stroke="#6D28FF" stroke-width="2.5" />
              <text x="250" y="184" fill="#fff" font-size="10" font-weight="bold" text-anchor="middle">LEDGERHUB</text>

              <line x1="130" y1="95" x2="215" y2="155" stroke="rgba(255,255,255,0.15)" stroke-width="1.5" stroke-dasharray="4 4" class="dash-flow-down" />
              <line x1="370" y1="95" x2="285" y2="155" stroke="rgba(255,255,255,0.15)" stroke-width="1.5" stroke-dasharray="4 4" class="dash-flow-up" />

              <text x="250" y="270" fill="#94a3b8" font-size="10" text-anchor="middle" font-family="monospace">Real-time DB Reconciliation Feed</text>
            </svg>
          </div>
        </div>

      </div>
    </div>

    <!-- Slide 5: Cybersecurity -->
    <div class="story-slide" id="slide-story-5">
      <div class="slide-grid">
        
        <!-- Left Side -->
        <div class="slide-info-side">
          <span class="industry-badge"><i class="fa-solid fa-shield-halved"></i> Cybersecurity</span>
          <h3 class="slide-project-title">SecureGate: Bank-Grade Threat Defense</h3>
          <p class="slide-project-desc">
            <strong>The Challenge:</strong> Financial transaction portal exposed to highly complex botnet DDoS vectors.<br><br>
            <strong>The Solution:</strong> Engineered real-time edge security proxies running machine learning telemetry logs.<br><br>
            <strong>The Outcome:</strong> Blocked 100% of attack targets, securing complete compliance metrics.
          </p>

          <!-- Glass Metrics cards -->
          <div class="slide-metrics-cards">
            <div class="slide-metric-box glass-panel-dark">
              <span class="metric-hdr">Threats</span>
              <span class="metric-v text-red">500+ Weekly</span>
            </div>
            <div class="slide-metric-box glass-panel-dark">
              <span class="metric-hdr">Blocked</span>
              <span class="metric-v text-green">100% Rate</span>
            </div>
            <div class="slide-metric-box glass-panel-dark highlighted">
              <span class="metric-hdr">ISO 27001</span>
              <span class="metric-v text-purple">Audit Ready</span>
            </div>
          </div>

          <!-- Stack & Buttons -->
          <div class="slide-footer-tags">
            <div class="glowing-pills">
              <span>Next.js</span>
              <span>Docker</span>
              <span>Kubernetes</span>
            </div>
            <div class="slide-ctas">
              <a href="#contact" class="btn btn-secondary btn-magnetic">View Case Study</a>
              <a href="#contact" class="btn btn-outline-white btn-magnetic">Book Similar Project</a>
            </div>
          </div>
        </div>

        <!-- Right Side -->
        <div class="slide-visual-side">
          <div class="dashboard-canvas glass-panel-dark">
            <div class="canvas-header">
              <span class="canvas-title"><i class="fa-solid fa-shield-halved"></i> Real-time Threat Defense Shield</span>
              <span class="canvas-status green">SHIELD ACTIVE</span>
            </div>
            
            <!-- SVG Security Shield with blocked attacks -->
            <svg class="visual-svg" viewBox="0 0 500 320">
              <path d="M 250,50 C 290,50 320,60 320,60 C 320,60 320,150 250,210 C 180,150 180,60 180,60 C 180,60 210,50 250,50 Z" fill="rgba(16, 185, 129, 0.06)" stroke="#10B981" stroke-width="3" class="shield-pulse" />
              <text x="250" y="135" fill="#fff" font-size="11" font-weight="bold" text-anchor="middle">SECUREGATE</text>

              <circle cx="50" cy="130" r="4" fill="#EF4444" class="attack-vector-1" />
              <circle cx="450" cy="110" r="4" fill="#EF4444" class="attack-vector-2" />

              <text x="250" y="270" fill="#94a3b8" font-size="10" text-anchor="middle" font-family="monospace">ISO 27001 Threat logs: Stable</text>
            </svg>
          </div>
        </div>

      </div>
    </div>

    <!-- Slide 6: Closing CTA Panel -->
    <div class="story-slide slide-outro">
      <div class="slide-outro-content">
        <h2 class="outro-title">Your Enterprise Success Story <br><span class="gradient-text">Starts Here</span></h2>
        <p class="outro-desc text-slate-300">
          Partner with Australia's elite solutions architects to modernise platforms, automate logistics, and deploy secure enterprise AI.
        </p>

        <div class="outro-buttons">
          <a href="#contact" class="btn btn-primary ripple-btn px-32 py-16 btn-magnetic">Start Your Transformation</a>
          <a href="#contact" class="btn btn-outline-white px-32 py-16 btn-magnetic">Talk to an Architect</a>
        </div>
      </div>
    </div>

  </div>

  <!-- Bottom Navigation: Progress Line & Dots -->
  <div class="story-bottom-nav">
    <div class="slide-progress-line">
      <span class="progress-fill-bar"></span>
      <div class="progress-dots">
        <span class="prog-dot active" data-slide="0"></span>
        <span class="prog-dot" data-slide="1"></span>
        <span class="prog-dot" data-slide="2"></span>
        <span class="prog-dot" data-slide="3"></span>
        <span class="prog-dot" data-slide="4"></span>
        <span class="prog-dot" data-slide="5"></span>
      </div>
    </div>
  </div>

</section>

<!-- Script initialization for GSAP ScrollTrigger Storyteller -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
    console.warn("GSAP or ScrollTrigger script CDN is not active.");
    return;
  }

  gsap.registerPlugin(ScrollTrigger);

  const container = document.querySelector(".featured-storyteller");
  const slidesWrapper = document.querySelector(".story-slides-wrapper");
  const slides = gsap.utils.toArray(".story-slide");
  const navLinks = document.querySelectorAll(".nav-link-item");
  const progressFill = document.querySelector(".progress-fill-bar");
  const progDots = document.querySelectorAll(".prog-dot");
  
  gsap.set(slidesWrapper, { width: `${slides.length * 100}vw` });

  // Main horizontal pinning animation tween
  const scrollTween = gsap.to(slidesWrapper, {
    xPercent: -100 * (slides.length - 1),
    ease: "none",
    scrollTrigger: {
      trigger: container,
      pin: true,
      scrub: 0.8,
      snap: {
        snapTo: 1 / (slides.length - 1),
        duration: 0.3,
        delay: 0.02,
        ease: "power1.inOut"
      },
      start: "top top",
      end: () => `+=${container.offsetWidth * (slides.length - 1)}`,
      onUpdate: (self) => {
        const progress = self.progress;
        
        if (progressFill) {
          progressFill.style.width = `${progress * 100}%`;
        }

        // Calculate currently active slide index
        const totalSlides = slides.length;
        const currentActiveIndex = Math.round(progress * (totalSlides - 1));

        // Highlight bottom dots
        progDots.forEach((dot, idx) => {
          if (idx === currentActiveIndex) {
            dot.classList.add("active");
          } else {
            dot.classList.remove("active");
          }
        });

        // Highlight left project navigator links
        navLinks.forEach((link, idx) => {
          if (idx === currentActiveIndex) {
            link.classList.add("active");
          } else {
            link.classList.remove("active");
          }
        });
        
        // Hide/fade the fixed top header on the outro slide to avoid layout clash
        const fixedHeader = document.querySelector(".story-header-fixed");
        if (fixedHeader) {
          if (currentActiveIndex === totalSlides - 1) {
            fixedHeader.style.opacity = "0";
            fixedHeader.style.pointerEvents = "none";
          } else {
            fixedHeader.style.opacity = "1";
            fixedHeader.style.pointerEvents = "all";
          }
        }
      }
    }
  });

  // Clicking project navigator links scrolls smoothly to target slide
  navLinks.forEach((link, idx) => {
    link.addEventListener("click", () => {
      const totalSlides = slides.length;
      const progress = idx / (totalSlides - 1);
      
      const scrollStart = scrollTween.scrollTrigger.start;
      const scrollEnd = scrollTween.scrollTrigger.end;
      const targetScrollPos = scrollStart + (scrollEnd - scrollStart) * progress;

      window.scrollTo({
        top: targetScrollPos,
        behavior: "smooth"
      });
    });
  });

  // Clicking bottom dots also navigates
  progDots.forEach((dot, idx) => {
    dot.addEventListener("click", () => {
      const totalSlides = slides.length;
      const progress = idx / (totalSlides - 1);
      
      const scrollStart = scrollTween.scrollTrigger.start;
      const scrollEnd = scrollTween.scrollTrigger.end;
      const targetScrollPos = scrollStart + (scrollEnd - scrollStart) * progress;

      window.scrollTo({
        top: targetScrollPos,
        behavior: "smooth"
      });
    });
  });

  // Numeric count animations for statistics
  const statNumbers = document.querySelectorAll(".counter-num");
  
  const countStats = () => {
    statNumbers.forEach(num => {
      const target = parseInt(num.getAttribute("data-target"));
      const tempVal = { val: 0 };
      gsap.to(tempVal, {
        val: target,
        duration: 1.5,
        ease: "power2.out",
        onUpdate: () => {
          num.innerText = Math.floor(tempVal.val);
        }
      });
    });
  };

  // Trigger counts once storyteller enters viewport
  ScrollTrigger.create({
    trigger: ".featured-storyteller",
    start: "top center",
    once: true,
    onEnter: countStats
  });

  // Magnetic button hover links
  const magneticButtons = document.querySelectorAll(".btn-magnetic");
  magneticButtons.forEach((btn) => {
    btn.addEventListener("mousemove", (e) => {
      const bounds = btn.getBoundingClientRect();
      const x = e.clientX - bounds.left - bounds.width / 2;
      const y = e.clientY - bounds.top - bounds.height / 2;
      
      gsap.to(btn, {
        x: x * 0.35,
        y: y * 0.35,
        duration: 0.3,
        ease: "power2.out"
      });
    });

    btn.addEventListener("mouseleave", () => {
      gsap.to(btn, {
        x: 0,
        y: 0,
        duration: 0.4,
        ease: "elastic.out(1, 0.3)"
      });
    });
  });

});
</script>

<!-- CSS Layout & Animations for Full-screen Storytelling Slider -->
<style>
/* Reset and core storytelling box bounds */
.featured-storyteller {
  position: relative;
  width: 100%;
  height: 100vh;
  background-color: #081327;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  z-index: 5;
}

/* Background animated elements */
.story-bg-mesh {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: radial-gradient(circle at 10% 20%, rgba(109, 40, 255, 0.08) 0%, transparent 40%),
              radial-gradient(circle at 80% 70%, rgba(59, 130, 246, 0.08) 0%, transparent 40%);
  opacity: 0.8;
  pointer-events: none;
  z-index: 1;
}

.story-radial-light {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 600px;
  height: 600px;
  background: radial-gradient(circle, rgba(109, 40, 255, 0.1) 0%, transparent 70%);
  pointer-events: none;
  z-index: 1;
}

.story-grid-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: linear-gradient(rgba(255,255,255,0.015) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255,255,255,0.015) 1px, transparent 1px);
  background-size: 40px 40px;
  pointer-events: none;
  z-index: 1;
}

/* Persistent Header Fixed at Top */
.story-header-fixed {
  position: absolute;
  top: 36px;
  left: 180px; /* Aligned with navigation link starts */
  right: 60px;
  z-index: 15;
  transition: opacity 0.4s ease;
  pointer-events: all;
  text-align: left;
}

.story-header-content {
  display: grid;
  grid-template-cols: 1.15fr 0.85fr;
  gap: 40px;
  align-items: center;
}

.story-title-wrap .section-badge {
  margin-bottom: 8px;
}

.story-title-wrap .section-title {
  margin-bottom: 6px;
  font-size: clamp(24px, 2.2vw, 32px) !important;
}

.story-title-wrap .section-desc {
  font-size: 0.8125rem;
  color: #cbd5e1;
  max-width: 600px;
  margin-bottom: 0;
}

/* Horizontal Row for Counters directly below heading */
.header-counters-row {
  display: flex;
  gap: 24px;
  justify-content: flex-start;
}

.header-counter-item {
  background-color: rgba(255, 255, 255, 0.02);
  border: 1px solid rgba(255, 255, 255, 0.05);
  border-radius: 8px;
  padding: 10px 16px;
  display: flex;
  flex-direction: column;
  min-width: 110px;
}

.counter-digits {
  display: flex;
  align-items: baseline;
}

.counter-num {
  font-family: var(--font-heading);
  font-size: 1.3rem;
  font-weight: 800;
  color: var(--white);
}

.counter-suffix {
  font-size: 0.95rem;
  font-weight: 700;
  color: var(--primary-purple);
  margin-left: 2px;
}

.counter-lbl {
  font-size: 0.625rem;
  color: #94a3b8;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-top: 2px;
}

/* Expandable Project Navigator (Pinned Left) */
.timeline-nav {
  position: absolute;
  left: 40px;
  top: 50%;
  transform: translateY(-50%);
  z-index: 20;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 16px;
}

.timeline-nav-title {
  font-family: var(--font-heading);
  font-size: 0.65rem;
  font-weight: 800;
  color: rgba(255, 255, 255, 0.3);
  letter-spacing: 0.2em;
  text-transform: uppercase;
  margin-bottom: 6px;
}

.timeline-links {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.nav-link-item {
  background: rgba(255, 255, 255, 0.02);
  border: 1px solid rgba(255, 255, 255, 0.05);
  display: flex;
  align-items: center;
  gap: 12px;
  cursor: pointer;
  padding: 10px 16px;
  border-radius: 8px;
  color: rgba(255, 255, 255, 0.4);
  width: 48px; /* Collapsed width: displays icon only */
  overflow: hidden;
  white-space: nowrap;
  box-sizing: border-box;
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
}

.nav-link-item i {
  font-size: 1rem;
  min-width: 16px;
  text-align: center;
  transition: color var(--transition-fast);
}

.nav-label {
  font-family: var(--font-body);
  font-size: 0.75rem;
  font-weight: 700;
  color: var(--white);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.nav-link-item.active {
  width: 220px; /* Expanded active width */
  background: rgba(109, 40, 255, 0.1);
  border-color: rgba(109, 40, 255, 0.3);
  color: var(--white);
  box-shadow: 0 0 15px rgba(109, 40, 255, 0.2);
}

.nav-link-item.active i {
  color: #a275ff;
}

.nav-link-item.active .nav-label {
  opacity: 1;
}

.nav-link-item:hover {
  border-color: rgba(255, 255, 255, 0.15);
  color: rgba(255, 255, 255, 0.7);
}

/* Horizontal Slides Wrapper */
.story-slides-wrapper {
  display: flex;
  height: 100%;
  z-index: 2;
}

.story-slide {
  width: 100vw;
  height: 100%;
  flex-shrink: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 170px 60px 80px 280px; /* Expanded padding-left to leave space for left navigator */
  box-sizing: border-box;
}

/* Split Slide Layout (40% Info, 60% Visual) */
.slide-grid {
  display: grid;
  grid-template-cols: 0.8fr 1.2fr;
  gap: 60px;
  width: 100%;
  align-items: center;
}

.slide-info-side {
  text-align: left;
}

.industry-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background-color: rgba(109, 40, 255, 0.15);
  border: 1px solid rgba(109, 40, 255, 0.25);
  padding: 6px 14px;
  border-radius: 100px;
  font-size: 0.6875rem;
  font-weight: 700;
  color: #a275ff;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-bottom: 16px;
}

.slide-project-title {
  font-size: clamp(20px, 1.8vw, 28px);
  font-weight: 800;
  color: var(--white);
  line-height: 1.25;
  margin-bottom: 12px;
}

.slide-project-desc {
  font-size: 0.8125rem;
  line-height: 1.6;
  color: #cbd5e1;
  margin-bottom: 20px;
}

/* Glass Metrics inside Slide */
.slide-metrics-cards {
  display: grid;
  grid-template-cols: repeat(3, 1fr);
  gap: 12px;
  margin-bottom: 24px;
}

.slide-metric-box {
  background-color: rgba(255, 255, 255, 0.02);
  border: 1px solid rgba(255, 255, 255, 0.06);
  border-radius: 8px;
  padding: 10px;
  display: flex;
  flex-direction: column;
}

.slide-metric-box.highlighted {
  background-color: rgba(109, 40, 255, 0.08);
  border-color: rgba(109, 40, 255, 0.2);
}

.metric-hdr {
  font-size: 0.625rem;
  font-weight: 700;
  color: #94a3b8;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-bottom: 4px;
}

.metric-v {
  font-family: var(--font-heading);
  font-size: 0.875rem;
  font-weight: 800;
}

.metric-v.text-red { color: #EF4444; }
.metric-v.text-green { color: #10B981; }
.metric-v.text-purple { color: #a275ff; }

/* Tag list + buttons */
.slide-footer-tags {
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.glowing-pills {
  display: flex;
  flex-wrap: wrap;
  gap: 6px;
}

.glowing-pills span {
  font-size: 0.65rem;
  font-weight: 700;
  color: #cbd5e1;
  background-color: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  padding: 4px 8px;
  border-radius: 4px;
}

.slide-ctas {
  display: flex;
  gap: 12px;
}

.slide-ctas .btn {
  padding: 10px 20px;
  font-size: 0.75rem;
  font-weight: 700;
  border-radius: 100px;
}

.slide-ctas .btn-outline-white {
  border: 1px solid rgba(255, 255, 255, 0.15);
  color: var(--white);
}

.slide-ctas .btn-outline-white:hover {
  background-color: rgba(255, 255, 255, 0.05);
  border-color: var(--white);
}

/* Dashboard Visual Side */
.slide-visual-side {
  width: 100%;
}

.dashboard-canvas {
  background-color: rgba(3, 8, 17, 0.6);
  border: 1px solid rgba(255, 255, 255, 0.05);
  border-radius: var(--radius-lg);
  box-shadow: 0 20px 50px rgba(0,0,0,0.4);
  padding: 20px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.canvas-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
  padding-bottom: 12px;
  margin-bottom: 12px;
}

.canvas-title {
  font-size: 0.7rem;
  font-weight: 700;
  color: #cbd5e1;
  display: flex;
  align-items: center;
  gap: 6px;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.canvas-title i {
  color: var(--primary-purple);
}

.canvas-status {
  font-size: 0.6rem;
  font-weight: 800;
  padding: 3px 8px;
  border-radius: 4px;
  letter-spacing: 0.05em;
}

.canvas-status.green {
  background-color: rgba(16, 185, 129, 0.1);
  color: #10B981;
}

.visual-svg {
  width: 100%;
  height: auto;
  aspect-ratio: 1.5;
}

/* SVG Animations */
.pulse-node {
  animation: nodePulse 2s infinite alternate;
}

@keyframes nodePulse {
  0% { transform: scale(1); opacity: 0.7; }
  100% { transform: scale(1.2); opacity: 1; }
}

.dash-flow-up {
  stroke-dasharray: 4 4;
  animation: flowUp 2s linear infinite;
}

@keyframes flowUp {
  to {
    stroke-dashoffset: -20;
  }
}

.flow-signal-1 {
  animation: flowAlongLine1 3s infinite linear;
}

.flow-signal-2 {
  animation: flowAlongLine2 4s infinite linear;
}

@keyframes flowAlongLine1 {
  0% { cx: 80; cy: 150; }
  50% { cx: 200; cy: 80; }
  100% { cx: 380; cy: 100; }
}

@keyframes flowAlongLine2 {
  0% { cx: 80; cy: 150; }
  50% { cx: 200; cy: 220; }
  100% { cx: 380; cy: 200; }
}

.map-path-draw {
  stroke-dasharray: 1000;
  stroke-dashoffset: 1000;
  animation: pathDraw 6s forwards infinite alternate;
}

@keyframes pathDraw {
  to { stroke-dashoffset: 0; }
}

.shield-pulse {
  animation: shieldPulse 3s infinite alternate;
}

@keyframes shieldPulse {
  0% { filter: drop-shadow(0 0 2px rgba(16, 185, 129, 0.2)); }
  100% { filter: drop-shadow(0 0 10px rgba(16, 185, 129, 0.6)); }
}

.attack-vector-1 {
  animation: threatAttack1 3s infinite linear;
}

.attack-vector-2 {
  animation: threatAttack2 4.2s infinite linear;
}

@keyframes threatAttack1 {
  0% { cx: 50; cy: 130; opacity: 1; }
  70% { cx: 180; cy: 110; opacity: 1; }
  75% { cx: 180; cy: 110; opacity: 0; }
  100% { cx: 180; cy: 110; opacity: 0; }
}

@keyframes threatAttack2 {
  0% { cx: 450; cy: 110; opacity: 1; }
  70% { cx: 320; cy: 130; opacity: 1; }
  75% { cx: 320; cy: 130; opacity: 0; }
  100% { cx: 320; cy: 130; opacity: 0; }
}

/* Outro Slide */
.slide-outro {
  padding: 170px 60px 80px 180px !important; /* Standard spacing for outro slide centering */
}

.slide-outro-content {
  max-width: 800px;
  text-align: center;
  margin: 0 auto;
}

.outro-title {
  font-size: clamp(28px, 3.2vw, 42px);
  font-weight: 800;
  line-height: 1.25;
  color: var(--white);
  margin-bottom: 24px;
}

.outro-desc {
  font-size: clamp(14px, 1.1vw, 17px);
  color: #cbd5e1;
  line-height: 1.7;
  margin-bottom: 40px;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
}

.outro-buttons {
  display: flex;
  justify-content: center;
  gap: 20px;
}

/* Bottom Progress Nav */
.story-bottom-nav {
  position: absolute;
  bottom: 32px;
  left: 50%;
  transform: translateX(-50%);
  width: 320px;
  z-index: 12;
}

.slide-progress-line {
  position: relative;
  width: 100%;
  height: 2px;
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 100px;
}

.progress-fill-bar {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 0;
  background-color: var(--primary-purple);
  box-shadow: 0 0 8px var(--primary-purple);
  transition: width 0.1s ease-out;
}

.progress-dots {
  position: absolute;
  top: 50%;
  left: 0;
  width: 100%;
  transform: translateY(-50%);
  display: flex;
  justify-content: space-between;
}

.prog-dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background-color: rgba(255, 255, 255, 0.2);
  cursor: pointer;
  transition: all var(--transition-fast);
}

.prog-dot.active {
  background-color: var(--primary-purple);
  box-shadow: 0 0 10px var(--primary-purple);
  transform: scale(1.3);
}

/* Responsive Overrides: Vertically scroll stacked layout on mobile devices */
@media (max-width: 991px) {
  .featured-storyteller {
    height: auto;
    overflow: visible;
  }
  
  .timeline-nav {
    display: none; /* Hide timeline navigation */
  }

  .story-header-fixed {
    position: relative;
    top: 0;
    left: 0;
    right: 0;
    padding: 80px 24px 20px 24px;
  }

  .story-header-content {
    grid-template-cols: 1fr;
    gap: 32px;
  }

  .header-counters-row {
    flex-wrap: wrap;
    gap: 16px;
  }

  .header-counter-item {
    flex-grow: 1;
    min-width: 120px;
  }

  .story-slides-wrapper {
    display: flex;
    flex-direction: column;
    width: 100% !important;
    height: auto;
  }

  .story-slide {
    width: 100%;
    height: auto;
    padding: 60px 24px;
  }

  .slide-grid {
    grid-template-cols: 1fr;
    gap: 40px;
  }

  .story-bottom-nav {
    display: none; /* Hide progress bar */
  }

  .outro-buttons {
    flex-direction: column;
    gap: 16px;
  }
}
</style>
