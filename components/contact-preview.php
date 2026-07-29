<!-- Contact Section -->
<section id="contact" class="contact-section">
  <div class="container">
    
    <!-- Split Layout Grid -->
    <div class="contact-grid">
      
      <!-- Left Column: Heading, Info, Office locations, Calendar Booking -->
      <div class="contact-info-side" data-aos="fade-right">
        <span class="section-badge">Contact Us</span>
        <h2 class="section-title text-left">Partner with Jaiton Technologies</h2>
        <p class="section-desc text-left">
          Let's explore your product modernization roadmap, AI model deployments, and cloud engineering setups.
        </p>

        <!-- Address Cards -->
        <div class="contact-office-cards">
          
          <div class="contact-office-box glass-panel">
            <h4><i class="fa-solid fa-map-pin"></i> Sydney HQ</h4>
            <p>Level 14, 275 Alfred St, North Sydney NSW 2060</p>
            <div class="office-box-links">
              <a href="tel:+61468403743"><i class="fa-solid fa-phone"></i> +61 468 403 743</a>
              <a href="mailto:sydney@jaiton.com"><i class="fa-solid fa-envelope"></i> sydney@jaiton.com</a>
            </div>
          </div>

          <div class="contact-office-box glass-panel">
            <h4><i class="fa-solid fa-map-pin"></i> Bangalore R&D</h4>
            <p>Prestige Trade Tower, Palace Rd, Bengaluru 560001</p>
            <div class="office-box-links">
              <a href="tel:+918040927700"><i class="fa-solid fa-phone"></i> +91 80 4092 7700</a>
              <a href="mailto:india@jaiton.com"><i class="fa-solid fa-envelope"></i> india@jaiton.com</a>
            </div>
          </div>

        </div>

        <!-- Interactive Calendar Booking Card -->
        <div class="calendar-booking-card glass-panel">
          <div class="calendar-header">
            <i class="fa-solid fa-calendar-days"></i>
            <div>
              <h5>Book Strategy Workshop</h5>
              <span>30-Min Consultation &bull; Free</span>
            </div>
          </div>
          <p class="calendar-intro">Select a slot to automatically schedule with our lead solution architect:</p>
          <div class="calendar-slots">
            <button class="calendar-slot-btn" data-time="Tomorrow, 10:00 AM">Tomorrow <br><strong>10:00 AM</strong></button>
            <button class="calendar-slot-btn" data-time="Tomorrow, 2:00 PM">Tomorrow <br><strong>2:00 PM</strong></button>
            <button class="calendar-slot-btn" data-time="Wednesday, 11:00 AM">Wednesday <br><strong>11:00 AM</strong></button>
          </div>
          <div class="calendar-alert" id="calendar-confirmation"></div>
        </div>
      </div>

      <!-- Right Column: Glass Contact Form -->
      <div class="contact-form-side" data-aos="fade-left">
        <div class="glass-form-container glass-panel">
          <h3>Let's build something exceptional</h3>
          <p>Submit your enterprise request to schedule audits and timeline scoping.</p>
          
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
                <label for="budget">Project Budget (AUD) *</label>
                <select id="budget" name="budget" required>
                  <option value="under-100k">Under $100,000</option>
                  <option value="100k-250k">$100,000 - $250,000</option>
                  <option value="250k-500k">$250,000 - $500,000</option>
                  <option value="above-500k">$500,000+</option>
                </select>
              </div>
              <div class="form-group">
                <label for="timeline">Expected Timeline</label>
                <select id="timeline" name="timeline">
                  <option value="1-3-months">1 - 3 Months</option>
                  <option value="3-6-months">3 - 6 Months</option>
                  <option value="6-plus-months">6+ Months</option>
                </select>
              </div>
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
      </div>

    </div>
  </div>
</section>

<!-- CSS specifically for Contact Section -->
<style>
.contact-section {
  padding: 120px 0;
  background-color: var(--light-bg);
  position: relative;
  overflow: hidden;
}

.contact-grid {
  display: grid;
  grid-template-cols: 0.95fr 1.05fr;
  gap: 80px;
  align-items: flex-start;
}

/* Left side info styling */
.contact-info-side {
  text-align: left;
}

.contact-office-cards {
  display: grid;
  grid-template-cols: 1fr;
  gap: 20px;
  margin: 36px 0;
}

.contact-office-box {
  background-color: rgba(255, 255, 255, 0.7);
  padding: 24px;
  border-radius: var(--radius-lg);
  border: 1px solid var(--border-color);
}

.contact-office-box h4 {
  font-size: 1.1rem;
  font-weight: 800;
  color: var(--dark-navy);
  margin-bottom: 8px;
  display: flex;
  align-items: center;
  gap: 8px;
}

.contact-office-box h4 i {
  color: var(--primary-purple);
}

.contact-office-box p {
  font-size: 0.85rem;
  color: var(--secondary-text);
  margin-bottom: 12px;
}

.office-box-links {
  display: flex;
  gap: 20px;
}

