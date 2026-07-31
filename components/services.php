<!-- ============================================================
     SERVICES SHOWCASE SECTION – (02. OUR SERVICES Style Layout)
     ============================================================ -->
<section id="services" class="services-showcase-section">
  
  <div class="container">
    
    <!-- Section Header Row (Header Left, Slider Nav Arrows Right) -->
    <div class="services-header-row" data-aos="fade-up">
      <div class="services-header-left">
        <span class="services-badge">
          <span class="badge-lines">==</span> 02. OUR SERVICES
        </span>
        <h2 class="services-main-title">
          Expert Consulting Solutions Strategic Guidance
        </h2>
      </div>

      <!-- Top Right Slider Navigation Arrows -->
      <div class="services-slider-nav">
        <button class="nav-arrow-btn services-prev-btn" aria-label="Previous Service">
          <i class="fa-solid fa-arrow-left"></i>
        </button>
        <button class="nav-arrow-btn services-next-btn" aria-label="Next Service">
          <i class="fa-solid fa-arrow-right"></i>
        </button>
      </div>
    </div>

    <!-- Swiper Carousel Container -->
    <div class="services-swiper-wrapper" data-aos="fade-up" data-aos-delay="150">
      <div class="swiper services-swiper">
        <div class="swiper-wrapper">
          
          <!-- Card 01: IT Strategy Digital Transformation (Soft Beige/Olive Theme) -->
          <div class="swiper-slide">
            <div class="service-card theme-beige">
              <div class="card-top-content">
                <span class="card-num-step">01</span>
                <h3 class="card-service-title">IT Strategy Digital Transformation</h3>
                <div class="card-line-icon">
                  <i class="fa-solid fa-network-wired"></i>
                </div>
              </div>
              <div class="card-photo-box">
                <img src="assets/images/sketch-it-strategy.png" alt="IT Strategy Digital Transformation" class="card-bottom-img">
              </div>
            </div>
          </div>

          <!-- Card 02: Cloud Consulting Services (Soft Green Theme) -->
          <div class="swiper-slide">
            <div class="service-card theme-green">
              <div class="card-top-content">
                <span class="card-num-step">02</span>
                <h3 class="card-service-title">Cloud Consulting Services</h3>
                <div class="card-line-icon">
                  <i class="fa-solid fa-cloud-arrow-up"></i>
                </div>
              </div>
              <div class="card-photo-box">
                <img src="assets/images/why-scalable.png" alt="Cloud Consulting Services" class="card-bottom-img">
              </div>
            </div>
          </div>

          <!-- Card 03: Software Custom Application (Dark Navy Accent Theme) -->
          <div class="swiper-slide">
            <div class="service-card theme-dark-navy">
              <div class="card-top-content">
                <span class="card-num-step">03</span>
                <h3 class="card-service-title">Software Custom Application</h3>
                <div class="card-line-icon">
                  <i class="fa-solid fa-code"></i>
                </div>
              </div>
              <div class="card-photo-box">
                <img src="assets/images/why-partnership.png" alt="Software Custom Application" class="card-bottom-img">
              </div>
            </div>
          </div>

          <!-- Card 04: AI & Data Analytics Consulting (Soft Cyan/Blue Theme) -->
          <div class="swiper-slide">
            <div class="service-card theme-cyan">
              <div class="card-top-content">
                <span class="card-num-step">04</span>
                <h3 class="card-service-title">AI & Data Analytics Consulting</h3>
                <div class="card-line-icon">
                  <i class="fa-solid fa-brain"></i>
                </div>
              </div>
              <div class="card-photo-box">
                <img src="assets/images/sketch-ai-analytics.png" alt="AI & Data Analytics Consulting" class="card-bottom-img">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>

<!-- Swiper Initialization Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  if (typeof Swiper !== "undefined") {
    new Swiper('.services-swiper', {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      navigation: {
        nextEl: '.services-next-btn',
        prevEl: '.services-prev-btn',
      },
      breakpoints: {
        640: { slidesPerView: 2, spaceBetween: 24 },
        1024: { slidesPerView: 3, spaceBetween: 28 },
        1280: { slidesPerView: 4, spaceBetween: 24 }
      }
    });
  }
});
</script>

<!-- ============================================================
     SERVICES SHOWCASE SCOPED STYLES
     ============================================================ -->
<style>
/* Section Shell (Light Enterprise Theme) */
.services-showcase-section {
  position: relative;
  padding: 100px 0;
  background-color: #F8FAFC;
  overflow: hidden;
}

