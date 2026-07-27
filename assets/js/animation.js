/**
 * Jaiton Technologies - Premium Custom Motion Design
 * Configures mouse parallax (using GSAP) on the Hero visual and triggers progress line fills.
 */

document.addEventListener("DOMContentLoaded", () => {
  // 1. Mouse Move Parallax on Hero Visual
  const heroVisual = document.querySelector(".hero-visual");
  const parallaxItems = document.querySelectorAll(".parallax-item");

  if (heroVisual && parallaxItems.length > 0 && typeof gsap !== "undefined") {
    heroVisual.addEventListener("mousemove", (e) => {
      const rect = heroVisual.getBoundingClientRect();
      // Calculate mouse displacement relative to center of container
      const mouseX = e.clientX - rect.left - rect.width / 2;
      const mouseY = e.clientY - rect.top - rect.height / 2;

      parallaxItems.forEach((item) => {
        const speed = parseFloat(item.getAttribute("data-speed")) || 1;
        // Translate coordinates based on item speeds
        const xDisplacement = (mouseX * speed) / 60;
        const yDisplacement = (mouseY * speed) / 60;

        gsap.to(item, {
          x: xDisplacement,
          y: yDisplacement,
          duration: 0.8,
          ease: "power2.out",
        });
      });
    });

    // Reset floating positions when mouse leaves hero section
    heroVisual.addEventListener("mouseleave", () => {
      parallaxItems.forEach((item) => {
        gsap.to(item, {
          x: 0,
          y: 0,
          duration: 1.2,
          ease: "elastic.out(1, 0.75)",
        });
      });
    });
  }

  // 2. Timeline progress bar trigger (Process section)
  const timelineContainer = document.querySelector(".timeline-container");
  const fillBar = document.getElementById("timeline-progress-fill");

  if (timelineContainer && fillBar) {
    const timelineObserver = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            fillBar.classList.add("animated");
            observer.unobserve(entry.target);
          }
        });
      },
      {
        root: null,
        rootMargin: "0px",
        threshold: 0.25, // Trigger when 25% of timeline visible
      }
    );

    timelineObserver.observe(timelineContainer);
  }
});
