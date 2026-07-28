<!-- Global Presence Section -->
<section id="presence" class="presence-section">
  <!-- Glowing background elements -->
  <div class="presence-glow purple"></div>
  <div class="presence-glow blue"></div>

  <div class="container">
    <!-- Section Header -->
    <div class="section-header" data-aos="fade-up">
      <span class="section-badge" style="background-color: rgba(255,255,255,0.1); color: #fff; border-color: rgba(255,255,255,0.15)">Global Scale</span>
      <h2 class="section-title text-white">Follow-the-Sun Agile Delivery</h2>
      <p class="section-desc text-slate-300">
        Operating across strategic enterprise locations to offer round-the-clock engineering capability and seamless local timezone delivery support.
      </p>
    </div>

    <!-- Map & Details Layout Grid -->
    <div class="presence-grid">
      
      <!-- Left Column: Custom SVG World Map with Animated Connections -->
      <div class="map-container glass-panel-dark" data-aos="fade-right">
        <div class="map-wrapper">
          <svg viewBox="0 0 1000 500" class="world-svg-map">
            <!-- Simulated Continent Outlines -->
            <!-- North America -->
            <path d="M100 100 C150 70, 200 80, 220 120 C240 160, 180 220, 160 250 C140 280, 120 300, 100 260 C80 220, 50 180, 70 140 C80 120, 90 110, 100 100 Z" fill="rgba(255,255,255,0.02)" stroke="rgba(255,255,255,0.05)" stroke-width="1.5" />
            <!-- South America -->
            <path d="M160 260 C180 280, 220 340, 210 380 C200 420, 170 440, 150 420 C130 400, 120 340, 130 300 C140 270, 150 260, 160 260 Z" fill="rgba(255,255,255,0.02)" stroke="rgba(255,255,255,0.05)" stroke-width="1.5" />
            <!-- Eurasia (highlighted right end) -->
            <path d="M420 120 C480 80, 600 70, 720 100 C800 120, 850 150, 820 200 C800 240, 780 280, 750 300 C700 320, 640 270, 580 280 C520 290, 480 220, 440 200 C400 180, 400 140, 420 120 Z" fill="rgba(255,255,255,0.02)" stroke="rgba(255,255,255,0.05)" stroke-width="1.5" />
            <!-- Africa -->
            <path d="M440 220 C480 210, 530 220, 550 260 C570 300, 560 360, 520 400 C480 440, 450 410, 440 370 C430 330, 420 280, 430 240 C435 230, 438 225, 440 220 Z" fill="rgba(255,255,255,0.02)" stroke="rgba(255,255,255,0.05)" stroke-width="1.5" />
            
            <!-- Australia Highlighted -->
            <path d="M780 340 C840 330, 890 350, 910 390 C920 420, 880 450, 840 450 C780 450, 750 400, 760 370 C765 350, 770 345, 780 340 Z" fill="rgba(109, 40, 255, 0.08)" stroke="rgba(109, 40, 255, 0.4)" stroke-width="2" class="australia-path" />

            <!-- Animated Connection curve from Sydney (880, 380) to Bangalore (710, 275) -->
            <path d="M 880,380 Q 795,290 710,275" fill="none" stroke="rgba(109, 40, 255, 0.2)" stroke-width="2" />
            <path d="M 880,380 Q 795,290 710,275" fill="none" stroke="url(#connection-grad)" stroke-width="2.5" class="animated-connection-path" />
            
            <defs>
              <linearGradient id="connection-grad" x1="100%" y1="100%" x2="0%" y2="0%">
                <stop offset="0%" stop-color="#3B82F6" />
                <stop offset="50%" stop-color="#6D28FF" />
                <stop offset="100%" stop-color="#06B6D4" />
              </linearGradient>
            </defs>
          </svg>

          <!-- Interactive Pins -->
          <!-- Sydney -->
          <div class="map-pin active pulsing-pin" style="top: 76%; left: 88%;" data-office="aus">
            <i class="fa-solid fa-location-dot"></i>
            <span class="pin-tooltip">Sydney HQ</span>
          </div>

          <!-- Bangalore -->
          <div class="map-pin pulsing-pin" style="top: 55%; left: 71%;" data-office="ind">
            <i class="fa-solid fa-location-dot"></i>
            <span class="pin-tooltip">Bangalore R&D</span>
          </div>

        </div>
      </div>

      <!-- Right Column: Interactive Details Panel -->
      <div class="office-panel" data-aos="fade-left">
        
        <!-- Australia details -->
        <div class="office-card active" id="office-aus">
          <div class="office-card-header">
            <img src="assets/icons/australia.png" alt="Australia Flag" class="office-flag">
            <div>
              <h3>Sydney HQ</h3>
              <span class="office-tag">Corporate Headquarters</span>
            </div>
          </div>
          <div class="office-card-body">
            <p class="office-detail"><i class="fa-solid fa-map-pin"></i> Level 14, 275 Alfred St, North Sydney NSW 2060</p>
            <p class="office-detail"><i class="fa-solid fa-phone"></i> <a href="tel:+61468403743">+61 468 403 743</a></p>
            <p class="office-detail"><i class="fa-solid fa-envelope"></i> <a href="mailto:sydney@jaiton.com">sydney@jaiton.com</a></p>
            
            <div class="office-clock-wrapper">
              <div class="office-timezone"><i class="fa-solid fa-clock"></i> Local Timezone: <strong>AEST (UTC+10)</strong></div>
              <div class="office-realtime" id="clock-aus">Loading...</div>
            </div>
            
            <div class="office-features-badge">
              <span>Client Strategy</span>
              <span>Architecture</span>
              <span>Project Management</span>
            </div>
          </div>
        </div>

        <!-- India details -->
        <div class="office-card" id="office-ind">
          <div class="office-card-header">
            <img src="assets/icons/india.png" alt="India Flag" class="office-flag">
            <div>
              <h3>Bangalore R&D</h3>
              <span class="office-tag">Offshore Engineering Center</span>
            </div>
          </div>
          <div class="office-card-body">
            <p class="office-detail"><i class="fa-solid fa-map-pin"></i> Prestige Trade Tower, Palace Rd, Bengaluru 560001</p>
            <p class="office-detail"><i class="fa-solid fa-phone"></i> <a href="tel:+918040927700">+91 80 4092 7700</a></p>
            <p class="office-detail"><i class="fa-solid fa-envelope"></i> <a href="mailto:india@jaiton.com">india@jaiton.com</a></p>
            
            <div class="office-clock-wrapper">
              <div class="office-timezone"><i class="fa-solid fa-clock"></i> Local Timezone: <strong>IST (UTC+5:30)</strong></div>
              <div class="office-realtime" id="clock-ind">Loading...</div>
            </div>

            <div class="office-features-badge">
              <span>Full-Stack Development</span>
              <span>Quality Assurance</span>
              <span>24/7 SLA Telemetry Support</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- CSS specifically for Global Presence -->
