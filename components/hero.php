<!-- ============================================================
     HERO SECTION – Full-Bleed Video Background Layout
     ============================================================ -->
<section id="hero" class="hero-section">
  
  <!-- Hero Background Video Layer with Semi-Transparent Overlay -->
  <div class="hero-bg-video-wrapper" aria-hidden="true">
    <video class="hero-bg-video" autoplay loop muted playsinline preload="auto" disablePictureInPicture disableRemotePlayback>
      <source src="assets/video/hero.mp4" type="video/mp4">
    </video>
    <div class="hero-bg-overlay"></div>
  </div>

  <!-- Hero Container -->
  <div class="container hero-container">
    <div class="hero-left-content" data-aos="fade-right" data-aos-duration="700">
      
      <h1 class="hero-title">
        Get More Insight With Effective 
        <span class="highlight-wrapper">
          Software & AI
          <svg class="wavy-underline" viewBox="0 0 240 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 12C50 3 100 18 150 8C180 2 210 15 237 9" stroke="url(#wavyGrad)" stroke-width="4.5" stroke-linecap="round"/>
            <defs>
              <linearGradient id="wavyGrad" x1="0" y1="0" x2="240" y2="0" gradientUnits="userSpaceOnUse">
                <stop stop-color="#A855F7"/>
                <stop offset="1" stop-color="#38BDF8"/>
              </linearGradient>
            </defs>
          </svg>
        </span>
      </h1>

      <p class="hero-subtitle">
        High-performance enterprise software, AI models, and cloud platforms engineered for Australian businesses and global scale.
      </p>

      <!-- Checklist Items -->
      <div class="hero-checklist">
        <div class="check-item">
          <span class="check-icon"><i class="fa-solid fa-circle-check"></i></span>
          <span>100% Australian-based onshore strategy team</span>
        </div>
        <div class="check-item">
          <span class="check-icon"><i class="fa-solid fa-circle-check"></i></span>
          <span>ISO aligned security & cloud architecture</span>
        </div>
        <div class="check-item">
          <span class="check-icon"><i class="fa-solid fa-circle-check"></i></span>
          <span>Flexible engineering squads tailored to your roadmap</span>
        </div>
      </div>

      <!-- Action Buttons -->
      <div class="hero-action-buttons">
        <a href="#contact" class="btn btn-hero-gradient">
          Get Started <i class="fa-solid fa-arrow-right"></i>
        </a>
        <a href="#services" class="btn btn-hero-outline">
          Learn More
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ============================================================
     HERO SCOPED STYLES (Full-Bleed Video Background Theme)
     ============================================================ -->
<style>
/* ── Hero Section Shell ── */
.hero-section {
  position: relative;
  min-height: calc(100vh - 88px);
  display: flex;
  align-items: center;
  background: #0B1120;
  padding-top: 140px;
  padding-bottom: 90px;
  box-sizing: border-box;
  overflow: hidden;
}

/* ── Full-Bleed Video Background ── */
.hero-bg-video-wrapper {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  z-index: 1;
  pointer-events: none;
}

.hero-bg-video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  transform: translate(-50%, -50%);
  object-fit: cover;
  opacity: 0.85;
}

.hero-bg-overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(11, 17, 32, 0.82) 0%, rgba(15, 23, 42, 0.60) 50%, rgba(11, 17, 32, 0.85) 100%);
  backdrop-filter: blur(2px);
  z-index: 2;
}

/* ── Hero Container ── */
.hero-container {
  max-width: 1440px;
  width: 100%;
  padding-left: 40px;
  padding-right: 40px;
  margin: 0 auto;
  position: relative;
  z-index: 5;
}

/* ── Content Area ── */
.hero-left-content {
  text-align: left;
  max-width: 780px;
}

.hero-title {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(40px, 4.5vw, 62px);
  font-weight: 800;
  line-height: 1.12;
  color: #FFFFFF;
  letter-spacing: -0.02em;
  margin-bottom: 24px;
}

