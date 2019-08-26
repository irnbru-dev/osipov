$(".promo-owl").owlCarousel({
    items: 1,
    loop: true,
    dots: true,
    autoplay: true
});

$(".gallery-owl").owlCarousel({
    loop: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 30000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        },
        992: {
            items: 3
        }
    }
});

var wow = new WOW();
wow.init();