/* Header Row */
.services-header-row {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  max-width: 1440px;
  margin: 0 auto 50px auto;
  padding: 0 40px;
}

.services-header-left {
  text-align: left;
  max-width: 700px;
}

.services-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 13px;
  font-weight: 800;
  color: #FF5E00;
  letter-spacing: 1.5px;
  margin-bottom: 14px;
}

.badge-lines {
  color: #FF5E00;
  font-weight: 900;
}

.services-main-title {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(34px, 3.6vw, 48px);
  font-weight: 800;
  line-height: 1.15;
  color: #0F172A;
  margin: 0;
  letter-spacing: -0.02em;
}

/* Slider Navigation Buttons */
.services-slider-nav {
  display: flex;
  gap: 14px;
}

.nav-arrow-btn {
  width: 52px;
  height: 52px;
  border-radius: 50%;
  background: #FFFFFF;
  border: 1px solid #CBD5E1;
  color: #0F172A;
  font-size: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  transition: all 250ms ease;
}

.nav-arrow-btn:hover {
  background: #0055FF;
  border-color: #0055FF;
  color: #FFFFFF;
  box-shadow: 0 8px 20px rgba(0, 85, 255, 0.35);
  transform: translateY(-2px);
}

/* Services Swiper Wrapper */
.services-swiper-wrapper {
  max-width: 1440px;
  margin: 0 auto;
  padding: 0 40px;
}

/* Service Card Component */
.service-card {
  border-radius: 24px;
  padding: 32px 28px 20px 28px;
  height: 480px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  box-shadow: 0 16px 40px rgba(15, 23, 42, 0.06);
  transition: transform 300ms ease, box-shadow 300ms ease;
  overflow: hidden;
  box-sizing: border-box;
}

.service-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 24px 50px rgba(15, 23, 42, 0.12);
}

.card-top-content {
  display: flex;
  flex-direction: column;
  text-align: left;
}

.card-num-step {
  font-family: 'Poppins', sans-serif;
  font-size: 16px;
  font-weight: 800;
  color: #FF5E00;
  margin-bottom: 12px;
}

.card-service-title {
  font-family: 'Poppins', sans-serif;
  font-size: 22px;
  font-weight: 800;
  line-height: 1.3;
  margin-bottom: 20px;
}

.card-line-icon {
  font-size: 32px;
  opacity: 0.85;
}

/* Bottom Photo Container inside Card */
.card-photo-box {
  width: 100%;
  height: 230px;
  border-radius: 16px;
  overflow: hidden;
  margin-top: 20px;
  background: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 12px;
  box-sizing: border-box;
  box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.04);
}

.card-bottom-img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  display: block;
  transition: transform 500ms ease;
}

.service-card:hover .card-bottom-img {
  transform: scale(1.06);
}

/* ── DISTINCT CARD COLOR THEMES ── */
/* Theme 01: Soft Beige / Olive */
.theme-beige {
  background-color: #F4F6EA;
  color: #0F172A;
}
.theme-beige .card-service-title { color: #0F172A; }
.theme-beige .card-line-icon { color: #4B5563; }

/* Theme 02: Soft Green */
.theme-green {
  background-color: #E4F4E4;
  color: #0F172A;
}
.theme-green .card-service-title { color: #0F172A; }
.theme-green .card-line-icon { color: #16A34A; }

/* Theme 03: Deep Dark Navy Accent */
.theme-dark-navy {
  background-color: #08163D;
  color: #FFFFFF;
}
.theme-dark-navy .card-service-title { color: #FFFFFF; }
.theme-dark-navy .card-line-icon { color: #A275FF; }

/* Theme 04: Soft Cyan / Blue */
.theme-cyan {
  background-color: #E2F6FE;
  color: #0F172A;
}
.theme-cyan .card-service-title { color: #0F172A; }
.theme-cyan .card-line-icon { color: #0284C7; }

/* Responsive */
@media (max-width: 1199px) {
  .services-header-row {
    flex-direction: column;
    align-items: flex-start;
    gap: 24px;
  }
}

@media (max-width: 767px) {
  .services-showcase-section {
    padding: 60px 0;
  }

  .services-header-row,
  .services-swiper-wrapper {
    padding: 0 20px;
  }

  .service-card {
    height: 440px;
    padding: 24px 20px 16px 20px;
  }

  .card-service-title {
    font-size: 20px;
  }
}
</style>