.highlight-wrapper {
  position: relative;
  display: inline-block;
  background: linear-gradient(135deg, #C084FC 0%, #38BDF8 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.wavy-underline {
  position: absolute;
  bottom: -10px;
  left: 0;
  width: 100%;
  height: 18px;
  pointer-events: none;
}

.hero-subtitle {
  font-size: clamp(17px, 1.3vw, 20px);
  line-height: 1.65;
  color: #CBD5E1;
  max-width: 640px;
  margin-bottom: 32px;
}

/* Checklist Items */
.hero-checklist {
  display: flex;
  flex-direction: column;
  gap: 14px;
  margin-bottom: 40px;
}

.check-item {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 16px;
  font-weight: 600;
  color: #F1F5F9;
}

.check-icon {
  color: #38BDF8;
  font-size: 1.2rem;
  display: flex;
  align-items: center;
}

/* Action Buttons */
.hero-action-buttons {
  display: flex;
  gap: 18px;
  align-items: center;
}

.btn-hero-gradient {
  height: 54px;
  padding: 0 36px;
  border-radius: 100px;
  background: linear-gradient(135deg, #7C3AED 0%, #2563EB 100%);
  color: #FFFFFF;
  font-size: 16px;
  font-weight: 700;
  display: inline-flex;
  align-items: center;
  gap: 10px;
  border: none;
  box-shadow: 0 8px 25px rgba(37, 99, 235, 0.4);
  transition: all 250ms ease;
  text-decoration: none;
}

.btn-hero-gradient:hover {
  box-shadow: 0 12px 32px rgba(124, 58, 237, 0.6);
  transform: translateY(-2px);
  color: #FFFFFF;
}

.btn-hero-outline {
  height: 54px;
  padding: 0 36px;
  border-radius: 100px;
  background: rgba(255, 255, 255, 0.08);
  border: 1.5px solid rgba(255, 255, 255, 0.25);
  color: #FFFFFF;
  font-size: 16px;
  font-weight: 700;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transition: all 250ms ease;
  text-decoration: none;
  backdrop-filter: blur(8px);
}

.btn-hero-outline:hover {
  border-color: #38BDF8;
  color: #38BDF8;
  background: rgba(56, 189, 248, 0.12);
  transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 1199px) {
  .hero-left-content {
    max-width: 100%;
  }

  .hero-title {
    font-size: 44px;
  }
}

@media (max-width: 767px) {
  .hero-section {
    padding-top: 120px;
    padding-bottom: 60px;
  }

  .hero-container {
    padding-left: 20px;
    padding-right: 20px;
  }

  .hero-action-buttons {
    flex-direction: column;
    width: 100%;
  }

  .btn-hero-gradient,
  .btn-hero-outline {
    width: 100%;
  }
}
</style>

<script>
// Force video autoplay — handles all browser restrictions
document.addEventListener('DOMContentLoaded', function() {
  var heroVideo = document.querySelector('.hero-bg-video');
  if (heroVideo) {
    // Set attributes programmatically
    heroVideo.muted = true;
    heroVideo.playsInline = true;
    heroVideo.autoplay = true;
    
    // Attempt play with promise handling
    var playPromise = heroVideo.play();
    if (playPromise !== undefined) {
      playPromise.catch(function(error) {
        // Retry on user interaction as last resort
        console.log('Video autoplay blocked, retrying...');
        heroVideo.muted = true;
        setTimeout(function() { heroVideo.play(); }, 500);
      });
    }
    
    // Also retry on first user interaction
    document.addEventListener('click', function tryPlay() {
      heroVideo.play();
      document.removeEventListener('click', tryPlay);
    }, { once: true });
    
    document.addEventListener('scroll', function tryPlayScroll() {
      heroVideo.play();
      document.removeEventListener('scroll', tryPlayScroll);
    }, { once: true });
  }
});
</script>