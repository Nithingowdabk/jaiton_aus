<!-- ============================================================
     WHY JAITON SECTION – Six Interactive Enterprise Feature Cards
     ============================================================ -->
<section id="why-jaiton" class="why-jaiton-section">
  
  <!-- Subtle Background Glows & Grid -->
  <div class="why-bg-layers" aria-hidden="true">
    <div class="why-bg-grid"></div>
    <div class="why-radial-glow why-radial-glow--purple"></div>
    <div class="why-radial-glow why-radial-glow--blue"></div>
  </div>

  <div class="container">
    
    <!-- Section Title Header -->
    <div class="why-section-header" data-aos="fade-up">
      <span class="why-badge">Why Jaiton</span>
      <h2 class="why-section-title">
        Redefining Technology Partnerships <br>
        for <span class="gradient-text">Complex Enterprises</span>
      </h2>
    </div>

    <!-- 6 Interactive Feature Cards Grid (3 columns x 2 rows on Desktop) -->
    <div class="why-feature-grid">
      
      <!-- CARD 1: Enterprise Security -->
      <div class="why-feature-card" data-aos="fade-up" data-aos-delay="0">
        <div class="card-gradient-border"></div>
        <div class="card-inner-glow"></div>
        
        <!-- Top Graphic: Glowing Security Shield & Network -->
        <div class="card-graphic-area">
          <svg viewBox="0 0 280 120" class="card-svg card-svg--security" aria-hidden="true">
            <defs>
              <linearGradient id="shieldGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#10B981" stop-opacity="0.3"/>
                <stop offset="100%" stop-color="#8961F9" stop-opacity="0.1"/>
              </linearGradient>
            </defs>
            
            <!-- Encrypted Network Lines -->
            <g stroke="rgba(16,185,129,0.25)" stroke-width="1.5" stroke-dasharray="4 4" class="network-lines">
              <line x1="30" y1="60" x2="110" y2="60"/>
              <line x1="170" y1="60" x2="250" y2="60"/>
              <line x1="140" y1="15" x2="140" y2="40"/>
              <line x1="140" y1="80" x2="140" y2="105"/>
            </g>
            
            <!-- Glowing Network Nodes -->
            <circle cx="30" cy="60" r="4" fill="#10B981" class="node-pulse"/>
            <circle cx="250" cy="60" r="4" fill="#8961F9" class="node-pulse"/>
            <circle cx="140" cy="15" r="4" fill="#6A02C5" class="node-pulse"/>
            <circle cx="140" cy="105" r="4" fill="#10B981" class="node-pulse"/>

            <!-- Center Security Shield -->
            <path d="M140,25 C165,25 185,32 185,32 C185,32 185,75 140,100 C95,75 95,32 95,32 C95,32 115,25 140,25 Z" fill="url(#shieldGrad)" stroke="#10B981" stroke-width="2" class="shield-pulse-path"/>
            <path d="M132,60 L138,66 L150,52" fill="none" stroke="#10B981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>

        <!-- Middle: Title -->
        <h3 class="card-title">Enterprise Security</h3>

        <!-- Bottom: Description -->
        <p class="card-desc">End-to-end security architecture and compliance systems designed for complex enterprise platforms.</p>

        <!-- Bottom Right: Arrow -->
        <div class="card-cta">
          <i class="fa-solid fa-arrow-right-long card-arrow"></i>
        </div>
      </div>

      <!-- CARD 2: AI Powered Engineering -->
      <div class="why-feature-card" data-aos="fade-up" data-aos-delay="100">
        <div class="card-gradient-border"></div>
        <div class="card-inner-glow"></div>

        <!-- Top Graphic: Neural Network -->
        <div class="card-graphic-area">
          <svg viewBox="0 0 280 120" class="card-svg card-svg--ai" aria-hidden="true">
            <!-- Neural Connection Lines -->
            <g stroke="rgba(106, 2, 197,0.3)" stroke-width="1.5" class="ai-connections">
              <line x1="50" y1="40" x2="110" y2="25"/>
              <line x1="50" y1="40" x2="110" y2="60"/>
              <line x1="50" y1="40" x2="110" y2="95"/>
              <line x1="50" y1="80" x2="110" y2="60"/>
              <line x1="50" y1="80" x2="110" y2="95"/>
              <line x1="110" y1="25" x2="170" y2="40"/>
              <line x1="110" y1="60" x2="170" y2="40"/>
              <line x1="110" y1="60" x2="170" y2="80"/>
              <line x1="110" y1="95" x2="170" y2="80"/>
              <line x1="170" y1="40" x2="230" y2="60"/>
              <line x1="170" y1="80" x2="230" y2="60"/>
            </g>

            <!-- Active Neural Nodes -->
            <circle cx="50" cy="40" r="5" fill="#6A02C5" class="ai-node"/>
            <circle cx="50" cy="80" r="5" fill="#8961F9" class="ai-node"/>
            <circle cx="110" cy="25" r="5" fill="#a275ff" class="ai-node"/>
            <circle cx="110" cy="60" r="6" fill="#6A02C5" class="ai-node-main"/>
            <circle cx="110" cy="95" r="5" fill="#8961F9" class="ai-node"/>
            <circle cx="170" cy="40" r="5" fill="#6A02C5" class="ai-node"/>
            <circle cx="170" cy="80" r="5" fill="#a275ff" class="ai-node"/>
            <circle cx="230" cy="60" r="7" fill="#6A02C5" class="ai-node-out"/>
          </svg>
        </div>

        <h3 class="card-title">AI Powered Engineering</h3>
        <p class="card-desc">Autonomous AI agents and intelligent machine learning models integrated into core enterprise software.</p>
        
        <div class="card-cta">
          <i class="fa-solid fa-arrow-right-long card-arrow"></i>
        </div>
      </div>

      <!-- CARD 3: Cloud Infrastructure -->
      <div class="why-feature-card" data-aos="fade-up" data-aos-delay="200">
        <div class="card-gradient-border"></div>
        <div class="card-inner-glow"></div>

        <!-- Top Graphic: Cloud -> Server -> Database Data Packets -->
        <div class="card-graphic-area">
          <svg viewBox="0 0 280 120" class="card-svg card-svg--cloud" aria-hidden="true">
            <!-- Cloud Icon Box -->
            <rect x="30" y="35" width="60" height="48" rx="10" fill="rgba(137, 97, 249,0.1)" stroke="#8961F9" stroke-width="1.5"/>
            <path d="M50,62 C45,62 42,57 45,52 C47,48 53,47 56,50 C58,45 66,45 68,50 C72,50 74,54 72,58 C74,62 70,62 67,62 Z" fill="none" stroke="#8961F9" stroke-width="1.5"/>

            <!-- Server Box -->
            <rect x="110" y="35" width="60" height="48" rx="10" fill="rgba(106, 2, 197,0.1)" stroke="#6A02C5" stroke-width="1.5"/>
            <line x1="120" y1="50" x2="160" y2="50" stroke="#6A02C5" stroke-width="1.5"/>
            <line x1="120" y1="60" x2="160" y2="60" stroke="#6A02C5" stroke-width="1.5"/>
            <circle cx="155" cy="50" r="1.5" fill="#10B981"/>
            <circle cx="155" cy="60" r="1.5" fill="#10B981"/>

            <!-- Database Cylinder Box -->
            <rect x="190" y="35" width="60" height="48" rx="10" fill="rgba(16,185,129,0.1)" stroke="#10B981" stroke-width="1.5"/>
            <ellipse cx="220" cy="48" rx="16" ry="5" fill="none" stroke="#10B981" stroke-width="1.5"/>
            <ellipse cx="220" cy="58" rx="16" ry="5" fill="none" stroke="#10B981" stroke-width="1.5"/>
            <ellipse cx="220" cy="68" rx="16" ry="5" fill="none" stroke="#10B981" stroke-width="1.5"/>

            <!-- Flow Connector Lines -->
            <line x1="90" y1="59" x2="110" y2="59" stroke="rgba(15,23,42,0.18)" stroke-width="1.5" stroke-dasharray="3 3"/>
            <line x1="170" y1="59" x2="190" y2="59" stroke="rgba(15,23,42,0.18)" stroke-width="1.5" stroke-dasharray="3 3"/>

            <!-- Data Packets travelling -->
            <circle cx="90" cy="59" r="2.5" fill="#8961F9" class="cloud-packet-1"/>
            <circle cx="170" cy="59" r="2.5" fill="#6A02C5" class="cloud-packet-2"/>
          </svg>
        </div>

        <h3 class="card-title">Cloud Infrastructure</h3>
        <p class="card-desc">High-availability multi-cloud architecture engineered for 99.99% uptime and zero-downtime deployments.</p>
        
        <div class="card-cta">
          <i class="fa-solid fa-arrow-right-long card-arrow"></i>
        </div>
      </div>

      <!-- CARD 4: Agile Delivery -->
      <div class="why-feature-card" data-aos="fade-up" data-aos-delay="300">
        <div class="card-gradient-border"></div>
        <div class="card-inner-glow"></div>

        <!-- Top Graphic: Circular Agile Workflow -->
        <div class="card-graphic-area">
          <svg viewBox="0 0 280 120" class="card-svg card-svg--agile" aria-hidden="true">
            <!-- Central Workflow Track -->
            <circle cx="140" cy="60" r="40" fill="none" stroke="rgba(15,23,42,0.08)" stroke-width="3"/>
            <circle cx="140" cy="60" r="40" fill="none" stroke="url(#agileGrad)" stroke-width="3" stroke-dasharray="180 80" class="agile-spinner"/>
            
            <defs>
              <linearGradient id="agileGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#6A02C5"/>
                <stop offset="100%" stop-color="#8961F9"/>
              </linearGradient>
            </defs>

            <!-- 5 Stages Nodes -->
            <circle cx="140" cy="20" r="4" fill="#6A02C5" class="agile-node"/>
            <circle cx="178" cy="48" r="4" fill="#8961F9" class="agile-node"/>
            <circle cx="163" cy="92" r="4" fill="#10B981" class="agile-node"/>
            <circle cx="117" cy="92" r="4" fill="#B98CFF" class="agile-node"/>
            <circle cx="102" cy="48" r="4" fill="#a275ff" class="agile-node"/>

            <text x="140" y="64" fill="#0F172A" font-size="9" font-weight="bold" text-anchor="middle">AGILE</text>
          </svg>
        </div>

        <h3 class="card-title">Agile Delivery Model</h3>
        <p class="card-desc">Continuous integration and rapid iteration frameworks delivering production-ready software every sprint.</p>
        
        <div class="card-cta">
          <i class="fa-solid fa-arrow-right-long card-arrow"></i>
        </div>
      </div>

      <!-- CARD 5: Global Delivery Team -->
      <div class="why-feature-card" data-aos="fade-up" data-aos-delay="400">
        <div class="card-gradient-border"></div>
        <div class="card-inner-glow"></div>

        <!-- Top Graphic: World Map & Pulsing Hub Pins -->
        <div class="card-graphic-area">
          <svg viewBox="0 0 280 120" class="card-svg card-svg--map" aria-hidden="true">
            <!-- Simplified Map Grid -->
            <g opacity="0.15" stroke="#cbd5e1" stroke-width="0.5">
              <line x1="30" y1="30" x2="250" y2="30"/>
              <line x1="30" y1="60" x2="250" y2="60"/>
              <line x1="30" y1="90" x2="250" y2="90"/>
              <line x1="80" y1="15" x2="80" y2="105"/>
              <line x1="140" y1="15" x2="140" y2="105"/>
              <line x1="200" y1="15" x2="200" y2="105"/>
            </g>

            <!-- Connecting Arcs -->
            <path d="M 215,85 Q 165,40 155,50" fill="none" stroke="#6A02C5" stroke-width="1.5" stroke-dasharray="3 3" class="arc-line-1"/>
            <path d="M 155,50 Q 140,65 145,75" fill="none" stroke="#8961F9" stroke-width="1.5" stroke-dasharray="3 3" class="arc-line-2"/>

            <!-- Australia Hub Pin (Sydney) -->
            <circle cx="215" cy="85" r="5" fill="#6A02C5" class="hub-pulse"/>
            <circle cx="215" cy="85" r="9" fill="none" stroke="#6A02C5" stroke-width="1" class="ring-pulse"/>
            <text x="215" y="102" fill="#a275ff" font-size="8" font-weight="bold" text-anchor="middle">AUSTRALIA HQ</text>

            <!-- India Hub Pin (Bangalore) -->
            <circle cx="155" cy="50" r="5" fill="#8961F9" class="hub-pulse"/>
            <text x="155" y="38" fill="#8961F9" font-size="8" font-weight="bold" text-anchor="middle">INDIA R&D</text>

            <!-- South Africa Hub Pin -->
            <circle cx="145" cy="75" r="4" fill="#10B981" class="hub-pulse"/>
          </svg>
        </div>

        <h3 class="card-title">Global Delivery Network</h3>
        <p class="card-desc">Cross-border engineering squads combining Australian strategic oversight with round-the-clock technical execution.</p>
        
        <div class="card-cta">
          <i class="fa-solid fa-arrow-right-long card-arrow"></i>
        </div>
      </div>

      <!-- CARD 6: Scalable Architecture -->
      <div class="why-feature-card" data-aos="fade-up" data-aos-delay="500">
        <div class="card-gradient-border"></div>
        <div class="card-inner-glow"></div>

        <!-- Top Graphic: Stacking Building Blocks -->
        <div class="card-graphic-area">
          <svg viewBox="0 0 280 120" class="card-svg card-svg--blocks" aria-hidden="true">
            <!-- Isometric Building Blocks -->
            <g class="block-stack">
              <!-- Base Block -->
              <polygon points="140,85 185,62 140,40 95,62" fill="rgba(106, 2, 197,0.15)" stroke="#6A02C5" stroke-width="1.5"/>
              <polygon points="95,62 140,85 140,97 95,74" fill="rgba(106, 2, 197,0.25)" stroke="#6A02C5" stroke-width="1.5"/>
              <polygon points="140,85 185,62 185,74 140,97" fill="rgba(106, 2, 197,0.35)" stroke="#6A02C5" stroke-width="1.5"/>

              <!-- Mid Block -->
              <g class="mid-block-float">
                <polygon points="140,65 175,47 140,30 105,47" fill="rgba(137, 97, 249,0.2)" stroke="#8961F9" stroke-width="1.5"/>
                <polygon points="105,47 140,65 140,75 105,57" fill="rgba(137, 97, 249,0.3)" stroke="#8961F9" stroke-width="1.5"/>
                <polygon points="140,65 175,47 175,57 140,75" fill="rgba(137, 97, 249,0.4)" stroke="#8961F9" stroke-width="1.5"/>
              </g>

              <!-- Top Block -->
              <g class="top-block-float">
                <polygon points="140,45 165,32 140,20 115,32" fill="rgba(16,185,129,0.3)" stroke="#10B981" stroke-width="1.5"/>
                <polygon points="115,32 140,45 140,53 115,40" fill="rgba(16,185,129,0.4)" stroke="#10B981" stroke-width="1.5"/>
                <polygon points="140,45 165,32 165,40 140,53" fill="rgba(16,185,129,0.5)" stroke="#10B981" stroke-width="1.5"/>
              </g>
            </g>
          </svg>
        </div>

        <h3 class="card-title">Scalable Architecture</h3>
        <p class="card-desc">Microservices and event-driven foundation built to scale effortlessly with enterprise growth.</p>
        
        <div class="card-cta">
          <i class="fa-solid fa-arrow-right-long card-arrow"></i>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- 3D Mouse Tilt Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".why-feature-card");

  cards.forEach(card => {
    card.addEventListener("mousemove", (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left - rect.width / 2;
      const y = e.clientY - rect.top - rect.height / 2;
      const rotateX = (-y / (rect.height / 2)) * 4; // Max 4deg tilt
      const rotateY = (x / (rect.width / 2)) * 4;   // Max 4deg tilt

      card.style.transform = `perspective(1000px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) translateY(-10px)`;
    });

    card.addEventListener("mouseleave", () => {
      card.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0px)`;
    });
  });
});
</script>

<!-- ============================================================
     WHY JAITON SCOPED STYLES (Glass Feature Cards)
     ============================================================ -->
<style>
/* ── Section Shell ── */
.why-jaiton-section {
  position: relative;
  padding: 120px 0;
  background-color: var(--light-bg);
  overflow: hidden;
}

/* ── Background Grid & Radial Glows ── */
.why-bg-layers {
  position: absolute;
  inset: 0;
  pointer-events: none;
  overflow: hidden;
  z-index: 1;
}

.why-bg-grid {
  position: absolute;
  inset: 0;
  background-size: 40px 40px;
  background-image:
    linear-gradient(to right, rgba(15,23,42,0.025) 1px, transparent 1px),
    linear-gradient(to bottom, rgba(15,23,42,0.025) 1px, transparent 1px);
}

.why-radial-glow {
  position: absolute;
  width: 600px;
  height: 600px;
  border-radius: 50%;
  filter: blur(160px);
  opacity: 0.1;
}

.why-radial-glow--purple { top: 20%; left: -10%; background: var(--primary-purple); }
.why-radial-glow--blue   { bottom: 10%; right: -10%; background: var(--electric-blue); }

/* ── Section Header ── */
.why-section-header {
  text-align: center;
  max-width: 800px;
  margin: 0 auto 64px auto;
  position: relative;
  z-index: 5;
}

.why-badge {
  display: inline-flex;
  align-items: center;
  padding: 6px 16px;
  background: rgba(106, 2, 197,0.08);
  border: 1px solid rgba(106, 2, 197,0.15);
  border-radius: 100px;
  font-size: 0.75rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  color: var(--primary-purple);
  margin-bottom: 18px;
}

.why-section-title {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(32px, 3.2vw, 44px);
  font-weight: 700;
  line-height: 1.2;
  color: var(--primary-text);
  letter-spacing: -0.02em;
}

/* ── Feature Cards Grid (3 columns x 2 rows, Max Width 1440px) ── */
.why-feature-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 32px;
  max-width: 1440px;
  width: 100%;
  margin: 0 auto;
  position: relative;
  z-index: 5;
}

/* ── Individual Feature Glass Card ── */
.why-feature-card {
  position: relative;
  background: var(--white);
  border-radius: 24px;
  padding: 36px 32px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  text-align: left;
  border: 1px solid var(--border-color);
  box-shadow: var(--shadow-md);
  transition: transform 300ms ease-out, box-shadow 300ms ease-out, background 300ms ease-out, border-color 300ms ease-out;
  cursor: pointer;
  overflow: hidden;
  box-sizing: border-box;
}

/* Animated Gradient Border (8s loop) */
.card-gradient-border {
  position: absolute;
  inset: 0;
  border-radius: 24px;
  padding: 1.5px;
  background: linear-gradient(135deg, rgba(106, 2, 197, 0.4), rgba(137, 97, 249, 0.4), rgba(106, 2, 197, 0.2));
  mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
  -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  pointer-events: none;
  opacity: 0.3;
  transition: opacity 300ms ease;
  animation: cardBorderLoop 8s linear infinite alternate;
}

@keyframes cardBorderLoop {
  0%   { filter: hue-rotate(0deg); }
  100% { filter: hue-rotate(60deg); }
}

/* Soft Inner Glow */
.card-inner-glow {
  position: absolute;
  top: -50px;
  left: -50px;
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(106, 2, 197, 0.15), transparent 70%);
  pointer-events: none;
  opacity: 0.5;
  transition: opacity 300ms ease;
}

/* Hover State */
.why-feature-card:hover {
  background: var(--surface-indigo);
  border-color: rgba(106, 2, 197, 0.3);
  box-shadow: var(--shadow-premium-hover);
}

.why-feature-card:hover .card-gradient-border {
  opacity: 1;
}

.why-feature-card:hover .card-inner-glow {
  opacity: 1;
}

/* Graphic Area (SVG) */
.card-graphic-area {
  width: 100%;
  height: 130px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 20px;
}

.card-svg {
  width: 100%;
  height: 100%;
  display: block;
}

/* Feature Title & Description */
.card-title {
  font-family: 'Poppins', sans-serif;
  font-size: 22px;
  font-weight: 700;
  color: var(--primary-text);
  margin-bottom: 12px;
  transition: transform 300ms ease;
}

.why-feature-card:hover .card-title {
  transform: translateY(-4px);
  color: var(--primary-purple);
}

.card-desc {
  font-size: 15px;
  line-height: 1.6;
  color: var(--secondary-text);
  margin-bottom: 24px;
  flex-grow: 1;
  transition: transform 300ms ease;
}

.why-feature-card:hover .card-desc {
  transform: translateY(-4px);
}

/* Bottom Right CTA Arrow */
.card-cta {
  align-self: flex-end;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  background: var(--surface-indigo);
  border: 1px solid var(--border-color);
  color: var(--primary-purple);
  transition: all 300ms ease;
}

.card-arrow {
  font-size: 0.9rem;
  transition: transform 300ms ease;
}

.why-feature-card:hover .card-cta {
  background: var(--primary-purple);
  border-color: var(--primary-purple);
  box-shadow: 0 4px 14px rgba(106, 2, 197, 0.4);
}

.why-feature-card:hover .card-arrow {
  transform: translateX(6px);
}

/* ── SVG Micro Animations ── */
.shield-pulse-path { animation: shieldGlow 2.5s infinite alternate ease-in-out; }
.node-pulse        { animation: nodeGlow 2s infinite alternate; }

@keyframes shieldGlow {
  0%   { stroke-opacity: 0.6; fill-opacity: 0.2; }
  100% { stroke-opacity: 1; fill-opacity: 0.4; }
}

@keyframes nodeGlow {
  0%   { r: 4; opacity: 0.7; }
  100% { r: 6; opacity: 1; }
}

/* AI Nodes Pulse */
.ai-node      { animation: aiPulse 2s infinite alternate ease-in-out; }
.ai-node-main { animation: aiMainPulse 1.8s infinite alternate; }

@keyframes aiPulse {
  0%   { opacity: 0.5; }
  100% { opacity: 1; }
}

@keyframes aiMainPulse {
  0%   { r: 5; fill: #6A02C5; }
  100% { r: 7; fill: #8961F9; }
}

/* Cloud Packets */
.cloud-packet-1 { animation: packetMove1 2s linear infinite; }
.cloud-packet-2 { animation: packetMove2 2s linear infinite 1s; }

@keyframes packetMove1 {
  0%   { cx: 90; opacity: 1; }
  90%  { cx: 110; opacity: 1; }
  100% { cx: 110; opacity: 0; }
}

@keyframes packetMove2 {
  0%   { cx: 170; opacity: 1; }
  90%  { cx: 190; opacity: 1; }
  100% { cx: 190; opacity: 0; }
}

/* Agile Spinner */
.agile-spinner {
  animation: agileRotate 8s linear infinite;
  transform-origin: 140px 60px;
}

@keyframes agileRotate {
  0%   { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* World Map Pulse */
.hub-pulse { animation: hubPulse 2s infinite alternate; }

@keyframes hubPulse {
  0%   { opacity: 0.7; transform: scale(0.95); }
  100% { opacity: 1; transform: scale(1.1); }
}

/* Stacking Blocks */
.mid-block-float { animation: blockFloat1 3s ease-in-out infinite alternate; }
.top-block-float { animation: blockFloat2 3s ease-in-out infinite alternate 0.5s; }

@keyframes blockFloat1 {
  0%   { transform: translateY(0px); }
  100% { transform: translateY(-4px); }
}

@keyframes blockFloat2 {
  0%   { transform: translateY(0px); }
  100% { transform: translateY(-8px); }
}

/* ── Responsive Grid Breakpoints ── */
@media (max-width: 1199px) {
  .why-feature-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
  }
}

@media (max-width: 767px) {
  .why-jaiton-section {
    padding: 80px 0;
  }

  .why-feature-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }

  .why-feature-card {
    padding: 28px 20px;
  }
}
</style>
