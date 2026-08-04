<!-- ============================================================
     ORGANIC DUAL-WAVE RIBBON CONTACT SECTION
     Fluid Organic Curves on Top & Bottom - Merged with Text & Form
     ============================================================ -->
<section id="contact" class="organic-dual-contact-section">
  
  <div class="container container-1360 position-relative">
    
    <!-- Organic Full-Height Ribbon Wave Background (Sweeps behind entire left column & form) -->
    <div class="organic-ribbon-wave-bg">
      <svg viewBox="0 0 1440 680" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
        <defs>
          <linearGradient id="organicDualGradient" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" stop-color="#E11D48" />
            <stop offset="30%" stop-color="#9333EA" />
            <stop offset="65%" stop-color="#2563EB" />
            <stop offset="100%" stop-color="#06B6D4" />
          </linearGradient>
        </defs>
        <!-- Fluid Curved Path Covering Full Left Column -->
        <path d="M -50,60 C 250,140 550,20 850,100 C 1150,180 1350,50 1500,80 L 1500,640 C 1200,700 850,600 500,660 C 200,700 50,620 -50,640 Z" fill="url(#organicDualGradient)" opacity="0.96" />
      </svg>
    </div>

    <!-- Transparent Woman Cutout (Arms/Head Above Top Curve) -->
    <div class="organic-cutout-wrapper">
      <img src="assets/images/enterprise-executive-cutout.png" alt="Happy Business Professional" class="organic-cutout-img">
    </div>

    <!-- Main Contact Grid -->
    <div class="organic-contact-grid" data-aos="fade-up">
      
      <!-- Left Column: Get In Touch With Us -->
      <div class="organic-info-col">
        <h2 class="organic-git-title">Get in touch with us</h2>
        
        <p class="organic-git-p">
          Please feel free to contact us regarding any web design, iPhone apps or graphic design related jobs that you need help with.
        </p>

        <p class="organic-git-p">
          If you're looking to build a website for your business or even just to chat, then we are here for you.
        </p>

        <p class="organic-git-p mb-4">
          At Jaiton we reply back straight away to all phone calls and messages.
        </p>

        <p class="organic-cities-text">
          Melbourne / Sydney / Brisbane / Darwin / Perth / Adelaide / Hobart
        </p>

        <div class="organic-contact-actions">
          <span class="organic-action-label">Call us on for more information</span>
          
          <div class="organic-social-connect-row">
            <span class="organic-social-text">Connect with us</span>
            <div class="organic-social-icons">
              <a href="#" class="organic-lime-circle" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#" class="organic-lime-circle" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>

      </div>

      <!-- Right Column: Instant Quote Form Card -->
      <div class="organic-form-col" id="instant-quote-form-card">
        <div class="organic-quote-card">
          
          <h3 class="organic-card-title">Instant Quote in 60 Seconds</h3>

          <form class="organic-form-body" onsubmit="event.preventDefault(); alert('Thank you! Your instant quote request has been received.');">
            
            <div class="form-group mb-3">
              <input type="text" class="form-control organic-field" placeholder="Name*" required>
            </div>

            <div class="form-group mb-3">
              <input type="email" class="form-control organic-field" placeholder="Email*" required>
            </div>

            <div class="form-group mb-3">
              <input type="tel" class="form-control organic-field" placeholder="Phone*" required>
            </div>

            <div class="form-group mb-3">
              <select class="form-control organic-field form-select" required>
                <option value="" disabled selected>—Please choose an option—</option>
                <option value="webdesign">Website Design & Development</option>
                <option value="shopify">Shopify E-Commerce Store</option>
                <option value="woocommerce">WooCommerce Development</option>
                <option value="app">Mobile App Development</option>
                <option value="ai">AI & Cloud Solutions</option>
              </select>
            </div>

            <div class="form-group mb-3">
              <input type="text" class="form-control organic-field" placeholder="Subject*" required>
            </div>

            <div class="form-group mb-4">
              <textarea class="form-control organic-field" rows="3" placeholder="Message"></textarea>
            </div>

            <button type="submit" class="btn btn-organic-submit w-100">
              GET MY QUOTE
            </button>

            <div class="organic-phone-footer text-center mt-3">
              <i class="fa-solid fa-phone text-lime-ic me-2"></i> <strong>1300 661 518</strong>
            </div>

          </form>

        </div>
      </div>

    </div>

  </div>
</section>

<!-- ============================================================
     ORGANIC DUAL CONTACT SCOPED STYLES
     ============================================================ -->
<style>
.organic-dual-contact-section {
  padding: 80px 0 120px 0;
  background-color: #FAFAFA;
  position: relative;
  overflow: visible;
}

