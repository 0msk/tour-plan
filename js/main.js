var hotelSlider = new Swiper('.hotel-slider', {
	// лооп отвечает за перелистывание слайдов без ограничений
	loop: true,
	// сами кнопки перелистывания
	navigation: {
		nextEl: '.hotel-slider__button__next',
		prevEl: '.hotel-slider__button__prev',
	},
	// переключение слайдов стрелками клавиатуры
	keyboard: {
		enabled: true,
		onlyInViewport: false,
	},
});
var reviewsSlider = new Swiper('.reviews-slider', {
	loop: true,
	navigation: {
		nextEl: '.hotel-slider__button__next',
		prevEl: '.hotel-slider__button__prev',
	},
	keyboard: {
		enabled: true,
		onlyInViewport: false,
	},
});