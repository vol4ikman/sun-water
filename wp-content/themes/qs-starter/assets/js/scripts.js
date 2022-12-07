jQuery(document).ready(function () {
	// accessible contact form 7 focus validation
	// list of contact form 7 DOM events: https://contactform7.com/dom-events/
	var cf7_form = jQuery(".wpcf7");
	cf7_form.on("wpcf7invalid ", function (event) {
		jQuery(this).find(".wpcf7-not-valid").first().focus();
	});

	// accessibility handle browser zoom level
	jQuery(window).resize(function () {
		var browserZoomLevel = Math.round(window.devicePixelRatio * 100);
		console.log(browserZoomLevel);
		if (browserZoomLevel < 401) {
			jQuery("body").removeClass(
				"zoom-level-90 zoom-level-100 zoom-level-110 zoom-level-120 zoom-level-130 zoom-level-140 zoom-level-150 zoom-level-160 zoom-level-170 zoom-level-180 zoom-level-190 zoom-level-200 zoom-level-210 zoom-level-220 zoom-level-230 zoom-level-240 zoom-level-250 zoom-level-260 zoom-level-270 zoom-level-280 zoom-level-290 zoom-level-300 zoom-level-310 zoom-level-320 zoom-level-330 zoom-level-340 zoom-level-350 zoom-level-360 zoom-level-370 zoom-level-380 zoom-level-390 zoom-level-400"
			);
			jQuery("body").addClass("zoom-level-" + browserZoomLevel);
		}
	});

	jQuery(".contrast-button").click(function (e) {
		e.preventDefault();
		jQuery("body").toggleClass("contrast-mode");
	});

	init_homepage_main_slider();
	init_news_bar();
});

function init_news_bar() {
	if (jQuery("#news-bar").length && jQuery(".twitter-scroll").length) {
		var news_bar = jQuery(".twitter-scroll").marquee({
			duration: 15000,
			pauseOnHover: false,
			direction: "right",
		});

		jQuery(".pause-news-bar button").click(function (e) {
			e.preventDefault();
			if (!jQuery(this).hasClass("active")) {
				news_bar.marquee("pause");
				jQuery(this).addClass("active");
			} else {
				news_bar.marquee("resume");
				jQuery(this).removeClass("active");
			}
		});
	}
}

function init_homepage_main_slider() {
	console.log("init home main slider");

	const homepage_main_slider = new Swiper(".home-main-slider .swiper", {
		// Optional parameters
		direction: "horizontal",
		loop: true,
		autoplay: {
			delay: 5000,
		},
		// If we need pagination
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},

		on: {
			init: function () {
				console.log("after swiper init");
				var pause_btn =
					'<button type="button" class="home-slider-pause"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.0013 18.7097C14.8911 18.7091 18.855 14.7448 18.855 9.85484C18.855 4.96446 14.8905 1 10.0001 1C5.11014 1 1.14592 4.96385 1.1453 9.85371C1.15084 14.7424 5.11256 18.7041 10.0013 18.7097Z" stroke="white" stroke-width="2"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12.2742 6.06445C12.6928 6.06445 13.0322 6.40385 13.0322 6.82252L13.0322 12.887C13.0322 13.3057 12.6928 13.6451 12.2742 13.6451C11.8555 13.6451 11.5161 13.3057 11.5161 12.887L11.5161 6.82252C11.5161 6.40385 11.8555 6.06445 12.2742 6.06445ZM7.7258 6.06452C8.14447 6.06452 8.48386 6.40391 8.48386 6.82258L8.48386 12.8871C8.48386 13.3058 8.14447 13.6452 7.7258 13.6452C7.30713 13.6452 6.96774 13.3058 6.96774 12.8871L6.96774 6.82258C6.96774 6.40391 7.30713 6.06452 7.7258 6.06452Z" fill="white"/></svg></button>';

				jQuery(".home-main-slider .swiper-pagination").prepend(
					pause_btn
				);

				jQuery(".home-slider-pause").click(function (e) {
					e.preventDefault();
					if (!jQuery(this).hasClass("paused")) {
						homepage_main_slider.autoplay.stop();
						jQuery(this).addClass("paused");
					} else {
						homepage_main_slider.autoplay.start();
						jQuery(this).removeClass("paused");
					}
				});
			},
		},

		// // Navigation arrows
		// navigation: {
		// 	nextEl: ".swiper-button-next",
		// 	prevEl: ".swiper-button-prev",
		// },

		// // And if we need scrollbar
		// scrollbar: {
		// 	el: ".swiper-scrollbar",
		// },
	});
}
