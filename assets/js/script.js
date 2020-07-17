$("#hamburguer:not(.collapsing)").click(function () {
    $(this).toggleClass("is-active");
});


var owl = $('.owl-carousel');

owl.owlCarousel({
    rtl:true,
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        }
    }
})

owl.owlCarousel();
// Go to the next item
$('#next').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('#prev').click(function() {
    owl.trigger('prev.owl.carousel', [300]);
})