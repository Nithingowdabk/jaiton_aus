  <!-- Premium Massive Footer -->
  <footer class="site-footer">
    <div class="container">
      
      <!-- Top Row: Branding & Newsletter -->
      <div class="footer-top-row">
        <div class="footer-brand-info">
          <img src="assets/logo/Logo.png" alt="Jaiton Technologies Footer Logo" class="footer-logo">
          <p class="footer-brand-desc">
            Helping Australian businesses accelerate digital transformation through high-performance enterprise software, AI integrations, and cloud platforms.
          </p>
          <div class="footer-credentials">
            <span class="credential-badge"><i class="fa-solid fa-shield-halved"></i> ISO 27001 Certified</span>
            <span class="credential-badge"><i class="fa-solid fa-award"></i> ISO 9001 Quality</span>
          </div>
        </div>
        <div class="footer-newsletter">
          <h4>Subscribe to Insights</h4>
          <p>Get the latest technology updates, security bulletins, and enterprise reports delivered directly to your inbox.</p>
          <form class="newsletter-form" action="#" method="POST">
            <input type="email" placeholder="Business Email" required aria-label="Business Email">
            <button type="submit" class="btn btn-primary ripple-btn" aria-label="Subscribe"><i class="fa-solid fa-paper-plane"></i></button>
          </form>
        </div>
      </div>

      <!-- Middle Row: Multi-Column Quick Links & Addresses -->
      <div class="footer-links-grid">
        
        <!-- Col 1: Solutions -->
        <div class="footer-col">
          <h5>Solutions</h5>
          <ul class="footer-links">
            <li><a href="#why-jaiton">AI Engineering</a></li>
            <li><a href="#why-jaiton">Cloud Modernisation</a></li>
            <li><a href="#why-jaiton">Enterprise Software</a></li>
            <li><a href="#why-jaiton">Data Intelligence</a></li>
            <li><a href="#why-jaiton">Cybersecurity</a></li>
            <li><a href="#why-jaiton">IoT Engineering</a></li>
          </ul>
        </div>

        <!-- Col 2: Industries -->
        <div class="footer-col">
          <h5>Industries</h5>
          <ul class="footer-links">
            <li><a href="#industries">Healthcare</a></li>
            <li><a href="#industries">Mining & Resources</a></li>
            <li><a href="#industries">Construction</a></li>
            <li><a href="#industries">Manufacturing</a></li>
            <li><a href="#industries">Education</a></li>
            <li><a href="#industries">Retail & Supply</a></li>
          </ul>
        </div>

        <!-- Col 3: Resources -->
        <div class="footer-col">
          <h5>Resources</h5>
          <ul class="footer-links">
            <li><a href="#insights">Insights Blog</a></li>
            <li><a href="#featured">Case Studies</a></li>
            <li><a href="#why-jaiton">Delivery Workflow</a></li>
            <li><a href="#technologies">Technology Stack</a></li>
            <li><a href="#contact">Whitepapers</a></li>
          </ul>
        </div>

        <!-- Col 4: Company -->
        <div class="footer-col">
          <h5>Company</h5>
          <ul class="footer-links">
            <li><a href="#why-jaiton">About Jaiton</a></li>
            <li><a href="#contact">Careers @ Jaiton</a></li>
            <li><a href="#contact">Our Partners</a></li>
            <li><a href="#why-jaiton">Social Impact</a></li>
          </ul>
        </div>

        <!-- Col 5: Support -->
        <div class="footer-col">
          <h5>Support</h5>
          <ul class="footer-links">
            <li><a href="#contact">Help Desk</a></li>
            <li><a href="#contact">SLA Guarantee</a></li>
            <li><a href="#contact">API Status</a></li>
            <li><a href="#contact">Consultations</a></li>
          </ul>
        </div>

        <!-- Col 6: Legal -->
        <div class="footer-col">
          <h5>Legal</h5>
          <ul class="footer-links">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Security Assurances</a></li>
            <li><a href="#">Cookie Policy</a></li>
          </ul>
        </div>

      </div>

      <!-- Office Addresses Row -->
      <div class="footer-addresses-row">
        <div class="footer-address-box">
          <strong>North Sydney HQ:</strong>
          <span>Level 14, 275 Alfred St, North Sydney NSW 2060, Australia</span>
        </div>
        <div class="footer-address-box">
          <strong>Bangalore R&D:</strong>
          <span>Prestige Trade Tower, Palace Rd, Bangalore 560001, India</span>
        </div>
      </div>

      <!-- Bottom Row: Copyright & Socials -->
      <div class="footer-bottom-row">
        <p class="copyright-text">
          &copy; <?php echo date('Y'); ?> Jaiton Technologies. All Rights Reserved. Built to Australian Quality Standards.
        </p>
        <div class="footer-socials">
          <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#" aria-label="Twitter X"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="#" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
          <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
        </div>
      </div>

    </div>
  </footer>

  <!-- Swiper.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <!-- AOS (Animate On Scroll) JS CDN -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <!-- GSAP CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

  <!-- Footer Scoped Styles -->
  <style>
  .site-footer {
    background: linear-gradient(135deg, var(--dark-navy) 0%, #03070f 100%);
    border-top: 2px solid var(--primary-purple);
    box-shadow: 0 -12px 40px rgba(109, 40, 255, 0.15);
    padding: 80px 0 40px 0;
    color: var(--white);
  }

  .footer-top-row {
    display: grid;
    grid-template-cols: 1.1fr 0.9fr;
    gap: 60px;
    align-items: flex-start;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    padding-bottom: 48px;
    margin-bottom: 48px;
    text-align: left;
  }

  .footer-logo {
    height: 44px;
    width: auto;
    margin-bottom: 20px;
  }

  .footer-brand-desc {
    font-size: 0.9rem;
    line-height: 1.6;
    color: #cbd5e1;
    max-width: 480px;
    margin-bottom: 24px;
  }

  .footer-credentials {
    display: flex;
    gap: 16px;
  }

  .credential-badge {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    color: var(--white);
    background-color: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    padding: 6px 14px;
    border-radius: 6px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
  }

  .credential-badge i {
    color: #a275ff;
  }

  /* Newsletter styling */
  .footer-newsletter h4 {
    font-size: 1.15rem;
    font-weight: 800;
    color: var(--white);
    margin-bottom: 12px;
  }

  .footer-newsletter p {
    font-size: 0.85rem;
    color: #cbd5e1;
    margin-bottom: 20px;
    line-height: 1.5;
  }

  .newsletter-form {
    display: flex;
    gap: 10px;
    max-width: 420px;
  }

  .newsletter-form input {
    flex-grow: 1;
    padding: 12px 18px;
    background-color: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 100px;
    color: var(--white);
    outline: none;
    font-family: var(--font-body);
    font-size: 0.85rem;
    transition: all var(--transition-fast);
  }

  .newsletter-form input:focus {
    border-color: var(--primary-purple);
    background-color: rgba(255, 255, 255, 0.08);
  }

  .newsletter-form button {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    border: none;
    background: linear-gradient(135deg, var(--primary-purple) 0%, var(--royal-purple) 100%);
    color: var(--white);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all var(--transition-fast);
    box-shadow: 0 4px 10px rgba(109, 40, 255, 0.2);
  }

  .newsletter-form button:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 14px rgba(109, 40, 255, 0.4);
  }

  /* Columns quick links grid */
  .footer-links-grid {
    display: grid;
    grid-template-cols: repeat(6, 1fr);
    gap: 28px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    padding-bottom: 48px;
    margin-bottom: 32px;
    text-align: left;
  }

  .footer-col h5 {
    font-size: 0.875rem;
    font-weight: 800;
    text-transform: uppercase;
    color: var(--white);
    margin-bottom: 20px;
    letter-spacing: 0.05em;
  }

  .footer-links {
    display: flex;
    flex-direction: column;
    gap: 12px;
  }

  .footer-links li a {
    font-size: 0.8125rem;
    color: #94a3b8;
    transition: color var(--transition-fast);
  }

  .footer-links li a:hover {
    color: var(--white);
  }

  /* Office Addresses row */
  .footer-addresses-row {
    display: grid;
    grid-template-cols: repeat(2, 1fr);
    gap: 32px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    padding-bottom: 32px;
    margin-bottom: 32px;
    text-align: left;
  }

  .footer-address-box {
    display: flex;
    flex-direction: column;
    gap: 6px;
    font-size: 0.8125rem;
    color: #94a3b8;
  }

  .footer-address-box strong {
    color: var(--white);
  }

  /* Bottom copyright socials */
  .footer-bottom-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .copyright-text {
    font-size: 0.75rem;
    color: #64748b;
  }

  .footer-socials {
    display: flex;
    gap: 16px;
  }

  .footer-socials a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.04);
    color: #94a3b8;
    font-size: 0.85rem;
    transition: all var(--transition-fast);
    border: 1px solid rgba(255, 255, 255, 0.05);
  }

  .footer-socials a:hover {
    background-color: var(--primary-purple);
    color: var(--white);
    border-color: var(--primary-purple);
    transform: translateY(-2px);
  }

  @media (max-width: 991px) {
    .footer-top-row {
      grid-template-cols: 1fr;
      gap: 32px;
    }
    .footer-links-grid {
      grid-template-cols: repeat(3, 1fr);
      gap: 32px;
    }
    .footer-addresses-row {
      grid-template-cols: 1fr;
      gap: 16px;
    }
  }

  @media (max-width: 575px) {
    .footer-links-grid {
      grid-template-cols: repeat(2, 1fr);
      gap: 28px;
    }
    .footer-bottom-row {
      flex-direction: column;
      gap: 16px;
      text-align: center;
    }
  }
  </style>

  <!-- Custom Scripts -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/slider.js"></script>
  <script src="assets/js/animation.js"></script>

  <script>
    // Initialize AOS animation library
    AOS.init({
      duration: 800,
      easing: 'ease-out-quad',
      once: true,
      offset: 60
    });
  </script>
</body>
</html>

