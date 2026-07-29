<!-- Insights & Blog Editorial Section -->
<section id="insights" class="insights-section">
  <div class="container">
    
    <!-- Section Header -->
    <div class="section-header" data-aos="fade-up">
      <span class="section-badge">Insights</span>
      <h2 class="section-title">Enterprise Thinking & Research</h2>
      <p class="section-desc">
        Explore our research whitepapers and strategic technology updates for corporate decision makers.
      </p>
    </div>

    <!-- Editorial Layout Grid -->
    <div class="insights-grid" data-aos="fade-up" data-aos-delay="100">
      
      <!-- Left Column: Large Featured Article -->
      <div class="featured-insight-card glass-panel hover-lift">
        <div class="insight-image-wrapper">
          <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=800&q=80" alt="Cybersecurity hardware server visual" class="insight-img">
        </div>
        <div class="insight-content">
          <div class="insight-meta">
            <span class="insight-category text-purple">Technology Strategy</span>
            <span class="insight-divider">&bull;</span>
            <span class="insight-time">8 min read</span>
          </div>
          <h3 class="insight-title"><a href="#contact">The Future of AI Integration in Australian Enterprise Software</a></h3>
          <p class="insight-summary">
            An in-depth analysis of how regional guidelines, local compliance schemas, and low-latency machine learning models shape modern software development for ASX-listed corporations.
          </p>
          <div class="insight-author">
            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=100&q=80" alt="Marcus Vance CEO" class="author-avatar-img">
            <div>
              <strong>Marcus Vance</strong>
              <span>Chief Executive Officer</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Three Secondary Articles -->
      <div class="secondary-insights-list">
        
        <!-- Article 1 -->
        <div class="secondary-insight-item hover-lift">
          <div class="secondary-img-wrapper">
            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=400&q=80" alt="Cloud visualization" class="insight-img">
          </div>
          <div class="secondary-content">
            <div class="insight-meta">
              <span class="insight-category text-blue">Cloud Engineering</span>
              <span class="insight-divider">&bull;</span>
              <span class="insight-time">5 min read</span>
            </div>
            <h4><a href="#contact">Scaling Multi-Region Microservices: A Telemetry Case Study</a></h4>
            <div class="insight-author-meta">By <strong>Lachlan Mitchell</strong></div>
          </div>
        </div>

        <!-- Article 2 -->
        <div class="secondary-insight-item hover-lift">
          <div class="secondary-img-wrapper">
            <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=400&q=80" alt="Cybersecurity lock visual" class="insight-img">
          </div>
          <div class="secondary-content">
            <div class="insight-meta">
              <span class="insight-category text-green">Cybersecurity</span>
              <span class="insight-divider">&bull;</span>
              <span class="insight-time">6 min read</span>
            </div>
            <h4><a href="#contact">Securing Financial Portals: ISO 27001 Preparedness Guidelines</a></h4>
            <div class="insight-author-meta">By <strong>Sarah Jenkins</strong></div>
          </div>
        </div>

        <!-- Article 3 -->
        <div class="secondary-insight-item hover-lift">
          <div class="secondary-img-wrapper">
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=400&q=80" alt="Microchip telemetry visual" class="insight-img">
          </div>
          <div class="secondary-content">
            <div class="insight-meta">
              <span class="insight-category text-blue">IoT Engineering</span>
              <span class="insight-divider">&bull;</span>
              <span class="insight-time">4 min read</span>
            </div>
            <h4><a href="#contact">Leveraging Telemetry in Extreme Industrial Sites</a></h4>
            <div class="insight-author-meta">By <strong>Dr. Alan Cooper</strong></div>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

<!-- CSS specifically for Insights Blog -->
<style>
.insights-section {
  padding: 120px 0;
  background-color: var(--light-bg);
  position: relative;
  overflow: hidden;
}

.insights-grid {
  display: grid;
  grid-template-cols: 1.1fr 0.9fr;
  gap: 48px;
  margin-top: 64px;
}

/* Featured Large card */
.featured-insight-card {
  background-color: var(--white);
  border-radius: var(--radius-lg);
  overflow: hidden;
  border: 1px solid var(--border-color);
  box-shadow: var(--shadow-sm);
  display: flex;
  flex-direction: column;
}

.insight-image-wrapper {
  width: 100%;
  aspect-ratio: 1.8;
  overflow: hidden;
}

.insight-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-slow);
}

.featured-insight-card:hover .insight-img,
.secondary-insight-item:hover .insight-img {
  transform: scale(1.04);
}

.insight-content {
  padding: 40px;
  text-align: left;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
}

.insight-meta {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 0.75rem;
  font-weight: 700;
  margin-bottom: 16px;
}

.insight-category {
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.insight-category.text-purple { color: var(--primary-purple); }
.insight-category.text-blue { color: var(--electric-blue); }
.insight-category.text-green { color: #10B981; }

.insight-divider {
  color: var(--muted-text);
}

.insight-time {
  color: var(--muted-text);
}

.insight-title {
  font-size: clamp(20px, 1.8vw, 26px);
  font-weight: 800;
  line-height: 1.3;
  margin-bottom: 12px;
  color: var(--dark-navy);
}

.insight-title a:hover {
  color: var(--primary-purple);
}

.insight-summary {
  font-size: 0.95rem;
  line-height: 1.6;
  color: var(--secondary-text);
  margin-bottom: 32px;
  flex-grow: 1;
}

/* Author block */
.insight-author {
  display: flex;
  align-items: center;
  gap: 16px;
  border-top: 1px solid var(--border-color);
  padding-top: 24px;
}

.author-avatar-img {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  object-fit: cover;
  border: 2px solid rgba(109, 40, 255, 0.1);
}

.insight-author strong {
  display: block;
  font-size: 0.875rem;
  color: var(--dark-navy);
}

.insight-author span {
  font-size: 0.75rem;
  color: var(--muted-text);
}

/* Secondary list */
.secondary-insights-list {
  display: flex;
  flex-direction: column;
  gap: 24px;
}

.secondary-insight-item {
  display: grid;
  grid-template-cols: 0.35fr 0.65fr;
  gap: 20px;
  background-color: var(--white);
  border-radius: 16px;
  border: 1px solid var(--border-color);
  padding: 16px;
  box-shadow: var(--shadow-sm);
  align-items: center;
}

.secondary-img-wrapper {
  width: 100%;
  aspect-ratio: 1.25;
  border-radius: 10px;
  overflow: hidden;
}

.secondary-content {
  text-align: left;
}

.secondary-content h4 {
  font-size: clamp(14px, 1.1vw, 16px);
  font-weight: 800;
  color: var(--dark-navy);
  line-height: 1.4;
  margin-bottom: 8px;
}

.secondary-content h4 a:hover {
  color: var(--primary-purple);
}

.insight-author-meta {
  font-size: 0.75rem;
  color: var(--muted-text);
}

.insight-author-meta strong {
  color: var(--secondary-text);
}

/* Responsive adjustments */
@media (max-width: 991px) {
  .insights-grid {
    grid-template-cols: 1fr;
    gap: 40px;
  }
}

@media (max-width: 767px) {
  .insights-section {
    padding: 80px 0;
  }
  .insight-content {
    padding: 24px;
  }
  .secondary-insight-item {
    grid-template-cols: 1fr;
    gap: 16px;
  }
  .secondary-img-wrapper {
    aspect-ratio: 2;
  }
}
</style>
