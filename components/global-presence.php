<!-- ============================================================
     GLOBAL DELIVERY NETWORK – Live Enterprise Operations Dashboard
     ============================================================ -->
<section id="presence" class="presence-section" aria-label="Global Operations Map">
  
  <!-- Blueprint Grid & Radial Glow Background Layers (Dark Navy Theme) -->
  <div class="presence-bg-layers" aria-hidden="true">
    <div class="presence-grid-texture"></div>
    <div class="presence-glow presence-glow--purple"></div>
    <div class="presence-glow presence-glow--blue"></div>
  </div>

  <div class="container">
    
    <!-- Section Header (Max Width 760px, Centered) -->
    <div class="presence-header" data-aos="fade-up">
      <span class="presence-badge">
        <span class="badge-pulse-dot"></span> GLOBAL DELIVERY NETWORK
      </span>
      <h2 class="presence-title">
        Engineering Excellence <span class="gradient-text">Across Continents</span>
      </h2>
      <p class="presence-desc">
        Australian strategy. Global engineering. Around-the-clock delivery through distributed teams, enterprise governance, and secure collaboration.
      </p>
    </div>

    <!-- 2-Column Desktop Grid: Left 60% Interactive Map / Right 40% Live Operations Dashboard -->
    <div class="presence-operations-grid">
      
      <!-- ============================================================
           LEFT 60%: Interactive World Map & Data Network
           ============================================================ -->
      <div class="ops-map-wrapper" data-aos="fade-right">
        <div class="ops-map-card">
          
          <svg viewBox="0 0 1000 500" class="ops-world-map" aria-hidden="true">
            <defs>
              <linearGradient id="gNetGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#6D28FF"/>
                <stop offset="100%" stop-color="#3B82F6"/>
              </linearGradient>
              <linearGradient id="gNetGrad2" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#3B82F6"/>
                <stop offset="100%" stop-color="#10B981"/>
              </linearGradient>
            </defs>

            <!-- Background Grid Coordinates -->
            <g stroke="rgba(255,255,255,0.04)" stroke-width="1">
              <line x1="100" y1="0" x2="100" y2="500"/>
              <line x1="300" y1="0" x2="300" y2="500"/>
              <line x1="500" y1="0" x2="500" y2="500"/>
              <line x1="700" y1="0" x2="700" y2="500"/>
              <line x1="900" y1="0" x2="900" y2="500"/>
              <line x1="0" y1="125" x2="1000" y2="125"/>
              <line x1="0" y1="250" x2="1000" y2="250"/>
              <line x1="0" y1="375" x2="1000" y2="375"/>
            </g>

            <!-- Continents Outlines (Dark Navy Blueprint Palette) -->
            <!-- North America -->
            <path d="M120,90 C180,60 240,70 260,110 C280,150 200,210 180,240 C160,270 140,290 120,250 C100,210 70,170 90,130 Z" fill="rgba(255,255,255,0.015)" stroke="rgba(255,255,255,0.06)" stroke-width="1.5"/>
            <!-- South America -->
            <path d="M180,250 C200,270 240,330 230,370 C220,410 190,430 170,410 C150,390 140,330 150,290 Z" fill="rgba(255,255,255,0.015)" stroke="rgba(255,255,255,0.06)" stroke-width="1.5"/>
            <!-- Eurasia & Asia -->
            <path d="M430,110 C490,70 610,60 740,90 C820,110 870,140 840,190 C810,230 780,270 750,290 C700,310 630,260 570,270 C510,280 470,210 440,190 Z" fill="rgba(255,255,255,0.02)" stroke="rgba(255,255,255,0.08)" stroke-width="1.5"/>
            <!-- Africa -->
            <path d="M460,210 C500,200 550,210 570,250 C590,290 580,350 540,390 C500,430 470,400 460,360 C450,320 440,270 450,230 Z" fill="rgba(255,255,255,0.015)" stroke="rgba(255,255,255,0.06)" stroke-width="1.5"/>

            <!-- Highlighted Key Region: Australia -->
            <path d="M800,330 C860,320 910,340 930,380 C940,410 900,440 860,440 C800,440 770,390 780,360 Z" fill="rgba(109, 40, 255, 0.15)" stroke="#6D28FF" stroke-width="2" class="glowing-country"/>

            <!-- Flight Path Network (Sydney -> Singapore -> Bangalore -> Dubai -> Johannesburg) -->
            <path d="M880,380 Q820,320 760,280" fill="none" stroke="url(#gNetGrad1)" stroke-width="2" stroke-dasharray="6 6" class="ops-flow-path"/>
            <path d="M760,280 Q730,265 700,260" fill="none" stroke="url(#gNetGrad1)" stroke-width="2" stroke-dasharray="6 6" class="ops-flow-path"/>
            <path d="M700,260 Q660,230 630,220" fill="none" stroke="url(#gNetGrad2)" stroke-width="2" stroke-dasharray="6 6" class="ops-flow-path"/>
            <path d="M630,220 Q560,280 530,360" fill="none" stroke="url(#gNetGrad2)" stroke-width="2" stroke-dasharray="6 6" class="ops-flow-path"/>

            <!-- Moving Traveling Data Particles -->
            <circle cx="880" cy="380" r="3.5" fill="#6D28FF" class="particle-syd-sgp"/>
            <circle cx="760" cy="280" r="3.5" fill="#3B82F6" class="particle-sgp-blr"/>
            <circle cx="700" cy="260" r="3.5" fill="#10B981" class="particle-blr-dxb"/>
          </svg>

          <!-- Interactive Office Nodes -->
          <!-- 1. Sydney HQ (Dominant Node) -->
          <div class="ops-pin active hq-pin" style="top: 76%; left: 88%;" data-office="syd">
            <span class="pin-pulse-ring hq-ring"></span>
            <i class="fa-solid fa-location-dot pin-icon"></i>
            <div class="pin-badge">🇦🇺 Sydney HQ (Global Governance)</div>
          </div>

          <!-- 2. Bangalore R&D -->
          <div class="ops-pin" style="top: 52%; left: 70%;" data-office="blr">
            <span class="pin-pulse-ring"></span>
            <i class="fa-solid fa-location-dot pin-icon"></i>
            <div class="pin-badge">🇮🇳 Bangalore R&D</div>
          </div>

          <!-- 3. Singapore APAC -->
          <div class="ops-pin" style="top: 56%; left: 76%;" data-office="sgp">
            <span class="pin-pulse-ring"></span>
            <i class="fa-solid fa-location-dot pin-icon"></i>
            <div class="pin-badge">🇸🇬 Singapore Hub</div>
          </div>

          <!-- 4. Dubai UAE -->
          <div class="ops-pin" style="top: 44%; left: 63%;" data-office="dxb">
            <span class="pin-pulse-ring"></span>
            <i class="fa-solid fa-location-dot pin-icon"></i>
            <div class="pin-badge">🇦🇪 Dubai UAE</div>
          </div>

          <!-- 5. Johannesburg Hub -->
          <div class="ops-pin" style="top: 72%; left: 53%;" data-office="jnb">
            <span class="pin-pulse-ring"></span>
            <i class="fa-solid fa-location-dot pin-icon"></i>
            <div class="pin-badge">🇿🇦 Johannesburg Hub</div>
          </div>

          <!-- Floating Information Chips around Map -->
          <div class="g-map-chip chip-tl"><i class="fa-solid fa-shield-check text-blue"></i> ISO 27001 Certified</div>
          <div class="g-map-chip chip-tr"><i class="fa-solid fa-cloud text-purple"></i> Cloud Native Architecture</div>
          <div class="g-map-chip chip-bl"><i class="fa-solid fa-flag-usa text-green"></i> Australian Standards</div>
          <div class="g-map-chip chip-br"><i class="fa-solid fa-rotate text-blue"></i> Agile Delivery</div>

        </div>
      </div>

      <!-- ============================================================
           RIGHT 40%: Live Operations Dashboard Panel
           ============================================================ -->
      <div class="ops-panel-wrapper" data-aos="fade-left">
        <div class="ops-dashboard-card">
          
          <div class="dash-top-bar">
            <div class="dash-title">
              <span class="live-dot"></span>
              <span>LIVE OPERATIONS CENTER</span>
            </div>
            <span class="dash-status-badge">SYSTEM STABLE</span>
          </div>

          <!-- Office Information Switcher Panels -->
          <!-- 1. Sydney HQ (Default Active) -->
          <div class="office-panel-content active" id="office-syd">
            <div class="office-panel-header">
              <span class="office-flag-emoji">🇦🇺</span>
              <div>
                <h3 class="office-name">Sydney Headquarters</h3>
                <span class="office-role-badge">Global Governance & Architecture</span>
              </div>
            </div>

            <!-- Live Clock & SLAs -->
            <div class="office-live-time-box">
              <div class="time-label"><i class="fa-solid fa-clock"></i> LIVE SYDNEY TIME (AEST)</div>
              <div class="time-value" id="clock-syd">--:--:--</div>
            </div>

            <div class="office-metrics-grid">
              <div class="dash-metric">
                <span class="m-val">< 30 mins</span>
                <span class="m-lbl">SLA Response Time</span>
              </div>
              <div class="dash-metric">
                <span class="m-val">45+</span>
                <span class="m-lbl">Onshore Engineers</span>
              </div>
              <div class="dash-metric">
                <span class="m-val">99.99%</span>
                <span class="m-lbl">Cloud Availability</span>
              </div>
              <div class="dash-metric">
                <span class="m-val">Active</span>
                <span class="m-lbl">Project Governance</span>
              </div>
            </div>
          </div>

          <!-- 2. Bangalore R&D -->
          <div class="office-panel-content" id="office-blr">
            <div class="office-panel-header">
              <span class="office-flag-emoji">🇮🇳</span>
              <div>
                <h3 class="office-name">Bangalore R&D Center</h3>
                <span class="office-role-badge">Global AI & Cloud Engineering</span>
              </div>
            </div>

            <div class="office-live-time-box">
              <div class="time-label"><i class="fa-solid fa-clock"></i> LIVE BANGALORE TIME (IST)</div>
              <div class="time-value" id="clock-blr">--:--:--</div>
            </div>

            <div class="office-metrics-grid">
              <div class="dash-metric">
                <span class="m-val">24×7</span>
                <span class="m-lbl">Shift Operations</span>
              </div>
              <div class="dash-metric">
                <span class="m-val">180+</span>
                <span class="m-lbl">AI & Dev Engineers</span>
              </div>
              <div class="dash-metric">
                <span class="m-val">< 15 mins</span>
                <span class="m-lbl">Code Commit Sync</span>
              </div>
              <div class="dash-metric">
                <span class="m-val">Active</span>
                <span class="m-lbl">R&D Lab Pipeline</span>
              </div>
            </div>
          </div>

          <!-- 3. Singapore APAC -->
          <div class="office-panel-content" id="office-sgp">
            <div class="office-panel-header">
              <span class="office-flag-emoji">🇸🇬</span>
              <div>
                <h3 class="office-name">Singapore Hub</h3>
                <span class="office-role-badge">Asia-Pacific Operations</span>
              </div>
            </div>

            <div class="office-live-time-box">
              <div class="time-label"><i class="fa-solid fa-clock"></i> LIVE SINGAPORE TIME (SGT)</div>
              <div class="time-value" id="clock-sgp">--:--:--</div>
            </div>

            <div class="office-metrics-grid">
              <div class="dash-metric">
                <span class="m-val">APAC</span>
                <span class="m-lbl">Regional Support</span>
              </div>
              <div class="dash-metric">
                <span class="m-val">30+</span>
                <span class="m-lbl">Regional Specialists</span>
              </div>
              <div class="dash-metric">
                <span class="m-val">< 20 mins</span>
                <span class="m-lbl">Support Response</span>
              </div>
              <div class="dash-metric">
                <span class="m-val">Active</span>
                <span class="m-lbl">Enterprise Gateway</span>
              </div>
            </div>
          </div>

          <!-- 4. Dubai UAE -->
          <div class="office-panel-content" id="office-dxb">
            <div class="office-panel-header">
              <span class="office-flag-emoji">🇦🇪</span>
              <div>
                <h3 class="office-name">Dubai UAE Office</h3>
                <span class="office-role-badge">Middle East Operations</span>
              </div>
            </div>

            <div class="office-live-time-box">
              <div class="time-label"><i class="fa-solid fa-clock"></i> LIVE DUBAI TIME (GST)</div>
              <div class="time-value" id="clock-dxb">--:--:--</div>
            </div>

            <div class="office-metrics-grid">
              <div class="dash-metric">
                <span class="m-val">MENA</span>
                <span class="m-lbl">Strategic Operations</span>
              </div>
              <div class="dash-metric">
                <span class="m-val">25+</span>
                <span class="m-lbl">Solutions Architects</span>
              </div>
              <div class="dash-metric">
                <span class="m-val">Active</span>
                <span class="m-lbl">Client Engagement</span>
              </div>
              <div class="dash-metric">
                <span class="m-val">Secure</span>
                <span class="m-lbl">Infrastructure</span>
              </div>
            </div>
          </div>

          <!-- 5. Johannesburg Hub -->
          <div class="office-panel-content" id="office-jnb">
            <div class="office-panel-header">
              <span class="office-flag-emoji">🇿🇦</span>
              <div>
                <h3 class="office-name">Johannesburg Hub</h3>
                <span class="office-role-badge">EMEA Testing & QA Hub</span>
              </div>
            </div>

            <div class="office-live-time-box">
              <div class="time-label"><i class="fa-solid fa-clock"></i> LIVE JOHANNESBURG TIME (SAST)</div>
              <div class="time-value" id="clock-jnb">--:--:--</div>
            </div>

            <div class="office-metrics-grid">
              <div class="dash-metric">
                <span class="m-val">QA & Test</span>
                <span class="m-lbl">Core Competency</span>
              </div>
              <div class="dash-metric">
                <span class="m-val">40+</span>
                <span class="m-lbl">QA Engineers</span>
              </div>
              <div class="dash-metric">
                <span class="m-val">Automated</span>
                <span class="m-lbl">Testing Pipelines</span>
              </div>
              <div class="dash-metric">
                <span class="m-val">Active</span>
                <span class="m-lbl">Security Audits</span>
              </div>
            </div>
          </div>

          <!-- Follow-the-Sun Continuous Delivery Timeline -->
          <div class="sun-delivery-box">
            <div class="sun-title"><i class="fa-solid fa-arrows-spin"></i> FOLLOW-THE-SUN DELIVERY MODEL</div>
            <div class="sun-flow">
              <span class="sun-step">🇦🇺 Australia <small>(Arch)</small></span>
              <i class="fa-solid fa-arrow-right sun-arrow"></i>
              <span class="sun-step">🇮🇳 India <small>(Dev)</small></span>
              <i class="fa-solid fa-arrow-right sun-arrow"></i>
              <span class="sun-step">🇿🇦 SA <small>(QA)</small></span>
              <i class="fa-solid fa-arrow-right sun-arrow"></i>
              <span class="sun-step">🇦🇺 Australia <small>(Ship)</small></span>
            </div>
          </div>

          <!-- Real-Time Activity Event Feed -->
          <div class="live-feed-box">
            <div class="feed-title"><i class="fa-solid fa-rss"></i> LIVE GLOBAL ACTIVITY FEED</div>
            <div class="feed-message" id="live-feed-msg">
              <i class="fa-solid fa-circle-check text-green"></i> <span>Sydney HQ approved enterprise release deployment</span>
            </div>
          </div>

        </div>
      </div>

    </div>

    <!-- 4 Live Metric Counters Strip -->
    <div class="presence-kpi-strip" data-aos="fade-up">
      <div class="kpi-box">
        <span class="kpi-val" data-target="120">120+</span>
        <span class="kpi-lbl">Projects Delivered</span>
      </div>
      <div class="kpi-box">
        <span class="kpi-val" data-target="98">98%</span>
        <span class="kpi-lbl">Client Satisfaction</span>
      </div>
      <div class="kpi-box">
        <span class="kpi-val">24/7</span>
        <span class="kpi-lbl">Support Coverage</span>
      </div>
      <div class="kpi-box">
        <span class="kpi-val">5</span>
        <span class="kpi-lbl">Strategic Locations</span>
      </div>
    </div>

    <!-- Bottom Executive Action CTA Banner -->
    <div class="presence-bottom-cta" data-aos="fade-up">
      <div class="cta-text">
        <h3>Ready to Build with a Global Engineering Partner?</h3>
        <p>Connect with our Australian solutions directors to discuss your platform requirements.</p>
      </div>
      <div class="cta-actions">
        <a href="#contact" class="btn btn-g-primary">Schedule Strategy Session <i class="fa-solid fa-arrow-right"></i></a>
        <a href="#services" class="btn btn-g-secondary">Explore Delivery Model <i class="fa-solid fa-network-wired"></i></a>
      </div>
    </div>

  </div>
