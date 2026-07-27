  <!-- Premium Footer -->
  <footer class="site-footer">
    <div class="container">
      
      <!-- Top Row: Branding & Newsletter -->
      <div class="footer-top-row">
        <div class="footer-brand-info">
          <img src="assets/logo/Logo.png" alt="Jaiton Technologies Footer Logo" class="footer-logo">
          <p class="footer-brand-desc">
            Helping Australian businesses accelerate digital transformation through high-performance enterprise software, AI integrations, and cloud platforms.
          </p>
        </div>
        <div class="footer-newsletter">
          <h4>Subscribe to Insights</h4>
          <p>Get the latest technology updates, security bulletins, and enterprise reports delivered directly to your inbox.</p>
          <form class="newsletter-form" action="#" method="POST">
            <input type="email" placeholder="Business Email" required>
            <button type="submit" class="btn btn-primary ripple-btn"><i class="fa-solid fa-paper-plane"></i></button>
          </form>
        </div>
      </div>

      <!-- Middle Row: Multi-Column Quick Links -->
      <div class="footer-links-grid">
        <!-- Col 1: Solutions -->
        <div class="footer-col">
          <h5>Solutions</h5>
          <ul class="footer-links">
            <li><a href="#">Custom Software</a></li>
            <li><a href="#">AI & Machine Learning</a></li>
            <li><a href="#">Cloud Engineering</a></li>
            <li><a href="#">Enterprise Apps</a></li>
            <li><a href="#">IoT Solutions</a></li>
            <li><a href="#">Data Platforms</a></li>
          </ul>
        </div>

        <!-- Col 2: Industries -->
        <div class="footer-col">
          <h5>Industries</h5>
          <ul class="footer-links">
            <li><a href="#">Healthcare</a></li>
            <li><a href="#">Finance</a></li>
            <li><a href="#">Education</a></li>
            <li><a href="#">Mining & Resources</a></li>
            <li><a href="#">Government</a></li>
            <li><a href="#">Logistics & Supply</a></li>
          </ul>
        </div>

        <!-- Col 3: Company -->
        <div class="footer-col">
          <h5>Company</h5>
          <ul class="footer-links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Careers @ Jaiton</a></li>
            <li><a href="#">Our Process</a></li>
            <li><a href="#">Methodology</a></li>
            <li><a href="#">Technologies</a></li>
            <li><a href="#">Global Offices</a></li>
          </ul>
        </div>

        <!-- Col 4: Resources -->
        <div class="footer-col">
          <h5>Resources</h5>
          <ul class="footer-links">
            <li><a href="#">Insights Blog</a></li>
            <li><a href="#">Case Studies</a></li>
            <li><a href="#">System Status</a></li>
            <li><a href="#">Help Center</a></li>
            <li><a href="#">API Documentation</a></li>
            <li><a href="#">Whitepapers</a></li>
          </ul>
        </div>

        <!-- Col 5: Legal -->
        <div class="footer-col">
          <h5>Legal</h5>
          <ul class="footer-links">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Information Security</a></li>
            <li><a href="#">SLA Assurances</a></li>
            <li><a href="#">Cookie Policies</a></li>
          </ul>
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
          <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
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
