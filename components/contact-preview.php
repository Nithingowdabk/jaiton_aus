<!-- Contact Preview Section -->
<section id="contact" class="contact-section">
  <div class="container">
    <div class="contact-grid">
      
      <!-- Left Column: Form -->
      <div class="contact-form-wrapper" data-aos="fade-right">
        <span class="section-badge">Get in Touch</span>
        <h2 class="section-title text-left">Let's Discuss Your Project</h2>
        <p class="section-desc text-left mb-32">
          Submit your requirements and our solutions architect will reach out within 24 hours to schedule a free strategy workshop.
        </p>

        <form id="enterprise-contact-form" class="enterprise-form" method="POST" action="#">
          <div class="form-row">
            <div class="form-group">
              <label for="name">Your Name *</label>
              <input type="text" id="name" name="name" required placeholder="John Doe">
            </div>
            <div class="form-group">
              <label for="company">Company *</label>
              <input type="text" id="company" name="company" required placeholder="Aura Mining Pty Ltd">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="email">Business Email *</label>
              <input type="email" id="email" name="email" required placeholder="john@company.com">
            </div>
            <div class="form-group">
              <label for="phone">Phone Number *</label>
              <input type="tel" id="phone" name="phone" required placeholder="+61 468 403 743">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="country">Country *</label>
              <select id="country" name="country" required>
                <option value="Australia">Australia</option>
                <option value="India">India</option>
                <option value="South Africa">South Africa</option>
                <option value="UAE">UAE</option>
                <option value="Singapore">Singapore</option>
              </select>
            </div>
            <div class="form-group">
              <label for="budget">Project Budget (AUD) *</label>
              <select id="budget" name="budget" required>
                <option value="under-50k">Under $50,000</option>
                <option value="50k-100k">$50,000 - $100,000</option>
                <option value="100k-250k">$100,000 - $250,000</option>
                <option value="above-250k">$250,000+</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="timeline">Expected Timeline</label>
            <select id="timeline" name="timeline">
              <option value="1-3-months">1 - 3 Months</option>
              <option value="3-6-months">3 - 6 Months</option>
              <option value="6-plus-months">6+ Months</option>
            </select>
          </div>

          <div class="form-group">
            <label for="requirements">Project Requirements *</label>
            <textarea id="requirements" name="requirements" rows="4" required placeholder="Describe your product requirements, stack preferences, and business goals..."></textarea>
          </div>

          <button type="submit" class="btn btn-primary ripple-btn form-submit">
            Submit Inquiry <i class="fa-solid fa-paper-plane"></i>
          </button>
        </form>
      </div>

      <!-- Right Column: Info & Map -->
      <div class="contact-info-wrapper" data-aos="fade-left">
        <!-- Contact Cards -->
        <div class="info-card">
          <h4><i class="fa-solid fa-map-location-dot"></i> Australian Headquarters</h4>
          <p>Level 14, 275 Alfred St, North Sydney NSW 2060</p>
          <a href="tel:+61468403743" class="contact-link"><i class="fa-solid fa-phone"></i> +61 468 403 743</a>
          <a href="mailto:sydney@jaiton.com" class="contact-link"><i class="fa-solid fa-envelope"></i> sydney@jaiton.com</a>
        </div>

        <!-- Google Map Placeholder (Styled cleanly with absolute compliance coordinates) -->
        <div class="map-placeholder">
          <!-- Styled Map Mock -->
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.435730303792!2d151.20626307659424!3d-33.83973947323838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12aec862071d79%3A0xe54d8122dbecb2d5!2s275%20Alfred%20St%2C%20North%20Sydney%20NSW%202060!5e0!3m2!1sen!2sau!4v1700000000000!5m2!1sen!2sau" 
            width="100%" 
            height="100%" 
            style="border:0; border-radius: 16px;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CSS specifically for Contact component structure -->
<style>
.contact-section {
  padding: 100px 0;
  background-color: var(--white);
}

.contact-grid {
  display: grid;
  grid-template-cols: 1.150fr 0.850fr;
  gap: 60px;
}

.text-left {
  text-align: left !important;
}

.mb-32 {
  margin-bottom: 32px !important;
}

.enterprise-form {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.form-row {
  display: grid;
  grid-template-cols: 1fr 1fr;
  gap: 20px;
}

.form-group {
  display: flex;
  flex-direction: column;
  gap: 6px;
}

.form-group label {
  font-size: 0.75rem;
  font-weight: 700;
  color: var(--dark-navy);
}

.form-group input,
.form-group select,
.form-group textarea {
  font-family: var(--font-body);
  font-size: 0.875rem;
  padding: 12px 16px;
  background-color: var(--light-bg);
  border: 1px solid var(--border-color);
  border-radius: 10px;
  outline: none;
  transition: all var(--transition-fast);
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  border-color: var(--primary-purple);
  background-color: var(--white);
  box-shadow: 0 0 0 4px rgba(106, 27, 255, 0.08);
}

.form-submit {
  width: fit-content;
  padding: 14px 32px;
}

.contact-info-wrapper {
  display: flex;
  flex-direction: column;
  gap: 32px;
}

.info-card {
  background-color: var(--light-bg);
  border: 1px solid var(--border-color);
  border-radius: 16px;
  padding: 32px;
  box-shadow: var(--shadow-sm);
}

.info-card h4 {
  font-size: 1.1rem;
  font-weight: 700;
  margin-bottom: 12px;
  display: flex;
  align-items: center;
  gap: 10px;
}

.info-card h4 i {
  color: var(--primary-purple);
}

.info-card p {
  font-size: 0.875rem;
  color: var(--secondary-text);
  margin-bottom: 20px;
}

.contact-link {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 0.875rem;
  font-weight: 600;
  color: var(--dark-navy);
  margin-top: 10px;
  width: fit-content;
}

.contact-link i {
  color: var(--primary-blue);
  width: 16px;
}

.contact-link:hover {
  color: var(--primary-purple);
}

.map-placeholder {
  height: 320px;
  background-color: var(--light-bg);
  border: 1px solid var(--border-color);
  border-radius: 16px;
  box-shadow: var(--shadow-sm);
  overflow: hidden;
}

@media (max-width: 991px) {
  .contact-grid {
    grid-template-cols: 1fr;
    gap: 40px;
  }
}

@media (max-width: 767px) {
  .form-row {
    grid-template-cols: 1fr;
  }
  
  .form-submit {
    width: 100%;
  }
}
</style>
