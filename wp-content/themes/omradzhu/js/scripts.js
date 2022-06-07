(function($) {
    $(document).ready(function() {
        var mobile = false;

        function windowSize() {
            if ($(window).width() <= '768') {
                mobile = true;
            } else {
                mobile = false;
            }
        }

        windowSize();

        $('#js-carousel-1').owlCarousel({
            nav: true,
            loop: true,
            lazyLoad: true,
            //autoWidth:true,

            // Адаптация
            responsive: {

                320: {
                    items: 1,
                    dots: false,
                    margin: 10,
                    dotsEach: 2,
                    slideBy: 1,
                    //autoWidth: true,
                },

                768: {
                    items: 2,
                    dots: false,
                    margin: 30,
                    slideBy: 2,
                }
            }
        });

        $('#js-carousel-2').owlCarousel({
            nav: true,
            loop: true,
            lazyLoad: false,
            //video: true,
            //autoWidth: true,

            // Адаптация
            responsive: {

                320: {
                    items: 1,
                    dots: false,
                    margin: 10,
                    dotsEach: 2,
                    slideBy: 1,
                    //autoWidth: true,
                },

                768: {
                    items: 2,
                    dots: false,
                    margin: 60,
                    slideBy: 2,
                    //videoWidth: 300,
                }
            }
        });

        $('.totop').click(function() {
            $("html, body").animate({
                scrollTop: $('body').offset().top
            }, 1000);
        })

        $('a:not(.spu-clickable)[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') ||
                location.hostname == this.hostname) {
                var target = jQuery(this.hash);
                target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    jQuery("html, body").animate({
                        scrollTop: target.offset().top - 80
                    }, 1000);
                    return false;
                }
            }
        });


    });
})(jQuery);