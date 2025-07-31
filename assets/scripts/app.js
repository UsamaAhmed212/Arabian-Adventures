$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 24,
        nav: true,      // shows next & prev buttons
        dots: true,     // shows dots under the carousel
		items: 4,       // The number of items you want to see on the screen.
        responsiveClass:true,
        navText: ['', ''],
        responsive: {
            0: {          // from 0px up
                items: 2,
                margin: 6
            },
            768: {        // from 768px up
                items: 3,
                margin: 12
            },
            992: {        // from 992px up
                items: 4,
                margin: 12
            },
            1200: {       // from 1200px up
                items: 4,
                margin: 24
            }
        }
    });
});
