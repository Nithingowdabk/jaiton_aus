<!-- Floating Premium CTA Banner (Pre-Footer Element) -->
<section class="footer-cta-wrapper" aria-label="Call to Action">
  <div class="container">
    <div class="footer-cta-card glass-cta" data-aos="zoom-in">
      
      <!-- Background Ambient Glow -->
      <div class="cta-card-glow" aria-hidden="true"></div>

      <!-- Left Text Content -->
      <div class="cta-card-text">
        <span class="cta-badge">ENGINEERING EXCELLENCE</span>
        <h2 class="cta-card-title">Ready to Engineer Your Next Digital Product?</h2>
        <p class="cta-card-desc">
          Talk with our engineering team about your next AI, Cloud, Web, Mobile, or Enterprise Software project.
        </p>
        <div class="cta-card-actions">
          <a href="#contact" class="btn-cta-primary">Book Strategy Session <i class="fa-solid fa-calendar-check"></i></a>
          <a href="#contact" class="btn-cta-secondary">Estimate Project <i class="fa-solid fa-calculator"></i></a>
        </div>
      </div>

      <!-- Right Visual Diagram / Node Topology -->
      <div class="cta-card-visual" aria-hidden="true">
        <svg viewBox="0 0 300 200" class="cta-node-svg">
          <defs>
            <linearGradient id="ctaNodeGrad" x1="0%" y1="0%" x2="100%" y2="100%">
              <stop offset="0%" stop-color="#6D28FF"/>
              <stop offset="100%" stop-color="#3B82F6"/>
            </linearGradient>
          </defs>
          <!-- Connection Paths -->
          <path d="M 50,100 Q 150,30 250,100" fill="none" stroke="url(#ctaNodeGrad)" stroke-width="2" stroke-dasharray="4 4" class="node-dash-flow"/>
          <path d="M 50,100 Q 150,170 250,100" fill="none" stroke="url(#ctaNodeGrad)" stroke-width="2" stroke-dasharray="4 4" class="node-dash-flow"/>
          <path d="M 150,30 L 150,170" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="1.5"/>

          <!-- Nodes -->
          <circle cx="50" cy="100" r="10" fill="#6D28FF" class="node-pulse"/>
          <circle cx="150" cy="30" r="8" fill="#3B82F6" class="node-pulse"/>
          <circle cx="150" cy="170" r="8" fill="#10B981" class="node-pulse"/>
          <circle cx="250" cy="100" r="12" fill="#6D28FF" class="node-pulse"/>
          
          <!-- Node Labels -->
          <text x="50" y="125" text-anchor="middle" fill="#94A3B8" font-size="10" font-weight="700">Sydney</text>
          <text x="150" y="18" text-anchor="middle" fill="#94A3B8" font-size="10" font-weight="700">AI / Cloud</text>
          <text x="150" y="190" text-anchor="middle" fill="#94A3B8" font-size="10" font-weight="700">DevOps</text>
          <text x="250" y="127" text-anchor="middle" fill="#94A3B8" font-size="10" font-weight="700">Enterprise</text>
        </svg>
      </div>

    </div>
  </div>
</section>

<!-- Floating CTA Banner Styles -->
<style>
.footer-cta-wrapper {
  position: relative;
  z-index: 20;
  margin-bottom: -70px;
}

.footer-cta-card {
  position: relative;
  background: rgba(15, 30, 66, 0.9);
  backdrop-filter: blur(24px);
  -webkit-backdrop-filter: blur(24px);
  border: 1px solid rgba(255, 255, 255, 0.14);
  border-radius: 32px;
  padding: 48px 56px;
  display: grid;
  grid-template-columns: 60% 40%;
  gap: 40px;
  align-items: center;
  box-shadow: 0 32px 80px rgba(0, 0, 0, 0.45);
  overflow: hidden;
}

.cta-card-glow {
  position: absolute;
  top: -50%;
  left: -20%;
  width: 500px;
  height: 500px;
  background: #6D28FF;
  filter: blur(200px);
  opacity: 0.2;
  pointer-events: none;
}

.cta-badge {
  display: inline-block;
  padding: 4px 14px;
  background: rgba(109, 40, 255, 0.2);
  border: 1px solid rgba(109, 40, 255, 0.4);
  border-radius: 100px;
  font-size: 11px;
  font-weight: 800;
  color: #A275FF;
  letter-spacing: 1.5px;
  margin-bottom: 14px;
}

.cta-card-title {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(28px, 2.8vw, 38px);
  font-weight: 800;
  color: #FFFFFF;
  line-height: 1.2;
  margin-bottom: 12px;
  letter-spacing: -0.02em;
}

.cta-card-desc {
  font-size: 16px;
  line-height: 1.6;
  color: #94A3B8;
  margin-bottom: 28px;
}

.cta-card-actions {
  display: flex;
  gap: 16px;
  flex-wrap: wrap;
}

.btn-cta-primary {
  height: 48px;
  padding: 0 28px;
  border-radius: 100px;
  background: linear-gradient(135deg, #6D28FF, #3B82F6);
  color: #FFFFFF;
  font-size: 14px;
  font-weight: 700;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  box-shadow: 0 8px 24px rgba(109, 40, 255, 0.35);
  transition: all 250ms ease;
  border: none;
}

.btn-cta-primary:hover {
  box-shadow: 0 12px 32px rgba(109, 40, 255, 0.55);
  transform: translateY(-2px);
  color: #FFFFFF;
}

.btn-cta-secondary {
  height: 48px;
  padding: 0 28px;
  border-radius: 100px;
  background: rgba(255, 255, 255, 0.08);
  border: 1.5px solid rgba(255, 255, 255, 0.2);
  color: #FFFFFF;
  font-size: 14px;
  font-weight: 700;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: all 250ms ease;
}

.btn-cta-secondary:hover {
  background: rgba(255, 255, 255, 0.15);
  border-color: #3B82F6;
  color: #FFFFFF;
  transform: translateY(-2px);
}

.cta-node-svg {
  width: 100%;
  height: auto;
  display: block;
}

.node-dash-flow {
  animation: nodeFlow 15s linear infinite;
}

@keyframes nodeFlow {
  to { stroke-dashoffset: -100; }
}

.node-pulse {
  animation: nPulse 3s infinite ease-in-out;
}

@keyframes nPulse {
  0%, 100% { transform: scale(1); opacity: 0.9; }
  50% { transform: scale(1.15); opacity: 1; }
}

@media (max-width: 991px) {
  .footer-cta-card {
    grid-template-columns: 1fr;
    padding: 36px 28px;
    gap: 24px;
  }
  .cta-card-visual {
    display: none;
  }
}
</style>
