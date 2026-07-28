<!-- ============================================================
     GLOBAL OPERATIONS SECTION – Premium Interactive Map & Hub Panel
     ============================================================ -->
<section id="presence" class="presence-section" aria-label="Global Operations Map">
  
  <!-- Subtle Blueprint & Radial Glow Background Layers -->
  <div class="presence-bg-layers" aria-hidden="true">
    <div class="presence-grid-texture"></div>
    <div class="presence-glow presence-glow--purple"></div>
    <div class="presence-glow presence-glow--blue"></div>
  </div>

  <div class="container">
    
    <!-- Section Header (Centered, Max-width 700px) -->
    <div class="presence-header" data-aos="fade-up">
      <span class="presence-badge">
        <span class="badge-pulse-dot"></span> GLOBAL OPERATIONS
      </span>
      <h2 class="presence-title">
        Engineering Excellence <span class="gradient-text">Across Continents</span>
      </h2>
      <p class="presence-desc">
        Supporting Australian enterprises through globally distributed engineering teams, local business presence, and 24×7 delivery operations.
      </p>
    </div>

    <!-- Statistics Strip (4 Compact Enterprise Metrics Above Map) -->
    <div class="presence-stats-strip" data-aos="fade-up" data-aos-delay="100">
      <div class="pstat-item">
        <div class="pstat-val">24×7</div>
        <div class="pstat-lbl">Engineering Support</div>
      </div>
      <div class="pstat-item">
        <div class="pstat-val">5</div>
        <div class="pstat-lbl">Global Locations</div>
      </div>
      <div class="pstat-item">
        <div class="pstat-val">120+</div>
        <div class="pstat-lbl">Projects Delivered</div>
      </div>
      <div class="pstat-item">
        <div class="pstat-val">99.9%</div>
        <div class="pstat-lbl">Infrastructure Availability</div>
      </div>
    </div>

    <!-- 2-Column Split: Left 65% Interactive World Map / Right 35% Floating Office Panel -->
    <div class="presence-operations-grid">
      
      <!-- LEFT (65%): Interactive SVG World Map -->
      <div class="ops-map-wrapper" data-aos="fade-right">
        <div class="ops-map-card">
          
          <svg viewBox="0 0 1000 500" class="ops-world-map" aria-hidden="true">
            <defs>
              <linearGradient id="arcGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#6D28FF"/>
                <stop offset="100%" stop-color="#3B82F6"/>
              </linearGradient>
              <linearGradient id="arcGrad2" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#3B82F6"/>
                <stop offset="100%" stop-color="#10B981"/>
              </linearGradient>
            </defs>

            <!-- Background Grid Coordinates -->
            <g stroke="rgba(255,255,255,0.03)" stroke-width="1">
              <line x1="100" y1="0" x2="100" y2="500"/>
              <line x1="300" y1="0" x2="300" y2="500"/>
              <line x1="500" y1="0" x2="500" y2="500"/>
              <line x1="700" y1="0" x2="700" y2="500"/>
              <line x1="900" y1="0" x2="900" y2="500"/>
              <line x1="0" y1="125" x2="1000" y2="125"/>
              <line x1="0" y1="250" x2="1000" y2="250"/>
              <line x1="0" y1="375" x2="1000" y2="375"/>
            </g>

            <!-- Continents Outlines (Dark Navy Theme) -->
            <!-- North America -->
            <path d="M120,90 C180,60 240,70 260,110 C280,150 200,210 180,240 C160,270 140,290 120,250 C100,210 70,170 90,130 Z" fill="rgba(255,255,255,0.015)" stroke="rgba(255,255,255,0.05)" stroke-width="1.5"/>
            <!-- South America -->
            <path d="M180,250 C200,270 240,330 230,370 C220,410 190,430 170,410 C150,390 140,330 150,290 Z" fill="rgba(255,255,255,0.015)" stroke="rgba(255,255,255,0.05)" stroke-width="1.5"/>
            <!-- Eurasia & Asia -->
            <path d="M430,110 C490,70 610,60 740,90 C820,110 870,140 840,190 C810,230 780,270 750,290 C700,310 630,260 570,270 C510,280 470,210 440,190 Z" fill="rgba(255,255,255,0.02)" stroke="rgba(255,255,255,0.06)" stroke-width="1.5"/>
            <!-- Africa -->
            <path d="M460,210 C500,200 550,210 570,250 C590,290 580,350 540,390 C500,430 470,400 460,360 C450,320 440,270 450,230 Z" fill="rgba(255,255,255,0.015)" stroke="rgba(255,255,255,0.05)" stroke-width="1.5"/>

            <!-- Highlighted Key Countries -->
            <!-- Australia -->
            <path d="M800,330 C860,320 910,340 930,380 C940,410 900,440 860,440 C800,440 770,390 780,360 Z" fill="rgba(109,40,255,0.12)" stroke="#6D28FF" stroke-width="2" class="glowing-country"/>

            <!-- Flight Path Connections (Animated Flow Lines) -->
            <!-- Sydney (880,380) <-> Singapore (760,280) <-> Bangalore (700,260) <-> Dubai (630,220) <-> Johannesburg (530,360) -->
            <path d="M880,380 Q820,320 760,280" fill="none" stroke="url(#arcGrad1)" stroke-width="2" stroke-dasharray="6 6" class="ops-flow-path"/>
            <path d="M760,280 Q730,265 700,260" fill="none" stroke="url(#arcGrad1)" stroke-width="2" stroke-dasharray="6 6" class="ops-flow-path"/>
            <path d="M700,260 Q660,230 630,220" fill="none" stroke="url(#arcGrad2)" stroke-width="2" stroke-dasharray="6 6" class="ops-flow-path"/>
            <path d="M630,220 Q560,280 530,360" fill="none" stroke="url(#arcGrad2)" stroke-width="2" stroke-dasharray="6 6" class="ops-flow-path"/>

            <!-- Moving Connection Particles -->
            <circle cx="880" cy="380" r="3" fill="#6D28FF" class="particle-syd-sgp"/>
            <circle cx="760" cy="280" r="3" fill="#3B82F6" class="particle-sgp-blr"/>
            <circle cx="700" cy="260" r="3" fill="#10B981" class="particle-blr-dxb"/>
          </svg>

          <!-- Interactive Pins (5 Locations) -->
          <!-- 1. Sydney HQ -->
          <div class="ops-pin active" style="top: 76%; left: 88%;" data-office="syd">
            <span class="pin-pulse-ring"></span>
            <i class="fa-solid fa-location-dot pin-icon"></i>
            <div class="pin-badge">🇦🇺 Sydney HQ</div>
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
            <div class="pin-badge">🇸🇬 Singapore</div>
          </div>

          <!-- 4. Dubai UAE -->
          <div class="ops-pin" style="top: 44%; left: 63%;" data-office="dxb">
            <span class="pin-pulse-ring"></span>
            <i class="fa-solid fa-location-dot pin-icon"></i>
            <div class="pin-badge">🇦🇪 Dubai</div>
          </div>

          <!-- 5. Johannesburg Hub -->
          <div class="ops-pin" style="top: 72%; left: 53%;" data-office="jnb">
            <span class="pin-pulse-ring"></span>
            <i class="fa-solid fa-location-dot pin-icon"></i>
            <div class="pin-badge">🇿🇦 Johannesburg</div>
          </div>

        </div>
      </div>

      <!-- RIGHT (35%): Floating Glass Office Information Panel -->
      <div class="ops-panel-wrapper" data-aos="fade-left">
        <div class="floating-office-glass-card">
          
          <!-- Office 1: Sydney HQ (Default Active) -->
          <div class="office-panel-content active" id="office-syd">
            <div class="office-panel-header">
              <span class="office-flag-emoji">🇦🇺</span>
              <div>
                <h3 class="office-name">Sydney HQ</h3>
                <span class="office-role-badge">Corporate Headquarters</span>
              </div>
            </div>

            <!-- Live Clock Row -->
            <div class="office-live-time-box">
              <div class="time-label"><i class="fa-solid fa-clock"></i> LIVE LOCAL TIME (AEST)</div>
              <div class="time-value" id="clock-syd">--:--:--</div>
            </div>

            <!-- Office Details Table -->
            <div class="office-meta-list">
              <div class="meta-item"><i class="fa-solid fa-building"></i> <span>Level 14, 275 Alfred St, North Sydney NSW 2060</span></div>
              <div class="meta-item"><i class="fa-solid fa-business-time"></i> <span>08:30 AM – 06:00 PM AEST</span></div>
              <div class="meta-item"><i class="fa-solid fa-phone"></i> <a href="tel:+61468403743">+61 468 403 743</a></div>
              <div class="meta-item"><i class="fa-solid fa-envelope"></i> <a href="mailto:sydney@jaiton.com">sydney@jaiton.com</a></div>
              <div class="meta-item"><i class="fa-solid fa-users"></i> <span>45+ Strategy & Architecture Squad</span></div>
              <div class="meta-item"><i class="fa-solid fa-language"></i> <span>English (AU/US)</span></div>
            </div>

            <div class="office-action-buttons">
              <a href="#contact" class="btn btn-primary btn-magnetic">Contact Team <i class="fa-solid fa-arrow-right"></i></a>
              <a href="#contact" class="btn btn-secondary">Get Directions <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
          </div>

          <!-- Office 2: Bangalore R&D -->
          <div class="office-panel-content" id="office-blr">
            <div class="office-panel-header">
              <span class="office-flag-emoji">🇮🇳</span>
              <div>
                <h3 class="office-name">Bangalore R&D</h3>
                <span class="office-role-badge">Global Engineering Hub</span>
              </div>
            </div>

            <div class="office-live-time-box">
              <div class="time-label"><i class="fa-solid fa-clock"></i> LIVE LOCAL TIME (IST)</div>
              <div class="time-value" id="clock-blr">--:--:--</div>
            </div>

            <div class="office-meta-list">
              <div class="meta-item"><i class="fa-solid fa-building"></i> <span>Prestige Trade Tower, Palace Rd, Bengaluru 560001</span></div>
              <div class="meta-item"><i class="fa-solid fa-business-time"></i> <span>24×7 Continuous Engineering Shift</span></div>
              <div class="meta-item"><i class="fa-solid fa-phone"></i> <a href="tel:+918040927700">+91 80 4092 7700</a></div>
              <div class="meta-item"><i class="fa-solid fa-envelope"></i> <a href="mailto:india@jaiton.com">india@jaiton.com</a></div>
              <div class="meta-item"><i class="fa-solid fa-users"></i> <span>180+ Engineers & AI Researchers</span></div>
              <div class="meta-item"><i class="fa-solid fa-language"></i> <span>English, Hindi, Kannada</span></div>
            </div>

            <div class="office-action-buttons">
              <a href="#contact" class="btn btn-primary btn-magnetic">Contact Team <i class="fa-solid fa-arrow-right"></i></a>
              <a href="#contact" class="btn btn-secondary">Get Directions <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
          </div>

          <!-- Office 3: Singapore APAC -->
          <div class="office-panel-content" id="office-sgp">
            <div class="office-panel-header">
              <span class="office-flag-emoji">🇸🇬</span>
              <div>
                <h3 class="office-name">Singapore Hub</h3>
                <span class="office-role-badge">Asia-Pacific Regional Ops</span>
              </div>
            </div>

            <div class="office-live-time-box">
              <div class="time-label"><i class="fa-solid fa-clock"></i> LIVE LOCAL TIME (SGT)</div>
              <div class="time-value" id="clock-sgp">--:--:--</div>
            </div>

            <div class="office-meta-list">
              <div class="meta-item"><i class="fa-solid fa-building"></i> <span>Marina Bay Financial Centre Tower 1, Singapore 018981</span></div>
              <div class="meta-item"><i class="fa-solid fa-business-time"></i> <span>09:00 AM – 06:30 PM SGT</span></div>
              <div class="meta-item"><i class="fa-solid fa-phone"></i> <a href="tel:+6568085500">+65 6808 5500</a></div>
              <div class="meta-item"><i class="fa-solid fa-envelope"></i> <a href="mailto:singapore@jaiton.com">singapore@jaiton.com</a></div>
              <div class="meta-item"><i class="fa-solid fa-users"></i> <span>30+ Enterprise Advisory Specialists</span></div>
              <div class="meta-item"><i class="fa-solid fa-language"></i> <span>English, Mandarin</span></div>
            </div>

            <div class="office-action-buttons">
              <a href="#contact" class="btn btn-primary btn-magnetic">Contact Team <i class="fa-solid fa-arrow-right"></i></a>
              <a href="#contact" class="btn btn-secondary">Get Directions <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
          </div>

          <!-- Office 4: Dubai UAE -->
          <div class="office-panel-content" id="office-dxb">
            <div class="office-panel-header">
              <span class="office-flag-emoji">🇦🇪</span>
              <div>
                <h3 class="office-name">Dubai Center</h3>
                <span class="office-role-badge">Middle East Delivery Hub</span>
              </div>
            </div>

            <div class="office-live-time-box">
              <div class="time-label"><i class="fa-solid fa-clock"></i> LIVE LOCAL TIME (GST)</div>
              <div class="time-value" id="clock-dxb">--:--:--</div>
            </div>

            <div class="office-meta-list">
              <div class="meta-item"><i class="fa-solid fa-building"></i> <span>DIFC Gate Precinct 4, Dubai, UAE</span></div>
              <div class="meta-item"><i class="fa-solid fa-business-time"></i> <span>08:00 AM – 05:00 PM GST</span></div>
              <div class="meta-item"><i class="fa-solid fa-phone"></i> <a href="tel:+97143627000">+971 4 362 7000</a></div>
              <div class="meta-item"><i class="fa-solid fa-envelope"></i> <a href="mailto:dubai@jaiton.com">dubai@jaiton.com</a></div>
              <div class="meta-item"><i class="fa-solid fa-users"></i> <span>25+ Cloud Architecture Consultants</span></div>
              <div class="meta-item"><i class="fa-solid fa-language"></i> <span>English, Arabic</span></div>
            </div>

            <div class="office-action-buttons">
              <a href="#contact" class="btn btn-primary btn-magnetic">Contact Team <i class="fa-solid fa-arrow-right"></i></a>
              <a href="#contact" class="btn btn-secondary">Get Directions <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
          </div>

          <!-- Office 5: Johannesburg Hub -->
          <div class="office-panel-content" id="office-jnb">
            <div class="office-panel-header">
              <span class="office-flag-emoji">🇿🇦</span>
              <div>
                <h3 class="office-name">Johannesburg Hub</h3>
                <span class="office-role-badge">EMEA Support Operations</span>
              </div>
            </div>

            <div class="office-live-time-box">
              <div class="time-label"><i class="fa-solid fa-clock"></i> LIVE LOCAL TIME (SAST)</div>
              <div class="time-value" id="clock-jnb">--:--:--</div>
            </div>

            <div class="office-meta-list">
              <div class="meta-item"><i class="fa-solid fa-building"></i> <span>Sandton City Office Tower, Johannesburg 2196</span></div>
              <div class="meta-item"><i class="fa-solid fa-business-time"></i> <span>24×7 Technical SLA Support</span></div>
              <div class="meta-item"><i class="fa-solid fa-phone"></i> <a href="tel:+27118831000">+27 11 883 1000</a></div>
              <div class="meta-item"><i class="fa-solid fa-envelope"></i> <a href="mailto:johannesburg@jaiton.com">johannesburg@jaiton.com</a></div>
              <div class="meta-item"><i class="fa-solid fa-users"></i> <span>40+ Security & Network Engineers</span></div>
              <div class="meta-item"><i class="fa-solid fa-language"></i> <span>English</span></div>
            </div>

            <div class="office-action-buttons">
              <a href="#contact" class="btn btn-primary btn-magnetic">Contact Team <i class="fa-solid fa-arrow-right"></i></a>
              <a href="#contact" class="btn btn-secondary">Get Directions <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
          </div>

        </div>
      </div>

    </div>

    <!-- Bottom Purple Gradient CTA Banner -->
    <div class="presence-cta-banner" data-aos="fade-up" data-aos-delay="200">
      <div class="cta-banner-content">
        <h3 class="cta-banner-title">Ready to Work With a Global Engineering Partner?</h3>
        <p class="cta-banner-desc">Connect with our Sydney strategy team or explore our global delivery locations today.</p>
      </div>
      <div class="cta-banner-actions">
        <a href="#contact" class="btn btn-primary btn-magnetic">Schedule Consultation <i class="fa-solid fa-calendar-check"></i></a>
        <a href="#presence" class="btn btn-secondary">Explore Global Offices <i class="fa-solid fa-globe"></i></a>
      </div>
    </div>

  </div>
