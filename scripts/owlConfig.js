var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    autoplay:true,
    items:1,
    autoplayTimeout:10000,
    smartSpeed:600
})
$('.next-button').click(function() {
    owl.trigger('next.owl.carousel');
})

$('.prev-button').click(function() {
    owl.trigger('prev.owl.carousel');
})
