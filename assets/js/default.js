$(function() {
	$("body").vegas({
		slides: [
			{ src: "assets/images/bg/bg1.jpg" },
			{ src: "assets/images/bg/bg2.jpg" },
			{ src: "assets/images/bg/bg3.jpg" }
		],
		animation: 'kenburnsUp',
		transition: 'zoomOut',
		overlay: 'libs/vegas-2.2.1/overlays/02.png'
	});
	$('.nav-hash').onePageNav({
		changeHash: true,
		scrollSpeed: 1200,
		scrollThreshold: 0.5,
		easing: 'easeInOutExpo',
		filter: ':not(.external)'
	});
}(jQuery));
