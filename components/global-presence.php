<!-- ============================================================
     GLOBAL DELIVERY NETWORK – Production Enterprise Operations Center
     ============================================================ -->
<section id="presence" class="presence-section" aria-label="Global Operations Network">
  
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

    <!-- 2-Column Desktop Layout: Left 60% Map / Right 40% Live Operations KPI Panel -->
    <div class="presence-operations-grid">
      
      <!-- ============================================================
           LEFT 60%: Realistic Vector World Map & Orbital Network
           ============================================================ -->
      <div class="ops-map-wrapper" data-aos="fade-right">
        <div class="ops-map-card">
          
          <!-- Capability Chips Overlay around Map -->
          <div class="g-capability-chip chip-1"><i class="fa-solid fa-code text-purple"></i> Enterprise Software</div>
          <div class="g-capability-chip chip-2"><i class="fa-solid fa-cloud text-blue"></i> Cloud Engineering</div>
          <div class="g-capability-chip chip-3"><i class="fa-solid fa-brain text-purple"></i> AI Solutions</div>
          <div class="g-capability-chip chip-4"><i class="fa-solid fa-microchip text-green"></i> IoT Systems</div>
          <div class="g-capability-chip chip-5"><i class="fa-solid fa-shield-halved text-blue"></i> Cyber Security</div>
          <div class="g-capability-chip chip-6"><i class="fa-solid fa-database text-purple"></i> Data Platforms</div>

          <!-- SVG World Map with Detailed Continent Paths -->
          <svg viewBox="0 0 1000 500" class="ops-world-map" aria-hidden="true">
            <defs>
              <linearGradient id="netArcGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#6D28FF"/>
                <stop offset="50%" stop-color="#3B82F6"/>
                <stop offset="100%" stop-color="#10B981"/>
              </linearGradient>

              <!-- Radial Glow for Highlighted Node Countries -->
              <radialGradient id="countryGlowGrad" cx="50%" cy="50%" r="50%">
                <stop offset="0%" stop-color="rgba(109, 40, 255, 0.4)"/>
                <stop offset="100%" stop-color="rgba(59, 130, 246, 0.08)"/>
              </radialGradient>
            </defs>

            <!-- Blueprint Coordinate Grid Lines -->
            <g stroke="rgba(255,255,255,0.035)" stroke-width="1">
              <line x1="150" y1="0" x2="150" y2="500"/>
              <line x1="350" y1="0" x2="350" y2="500"/>
              <line x1="550" y1="0" x2="550" y2="500"/>
              <line x1="750" y1="0" x2="750" y2="500"/>
              <line x1="950" y1="0" x2="950" y2="500"/>
              <line x1="0" y1="125" x2="1000" y2="125"/>
              <line x1="0" y1="250" x2="1000" y2="250"/>
              <line x1="0" y1="375" x2="1000" y2="375"/>
            </g>

            <!-- Detailed Continent Outlines (Thin Stroke, Ultra-Subtle Fill) -->
            <g fill="rgba(255, 255, 255, 0.02)" stroke="rgba(255, 255, 255, 0.12)" stroke-width="1.2" stroke-linejoin="round">
              
              <!-- North America -->
              <path d="M 80,75 L 110,65 L 140,55 L 190,50 L 240,65 L 280,75 L 295,95 L 280,120 L 260,135 L 245,160 L 225,180 L 210,210 L 190,225 L 175,210 L 160,195 L 145,175 L 130,160 L 115,145 L 95,130 L 75,115 L 70,95 Z"/>
              <path d="M 230,35 L 260,25 L 280,35 L 265,55 L 240,45 Z"/> <!-- Greenland -->

              <!-- South America -->
              <path d="M 220,240 L 250,230 L 285,255 L 305,290 L 310,330 L 290,370 L 270,410 L 250,430 L 235,410 L 225,370 L 220,330 L 210,290 L 205,260 Z"/>

              <!-- Europe -->
              <path d="M 430,75 L 460,65 L 500,60 L 530,75 L 545,95 L 525,115 L 495,120 L 465,115 L 440,110 L 420,95 Z"/>
              <path d="M 410,95 L 425,75 L 440,85 L 420,105 Z"/> <!-- UK & Ireland -->

              <!-- Africa -->
              <path d="M 450,140 L 510,135 L 560,165 L 580,205 L 565,245 L 545,285 L 530,335 L 515,375 L 490,390 L 470,360 L 460,310 L 445,265 L 430,215 L 425,175 Z"/>
              <path d="M 585,310 L 600,300 L 605,335 L 590,345 Z"/> <!-- Madagascar -->

              <!-- Asia & Eurasia -->
              <path d="M 535,70 L 600,55 L 680,50 L 760,55 L 830,70 L 870,95 L 850,130 L 810,150 L 760,165 L 720,185 L 680,210 L 640,195 L 600,175 L 565,150 L 540,120 Z"/>
              <path d="M 830,135 L 850,125 L 860,155 L 840,175 Z"/> <!-- Japan -->

              <!-- Australia & Oceania (Highlighted Governance Region) -->
              <path d="M 770,320 L 830,305 L 890,315 L 935,345 L 940,380 L 910,425 L 850,435 L 790,420 L 765,375 L 755,345 Z" class="map-highlight-country"/>
              <path d="M 945,395 L 965,385 L 970,420 L 950,430 Z"/> <!-- New Zealand -->

            </g>

            <!-- Soft Glowing Highlights on Key Enterprise Hub Countries -->
            <!-- 1. Australia -->
            <ellipse cx="850" cy="370" rx="75" ry="55" fill="url(#countryGlowGrad)"/>
            <!-- 2. India -->
            <ellipse cx="700" cy="235" rx="35" ry="30" fill="url(#countryGlowGrad)"/>
            <!-- 3. Singapore -->
            <ellipse cx="760" cy="275" rx="20" ry="18" fill="url(#countryGlowGrad)"/>
            <!-- 4. UAE -->
            <ellipse cx="630" cy="205" rx="22" ry="18" fill="url(#countryGlowGrad)"/>
            <!-- 5. South Africa -->
            <ellipse cx="510" cy="365" rx="30" ry="25" fill="url(#countryGlowGrad)"/>

            <!-- Continuous Animated Network Connection Routes -->
            <!-- Sydney (875,375) <-> Singapore (760,275) <-> Bangalore (700,235) <-> Dubai (630,205) <-> Johannesburg (510,365) <-> Sydney -->
            <path d="M 875,375 Q 820,310 760,275" fill="none" stroke="url(#netArcGrad1)" stroke-width="2" stroke-dasharray="6 6" class="net-flow-path"/>
            <path d="M 760,275 Q 730,250 700,235" fill="none" stroke="url(#netArcGrad1)" stroke-width="2" stroke-dasharray="6 6" class="net-flow-path"/>
            <path d="M 700,235 Q 665,215 630,205" fill="none" stroke="url(#netArcGrad1)" stroke-width="2" stroke-dasharray="6 6" class="net-flow-path"/>
            <path d="M 630,205 Q 560,270 510,365" fill="none" stroke="url(#netArcGrad1)" stroke-width="2" stroke-dasharray="6 6" class="net-flow-path"/>
            <path d="M 510,365 Q 690,440 875,375" fill="none" stroke="url(#netArcGrad1)" stroke-width="2" stroke-dasharray="6 6" class="net-flow-path"/>

            <!-- Smoothly Traveling Data Particles -->
            <circle cx="875" cy="375" r="3.5" fill="#6D28FF" class="particle-flow-1"/>
            <circle cx="760" cy="275" r="3.5" fill="#3B82F6" class="particle-flow-2"/>
            <circle cx="700" cy="235" r="3.5" fill="#10B981" class="particle-flow-3"/>
          </svg>

          <!-- Central Global Operations Rotating Orbital Ring around Sydney HQ -->
          <div class="sydney-orbital-wrapper" style="top: 75%; left: 87.5%;">
            <div class="orbital-ring"></div>
            <div class="orbital-ring-outer"></div>
          </div>

          <!-- Interactive Enterprise Office Nodes -->
          <!-- 1. Sydney HQ (Dominant Node) -->
          <div class="ops-pin active hq-pin" style="top: 75%; left: 87.5%;" data-office="syd">
            <span class="pin-pulse-halo"></span>
            <i class="fa-solid fa-location-dot pin-icon"></i>
            <div class="pin-badge">🇦🇺 Sydney HQ (Global Governance)</div>
          </div>

          <!-- 2. Bangalore R&D -->
          <div class="ops-pin" style="top: 47%; left: 70%;" data-office="blr">
            <span class="pin-pulse-halo"></span>
            <i class="fa-solid fa-location-dot pin-icon"></i>
            <div class="pin-badge">🇮🇳 Bangalore R&D</div>
          </div>

          <!-- 3. Singapore APAC -->
          <div class="ops-pin" style="top: 55%; left: 76%;" data-office="sgp">
            <span class="pin-pulse-halo"></span>
            <i class="fa-solid fa-location-dot pin-icon"></i>
            <div class="pin-badge">🇸🇬 Singapore Hub</div>
          </div>

          <!-- 4. Dubai UAE -->
          <div class="ops-pin" style="top: 41%; left: 63%;" data-office="dxb">
            <span class="pin-pulse-halo"></span>
            <i class="fa-solid fa-location-dot pin-icon"></i>
            <div class="pin-badge">🇦🇪 Dubai UAE</div>
          </div>

          <!-- 5. Johannesburg Hub -->
          <div class="ops-pin" style="top: 73%; left: 51%;" data-office="jnb">
            <span class="pin-pulse-halo"></span>
            <i class="fa-solid fa-location-dot pin-icon"></i>
            <div class="pin-badge">🇿🇦 Johannesburg Hub</div>
          </div>

          <!-- Dynamic Live Network Event Toast Badges -->
          <div class="live-event-toast toast-1"><i class="fa-solid fa-circle-check text-green"></i> Deployment Complete</div>
          <div class="live-event-toast toast-2"><i class="fa-solid fa-cloud-arrow-up text-blue"></i> Cloud Sync Active</div>
          <div class="live-event-toast toast-3"><i class="fa-solid fa-shield-check text-purple"></i> Security Scan Passed</div>

        </div>
      </div>

      <!-- ============================================================
           RIGHT 40%: Live Operations Panel (Clean KPI Widgets)
           ============================================================ -->
      <div class="ops-panel-wrapper" data-aos="fade-left">
        <div class="ops-dashboard-card">
          
          <div class="dash-top-bar">
            <div class="dash-title">
              <span class="live-dot"></span>
              <span>LIVE OPERATIONS DASHBOARD</span>
            </div>
            <span class="dash-status-badge">HEALTH: 100%</span>
          </div>

          <!-- Office Specific KPI Widgets Panel (Switches on Pin Click) -->
          <!-- 1. Sydney HQ (Default Active) -->
          <div class="office-panel-content active" id="office-syd">
            <div class="office-panel-header">
              <span class="office-flag-emoji">🇦🇺</span>
              <div>
                <h3 class="office-name">Sydney Headquarters</h3>
                <span class="office-role-badge">Global Governance & Architecture</span>
              </div>
            </div>

            <div class="office-live-time-box">
              <div class="time-label"><i class="fa-solid fa-clock"></i> LIVE SYDNEY TIME (AEST)</div>
              <div class="time-value" id="clock-syd">--:--:--</div>
            </div>

            <!-- Clean Enterprise KPI Widgets Grid -->
            <div class="kpi-widget-grid">
              <div class="kpi-widget">
                <span class="widget-label">ACTIVE REGION</span>
                <span class="widget-value text-purple">Sydney HQ</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">ENGINEERING CAPACITY</span>
                <span class="widget-value">250+ Engineers</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">ONLINE TEAMS</span>
                <span class="widget-value">5 Regions 24/7</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">RUNNING PROJECTS</span>
                <span class="widget-value">120+ Platforms</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">SUPPORT STATUS</span>
                <span class="widget-value text-green">Active (< 30m SLA)</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">SYSTEM HEALTH</span>
                <span class="widget-value text-blue">99.99% Operational</span>
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

            <div class="kpi-widget-grid">
              <div class="kpi-widget">
                <span class="widget-label">ACTIVE REGION</span>
                <span class="widget-value text-purple">Bangalore R&D</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">ENGINEERING CAPACITY</span>
                <span class="widget-value">180+ AI Specialists</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">ONLINE TEAMS</span>
                <span class="widget-value">3 Shift Cycles</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">RUNNING PROJECTS</span>
                <span class="widget-value">85+ Active Sprints</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">SUPPORT STATUS</span>
                <span class="widget-value text-green">Active (24/7)</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">SYSTEM HEALTH</span>
                <span class="widget-value text-blue">100% Pipeline</span>
              </div>
            </div>
          </div>

          <!-- 3. Singapore APAC -->
          <div class="office-panel-content" id="office-sgp">
            <div class="office-panel-header">
              <span class="office-flag-emoji">🇸🇬</span>
              <div>
                <h3 class="office-name">Singapore Hub</h3>
                <span class="office-role-badge">Asia-Pacific Regional Ops</span>
              </div>
            </div>

            <div class="office-live-time-box">
              <div class="time-label"><i class="fa-solid fa-clock"></i> LIVE SINGAPORE TIME (SGT)</div>
              <div class="time-value" id="clock-sgp">--:--:--</div>
            </div>

            <div class="kpi-widget-grid">
              <div class="kpi-widget">
                <span class="widget-label">ACTIVE REGION</span>
                <span class="widget-value text-purple">Singapore APAC</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">ENGINEERING CAPACITY</span>
                <span class="widget-value">30+ Regional Devs</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">ONLINE TEAMS</span>
                <span class="widget-value">APAC Shift</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">RUNNING PROJECTS</span>
                <span class="widget-value">40+ Enterprise Apps</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">SUPPORT STATUS</span>
                <span class="widget-value text-green">Active</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">SYSTEM HEALTH</span>
                <span class="widget-value text-blue">99.9% Uptime</span>
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

            <div class="kpi-widget-grid">
              <div class="kpi-widget">
                <span class="widget-label">ACTIVE REGION</span>
                <span class="widget-value text-purple">Dubai UAE</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">ENGINEERING CAPACITY</span>
                <span class="widget-value">25+ Architects</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">ONLINE TEAMS</span>
                <span class="widget-value">MENA Shift</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">RUNNING PROJECTS</span>
                <span class="widget-value">30+ Platforms</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">SUPPORT STATUS</span>
                <span class="widget-value text-green">Active</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">SYSTEM HEALTH</span>
                <span class="widget-value text-blue">100% Operational</span>
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

            <div class="kpi-widget-grid">
              <div class="kpi-widget">
                <span class="widget-label">ACTIVE REGION</span>
                <span class="widget-value text-purple">Johannesburg</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">ENGINEERING CAPACITY</span>
                <span class="widget-value">40+ QA Engineers</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">ONLINE TEAMS</span>
                <span class="widget-value">EMEA Shift</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">RUNNING PROJECTS</span>
                <span class="widget-value">Automated Testing</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">SUPPORT STATUS</span>
                <span class="widget-value text-green">Active</span>
              </div>
              <div class="kpi-widget">
                <span class="widget-label">SYSTEM HEALTH</span>
                <span class="widget-value text-blue">100% Verified</span>
              </div>
            </div>
          </div>

          <!-- Follow-the-Sun Continuous Delivery Timeline -->
          <div class="sun-delivery-box">
            <div class="sun-title"><i class="fa-solid fa-arrows-spin"></i> FOLLOW-THE-SUN DELIVERY WORKFLOW</div>
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
            <div class="feed-title"><i class="fa-solid fa-rss"></i> LIVE GLOBAL NETWORK ACTIVITY</div>
            <div class="feed-message" id="live-feed-msg">
              <i class="fa-solid fa-circle-check text-green"></i> <span>Sydney HQ approved enterprise release deployment</span>
            </div>
          </div>

        </div>
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
        <a href="#services" class="btn btn-g-secondary">Explore Global Delivery Model <i class="fa-solid fa-network-wired"></i></a>
      </div>
    </div>

  </div>
