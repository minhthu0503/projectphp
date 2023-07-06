$(document).ready(function () {
    $(".slick__slider").slick({
        slidesToShow: 4,
        infinite: true,
        slidesToScroll: 4,
        draggable: false,
        autoplay: false,
        autoplayspeed: 2000,
        prevArrow: "<button type='button' class='slick-prev slick-arrow'><ion-icon name='chevron-back-outline'></ion-icon></button>",
        nextArrow: "<button type='button' class='slick-next slick-arrow'><ion-icon name='chevron-forward-outline'></ion-icon></button>",
        dots: false,
        responsive: [
            {
                breakpoint: 1023,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,

                }
            },

            {
                breakpoint: 569,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },

            {
                breakpoint: 359,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },

        ]
    }
    );
});