</section>

<!-- Live Clocks & Activity Feed Rotation Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  // 1. Live Time Clocks (AEST, IST, SGT, GST, SAST)
  const updateClocks = () => {
    const now = new Date();
    
    const timeOptions = (timeZone) => ({
      timeZone,
      hour: '2-digit',
      minute: '2-digit',
      second: '2-digit',
      hour12: true
    });

    const syd = document.getElementById("clock-syd");
    const blr = document.getElementById("clock-blr");
    const sgp = document.getElementById("clock-sgp");
    const dxb = document.getElementById("clock-dxb");
    const jnb = document.getElementById("clock-jnb");

    if (syd) syd.textContent = now.toLocaleTimeString("en-AU", timeOptions("Australia/Sydney"));
    if (blr) blr.textContent = now.toLocaleTimeString("en-IN", timeOptions("Asia/Kolkata"));
    if (sgp) sgp.textContent = now.toLocaleTimeString("en-SG", timeOptions("Asia/Singapore"));
    if (dxb) dxb.textContent = now.toLocaleTimeString("en-AE", timeOptions("Asia/Dubai"));
    if (jnb) jnb.textContent = now.toLocaleTimeString("en-ZA", timeOptions("Africa/Johannesburg"));
  };

  updateClocks();
  setInterval(updateClocks, 1000);

  // 2. Interactive Map Pins Selection
  const pins = document.querySelectorAll(".ops-pin");
  const officePanels = document.querySelectorAll(".office-panel-content");

  pins.forEach(pin => {
    pin.addEventListener("click", () => {
      const officeKey = pin.getAttribute("data-office");
      pins.forEach(p => p.classList.remove("active"));
      officePanels.forEach(op => op.classList.remove("active"));

      pin.classList.add("active");
      const targetPanel = document.getElementById(`office-${officeKey}`);
      if (targetPanel) {
        targetPanel.classList.add("active");
      }
    });
  });

  // 3. Rotating Live Activity Feed
  const feedMessages = [
    "Sydney HQ approved enterprise release deployment",
    "Bangalore R&D completed sprint review & code commit",
    "Johannesburg QA automated security test verification complete",
    "Singapore APAC cloud infrastructure telemetry active",
    "Sydney Strategy team initiated client discovery workshop"
  ];
  let feedIndex = 0;
  const feedEl = document.getElementById("live-feed-msg");

  if (feedEl) {
    setInterval(() => {
      feedIndex = (feedIndex + 1) % feedMessages.length;
      feedEl.style.opacity = 0;
      setTimeout(() => {
        feedEl.querySelector("span").textContent = feedMessages[feedIndex];
        feedEl.style.opacity = 1;
      }, 300);
    }, 4000);
  }
});
</script>

