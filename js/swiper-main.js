var swiper = new Swiper('.photo_gallery_container', {
    slidesPerView: 4,
    spaceBetween: 30,
    freeMode: true,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    autoplay: {
      delay: 3000,
    },
    breakpoints: {
      // when window width is <= 320px
      480: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      // when window width is <= 480px
      704: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      // when window width is <= 640px
      940: {
        slidesPerView: 3,
        spaceBetween: 30
      }
    }
  });

var swiper1 = new Swiper('.design-interior--first', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    loop: true,
});
var swiper2 = new Swiper('.design-interior--steps', {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        // when window width is <= 1099px
        1099: {
            slidesPerView: 1,
            spaceBetween: 0
        },
    }
});