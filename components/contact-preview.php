<!-- ============================================================
     CONTACT FORM SECTION – (Have Any Project Plan In Your Mind Style)
     ============================================================ -->
<section id="contact" class="inquiry-form-section">
  
  <div class="container">
    
    <!-- Outer White Glass Card Container -->
    <div class="inquiry-card-outer" data-aos="fade-up">
      <div class="inquiry-grid">
        
        <!-- ============================================================
             LEFT COLUMN: Get In Touch Script, Title & Direct Channels
             ============================================================ -->
        <div class="inquiry-left-content">
          
          <span class="script-accent-badge">Get In touch</span>

          <h2 class="inquiry-title">
            Have any Project Plan In your Mind?
          </h2>

          <p class="inquiry-desc">
            Tell us about your upcoming software, AI, or cloud roadmap. Our team will schedule a 30-minute architecture audit and deliver scoping details for your project.
          </p>

          <!-- Direct Contact Detail Rows -->
          <div class="direct-contact-channels">
            
            <!-- Phone Row -->
            <div class="contact-channel-item">
              <div class="channel-icon-circle">
                <i class="fa-solid fa-phone"></i>
              </div>
              <div class="channel-text">
                <span class="channel-label">For urgent help</span>
                <a href="tel:+61468403743" class="channel-value">+61 468 403 743</a>
              </div>
            </div>

            <!-- Email Row -->
            <div class="contact-channel-item">
              <div class="channel-icon-circle">
                <i class="fa-solid fa-envelope"></i>
              </div>
              <div class="channel-text">
                <span class="channel-label">Mail us 24/7</span>
                <a href="mailto:sydney@jaiton.com" class="channel-value">sydney@jaiton.com</a>
              </div>
            </div>

          </div>

        </div>

        <!-- ============================================================
             RIGHT COLUMN: Clean Light Form Controls & Submit Button
             ============================================================ -->
        <div class="inquiry-right-form">
          <form class="project-inquiry-form" onsubmit="event.preventDefault(); alert('Thank you! Your project request has been received. Our team will contact you shortly.');">
            
            <!-- Field 1: Your Name -->
            <div class="form-group-item">
              <label class="form-field-label">Your Name</label>
              <input type="text" class="form-input-light" placeholder="e.g. John Doe" required>
            </div>

            <!-- Field 2: Email Address -->
            <div class="form-group-item">
              <label class="form-field-label">Email Address</label>
              <input type="email" class="form-input-light" placeholder="e.g. john@company.com" required>
            </div>

            <!-- Field 3: How can help you? -->
            <div class="form-group-item">
              <label class="form-field-label">How can help you?</label>
              <textarea class="form-textarea-light" rows="4" placeholder="Describe your product requirements, stack preferences, or roadmap..." required></textarea>
            </div>

            <!-- Full-Width Submit Button -->
            <button type="submit" class="btn-submit-now">
              Submit Now
            </button>

          </form>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- ============================================================
     INQUIRY FORM SCOPED STYLES
     ============================================================ -->
<style>
/* Section Shell (Light Enterprise Theme) */
.inquiry-form-section {
  position: relative;
  padding: 100px 0;
  background-color: #F8FAFC;
  overflow: hidden;
}

/* Outer White Glass Card */
.inquiry-card-outer {
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  border-radius: 28px;
  padding: 70px 60px;
  max-width: 1440px;
  margin: 0 auto;
  box-shadow: 0 20px 48px rgba(0, 43, 128, 0.06);
  position: relative;
  z-index: 5;
}

.inquiry-grid {
  display: grid;
  grid-template-columns: 48% calc(52% - 48px);
  gap: 48px;
  align-items: center;
}

/* ── LEFT COLUMN ── */
.inquiry-left-content {
  text-align: left;
}

.script-accent-badge {
  font-family: 'Playfair Display', 'Georgia', serif;
  font-style: italic;
  font-size: 26px;
  font-weight: 600;
  color: #6A1BFF;
  margin-bottom: 12px;
  display: block;
}

.inquiry-title {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(34px, 3.5vw, 48px);
  font-weight: 800;
  line-height: 1.18;
  color: #0F172A;
  margin-bottom: 24px;
  letter-spacing: -0.02em;
}

.inquiry-desc {
  font-size: 15.5px;
  line-height: 1.65;
  color: #64748B;
  margin-bottom: 36px;
  max-width: 520px;
}

/* Direct Contact Channels */
.direct-contact-channels {
  display: flex;
  flex-direction: column;
  gap: 24px;
}

.contact-channel-item {
  display: flex;
  align-items: center;
  gap: 16px;
}

.channel-icon-circle {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: #EBE6FF;
  color: #6A1BFF;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 18px;
  flex-shrink: 0;
}

.channel-text {
  display: flex;
  flex-direction: column;
}

.channel-label {
  font-size: 12px;
  font-weight: 600;
  color: #64748B;
  margin-bottom: 2px;
}

.channel-value {
  font-family: 'Poppins', sans-serif;
  font-size: 16px;
  font-weight: 800;
  color: #0F172A;
  text-decoration: none;
  transition: color 200ms ease;
}

.channel-value:hover {
  color: #6A1BFF;
}

/* ── RIGHT COLUMN: FORM CONTROLS ── */
.inquiry-right-form {
  width: 100%;
}

.project-inquiry-form {
  display: flex;
  flex-direction: column;
  gap: 22px;
  text-align: left;
}

.form-group-item {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.form-field-label {
  font-family: 'Poppins', sans-serif;
  font-size: 14px;
  font-weight: 700;
  color: #334155;
}

.form-input-light,
.form-textarea-light {
  width: 100%;
  background: #F8FAFC;
  border: 1px solid #E2E8F0;
  border-radius: 12px;
  padding: 14px 18px;
  font-size: 15px;
  color: #0F172A;
  outline: none;
  transition: all 250ms ease;
  box-sizing: border-box;
  font-family: inherit;
}

.form-input-light:focus,
.form-textarea-light:focus {
  background: #FFFFFF;
  border-color: #6A1BFF;
  box-shadow: 0 0 0 4px rgba(106, 27, 255, 0.1);
}

.form-textarea-light {
  resize: vertical;
}

/* Submit Now Button */
.btn-submit-now {
  width: 100%;
  height: 54px;
  border-radius: 12px;
  background: #6A1BFF;
  color: #FFFFFF;
  font-family: 'Poppins', sans-serif;
  font-size: 16px;
  font-weight: 700;
  border: none;
  cursor: pointer;
  box-shadow: 0 8px 24px rgba(106, 27, 255, 0.35);
  transition: all 250ms ease;
  margin-top: 6px;
}

.btn-submit-now:hover {
  background: #5713DB;
  transform: translateY(-2px);
  box-shadow: 0 12px 32px rgba(106, 27, 255, 0.5);
}

/* Responsive */
@media (max-width: 1199px) {
  .inquiry-grid {
    grid-template-columns: 1fr;
    gap: 48px;
  }

  .inquiry-card-outer {
    padding: 50px 32px;
  }
}

@media (max-width: 767px) {
  .inquiry-form-section {
    padding: 60px 0;
  }

  .inquiry-card-outer {
    padding: 32px 20px;
  }

  .inquiry-title {
    font-size: 28px;
  }
}
</style>