</section>

<!-- Live Clocks & Activity Feed Rotation Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  // 1. Real-Time Timezone Clocks
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

  // 2. Interactive Map Node Selection
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

  // 3. Rotating Activity Feed Ticker
  const feedMessages = [
    "Sydney HQ approved enterprise release deployment",
    "Bangalore R&D completed sprint review & code commit",
    "Johannesburg QA automated security test verification complete",
    "Singapore APAC cloud infrastructure telemetry active",
    "Dubai UAE solutions team synced client discovery roadmap"
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
  padding: 90px 40px;
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
  margin: 0 auto 40px auto;
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
  margin-bottom: 14px;
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
  font-size: clamp(30px, 3vw, 42px);
  font-weight: 800;
  line-height: 1.2;
  color: #FFFFFF;
  margin-bottom: 14px;
}

.presence-desc {
  font-size: 17px;
  line-height: 1.6;
  color: #94A3B8;
}

/* Operations Grid: 60% Map / 40% Dashboard */
.presence-operations-grid {
  display: grid;
  grid-template-columns: 60% calc(40% - 28px);
  gap: 28px;
  align-items: center;
  position: relative;
  z-index: 5;
  max-width: 1440px;
  margin: 0 auto;
}

/* ── Left 60%: Interactive Vector Map ── */
.ops-map-wrapper {
  width: 100%;
}

