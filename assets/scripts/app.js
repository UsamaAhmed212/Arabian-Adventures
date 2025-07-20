$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 24,
        nav: true,      // shows next & prev buttons
        dots: true,     // shows dots under the carousel
		items: 4,       // The number of items you want to see on the screen.
        responsiveClass:true,
        navText: ['', ''],
    });
});