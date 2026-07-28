<!-- Testimonials Section -->
<section class="testimonial-section">
  <div class="container">
    
    <!-- Section Header -->
    <div class="section-header" data-aos="fade-up">
      <span class="section-badge">Success Stories</span>
      <h2 class="section-title">Trusted by Enterprise Leaders</h2>
      <p class="section-desc">
        Hear from the executive officers and engineering directors driving growth with Jaiton Technologies.
      </p>
    </div>

    <!-- Swiper Carousel Container -->
    <div class="swiper-container testimonial-swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">
        
        <!-- Slide 1: Aura Mining -->
        <div class="swiper-slide">
          <div class="testimonial-card glass-panel">
            <div class="test-visual-side">
              <div class="video-mock-container">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=600&q=80" alt="Lachlan Mitchell CTO Aura Mining" class="ceo-img">
                <div class="video-play-overlay">
                  <span class="play-pulse"><i class="fa-solid fa-play"></i></span>
                  <span>Watch Testimonial</span>
                </div>
              </div>
            </div>
            
            <div class="test-content-side">
              <div class="test-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <blockquote class="test-quote">
                &ldquo;Jaiton Technologies delivered our cloud telemetry platform ahead of schedule. Their dedication to high-quality code and compliance standards made them an exceptional enterprise partner.&rdquo;
              </blockquote>
              
              <div class="test-meta">
                <div class="test-author-info">
                  <h4>Lachlan Mitchell</h4>
                  <p>Chief Technology Officer, Aura Mining Solutions</p>
                </div>
                <div class="test-metric-badge">
                  <div class="metric-badge-label">Outcome</div>
                  <div class="metric-badge-val">+38% Uptime</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2: MedTech -->
        <div class="swiper-slide">
          <div class="testimonial-card glass-panel">
            <div class="test-visual-side">
              <div class="video-mock-container">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=600&q=80" alt="Sarah Jenkins VP MedTech" class="ceo-img">
                <div class="video-play-overlay">
                  <span class="play-pulse"><i class="fa-solid fa-play"></i></span>
                  <span>Watch Testimonial</span>
                </div>
              </div>
            </div>
            
            <div class="test-content-side">
              <div class="test-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <blockquote class="test-quote">
                &ldquo;The diagnostic scanner platform built by Jaiton has revolutionized our clinical trial processing. Their machine learning expertise paired with strict agile engineering was top-tier.&rdquo;
              </blockquote>
              
              <div class="test-meta">
                <div class="test-author-info">
                  <h4>Sarah Jenkins</h4>
                  <p>VP of Product Development, MedTech Australasia</p>
                </div>
                <div class="test-metric-badge">
                  <div class="metric-badge-label">Outcome</div>
                  <div class="metric-badge-val">94% Speedup</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3: Global Fin -->
        <div class="swiper-slide">
          <div class="testimonial-card glass-panel">
            <div class="test-visual-side">
              <div class="video-mock-container">
                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=600&q=80" alt="Marcus Vance CEO Fin Core" class="ceo-img">
                <div class="video-play-overlay">
                  <span class="play-pulse"><i class="fa-solid fa-play"></i></span>
                  <span>Watch Testimonial</span>
                </div>
              </div>
            </div>
            
            <div class="test-content-side">
              <div class="test-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <blockquote class="test-quote">
                &ldquo;Reconciling transactions across our global branches was a major operational bottleneck. Jaiton built a secure DB ledger that eliminated billing leakage entirely.&rdquo;
              </blockquote>
              
              <div class="test-meta">
                <div class="test-author-info">
                  <h4>Marcus Vance</h4>
                  <p>Chief Executive Officer, Finance Core Group</p>
                </div>
                <div class="test-metric-badge">
                  <div class="metric-badge-label">Savings</div>
                  <div class="metric-badge-val">AUD $1.2M Saved</div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Slider controllers -->
      <div class="swiper-pagination testimonial-pagination"></div>
      <div class="swiper-button-prev testimonial-prev"><i class="fa-solid fa-arrow-left"></i></div>
      <div class="swiper-button-next testimonial-next"><i class="fa-solid fa-arrow-right"></i></div>
    </div>

  </div>
</section>

<!-- CSS specifically for Testimonials Section -->
<style>
.testimonial-section {
  padding: 120px 0;
  background-color: var(--light-bg);
  position: relative;
  overflow: hidden;
}

.testimonial-swiper {
  position: relative;
  padding: 0 60px 48px 60px !important;
}

/* Card layout */
.testimonial-card {
  display: grid;
  grid-template-columns: 220px 1fr;
  gap: 36px;
  background-color: var(--white);
  border-radius: var(--radius-lg);
  border: 1px solid var(--border-color);
  box-shadow: var(--shadow-sm);
  padding: 28px 36px;
  align-items: center;
  box-sizing: border-box;
}

