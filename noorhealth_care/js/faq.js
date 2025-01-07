
$(function () {
    $(".faq__question").on('click', function () {
        let box = $(this).closest(".faq");
        if (box.hasClass('faq_active')) {
            box.find('.faq__answer').slideUp(300);
            box.removeClass('faq_active');
        } else {
            box.find('.faq__answer').slideDown(300);
            box.addClass('faq_active');
        }
    });
});



const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');

    for (i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
    }

    if (itemToggle == 'false') {
        this.setAttribute('aria-expanded', 'true');
    }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));





function myFunction(num) {
    // alert(num);
    var dots = document.getElementById("dots" + num);
    var moreText = document.getElementById("more" + num);
    var btnText = document.getElementById("myBtn" + num);

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more >";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "< Read less";
        moreText.style.display = "inline";
    }
}
