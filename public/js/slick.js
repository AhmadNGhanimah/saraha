$(function () {
    const rtl = $("html").attr("lang") === "ar";
    const singleItemSliderConfig = {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        rtl,
    };

    $("#hero-slider").slick(singleItemSliderConfig);

    $(".testimonials-slider").slick(singleItemSliderConfig);

    if (window.innerWidth <= 992) {
        $('.map-mobile-slick').slick({...singleItemSliderConfig, arrows: true})
    }

    $(".services-slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        rtl,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });
});
