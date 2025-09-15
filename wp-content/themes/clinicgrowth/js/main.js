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

	// ================================================================
	//			1.5 Video Play Pop
	// ================================================================

	const openCalendarBooking = () => {
		$("#calendar-booking").fadeIn(200);
	};
	const closeCalendarBooking = () => {
		$("#calendar-booking").fadeOut(200);
	};
	$(document).on("click", ".open-calendar-booking", function (e) {
		openCalendarBooking();
	});
	$(".close-calendar-booking").on("click", function () {
		closeCalendarBooking();
	});
	$(document).on("click", "#calendar-booking .wrap", function (e) {
		if (e.target == this) {
			closeCalendarBooking();
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
		$(".transparent-menu-active").fadeIn(200);
		menuOpen = true;
	};

	const closeMenu = () => {
		$("nav#navigations").removeClass("open");
		$(".transparent-menu-active").fadeOut(200);
		menuOpen = false;
	};

	$(".transparent-menu-active").on("click", function () {
		closeMenu();
	});

	// ================================================================
	//			1.5 FAQs
	// ================================================================

	$("#testimonials-slider").flexslider({
		animation: "slide",
		controlsContainer: "#testimonials-slider",
		animationLoop: true,
		slideshow: true,
		slideshowSpeed: 4000,
		animationSpeed: 400,
		pauseOnHover: false,
		pauseOnAction: true,
		touch: true,
		controlNav: true,
		touch: true,
		maxItems: 1,
		minItems: 1,
		move: 1,
		itemMargin: 0,
		directionNav: false,
		useCSS: false,
		keyboard: true,
		multipleKeyboard: false,
	});

	// ================================================================
	//			1.6 FAQs Open Close
	// ================================================================

	$(document).on("click", ".faq-one .question", function (e) {
		const el = $(this).parent().eq(0).find(".answer");
		el.slideToggle(200);
		$(this).toggleClass("open");
	});
});
