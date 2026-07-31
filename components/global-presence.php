<!-- ============================================================
     GLOBAL OPERATIONS – Enterprise 3D Digital Globe Platform (Three.js WebGL)
     ============================================================ -->
<section id="presence" class="enterprise-globe-section">
  
  <!-- Subtle Blueprint Grid & Radial Glow Layers -->
  <div class="globe-bg-layers" aria-hidden="true">
    <div class="globe-blueprint-grid"></div>
    <div class="globe-radial-glow glow-sydney-au"></div>
    <div class="globe-radial-glow glow-top-left"></div>
  </div>

  <div class="container globe-container-1440">
    
    <!-- Section Header (Centered, Max-Width 760px) -->
    <div class="globe-header" data-aos="fade-up">
      <span class="globe-badge">
        <span class="globe-pulse-dot"></span> GLOBAL DELIVERY NETWORK
      </span>

      <h2 class="globe-title">
        Engineering Enterprise Solutions Without Borders
      </h2>

      <p class="globe-subtitle">
        Connecting Australian business strategy with globally distributed engineering teams, cloud infrastructure, AI innovation, and enterprise software delivery.
      </p>
    </div>

    <!-- Centerpiece Stage: Interactive 3D Digital Globe & Floating Panels -->
    <div class="globe-stage-wrapper" data-aos="fade-up" data-aos-delay="100">
      
      <!-- Three.js Canvas Container -->
      <div id="three-globe-canvas-container" class="three-globe-container"></div>

      <!-- Floating Glass Panel 1: Network Health -->
      <div class="floating-panel panel-top-left">
        <div class="panel-icon green-bg"><i class="fa-solid fa-signal"></i></div>
        <div class="panel-info">
          <span class="p-label">Network Health</span>
          <strong class="p-val">99.99% <small>Operational</small></strong>
        </div>
      </div>

      <!-- Floating Glass Panel 2: Cloud Capacity -->
      <div class="floating-panel panel-top-right">
        <div class="panel-icon blue-bg"><i class="fa-solid fa-server"></i></div>
        <div class="panel-info">
          <span class="p-label">Cloud Capacity</span>
          <strong class="p-val">147 <small>Active Clusters</small></strong>
        </div>
      </div>

      <!-- Floating Glass Panel 3: AI Processing -->
      <div class="floating-panel panel-bottom-left">
        <div class="panel-icon purple-bg"><i class="fa-solid fa-brain"></i></div>
        <div class="panel-info">
          <span class="p-label">AI Processing</span>
          <strong class="p-val">21K <small>Jobs Today</small></strong>
        </div>
      </div>

      <!-- Floating Glass Panel 4: Latency SLA -->
      <div class="floating-panel panel-bottom-right">
        <div class="panel-icon amber-bg"><i class="fa-solid fa-bolt"></i></div>
        <div class="panel-info">
          <span class="p-label">Latency SLA</span>
          <strong class="p-val">Sydney → Singapore <small>38ms</small></strong>
        </div>
      </div>

    </div>

    <!-- Enterprise Statistics Strip (Below Globe) -->
    <div class="globe-stats-strip" data-aos="fade-up" data-aos-delay="200">
      
      <div class="g-stat-item">
        <span class="g-stat-val">99.99%</span>
        <span class="g-stat-lbl">Availability SLA</span>
      </div>

      <div class="g-stat-item">
        <span class="g-stat-val">24×7</span>
        <span class="g-stat-lbl">Engineering Support</span>
      </div>

      <div class="g-stat-item">
        <span class="g-stat-val">5</span>
        <span class="g-stat-lbl">Global Hubs</span>
      </div>

      <div class="g-stat-item">
        <span class="g-stat-val">120+</span>
        <span class="g-stat-lbl">Enterprise Projects</span>
      </div>

    </div>

  </div>
</section>

<!-- Include Three.js & OrbitControls from CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js"></script>

