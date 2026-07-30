<!-- ============================================================
     TRUSTED PARTNERS SECTION – (80 Partners World Wide Style)
     ============================================================ -->
<section class="trusted-partners-section" aria-label="Global Enterprise Partners">
  
  <div class="container">
    <div class="trusted-partners-grid">
      
      <!-- ============================================================
           LEFT COLUMN: Giant Number 80 & Dotted Map Graphic
           ============================================================ -->
      <div class="trusted-stat-side" data-aos="fade-right">
        <div class="stat-number-wrapper">
          
          <!-- Background Dotted Matrix World Map SVG -->
          <svg viewBox="0 0 500 300" class="stat-bg-dotted-map" aria-hidden="true">
            <pattern id="stat-dots" width="8" height="8" patternUnits="userSpaceOnUse">
              <circle cx="4" cy="4" r="1.2" fill="rgba(15, 23, 42, 0.12)"/>
            </pattern>
            <g fill="url(#stat-dots)">
              <!-- World Continent Dots -->
              <path d="M 40,40 L 70,30 L 120,25 L 180,35 L 195,55 L 180,80 L 150,95 L 135,120 L 115,140 L 85,100 L 45,85 Z"/>
              <path d="M 140,150 L 175,165 L 195,200 L 200,240 L 180,270 L 140,290 L 125,270 L 115,230 L 100,190 Z"/>
              <path d="M 280,45 L 340,35 L 385,55 L 365,85 L 315,90 L 280,75 Z"/>
              <path d="M 290,100 L 350,95 L 390,135 L 375,175 L 340,235 L 300,260 L 275,220 L 265,170 Z"/>
              <path d="M 370,40 L 440,35 L 480,60 L 450,110 L 400,125 L 355,110 Z"/>
              <path d="M 400,200 L 450,195 L 485,225 L 470,260 L 420,270 L 395,245 Z"/>
            </g>
          </svg>

          <!-- Giant Number 80 -->
          <div class="stat-giant-number">80</div>
          
          <h3 class="stat-label-text">
            Partners in world wide
          </h3>

        </div>
      </div>

      <!-- ============================================================
           RIGHT COLUMN: 2x3 Partner Logos Grid Container
           ============================================================ -->
      <div class="trusted-logos-side" data-aos="fade-left">
        <div class="partner-logos-card">
          
          <!-- 2x3 Logos Grid -->
          <div class="logo-tiles-grid">
            
            <!-- Tile 1: Walmart -->
            <div class="partner-tile tile-walmart">
              <div class="brand-logo-content">
                <span class="brand-name walmart-text">Walmart <i class="fa-solid fa-sparkles text-amber"></i></span>
              </div>
            </div>

            <!-- Tile 2: Paysafe -->
            <div class="partner-tile tile-paysafe">
              <div class="brand-logo-content">
                <span class="brand-name paysafe-text">Paysafe<span class="brand-dot">:</span></span>
              </div>
            </div>

            <!-- Tile 3: Slack -->
            <div class="partner-tile tile-slack">
              <div class="brand-logo-content">
                <span class="brand-name slack-text"><i class="fa-brands fa-slack text-slack"></i> slack</span>
              </div>
            </div>

            <!-- Tile 4: Mollie -->
            <div class="partner-tile tile-mollie">
              <div class="brand-logo-content">
                <span class="brand-name mollie-text">mollie</span>
              </div>
            </div>

            <!-- Tile 5: Qlik -->
            <div class="partner-tile tile-qlik">
              <div class="brand-logo-content">
                <span class="brand-name qlik-text">Qlik <i class="fa-solid fa-circle-notch text-green"></i></span>
              </div>
            </div>

            <!-- Tile 6: Envato -->
            <div class="partner-tile tile-envato">
              <div class="brand-logo-content">
                <span class="brand-name envato-text"><i class="fa-solid fa-leaf text-leaf"></i> envato</span>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     TRUSTED PARTNERS SCOPED STYLES
     ============================================================ -->
<style>
/* Section Shell (Clean White Background) */
.trusted-partners-section {
  position: relative;
  padding: 80px 0;
  background-color: #FFFFFF;
  overflow: hidden;
}