<style>
.presence-section {
  position: relative;
  padding: 120px 0;
  background-color: var(--dark-navy);
  overflow: hidden;
}

.presence-glow {
  position: absolute;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  filter: blur(140px);
  opacity: 0.15;
  pointer-events: none;
}

.presence-glow.purple { top: -10%; left: 10%; background-color: var(--primary-purple); }
.presence-glow.blue { bottom: -10%; right: 10%; background-color: var(--electric-blue); }

.presence-grid {
  display: grid;
  grid-template-cols: 1.15fr 0.85fr;
  gap: 60px;
  align-items: center;
}

/* World Map styling */
.map-container {
  padding: 24px;
  border-radius: var(--radius-lg);
  position: relative;
}

.map-wrapper {
  position: relative;
  width: 100%;
}

.world-svg-map {
  width: 100%;
  height: auto;
}

/* Glowing connection path animation */
.animated-connection-path {
  stroke-dasharray: 8 8;
  animation: connectionGlow 15s linear infinite;
}

@keyframes connectionGlow {
  to {
    stroke-dashoffset: -160;
  }
}

.australia-path {
  animation: ausGlow 3s ease-in-out infinite alternate;
}

@keyframes ausGlow {
  0% { fill: rgba(109, 40, 255, 0.05); }
  100% { fill: rgba(109, 40, 255, 0.15); }
}

/* Pin styles */
.map-pin {
  position: absolute;
  color: var(--white);
  cursor: pointer;
  z-index: 10;
  transform: translate(-50%, -50%);
  transition: all var(--transition-fast);
}

.map-pin i {
  font-size: 1.5rem;
  filter: drop-shadow(0 4px 8px rgba(8, 19, 39, 0.5));
  transition: all var(--transition-fast);
}

