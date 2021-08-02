(function($) {
  'use strict';

    $( document ).ready(function() {
		if ( $('.slider-wrapper').hasClass("section-14") ) {
            var section14 = tns({
                container: '.main-slider',
                ltr: $("html").attr("dir") == 'ltr' ? true : false,
                controlsContainer: "#customize-controls",
                loop: true,
                nav: false,
                mouseDrag: true,
                rewind: false,
                swipeAngle: false,
                autoHeight: true,
                lazyload: true,
                lazyloadSelector: ".tns-lazy",
                speed: 1000,
                autoplay: true,
                autoplayButtonOutput: false,
                autoplayTimeout: 9000,
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
        }
		
		
		 $("#breakingNews").breakingNews({
		  effect    :"slide-v",
		  autoplay  :true,
		  timer   :3000,
		  color   :'darkred'
		});
    });

}(jQuery));