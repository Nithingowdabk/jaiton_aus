<!-- ============================================================
     HERO SECTION – Premium 2-Column Layout with Background Video & Image Grid
     ============================================================ -->
<section id="hero" class="hero-section">
  
  <!-- Full-Width Background Video Layer with Dark Overlay -->
  <div class="hero-bg-layers">
    <div class="hero-video-container">
      <video autoplay loop muted playsinline class="hero-bg-video">
        <source src="assets/video/hero.mp4" type="video/mp4">
      </video>
    </div>
    <!-- Dark overlay for maximum text contrast and legibility -->
    <div class="hero-video-overlay"></div>
    <div class="hero-bg-grid"></div>
  </div>

  <!-- Hero Container -->
  <div class="hero-container">
    <div class="hero-grid">
      
      <!-- LEFT COLUMN (52%): Headline, Checklist & CTAs -->
      <div class="hero-left" data-aos="fade-right" data-aos-duration="600">
        
        <h1 class="hero-heading">
          Australia's custom <span class="gradient-text">software development</span> partner
        </h1>

        <p class="hero-description">
          High-end software solutions to complex, real-world enterprise problems.
        </p>

        <!-- Checklist Row -->
        <div class="hero-checklist">
          <div class="check-item">
            <span class="check-icon"><i class="fa-solid fa-circle-check"></i></span>
            <span>ISO 9001 and 27001 certified for quality and security</span>
          </div>
          <div class="check-item">
            <span class="check-icon"><i class="fa-solid fa-circle-check"></i></span>
            <span>100% Australian-based onshore strategy team</span>
          </div>
          <div class="check-item">
            <span class="check-icon"><i class="fa-solid fa-circle-check"></i></span>
            <span>Flexible engineering squads tailored to your needs</span>
          </div>
        </div>
        
        <!-- CTA Action Buttons (Pill-shaped) -->
        <div class="hero-ctas">
          <a href="#contact" class="btn btn-hero-primary">Get in touch <i class="fa-solid fa-arrow-right"></i></a>
          <a href="#why-jaiton" class="btn btn-hero-outline">See our work <i class="fa-solid fa-arrow-right-long"></i></a>
        </div>

      </div>

      <!-- RIGHT COLUMN (48%): 3-Photo Grid & Trust Badges Overlay -->
      <div class="hero-right" data-aos="fade-left" data-aos-duration="800">
        <div class="hero-media-card">
          
          <!-- Photo Grid Layout -->
          <div class="hero-photo-grid">
            
            <!-- Top Row: 2 Photos -->
            <div class="photo-row top-row">
              <div class="photo-frame">
                <img src="assets/images/hero-wireframes.png" alt="Engineering UI UX Wireframing" class="hero-img">
              </div>
              <div class="photo-frame">
                <img src="assets/images/hero-collaborating.png" alt="Engineers Collaborating" class="hero-img">
              </div>
            </div>

            <!-- Bottom Row: 1 Wide Photo -->
            <div class="photo-row bottom-row">
              <div class="photo-frame wide-frame">
                <img src="assets/images/hero-meeting.png" alt="Enterprise Software Team Meeting" class="hero-img">
              </div>
            </div>

          </div>

          <!-- Bottom Floating Enterprise Badges -->
          <div class="hero-trust-badges">
            <div class="trust-badge badge-google">
              <div class="badge-brand"><i class="fa-brands fa-google" style="color:#4285F4;"></i> Google</div>
              <div class="badge-stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
              <div class="badge-score">4.9</div>
            </div>

            <div class="trust-badge badge-award">
              <i class="fa-solid fa-award badge-icon" style="color:#3B82F6;"></i>
              <div class="badge-title">GOOD DESIGN</div>
              <div class="badge-sub">AWARD WINNER</div>
            </div>

            <div class="trust-badge badge-aws">
              <i class="fa-brands fa-aws badge-icon" style="color:#FF9900;"></i>
              <div class="badge-title">AWS PARTNER</div>
              <div class="badge-sub">Consulting</div>
            </div>

            <div class="trust-badge badge-iso">
              <i class="fa-solid fa-shield-check badge-icon" style="color:#10B981;"></i>
              <div class="badge-title">ISO 27001</div>
              <div class="badge-sub">Certified</div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     HERO SCOPED STYLES
     ============================================================ -->
<style>
/* ── Section Shell ── */
.hero-section {
  position: relative;
  min-height: calc(100vh - 88px);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: var(--dark-navy);
  padding-top: 130px;
  padding-bottom: 70px;
  box-sizing: border-box;
  overflow: hidden;
}

/* ── Background Video & Dark Overlay ── */
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
  opacity: 1;
}

.hero-bg-video {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hero-video-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(8, 19, 39, 0.88) 0%, rgba(8, 19, 39, 0.75) 60%, rgba(109, 40, 255, 0.25) 100%);
}

.hero-bg-grid {
  position: absolute;
  inset: 0;
  background-size: 40px 40px;
  background-image:
    linear-gradient(to right, rgba(255,255,255,0.02) 1px, transparent 1px),
    linear-gradient(to bottom, rgba(255,255,255,0.02) 1px, transparent 1px);
}

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

/* ── 2-Column Hero Grid ── */
.hero-grid {
  display: grid;
  grid-template-columns: 52% 48%;
  gap: 48px;
  align-items: center;
  width: 100%;
}

