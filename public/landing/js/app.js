const contact_form = document.querySelector("#contact-form")
const form_close = document.querySelector("#form-close");

const forms = $("form");

forms.each(
    (index, form) => {
        $(form).submit(
            () => {
                const theForm = $(form);
                resetRespMsg();
                $.ajax(
                    {
                        type: "post",
                        url: "https://noormedicare.com/lp_leads.php",
                        data: theForm.serialize(),
                        beforeSend: function () {
                            console.log(theForm.find('button'));
                            theForm.find('button').text('Booking...').attr('disabled', true);
                        },
                        success: function (response) {
                            const jsonResp = JSON.parse(response);
                            if (jsonResp.flag == 1) {
                                theForm.trigger('reset');
                                $('.respo-msg')
                                    .addClass('text-success')
                                    .removeClass('text-danger')
                                    .removeClass('text-muted');
                            } else {
                                $('.respo-msg')
                                    .addClass('text-danger')
                                    .removeClass('text-success')
                                    .removeClass('text-muted');
                            }
                            $('.respo-msg').text(jsonResp.msg);
                            theForm.find('button').text('Book Now').attr('disabled', false);
                            setTimeout(
                                function () {
                                    resetRespMsg();
                                },
                                10000
                            )
                        }
                    }
                )
                return false;
            }
        )
    }
)

const resetRespMsg = () => {
    $('.respo-msg')
        .text('Without paying anything in advanced')
        .removeClass('text-success')
        .removeClass('text-danger')
        .addClass('text-muted');
}

function formClose() {
    $(".form-holder").fadeOut();
}

const contactForm = () => {
    var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    // console.log(width)
    if (width <= 992) {
        $(".form-holder").fadeIn();
    } else {
        document.querySelector("#user_name").focus();
        contact_form.classList.add('form-focus')
        setTimeout(
            () => {
                contact_form.classList.remove('form-focus')
            },
            300
        )
    }

}

// When the user scrolls the page, execute myFunction
window.onscroll = function () { myFunction() };

function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = (scrolled != 0 ? scrolled : "1") + "%";
}

const counterUp = document.querySelectorAll(".count-up");

//Original codepen URL: https://codepen.io/rosefalk/pen/woBVRX

function countup(countupSpeed) {
    var $counters = $('.counter'),
        countersLength = $counters.length;

    $counters.each(function (i, v) {
        var $input = $(v),
            value = parseInt($input.data('val'), 10),
            //modifier: higher equals slower countup, defaults to 500.
            modifier = (countupSpeed !== undefined) ? countupSpeed : 500,
            ratio = value / modifier,
            counter = 1;

        var interval = setInterval(function () {
            counter++;

            var val = Math.floor(counter * ratio);

            if (typeof Intl === "object") {
                //Format the number.
                val = new Intl.NumberFormat().format(val);
            }

            if (counter <= modifier) {
                $input.text(val);
            } else {
                //Count-up is done
                clearInterval(interval);
                /*
                  * is called once when done, if you want it to call for each then 
                  * remove && i === countersLength-1
                */
                if (typeof countupCallback === "function" && i === countersLength - 1) {
                    countupCallback();
                }
            }
        }, 1 / ratio);
    })
};

function countupCallback() {
}

countup(300, countupCallback);

$('.loop').owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    margin: 10,
    responsive: {
        600: {
            items: 3
        },
        0: {
            items: 1

        }
    }
});