$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 450) {
        $(".call-mob").addClass("show-btn");
    } else {
        $(".call-mob").removeClass("show-btn");
    }
});

$('.footerBottomLink').find('a').addClass('d-inline-block me-3 f-14 no-underline text-white');

$(".notification_img").hide();
$(".footer-close").hide();
$(document).ready(function () {
    let screenWidth = $(window).width();

    if (screenWidth > 768) {
        $(".enquiryBtn").click(function (e) {
            e.preventDefault();
            $(".overlay").addClass("modal-backdrop fade show");
            $(".footer-section").addClass("darkBlueBgColor");
            $(".footer-section").removeClass("bgBlueDark");
            $(".notification_img").show();
            $("#call-back-form").css({ padding: "20px" });
            $(".footer-section").animate({ height: 120 }, 200);
            $("#name").focus();
            $(".footer-close").show();
        });

        $(".footer-close").click(function (e) {
            e.preventDefault();
            $(".overlay").removeClass("modal-backdrop fade show");
            $(".footer-section").addClass("bgBlueDark");
            $(".notification_img").hide();
            $("#call-back-form").css({ padding: "0" });
            $(".footer-section").removeClass("darkBlueBgColor");
            $(".footer-section").animate({ height: 70 }, 200);
            $(".footer-close").hide();
        });
    } else {
        $(".enquiryBtn").click(function () {
            window.location.href = "#free-call";
        });
    }
});


$(document).ready(function () {
    $(".keywords-sec").hide();
    $(".close-footer > span").click(function () {
        $(".keywords-sec").slideToggle();
        $(this).find("i").toggleClass("rotate-footer-close-arrow");
        // $(".close-footer").toggleClass("mb-5 mb-md-0");
        if ($(this).find("span").text() === "Close footer") {
            $(this).find("span").text("Open footer");
        } else {
            $(this).find("span").text("Close footer");
            $("html, body").animate({ scrollTop: $(document).height() }, 1000);
        }
    });
});

$(".collapser").click(function () {
    $(this).parent().next().collapse("toggle");
    $(this).toggleClass("package-details");
    $(".collapser").not(this).parent().next().collapse("hide");
    $(".collapser").not(this).removeClass("package-details");
});



function autotab(current, to) {
    if (
        current.getAttribute &&
        current.value.length == current.getAttribute("maxlength")
    ) {
        to.focus();
    }
}

$(".collapser").click(function () {
    $(this).parent().next().collapse("toggle");
    $(this).toggleClass("all-reports");
    $(".collapser").not(this).parent().next().collapse("hide");
    $(".collapser").not(this).removeClass("all-reports");
});

function dragOverHandler(ev) {
    // console.log("File(s) in drop zone");
    $(".drop-file").addClass("file-in-drop-zone");
    $(".before-dropping").addClass("d-none");
    $(".dropped-file").removeClass("d-none");
    $(".dropped-file p").html("Drop your File here");
    // Prevent default behavior (Prevent file from being opened)
    ev.preventDefault();
}

function dragLeaveHandler(ev) {
    var fileName = $('#prescription input[type="file"]').val();
    if (fileName) {
        // returns true if the string is not empty
        $(".drop-file").removeClass("file-in-drop-zone");
        $(".before-dropping").addClass("d-none");
        $(".dropped-file").removeClass("d-none");
        $(".dropped-file p").html(fileName.replace(/C:\\fakepath\\/i, ""));
    } else {
        // no file was selected
        $(".drop-file").removeClass("file-in-drop-zone");
        $(".before-dropping").removeClass("d-none");
        $(".dropped-file").addClass("d-none");
    }

    // Prevent default behavior (Prevent file from being opened)
    ev.preventDefault();
}

