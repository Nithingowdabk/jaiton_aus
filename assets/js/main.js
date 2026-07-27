/**
 * Jaiton Technologies - Main Layout Scripts
 * Handles Sticky Navbars, Hamburger menus, Dropdown toggles, and Map pins.
 */

document.addEventListener("DOMContentLoaded", () => {
  // 1. Sticky Header scroll state
  const header = document.getElementById("site-header");
  const handleScroll = () => {
    if (window.scrollY > 20) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  };
  window.addEventListener("scroll", handleScroll);
  handleScroll(); // Initial run on load

  // 2. Mobile Burger Navigation Toggle and CTA Repositioning
  const menuToggle = document.getElementById("menu-toggle");
  const mainNav = document.getElementById("main-nav");
  const menuIcon = menuToggle.querySelector("i");
  const headerCtas = document.getElementById("header-ctas");
  const headerContainer = document.querySelector(".header-container");

  const repositionCtas = () => {
    if (window.innerWidth <= 991) {
      if (headerCtas && headerCtas.parentElement !== mainNav) {
        mainNav.appendChild(headerCtas);
      }
    } else {
      if (headerCtas && headerCtas.parentElement !== headerContainer) {
        headerContainer.insertBefore(headerCtas, menuToggle);
      }
    }
  };

  window.addEventListener("resize", repositionCtas);
  repositionCtas(); // Initial run on load

  menuToggle.addEventListener("click", () => {
    mainNav.classList.toggle("active");
    if (mainNav.classList.contains("active")) {
      menuIcon.className = "fa-solid fa-xmark";
    } else {
      menuIcon.className = "fa-solid fa-bars";
    }
  });

  // Close Mobile nav when clicking links
  const navLinks = mainNav.querySelectorAll(".nav-link");
  navLinks.forEach(link => {
    link.addEventListener("click", () => {
      mainNav.classList.remove("active");
      menuIcon.className = "fa-solid fa-bars";
    });
  });

  // Mobile Dropdown Accordion Toggle
  const dropNavs = mainNav.querySelectorAll(".nav-item.dropdown");
  dropNavs.forEach(dropdown => {
    const link = dropdown.querySelector(".nav-link");
    link.addEventListener("click", (e) => {
      if (window.innerWidth <= 991) {
        e.preventDefault();
        dropdown.classList.toggle("active");
      }
    });
  });

  // 3. Interactive World Map Pins Click Actions
  const mapPins = document.querySelectorAll(".map-pin");
  const officeCards = document.querySelectorAll(".office-card");

  mapPins.forEach(pin => {
    pin.addEventListener("click", () => {
      const targetOffice = pin.getAttribute("data-office");

      // Deactivate all pins & cards
      mapPins.forEach(p => p.classList.remove("active"));
      officeCards.forEach(card => card.classList.remove("active"));

      // Activate selected pin & card
      pin.classList.add("active");
      const selectedCard = document.getElementById(`office-${targetOffice}`);
      if (selectedCard) {
        selectedCard.classList.add("active");
      }
    });
  });

  // 4. Contact Form validation preview
  const contactForm = document.getElementById("enterprise-contact-form");
  if (contactForm) {
    contactForm.addEventListener("submit", (e) => {
      e.preventDefault();
      
      // Basic Visual submit notification feedback
      const submitBtn = contactForm.querySelector(".form-submit");
      const originalText = submitBtn.innerHTML;
      submitBtn.disabled = true;
      submitBtn.innerHTML = `Sending... <i class="fa-solid fa-circle-notch fa-spin"></i>`;
      
      setTimeout(() => {
        submitBtn.innerHTML = `Message Sent! <i class="fa-solid fa-check-circle"></i>`;
        submitBtn.style.backgroundColor = "var(--success-color)";
        contactForm.reset();
        
        setTimeout(() => {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalText;
          submitBtn.style.backgroundColor = "";
        }, 3000);
      }, 1500);
    });
  }
});