/* ── Left Column ── */
.hero-left {
  text-align: left;
}

.hero-heading {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(38px, 3.4vw, 54px);
  font-weight: 800;
  line-height: 1.15;
  color: var(--white);
  letter-spacing: -0.02em;
  margin-bottom: 18px;
}

.gradient-text {
  background: linear-gradient(135deg, #a275ff 0%, #3B82F6 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  display: inline;
}

.hero-description {
  font-size: clamp(16px, 1.2vw, 19px);
  line-height: 1.6;
  color: #cbd5e1;
  max-width: 580px;
  margin-bottom: 28px;
}

/* Checklist Items */
.hero-checklist {
  display: flex;
  flex-direction: column;
  gap: 12px;
  margin-bottom: 32px;
}

.check-item {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 15px;
  font-weight: 600;
  color: var(--white);
}

.check-icon {
  color: #3B82F6;
  font-size: 1rem;
  display: flex;
  align-items: center;
}

/* Pill CTA Buttons */
.hero-ctas {
  display: flex;
  align-items: center;
  gap: 16px;
  flex-wrap: wrap;
}

.btn-hero-primary {
  height: 52px;
  padding: 0 32px;
  border-radius: 100px;
  background: #3B82F6;
  color: var(--white);
  font-size: 15px;
  font-weight: 700;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  border: none;
  box-shadow: 0 4px 18px rgba(59, 130, 246, 0.4);
  transition: all var(--transition-normal);
}

.btn-hero-primary:hover {
  background: #2563EB;
  box-shadow: 0 8px 26px rgba(59, 130, 246, 0.6);
  transform: translateY(-2px);
  color: var(--white);
}

.btn-hero-outline {
  height: 52px;
  padding: 0 32px;
  border-radius: 100px;
  background: rgba(255, 255, 255, 0.05);
  border: 1.5px solid #3B82F6;
  color: var(--white);
  font-size: 15px;
  font-weight: 700;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  transition: all var(--transition-normal);
}

.btn-hero-outline:hover {
  background: rgba(59, 130, 246, 0.15);
  border-color: #60A5FA;
  transform: translateY(-2px);
  color: var(--white);
}

/* ── Right Column: Photo Grid ── */
.hero-right {
  width: 100%;
}

.hero-media-card {
  position: relative;
  width: 100%;
}

.hero-photo-grid {
  display: flex;
  flex-direction: column;
  gap: 16px;
  width: 100%;
}

.photo-row {
  display: flex;
  gap: 16px;
  width: 100%;
}

.photo-frame {
  flex: 1;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 16px 36px rgba(0, 0, 0, 0.4);
  border: 1px solid rgba(255, 255, 255, 0.15);
  background: rgba(255, 255, 255, 0.05);
}

.photo-frame.wide-frame {
  flex: none;
  width: 100%;
}

.hero-img {
  width: 100%;
  height: 190px;
  object-fit: cover;
  display: block;
  transition: transform 400ms ease;
}

.wide-frame .hero-img {
  height: 220px;
}

.photo-frame:hover .hero-img {
  transform: scale(1.04);
}

/* Floating Trust Badges Overlay */
.hero-trust-badges {
  position: absolute;
  bottom: -20px;
  right: 12px;
  display: flex;
  align-items: center;
  gap: 12px;
  z-index: 10;
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(16px);
  padding: 8px 16px;
  border-radius: 100px;
  border: 1px solid rgba(255, 255, 255, 0.6);
  box-shadow: 0 12px 32px rgba(8, 19, 39, 0.3);
}

.trust-badge {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 4px 8px;
  text-align: center;
  border-right: 1px solid rgba(0, 0, 0, 0.08);
}

.trust-badge:last-child {
  border-right: none;
}

.badge-brand {
  font-size: 0.75rem;
  font-weight: 800;
  color: #0F172A;
}

.badge-stars {
  color: #F59E0B;
  font-size: 0.65rem;
  display: flex;
  gap: 2px;
}

.badge-score {
  font-size: 0.75rem;
  font-weight: 800;
  color: #0F172A;
}

.badge-icon {
  font-size: 1rem;
  margin-bottom: 2px;
}

.badge-title {
  font-size: 0.65rem;
  font-weight: 800;
  color: #0F172A;
  line-height: 1;
}

.badge-sub {
  font-size: 0.58rem;
  font-weight: 600;
  color: #64748B;
  text-transform: uppercase;
}

/* ── Responsive Breakpoints ── */
@media (max-width: 1199px) {
  .hero-grid {
    grid-template-columns: 1fr;
    gap: 40px;
  }

  .hero-heading {
    font-size: clamp(32px, 4vw, 44px);
  }

  .hero-trust-badges {
    position: relative;
    bottom: 0;
    right: 0;
    margin-top: 16px;
    justify-content: center;
    flex-wrap: wrap;
    border-radius: 20px;
  }
}

@media (max-width: 767px) {
  .hero-section {
    padding-top: 110px;
    padding-bottom: 50px;
  }

  .hero-container {
    padding-left: 20px;
    padding-right: 20px;
  }

  .photo-row {
    flex-direction: column;
  }

  .hero-img {
    height: 160px;
  }

  .hero-ctas {
    flex-direction: column;
    width: 100%;
  }

  .hero-ctas .btn {
    width: 100%;
  }
}
</style>
