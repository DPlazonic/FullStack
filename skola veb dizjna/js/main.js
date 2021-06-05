$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 80,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 2
        }
    }
});


// dodavane hamburger meni ikonice
$('.navbar-toggler').html("<i class='fas fa-bars' style='color: #d8303e;'></i>");