.pulsing-pin::before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  width: 32px;
  height: 32px;
  border-radius: 50%;
  border: 2px solid var(--primary-purple);
  transform: translate(-50%, -50%) scale(0.6);
  opacity: 0;
  pointer-events: none;
  transition: all var(--transition-normal);
}

.map-pin.active i {
  color: var(--primary-purple);
}

.map-pin.active::before {
  animation: pinPulse 2s infinite;
}

@keyframes pinPulse {
  0% { transform: translate(-50%, -50%) scale(0.6); opacity: 1; }
  100% { transform: translate(-50%, -50%) scale(1.6); opacity: 0; }
}

.pin-tooltip {
  position: absolute;
  bottom: calc(100% + 10px);
  left: 50%;
  transform: translateX(-50%) translateY(10px);
  background-color: var(--dark-navy);
  color: var(--white);
  padding: 4px 10px;
  border-radius: 6px;
  font-size: 0.6875rem;
  font-weight: 700;
  white-space: nowrap;
  opacity: 0;
  visibility: hidden;
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(255, 255, 255, 0.1);
  transition: all var(--transition-fast);
}

.map-pin:hover .pin-tooltip,
.map-pin.active .pin-tooltip {
  opacity: 1;
  visibility: visible;
  transform: translateX(-50%) translateY(0);
}

/* Office details cards */
.office-panel {
  width: 100%;
}

.office-card {
  display: none;
  background-color: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: var(--radius-lg);
  padding: 40px;
  color: var(--white);
  transition: all var(--transition-normal);
  text-align: left;
}

.office-card.active {
  display: block;
}

.office-card-header {
  display: flex;
  align-items: center;
  gap: 20px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  padding-bottom: 24px;
  margin-bottom: 28px;
}

.office-flag {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  object-fit: cover;
  border: 2px solid rgba(255, 255, 255, 0.15);
}

.office-card-header h3 {
  color: var(--white);
  font-size: 1.4rem;
  font-weight: 800;
  margin-bottom: 4px;
}

.office-tag {
  font-size: 0.75rem;
  font-weight: 700;
  text-transform: uppercase;
  color: #a275ff;
  letter-spacing: 0.05em;
}

.office-detail {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 0.95rem;
  margin-bottom: 18px;
  color: #cbd5e1;
}

.office-detail i {
  color: var(--primary-purple);
  width: 16px;
}

.office-clock-wrapper {
  margin: 28px 0;
  padding: 16px;
  background-color: rgba(255, 255, 255, 0.03);
  border-radius: 12px;
  border: 1px solid rgba(255, 255, 255, 0.05);
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.office-timezone {
  font-size: 0.8125rem;
  color: #94a3b8;
  display: flex;
  align-items: center;
  gap: 6px;
}

.office-timezone i {
  color: #3B82F6;
}

.office-realtime {
  font-family: var(--font-heading);
  font-size: 1.1rem;
  font-weight: 800;
  color: var(--white);
}

.office-features-badge {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
}

.office-features-badge span {
  font-size: 0.6875rem;
  font-weight: 700;
  color: var(--white);
  background-color: rgba(109, 40, 255, 0.15);
  border: 1px solid rgba(109, 40, 255, 0.25);
  padding: 6px 14px;
  border-radius: 100px;
}

@media (max-width: 991px) {
  .presence-grid {
    grid-template-cols: 1fr;
    gap: 40px;
  }
}

@media (max-width: 767px) {
  .presence-section {
    padding: 80px 0;
  }
  .office-card {
    padding: 24px;
  }
  .office-clock-wrapper {
    flex-direction: column;
    align-items: flex-start;
    gap: 8px;
  }
}
</style>

<!-- Script for Realtime Timezone Clocks -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const formatClock = (tz) => {
    return new Date().toLocaleTimeString("en-AU", {
      timeZone: tz,
      hour: "2-digit",
      minute: "2-digit",
      second: "2-digit",
      hour12: true
    });
  };

  const updateClocks = () => {
    const ausClock = document.getElementById("clock-aus");
    const indClock = document.getElementById("clock-ind");
    if (ausClock) ausClock.innerText = formatClock("Australia/Sydney");
    if (indClock) indClock.innerText = formatClock("Asia/Kolkata");
  };

  setInterval(updateClocks, 1000);
  updateClocks();
});
</script>
