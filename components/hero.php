<!-- Hero Section -->
<section id="hero" class="hero-section">
  <!-- Background Video -->
  <div class="hero-video-container">
    <video autoplay loop muted playsinline class="hero-bg-video">
      <source src="assets/video/hero.mp4" type="video/mp4">
    </video>
    <div class="hero-video-overlay"></div>
  </div>

  <!-- Glowing background elements -->
  <div class="hero-glow purple"></div>
  <div class="hero-glow blue"></div>

  <div class="container hero-container">
    <div class="hero-content">
      <span class="hero-badge">
        <i class="fa-solid fa-circle-check"></i> Australian Enterprise Technology Partner
      </span>
      <h1 class="hero-headline">
        Engineering Digital Solutions <br>
        <span class="gradient-text">That Drive Business Growth</span>
      </h1>
      <p class="hero-support">
        Helping Australian businesses accelerate digital transformation through AI, Cloud, Software Engineering, IoT, Data Platforms, and Enterprise Solutions.
      </p>
      
      <div class="hero-buttons">
        <a href="#contact" class="btn btn-primary ripple-btn">Book Free Consultation <i class="fa-solid fa-calendar-check"></i></a>
        <a href="#solutions" class="btn btn-secondary">Explore Services <i class="fa-solid fa-arrow-down"></i></a>
      </div>

      </div>
  </div>
</section>

<!-- CSS specifically for Hero component structure -->
<style>
.hero-section {
  position: relative;
  min-height: calc(100vh - 88px);
  margin-top: 88px; /* Start exactly below the white navbar */
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: var(--light-bg);
  overflow: hidden;
  padding: 60px 0;
  box-sizing: border-box;
}

/* Background Video Elements */
.hero-video-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  overflow: hidden;
}

.hero-bg-video {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hero-video-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, rgba(106, 27, 255, 0.48) 0%, rgba(8, 22, 61, 0.72) 100%);
  z-index: 2;
}

/* Background Gradients */
.hero-glow {
  position: absolute;
  width: 480px;
  height: 480px;
  border-radius: 50%;
  filter: blur(140px);
  opacity: 0.12;
  pointer-events: none;
  z-index: 3;
}

.hero-glow.purple {
  top: -10%;
  right: 15%;
  background-color: var(--primary-purple);
}

.hero-glow.blue {
  bottom: -10%;
  left: 15%;
  background-color: var(--primary-blue);
}

.hero-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center; /* Centered layout */
  max-width: 960px;
  margin: 0 auto;
  position: relative;
  z-index: 4;
  width: 100%;
}

.hero-content {
  width: 100%;
}

/* Badge */
.hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 8px 16px;
  background-color: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.15);
  box-shadow: var(--shadow-sm);
  border-radius: 100px;
  font-size: 0.8125rem;
  font-weight: 600;
  color: var(--white);
  margin-bottom: 24px;
}

.hero-badge i {
  color: #a275ff;
}

/* Title & Support Text */
.hero-headline {
  font-size: clamp(38px, 4.5vw, 68px); /* Fluid headline typography */
  font-weight: 700;
  line-height: 1.15;
  margin-bottom: clamp(12px, 2vh, 18px);
  letter-spacing: -0.02em;
  max-width: 860px;
  margin-left: auto;
  margin-right: auto;
  color: var(--white);
}

.gradient-text {
  background: linear-gradient(135deg, #a275ff 0%, #38bdf8 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  display: inline-block;
}

.hero-support {
  font-size: clamp(15px, 1.3vw, 20px); /* Fluid support text typography */
  line-height: 1.65;
  color: rgba(255, 255, 255, 0.75);
  margin-bottom: clamp(24px, 4vh, 40px);
  max-width: 680px;
  margin-left: auto;
  margin-right: auto;
}

/* Buttons and Trust indicators */
.hero-buttons {
  display: flex;
  justify-content: center;
  gap: 20px;
  margin-bottom: 48px;
}

.hero-buttons .btn-secondary {
  background-color: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.2);
  color: var(--white);
  backdrop-filter: blur(8px);
}

.hero-buttons .btn-secondary:hover {
  background-color: rgba(255, 255, 255, 0.15);
  border-color: rgba(255, 255, 255, 0.45);
  color: var(--white);
}



/* Responsive adjustments */
@media (max-height: 800px) and (min-width: 992px) {
  .hero-section {
    padding: 40px 0;
  }
  .hero-support {
    margin-bottom: 24px;
  }
  .hero-buttons {
    margin-bottom: 32px;
  }
}

@media (max-width: 767px) {
  .hero-section {
    padding: 40px 0;
    min-height: auto;
  }

  .hero-buttons {
    flex-direction: column; /* Buttons stacked on mobile */
    gap: 12px;
    width: 100%;
  }

  .hero-buttons .btn {
    width: 100%;
  }

  }
</style>
