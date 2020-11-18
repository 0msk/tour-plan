$(document).ready(function () {

	// слайдер hotel
	var hotelSlider = new Swiper('.hotel-slider', {
		// лооп отвечает за перелистывание слайдов без ограничений
		loop: true,
		// кнопки-стрелки перелистывания слайдов
		navigation: {
			nextEl: '.hotel-slider__button__next',
			prevEl: '.hotel-slider__button__prev',
		},
		// переключение слайдов с помощью стрелок на клавиатуре
		keyboard: {
			enabled: true,
			onlyInViewport: false,
		},
	});

	// слайдер reviews
	var reviewsSlider = new Swiper('.reviews-slider', {
		loop: true,
		navigation: {
			nextEl: '.reviews-slider__button__next',
			prevEl: '.reviews-slider__button__prev',
		},
		keyboard: {
			enabled: true,
			onlyInViewport: false,
		},
	});

	// мобильное меню
	var menuButton = $(".menu-button");
	menuButton.on("click", function () {
		// при клике по бургеру навешивает модификатор или убирает его
		$(".navbar-bottom").toggleClass("navbar-bottom__visible");
	});

	// модальное окно
	var modalButton = $("[data-toggle=modal]");
	var closeModalButton = $(".modal__close");
	modalButton.on("click", openModal);
	closeModalButton.on("click", closeModal);

	function openModal() {
		var targetModal = $(this).attr("data-href");
		$(targetModal).find(".modal__overlay").addClass("modal__overlay--visible");
		$(targetModal).find(".modal__dialog").addClass("modal__dialog--visible");
	}
	function closeModal(event) {
		event.preventDefault();
		var modalOverlay = $(".modal__overlay");
		var modalDialog = $(".modal__dialog");
		modalOverlay.removeClass("modal__overlay--visible");
		modalDialog.removeClass("modal__dialog--visible");
	}
});
// 23:28. 26 пункт. отмена класса висибл у мадального окна