</section>

<!-- Real-Time Clocks & Office Panel Switcher Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  // 1. Live Local Clocks Update Function
  const updateClocks = () => {
    const timezones = {
      syd: "Australia/Sydney",
      blr: "Asia/Kolkata",
      sgp: "Asia/Singapore",
      dxb: "Asia/Dubai",
      jnb: "Africa/Johannesburg"
    };

    Object.keys(timezones).forEach(code => {
      const clockEl = document.getElementById(`clock-${code}`);
      if (clockEl) {
        const now = new Date();
        const options = {
          timeZone: timezones[code],
          hour: "2-digit",
          minute: "2-digit",
          second: "2-digit",
          hour12: true
        };
        clockEl.innerText = new Intl.DateTimeFormat("en-US", options).format(now);
      }
    });
  };

  updateClocks();
  setInterval(updateClocks, 1000);

  // 2. Interactive Map Pin Office Switcher
  const pins = document.querySelectorAll(".ops-pin");
  const panels = document.querySelectorAll(".office-panel-content");

  pins.forEach(pin => {
    pin.addEventListener("click", () => {
      const targetOffice = pin.getAttribute("data-office");

      // Active state on pins
      pins.forEach(p => p.classList.remove("active"));
      pin.classList.add("active");

      // Active state on panels (Smooth slide / fade)
      panels.forEach(panel => {
        if (panel.id === `office-${targetOffice}`) {
          panel.classList.add("active");
        } else {
          panel.classList.remove("active");
        }
      });
    });
  });
});
</script>

