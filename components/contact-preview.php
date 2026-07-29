<!-- Direct Enterprise Contact & Global Office Hub Section -->
<section id="contact" class="contact-section">
  <div class="container">
    
    <!-- Section Header (Centered) -->
    <div class="contact-header-center" data-aos="fade-up">
      <span class="section-badge">Direct Contact Hub</span>
      <h2 class="section-title">Connect with Our Engineering Directors</h2>
      <p class="section-desc">
        Direct phone lines, local office addresses, and instant 30-minute strategy call scheduling for Australian enterprise clients.
      </p>
    </div>

    <!-- 3-Column Office & Booking Cards Grid -->
    <div class="contact-hub-grid" data-aos="fade-up" data-aos-delay="100">
      
      <!-- Card 1: Sydney HQ -->
      <div class="contact-office-card glass-panel">
        <div class="office-card-header">
          <span class="flag-emoji">🇦🇺</span>
          <div>
            <h4>Sydney Headquarters</h4>
            <span class="office-subtag">Corporate Governance & Strategy</span>
          </div>
        </div>
        <p class="office-address"><i class="fa-solid fa-location-dot text-purple"></i> Level 14, 275 Alfred St, North Sydney NSW 2060</p>
        <div class="office-contact-details">
          <a href="tel:+61468403743" class="contact-link"><i class="fa-solid fa-phone"></i> +61 468 403 743</a>
          <a href="mailto:sydney@jaiton.com" class="contact-link"><i class="fa-solid fa-envelope"></i> sydney@jaiton.com</a>
        </div>
      </div>

      <!-- Card 2: Bangalore R&D -->
      <div class="contact-office-card glass-panel">
        <div class="office-card-header">
          <span class="flag-emoji">🇮🇳</span>
          <div>
            <h4>Bangalore R&D Center</h4>
            <span class="office-subtag">AI & Cloud Engineering Hub</span>
          </div>
        </div>
        <p class="office-address"><i class="fa-solid fa-location-dot text-blue"></i> Prestige Trade Tower, Palace Rd, Bengaluru 560001</p>
        <div class="office-contact-details">
          <a href="tel:+918040927700" class="contact-link"><i class="fa-solid fa-phone"></i> +91 80 4092 7700</a>
          <a href="mailto:india@jaiton.com" class="contact-link"><i class="fa-solid fa-envelope"></i> india@jaiton.com</a>
        </div>
      </div>

      <!-- Card 3: Instant Calendar Workshop Booking -->
      <div class="contact-office-card glass-panel calendar-hub-card">
        <div class="calendar-header-wrap">
          <i class="fa-solid fa-calendar-check text-purple"></i>
          <div>
            <h4>Instant Strategy Slot</h4>
            <span class="office-subtag">30-Min Architecture Consultation</span>
          </div>
        </div>
        <p class="calendar-desc">Select a slot to automatically schedule with our lead solution architect:</p>
        <div class="calendar-slots-grid">
          <button class="calendar-slot-btn" data-time="Tomorrow, 10:00 AM">Tomorrow <br><strong>10:00 AM AEST</strong></button>
          <button class="calendar-slot-btn" data-time="Tomorrow, 2:00 PM">Tomorrow <br><strong>2:00 PM AEST</strong></button>
          <button class="calendar-slot-btn" data-time="Wednesday, 11:00 AM">Wednesday <br><strong>11:00 AM AEST</strong></button>
        </div>
        <div class="calendar-alert" id="calendar-confirmation"></div>
      </div>

    </div>

  </div>
</section>

<!-- Scoped Styles for Contact Preview Section -->
<style>
.contact-section {
  padding: 90px 0;
  background-color: var(--light-bg);
  position: relative;
  overflow: hidden;
}

.contact-header-center {
  text-align: center;
  max-width: 760px;
  margin: 0 auto 50px auto;
}

.contact-hub-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 28px;
  max-width: 1440px;
  margin: 0 auto;
}

.contact-office-card {
  background: rgba(255, 255, 255, 0.85);
  border: 1px solid var(--border-color);
  border-radius: var(--radius-lg);
  padding: 32px;
  box-shadow: var(--shadow-sm);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  transition: all var(--transition-fast);
}

.contact-office-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-md);
  border-color: var(--primary-purple);
}

.office-card-header {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 18px;
}

.flag-emoji {
  font-size: 32px;
}

.office-card-header h4 {
  font-size: 1.15rem;
  font-weight: 800;
  color: var(--dark-navy);
  margin-bottom: 2px;
}

.office-subtag {
  font-size: 0.78rem;
  font-weight: 700;
  color: var(--primary-purple);
}

.office-address {
  font-size: 0.9rem;
  color: var(--secondary-text);
  line-height: 1.5;
  margin-bottom: 20px;
  display: flex;
  align-items: flex-start;
  gap: 8px;
}

.office-address i {
  margin-top: 4px;
}

.office-contact-details {
  display: flex;
  flex-direction: column;
  gap: 10px;
  border-top: 1px solid var(--border-color);
  padding-top: 16px;
}

.contact-link {
  font-size: 0.88rem;
  font-weight: 700;
  color: var(--dark-navy);
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: color var(--transition-fast);
}

.contact-link:hover {
  color: var(--primary-purple);
}

.contact-link i {
  color: var(--primary-purple);
}

/* Calendar Hub Specific */
.calendar-hub-card {
  background: var(--white);
}

.calendar-header-wrap {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-bottom: 14px;
}

.calendar-header-wrap i {
  font-size: 2rem;
}

.calendar-desc {
  font-size: 0.85rem;
  color: var(--secondary-text);
  margin-bottom: 16px;
}

.calendar-slots-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 10px;
}

.calendar-slot-btn {
  background-color: var(--light-bg);
  border: 1px solid var(--border-color);
  border-radius: 8px;
  padding: 10px 6px;
  cursor: pointer;
  font-size: 0.75rem;
  color: var(--secondary-text);
  transition: all var(--transition-fast);
  text-align: center;
}

.calendar-slot-btn:hover {
  border-color: var(--primary-purple);
  background-color: rgba(109, 40, 255, 0.06);
  color: var(--primary-purple);
}

.calendar-slot-btn strong {
  font-size: 0.8rem;
  color: var(--dark-navy);
}

.calendar-alert {
  margin-top: 14px;
  font-size: 0.82rem;
  font-weight: 700;
  color: #10B981;
}

/* Responsive */
@media (max-width: 1199px) {
  .contact-hub-grid {
    grid-template-columns: 1fr;
  }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const slotBtns = document.querySelectorAll(".calendar-slot-btn");
  const alertBox = document.getElementById("calendar-confirmation");

  slotBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      const timeSlot = btn.getAttribute("data-time");
      if (alertBox) {
        alertBox.innerHTML = `<i class="fa-solid fa-circle-check"></i> Strategy slot selected: <strong>${timeSlot}</strong>. Our team will email confirmation.`;
      }
    });
  });
});
</script>
