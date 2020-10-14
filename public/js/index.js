$(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
        $('.main-navbar').addClass("sticky");
    } else {
        $('.main-navbar').removeClass("sticky");
    }
});

// All animations will take exactly 500ms
var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 1500,
    speedAsDuration: true
});

AOS.init();