<!-- ============================================================
     GLOBAL CONSULTATION & DGPS WORLD MAP SECTION
     ============================================================ -->
<section id="presence" class="presence-consultation-section">
  
  <div class="container">
    
    <!-- 2-Column Split Grid: Left Information & Dotted Map / Right Consultation Form -->
    <div class="presence-consult-grid">
      
      <!-- ============================================================
           LEFT SIDE: Heading, Badges & Dotted Matrix World Map
           ============================================================ -->
      <div class="consult-left-side" data-aos="fade-right">
        
        <h2 class="consult-main-title">
          Let's Solve Your IT Challenges Start Today!
        </h2>
        
        <p class="consult-desc">
          Fill out the form below, and one of our experts will contact you within 24 hours to discuss your needs. Whether it's cybersecurity, cloud solutions, or tech support, we're here to tailor a plan that works for you.
        </p>

        <!-- Feature Pill Badges -->
        <div class="consult-pills-row">
          <span class="consult-pill"><i class="fa-solid fa-circle-check"></i> 24/7 Online Support</span>
          <span class="consult-pill"><i class="fa-solid fa-circle-check"></i> Free Consultation</span>
          <span class="consult-pill"><i class="fa-solid fa-circle-check"></i> Multilingual Support</span>
        </div>

        <!-- Dotted DGPS Digital Matrix World Map Graphic -->
        <div class="matrix-map-wrapper">
          <svg viewBox="0 0 900 450" class="matrix-world-map" aria-hidden="true">
            <defs>
              <!-- Dotted Matrix Pattern -->
              <pattern id="dot-matrix-pattern" width="8" height="8" patternUnits="userSpaceOnUse">
                <circle cx="4" cy="4" r="1.2" fill="rgba(255, 255, 255, 0.45)"/>
              </pattern>

              <!-- Radial Glow for Map Pins -->
              <radialGradient id="pinGlow" cx="50%" cy="50%" r="50%">
                <stop offset="0%" stop-color="#FF3B30"/>
                <stop offset="100%" stop-color="transparent"/>
              </radialGradient>
            </defs>

            <!-- Detailed Dotted World Continent Paths -->
            <g fill="url(#dot-matrix-pattern)">
              <!-- North America -->
              <path d="M 70,60 L 100,50 L 130,45 L 180,40 L 230,55 L 270,65 L 285,85 L 270,110 L 250,125 L 235,150 L 215,170 L 200,200 L 180,215 L 165,200 L 150,185 L 135,165 L 120,150 L 105,135 L 85,120 L 65,105 L 60,85 Z"/>
              <path d="M 220,25 L 250,15 L 270,25 L 255,45 L 230,35 Z"/> <!-- Greenland -->

              <!-- South America -->
              <path d="M 210,230 L 240,220 L 275,245 L 295,280 L 300,320 L 280,360 L 260,400 L 240,420 L 225,400 L 215,360 L 210,320 L 200,280 L 195,250 Z"/>

              <!-- Europe -->
              <path d="M 420,65 L 450,55 L 490,50 L 520,65 L 535,85 L 515,105 L 485,110 L 455,105 L 430,100 L 410,85 Z"/>
              <path d="M 400,85 L 415,65 L 430,75 L 410,95 Z"/> <!-- UK -->

              <!-- Africa -->
              <path d="M 440,130 L 500,125 L 550,155 L 570,195 L 555,235 L 535,275 L 520,325 L 505,365 L 480,380 L 460,350 L 450,300 L 435,255 L 420,205 L 415,165 Z"/>
              <path d="M 575,300 L 590,290 L 595,325 L 580,335 Z"/> <!-- Madagascar -->

              <!-- Asia -->
              <path d="M 525,60 L 590,45 L 670,40 L 750,45 L 820,60 L 860,85 L 840,120 L 800,140 L 750,155 L 710,175 L 670,200 L 630,185 L 590,165 L 555,140 L 530,110 Z"/>
              <path d="M 820,125 L 840,115 L 850,145 L 830,165 Z"/> <!-- Japan -->

              <!-- Australia & Oceania -->
              <path d="M 760,310 L 820,295 L 880,305 L 925,335 L 930,370 L 900,415 L 840,425 L 780,410 L 755,365 L 745,335 Z"/>
            </g>

            <!-- 3D Pin Location Markers -->
            <!-- 1. Sydney HQ (Cyan Pin) -->
            <g transform="translate(840, 360)">
              <circle cx="0" cy="0" r="16" fill="rgba(6, 182, 212, 0.25)" class="pin-pulse"/>
              <path d="M0,-12 C-5,-12 -8,-8 -8,-3 C-8,4 0,12 0,12 C0,12 8,4 8,-3 C8,-8 5,-12 0,-12 Z" fill="#06B6D4"/>
              <circle cx="0" cy="-4" r="2.5" fill="#FFFFFF"/>
            </g>

            <!-- 2. India Bangalore (Red Pin) -->
            <g transform="translate(685, 230)">
              <circle cx="0" cy="0" r="18" fill="rgba(239, 68, 68, 0.3)" class="pin-pulse"/>
              <path d="M0,-14 C-6,-14 -10,-9 -10,-4 C-10,4 0,14 0,14 C0,14 10,4 10,-4 C10,-9 6,-14 0,-14 Z" fill="#EF4444"/>
              <circle cx="0" cy="-4" r="3" fill="#FFFFFF"/>
            </g>

            <!-- 3. South Africa Johannesburg (Green Pin) -->
            <g transform="translate(495, 345)">
              <circle cx="0" cy="0" r="16" fill="rgba(16, 185, 129, 0.25)" class="pin-pulse"/>
              <path d="M0,-12 C-5,-12 -8,-8 -8,-3 C-8,4 0,12 0,12 C0,12 8,4 8,-3 C8,-8 5,-12 0,-12 Z" fill="#10B981"/>
              <circle cx="0" cy="-4" r="2.5" fill="#FFFFFF"/>
            </g>
          </svg>
        </div>

      </div>

      <!-- ============================================================
           RIGHT SIDE: Consultation Request Form Card
           ============================================================ -->
      <div class="consult-right-side" data-aos="fade-left">
        <div class="consult-form-card">
          
          <form class="consult-form-element" onsubmit="event.preventDefault(); alert('Thank you! Your request has been submitted successfully.');">
            
            <!-- Row 1: Full Name & Email -->
            <div class="form-row-2">
              <div class="form-group">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-input" placeholder="Your Full Name" required>
              </div>
              <div class="form-group">
                <label class="form-label">Email ID*</label>
                <input type="email" class="form-input" placeholder="example@email.com" required>
              </div>
            </div>

            <!-- Row 2: Phone Number & Location -->
            <div class="form-row-2">
              <div class="form-group">
                <label class="form-label">Phone Number</label>
                <div class="phone-input-wrap">
                  <span class="flag-icon">🇦🇺 +61</span>
                  <input type="tel" class="form-input phone-field" placeholder="468 403 743" required>
                </div>
              </div>
              <div class="form-group">
                <label class="form-label">Location</label>
                <input type="text" class="form-input" placeholder="City, Country" required>
              </div>
            </div>

            <!-- Row 3: Select Requirement Dropdown -->
            <div class="form-group full-width">
              <label class="form-label">Select Requirement</label>
              <div class="select-wrap">
                <select class="form-select" required>
                  <option value="" disabled selected>-- Select Requirement --</option>
                  <option value="ai">AI & Machine Learning Solutions</option>
                  <option value="cloud">Cloud Engineering & DevOps</option>
                  <option value="software">Custom Enterprise Software</option>
                  <option value="cyber">Cybersecurity & ISO Compliance</option>
                  <option value="iot">IoT & Hardware Telemetry</option>
                  <option value="data">Data Platforms & Analytics</option>
                </select>
                <i class="fa-solid fa-chevron-down select-arrow"></i>
              </div>
            </div>

            <!-- Row 4: Your Message -->
            <div class="form-group full-width">
              <label class="form-label">Your Message</label>
              <textarea class="form-textarea" rows="4" placeholder="How can we help you?" required></textarea>
            </div>

            <!-- Privacy Text -->
            <p class="privacy-note">
              Your data is safe with us. We never share your information and only use it to serve you better.
            </p>

            <!-- Captcha Mockup Box -->
            <div class="captcha-box">
              <div class="captcha-check">
                <input type="checkbox" id="captcha-cb" required>
                <label for="captcha-cb">I'm not a robot</label>
              </div>
              <div class="captcha-logo">
                <i class="fa-solid fa-arrows-rotate"></i>
                <small>reCAPTCHA</small>
              </div>
            </div>

            <!-- Action Submit Button -->
            <button type="submit" class="btn-consult-submit">
              GET FREE CONSULTATION <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </button>

          </form>

        </div>
      </div>

    </div>

  </div>