// const swiper = new Swiper(".swiper-container ", {
//     loop: false,
//     slidesPerView: "auto ",
//     spaceBetween: 20,
//     pagination: {
//         el: '.swiper-pagination',
//         type: 'false',
//         clickable: true
//     },
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
//     breakpoints: {
//         // when window width is >= 320px
//         300: {
//             slidesPerView: 1.2
//         },
//         // when window width is >= 480px
//         600: {
//             slidesPerView: 2.5
//         },
//         // when window width is >= 640px
//         900: {
//             slidesPerView: 3.15
//         },
//         1200: {
//             slidesPerView: 3.15
//         }
//     }
// });

new Swiper('.certificate-slider', {
    speed: 600,
    autoHeight: true,
    loop: false,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
        el: '.swiper-pagination',
        type: false,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1.2,
            spaceBetween: 20
        },
        640: {
            slidesPerView: 2.4,
            spaceBetween: 20
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 20
        },

        1200: {
            slidesPerView: 4,
            spaceBetween: 20
        }
    }
});

$(".patient-testimonial-slider").slick({
    dots: false,
    arrows: true,
    autoplay: false,
    speed: 800,
    margin: 20,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
            arrows: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
        },
    },

    {
        breakpoint: 992,
        settings: {
            dots: false,
            autoplay: true,
            arrows: false,
            slidesToShow: 2,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 480,
        settings: {
            dots: false,
            autoplay: true,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
        },
    },
    ],
});

// Cache selectors
var lastId,
    topMenu = $("#menu"),
    topMenuHeight = topMenu.outerHeight() + 15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function () {
        var item = $($(this).attr("href"));
        if (item.length) {
            return item;
        }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function (e) {
    var href = $(this).attr("href"),
        offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 200;
    $('html, body').stop().animate({
        scrollTop: offsetTop
    }, 100);
    e.preventDefault();
});

// Bind to scroll
$(window).scroll(function () {
    // Get container scroll position
    var fromTop = $(this).scrollTop() + topMenuHeight;

    // Get id of current scroll item
    var cur = scrollItems.map(function () {
        if ($(this).offset().top < fromTop)
            return this;
    });
    // Get the id of the current element
    cur = cur[cur.length - 1];
    var id = cur && cur.length ? cur[0].id : "";

    if (lastId !== id) {
        lastId = id;
        // Set/remove active class
        menuItems
            .parent().removeClass("active")
            .end().filter("[href='#" + id + "']").parent().addClass("active");
    }
});


new Swiper('.specialities', {
    speed: 600,
    loop: false,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1.5,
            spaceBetween: 20
        },

        1200: {
            slidesPerView: 3,
            spaceBetween: 20
        }
    }
});

new Swiper('.network-slider', {
    speed: 600,
    loop: false,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
        el: '.swiper-pagination',
        type: 'false',
        clickable: true
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1.3,
            spaceBetween: 20
        },

        1200: {
            slidesPerView: 3,
            spaceBetween: 20
        }
    }
});

new Swiper('.swiper-container', {
    speed: 600,
    loop: false,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
        el: '.swiper-pagination',
        type: 'false',
        clickable: true
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1.5,
            spaceBetween: 20,
            spaceBetween: 20
        },
        600: {
            slidesPerView: 2.5,
            spaceBetween: 20
        },
        900: {
            slidesPerView: 2.5,
            spaceBetween: 20
        },
        1200: {
            slidesPerView: 3.15,
            spaceBetween: 20
        }
    }
});

new Swiper('.technology', {
    speed: 600,
    loop: false,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
        el: '.swiper-pagination',
        type: 'false',
        clickable: true
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1.2,
            spaceBetween: 20
        },

        1200: {
            slidesPerView: 2,
            spaceBetween: 20
        }
    }
});

new Swiper('.blogs', {
    speed: 600,
    loop: false,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1.5,
            spaceBetween: 20
        },

        1200: {
            slidesPerView: 3,
            spaceBetween: 20
        }
    }
});

new Swiper('.testimonial', {
    speed: 600,
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
    },
    breakpoints: {
        320: {
            slidesPerView: 1.3,
            spaceBetween: 20
        },

        1200: {
            slidesPerView: 3,
            spaceBetween: 20
        }
    }
});

