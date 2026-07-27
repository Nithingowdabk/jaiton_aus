<!-- Global Presence Section -->
<section id="presence" class="presence-section">
  <!-- Glowing background elements -->
  <div class="presence-glow purple"></div>
  <div class="presence-glow blue"></div>

  <div class="container">
    <!-- Section Header -->
    <div class="section-header" data-aos="fade-up">
      <span class="section-badge" style="background-color: rgba(255,255,255,0.1); color: #fff; border-color: rgba(255,255,255,0.15)">Global Scale</span>
      <h2 class="section-title text-white">Our Global Presence</h2>
      <p class="section-desc text-slate-300">
        Operating across strategic enterprise markets to offer unmatched regional expertise, local compliance, and round-the-clock agile development capabilities.
      </p>
    </div>

    <!-- Map & Details Layout Grid -->
    <div class="presence-grid">
      
      <!-- Left Column: Custom SVG World Map -->
      <div class="map-container glass-panel-dark" data-aos="fade-right">
        <div class="map-wrapper">
          <svg viewBox="0 0 1000 500" class="world-svg-map">
            <!-- Simulated Continent Outlines -->
            <!-- North America -->
            <path d="M100 100 C150 70, 200 80, 220 120 C240 160, 180 220, 160 250 C140 280, 120 300, 100 260 C80 220, 50 180, 70 140 C80 120, 90 110, 100 100 Z" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.1)" stroke-width="1.5" />
            <!-- South America -->
            <path d="M160 260 C180 280, 220 340, 210 380 C200 420, 170 440, 150 420 C130 400, 120 340, 130 300 C140 270, 150 260, 160 260 Z" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.1)" stroke-width="1.5" />
            <!-- Eurasia -->
            <path d="M420 120 C480 80, 600 70, 720 100 C800 120, 850 150, 820 200 C800 240, 780 280, 750 300 C700 320, 640 270, 580 280 C520 290, 480 220, 440 200 C400 180, 400 140, 420 120 Z" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.1)" stroke-width="1.5" />
            <!-- Africa -->
            <path d="M440 220 C480 210, 530 220, 550 260 C570 300, 560 360, 520 400 C480 440, 450 410, 440 370 C430 330, 420 280, 430 240 C435 230, 438 225, 440 220 Z" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.1)" stroke-width="1.5" />
            <!-- Australia -->
            <path d="M780 340 C840 330, 890 350, 910 390 C920 420, 880 450, 840 450 C780 450, 750 400, 760 370 C765 350, 770 345, 780 340 Z" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.1)" stroke-width="1.5" />
          </svg>

          <!-- Interactive Pins -->
          <!-- Sydney -->
          <div class="map-pin active pulsing-pin" style="top: 76%; left: 88%;" data-office="aus">
            <i class="fa-solid fa-location-dot"></i>
            <span class="pin-tooltip">Sydney</span>
          </div>

          <!-- Bangalore -->
          <div class="map-pin pulsing-pin" style="top: 55%; left: 71%;" data-office="ind">
            <i class="fa-solid fa-location-dot"></i>
            <span class="pin-tooltip">Bangalore</span>
          </div>

          <!-- Johannesburg -->
          <div class="map-pin pulsing-pin" style="top: 72%; left: 53%;" data-office="sa">
            <i class="fa-solid fa-location-dot"></i>
            <span class="pin-tooltip">Johannesburg</span>
          </div>

          <!-- Dubai -->
          <div class="map-pin pulsing-pin" style="top: 50%; left: 62%;" data-office="uae">
            <i class="fa-solid fa-location-dot"></i>
            <span class="pin-tooltip">Dubai</span>
          </div>

          <!-- Singapore -->
          <div class="map-pin pulsing-pin" style="top: 61%; left: 75%;" data-office="sg">
            <i class="fa-solid fa-location-dot"></i>
            <span class="pin-tooltip">Singapore</span>
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
              <h3>Sydney</h3>
              <span class="office-tag">Australian Headquarters</span>
            </div>
          </div>
          <div class="office-card-body">
            <p class="office-detail"><i class="fa-solid fa-map-pin"></i> Level 14, 275 Alfred St, North Sydney NSW 2060</p>
            <p class="office-detail"><i class="fa-solid fa-phone"></i> <a href="tel:+61468403743">+61 468 403 743</a></p>
            <p class="office-detail"><i class="fa-solid fa-envelope"></i> <a href="mailto:sydney@jaiton.com">sydney@jaiton.com</a></p>
            <div class="office-timezone"><i class="fa-solid fa-clock"></i> Local Timezone: <strong>AEST (UTC+10)</strong></div>
          </div>
        </div>

        <!-- India details -->
        <div class="office-card" id="office-ind">
          <div class="office-card-header">
            <img src="assets/icons/india.png" alt="India Flag" class="office-flag">
            <div>
              <h3>Bangalore</h3>
              <span class="office-tag">Offshore R&D Center</span>
            </div>
          </div>
          <div class="office-card-body">
            <p class="office-detail"><i class="fa-solid fa-map-pin"></i> Prestige Trade Tower, Palace Rd, Bengaluru 560001</p>
            <p class="office-detail"><i class="fa-solid fa-phone"></i> <a href="tel:+919353048488">+91 93530 48488</a></p>
            <p class="office-detail"><i class="fa-solid fa-envelope"></i> <a href="mailto:bangalore@jaiton.com">bangalore@jaiton.com</a></p>
            <div class="office-timezone"><i class="fa-solid fa-clock"></i> Local Timezone: <strong>IST (UTC+5:30)</strong></div>
          </div>
        </div>

        <!-- South Africa details -->
        <div class="office-card" id="office-sa">
          <div class="office-card-header">
            <img src="assets/icons/south-africa.png" alt="South Africa Flag" class="office-flag">
            <div>
              <h3>Johannesburg</h3>
              <span class="office-tag">Regional Office</span>
            </div>
          </div>
          <div class="office-card-body">
            <p class="office-detail"><i class="fa-solid fa-map-pin"></i> Sandton Eye, Rivonia Rd & West St, Sandton 2196</p>
            <p class="office-detail"><i class="fa-solid fa-phone"></i> <a href="tel:+27787712294">+27 78 771 2294</a></p>
            <p class="office-detail"><i class="fa-solid fa-envelope"></i> <a href="mailto:jhb@jaiton.com">jhb@jaiton.com</a></p>
            <div class="office-timezone"><i class="fa-solid fa-clock"></i> Local Timezone: <strong>SAST (UTC+2)</strong></div>
          </div>
        </div>

        <!-- UAE details -->
        <div class="office-card" id="office-uae">
          <div class="office-card-header">
            <img src="assets/icons/uae.webp" alt="UAE Flag" class="office-flag">
            <div>
              <h3>Dubai</h3>
              <span class="office-tag">Regional Office</span>
            </div>
          </div>
          <div class="office-card-body">
            <p class="office-detail"><i class="fa-solid fa-map-pin"></i> The Gateway Tower, Dubai Media City, Dubai</p>
            <p class="office-detail"><i class="fa-solid fa-phone"></i> <a href="tel:+97144019888">+971 4 401 9888</a></p>
            <p class="office-detail"><i class="fa-solid fa-envelope"></i> <a href="mailto:dubai@jaiton.com">dubai@jaiton.com</a></p>
            <div class="office-timezone"><i class="fa-solid fa-clock"></i> Local Timezone: <strong>GST (UTC+4)</strong></div>
          </div>
        </div>

        <!-- Singapore details -->
        <div class="office-card" id="office-sg">
          <div class="office-card-header">
            <img src="assets/icons/aus.webp" alt="Singapore Flag" class="office-flag">
            <div>
              <h3>Singapore</h3>
              <span class="office-tag">Regional Hub</span>
            </div>
          </div>
          <div class="office-card-body">
            <p class="office-detail"><i class="fa-solid fa-map-pin"></i> Marina Bay Financial Centre Tower 1, Singapore 018981</p>
            <p class="office-detail"><i class="fa-solid fa-phone"></i> <a href="tel:+6567011188">+65 6701 1188</a></p>
            <p class="office-detail"><i class="fa-solid fa-envelope"></i> <a href="mailto:singapore@jaiton.com">singapore@jaiton.com</a></p>
            <div class="office-timezone"><i class="fa-solid fa-clock"></i> Local Timezone: <strong>SGT (UTC+8)</strong></div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- CSS specifically for Presence component structure -->