<!-- ============================================================
     GLOBAL OPERATIONS SCOPED STYLES (Dark Navy Theme)
     ============================================================ -->
<style>
.presence-section {
  position: relative;
  padding: 100px 40px;
  background-color: #08163D;
  color: #FFFFFF;
  overflow: hidden;
}

/* Background Layers */
.presence-bg-layers {
  position: absolute;
  inset: 0;
  pointer-events: none;
}

.presence-grid-texture {
  position: absolute;
  inset: 0;
  background-size: 32px 32px;
  background-image:
    linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
    linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
}

.presence-glow {
  position: absolute;
  width: 700px;
  height: 700px;
  border-radius: 50%;
  filter: blur(280px);
  opacity: 0.15;
}

.presence-glow--purple { top: 5%; left: -10%; background: #6D28FF; }
.presence-glow--blue   { bottom: 5%; right: -10%; background: #3B82F6; }

/* Header */
.presence-header {
  text-align: center;
  max-width: 760px;
  margin: 0 auto 50px auto;
  position: relative;
  z-index: 5;
}

.presence-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 6px 18px;
  background: rgba(109, 40, 255, 0.15);
  border: 1px solid rgba(109, 40, 255, 0.4);
  border-radius: 100px;
  font-size: 13px;
  font-weight: 700;
  color: #A275FF;
  letter-spacing: 2px;
  margin-bottom: 16px;
}

.badge-pulse-dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #10B981;
  box-shadow: 0 0 10px #10B981;
  animation: pulseDot 2s infinite;
}

