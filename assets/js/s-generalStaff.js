var swiper__medicalProcedures = new Swiper(".js-staffSlider", {
    slidesPerView: 2,
    spaceBetween: 20,
    navigation: {
        nextEl: '.s-generalStaff .c-slideArrows__arrow.--r',
        prevEl: '.s-generalStaff .c-slideArrows__arrow.--l',
    },
    autoplay: {
        delay: 5000,
    },
    breakpoints: {
        // when window width is >= 320px
        480: {
            slidesPerView: 4,
        },
    }
});