<!-- ============================================================
     ABOUT OUR COMPANY SECTION – (Tekni About Style Layout)
     ============================================================ -->
<section id="why-jaiton" class="about-company-section">
  
  <div class="container">
    <div class="about-company-grid">
      
      <!-- ============================================================
           LEFT COLUMN: Overlapping Dual Photo Grid & Hexagon Badge
           ============================================================ -->
      <div class="about-media-side" data-aos="fade-right" data-aos-duration="800">
        <div class="about-media-wrapper">
          
          <!-- Main Primary Collaboration Photo -->
          <div class="about-main-photo-frame">
            <img src="assets/images/hero-meeting.png" alt="Jaiton Technologies Engineering Team" class="about-photo-img">
          </div>

          <!-- Floating Gradient Hexagonal Certified Badge -->
          <div class="about-hexagon-badge" data-aos="zoom-in" data-aos-delay="300">
            <div class="hexagon-inner">
              <i class="fa-solid fa-file-certificate hex-icon"></i>
              <span class="hex-text">Certified Company</span>
            </div>
          </div>

          <!-- Secondary Developer Portrait Photo (Overlapping Bottom Right) -->
          <div class="about-sub-photo-frame" data-aos="fade-up" data-aos-delay="400">
            <img src="assets/images/about-developer.png" alt="Developer Inspecting Solutions" class="sub-photo-img">
          </div>

        </div>
      </div>

      <!-- ============================================================
           RIGHT COLUMN: About Header & Numbered Steps Stack
           ============================================================ -->
      <div class="about-content-side" data-aos="fade-left" data-aos-duration="800">
        
        <!-- Outline Badge -->
        <span class="about-outline-badge">
          ABOUT OUR COMPANY
        </span>

        <!-- Main Title -->
        <h2 class="about-main-title">
          Discover Innovative Solution & Technology
        </h2>

        <!-- Numbered Step List Flow (Connected by Vertical Line) -->
        <div class="about-steps-flow">
          
          <!-- Step 01 -->
          <div class="about-step-item">
            <div class="step-num-circle">01</div>
            <div class="step-text-content">
              <h3 class="step-title">Planning & strategy</h3>
              <p class="step-desc">
                Comprehensive discovery, technical architecture, and strategic roadmap planning tailored to your enterprise goals.
              </p>
            </div>
          </div>

          <!-- Step 02 -->
          <div class="about-step-item">
            <div class="step-num-circle">02</div>
            <div class="step-text-content">
              <h3 class="step-title">Testing & quality assurance</h3>
              <p class="step-desc">
                Rigorous automated testing, security audits, and continuous quality verification across all engineering stages.
              </p>
            </div>
          </div>

          <!-- Step 03 -->
          <div class="about-step-item">
            <div class="step-num-circle">03</div>
            <div class="step-text-content">
              <h3 class="step-title">Scalable Cloud & AI Deployment</h3>
              <p class="step-desc">
                Seamless cloud integration, automated CI/CD DevOps pipelines, and enterprise AI model deployment.
              </p>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     ABOUT OUR COMPANY SCOPED STYLES
     ============================================================ -->
<style>
/* Section Shell (Light Enterprise Theme) */
.about-company-section {
  position: relative;
  padding: 100px 0;
  background-color: #F8FAFC;
  overflow: hidden;
}

.about-company-grid {
  display: grid;
  grid-template-columns: 48% calc(52% - 48px);
  gap: 48px;
  align-items: center;
  max-width: 1440px;
  margin: 0 auto;
  padding: 0 40px;
}

/* ── LEFT COLUMN: Dual Photo Grid & Hexagon ── */
.about-media-side {
  width: 100%;
}

.about-media-wrapper {
  position: relative;
  width: 100%;
  max-width: 540px;
  margin: 0 auto;
  padding-bottom: 60px;
}

/* Main Primary Photo Frame */
.about-main-photo-frame {
  width: 78%;
  height: 440px;
  border-radius: 24px;
  overflow: hidden;
  box-shadow: 0 20px 48px rgba(15, 23, 42, 0.12);
  background: #CBD5E1;
}