.ops-map-card {
  position: relative;
  width: 100%;
  background: rgba(15, 30, 66, 0.75);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 28px;
  padding: 24px;
  box-shadow: 0 24px 64px rgba(0, 0, 0, 0.35);
  backdrop-filter: blur(20px);
  box-sizing: border-box;
}

.ops-world-map {
  width: 100%;
  height: auto;
  display: block;
}

.map-highlight-country {
  fill: rgba(109, 40, 255, 0.22);
  stroke: #6D28FF;
  stroke-width: 2;
  filter: drop-shadow(0 0 14px rgba(109, 40, 255, 0.6));
}

.net-flow-path {
  animation: dashFlow 18s linear infinite;
}

@keyframes dashFlow {
  to { stroke-dashoffset: -120; }
}

/* Floating Capability Chips around Map */
.g-capability-chip {
  position: absolute;
  z-index: 12;
  display: flex;
  align-items: center;
  gap: 6px;
  background: rgba(15, 30, 66, 0.85);
  backdrop-filter: blur(12px);
  border: 1px solid rgba(255, 255, 255, 0.14);
  padding: 6px 14px;
  border-radius: 100px;
  font-size: 11px;
  font-weight: 700;
  color: #FFFFFF;
  box-shadow: 0 10px 24px rgba(0, 0, 0, 0.35);
  pointer-events: none;
  animation: chipFloat 4s ease-in-out infinite alternate;
}