<style>
.presence-section {
  padding: 100px 0;
  background-color: var(--dark-navy);
  position: relative;
  overflow: hidden;
}

/* Background Gradients */
.presence-glow {
  position: absolute;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  filter: blur(140px);
  opacity: 0.1;
  pointer-events: none;
}

.presence-glow.purple {
  top: -10%;
  right: -5%;
  background-color: var(--primary-purple);
}

.presence-glow.blue {
  bottom: -10%;
  left: -5%;
  background-color: var(--primary-blue);
}

.presence-grid {
  display: grid;
  grid-template-cols: 1.250fr 0.750fr;
  gap: 50px;
  align-items: center;
}

.map-container {
  position: relative;
  padding: 24px;
  min-height: 400px;
}

.map-wrapper {
  position: relative;
  width: 100%;
  aspect-ratio: 2;
  min-height: 320px;
}

.world-svg-map {
  width: 100%;
  height: 100%;
  opacity: 0.35;
}

/* Marker Pins */
.map-pin {
  position: absolute;
  color: var(--primary-blue);
  font-size: 1.4rem;
  cursor: pointer;
  z-index: 10;
  transform: translate(-50%, -100%);
  transition: all var(--transition-fast);
}

.map-pin.active {
  color: var(--primary-purple);
  font-size: 1.7rem;
}