.about-photo-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

/* Floating Gradient Hexagon Badge */
.about-hexagon-badge {
  position: absolute;
  top: 15px;
  left: 54%;
  width: 160px;
  height: 180px;
  background: linear-gradient(135deg, #6A1BFF 0%, #0055FF 100%);
  clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 16px 36px rgba(109, 40, 255, 0.35);
  z-index: 10;
}

.hexagon-inner {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  padding: 10px;
  color: #FFFFFF;
}

.hex-icon {
  font-size: 34px;
  margin-bottom: 8px;
}

.hex-text {
  font-family: 'Poppins', sans-serif;
  font-size: 13px;
  font-weight: 800;
  line-height: 1.25;
  max-width: 100px;
}

/* Secondary Sub Photo Frame */
.about-sub-photo-frame {
  position: absolute;
  bottom: 0;
  right: 0;
  width: 48%;
  height: 260px;
  border-radius: 20px;
  overflow: hidden;
  border: 6px solid #FFFFFF;
  box-shadow: 0 16px 40px rgba(15, 23, 42, 0.15);
  z-index: 5;
  background: #CBD5E1;
}

.sub-photo-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

/* ── RIGHT COLUMN: Content & Steps ── */
.about-content-side {
  text-align: left;
}

.about-outline-badge {
  display: inline-block;
  padding: 6px 18px;
  border: 1.5px solid rgba(109, 40, 255, 0.3);
  border-radius: 100px;
  font-size: 12.5px;
  font-weight: 800;
  color: #6A1BFF;
  letter-spacing: 1px;
  margin-bottom: 18px;
  background: rgba(109, 40, 255, 0.04);
}

.about-main-title {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(32px, 3.2vw, 48px);
  font-weight: 800;
  line-height: 1.18;
  color: #0F172A;
  margin-bottom: 36px;
  letter-spacing: -0.02em;
}

/* Numbered Steps List Stack */
.about-steps-flow {
  position: relative;
  display: flex;
  flex-direction: column;
  gap: 32px;
}

/* Connecting Vertical Line */
.about-steps-flow::before {
  content: '';
  position: absolute;
  top: 24px;
  left: 23px;
  bottom: 24px;
  width: 2px;
  border-left: 2px dashed #CBD5E1;
  z-index: 1;
}

.about-step-item {
  position: relative;
  display: flex;
  align-items: flex-start;
  gap: 24px;
  z-index: 2;
}

.step-num-circle {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  background: #08163D;
  color: #FFFFFF;
  font-family: 'Poppins', sans-serif;
  font-size: 15px;
  font-weight: 800;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  box-shadow: 0 6px 16px rgba(8, 22, 61, 0.25);
  transition: all 250ms ease;
}

.about-step-item:hover .step-num-circle {
  background: #6A1BFF;
  transform: scale(1.1);
  box-shadow: 0 8px 24px rgba(106, 27, 255, 0.4);
}

.step-text-content {
  display: flex;
  flex-direction: column;
  gap: 6px;
  padding-top: 4px;
}

.step-title {
  font-family: 'Poppins', sans-serif;
  font-size: 20px;
  font-weight: 800;
  color: #0F172A;
  margin: 0;
}

.step-desc {
  font-size: 15px;
  line-height: 1.6;
  color: #64748B;
  margin: 0;
  max-width: 540px;
}

/* Responsive */
@media (max-width: 1199px) {
  .about-company-grid {
    grid-template-columns: 1fr;
    gap: 60px;
  }

  .about-media-wrapper {
    max-width: 480px;
  }
}

@media (max-width: 767px) {
  .about-company-section {
    padding: 70px 0;
  }

  .about-company-grid {
    padding: 0 20px;
  }

  .about-main-photo-frame {
    height: 340px;
  }

  .about-sub-photo-frame {
    height: 190px;
  }

  .about-hexagon-badge {
    width: 130px;
    height: 145px;
  }

  .hex-icon {
    font-size: 26px;
  }

  .about-main-title {
    font-size: 32px;
  }
}
</style>
