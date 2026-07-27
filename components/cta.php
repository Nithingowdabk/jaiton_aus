<!-- Final CTA Section -->
<section class="final-cta-section">
  <!-- Glowing gradient background -->
  <div class="cta-glow"></div>
  
  <div class="container">
    <div class="cta-content-wrapper" data-aos="zoom-in">
      <h2 class="cta-title">Ready to Build Your Next Digital Product?</h2>
      <p class="cta-desc">
        Accelerate digital transformation with premium Australian quality standards, strict security frameworks, and a dedicated team of elite software developers.
      </p>
      
      <div class="cta-buttons">
        <a href="#contact" class="btn btn-secondary ripple-btn px-32 py-16">Book Strategy Call <i class="fa-solid fa-calendar-check text-purple"></i></a>
        <a href="#contact" class="btn btn-outline-white ripple-btn px-32 py-16">Estimate Your Project <i class="fa-solid fa-calculator"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- CSS specifically for CTA component structure -->
<style>
.final-cta-section {
  position: relative;
  padding: 100px 0;
  background: linear-gradient(135deg, var(--primary-purple) 0%, var(--dark-navy) 100%);
  overflow: hidden;
  text-align: center;
}

.cta-glow {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 600px;
  height: 600px;
  background-color: var(--primary-blue);
  filter: blur(160px);
  opacity: 0.15;
  pointer-events: none;
}

.cta-content-wrapper {
  max-width: 800px;
  margin: 0 auto;
  position: relative;
  z-index: 10;
}

.cta-title {
  font-size: 3rem;
  color: var(--white);
  line-height: 1.2;
  margin-bottom: 24px;
  letter-spacing: -0.01em;
}

.cta-desc {
  font-size: 1.15rem;
  color: #cbd5e1;
  line-height: 1.7;
  margin-bottom: 44px;
  max-width: 680px;
  margin-left: auto;
  margin-right: auto;
}

.cta-buttons {
  display: flex;
  justify-content: center;
  gap: 20px;
}

.px-32 { padding-left: 32px !important; padding-right: 32px !important; }
.py-16 { padding-top: 16px !important; padding-bottom: 16px !important; }

.text-purple {
  color: var(--primary-purple);
}

.btn-outline-white {
  background-color: transparent;
  color: var(--white);
  border-color: rgba(255, 255, 255, 0.3);
}

.btn-outline-white:hover {
  background-color: rgba(255, 255, 255, 0.08);
  border-color: var(--white);
  transform: translateY(-2px);
}

@media (max-width: 767px) {
  .cta-title {
    font-size: 2.25rem;
  }
  
  .cta-buttons {
    flex-direction: column;
    gap: 16px;
  }
}
</style>
