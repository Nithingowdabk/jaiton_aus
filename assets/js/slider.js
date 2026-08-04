/**
 * Jaiton Technologies - Swiper Slider Configurations
 * Initializes Testimonial and Services Carousels with custom responsive breakpoints.
 */

function initSwiperSliders() {
  if (typeof Swiper !== "undefined") {

    // Testimonial Swiper
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

    // Services Showcase Swiper Slider (4 Cards side-by-side on desktop)
    new Swiper(".services-swiper", {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: false,
      speed: 600,
      grabCursor: true,
      navigation: {
        nextEl: ".services-next-btn",
        prevEl: ".services-prev-btn",
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 24,
        },
        1280: {
          slidesPerView: 4,
          spaceBetween: 24,
        }
      }
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
}

document.addEventListener("DOMContentLoaded", initSwiperSliders);