/* Visual Mock side */
.test-visual-side {
  width: 220px;
  flex-shrink: 0;
}

.video-mock-container {
  position: relative;
  width: 220px;
  height: 160px;
  border-radius: 14px;
  overflow: hidden;
  box-shadow: var(--shadow-md);
  cursor: pointer;
}

.ceo-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-slow);
}

.video-play-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(8, 19, 39, 0.4);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 8px;
  color: var(--white);
  font-size: 0.75rem;
  font-weight: 700;
  opacity: 0.9;
  transition: opacity var(--transition-fast);
}

.play-pulse {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  background-color: var(--primary-purple);
  color: var(--white);
  font-size: 0.8rem;
  box-shadow: 0 0 0 0 rgba(109, 40, 255, 0.5);
  animation: playPulse 2s infinite;
}

.video-mock-container:hover .ceo-img {
  transform: scale(1.05);
}

.video-mock-container:hover .video-play-overlay {
  background-color: rgba(8, 19, 39, 0.55);
}

/* Content side */
.test-content-side {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  text-align: left;
}

.test-rating {
  color: #FBBF24;
  display: flex;
  gap: 4px;
  margin-bottom: 20px;
  font-size: 0.9rem;
}

.test-quote {
  font-family: var(--font-body);
  font-size: clamp(16px, 1.3vw, 22px);
  line-height: 1.6;
  font-weight: 500;
  color: var(--dark-navy);
  margin-bottom: 32px;
  position: relative;
}

.test-meta {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  border-top: 1px solid var(--border-color);
  padding-top: 24px;
}

.test-author-info h4 {
  font-size: 1.05rem;
  font-weight: 800;
  color: var(--dark-navy);
  margin-bottom: 4px;
}

.test-author-info p {
  font-size: 0.8125rem;
  font-weight: 500;
  color: var(--muted-text);
}

.test-metric-badge {
  background-color: rgba(16, 185, 129, 0.06);
  border: 1px solid rgba(16, 185, 129, 0.1);
  border-radius: 8px;
  padding: 8px 16px;
  text-align: right;
}

.metric-badge-label {
  font-size: 0.625rem;
  text-transform: uppercase;
  font-weight: 700;
  color: #10B981;
  letter-spacing: 0.05em;
  margin-bottom: 2px;
}

.metric-badge-val {
  font-size: 0.95rem;
  font-weight: 800;
  color: #10B981;
}

/* Nav elements */
.testimonial-swiper .swiper-pagination-bullets {
  bottom: 0 !important;
}

.testimonial-swiper .swiper-pagination-bullet {
  width: 8px;
  height: 8px;
  background-color: var(--border-color);
  opacity: 1;
  transition: all var(--transition-fast);
}

.testimonial-swiper .swiper-pagination-bullet-active {
  background-color: var(--primary-purple);
  width: 24px;
  border-radius: 100px;
}

.testimonial-swiper .swiper-button-prev,
.testimonial-swiper .swiper-button-next {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  background-color: var(--white);
  border: 1px solid var(--border-color);
  color: var(--secondary-text);
  box-shadow: var(--shadow-sm);
  transition: all var(--transition-fast);
}

.testimonial-swiper .swiper-button-prev::after,
.testimonial-swiper .swiper-button-next::after {
  display: none;
}

.testimonial-swiper .swiper-button-prev:hover,
.testimonial-swiper .swiper-button-next:hover {
  background-color: var(--primary-purple);
  color: var(--white);
  border-color: var(--primary-purple);
}

.testimonial-swiper .swiper-button-prev { left: 0; }
.testimonial-swiper .swiper-button-next { right: 0; }

@keyframes playPulse {
  0% {
    box-shadow: 0 0 0 0 rgba(109, 40, 255, 0.4);
  }
  70% {
    box-shadow: 0 0 0 10px rgba(109, 40, 255, 0);
  }
  100% {
    box-shadow: 0 0 0 0 rgba(109, 40, 255, 0);
  }
}

/* Responsive adjustments */
@media (max-width: 991px) {
  .testimonial-card {
    grid-template-cols: 1fr;
    gap: 32px;
    padding: 32px;
  }
  
  .video-mock-container {
    aspect-ratio: 1.6;
    max-width: 400px;
    margin: 0 auto;
  }
}

@media (max-width: 767px) {
  .testimonial-swiper {
    padding: 0 0 48px 0 !important;
  }

  .testimonial-swiper .swiper-button-prev,
  .testimonial-swiper .swiper-button-next {
    display: none;
  }

  .test-meta {
    flex-direction: column;
    align-items: flex-start;
    gap: 16px;
  }
  
  .test-metric-badge {
    text-align: left;
    width: 100%;
  }
}
</style>