@keyframes pulseDot {
  0% { transform: scale(0.9); opacity: 0.8; }
  50% { transform: scale(1.2); opacity: 1; }
  100% { transform: scale(0.9); opacity: 0.8; }
}

.presence-title {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(32px, 3.2vw, 44px);
  font-weight: 800;
  line-height: 1.2;
  color: #FFFFFF;
  margin-bottom: 16px;
}

.presence-desc {
  font-size: 18px;
  line-height: 1.6;
  color: #94A3B8;
}

/* Operations Grid: 60% Map / 40% Dashboard */
.presence-operations-grid {
  display: grid;
  grid-template-columns: 58% calc(42% - 32px);
  gap: 32px;
  align-items: center;
  position: relative;
  z-index: 5;
  max-width: 1440px;
  margin: 0 auto;
}

/* ── Left 60%: Interactive Map ── */
.ops-map-wrapper {
  width: 100%;
}

.ops-map-card {
  position: relative;
  width: 100%;
  background: rgba(15, 30, 66, 0.7);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 28px;
  padding: 24px;
  box-shadow: 0 24px 64px rgba(0, 0, 0, 0.3);
  backdrop-filter: blur(20px);
  box-sizing: border-box;
}

.ops-world-map {
  width: 100%;
  height: auto;
  display: block;
}

