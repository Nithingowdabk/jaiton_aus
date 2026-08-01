<!-- ============================================================
     SERVICES SHOWCASE SECTION – Enterprise Premium Standard
     ============================================================ -->
<section id="services" class="services-showcase-section">
  
  <div class="container">
    
    <!-- Section Header Row (Header Left, Slider Nav Arrows Right) -->
    <div class="services-header-row" data-aos="fade-up">
      <div class="services-header-left">
        <span class="services-badge">
          <span class="badge-dot"></span> OUR SERVICES & CAPABILITIES
        </span>
        <h2 class="services-main-title">
          Enterprise Technology & Transformation Solutions
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
    <div class="services-swiper-wrapper" data-aos="fade-up" data-aos-delay="120">
      <div class="swiper services-swiper">
        <div class="swiper-wrapper">
          
          <!-- Card 01: IT Strategy & Digital Transformation -->
          <div class="swiper-slide">
            <div class="enterprise-service-card" data-aos="fade-up" data-aos-delay="0">
              <div class="card-top-bar"></div>
              <div class="card-left-bar"></div>

              <!-- Top Content (45%) -->
              <div class="card-content-wrap">
                <div class="card-header-meta">
                  <span class="card-num-step">01</span>
                  <div class="card-icon-box">
                    <i class="fa-solid fa-chart-diagram"></i>
                  </div>
                </div>

                <h3 class="card-service-title">IT Strategy & Digital Transformation</h3>
                <p class="card-service-desc">Strategic roadmaps, technology alignment, and enterprise modernization for Australian businesses.</p>
              </div>

              <!-- Bottom Photography Box (55%) -->
              <div class="card-photo-wrapper">
                <div class="photo-overlay-brand"></div>
                <div class="photo-spotlight"></div>
                <img src="assets/images/service-it-strategy.png" alt="IT Strategy & Digital Transformation Consultants" class="card-photo-img">
              </div>

              <!-- Bottom Right Animated Arrow Action -->
              <div class="card-footer-action">
                <div class="card-arrow-circle">
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 02: Cloud Consulting Services -->
          <div class="swiper-slide">
            <div class="enterprise-service-card" data-aos="fade-up" data-aos-delay="120">
              <div class="card-top-bar"></div>
              <div class="card-left-bar"></div>

              <!-- Top Content (45%) -->
              <div class="card-content-wrap">
                <div class="card-header-meta">
                  <span class="card-num-step">02</span>
                  <div class="card-icon-box">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                  </div>
                </div>

                <h3 class="card-service-title">Cloud Consulting Services</h3>
                <p class="card-service-desc">Multi-cloud architecture, DevOps automation, cloud migration, and high-availability SLA platforms.</p>
              </div>

              <!-- Bottom Photography Box (55%) -->
              <div class="card-photo-wrapper">
                <div class="photo-overlay-brand"></div>
                <div class="photo-spotlight"></div>
                <img src="assets/images/service-cloud-consulting.png" alt="Cloud Consulting Services Engineers" class="card-photo-img">
              </div>

              <!-- Bottom Right Animated Arrow Action -->
              <div class="card-footer-action">
                <div class="card-arrow-circle">
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 03: Custom Software Development -->
          <div class="swiper-slide">
            <div class="enterprise-service-card" data-aos="fade-up" data-aos-delay="240">
              <div class="card-top-bar"></div>
              <div class="card-left-bar"></div>

              <!-- Top Content (45%) -->
              <div class="card-content-wrap">
                <div class="card-header-meta">
                  <span class="card-num-step">03</span>
                  <div class="card-icon-box">
                    <i class="fa-solid fa-code-branch"></i>
                  </div>
                </div>

                <h3 class="card-service-title">Custom Software Development</h3>
                <p class="card-service-desc">Bespoke enterprise applications, API integrations, and resilient full-stack software solutions.</p>
              </div>

              <!-- Bottom Photography Box (55%) -->
              <div class="card-photo-wrapper">
                <div class="photo-overlay-brand"></div>
                <div class="photo-spotlight"></div>
                <img src="assets/images/service-custom-software.png" alt="Custom Software Engineering Squad" class="card-photo-img">
              </div>

              <!-- Bottom Right Animated Arrow Action -->
              <div class="card-footer-action">
                <div class="card-arrow-circle">
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </div>
            </div>
          </div>

          <!-- Card 04: AI & Data Analytics -->
          <div class="swiper-slide">
            <div class="enterprise-service-card" data-aos="fade-up" data-aos-delay="360">
              <div class="card-top-bar"></div>
              <div class="card-left-bar"></div>

              <!-- Top Content (45%) -->
              <div class="card-content-wrap">
                <div class="card-header-meta">
                  <span class="card-num-step">04</span>
                  <div class="card-icon-box">
                    <i class="fa-solid fa-brain"></i>
                  </div>
                </div>

                <h3 class="card-service-title">AI & Data Analytics</h3>
                <p class="card-service-desc">Enterprise LLMs, predictive machine learning models, and real-time business intelligence dashboards.</p>
              </div>

              <!-- Bottom Photography Box (55%) -->
              <div class="card-photo-wrapper">
                <div class="photo-overlay-brand"></div>
                <div class="photo-spotlight"></div>
                <img src="assets/images/service-ai-analytics.png" alt="AI & Data Analytics Data Scientists" class="card-photo-img">
              </div>

              <!-- Bottom Right Animated Arrow Action -->
              <div class="card-footer-action">
                <div class="card-arrow-circle">
                  <i class="fa-solid fa-arrow-right"></i>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</section>