<!-- Enterprise 3D Digital Globe WebGL Script -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const container = document.getElementById("three-globe-canvas-container");
  if (!container || typeof THREE === "undefined") return;

  const width = container.clientWidth || 800;
  const height = container.clientHeight || 550;

  // 1. Scene, Camera & Renderer Setup
  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(45, width / height, 1, 2000);
  camera.position.set(0, 0, 320);

  const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
  renderer.setSize(width, height);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  container.appendChild(renderer.domElement);

  // OrbitControls for Drag Interaction
  const controls = new THREE.OrbitControls(camera, renderer.domElement);
  controls.enableDamping = true;
  controls.dampingFactor = 0.05;
  controls.enableZoom = false;
  controls.autoRotate = true;
  controls.autoRotateSpeed = 0.8;

  // 2. Create Digital Wireframe Sphere & Points Mesh
  const globeRadius = 100;

  // Wireframe Lat/Long Lines Sphere
  const sphereGeo = new THREE.SphereGeometry(globeRadius, 36, 36);
  const wireframeMat = new THREE.MeshBasicMaterial({
    color: 0x6A1BFF,
    wireframe: true,
    transparent: true,
    opacity: 0.12
  });
  const wireframeGlobe = new THREE.Mesh(sphereGeo, wireframeMat);
  scene.add(wireframeGlobe);

  // Outer Glowing Atmosphere Ring
  const outerRingGeo = new THREE.RingGeometry(globeRadius + 14, globeRadius + 16, 64);
  const outerRingMat = new THREE.MeshBasicMaterial({
    color: 0x0055FF,
    side: THREE.DoubleSide,
    transparent: true,
    opacity: 0.25
  });
  const outerRing = new THREE.Mesh(outerRingGeo, outerRingMat);
  outerRing.rotation.x = Math.PI / 2.5;
  scene.add(outerRing);

  // Dotted Matrix Point Cloud Grid for Globe
  const dotsCount = 1800;
  const dotPositions = new Float32Array(dotsCount * 3);
  for (let i = 0; i < dotsCount; i++) {
    const phi = Math.acos(-1 + (2 * i) / dotsCount);
    const theta = Math.sqrt(dotsCount * Math.PI) * phi;
    dotPositions[i * 3] = globeRadius * Math.cos(theta) * Math.sin(phi);
    dotPositions[i * 3 + 1] = globeRadius * Math.sin(theta) * Math.sin(phi);
    dotPositions[i * 3 + 2] = globeRadius * Math.cos(phi);
  }
  const dotGeometry = new THREE.BufferGeometry();
  dotGeometry.setAttribute("position", new THREE.BufferAttribute(dotPositions, 3));
  const dotMaterial = new THREE.PointsMaterial({
    color: 0x3B82F6,
    size: 2,
    transparent: true,
    opacity: 0.65
  });
  const pointsCloud = new THREE.Points(dotGeometry, dotMaterial);
  scene.add(pointsCloud);

  // 3. Convert Lat/Long Coordinates to 3D Coordinates
  function latLongToVector3(lat, lon, radius) {
    const phi = (90 - lat) * (Math.PI / 180);
    const theta = (lon + 180) * (Math.PI / 180);
    const x = -(radius * Math.sin(phi) * Math.cos(theta));
    const z = radius * Math.sin(phi) * Math.sin(theta);
    const y = radius * Math.cos(phi);
    return new THREE.Vector3(x, y, z);
  }

  // Global Hub Coordinates
  const hubs = [
    { name: "Sydney HQ", lat: -33.86, lon: 151.20, isHub: true },
    { name: "Bangalore R&D", lat: 12.97, lon: 77.59 },
    { name: "Singapore Hub", lat: 1.35, lon: 103.81 },
    { name: "Dubai Hub", lat: 25.20, lon: 55.27 },
    { name: "Johannesburg Hub", lat: -26.20, lon: 28.04 }
  ];

  // Add 3D Glowing Node Markers
  hubs.forEach(hub => {
    const pos = latLongToVector3(hub.lat, hub.lon, globeRadius + 1.5);
    const markerGeo = new THREE.SphereGeometry(hub.isHub ? 3.5 : 2.5, 16, 16);
    const markerMat = new THREE.MeshBasicMaterial({
      color: hub.isHub ? 0x6A1BFF : 0x0055FF
    });
    const markerMesh = new THREE.Mesh(markerGeo, markerMat);
    markerMesh.position.copy(pos);
    scene.add(markerMesh);
  });

  // 4. Create 3D Curved Service Routes Connecting Sydney HQ to Global Hubs
  const sydneyPos = latLongToVector3(-33.86, 151.20, globeRadius);

  hubs.slice(1).forEach(dest => {
    const destPos = latLongToVector3(dest.lat, dest.lon, globeRadius);
    const midPos = new THREE.Vector3().addVectors(sydneyPos, destPos).multiplyScalar(0.5);
    midPos.normalize().multiplyScalar(globeRadius + 30);

    const curve = new THREE.QuadraticBezierCurve3(sydneyPos, midPos, destPos);
    const points = curve.getPoints(50);
    const curveGeo = new THREE.BufferGeometry().setFromPoints(points);
    const curveMat = new THREE.LineBasicMaterial({
      color: 0x6A1BFF,
      transparent: true,
      opacity: 0.55
    });
    const curveLine = new THREE.Line(curveGeo, curveMat);
    scene.add(curveLine);
  });

  // 5. Animation Loop (60 FPS)
  function animate() {
    requestAnimationFrame(animate);
    controls.update();
    wireframeGlobe.rotation.y += 0.001;
    pointsCloud.rotation.y += 0.001;
    outerRing.rotation.z += 0.0015;
    renderer.render(scene, camera);
  }
  animate();

  // Responsive Resize
  window.addEventListener("resize", () => {
    const newWidth = container.clientWidth || 800;
    const newHeight = container.clientHeight || 550;
    camera.aspect = newWidth / newHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(newWidth, newHeight);
  });
});
</script>

