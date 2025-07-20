$(function () {
	// ================== Table of Content =====================
	//
	// 		1. Common Javascript
	//			1.1 Loading Effect
	// 			1.2 Move to the Block
	//			1.3 Auto Scroll
	//			1.4 Escape Press
	//			1.5 Menu Open / Close
	//
	// ============================================================

	// =======================================
	//			1. Common Javascript
	// =======================================

	// ================================================================
	//			1.1 Loading Effect
	// ================================================================

	// ================================================================
	//			1.2 Move to the Block
	// ================================================================

	$('a[href^="#"]').on("click", function (e) {
		e.preventDefault();
		var target = this.hash;
		var $target = $(target);
		if (target) {
			$("html, body")
				.stop()
				.animate(
					{
						scrollTop: $target.offset().top - 0,
					},
					"slow"
				);
		}
	});

	// ================================================================
	//			1.3 Auto Scroll
	// ================================================================

	if (location.hash) {
		var hash = location.hash;
		window.scroll(0, 0);
		$("a[href=" + hash + "]").click();
	}

	// ================================================================
	//			1.4 Escape Press
	// ================================================================

	$(document).keyup(function (e) {
		if (e.keyCode == 27) {
			closeEnquiryForm();
		}
	});

	var stickyNav = function () {
		var scrollTop = $(window).scrollTop();
		if (scrollTop > 0) {
			$("header").addClass("fixed");
		} else {
			$("header").removeClass("fixed");
		}
	};

	$(window).on("load scroll", function () {
		stickyNav();
	});

	$(document).on("click", "#go-to-top", function (e) {
		window.scrollTo({
			top: 0,
			behavior: "smooth",
		});
	});

	// ================================================================
	//			1.5 Notice Pop Up
	// ================================================================

	const openNoticePop = () => {
		$("#notice1").fadeIn(200);
	};
	const closeNoticePop = () => {
		$("#notice1").fadeOut(200);
	};
	$(document).on("click", ".open-notice1", function (e) {
		openNoticePop();
	});
	$(".close-notice1").on("click", function () {
		closeNoticePop();
	});
	$(document).on("click", "#notice1 .wrap", function (e) {
		if (e.target == this) {
			closeNoticePop();
		}
	});

	const openNoticePop2 = () => {
		$("#notice2").fadeIn(200);
	};
	const closeNoticePop2 = () => {
		$("#notice2").fadeOut(200);
	};
	$(document).on("click", ".open-notice2", function (e) {
		openNoticePop2();
	});
	$(".close-notice2").on("click", function () {
		closeNoticePop2();
	});
	$(document).on("click", "#notice2 .wrap", function (e) {
		if (e.target == this) {
			closeNoticePop2();
		}
	});

	// ================================================================
	//			1.5 Video Play Pop
	// ================================================================

	const openPlayVideo = (url) => {
		$("#video-player").fadeIn(200);
		const t = $("#video-player video");
		t.attr("src", url);
	};
	const closePlayVideo = () => {
		const t = $("#video-player video");
		t.attr("src", "");
		$("#video-player").fadeOut(200);
	};
	$(document).on("click", ".play-video", function (e) {
		openPlayVideo(this.getAttribute("data-video-url"));
	});
	$(".close-video").on("click", function () {
		closePlayVideo();
	});
	$(document).on("click", "#video-player .wrap", function (e) {
		if (e.target == this) {
			closePlayVideo();
		}
	});

	// ================================================================
	//			1.5 Menu Open / Close
	// ================================================================

	var menuOpen = false;
	$(".menu-btn").on("click", function () {
		if (menuOpen) {
			closeMenu();
		} else {
			openMenu();
		}
	});

	const openMenu = () => {
		$("nav#navigations").addClass("open");
		$(".transparentMenuActive").fadeIn(200);
		menuOpen = true;
	};

	const closeMenu = () => {
		$("nav#navigations").removeClass("open");
		$(".transparentMenuActive").fadeOut(200);
		menuOpen = false;
	};

	$(".transparentMenuActive").on("click", function () {
		closeMenu();
	});

	// ================================================================
	//			1.5 FAQs
	// ================================================================

	$(".faqs .all .one .title").on("click", function () {
		$(this).parent().find(".desc").slideToggle(200);
		$(this).parent().find(".arr").toggleClass("arr-open");
		$(this).find(".t").toggleClass("t-active");
		$(this).parent().eq(0).find(".con").slideToggle(200);
	});

	$(".gallery-single .row .one").on("click", function () {
		$("#gallery-slider").css({ display: "flex" });
		$("#sliders").flexslider({
			animation: "slide",
			controlsContainer: "#sliders",
			animationLoop: true,
			slideshow: true,
			slideshowSpeed: 4000,
			animationSpeed: 400,
			pauseOnHover: false,
			pauseOnAction: true,
			touch: true,
			controlNav: false,
			touch: true,
			maxItems: 1,
			minItems: 1,
			move: 1,
			itemMargin: 0,
			directionNav: true,
			useCSS: false,
			keyboard: false,
			multipleKeyboard: false,
		});
	});

	$("#gallery-slider .wrap .box .close").on("click", function () {
		$("#gallery-slider").css({ display: "none" });
	});
});