.glowing-country {
  filter: drop-shadow(0 0 12px rgba(109, 40, 255, 0.6));
}

.ops-flow-path {
  animation: dashFlow 20s linear infinite;
}

@keyframes dashFlow {
  to { stroke-dashoffset: -100; }
}

/* Map Pins */
.ops-pin {
  position: absolute;
  transform: translate(-50%, -50%);
  cursor: pointer;
  z-index: 10;
}

.pin-icon {
  font-size: 20px;
  color: #3B82F6;
  transition: transform 200ms ease;
}

.ops-pin.active .pin-icon {
  color: #6D28FF;
  transform: scale(1.3);
}

.pin-pulse-ring {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 28px;
  height: 28px;
  margin-top: -14px;
  margin-left: -14px;
  border-radius: 50%;
  border: 2px solid #3B82F6;
  animation: ringPulse 2s infinite;
  pointer-events: none;
}

.hq-ring {
  width: 40px;
  height: 40px;
  margin-top: -20px;
  margin-left: -20px;
  border-color: #6D28FF;
}

@keyframes ringPulse {
  0% { transform: scale(0.6); opacity: 1; }
  100% { transform: scale(1.6); opacity: 0; }
}

.pin-badge {
  position: absolute;
  top: -30px;
  left: 50%;
  transform: translateX(-50%);
  background: rgba(8, 22, 61, 0.95);
  border: 1px solid rgba(255, 255, 255, 0.15);
  padding: 4px 10px;
  border-radius: 100px;
  font-size: 11px;
  font-weight: 700;
  white-space: nowrap;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
}

