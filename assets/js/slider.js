/**
 * Jaiton Technologies - Swiper Slider Configurations
 * Initializes the Testimonial Carousel with custom autoplay and indicators.
 */

document.addEventListener("DOMContentLoaded", () => {
  if (typeof Swiper !== "undefined") {
    new Swiper(".testimonial-swiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 6000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      effect: "slide",
      speed: 600,
      grabCursor: true,
    });

    // Solutions Showcase Swiper Slider
    new Swiper(".solutions-swiper", {
      slidesPerView: 1,
      spaceBetween: 20,
      loop: false,
      speed: 600,
      grabCursor: true,
      pagination: {
        el: ".solutions-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".solutions-next",
        prevEl: ".solutions-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
          spaceBetween: 24,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        }
      }
    });
  }
});
