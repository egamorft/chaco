var swiper = new Swiper(".categorySwiper", {
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination-category",
  },
  spaceBetween: 20,
  breakpoints: {
    992: {
      slidesPerView: 4,
    },
    768: {
      slidesPerView: 3,
    },
    300: {
      slidesPerView: 2,
    },
  },
});