/* Floating Chips around Map */
.g-map-chip {
  position: absolute;
  background: rgba(255, 255, 255, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(12px);
  padding: 6px 14px;
  border-radius: 100px;
  font-size: 12px;
  font-weight: 700;
  color: #FFFFFF;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
  pointer-events: none;
  animation: mapChipFloat 4s ease-in-out infinite alternate;
}

@keyframes mapChipFloat {
  0% { transform: translateY(0); }
  100% { transform: translateY(-6px); }
}

.chip-tl { top: 20px; left: 20px; animation-delay: 0s; }
.chip-tr { top: 20px; right: 20px; animation-delay: 1.5s; }
.chip-bl { bottom: 20px; left: 20px; animation-delay: 0.8s; }
.chip-br { bottom: 20px; right: 20px; animation-delay: 2.2s; }

/* ── Right 40%: Operations Dashboard ── */
.ops-panel-wrapper {
  width: 100%;
}

.ops-dashboard-card {
  background: rgba(15, 30, 66, 0.85);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 28px;
  padding: 36px;
  box-shadow: 0 24px 64px rgba(0, 0, 0, 0.35);
  backdrop-filter: blur(20px);
  box-sizing: border-box;
}

.dash-top-bar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  padding-bottom: 16px;
  margin-bottom: 24px;
}

