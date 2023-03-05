var swiper__medicalProcedures = new Swiper(".js-swiperMedicalProcedures", {
    slidesPerView: 1,
    spaceBetween: 0,
    navigation: {
        nextEl: ".s-medicalProcedures__content__btns .c-slideArrows__arrow.--r",
        prevEl: ".s-medicalProcedures__content__btns .c-slideArrows__arrow.--l",
    },
    breakpoints: {
        // when window width is >= 320px
        480: {
            slidesPerView: 2,
        },
    }
});

const manageNextSwipersEffect = () => {
    $('.js-swiperMedicalProcedures .swiper-slide').removeClass('swiper-next-next');
    setTimeout(() => {
        $('.js-swiperMedicalProcedures .swiper-slide-next').nextAll().addClass('swiper-next-next');
    }, "100")
}

swiper__medicalProcedures.on('slideChange', manageNextSwipersEffect);
$(window).on('load', manageNextSwipersEffect);