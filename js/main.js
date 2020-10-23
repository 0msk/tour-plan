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
var menuButton = document.querySelector(".menu-button");
menuButton.addEventListener("click", function () {
	// выводит в консоль текст при клике по бургеру
	console.log("Клик по кнопке меню");
	// при клике по бургеру навешивает модификатор или убирает его
	document
		.querySelector(".navbar-bottom")
		.classList.toggle("navbar-bottom__visible");
});