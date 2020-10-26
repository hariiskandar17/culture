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

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});

$('.counter').counterUp({
    delay: 10,
    time: 1000,
    offset: 70,
    beginAt: 100,
    formatter: function(n) {
        return n.replace(/,/g, '.');
    }
});