<!-- ============================================================
     GLOBAL OPERATIONS SCOPED STYLES
     ============================================================ -->
<style>
/* ── Section Shell ── */
.presence-section {
  position: relative;
  padding: 120px 0;
  background-color: var(--dark-navy);
  overflow: hidden;
}

/* ── Background Grid & Radial Glows ── */
.presence-bg-layers {
  position: absolute;
  inset: 0;
  pointer-events: none;
  overflow: hidden;
  z-index: 1;
}

.presence-grid-texture {
  position: absolute;
  inset: 0;
  background-size: 40px 40px;
  background-image:
    linear-gradient(to right, rgba(255,255,255,0.015) 1px, transparent 1px),
    linear-gradient(to bottom, rgba(255,255,255,0.015) 1px, transparent 1px);
}

.presence-glow {
  position: absolute;
  width: 600px;
  height: 600px;
  border-radius: 50%;
  filter: blur(160px);
  opacity: 0.15;
}

.presence-glow--purple { top: 10%; right: -10%; background: var(--primary-purple); }
.presence-glow--blue   { bottom: 10%; left: -10%; background: var(--electric-blue); }

/* ── Section Header ── */
.presence-header {
  text-align: center;
  max-width: 700px;
  margin: 0 auto 48px auto;
  position: relative;
  z-index: 5;
}