$(".blogs-slider").slick({
    dots: false,
    arrows: true,
    autoplay: false,
    speed: 800,
    draggable: true,
    easing: true,
    swipe: true,
    useTransform: true,
    zIndex: 0,
    adaptiveHeight: true,
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1200,
        settings: {
            arrows: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
        },
    },
    {
        breakpoint: 992,
        settings: {
            dots: false,
            arrows: true,
            slidesToShow: 3,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 767,
        settings: {
            dots: false,
            arrows: false,
            slidesToShow: 2.3,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 480,
        settings: {
            dots: false,
            arrows: false,
            slidesToShow: 1.2,
            slidesToScroll: 1,
        },
    },
    ],
});

$(".unsure-slider").slick({
    dots: false,
    arrows: true,
    autoplay: false,
    speed: 800,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
        },
    },
    {
        breakpoint: 992,
        settings: {
            dots: false,
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 600,
        settings: {
            dots: false,
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 480,
        settings: {
            dots: false,
            arrows: false,
            margin: 10,
            slidesToShow: 2,
            slidesToScroll: 1,
        },
    },
    ],
});
$(".awards-slider").slick({
    dots: false,
    arrows: true,
    autoplay: false,
    speed: 800,
    draggable: true,
    easing: true,
    swipe: true,
    useTransform: true,
    zIndex: 0,
    adaptiveHeight: true,
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
            arrows: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
        },
    },
    {
        breakpoint: 768,
        settings: {
            dots: false,
            arrows: false,
            slidesToShow: 2,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 480,
        settings: {
            dots: false,
            arrows: false,
            slidesToShow: 1.2,
            slidesToScroll: 1,
        },
    },
    ],
});
$(".rare-cases-slider").slick({
    dots: false,
    arrows: true,
    autoplay: false,
    speed: 800,
    draggable: true,
    easing: true,
    swipe: true,
    useTransform: true,
    zIndex: 0,
    adaptiveHeight: true,
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
            arrows: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
        },
    },
    {
        breakpoint: 992,
        settings: {
            dots: false,
            arrows: true,
            slidesToShow: 3,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 767,
        settings: {
            dots: false,
            arrows: false,
            slidesToShow: 3,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 480,
        settings: {
            dots: false,
            arrows: false,
            slidesToShow: 1.2,
            slidesToScroll: 1,
        },
    },
    ],
});

$(".doctor-testimonial-slider").slick({
    dots: false,
    arrows: true,
    autoplay: false,
    speed: 800,
    margin: 20,
    draggable: true,
    easing: true,
    swipe: true,
    useTransform: true,
    zIndex: 0,
    adaptiveHeight: true,
    infinite: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
        },
    },
    {
        breakpoint: 992,
        settings: {
            dots: false,
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 767,
        settings: {
            dots: false,
            arrows: false,
            slidesToShow: 2.2,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 480,
        settings: {
            dots: false,
            autoplay: true,
            arrows: false,
            slidesToShow: 1.2,
            slidesToScroll: 1,
        },
    },
    ],
});

$(".home-testimonial-slider").slick({
    dots: false,
    arrows: true,
    autoplay: false,
    speed: 800,
    margin: 20,
    draggable: true,
    easing: true,
    swipe: true,
    useTransform: true,
    zIndex: 0,
    adaptiveHeight: true,
    infinite: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
        },
    },
    {
        breakpoint: 992,
        settings: {
            dots: false,
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 767,
        settings: {
            dots: false,
            arrows: false,
            slidesToShow: 2.2,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 480,
        settings: {
            dots: false,
            arrows: false,
            autoplay: true,
            slidesToShow: 1.2,
            slidesToScroll: 1,
        },
    },
    ],
});