</section>

<!-- ============================================================
     GLOBAL CONSULTATION SCOPED STYLES
     ============================================================ -->
<style>
/* Section Shell (Rich Purple Palette) */
.presence-consultation-section {
  position: relative;
  padding: 100px 40px;
  background: linear-gradient(135deg, #6A1BFF 0%, #4D12C9 100%);
  color: #FFFFFF;
  overflow: hidden;
}

/* 2-Column Split Grid */
.presence-consult-grid {
  display: grid;
  grid-template-columns: 50% calc(50% - 40px);
  gap: 40px;
  align-items: center;
  max-width: 1440px;
  margin: 0 auto;
}

/* ── LEFT SIDE: Info & Matrix Map ── */
.consult-left-side {
  width: 100%;
}

.consult-main-title {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(34px, 3.8vw, 54px);
  font-weight: 800;
  line-height: 1.15;
  color: #FFFFFF;
  margin-bottom: 20px;
  letter-spacing: -0.02em;
}

.consult-desc {
  font-size: 18px;
  line-height: 1.6;
  color: rgba(255, 255, 255, 0.9);
  margin-bottom: 32px;
  max-width: 620px;
}

/* Pill Badges */
.consult-pills-row {
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
  margin-bottom: 40px;
}

.consult-pill {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 10px 20px;
  background: rgba(255, 255, 255, 0.95);
  border-radius: 100px;
  font-size: 14px;
  font-weight: 700;
  color: #0F172A;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
}

.consult-pill i {
  color: #10B981;
  font-size: 1.1rem;
}

/* Dotted Matrix World Map */
.matrix-map-wrapper {
  width: 100%;
  max-width: 580px;
  margin-top: 10px;
}

.matrix-world-map {
  width: 100%;
  height: auto;
  display: block;
}

.pin-pulse {
  animation: pinPulse 2s infinite ease-in-out;
}

@keyframes pinPulse {
  0% { transform: scale(0.8); opacity: 0.8; }
  50% { transform: scale(1.4); opacity: 0.3; }
  100% { transform: scale(0.8); opacity: 0.8; }
}

/* ── RIGHT SIDE: Form Card ── */
.consult-right-side {
  width: 100%;
}

.consult-form-card {
  background: #EBF3FE;
  border-radius: 28px;
  padding: 40px;
  box-shadow: 0 24px 64px rgba(0, 0, 0, 0.2);
  color: #0F172A;
  box-sizing: border-box;
}

.consult-form-element {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.form-row-2 {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 20px;
}

.form-group {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.form-group.full-width {
  width: 100%;
}

.form-label {
  font-size: 14px;
  font-weight: 700;
  color: #0F172A;
}

.form-input,
.form-select,
.form-textarea {
  width: 100%;
  height: 48px;
  padding: 0 16px;
  border-radius: 12px;
  border: 1px solid #CBD5E1;
  background: #FFFFFF;
  font-size: 14px;
  font-weight: 500;
  color: #0F172A;
  outline: none;
  transition: border-color 200ms ease, box-shadow 200ms ease;
  box-sizing: border-box;
}

.form-input:focus,
.form-select:focus,
.form-textarea:focus {
  border-color: #0D6EFD;
  box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.15);
}

.phone-input-wrap {
  display: flex;
  align-items: center;
  background: #FFFFFF;
  border: 1px solid #CBD5E1;
  border-radius: 12px;
  padding: 0 12px;
}

.flag-icon {
  font-size: 13px;
  font-weight: 700;
  color: #475569;
  padding-right: 8px;
  border-right: 1px solid #E2E8F0;
  white-space: nowrap;
}

.phone-field {
  border: none !important;
  box-shadow: none !important;
  padding-left: 10px;
}

.select-wrap {
  position: relative;
  width: 100%;
}

.select-wrap select {
  appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
}

.select-arrow {
  position: absolute;
  right: 16px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 12px;
  color: #64748B;
  pointer-events: none;
}

.form-textarea {
  height: auto;
  padding: 14px 16px;
  resize: vertical;
}

.privacy-note {
  font-size: 12.5px;
  line-height: 1.5;
  color: #64748B;
}

/* Captcha Box Mockup */
.captcha-box {
  background: #F8FAFC;
  border: 1px solid #CBD5E1;
  border-radius: 8px;
  padding: 14px 18px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 280px;
}

.captcha-check {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 14px;
  font-weight: 600;
  color: #0F172A;
}

.captcha-check input {
  width: 20px;
  height: 20px;
  cursor: pointer;
}

.captcha-logo {
  display: flex;
  flex-direction: column;
  align-items: center;
  color: #3B82F6;
  font-size: 10px;
}

.captcha-logo i {
  font-size: 16px;
  margin-bottom: 2px;
}

/* Action Submit Button */
.btn-consult-submit {
  width: 100%;
  height: 52px;
  border-radius: 100px;
  background: #0055FF;
  color: #FFFFFF;
  font-size: 15px;
  font-weight: 800;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  border: none;
  cursor: pointer;
  box-shadow: 0 8px 24px rgba(0, 85, 255, 0.35);
  transition: all 250ms ease;
  margin-top: 10px;
}

.btn-consult-submit:hover {
  background: #0044CC;
  box-shadow: 0 12px 32px rgba(0, 85, 255, 0.5);
  transform: translateY(-2px);
}

/* ── Responsive Breakpoints ── */
@media (max-width: 1199px) {
  .presence-consult-grid {
    grid-template-columns: 1fr;
    gap: 50px;
  }

  .consult-main-title {
    font-size: 40px;
  }
}

@media (max-width: 767px) {
  .presence-consultation-section {
    padding: 70px 20px;
  }

  .consult-form-card {
    padding: 28px 20px;
  }

  .form-row-2 {
    grid-template-columns: 1fr;
  }
}
</style>
