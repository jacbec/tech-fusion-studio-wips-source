jQuery(function($) {
	//scrollspy
	$('[data-spy="scroll"]').each(function () {
		var $spy = $(this).scrollspy('refresh')
	});

	// Main Carousel
	$(function(){
		$('#mainCarousel.carousel').carousel({
			interval: 10000,
			pause: false
		});
	});

	// Cool Carousel
	$(function() {
		var $c = $('#coolCarousel'), $w = $(window);

		$c.carouFredSel({
			align: false,
			items: 10,
			scroll: {
				items: 1,
				duration: 5000,
				timeoutDuration: 0,
				easing: 'linear',
				pauseOnHover: 'immediate'
			}
		});

		$w.bind('resize.example', function() {
			var nw = $w.width();
			if (nw < 990) {
				nw = 990;
			}

			$c.width(nw * 3);
			$c.parent().width(nw);

		}).trigger('resize.example');
	});
});
