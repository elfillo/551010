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

var projectGallery = new Swiper('.project-gallery__list', {
    slidesPerView: 6,
    spaceBetween: 20,
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

var partners = new Swiper('.partners__list', {
    slidesPerView: 4,
    spaceBetween: 60,
    freeMode: false,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    autoplay: {
        delay: 1500,
    },
    navigation: {
        nextEl: '.partners__arrow_next',
        prevEl: '.partners__arrow_prev',
    },
    breakpoints: {
        480: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        704: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        940: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    }
});

var review = new Swiper('.review-slider', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});