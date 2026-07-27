<!-- Testimonials Section -->
<section class="testimonial-section">
  <div class="container">
    <!-- Section Header -->
    <div class="section-header" data-aos="fade-up">
      <span class="section-badge">Success Stories</span>
      <h2 class="section-title">Trusted by Enterprise Leaders</h2>
      <p class="section-desc">
        Hear from our corporate clients who accelerated growth and secured operational excellence with Jaiton.
      </p>
    </div>

    <!-- Swiper Carousel Container -->
    <div class="swiper-container testimonial-swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">
        
        <!-- Slide 1 -->
        <div class="swiper-slide">
          <div class="testimonial-card glass-panel">
            <i class="fa-solid fa-quote-right quote-bg"></i>
            <div class="testimonial-author-wrapper">
              <div class="author-avatar bg-navy text-white">
                <i class="fa-solid fa-user-tie"></i>
              </div>
              <div class="author-badge">
                <img src="assets/icons/australia.png" alt="Australia Flag">
                <span>Australia</span>
              </div>
            </div>
            <div class="testimonial-review">
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <blockquote class="quote-text">
                &ldquo;Jaiton Technologies delivered our cloud IoT analytics platform ahead of schedule. Their dedication to high-quality code and Australian compliance standards made them an exceptional enterprise partner.&rdquo;
              </blockquote>
              <div class="author-info">
                <h4 class="author-name">Lachlan Mitchell</h4>
                <p class="author-meta">Chief Technology Officer &bull; <span class="company-name">Aura Mining Solutions</span></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
          <div class="testimonial-card glass-panel">
            <i class="fa-solid fa-quote-right quote-bg"></i>
            <div class="testimonial-author-wrapper">
              <div class="author-avatar bg-navy text-white">
                <i class="fa-solid fa-user-doctor"></i>
              </div>
              <div class="author-badge">
                <img src="assets/icons/australia.png" alt="Australia Flag">
                <span>Australia</span>
              </div>
            </div>
            <div class="testimonial-review">
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <blockquote class="quote-text">
                &ldquo;The AI diagnostics platform built by Jaiton has revolutionized our clinical trial processing. Their machine learning expertise paired with strict agile engineering was top-tier.&rdquo;
              </blockquote>
              <div class="author-info">
                <h4 class="author-name">Sarah Jenkins</h4>
                <p class="author-meta">VP of Product Development &bull; <span class="company-name">MedTech Australasia</span></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide">
          <div class="testimonial-card glass-panel">
            <i class="fa-solid fa-quote-right quote-bg"></i>
            <div class="testimonial-author-wrapper">
              <div class="author-avatar bg-navy text-white">
                <i class="fa-solid fa-user-tie"></i>
              </div>
              <div class="author-badge">
                <img src="assets/icons/south-africa.png" alt="South Africa Flag">
                <span>South Africa</span>
              </div>
            </div>
            <div class="testimonial-review">
              <div class="stars">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <blockquote class="quote-text">
                &ldquo;Jaiton refactored our legacy enterprise core into a microservices cloud model. The transition was seamless, secure, and completed with zero downtime. Highly recommended.&rdquo;
              </blockquote>
              <div class="author-info">
                <h4 class="author-name">Devin Pillay</h4>
                <p class="author-meta">Head of Infrastructure &bull; <span class="company-name">Vanguard Capital</span></p>
              </div>
            </div>
          </div>
        </div>

      </div>
      
      <!-- Swiper Pagination Controls -->
      <div class="swiper-pagination"></div>
      
      <!-- Swiper Navigation Arrows -->
      <div class="swiper-button-prev slider-arrow"><i class="fa-solid fa-chevron-left"></i></div>
      <div class="swiper-button-next slider-arrow"><i class="fa-solid fa-chevron-right"></i></div>
    </div>
  </div>
</section>

<!-- CSS specifically for Testimonials component structure -->
<style>
.testimonial-section {
  padding: 100px 0;
  background-color: var(--light-bg);
  position: relative;
  overflow: hidden;
}

.testimonial-swiper {
  max-width: 900px;
  padding: 20px 40px 60px 40px !important;
  position: relative;
}

.testimonial-card {
  display: flex;
  flex-direction: row;
  gap: 40px;
  align-items: center;
  padding: 48px;
  position: relative;
}

.quote-bg {
  position: absolute;
  top: 32px;
  right: 32px;
  font-size: 5.5rem;
  color: rgba(106, 27, 255, 0.04);
  pointer-events: none;
}

.testimonial-author-wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  flex-shrink: 0;
}

.author-avatar {
  width: 90px;
  height: 90px;
  border-radius: 20px;
  background-color: var(--dark-navy);
  color: var(--white);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 2.25rem;
  border: 1px solid var(--border-color);
  box-shadow: var(--shadow-md);
  margin-bottom: 16px;
  opacity: 0.85;
}

.author-badge {
  display: flex;
  align-items: center;
  gap: 6px;
  background-color: var(--white);
  border: 1px solid var(--border-color);
  padding: 4px 10px;
  border-radius: 6px;
  font-size: 0.75rem;
  font-weight: 600;
  color: var(--dark-navy);
}

.author-badge img {
  width: 16px;
  height: auto;
  border-radius: 2px;
}

.testimonial-review {
  flex-grow: 1;
}

.stars {
  color: #FFB020;
  margin-bottom: 16px;
  font-size: 1.1rem;
}

.quote-text {
  font-size: 1.25rem;
  font-weight: 500;
  line-height: 1.6;
  color: var(--dark-navy);
  margin-bottom: 24px;
}

.author-name {
  font-size: 1.05rem;
  font-weight: 700;
  color: var(--dark-navy);
  margin-bottom: 2px;
}

.author-meta {
  font-size: 0.8125rem;
  color: var(--secondary-text);
}

.company-name {
  color: var(--primary-purple);
  font-weight: 600;
}

/* Swiper navigation custom formatting */
.testimonial-swiper .swiper-pagination-bullet-active {
  background-color: var(--primary-purple) !important;
  width: 24px;
  border-radius: 5px;
}

.slider-arrow {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background-color: var(--white);
  border: 1px solid var(--border-color);
  box-shadow: var(--shadow-sm);
  color: var(--dark-navy);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  z-index: 10;
  transition: all var(--transition-fast);
}

.slider-arrow:hover {
  color: var(--primary-purple);
  border-color: var(--primary-purple);
  box-shadow: var(--shadow-md);
}

.slider-arrow::after {
  display: none; /* Hide default Swiper icons */
}

.slider-arrow.swiper-button-prev { left: -10px; }
.slider-arrow.swiper-button-next { right: -10px; }

@media (max-width: 767px) {
  .testimonial-card {
    flex-direction: column;
    padding: 32px 24px;
    text-align: center;
  }
  
  .stars {
    justify-content: center;
  }
  
  .quote-text {
    font-size: 1.1rem;
  }
}
</style>
