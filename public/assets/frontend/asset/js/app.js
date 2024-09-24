

// section 2
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 4,
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
    type: "progressbar",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
    1400: {
      slidesPerView: 4,
    },
  },
});
// section 5
$(".sec4owl-carousel").owlCarousel({
  autoplay: true,
  slideTransition: "linear",
  autoplayTimeout: 7000,
  autoplaySpeed: 7000,
  stagePadding: 50,
  loop: true,
  margin: 20,
  nav: false,
  dots: false,
  responsive: {
    320: {
      items: 1,
    },
    500: {
      items: 1.5,
    },
    768: {
      items: 2,
    },
    992: {
      items: 3,
    },
    1200: {
      items: 3,
    },
    1300: {
      items: 3,
    },
    1400: {
      items: 5,
    },
  },
});
//
let ds1c1div = document.getElementById("ds1c1div");
let navbarSupportedContent = document.getElementById("navbarSupportedContent");
let ds1c2div = document.getElementById("ds1c2div");
let ds1c2Wid = document.getElementById("ds1c2Wid");
function dbtn() {
  ds1c1div.classList.toggle("d-none");
  navbarSupportedContent.classList.toggle("ds1c2pad");
  ds1c2div.classList.toggle("ds1col2bgc1");
  ds1c2Wid.classList.toggle("ds1c2Wid1");
}