.presence-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 6px 16px;
  background: rgba(109,40,255,0.08);
  border: 1px solid rgba(109,40,255,0.15);
  border-radius: 100px;
  font-size: 0.75rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  color: var(--primary-purple);
  margin-bottom: 18px;
}

.badge-pulse-dot {
  width: 6px;
  height: 6px;
  background: #6D28FF;
  border-radius: 50%;
  box-shadow: 0 0 8px #6D28FF;
  animation: pulsePurpleDot 2s infinite;
}

@keyframes pulsePurpleDot {
  0%   { transform: scale(0.9); box-shadow: 0 0 0 0 rgba(109, 40, 255, 0.6); }
  70%  { transform: scale(1.2); box-shadow: 0 0 0 8px rgba(109, 40, 255, 0); }
  100% { transform: scale(0.9); box-shadow: 0 0 0 0 rgba(109, 40, 255, 0); }
}

.presence-title {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(32px, 3.2vw, 44px);
  font-weight: 700;
  line-height: 1.2;
  color: var(--white);
  letter-spacing: -0.02em;
  margin-bottom: 16px;
}

.presence-desc {
  font-size: 16px;
  line-height: 1.6;
  color: #cbd5e1;
}

/* ── Statistics Strip (4 Compact Enterprise Metrics) ── */
.presence-stats-strip {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
  max-width: 1320px;
  width: 100%;
  margin: 0 auto 48px auto;
  position: relative;
  z-index: 5;
}

