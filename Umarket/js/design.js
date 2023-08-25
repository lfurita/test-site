
// Main Banner Swiper
var swiper = new Swiper(".MainBaner", {
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        type: "progressbar",
    },
});

// Main Category Menu Swiper
var swiper = new Swiper(".CategoryMenu", {
    slidesPerView: "auto",
    watchSlidesProgress: true,
    spaceBetween: 10,
    loop: true,
});

// View Images Swiper
  var swiper = new Swiper(".viewPhoto", {
    slidesPerView: "auto",
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
  });