.office-box-links a {
  font-size: 0.8125rem;
  font-weight: 700;
  color: var(--primary-purple);
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

/* Calendar widget */
.calendar-booking-card {
  background-color: var(--white);
  border: 1px solid var(--border-color);
  border-radius: var(--radius-lg);
  padding: 28px;
  box-shadow: var(--shadow-sm);
}

.calendar-header {
  display: flex;
  align-items: center;
  gap: 16px;
  margin-bottom: 16px;
  border-bottom: 1px solid var(--border-color);
  padding-bottom: 16px;
}

.calendar-header i {
  font-size: 2.2rem;
  color: var(--primary-purple);
}

.calendar-header h5 {
  font-size: 1rem;
  font-weight: 800;
  color: var(--dark-navy);
  margin-bottom: 2px;
}

.calendar-header span {
  font-size: 0.75rem;
  font-weight: 600;
  color: var(--muted-text);
}

.calendar-intro {
  font-size: 0.8125rem;
  color: var(--secondary-text);
  margin-bottom: 16px;
}

.calendar-slots {
  display: grid;
  grid-template-cols: repeat(3, 1fr);
  gap: 12px;
}

.calendar-slot-btn {
  background-color: var(--light-bg);
  border: 1px solid var(--border-color);
  border-radius: 8px;
  padding: 10px;
  cursor: pointer;
  font-size: 0.75rem;
  color: var(--secondary-text);
  transition: all var(--transition-fast);
}

.calendar-slot-btn strong {
  display: block;
  font-size: 0.85rem;
  color: var(--dark-navy);
  margin-top: 4px;
}

.calendar-slot-btn:hover {
  border-color: var(--primary-purple);
  background-color: rgba(109, 40, 255, 0.04);
}

.calendar-slot-btn.selected {
  background-color: var(--primary-purple);
  border-color: var(--primary-purple);
  color: var(--white);
}

.calendar-slot-btn.selected strong {
  color: var(--white);
}

.calendar-alert {
  margin-top: 16px;
  font-size: 0.75rem;
  font-weight: 700;
  color: #10B981;
  text-align: center;
}

/* Right side form container */
.glass-form-container {
  background: rgba(255, 255, 255, 0.8);
  border-radius: var(--radius-lg);
  border: 1px solid var(--border-color);
  box-shadow: var(--shadow-lg);
  padding: 48px;
}

.glass-form-container h3 {
  font-size: 1.45rem;
  font-weight: 800;
  color: var(--dark-navy);
  margin-bottom: 8px;
}

.glass-form-container p {
  font-size: 0.875rem;
  color: var(--muted-text);
  margin-bottom: 32px;
}

/* Form details */
.enterprise-form {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.form-row {
  display: grid;
  grid-template-cols: repeat(2, 1fr);
  gap: 20px;
}

.form-group {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.form-group label {
  font-size: 0.75rem;
  font-weight: 700;
  text-transform: uppercase;
  color: var(--dark-navy);
  margin-bottom: 8px;
  letter-spacing: 0.05em;
}

.form-group input,
.form-group select,
.form-group textarea {
  width: 100%;
  padding: 12px 16px;
  background-color: var(--white);
  border: 1px solid var(--border-color);
  border-radius: 8px;
  font-family: var(--font-body);
  font-size: 0.875rem;
  color: var(--primary-text);
  outline: none;
  box-sizing: border-box;
  transition: all var(--transition-fast);
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  border-color: var(--primary-purple);
  box-shadow: 0 0 0 3px rgba(109, 40, 255, 0.1);
}

.form-submit {
  background: linear-gradient(135deg, var(--primary-purple) 0%, var(--royal-purple) 100%);
  color: var(--white);
  border: none;
  font-weight: 600;
  padding: 14px 28px;
  border-radius: 100px;
  box-shadow: 0 4px 14px rgba(109, 40, 255, 0.15);
  margin-top: 12px;
}

.form-submit:hover {
  box-shadow: 0 8px 24px rgba(109, 40, 255, 0.35);
  transform: translateY(-2px);
}

@media (max-width: 991px) {
  .contact-grid {
    grid-template-cols: 1fr;
    gap: 48px;
  }
}

@media (max-width: 767px) {
  .contact-section {
    padding: 80px 0;
  }
  .glass-form-container {
    padding: 32px;
  }
  .form-row {
    grid-template-cols: 1fr;
    gap: 16px;
  }
  .calendar-slots {
    grid-template-cols: 1fr;
  }
}
</style>

<!-- Script for Calendar Selection Confirmation -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const slotButtons = document.querySelectorAll(".calendar-slot-btn");
  const confirmationAlert = document.getElementById("calendar-confirmation");
  
  slotButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      // Clear selections
      slotButtons.forEach(b => b.classList.remove("selected"));
      
      // Select clicked
      btn.classList.add("selected");
      const timeStr = btn.getAttribute("data-time");
      
      // Show confirmation
      if (confirmationAlert) {
        confirmationAlert.innerHTML = `<i class="fa-solid fa-circle-check"></i> Strategy session selected for <strong>${timeStr}</strong>. Please complete the form below to confirm.`;
        
        // Auto fill requirements text field slightly
        const reqTextarea = document.getElementById("requirements");
        if (reqTextarea) {
          reqTextarea.value = `I would like to book the strategy session on ${timeStr}. Our primary project focus is... `;
          reqTextarea.focus();
        }
      }
    });
  });
});
</script>