.pstat-item {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 16px;
  padding: 16px 20px;
  text-align: center;
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
}

.pstat-val {
  font-family: 'Poppins', sans-serif;
  font-size: 28px;
  font-weight: 800;
  color: var(--white);
  margin-bottom: 4px;
}

.pstat-lbl {
  font-size: 0.75rem;
  font-weight: 600;
  color: #94a3b8;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

/* ── 2-Column Grid (65% Left / 35% Right) ── */
.presence-operations-grid {
  display: grid;
  grid-template-columns: 65% 35%;
  gap: 40px;
  align-items: center;
  max-width: 1440px;
  width: 100%;
  margin: 0 auto;
  position: relative;
  z-index: 5;
}

/* ── Left Column: Interactive Map Card ── */
.ops-map-wrapper { width: 100%; }

.ops-map-card {
  position: relative;
  background: rgba(255, 255, 255, 0.03);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 28px;
  padding: 24px;
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.4);
}

.ops-world-map {
  width: 100%;
  height: auto;
  display: block;
}

.glowing-country {
  animation: countryPulse 3s infinite alternate ease-in-out;
}

@keyframes countryPulse {
  0%   { fill-opacity: 0.12; stroke-opacity: 0.6; }
  100% { fill-opacity: 0.25; stroke-opacity: 1; }
}