.map-pin:hover {
  transform: translate(-50%, -110%) scale(1.1);
  color: var(--primary-purple);
}

.pin-tooltip {
  position: absolute;
  top: -24px;
  left: 50%;
  transform: translateX(-50%);
  background-color: var(--dark-navy);
  border: 1px solid rgba(255, 255, 255, 0.1);
  color: var(--white);
  font-size: 0.65rem;
  font-weight: 700;
  padding: 2px 8px;
  border-radius: 4px;
  opacity: 0;
  visibility: hidden;
  transition: all var(--transition-fast);
  white-space: nowrap;
}

.map-pin:hover .pin-tooltip {
  opacity: 1;
  visibility: visible;
}

/* Details Panel cards */
.office-panel {
  position: relative;
  min-height: 320px;
}

.office-card {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  background: rgba(255, 255, 255, 0.08);
  backdrop-filter: blur(12px);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 20px;
  padding: 32px;
  color: var(--white);
  opacity: 0;
  visibility: hidden;
  transform: translateY(15px);
  transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
  box-shadow: var(--shadow-xl);
}

.office-card.active {
  position: relative;
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}

.office-card-header {
  display: flex;
  align-items: center;
  gap: 16px;
  margin-bottom: 24px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08);
  padding-bottom: 16px;
}

.office-flag {
  width: 44px;
  height: auto;
  border-radius: 4px;
  border: 1px solid rgba(255, 255, 255, 0.15);
}

.office-card-header h3 {
  font-size: 1.35rem;
  color: var(--white);
  font-weight: 700;
  line-height: 1.2;
}

.office-tag {
  font-size: 0.7rem;
  font-weight: 700;
  text-transform: uppercase;
  color: var(--primary-blue);
  letter-spacing: 0.05em;
  display: block;
  margin-top: 4px;
}

.office-card-body {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.office-detail {
  font-size: 0.875rem;
  color: #cbd5e1;
  display: flex;
  align-items: flex-start;
  gap: 12px;
  line-height: 1.5;
}

.office-detail i {
  color: var(--primary-purple);
  width: 16px;
  margin-top: 3px;
}

.office-detail a:hover {
  color: var(--white);
}

.office-timezone {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 0.75rem;
  color: #94a3b8;
  margin-top: 12px;
  padding-top: 16px;
  border-top: 1px solid rgba(255, 255, 255, 0.06);
}

.office-timezone i {
  color: var(--primary-blue);
}

@media (max-width: 991px) {
  .presence-grid {
    grid-template-cols: 1fr;
  }
  
  .office-panel {
    min-height: auto;
  }
  
  .office-card {
    position: static;
  }
}
</style>
