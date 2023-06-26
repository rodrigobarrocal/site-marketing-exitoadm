$(
	(function() {
		new WOW().init();
		$(".cases-carousel").owlCarousel({
			items: 1,
			loop: true,
			autoplay: true,
			autoplayTimeout: 5500,
			autoplayHoverPause: true,
			autoplaySpeed: 2500,
			smartSpeed: 2500
		});
		$(".clients-carousel").owlCarousel({
			items: 6,
			loop: true,
			autoWidth: true,
			autoplay: true,
			autoplayTimeout: 100,
			autoplayHoverPause: false,
			autoplaySpeed: 1500,
			smartSpeed: 100,
			mouseDrag: false,
			touchDrag: false,
			dots: false,
			center: true,
			margin: 30
		});
		$(".partners-carousel").owlCarousel({
			items: 6,
			loop: true,
			autoWidth: true,
			autoplay: true,
			autoplayTimeout: 100,
			autoplayHoverPause: false,
			autoplaySpeed: 1500,
			smartSpeed: 100,
			mouseDrag: false,
			touchDrag: false,
			dots: false,
			center: true,
			margin: 30
		});
		var $contactForm = $("#contactForm");
		$contactForm.submit(function(event) {
			/* Act on the event */
			event.preventDefault();
			$.ajax({
				url: $contactForm.attr("action"),
				type: "POST",
				data: $contactForm.serialize(),
				dataType: "json",
				success: function(response) {
					if (response.result.code === 0) {
						toastr.success(response.result.message);
					} else {
						toastr.error(response.result.message);
					}
				}
			});
		});
	})(jQuery)
);
