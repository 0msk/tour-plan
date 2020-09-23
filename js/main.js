var mySwiper = new Swiper('.swiper-container', {
	// лооп отвечает за перелистывание слайдов без ограничений
	loop: true,
	// сами кнопки перелистывания
	navigation: {
		nextEl: '.slider-button__next',
		prevEl: '.slider-button__prev',
	},
	// переключение слайдов стрелками клавиатуры
	keyboard: {
		enabled: true,
		onlyInViewport: false,
	},
})