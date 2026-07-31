<!-- ============================================================
     MISSION, VISION & CORE VALUES TABBED SECTION
     ============================================================ -->
<section id="mission-vision" class="mission-vision-section">
  
  <div class="container">
    
    <!-- Top Centered Floating Tab Bar -->
    <div class="mission-tabs-header" data-aos="fade-up">
      <button class="mission-tab-btn active" data-tab="mission">OUR MISSION</button>
      <button class="mission-tab-btn" data-tab="vision">OUR VISION</button>
      <button class="mission-tab-btn" data-tab="values">CORE VALUES</button>
    </div>

    <!-- Main Outer Glass Card Container -->
    <div class="mission-card-outer" data-aos="fade-up" data-aos-delay="150">
      
      <!-- ============================================================
           TAB 1: OUR MISSION (Default Active)
           ============================================================ -->
      <div class="mission-tab-content active" id="tab-mission">
        <div class="mission-grid">
          
          <!-- Left Text Content -->
          <div class="mission-text-side">
            <h2 class="mission-title">
              Mission is to bring the power of AI to every business
            </h2>
            <p class="mission-desc">
              As a solution providing company we offer a wide range of consulting, development & quality services with 100% satisfaction, delivering scalable digital platforms for enterprise growth.
            </p>

            <ul class="mission-bullets-list">
              <li>
                <span class="bullet-check"><i class="fa-solid fa-circle-check"></i></span>
                <span>High-performance enterprise software & AI engineering</span>
              </li>
              <li>
                <span class="bullet-check"><i class="fa-solid fa-circle-check"></i></span>
                <span>100% Australian onshore strategy & transparent governance</span>
              </li>
              <li>
                <span class="bullet-check"><i class="fa-solid fa-circle-check"></i></span>
                <span>Scalable cloud infrastructure built for long-term growth</span>
              </li>
            </ul>
          </div>

          <!-- Right Isometric Illustration -->
          <div class="mission-media-side">
            <div class="mission-img-wrap">
              <img src="assets/images/mission-isometric.png" alt="Mission Isometric Tech Illustration" class="mission-iso-img">
            </div>
          </div>

        </div>
      </div>

      <!-- ============================================================
           TAB 2: OUR VISION
           ============================================================ -->
      <div class="mission-tab-content" id="tab-vision">
        <div class="mission-grid">
          
          <div class="mission-text-side">
            <h2 class="mission-title">
              Vision to lead global digital transformation with integrity
            </h2>
            <p class="mission-desc">
              To empower enterprise leaders with resilient digital infrastructure, automated workflows, and ethical artificial intelligence engineered to standard compliance.
            </p>

            <ul class="mission-bullets-list">
              <li>
                <span class="bullet-check"><i class="fa-solid fa-circle-check"></i></span>
                <span>End-to-end cloud modernization & DevOps automation</span>
              </li>
              <li>
                <span class="bullet-check"><i class="fa-solid fa-circle-check"></i></span>
                <span>Zero-trust cybersecurity & ISO 27001 compliance</span>
              </li>
              <li>
                <span class="bullet-check"><i class="fa-solid fa-circle-check"></i></span>
                <span>Sustainable, human-centered technology innovation</span>
              </li>
            </ul>
          </div>

          <div class="mission-media-side">
            <div class="mission-img-wrap">
              <img src="assets/images/vision-isometric.png" alt="Vision Isometric Tech Illustration" class="mission-iso-img">
            </div>
          </div>

        </div>
      </div>

      <!-- ============================================================
           TAB 3: CORE VALUES
           ============================================================ -->
      <div class="mission-tab-content" id="tab-values">
        <div class="mission-grid">
          
          <div class="mission-text-side">
            <h2 class="mission-title">
              Driven by innovation, transparency, and engineering precision
            </h2>
            <p class="mission-desc">
              Our core values define every line of code we write, every cloud architecture we design, and every enterprise partnership we build.
            </p>

            <ul class="mission-bullets-list">
              <li>
                <span class="bullet-check"><i class="fa-solid fa-circle-check"></i></span>
                <span>Uncompromised quality & engineering excellence</span>
              </li>
              <li>
                <span class="bullet-check"><i class="fa-solid fa-circle-check"></i></span>
                <span>Transparent client collaboration & clear SLA commitments</span>
              </li>
              <li>
                <span class="bullet-check"><i class="fa-solid fa-circle-check"></i></span>
                <span>Continuous innovation & future-proof tech stack</span>
              </li>
            </ul>
          </div>

          <div class="mission-media-side">
            <div class="mission-img-wrap">
              <img src="assets/images/values-isometric.png" alt="Core Values Isometric Tech Illustration" class="mission-iso-img">
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>

