<!-- ============================================================
     EXCELLENCE & IMPACT SHOWCASE SECTION
     Matches reference web design & award excellence showcase
     ============================================================ -->
<section id="excellence" class="excellence-showcase-section">
  <div class="container container-1400">
    <div class="excellence-grid" data-aos="fade-up">
      
      <!-- ============================================================
           LEFT COLUMN: Laptop Mockup & 3 Key Metrics
           ============================================================ -->
      <div class="excellence-left-col">
        
        <!-- Top Device Showcase Photo Frame -->
        <div class="device-showcase-wrapper">
          <img src="assets/images/jaiton-device-showcase.png" alt="High Performance Enterprise Web & Mobile Responsive Mockup" class="device-showcase-img">
        </div>

        <!-- Bottom 3 Impact Metrics Row -->
        <div class="impact-metrics-row">
          
          <!-- Metric 1 -->
          <div class="impact-metric-card">
            <strong class="impact-stat-number">+42%</strong>
            <p class="impact-stat-desc">
              Increase in conversions after launch - Melbourne based business
            </p>
          </div>

          <!-- Metric 2 -->
          <div class="impact-metric-card">
            <strong class="impact-stat-number">312%</strong>
            <p class="impact-stat-desc">
              Growth in organic visibility after moving to a high-performance DPD website
            </p>
          </div>

          <!-- Metric 3 -->
          <div class="impact-metric-card">
            <strong class="impact-stat-number">3.6x</strong>
            <p class="impact-stat-desc">
              Greater user engagement in the first month - trade & construction industry
            </p>
          </div>

        </div>

      </div>

      <!-- ============================================================
           RIGHT COLUMN: Heading, Description & Award Badges
           ============================================================ -->
      <div class="excellence-right-col">
        <span class="excellence-eyebrow">
          WEBSITE DESIGNERS THAT UNDERSTAND
        </span>

        <h2 class="excellence-main-title">
          Web design, the way it <br class="desktop-only">should be done
        </h2>

        <p class="excellence-description">
          With our <strong>10+ years of experience</strong> and <strong>5 star Google reviews</strong> under our belt, we're digital experts in full stack web design, web development and innovative digital solutions. By combining our talented team of UX web designers and website developers, we're here to make your website the ultimate online sales tool. That's just one reason we're Australia's top choice, highly reviewed and trusted digital agency.
        </p>

        <!-- 3 Circular Award Stamps -->
        <div class="excellence-awards-row">
          
          <!-- Award Stamp 1: Navy -->
          <div class="award-stamp-circle stamp-navy">
            <div class="stamp-inner-text">
              <span class="stamp-top-arc">BEST CONSTRUCTION</span>
              <div class="stamp-center-icon">
                <i class="fa-solid fa-award"></i>
              </div>
              <span class="stamp-award-name">WEB EXCELLENCE<br>AWARDS</span>
              <span class="stamp-year">2023 WINNER</span>
            </div>
          </div>

          <!-- Award Stamp 2: Crimson Pink -->
          <div class="award-stamp-circle stamp-pink">
            <div class="stamp-inner-text">
              <span class="stamp-top-arc">BEST FASHION</span>
              <div class="stamp-center-icon">
                <i class="fa-solid fa-trophy"></i>
              </div>
              <span class="stamp-award-name">WEB EXCELLENCE<br>AWARDS</span>
              <span class="stamp-year">2023 WINNER</span>
            </div>
          </div>

          <!-- Award Stamp 3: White & Navy Border -->
          <div class="award-stamp-circle stamp-white">
            <div class="stamp-inner-text">
              <span class="stamp-top-arc">BEST ECOMMERCE</span>
              <div class="stamp-center-icon">
                <i class="fa-solid fa-star"></i>
              </div>
              <span class="stamp-award-name">PLATFORM</span>
              <span class="stamp-year">2025 WINNER</span>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     EXCELLENCE SECTION SCOPED STYLES
     ============================================================ -->
<style>
.excellence-showcase-section {
  padding: 120px 0;
  background-color: #FFFFFF;
  position: relative;
  overflow: hidden;
}

.container-1400 {
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 32px;
}

.excellence-grid {
  display: grid;
  grid-template-columns: 48% 48%;
  gap: 4%;
  align-items: flex-start;
}

/* Column Styling */
.excellence-left-col {
  display: flex;
  flex-direction: column;
  gap: 40px;
}

.excellence-right-col {
  text-align: left;
}

.excellence-eyebrow {
  font-size: 13px;
  font-weight: 800;
  color: #38BDF8;
  letter-spacing: 1.8px;
  text-transform: uppercase;
  display: block;
  margin-bottom: 14px;
}

.excellence-main-title {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(34px, 3.4vw, 48px);
  font-weight: 800;
  line-height: 1.18;
  color: #0B1120;
  margin: 0 0 24px 0;
  letter-spacing: -0.025em;
}

.excellence-description {
  font-size: 16px;
  line-height: 1.7;
  color: #475569;
  margin-bottom: 40px;
  font-weight: 400;
}

.excellence-description strong {
  color: #0B1120;
  font-weight: 700;
}

/* Award Stamps Row */
.excellence-awards-row {
  display: flex;
  align-items: center;
  gap: 20px;
}

.award-stamp-circle {
  width: 110px;
  height: 110px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 12px;
  transition: transform 300ms ease;
  box-shadow: 0 8px 20px rgba(15, 23, 42, 0.08);
}

.award-stamp-circle:hover {
  transform: translateY(-5px) scale(1.04);
}

.stamp-navy {
  background: #0B1120;
  color: #FFFFFF;
  border: 3px double rgba(56, 189, 248, 0.4);
}

.stamp-pink {
  background: linear-gradient(135deg, #6A1BFF 0%, #8B5CF6 100%);
  color: #FFFFFF;
  border: 3px double rgba(255, 255, 255, 0.3);
}

.stamp-white {
  background: #FFFFFF;
  color: #0B1120;
  border: 3px double #6A1BFF;
}

.stamp-inner-text {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 2px;
}

.stamp-top-arc {
  font-size: 7px;
  font-weight: 800;
  letter-spacing: 0.5px;
  text-transform: uppercase;
}

.stamp-center-icon {
  font-size: 14px;
  margin: 2px 0;
}

.stamp-award-name {
  font-size: 7px;
  font-weight: 800;
  line-height: 1.1;
  text-transform: uppercase;
}

.stamp-year {
  font-size: 8px;
  font-weight: 800;
  letter-spacing: 0.5px;
  margin-top: 2px;
}

/* Device Showcase */
.device-showcase-wrapper {
  position: relative;
  width: 100%;
}

.device-showcase-img {
  width: 100%;
  height: auto;
  display: block;
}

/* Bottom 3 Impact Metrics */
.impact-metrics-row {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
  padding-top: 10px;
}

.impact-metric-card {
  text-align: left;
}

.impact-stat-number {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(32px, 2.8vw, 42px);
  font-weight: 800;
  color: #0B1426;
  line-height: 1.1;
  display: block;
  margin-bottom: 8px;
  letter-spacing: -0.03em;
}

.impact-stat-desc {
  font-size: 13px;
  line-height: 1.5;
  color: #64748B;
  margin: 0;
  font-weight: 500;
}

/* Responsive Rules */
@media (max-width: 991px) {
  .excellence-grid {
    grid-template-columns: 1fr;
    gap: 60px;
  }

  .impact-metrics-row {
    grid-template-columns: 1fr;
    gap: 30px;
  }
}

@media (max-width: 480px) {
  .excellence-awards-row {
    flex-wrap: wrap;
  }
}
</style>