<!-- ============================================================
     ENTERPRISE 3D GLOBE SCOPED STYLES (#FFFFFF Pure White Background)
     ============================================================ -->
<style>
.enterprise-globe-section {
  position: relative;
  padding: 140px 0;
  background-color: #FFFFFF;
  overflow: hidden;
}

.globe-bg-layers {
  position: absolute;
  inset: 0;
  pointer-events: none;
}

.globe-blueprint-grid {
  position: absolute;
  inset: 0;
  background-size: 36px 36px;
  background-image:
    linear-gradient(to right, rgba(15, 23, 42, 0.03) 1px, transparent 1px),
    linear-gradient(to bottom, rgba(15, 23, 42, 0.03) 1px, transparent 1px);
}

.globe-radial-glow {
  position: absolute;
  border-radius: 50%;
  filter: blur(160px);
  opacity: 0.16;
}

.glow-sydney-au { bottom: -80px; right: 10%; width: 550px; height: 550px; background: #6A1BFF; }
.glow-top-left  { top: -80px; left: 10%; width: 500px; height: 500px; background: #0055FF; }

/* 1440px Container */
.globe-container-1440 {
  max-width: 1440px;
  margin: 0 auto;
  padding: 0 40px;
}

/* Header */
.globe-header {
  text-align: center;
  max-width: 760px;
  margin: 0 auto 54px auto;
}

.globe-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 6px 18px;
  border: 1.5px solid rgba(106, 27, 255, 0.25);
  border-radius: 100px;
  font-size: 12px;
  font-weight: 800;
  color: #6A1BFF;
  letter-spacing: 1px;
  margin-bottom: 18px;
  background: rgba(106, 27, 255, 0.04);
}

.globe-pulse-dot {
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: #6A1BFF;
  box-shadow: 0 0 0 3px rgba(106, 27, 255, 0.2);
  animation: dotPulse 2s infinite;
}

@keyframes dotPulse {
  0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(106, 27, 255, 0.5); }
  70% { transform: scale(1); box-shadow: 0 0 0 8px rgba(106, 27, 255, 0); }
  100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(106, 27, 255, 0); }
}