.trusted-partners-grid {
  display: grid;
  grid-template-columns: 45% calc(55% - 40px);
  gap: 40px;
  align-items: center;
  max-width: 1440px;
  margin: 0 auto;
  padding: 0 40px;
}

/* ── LEFT COLUMN: Giant Number 80 & Dotted Map ── */
.trusted-stat-side {
  width: 100%;
}

.stat-number-wrapper {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  max-width: 480px;
}

.stat-bg-dotted-map {
  position: absolute;
  top: -20px;
  left: -20px;
  width: 110%;
  height: auto;
  pointer-events: none;
  z-index: 1;
}

.stat-giant-number {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(100px, 10vw, 150px);
  font-weight: 900;
  line-height: 0.9;
  letter-spacing: -0.04em;
  background: linear-gradient(135deg, #08163D 0%, #6A1BFF 50%, #0055FF 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  position: relative;
  z-index: 2;
  margin-bottom: 12px;
}

.stat-label-text {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(24px, 2.2vw, 32px);
  font-weight: 800;
  color: #0F172A;
  margin: 0;
  position: relative;
  z-index: 2;
}

/* ── RIGHT COLUMN: 2x3 Logos Grid Card ── */
.trusted-logos-side {
  width: 100%;
}

.partner-logos-card {
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  border-radius: 20px;
  box-shadow: 0 16px 40px rgba(0, 43, 128, 0.05);
  overflow: hidden;
}

.logo-tiles-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: repeat(2, 1fr);
}

.partner-tile {
  height: 120px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  border-right: 1px solid #E2E8F0;
  border-bottom: 1px solid #E2E8F0;
  transition: all 250ms ease;
  background: #FFFFFF;
}

/* Remove right border on 3rd column tiles */
.partner-tile:nth-child(3n) {
  border-right: none;
}

/* Remove bottom border on bottom row tiles */
.partner-tile:nth-child(n+4) {
  border-bottom: none;
}

.partner-tile:hover {
  background: rgba(248, 250, 252, 0.8);
  transform: translateY(-2px);
  box-shadow: inset 0 0 0 1px rgba(0, 85, 255, 0.15);
}

/* Brand Text & Icons Styling */
.brand-name {
  font-family: 'Poppins', sans-serif;
  font-size: 24px;
  font-weight: 800;
  color: #0F172A;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  letter-spacing: -0.02em;
}

/* Walmart */
.walmart-text {
  color: #0071CE;
  font-weight: 700;
}
.text-amber { color: #FFC220; font-size: 16px; }

/* Paysafe */
.paysafe-text {
  color: #1A1A1A;
  font-weight: 900;
}
.brand-dot { color: #FF0055; }

/* Slack */
.slack-text {
  color: #1A1A1A;
  font-size: 22px;
}
.text-slack { color: #E01E5A; }

/* Mollie */
.mollie-text {
  font-family: sans-serif;
  font-weight: 900;
  font-size: 26px;
  color: #000000;
  letter-spacing: -1px;
}

/* Qlik */
.qlik-text {
  color: #000000;
  font-weight: 700;
}
.text-green { color: #009845; font-size: 18px; }

/* Envato */
.envato-text {
  color: #1A1A1A;
  font-weight: 700;
}
.text-leaf { color: #82B440; }

/* Responsive */
@media (max-width: 1199px) {
  .trusted-partners-grid {
    grid-template-columns: 1fr;
    gap: 48px;
  }

  .stat-number-wrapper {
    align-items: center;
    text-align: center;
    max-width: 100%;
  }
}

@media (max-width: 767px) {
  .trusted-partners-section {
    padding: 60px 0;
  }

  .trusted-partners-grid {
    padding: 0 20px;
  }

  .logo-tiles-grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .partner-tile {
    height: 100px;
  }

  .partner-tile:nth-child(3n) {
    border-right: 1px solid #E2E8F0;
  }

  .partner-tile:nth-child(2n) {
    border-right: none;
  }

  .brand-name {
    font-size: 20px;
  }
}
</style>
