(function () {
	'use strict';


	// Cube links
	$('.sliver.design').click(function () {
		window.location.href = '/content/about/';                     // on div click, redirect
	});

	$('.sliver.print').click(function () {
		window.location.href = '/content/web/';                     // on div click, redirect
	});

	$('.sliver.web').click(function () {
		window.location.href = '/content/misc/';                     // on div click, redirect
	});

	// Instagram pics
		 // low_resolution(306), thumbnail(150), standard_resoltuion(612). Default is thumbnail
	$("#instagram").jqinstapics({
		"count": 6,
		"size" : "thumbnail"
	});

	// Magnific single
		$('.image-popup-fit-width').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			image: {
				verticalFit: false
			}
		});
		// Group
		$('.others').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			}
		});

})();