@keyframes chipFloat {
  0% { transform: translateY(0); }
  100% { transform: translateY(-5px); }
}

.chip-1 { top: 16px; left: 16px; animation-delay: 0s; }
.chip-2 { top: 16px; right: 16px; animation-delay: 1.2s; }
.chip-3 { top: 50%; left: -10px; transform: translateY(-50%); animation-delay: 0.6s; }
.chip-4 { bottom: 16px; left: 16px; animation-delay: 1.8s; }
.chip-5 { bottom: 16px; right: 16px; animation-delay: 2.4s; }
.chip-6 { top: 50%; right: -10px; transform: translateY(-50%); animation-delay: 0.9s; }

.text-purple { color: #A275FF; }
.text-blue   { color: #3B82F6; }
.text-green  { color: #10B981; }

/* Rotating Orbital Ring around Sydney HQ */
.sydney-orbital-wrapper {
  position: absolute;
  transform: translate(-50%, -50%);
  pointer-events: none;
  z-index: 8;
}

.orbital-ring {
  width: 54px;
  height: 54px;
  border-radius: 50%;
  border: 1.5px dashed rgba(109, 40, 255, 0.6);
  animation: orbitRotate 12s linear infinite;
}

.orbital-ring-outer {
  position: absolute;
  top: -8px;
  left: -8px;
  width: 70px;
  height: 70px;
  border-radius: 50%;
  border: 1px solid rgba(59, 130, 246, 0.25);
  animation: orbitRotateRev 16s linear infinite;
}

@keyframes orbitRotate {
  to { transform: rotate(360deg); }
}

@keyframes orbitRotateRev {
  to { transform: rotate(-360deg); }
}

/* Map Pins */
.ops-pin {
  position: absolute;
  transform: translate(-50%, -50%);
  cursor: pointer;
  z-index: 15;
}

.pin-icon {
  font-size: 18px;
  color: #3B82F6;
  transition: transform 200ms ease;
}

.ops-pin.active .pin-icon {
  color: #6D28FF;
  transform: scale(1.35);
}

.pin-pulse-halo {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 26px;
  height: 26px;
  margin-top: -13px;
  margin-left: -13px;
  border-radius: 50%;
  border: 2px solid #3B82F6;
  animation: haloPulse 3s infinite ease-in-out;
  pointer-events: none;
}

.hq-pin .pin-pulse-halo {
  width: 38px;
  height: 38px;
  margin-top: -19px;
  margin-left: -19px;
  border-color: #6D28FF;
}

@keyframes haloPulse {
  0% { transform: scale(0.6); opacity: 1; }
  100% { transform: scale(1.6); opacity: 0; }
}

.pin-badge {
  position: absolute;
  top: -28px;
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

/* Dynamic Live Network Event Toast Badges */
.live-event-toast {
  position: absolute;
  z-index: 14;
  background: rgba(15, 30, 66, 0.9);
  border: 1px solid rgba(16, 185, 129, 0.4);
  padding: 4px 12px;
  border-radius: 100px;
  font-size: 10.5px;
  font-weight: 700;
  color: #FFFFFF;
  box-shadow: 0 6px 16px rgba(0,0,0,0.3);
  display: flex;
  align-items: center;
  gap: 6px;
  animation: toastFade 6s ease-in-out infinite alternate;
}

.toast-1 { top: 38%; left: 62%; animation-delay: 0s; }
.toast-2 { top: 68%; left: 48%; animation-delay: 2s; }
.toast-3 { top: 48%; left: 78%; animation-delay: 4s; }

@keyframes toastFade {
  0%, 100% { opacity: 0; transform: translateY(4px); }
  20%, 80% { opacity: 1; transform: translateY(0); }
}

/* ── Right 40%: Operations Dashboard ── */
.ops-panel-wrapper {
  width: 100%;
}

.ops-dashboard-card {
  background: rgba(15, 30, 66, 0.85);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 28px;
  padding: 32px;
  box-shadow: 0 24px 64px rgba(0, 0, 0, 0.35);
  backdrop-filter: blur(20px);
  box-sizing: border-box;
}

.dash-top-bar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  padding-bottom: 14px;
  margin-bottom: 20px;
}

.dash-title {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 11.5px;
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
  gap: 12px;
  margin-bottom: 16px;
}

.office-flag-emoji {
  font-size: 28px;
}

.office-name {
  font-family: 'Poppins', sans-serif;
  font-size: 20px;
  font-weight: 800;
  color: #FFFFFF;
  margin-bottom: 2px;
}

.office-role-badge {
  font-size: 11.5px;
  font-weight: 700;
  color: #3B82F6;
}

/* Live Time Box */
.office-live-time-box {
  background: rgba(8, 22, 61, 0.8);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 12px;
  padding: 12px 16px;
  margin-bottom: 18px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.time-label {
  font-size: 10.5px;
  font-weight: 800;
  color: #94A3B8;
  letter-spacing: 0.8px;
  display: flex;
  align-items: center;
  gap: 6px;
}

.time-value {
  font-family: monospace;
  font-size: 16px;
  font-weight: 800;
  color: #A275FF;
}

/* KPI Widget Grid */
.kpi-widget-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px;
  margin-bottom: 20px;
}

.kpi-widget {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.06);
  border-radius: 12px;
  padding: 10px 12px;
  display: flex;
  flex-direction: column;
}

.widget-label {
  font-size: 9.5px;
  font-weight: 800;
  color: #94A3B8;
  letter-spacing: 0.6px;
  margin-bottom: 3px;
}

.widget-value {
  font-family: 'Poppins', sans-serif;
  font-size: 14px;
  font-weight: 800;
  color: #FFFFFF;
}

/* Follow the Sun Delivery Box */
.sun-delivery-box {
  background: rgba(8, 22, 61, 0.6);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 12px;
  padding: 12px 14px;
  margin-bottom: 16px;
}

.sun-title {
  font-size: 9.5px;
  font-weight: 800;
  color: #6D28FF;
  letter-spacing: 0.8px;
  margin-bottom: 6px;
  display: flex;
  align-items: center;
  gap: 6px;
}

.sun-flow {
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-size: 10.5px;
  font-weight: 700;
  color: #E2E8F0;
}

.sun-arrow {
  color: #3B82F6;
  font-size: 9px;
}

/* Live Activity Feed */
.live-feed-box {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.06);
  border-radius: 12px;
  padding: 10px 14px;
}

.feed-title {
  font-size: 9.5px;
  font-weight: 800;
  color: #10B981;
  letter-spacing: 0.8px;
  margin-bottom: 4px;
  display: flex;
  align-items: center;
  gap: 5px;
}

.feed-message {
  font-size: 11.5px;
  color: #CBD5E1;
  display: flex;
  align-items: center;
  gap: 6px;
  transition: opacity 300ms ease;
}

/* Bottom Action Banner */
.presence-bottom-cta {
  max-width: 1440px;
  margin: 50px auto 0 auto;
  background: rgba(15, 30, 66, 0.85);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 24px;
  padding: 32px 40px;
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
  font-size: 20px;
  font-weight: 800;
  color: #FFFFFF;
  margin-bottom: 4px;
}

.cta-text p {
  font-size: 14px;
  color: #94A3B8;
}

.cta-actions {
  display: flex;
  gap: 14px;
  flex-shrink: 0;
}

.btn-g-primary {
  height: 44px;
  padding: 0 24px;
  border-radius: 100px;
  background: linear-gradient(135deg, #6D28FF, #3B82F6);
  color: #FFFFFF;
  font-size: 13.5px;
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
  height: 44px;
  padding: 0 24px;
  border-radius: 100px;
  background: rgba(255, 255, 255, 0.08);
  border: 1.5px solid rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
  font-size: 13.5px;
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
    gap: 36px;
  }

  .presence-bottom-cta {
    flex-direction: column;
    text-align: center;
    gap: 20px;
    padding: 28px 20px;
  }
}

@media (max-width: 767px) {
  .presence-section {
    padding: 60px 20px;
  }

  .ops-dashboard-card {
    padding: 20px 16px;
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
