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
	init_home_news_slider();
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

function init_home_news_slider() {
	var slider_autoplay = false;
	var slider_loop = true;
	if (jQuery("#home-news-section .swiper").attr("data-total") > 4) {
		slider_autoplay = {
			delay: 5000,
		};
		slider_loop = false;
	}

	const home_news_slider = new Swiper("#home-news-section .swiper", {
		direction: "horizontal",
		loop: slider_loop,
		autoplay: slider_autoplay,
		slidesPerView: 4,

		// // Navigation arrows
		navigation: {
			nextEl: "#home-news-section .swiper-button-next",
			prevEl: "#home-news-section .swiper-button-prev",
		},
	});
}

function init_homepage_main_slider() {
	console.log("init home main slider");

	var slider_autoplay = false;
	var slider_loop = true;
	if (jQuery(".home-main-slider").attr("data-total") > 1) {
		slider_autoplay = {
			delay: 5000,
		};
		slider_loop = false;
	}

	const homepage_main_slider = new Swiper(".home-main-slider .swiper", {
		direction: "horizontal",
		loop: slider_loop,
		autoplay: slider_autoplay,
		// If we need pagination
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},

		on: {
			init: function () {
				console.log("after swiper init");
				var pause_btn =
					'<button type="button" class="home-slider-pause">' +
					'<svg class="pause" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.0013 18.7097C14.8911 18.7091 18.855 14.7448 18.855 9.85484C18.855 4.96446 14.8905 1 10.0001 1C5.11014 1 1.14592 4.96385 1.1453 9.85371C1.15084 14.7424 5.11256 18.7041 10.0013 18.7097Z" stroke="white" stroke-width="2"/><path fill-rule="evenodd" clip-rule="evenodd" d="M12.2742 6.06445C12.6928 6.06445 13.0322 6.40385 13.0322 6.82252L13.0322 12.887C13.0322 13.3057 12.6928 13.6451 12.2742 13.6451C11.8555 13.6451 11.5161 13.3057 11.5161 12.887L11.5161 6.82252C11.5161 6.40385 11.8555 6.06445 12.2742 6.06445ZM7.7258 6.06452C8.14447 6.06452 8.48386 6.40391 8.48386 6.82258L8.48386 12.8871C8.48386 13.3058 8.14447 13.6452 7.7258 13.6452C7.30713 13.6452 6.96774 13.3058 6.96774 12.8871L6.96774 6.82258C6.96774 6.40391 7.30713 6.06452 7.7258 6.06452Z" fill="white"/></svg>' +
					'<svg class="play" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.855 20.71C5.42062 20.71 1 16.2889 1 10.855C1 5.42101 5.42062 0.999962 10.855 0.999962C16.2894 0.999962 20.71 5.42101 20.71 10.855C20.71 16.2889 16.2894 20.71 10.855 20.71ZM10.855 1.8212C5.87376 1.8212 1.82124 5.87372 1.82124 10.855C1.82124 15.8362 5.87376 19.8887 10.855 19.8887C15.8362 19.8887 19.8888 15.8362 19.8888 10.855C19.8888 5.87372 15.8362 1.8212 10.855 1.8212Z" fill="white" stroke="white"/><path d="M14.7726 11.2001L9.02391 14.8957C8.89799 14.9779 8.73519 14.9824 8.60527 14.911C8.47292 14.8388 8.39111 14.7008 8.39111 14.5505V7.15922C8.39111 7.00885 8.47292 6.87088 8.60527 6.7987C8.66621 6.7654 8.73438 6.74858 8.80175 6.74858C8.87874 6.74858 8.95654 6.77025 9.02391 6.81395L14.7726 10.5096C14.8898 10.5849 14.9611 10.7153 14.9611 10.8548C14.9611 10.9944 14.8898 11.1247 14.7726 11.2001ZM9.21235 7.91151V13.7982L13.791 10.8548L9.21235 7.91151Z" fill="white" stroke="white" stroke-width="0.5"/></svg>' +
					"</button>";

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