.dash-title {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 12px;
  font-weight: 800;
  letter-spacing: 1.5px;
  color: #94A3B8;
}

.live-dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #10B981;
  box-shadow: 0 0 10px #10B981;
}

.dash-status-badge {
  padding: 3px 10px;
  background: rgba(16, 185, 129, 0.15);
  border: 1px solid rgba(16, 185, 129, 0.3);
  border-radius: 100px;
  font-size: 11px;
  font-weight: 800;
  color: #10B981;
}

.office-panel-content {
  display: none;
}

.office-panel-content.active {
  display: block;
}

.office-panel-header {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 20px;
}

.office-flag-emoji {
  font-size: 32px;
}

.office-name {
  font-family: 'Poppins', sans-serif;
  font-size: 22px;
  font-weight: 800;
  color: #FFFFFF;
  margin-bottom: 2px;
}

.office-role-badge {
  font-size: 12px;
  font-weight: 700;
  color: #3B82F6;
}

/* Live Time Box */
.office-live-time-box {
  background: rgba(8, 22, 61, 0.8);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 14px;
  padding: 14px 18px;
  margin-bottom: 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.time-label {
  font-size: 11px;
  font-weight: 800;
  color: #94A3B8;
  letter-spacing: 1px;
  display: flex;
  align-items: center;
  gap: 6px;
}

.time-value {
  font-family: monospace;
  font-size: 18px;
  font-weight: 800;
  color: #A275FF;
}

/* Dashboard Metrics 2x2 */
.office-metrics-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 12px;
  margin-bottom: 24px;
}

.dash-metric {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.06);
  border-radius: 14px;
  padding: 12px 14px;
  display: flex;
  flex-direction: column;
}

.m-val {
  font-family: 'Poppins', sans-serif;
  font-size: 16px;
  font-weight: 800;
  color: #FFFFFF;
  margin-bottom: 2px;
}

.m-lbl {
  font-size: 11px;
  color: #94A3B8;
}

/* Follow the Sun Delivery Box */
.sun-delivery-box {
  background: rgba(8, 22, 61, 0.6);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 14px;
  padding: 14px 16px;
  margin-bottom: 20px;
}

