$('.fees-Carousel').owlCarousel({
    margin: 30,
    loop: true,
    dots: false,
    nav: true,
    center: true,
    autoplay: true,

    responsive: {
        0: {
            items: 1,
            
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
});