.ops-flow-path {
  animation: flowLineDash 10s linear infinite;
}

@keyframes flowLineDash {
  to { stroke-dashoffset: -120; }
}

/* Moving Map Particles */
.particle-syd-sgp { animation: moveParticle1 4s linear infinite; }
.particle-sgp-blr { animation: moveParticle2 3s linear infinite; }
.particle-blr-dxb { animation: moveParticle3 3s linear infinite; }

@keyframes moveParticle1 {
  0%   { cx: 880; cy: 380; opacity: 1; }
  100% { cx: 760; cy: 280; opacity: 0; }
}

@keyframes moveParticle2 {
  0%   { cx: 760; cy: 280; opacity: 1; }
  100% { cx: 700; cy: 260; opacity: 0; }
}

@keyframes moveParticle3 {
  0%   { cx: 700; cy: 260; opacity: 1; }
  100% { cx: 630; cy: 220; opacity: 0; }
}

/* Map Pins */
.ops-pin {
  position: absolute;
  transform: translate(-50%, -50%);
  cursor: pointer;
  z-index: 10;
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: transform 250ms ease;
}

.pin-icon {
  font-size: 1.5rem;
  color: #94a3b8;
  filter: drop-shadow(0 4px 10px rgba(0,0,0,0.5));
  transition: color 250ms ease, transform 250ms ease;
}

.pin-pulse-ring {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 28px;
  height: 28px;
  border-radius: 50%;
  border: 2px solid #6D28FF;
  transform: translate(-50%, -50%) scale(0.6);
  opacity: 0;
  pointer-events: none;
}

.pin-badge {
  position: absolute;
  top: calc(100% + 6px);
  background: rgba(8, 19, 39, 0.9);
  backdrop-filter: blur(12px);
  border: 1px solid rgba(255, 255, 255, 0.12);
  color: var(--white);
  padding: 4px 10px;
  border-radius: 100px;
  font-size: 0.72rem;
  font-weight: 700;
  white-space: nowrap;
  box-shadow: 0 4px 12px rgba(0,0,0,0.4);
  transition: all 250ms ease;
}

/* Active / Hover Pin State */
.ops-pin:hover,
.ops-pin.active {
  transform: translate(-50%, -50%) scale(1.15);
}

.ops-pin:hover .pin-icon,
.ops-pin.active .pin-icon {
  color: #6D28FF;
}

.ops-pin.active .pin-pulse-ring {
  animation: pinRingPulse 2s infinite;
}

@keyframes pinRingPulse {
  0%   { transform: translate(-50%, -50%) scale(0.6); opacity: 1; }
  100% { transform: translate(-50%, -50%) scale(1.8); opacity: 0; }
}

/* ── Right Column: Floating Office Glass Panel ── */
.ops-panel-wrapper { width: 100%; }

