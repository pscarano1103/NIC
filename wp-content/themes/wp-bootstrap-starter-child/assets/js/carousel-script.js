(function ($) {
		$(document).ready(function(){
		$('.owl-carousel').owlCarousel({
			items:4,
			loop:true,
			margin:30,
			nav:false,
			autoplay: true,
			autoplayTimeout: 2000,
			autoplayHoverPause: true,
			slideBy: 2,
			slideTransition: 'ease-in-out',
			responsive: {
				0: {
					items: 1
				},
				360: {
					items: 2
				},
				1000: {
					items: 4
				}
			}
		});
	});
})(jQuery);