<!-- Tab Switcher Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const tabBtns = document.querySelectorAll(".mission-tab-btn");
  const tabContents = document.querySelectorAll(".mission-tab-content");

  tabBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      const targetTab = btn.getAttribute("data-tab");
      
      tabBtns.forEach(b => b.classList.remove("active"));
      tabContents.forEach(tc => tc.classList.remove("active"));

      btn.classList.add("active");
      const activeContent = document.getElementById(`tab-${targetTab}`);
      if (activeContent) {
        activeContent.classList.add("active");
      }
    });
  });
});
</script>

<!-- ============================================================
     MISSION, VISION & CORE VALUES SCOPED STYLES
     ============================================================ -->
<style>
/* Section Shell (Light Enterprise Background) */
.mission-vision-section {
  position: relative;
  padding: 90px 0 100px 0;
  background-color: #F8FAFC;
  overflow: hidden;
}

/* Top Centered Floating Tab Bar */
.mission-tabs-header {
  display: flex;
  justify-content: center;
  align-items: center;
  max-width: 580px;
  margin: 0 auto -24px auto;
  position: relative;
  z-index: 10;
  background: #FFFFFF;
  border-radius: 14px;
  padding: 6px;
  box-shadow: 0 12px 32px rgba(0, 43, 128, 0.1);
  border: 1px solid #E2E8F0;
}

.mission-tab-btn {
  flex: 1;
  height: 48px;
  border-radius: 10px;
  border: none;
  background: transparent;
  font-family: 'Poppins', sans-serif;
  font-size: 13.5px;
  font-weight: 800;
  color: #0F172A;
  letter-spacing: 0.8px;
  cursor: pointer;
  transition: all 250ms ease;
}

.mission-tab-btn:hover {
  color: #0055FF;
  background: rgba(0, 85, 255, 0.04);
}

.mission-tab-btn.active {
  background: linear-gradient(135deg, #0055FF 0%, #6A1BFF 100%);
  color: #FFFFFF;
  box-shadow: 0 6px 18px rgba(0, 85, 255, 0.35);
}

/* Main Outer Glass Card */
.mission-card-outer {
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  border-radius: 28px;
  padding: 70px 60px 60px 60px;
  max-width: 1440px;
  margin: 0 auto;
  box-shadow: 0 20px 48px rgba(0, 43, 128, 0.06);
  position: relative;
  z-index: 5;
}

.mission-tab-content {
  display: none;
}

.mission-tab-content.active {
  display: block;
}

.mission-grid {
  display: grid;
  grid-template-columns: 54% calc(46% - 40px);
  gap: 40px;
  align-items: center;
}

.mission-text-side {
  text-align: left;
}

.mission-title {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(30px, 3vw, 44px);
  font-weight: 800;
  line-height: 1.2;
  color: #0F172A;
  margin-bottom: 20px;
  letter-spacing: -0.02em;
}

.mission-desc {
  font-size: 16.5px;
  line-height: 1.65;
  color: #64748B;
  margin-bottom: 32px;
  max-width: 600px;
}

/* Bullet Items */
.mission-bullets-list {
  display: flex;
  flex-direction: column;
  gap: 16px;
  list-style: none;
  padding: 0;
  margin: 0;
}

.mission-bullets-list li {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 15.5px;
  font-weight: 700;
  color: #1E293B;
}

.bullet-check {
  color: #6A1BFF;
  font-size: 1.2rem;
  display: flex;
  align-items: center;
}

/* Right Media Side */
.mission-media-side {
  width: 100%;
}

.mission-img-wrap {
  width: 100%;
  display: flex;
  justify-content: center;
}

.mission-iso-img {
  width: 100%;
  max-width: 500px;
  height: auto;
  display: block;
  filter: drop-shadow(0 16px 36px rgba(0, 43, 128, 0.08));
}

/* Responsive */
@media (max-width: 1199px) {
  .mission-grid {
    grid-template-columns: 1fr;
    gap: 40px;
  }

  .mission-card-outer {
    padding: 60px 32px 40px 32px;
  }
}

@media (max-width: 767px) {
  .mission-vision-section {
    padding: 60px 0;
  }

  .mission-tabs-header {
    flex-direction: column;
    margin-bottom: 20px;
  }

  .mission-tab-btn {
    width: 100%;
  }

  .mission-card-outer {
    padding: 32px 20px;
  }

  .mission-title {
    font-size: 28px;
  }
}
</style>
