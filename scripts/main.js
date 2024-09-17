// sticky header /
window.addEventListener("scroll", function () {
  const header = document.querySelector("header");
  if (window.scrollY > 0) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
});

// sticky header  //

// testimonia slider
document.addEventListener("DOMContentLoaded", function () {
  // Swiper configuration for .brands (Single slide at all breakpoints)
  const brandsSwiper = new Swiper(".brands .content-swiper", {
    slidesPerView: 1, // Always show 1 slide
    loop: true,
    draggable: true,
    autoplay: false,
    pagination: false,
    spaceBetween: 40,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
    },
  });

  // Swiper configuration for .our-studies (Responsive - 1 slide on mobile, 3 on desktop)
  const caseStudiesSwiper = new Swiper(".our-studies .content-swiper", {
    slidesPerView: 1, // Default to 1 slide for mobile
    loop: true,
    draggable: true,
    autoplay: false,
    pagination: false,
    spaceBetween: 40,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 2, // 2 slides on tablets
      },
      1024: {
        slidesPerView: 3, // 3 slides on desktop
      },
    },
  });
});
