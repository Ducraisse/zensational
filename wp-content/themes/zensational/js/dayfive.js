jQuery(function($) {
    
    $('.contact-slider').owlCarousel({
        items:1,
        lazyLoad:true,
        loop:true,
        margin:0,
        autoplay: true,
        autoplaySpeed: 2000
    });

});

(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as anonymous module.
        define(['jquery'], factory);
    } else {
        // Browser globals.
        factory(jQuery);
    }
}(function ($) {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top -0
                }, 1000);
                return false;
            }
        }
    });
}));