.container-1360 {
  max-width: 1360px;
  margin: 0 auto;
  padding: 0 32px;
}

/* Organic Ribbon Wave Background */
.organic-ribbon-wave-bg {
  position: absolute;
  top: 40px;
  left: -80px;
  right: -80px;
  height: 680px;
  z-index: 2;
  pointer-events: none;
}

.organic-ribbon-wave-bg svg {
  width: 100%;
  height: 100%;
  display: block;
}

/* Overlapping Cutout Image */
.organic-cutout-wrapper {
  position: absolute;
  top: -40px;
  left: 60px;
  z-index: 15;
  pointer-events: none;
}

.organic-cutout-img {
  height: 380px;
  width: auto;
  display: block;
  filter: drop-shadow(0 15px 30px rgba(0, 0, 0, 0.15));
}

/* Main Grid Layout */
.organic-contact-grid {
  display: grid;
  grid-template-columns: 48% 46%;
  gap: 6%;
  align-items: flex-start;
  position: relative;
  z-index: 10;
  padding-top: 130px;
}

.organic-form-col {
  margin-top: -110px;
}

.organic-info-col {
  padding-top: 110px;
  color: #FFFFFF;
}

.organic-git-title {
  font-family: 'Poppins', sans-serif;
  font-size: 32px;
  font-weight: 800;
  color: #FFFFFF !important;
  text-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
  margin-bottom: 12px;
  letter-spacing: -0.02em;
}

.organic-git-p {
  font-size: 14.5px;
  line-height: 1.6;
  color: #F8FAFC !important;
  text-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
  margin-bottom: 8px;
}

.organic-cities-text {
  font-size: 13px;
  font-weight: 700;
  color: #FFFFFF !important;
  text-shadow: 0 1px 4px rgba(0, 0, 0, 0.3);
  margin: 14px 0;
}

.organic-action-label {
  font-size: 15px;
  font-weight: 800;
  color: #FFFFFF !important;
  text-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
  display: block;
  margin-bottom: 6px;
}

.organic-social-connect-row {
  display: flex;
  align-items: center;
  gap: 16px;
}

.organic-social-text {
  font-size: 15px;
  font-weight: 800;
  color: #FFFFFF !important;
  text-shadow: 0 1px 4px rgba(0,0,0,0.2);
}

.organic-social-icons {
  display: flex;
  gap: 10px;
}

.organic-lime-circle {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: #8CBD3C;
  color: #FFFFFF !important;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 16px;
  text-decoration: none !important;
  box-shadow: 0 4px 12px rgba(140, 189, 60, 0.35);
  transition: transform 300ms ease;
}

.organic-lime-circle:hover {
  transform: scale(1.08);
}

/* Right Form Card */
.organic-quote-card {
  background: #FFFFFF;
  border-radius: 20px;
  padding: 40px 36px;
  box-shadow: 0 20px 45px rgba(15, 23, 42, 0.12);
  border: 1px solid #E2E8F0;
  position: relative;
  z-index: 20;
}

.organic-card-title {
  font-family: 'Poppins', sans-serif;
  font-size: 24px;
  font-weight: 800;
  color: #0F172A;
  margin-bottom: 24px;
}

.organic-field {
  border-radius: 8px !important;
  border: 1px solid #CBD5E1 !important;
  padding: 12px 16px !important;
  font-size: 14px !important;
  color: #0F172A !important;
  background-color: #FFFFFF !important;
}

.organic-field:focus {
  border-color: #8CBD3C !important;
  box-shadow: 0 0 0 3px rgba(140, 189, 60, 0.2) !important;
}

.btn-organic-submit {
  background-color: #8CBD3C !important;
  color: #FFFFFF !important;
  font-size: 15px !important;
  font-weight: 800 !important;
  letter-spacing: 0.5px !important;
  padding: 14px !important;
  border-radius: 100px !important;
  border: none !important;
  box-shadow: 0 8px 24px rgba(140, 189, 60, 0.35) !important;
  transition: all 300ms ease !important;
}

.btn-organic-submit:hover {
  background-color: #78A631 !important;
  transform: translateY(-2px) !important;
}

.organic-phone-footer {
  font-size: 22px;
  font-weight: 800;
  color: #0F172A;
}

.text-lime-ic {
  color: #8CBD3C;
}

/* Responsive Rules */
@media (max-width: 1100px) {
  .organic-contact-grid {
    grid-template-columns: 1fr;
    gap: 40px;
    padding-top: 60px;
  }
  .organic-cutout-wrapper {
    position: relative;
    top: 0;
    left: 0;
    margin-bottom: -40px;
  }
  .organic-cutout-img {
    margin: 0 auto;
  }
  .organic-ribbon-wave-bg {
    display: none;
  }
}
</style>
