  <!-- ============================================================
       LIGHT ENTERPRISE FOOTER – JAITON TECHNOLOGIES (Qleviq Style)
       ============================================================ -->
  <footer class="site-footer-light" id="footer">
    
    <div class="footer-light-container">
      
      <!-- ============================================================
           1. TOP 4 NAVIGATION COLUMNS
           ============================================================ -->
      <div class="footer-4col-grid" data-aos="fade-up">
        
        <!-- COL 1: Products -->
        <div class="footer-col-item">
          <h3 class="col-head-title">Products</h3>
          <div class="head-accent-line"></div>
          <ul class="col-links-list">
            <li><a href="#services">Enterprise Resource Planning</a></li>
            <li><a href="#services">Customer Relationship Management</a></li>
            <li><a href="#services">Business Intelligence</a></li>
            <li><a href="#services">Project Management Software</a></li>
            <li><a href="#services">Application Programming</a></li>
            <li><a href="#services">E-commerce Solutions</a></li>
          </ul>
        </div>

        <!-- COL 2: Solutions -->
        <div class="footer-col-item">
          <h3 class="col-head-title">Solutions</h3>
          <div class="head-accent-line"></div>
          <ul class="col-links-list">
            <li><a href="#services">Custom Software</a></li>
            <li><a href="#services">Cloud Solutions</a></li>
            <li><a href="#services">Web and Mobile App</a></li>
            <li><a href="#services">Enterprise Software</a></li>
            <li><a href="#services">Data Solutions</a></li>
            <li><a href="#services">Cyber Security</a></li>
          </ul>
        </div>

        <!-- COL 3: Company -->
        <div class="footer-col-item">
          <h3 class="col-head-title">Company</h3>
          <div class="head-accent-line"></div>
          <ul class="col-links-list">
            <li><a href="#why-jaiton">About us</a></li>
            <li><a href="#featured">Case Study</a></li>
            <li><a href="#insights">Insights & Blogs</a></li>
            <li><a href="#services">Pricing & SLA</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div>

        <!-- COL 4: Support -->
        <div class="footer-col-item">
          <h3 class="col-head-title">Support</h3>
          <div class="head-accent-line"></div>
          <ul class="col-links-list">
            <li><a href="#contact">Technical Support</a></li>
            <li><a href="#contact">Customer Support</a></li>
            <li><a href="#contact">Development Support</a></li>
            <li><a href="#contact">Security Support</a></li>
            <li><a href="#contact">Consulting Services</a></li>
          </ul>
        </div>

      </div>

      <!-- ============================================================
           2. MIDDLE ADDRESS, LOGO & CONTACT ROW
           ============================================================ -->
      <div class="footer-middle-info-row" data-aos="fade-up" data-aos-delay="100">
        
        <!-- Left: Address -->
        <div class="info-block info-address">
          <div class="info-icon-box">
            <i class="fa-solid fa-location-dot"></i>
          </div>
          <div class="info-text">
            <span class="info-sublabel">Address</span>
            <strong class="info-mainval">Sydney HQ, North Sydney NSW 2060, Australia</strong>
          </div>
        </div>

        <!-- Center: Jaiton Official Logo -->
        <div class="info-block info-logo-center">
          <a href="/">
            <img src="assets/logo/Logo.png" alt="Jaiton Technologies Logo" class="footer-center-logo">
          </a>
        </div>

        <!-- Right: Say Hello Contact Email -->
        <div class="info-block info-contact">
          <div class="info-icon-box">
            <i class="fa-solid fa-paper-plane"></i>
          </div>
          <div class="info-text">
            <span class="info-sublabel">SAY HELLO</span>
            <a href="mailto:sydney@jaiton.com" class="info-mainval email-link">sydney@jaiton.com</a>
          </div>
        </div>

      </div>

      <!-- ============================================================
           3. BOTTOM LEGAL BAR WITH BACK-TO-TOP BUTTON
           ============================================================ -->
      <div class="footer-light-bottom-bar">
        
        <div class="copyright-text">
          Copyright &copy; <?php echo date('Y'); ?> <strong>Jaiton</strong> | Designed & Engineered by <strong>Jaiton Technologies</strong>
        </div>

        <div class="legal-policy-links">
          <a href="#">Support Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Privacy Policy</a>
          
          <!-- Back To Top Arrow Button -->
          <a href="#hero" class="back-to-top-btn" aria-label="Back to Top">
            <i class="fa-solid fa-arrow-up"></i>
          </a>
        </div>

      </div>

    </div>
  </footer>

  <!-- CDN Script Loaders -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

  <!-- Global Custom Scripts -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/slider.js"></script>
  <script src="assets/js/animation.js"></script>

  <script>
    AOS.init({
      duration: 800,
      easing: 'ease-out-quad',
      once: true,
      offset: 60
    });
  </script>

  <!-- ============================================================
       LIGHT FOOTER SCOPED STYLES (Qleviq Reference Palette)
       ============================================================ -->
  <style>
  .site-footer-light {
    position: relative;
    background-color: #EFF6FF;
    color: #0F172A;
    padding: 80px 0 30px 0;
    overflow: hidden;
    font-family: 'Inter', sans-serif;
  }

  .footer-light-container {
    max-width: 1440px;
    margin: 0 auto;
    padding: 0 40px;
    position: relative;
    z-index: 5;
  }

  /* ── 1. Top 4 Navigation Columns ── */
  .footer-4col-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 40px;
    padding-bottom: 60px;
    border-bottom: 1px solid #E2E8F0;
  }

  .footer-col-item {
    text-align: left;
  }

  .col-head-title {
    font-family: 'Poppins', sans-serif;
    font-size: 22px;
    font-weight: 800;
    color: #0F172A;
    margin: 0 0 8px 0;
  }

  .head-accent-line {
    width: 36px;
    height: 2.5px;
    background: #0055FF;
    border-radius: 2px;
    margin-bottom: 24px;
  }

  .col-links-list {
    display: flex;
    flex-direction: column;
    gap: 14px;
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .col-links-list li a {
    font-size: 15px;
    color: #64748B;
    text-decoration: none;
    transition: all 200ms ease;
  }

  .col-links-list li a:hover {
    color: #0055FF;
    transform: translateX(4px);
    display: inline-block;
  }

  /* ── 2. Middle Address, Logo & Contact Row ── */
  .footer-middle-info-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 50px 0;
    border-bottom: 1px solid #E2E8F0;
  }

  .info-block {
    display: flex;
    align-items: center;
    gap: 16px;
  }

  .info-icon-box {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background: #FFFFFF;
    border: 1px solid #E2E8F0;
    color: #0055FF;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    box-shadow: 0 4px 14px rgba(0, 85, 255, 0.08);
  }

  .info-text {
    display: flex;
    flex-direction: column;
    text-align: left;
  }

  .info-sublabel {
    font-size: 11px;
    font-weight: 800;
    color: #0055FF;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 2px;
  }

  .info-mainval {
    font-size: 16px;
    font-weight: 800;
    color: #0F172A;

  }

  .email-link {
    text-decoration: none;
    transition: color 200ms ease;
  }

  .email-link:hover {
    color: #0055FF;
  }

  .footer-center-logo {
    height: 54px;
    width: auto;
    display: block;
  }

  /* ── 3. Bottom Legal Bar with Back-To-Top Button ── */
  .footer-light-bottom-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 30px;
    font-size: 14px;
    color: #64748B;
  }

  .copyright-text strong {
    color: #0F172A;
  }

  .legal-policy-links {
    display: flex;
    align-items: center;
    gap: 28px;
  }

  .legal-policy-links a {
    color: #64748B;
    text-decoration: none;
    font-weight: 600;
    transition: color 200ms ease;
  }

  .legal-policy-links a:hover {
    color: #0055FF;
  }

  /* Floating Back To Top Button */
  .back-to-top-btn {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: #0055FF;
    color: #FFFFFF !important;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    line-height: 1;
    box-shadow: 0 6px 18px rgba(0, 85, 255, 0.35);
    transition: all 250ms ease;
    margin-left: 10px;
    flex-shrink: 0;
  }

  .back-to-top-btn i {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    line-height: 1;
    margin: 0;
    padding: 0;
  }

  .back-to-top-btn:hover {
    background: #0044CC;
    transform: translateY(-4px);
    box-shadow: 0 10px 26px rgba(0, 85, 255, 0.5);
  }

  /* Responsive */
  @media (max-width: 1199px) {
    .footer-4col-grid {
      grid-template-columns: repeat(2, 1fr);
      gap: 36px;
    }

    .footer-middle-info-row {
      flex-direction: column;
      gap: 32px;
      text-align: center;
    }

    .info-block {
      flex-direction: column;
      text-align: center;
    }

    .info-text {
      align-items: center;
      text-align: center;
    }
  }

  @media (max-width: 767px) {
    .site-footer-light {
      padding: 60px 0 24px 0;
    }

    .footer-light-container {
      padding: 0 20px;
    }

    .footer-4col-grid {
      grid-template-columns: 1fr;
      gap: 30px;
    }

    .footer-light-bottom-bar {
      flex-direction: column;
      gap: 20px;
      text-align: center;
    }

    .legal-policy-links {
      flex-direction: column;
      gap: 14px;
    }
  }
  </style>
</body>
</html>