<!-- Swiper & 3D Tilt Interactive Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  // Initialize Swiper
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

  // 3D Tilt Interaction for Enterprise Service Cards
  const cards = document.querySelectorAll('.enterprise-service-card');
  cards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
      if (window.innerWidth <= 991) return;
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;
      const rotateX = ((y - centerY) / centerY) * -4;
      const rotateY = ((x - centerX) / centerX) * 4;

      card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-10px)`;
    });

    card.addEventListener('mouseleave', () => {
      if (window.innerWidth <= 991) return;
      card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0)';
    });
  });
});
</script>

<!-- ============================================================
     SERVICES SHOWCASE SCOPED STYLES
     ============================================================ -->
<style>
/* ── Section Shell (Enterprise Light Theme) ── */
.services-showcase-section {
  position: relative;
  padding: 110px 0;
  background-color: #F8FAFC;
  overflow: hidden;
}

/* ── Section Header Row ── */
.services-header-row {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  max-width: 1440px;
  margin: 0 auto 54px auto;
  padding: 0 40px;
}

.services-header-left {
  text-align: left;
  max-width: 720px;
}

.services-badge {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-size: 13px;
  font-weight: 800;
  color: #6A1BFF;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  margin-bottom: 16px;
  background: rgba(106, 27, 255, 0.06);
  padding: 6px 16px;
  border-radius: 100px;
  border: 1px solid rgba(106, 27, 255, 0.15);
}

.badge-dot {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: #6A1BFF;
  display: inline-block;
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

/* ── Slider Navigation Arrows ── */
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
  background: linear-gradient(135deg, #6A1BFF 0%, #3B82F6 100%);
  border-color: transparent;
  color: #FFFFFF;
  box-shadow: 0 8px 20px rgba(106, 27, 255, 0.35);
  transform: translateY(-2px);
}

/* Swiper Container */
.services-swiper-wrapper {
  max-width: 1440px;
  margin: 0 auto;
  padding: 0 40px;
}

/* ── ENTERPRISE PREMIUM SERVICE CARD ── */
.enterprise-service-card {
  position: relative;
  border-radius: 28px;
  background: #FFFFFF;
  border: 1px solid rgba(226, 232, 240, 0.9);
  box-shadow: 0 10px 30px -10px rgba(15, 23, 42, 0.05), 0 1px 3px rgba(15, 23, 42, 0.04);
  height: 530px;
  padding: 32px 30px 24px 30px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  box-sizing: border-box;
  overflow: hidden;
  will-change: transform, box-shadow;
  transition: 
    transform 500ms cubic-bezier(0.2, 0.8, 0.2, 1),
    box-shadow 500ms cubic-bezier(0.2, 0.8, 0.2, 1),
    background 500ms cubic-bezier(0.2, 0.8, 0.2, 1),
    border-color 500ms cubic-bezier(0.2, 0.8, 0.2, 1);
  transform-style: preserve-3d;
}

/* ── Layer 4: Top Edge Gradient Line (3px) ── */
.card-top-bar {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 3px;
  background: linear-gradient(90deg, #6A1BFF 0%, #3B82F6 100%);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 450ms cubic-bezier(0.2, 0.8, 0.2, 1);
  z-index: 10;
}

/* ── Layer 11: Left Vertical Gradient Accent Bar (4px) ── */
.card-left-bar {
  position: absolute;
  top: 0;
  left: 0;
  width: 4px;
  height: 100%;
  background: linear-gradient(180deg, #6A1BFF 0%, #3B82F6 100%);
  transform: scaleY(0);
  transform-origin: top;
  transition: transform 450ms cubic-bezier(0.2, 0.8, 0.2, 1);
  z-index: 10;
}

/* ── Content Top (45%) ── */
.card-content-wrap {
  position: relative;
  z-index: 5;
  text-align: left;
  flex: 0 0 45%;
}

.card-header-meta {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 16px;
}

/* ── Layer 8: Service Number 01 Animation ── */
.card-num-step {
  font-family: 'Poppins', sans-serif;
  font-size: 17px;
  font-weight: 800;
  color: #94A3B8;
  letter-spacing: -0.01em;
  transition: color 350ms ease, transform 350ms ease;
  display: inline-block;
}

/* ── Layer 9: Service Icon Animation ── */
.card-icon-box {
  font-size: 24px;
  color: #64748B;
  width: 44px;
  height: 44px;
  border-radius: 12px;
  background: #F1F5F9;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform 350ms cubic-bezier(0.2, 0.8, 0.2, 1), color 350ms ease, background 350ms ease;
}

.card-service-title {
  font-family: 'Poppins', sans-serif;
  font-size: 21px;
  font-weight: 800;
  line-height: 1.3;
  color: #0F172A;
  margin-bottom: 10px;
  letter-spacing: -0.01em;
  transition: color 350ms ease;
}

.card-service-desc {
  font-size: 14px;
  line-height: 1.6;
  color: #64748B;
  margin: 0;
  font-weight: 500;
}

/* ── Bottom Photography Box (55%) ── */
.card-photo-wrapper {
  position: relative;
  width: 100%;
  height: 250px;
  flex: 0 0 55%;
  border-radius: 20px;
  overflow: hidden;
  margin-top: 16px;
  background: #0F172A;
  box-shadow: 0 4px 16px rgba(15, 23, 42, 0.06);
  z-index: 5;
  transition: box-shadow 400ms ease;
}

/* Layer 7: Translucent Purple Glow Behind Image (<10%) */
.card-photo-wrapper::before {
  content: '';
  position: absolute;
  inset: -10px;
  border-radius: 26px;
  background: rgba(106, 27, 255, 0.08);
  opacity: 0;
  filter: blur(14px);
  transition: opacity 450ms ease;
  z-index: -1;
}

/* 8-12% Brand Color Overlay */
.photo-overlay-brand {
  position: absolute;
  inset: 0;
  background: linear-gradient(180deg, rgba(106, 27, 255, 0.10) 0%, rgba(59, 130, 246, 0.12) 100%);
  mix-blend-mode: multiply;
  z-index: 2;
  pointer-events: none;
}

/* Layer 6: Soft Spotlight Effect */
.photo-spotlight {
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at 50% 0%, rgba(255, 255, 255, 0.28), transparent 70%);
  opacity: 0;
  z-index: 3;
  pointer-events: none;
  transition: opacity 500ms ease;
}

/* Layer 5: Photograph Slow 6s Ease Scale 1.00 -> 1.08 */
.card-photo-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 6s cubic-bezier(0.25, 1, 0.5, 1);
  will-change: transform;
}

/* ── Layer 10: Bottom Right Arrow Action Circle ── */
.card-footer-action {
  position: absolute;
  bottom: 34px;
  right: 40px;
  z-index: 10;
  pointer-events: none;
}

.card-arrow-circle {
  width: 42px;
  height: 42px;
  border-radius: 50%;
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  color: #64748B;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 15px;
  opacity: 0;
  transform: translateX(-12px);
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  transition: opacity 350ms cubic-bezier(0.2, 0.8, 0.2, 1), transform 350ms cubic-bezier(0.2, 0.8, 0.2, 1), background 350ms ease, color 350ms ease, border-color 350ms ease;
}

/* ── HOVER STATES (ALL 11 LAYERS COMBINED) ── */
.enterprise-service-card:hover {
  /* Layer 1 & 2: Lift 10px & Expand Shadow */
  box-shadow: 0 26px 54px -12px rgba(15, 23, 42, 0.12), 0 10px 24px -8px rgba(106, 27, 255, 0.14);
  border-color: rgba(106, 27, 255, 0.25);
  /* Layer 3: Background Light Blue/Purple Gradient Transition */
  background: linear-gradient(180deg, #F8FBFF 0%, #FFFFFF 100%);
}

/* Layer 4: Top Edge Gradient Line Animation */
.enterprise-service-card:hover .card-top-bar {
  transform: scaleX(1);
}

/* Layer 11: Left Vertical Accent Bar Animation */
.enterprise-service-card:hover .card-left-bar {
  transform: scaleY(1);
}

/* Layer 5: Image Slow Zoom 1.08 */
.enterprise-service-card:hover .card-photo-img {
  transform: scale(1.08);
}

/* Layer 6: Soft Spotlight */
.enterprise-service-card:hover .photo-spotlight {
  opacity: 1;
}

/* Layer 7: Translucent Purple Glow */
.enterprise-service-card:hover .card-photo-wrapper::before {
  opacity: 1;
}

/* Layer 8: Service Number Color & Translate */
.enterprise-service-card:hover .card-num-step {
  color: #6A1BFF;
  transform: translateY(-2px);
}

/* Layer 9: Icon Rotate 6deg & Scale 110% */
.enterprise-service-card:hover .card-icon-box {
  transform: rotate(6deg) scale(1.1);
  color: #6A1BFF;
  background: rgba(106, 27, 255, 0.1);
}

/* Layer 10: Arrow Slide-In & Gradient Fill */
.enterprise-service-card:hover .card-arrow-circle {
  opacity: 1;
  transform: translateX(0);
  background: linear-gradient(135deg, #6A1BFF 0%, #3B82F6 100%);
  color: #FFFFFF;
  border-color: transparent;
}

/* ── Mobile & Touch Adjustments ── */
@media (max-width: 991px) {
  .enterprise-service-card {
    height: auto;
    min-height: 490px;
    padding: 26px 22px 20px 22px;
  }

  .card-photo-wrapper {
    height: 220px;
  }

  .card-arrow-circle {
    opacity: 1;
    transform: translateX(0);
  }
}

@media (max-width: 767px) {
  .services-showcase-section {
    padding: 70px 0;
  }

  .services-header-row,
  .services-swiper-wrapper {
    padding: 0 20px;
  }

  .services-main-title {
    font-size: 28px;
  }
}
</style>