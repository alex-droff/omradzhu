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
                    autoWidth: true,
                },

                768: {
                    items: 2,
                    dots: false,
                    margin: 30,
                    slideBy: 2,
                }
            }
        });

        $('.totop').click(function() {
            $("html, body").animate({
                scrollTop: $('body').offset().top
            }, 1000);
        })


    });
})(jQuery);