$(".international-testimonial-slider").slick({
    dots: false,
    arrows: true,
    autoplay: false,
    speed: 800,
    margin: 20,
    draggable: true,
    easing: true,
    swipe: true,
    useTransform: true,
    zIndex: 0,
    adaptiveHeight: true,
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
            arrows: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
        },
    },
    {
        breakpoint: 992,
        settings: {
            dots: false,
            arrows: true,
            slidesToShow: 4,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 767,
        settings: {
            dots: false,
            arrows: false,
            slidesToShow: 2.2,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 480,
        settings: {
            dots: false,
            arrows: false,
            autoplay: true,
            slidesToShow: 1.2,
            slidesToScroll: 1,
        },
    },
    ],
});


$(".for-doctor-testimonials").slick({
    dots: false,
    arrows: true,
    autoplay: false,
    speed: 800,
    margin: 20,
    draggable: true,
    easing: true,
    swipe: true,
    useTransform: true,
    zIndex: 0,
    adaptiveHeight: true,
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
            arrows: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
        },
    },
    {
        breakpoint: 600,
        settings: {
            dots: false,
            arrows: false,
            slidesToShow: 2.5,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 480,
        settings: {
            dots: false,
            arrows: false,
            slidesToShow: 1.5,
            slidesToScroll: 1,
        },
    },
    ],
});



$(".patients-t-slider").slick({
    dots: false,
    arrows: true,

    autoplay: true,
    speed: 800,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
            arrows: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
        },
    },
    {
        breakpoint: 600,
        settings: {
            dots: false,
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 480,
        settings: {
            dots: false,
            arrows: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        },
    },
    ],
});



$(".patients-t-slider1").slick({
    dots: false,
    arrows: true,
    autoplay: true,
    speed: 800,
    slidesToShow: 2,
    slidesToScroll: 1,
    spaceBetween: 60,
    responsive: [{
        breakpoint: 1024,
        settings: {
            arrows: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            spaceBetween: 20,
            dots: false,
        },
    },
    {
        breakpoint: 600,
        settings: {
            dots: false,
            arrows: true,
            slidesToShow: 1,
            spaceBetween: 20,
            slidesToScroll: 1,
        },
    },
    {
        breakpoint: 480,
        settings: {
            dots: false,
            arrows: true,
            slidesToShow: 1,
            spaceBetween: 20,
            slidesToScroll: 1,
        },
    },
    ],
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 0) {
        $('.header').addClass('header-fixed');
        $('body').css("padding-top", "60px");
        // $('#mobile-email').css("padding-top", "20px");
        $('.header-top .collapse').removeClass('show');
    } else {
        $('.header').removeClass('header-fixed');
        $('body').css("padding-top", "0px");
        // $('#mobile-email').css("padding-top", "5px");
    }

});


$(".header-search-icon").click(function () {
    $(".search-overlay-wrapper").addClass("show-search");
});

$(".close-search-btn").click(function () {
    $(".search-overlay-wrapper").removeClass("show-search");

});



$(".filter-toggle").click(function () {
    $(".filter-mobile").addClass("show-filter");
});

$(".search-blog-icon").click(function () {
    $(".search-bar-blog").addClass("show-hide-input");
});

$(".close-filter").click(function () {
    $(".filter-mobile").removeClass("show-filter");
});


$(".toggle-btn-nav").click(function () {
    $(".navbar-mobile").addClass("show-nav");
});
$(".close-nav").click(function () {
    $(".navbar-mobile").removeClass("show-nav");
});

$(".has-dropdown .dropdown-item").click(function () {
    $(this).addClass("active-dropdown");
});

$(".back-menu-btn").click(function () {
    $(this).parents('li.nav-item.has-dropdown').eq(0).children('a').removeClass("active-dropdown");
})

$(document).ready(function () {
    $(document).on('click', 'body', function (e) {
        if (($(e.target).is('.search-blog-icon ')) || ($(e.target).is('#q'))) {
            //pass
        }
        else {
            $('.search-bar-blog').removeClass('show-hide-input');

        }
    })
});