.globe-title {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(34px, 3.8vw, 50px);
  font-weight: 800;
  line-height: 1.15;
  color: #0F172A;
  margin-bottom: 18px;
  letter-spacing: -0.02em;
}

.globe-subtitle {
  font-size: 16.5px;
  line-height: 1.65;
  color: #64748B;
  margin: 0;
}

/* Centerpiece 3D Globe Stage */
.globe-stage-wrapper {
  position: relative;
  width: 100%;
  height: 560px;
  border-radius: 28px;
  background: #FFFFFF;
  border: 1px solid #E2E8F0;
  box-shadow: 0 20px 48px rgba(0, 43, 128, 0.04);
  overflow: hidden;
  margin-bottom: 48px;
}

.three-globe-container {
  width: 100%;
  height: 100%;
  cursor: grab;
}

.three-globe-container:active {
  cursor: grabbing;
}

/* Floating Glass Panels (4 Floating Cards) */
.floating-panel {
  position: absolute;
  background: rgba(255, 255, 255, 0.94);
  backdrop-filter: blur(14px);
  border: 1px solid #E2E8F0;
  padding: 12px 18px;
  border-radius: 16px;
  box-shadow: 0 12px 28px rgba(15, 23, 42, 0.08);
  display: flex;
  align-items: center;
  gap: 12px;
  z-index: 10;
  animation: panelFloat 5s ease-in-out infinite alternate;
}

@keyframes panelFloat {
  0% { transform: translateY(0); }
  100% { transform: translateY(-8px); }
}

.panel-top-left     { top: 24px; left: 24px; animation-delay: 0s; }
.panel-top-right    { top: 24px; right: 24px; animation-delay: 1.2s; }
.panel-bottom-left  { bottom: 24px; left: 24px; animation-delay: 2.4s; }
.panel-bottom-right { bottom: 24px; right: 24px; animation-delay: 1.8s; }

.panel-icon {
  width: 38px;
  height: 38px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 16px;
}

.green-bg  { background: rgba(16, 185, 129, 0.1); color: #10B981; }
.blue-bg   { background: rgba(0, 85, 255, 0.1); color: #0055FF; }
.purple-bg { background: rgba(106, 27, 255, 0.1); color: #6A1BFF; }
.amber-bg  { background: rgba(245, 158, 11, 0.1); color: #F59E0B; }

.panel-info {
  display: flex;
  flex-direction: column;
  text-align: left;
}

.p-label {
  font-size: 11px;
  font-weight: 700;
  color: #64748B;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.p-val {
  font-family: 'Poppins', sans-serif;
  font-size: 14px;
  font-weight: 800;
  color: #0F172A;
}

.p-val small {
  font-size: 10.5px;
  font-weight: 600;
  color: #64748B;
  margin-left: 4px;
}

/* Enterprise Statistics Strip (Below Globe) */
.globe-stats-strip {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
  padding: 32px 0;
  border-top: 1px solid #E2E8F0;
  border-bottom: 1px solid #E2E8F0;
  max-width: 1440px;
  margin: 0 auto;
}

.g-stat-item {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.g-stat-val {
  font-family: 'Poppins', sans-serif;
  font-size: clamp(34px, 3vw, 46px);
  font-weight: 900;
  color: #0055FF;
  line-height: 1.1;
  margin-bottom: 4px;
}

.g-stat-lbl {
  font-size: 14px;
  font-weight: 700;
  color: #475569;
}

/* Responsive */
@media (max-width: 1199px) {
  .floating-panel { display: none; }
  .globe-stats-strip { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 767px) {
  .enterprise-globe-section {
    padding: 80px 0;
  }

  .globe-stage-wrapper {
    height: 400px;
  }

  .globe-stats-strip {
    grid-template-columns: 1fr;
    gap: 20px;
  }
}
</style>
