$(function () {
    // Owl Carousel
    var owl = $("#doctorSlider-1");
    owl.owlCarousel({
        items: 1,
        margin: 0,
        loop: true,
        nav: true,
        responsiveClass: true,
    });
});

$(function () {
    // Owl Carousel
    var owl = $("#doctorSlider-2");
    owl.owlCarousel({
        items: 1,
        margin: 0,
        loop: true,
        nav: true,
        responsiveClass: true,
    });
});

$(function () {
    // Owl Carousel
    var owl = $(".owl-carousel");
    owl.owlCarousel({
        items: 3,
        margin: 10,
        loop: true,
        nav: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 2,
                nav: true,
                loop: false
            }
        }
    });
});

// $(function () {
//     // Owl Carousel
//     var owl = $(".owl-carousel");
//     owl.owlCarousel({
//         items: 3,
//         margin: 10,
//         loop: true,
//         nav: true
//     });
// });

$(function () {
    // Owl Carousel
    var owl = $("#stories-section");
    owl.owlCarousel({
        items: 3,
        margin: 10,
        loop: true,
        nav: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    });
});

$('.your-slider-class').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    nextArrow: $('.next'),
    prevArrow: $('.prev'),
});


$('.testimonial-slider').slick({
    infinite: true,
    nav:true,
    slidesToShow: 3,
    slidesToScroll: 3,
    // margin:20px,
});