// Get the button
let mybutton = document.getElementById("back-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


var lastScroll = 0;
navbar = document.getElementById("header");
window.addEventListener("scroll", function () {
    var scrollTop = window.pageYOffset || document
        .documentElement.scrollTop;
    if (scrollTop > lastScroll) {
        navbar.style.top = "-85px";
        $(".header-fixed .navbar-brand img").css("min-width", "170px");
        $(".header-fixed .navbar-brand img").css("width", "170px");
        $(".header-fixed .navbar-brand img").css("margin-top", "0");
    } else {
        navbar.style.top = "0";
        $(".header-fixed .navbar-brand img").css("min-width", "230px");
        $(".header-fixed .navbar-brand img").css("width", "230px");
        $(".header-fixed .navbar-brand img").css("margin-top", "-46px");
    }
    lastScroll = scrollTop;
});

$(".search-icon-mobile").click(function () {
    $(".mobile-search-btn").addClass("show-mobile-search");

});
$(".close-search-mobile").click(function () {
    $(".mobile-search-btn").removeClass("show-mobile-search");
});

$(".chairman-mobile").click(function () {
    $(".email-ico-list-mobile").addClass("show-chairman-link");

});
$(".close-chairman-m i").click(function () {
    $("li.email-ico-list-mobile").removeClass("show-chairman-link");
});

// //recent OTP timer
// var timeleft = 30;
// var downloadTimer = setInterval(function(){
//   if(timeleft <= 0){
//     clearInterval(downloadTimer);
//     document.getElementById("countdown").innerHTML = "Finished";
//   } else {
//     document.getElementById("countdown").innerHTML = timeleft + " you can resend OTP after finishing timer";
//   }
//   timeleft -= 1;
// }, 1000);

function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return false;
}

// Copy clipboard
$('.copyUrl').on('click', function () {
    var copiedURL = document.getElementById("copied_url");
    $('.profile-url').select();
    copiedURL.value = $(this).attr('data-url');
    copiedURL.select();
    navigator.clipboard.writeText(copiedURL.value);
    document.execCommand("copy");
    $(this).html('Copied');

    setTimeout(function () {
        $('.copyUrl').html('Copy Link');
        $('.profile-url').select();
    }, 1000);

});

$("#callBackForm").submit(function (e) {
    e.preventDefault();
    $("#email").rules("add", {
        required: true,
        messages: {
            required: "This field is required",
        }
    });
    var pagename = $("#PageId").val();
    var name = $("#name").val();
    var phone = $("#phone").val();
    var email = $("#email").val();
    var message = $("#remark").val();
    var source = window.location.href;
    // alert(source);die;
    // var postdata = [{
    //     'FirstName': name,
    //     'Source': source,
    //     'Phone': phone,
    //     'Email': email,
    //     'mx_Department': pagename,
    //     'SearchBy': phone,
    //     'mx_Location': location,
    //     'Notes': note,
    //     'mx_Center_Name': CenterName,
    //     'mx_Sub_Source1': source
    // }];
    if (name != '' && phone != '' && email != '') {
        $("#submitBtn").prop('disabled', true);
        $("#submitBtn").html("Please wait...");

        $.ajax({
            url: "processing.php",
            method: "POST",
            data: {
                pagename: pagename,
                name: name,
                phone: phone,
                email: email,
                message: message,
            },
            // data: JSON.stringify(postdata),
            success: function (data) {
                $('#name').val('');
                $("#email").val('');
                $("#phone").val('');
                $("#remark").val('');
                $("#submitBtn").prop('disabled', false);
                $("#submitBtn").html("Submitted");
                // window.location.reload(1);
                window.location.href = 'thank-you.html';

                // Swal.fire({
                // title: "Thank You For Getting In Touch. Our Team Will Contact You Shortly!",
                // icon: "success"
                // });
                // window.location.href = 'thank-you.html';
            }
        });
    }
});

