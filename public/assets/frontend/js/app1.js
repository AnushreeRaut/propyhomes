
// other pages

// When the user scrolls down 50px from the top of the page, resize the navbar
window.onscroll = function () {
  shrinkNavbar();
};

function shrinkNavbar() {
  var navbar = document.getElementById("navbar1");

  if (window.scrollY > 50) {
    navbar.classList.add("shrink");
  } else {
    navbar.classList.remove("shrink");
  }
}

const nextImg =
  '<div class="preImg"><i class="bi bi-arrow-left" class="preIcon1" ></i> </div>';
const prevImg =
  '<div class="nextImg"><i class="bi bi-arrow-right" class="preIcon2" ></i> </div>';

$(".sec9owl").owlCarousel({
  autoplay: true,
  slideTransition: "linear",
  autoplayTimeout: 8000,
  autoplayHoverPause: true, // Pause on hover
  autoplaySpeed: 8000,
  navText: [nextImg, prevImg],
  loop: true,
  margin: 10,
  dots: false,
  nav: true,
  responsive: {
    0: {
      items: 1,
    },
    320: {
      items: 1,
    },
    768: {
      items: 2,
    },
    992: {
      items: 3,
    },
    1000: {
      items: 3,
    },
  },
});

// testimonial
$(document).ready(function () {
  $(".sec11center-slider").slick({
    autoplay: true,
    slideTransition: "linear",
    autoplayTimeout: 3000,
    autoplaySpeed: 3000,

    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    arrows: false,
    dots: true,
    speed: 300,
    loop: true,
    centerPadding: "150px",
    infinite: true,
    responsive: [
      {
        breakpoint: 1400,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 1354,

        settings: {
          centerPadding: "470px",

          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 1326,
        settings: {
          centerPadding: "450px",

          slidesToShow: 1,
          slidesToScroll: 2,
          dots: true,
          infinite: true,
        },
      },
      {
        breakpoint: 1290,
        settings: {
          centerPadding: "420px",

          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        },
      },
      {
        breakpoint: 1227,
        settings: {
          centerPadding: "400px",

          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        },
      },
      {
        breakpoint: 1177,
        settings: {
          centerPadding: "380px",
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        },
      },
      {
        breakpoint: 1141,
        settings: {
          centerPadding: "355px",

          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        },
      },
      {
        breakpoint: 1092,
        settings: {
          centerPadding: "32%",

          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        },
      },
      {
        breakpoint: 984,
        settings: {
          centerPadding: "30%",

          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        },
      },
      {
        breakpoint: 900,
        settings: {
          centerPadding: "28%",

          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        },
      },
      {
        breakpoint: 818,
        settings: {
          centerPadding: "26%",

          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        },
      },
      {
        breakpoint: 755,
        settings: {
          centerPadding: "24%",

          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        },
      },
      {
        breakpoint: 699,
        settings: {
          centerPadding: "22%",

          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        },
      },
      {
        breakpoint: 640,
        settings: {
          centerPadding: "19%",

          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        },
      },
      {
        breakpoint: 576,
        settings: {
          centerPadding: "15%",

          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        },
      },
      {
        breakpoint: 523,
        settings: {
          centerPadding: "10%",

          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        },
      },
      {
        breakpoint: 465,
        settings: {
          centerPadding: "0%",

          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        },
      },
      {
        breakpoint: 380,
        settings: {
          centerPadding: "0%",
          centerMode: false,

          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 2000,
        },
      },
    ],
  });
});


$(".powl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  autoplay: true,
  slideTransition: "linear",
  autoplayTimeout: 2800,
  animateOut: "fadeOut",

  autoplaySpeed: 7000,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});
$(".powl-carousel1").owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  autoplay: true,
  slideTransition: "linear",
  autoplayTimeout: 2800,
  animateOut: "fadeOut",
  dots: false,

  autoplaySpeed: 7000,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});

// Property Detail
let slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides((slideIndex += n));
}
function currentSlide(n) {
  showSlides((slideIndex = n));
}
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  // let captionText = document.getElementById("caption");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
  // captionText.innerHTML = dots[slideIndex - 1].alt;
}
//