.sun-title {
  font-size: 10px;
  font-weight: 800;
  color: #6D28FF;
  letter-spacing: 1px;
  margin-bottom: 8px;
  display: flex;
  align-items: center;
  gap: 6px;
}

.sun-flow {
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-size: 11px;
  font-weight: 700;
  color: #E2E8F0;
}

.sun-arrow {
  color: #3B82F6;
  font-size: 10px;
}

/* Live Activity Feed */
.live-feed-box {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.06);
  border-radius: 14px;
  padding: 12px 16px;
}

.feed-title {
  font-size: 10px;
  font-weight: 800;
  color: #10B981;
  letter-spacing: 1px;
  margin-bottom: 6px;
  display: flex;
  align-items: center;
  gap: 6px;
}

.feed-message {
  font-size: 12px;
  color: #CBD5E1;
  display: flex;
  align-items: center;
  gap: 8px;
  transition: opacity 300ms ease;
}

/* KPI Metrics Strip */
.presence-kpi-strip {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  max-width: 1440px;
  margin: 60px auto 0 auto;
  position: relative;
  z-index: 5;
}

.kpi-box {
  background: rgba(15, 30, 66, 0.6);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 20px;
  padding: 24px;
  text-align: center;
}

.kpi-val {
  font-family: 'Poppins', sans-serif;
  font-size: 32px;
  font-weight: 800;
  color: #A275FF;
  display: block;
  margin-bottom: 4px;
}

.kpi-lbl {
  font-size: 13px;
  color: #94A3B8;
  font-weight: 600;
}

/* Bottom Action Banner */
.presence-bottom-cta {
  max-width: 1440px;
  margin: 60px auto 0 auto;
  background: rgba(15, 30, 66, 0.85);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 28px;
  padding: 40px 48px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  position: relative;
  z-index: 5;
  box-shadow: 0 20px 60px rgba(0,0,0,0.4);
  box-sizing: border-box;
}

.cta-text h3 {
  font-family: 'Poppins', sans-serif;
  font-size: 22px;
  font-weight: 800;
  color: #FFFFFF;
  margin-bottom: 6px;
}

.cta-text p {
  font-size: 15px;
  color: #94A3B8;
}

.cta-actions {
  display: flex;
  gap: 16px;
  flex-shrink: 0;
}

.btn-g-primary {
  height: 48px;
  padding: 0 26px;
  border-radius: 100px;
  background: linear-gradient(135deg, #6D28FF, #3B82F6);
  color: #FFFFFF;
  font-size: 14px;
  font-weight: 700;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  border: none;
  box-shadow: 0 4px 16px rgba(109, 40, 255, 0.35);
  transition: all 250ms ease;
}

.btn-g-primary:hover {
  box-shadow: 0 8px 24px rgba(109, 40, 255, 0.55);
  transform: translateY(-2px);
  color: #FFFFFF;
}

.btn-g-secondary {
  height: 48px;
  padding: 0 26px;
  border-radius: 100px;
  background: rgba(255, 255, 255, 0.08);
  border: 1.5px solid rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
  font-size: 14px;
  font-weight: 700;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: all 250ms ease;
}

.btn-g-secondary:hover {
  background: rgba(255, 255, 255, 0.15);
  border-color: #3B82F6;
  color: #FFFFFF;
  transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 1199px) {
  .presence-operations-grid {
    grid-template-columns: 1fr;
    gap: 40px;
  }

  .presence-kpi-strip {
    grid-template-columns: repeat(2, 1fr);
  }

  .presence-bottom-cta {
    flex-direction: column;
    text-align: center;
    gap: 24px;
    padding: 32px 24px;
  }
}

@media (max-width: 767px) {
  .presence-section {
    padding: 70px 20px;
  }

  .ops-dashboard-card {
    padding: 24px 20px;
  }

  .presence-kpi-strip {
    grid-template-columns: 1fr;
  }

  .cta-actions {
    flex-direction: column;
    width: 100%;
  }

  .cta-actions .btn {
    width: 100%;
  }
}
</style>