.floating-office-glass-card {
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(24px);
  -webkit-backdrop-filter: blur(24px);
  border: 1px solid rgba(255, 255, 255, 0.12);
  border-radius: 28px;
  padding: 32px;
  box-shadow: 0 20px 60px rgba(8, 22, 61, 0.18);
  min-height: 440px;
  box-sizing: border-box;
}

.office-panel-content {
  display: none;
  opacity: 0;
  transform: translateY(12px);
  transition: opacity 300ms ease, transform 300ms ease;
}

.office-panel-content.active {
  display: block;
  opacity: 1;
  transform: translateY(0);
}

.office-panel-header {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 20px;
  border-bottom: 1px solid rgba(255,255,255,0.06);
  padding-bottom: 16px;
}

.office-flag-emoji {
  font-size: 2.2rem;
  line-height: 1;
}

.office-name {
  font-family: 'Poppins', sans-serif;
  font-size: 22px;
  font-weight: 700;
  color: var(--white);
  margin-bottom: 2px;
}

.office-role-badge {
  font-size: 0.72rem;
  font-weight: 700;
  color: #a275ff;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

/* Live Time Clock Box */
.office-live-time-box {
  background: rgba(109, 40, 255, 0.08);
  border: 1px solid rgba(109, 40, 255, 0.2);
  border-radius: 14px;
  padding: 12px 16px;
  margin-bottom: 24px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.time-label {
  font-size: 0.68rem;
  font-weight: 700;
  color: #94a3b8;
  letter-spacing: 0.05em;
  display: flex;
  align-items: center;
  gap: 6px;
}

.time-label i { color: #10B981; }

.time-value {
  font-family: monospace;
  font-size: 1.1rem;
  font-weight: 800;
  color: var(--white);
}

/* Details Table */
.office-meta-list {
  display: flex;
  flex-direction: column;
  gap: 12px;
  margin-bottom: 28px;
}

.meta-item {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  font-size: 0.85rem;
  color: #cbd5e1;
}

.meta-item i {
  color: var(--primary-purple);
  font-size: 0.9rem;
  margin-top: 3px;
  flex-shrink: 0;
}

.meta-item a {
  color: var(--white);
  text-decoration: none;
  font-weight: 600;
  transition: color 200ms ease;
}

.meta-item a:hover {
  color: #a275ff;
}

/* Panel Buttons */
.office-action-buttons {
  display: flex;
  gap: 12px;
}

.office-action-buttons .btn {
  height: 44px;
  padding: 0 20px;
  border-radius: 12px;
  font-size: 13px;
  font-weight: 700;
  flex: 1;
}

/* ── Bottom CTA Banner ── */
.presence-cta-banner {
  max-width: 1440px;
  width: 100%;
  margin: 64px auto 0 auto;
  background: linear-gradient(135deg, rgba(109,40,255,0.25) 0%, rgba(59,130,246,0.15) 100%);
  border: 1px solid rgba(109,40,255,0.3);
  border-radius: 24px;
  padding: 36px 48px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  position: relative;
  z-index: 5;
  box-sizing: border-box;
}

.cta-banner-title {
  font-family: 'Poppins', sans-serif;
  font-size: 22px;
  font-weight: 700;
  color: var(--white);
  margin-bottom: 6px;
}

.cta-banner-desc {
  font-size: 14px;
  color: #cbd5e1;
}

.cta-banner-actions {
  display: flex;
  gap: 16px;
  flex-shrink: 0;
}

.cta-banner-actions .btn {
  height: 48px;
  padding: 0 24px;
  border-radius: 12px;
  font-size: 14px;
  font-weight: 700;
}

/* ── Responsive Breakpoints ── */
@media (max-width: 1199px) {
  .presence-operations-grid {
    grid-template-columns: 60% 40%;
    gap: 28px;
  }

  .presence-cta-banner {
    flex-direction: column;
    text-align: center;
    gap: 24px;
    padding: 32px 24px;
  }
}

@media (max-width: 991px) {
  .presence-operations-grid {
    grid-template-columns: 1fr;
    gap: 32px;
  }

  .presence-stats-strip {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 767px) {
  .presence-section {
    padding: 80px 0;
  }

  .presence-stats-strip {
    grid-template-columns: 1fr;
  }

  .floating-office-glass-card {
    padding: 24px 18px;
  }

  .office-action-buttons {
    flex-direction: column;
  }
}
</style>
