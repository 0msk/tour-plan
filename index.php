<?php include("header.html")?>
	<nav class="breadcrumb">
		<div class="container">
			<ul class="breadcrumb-list">
				<li class="breadcrumb-list__item">
					<a href="#" class="breadcrumb-list__link">Home</a></li>
				<li class="breadcrumb-list__item">
					<a href="#" class="breadcrumb-list__link">Flash Offers</a></li>
				<li class="breadcrumb-list__item">Grand Hilton Hotel</li>
			</ul>
		</div>
		<!-- /.container -->
	</nav>
	<section class="hotel">
		<div class="container">
			<div class="hotel-info">
				<div class="hotel-info__text">
					<div class="hotel-wrapper">
						<div class="stars stars__wrapper">
							<div class="star stars__star"><img class="star__image" src="img/star.svg" alt="Image: star"></div>
							<div class="star stars__star"><img class="star__image" src="img/star.svg" alt="Image: star"></div>
							<div class="star stars__star"><img class="star__image" src="img/star.svg" alt="Image: star"></div>
							<div class="star stars__star"><img class="star__image" src="img/star.svg" alt="Image: star"></div>
							<div class="star stars__star"><img class="star__image" src="img/star.svg" alt="Image: star"></div>
						</div>
						<!-- /.stars__wrapper -->
						<h1 class="hotel-info__name">Grand Hilton hotel</h1>
						<span class="offer hotel-info__offer">Flash Offer</span>
					</div>
					<!-- /.hotel-wrapper -->
					<p class="hotel-description hotel-info__description">Half-Board / All Inclusive + Complimentary Activities +
						Child Stays Free</p>
				</div>
				<!-- /.hotel-info__text -->
				<div class="rating hotel-info__rating">
					<span class="rating__text">User Rattings</span>
					<div class="rating-counter">
						<span class="rating__value">4.5</span>
						<span class="rating__value-max">5</span>
					</div>
					<!-- /.rating-counter -->
				</div>
				<!-- /.rating hotel-info__rating -->
			</div>
			<!-- /.hotel-info -->
			<div class="hotel-grid">
				<div class="swiper-container hotel-slider hotel__slider">
					<div class="swiper-wrapper">
						<div class="swiper-slide hotel-slider__item">
							<img class="hotel-slider__image" src="img/slide-1.jpg" alt="Image: slide">
						</div>
						<div class="swiper-slide hotel-slider__item">
							<img class="hotel-slider__image" src="img/slide-2.jpg" alt="Image: slide">
						</div>
						<div class="swiper-slide hotel-slider__item">
							<img class="hotel-slider__image" src="img/slide-3.jpg" alt="Image: slide">
						</div>
						<div class="swiper-slide hotel-slider__item">
							<img class="hotel-slider__image" src="img/slide-4.jpg" alt="Image: slide">
						</div>
						<div class="swiper-slide hotel-slider__item">
							<img class="hotel-slider__image" src="img/slide-5.jpg" alt="Image: slide">
						</div>
					</div>
					<!-- /.swiper-wrapper -->
					<button class="hotel-slider__button hotel-slider__button__prev"></button>
					<button class="hotel-slider__button hotel-slider__button__next"></button>
				</div>
				<!-- /.swiper-container -->
				<div class="hotel-right">
					<div class="booking">
						<div class="booking__info">
							<div class="booking__price">
								<span class="booking__start">price starts as</span>
								<strong class="booking__pricetag">$ 8,500</strong>
								<span class="booking__per-room">per room / night</span>
							</div>
							<!-- /.booking__price -->
							<div class="booking__room">
								<div class="booking__text">
									<img src="img/user-icon.svg" alt="Icon: user" class="booking__icon">
									<span class="booking__description">2 x Guests</span>
								</div>
								<!-- /.booking__text -->
								<div class="booking__text">
									<img src="img/home-icon.svg" alt="Icon: home" class="booking__icon">
									<span class="booking__description">1 x Room</span>
								</div>
								<!-- /.booking__text -->
							</div>
							<!-- /.booking__room -->
						</div>
						<!-- /.booking__info -->
						<div class="booking__call-center">
							<span class="booking__heading">Quick Booking</span>
							<a class="booking__number" href="tel:12100">
								<img src="img/phone-icon.svg" alt="Icon: phone">
								<span class="booking__num">12100</span>
							</a>
						</div>
						<!-- /.booking__call-center -->
						<button class="button booking-button">View Other Options</button>
					</div>
					<!-- /.booking -->
					<div class="map">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.041275564856!2d98.29254741432139!3d7.890750807948706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30503b7bfcd9f903%3A0xf7065fac1e3d7c48!2sDoubleTree%20by%20Hilton%20Phuket%20Banthai%20Resort!5e0!3m2!1sru!2sru!4v1601052624002!5m2!1sru!2sru"
							width="576" height="213" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
					<!-- /.map -->
				</div>
				<!-- /.hotel-right -->
			</div>
			<!-- /.hotel-grid -->
		</div>
		<!-- /.container -->
	</section>
	<section class="newsletter">
		<div class="newsletter-wrapper">
			<h2 class="newsletter-title newsletter__title">subscribe to our
				<strong class="newsletter-title__strong">Newsletter</strong>
			</h2>
			<form action="send.php" method="POST" class="subscribe newsletter__subscribe">
				<input type="text" class="subscribe__input" placeholder="Your email address" name="email">
				<button class="subscribe__button">Send</button>
			</form>
		</div>
		<!-- /.newsletter-wrapper -->
	</section>
	<section class="reviews">
		<div class="container">
			<h2 class="reviews__title">What people think about us</h2>
			<div class="swiper-container reviews-slider">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="reviews-slider__item">
							<div class="reviews-slider__profile">
								<img src="img/megan-fox.jpg" alt="Megan Fox" class="reviews-slider__avatar">
								<h3 class="reviews-slider__username">Megan Fox</h3>
								<span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
								<div class="reviews-slider__rating">
									<div class="stars__star"><img class="stars__image" src="img/star.svg" alt="Image: star"></div>
									<div class="stars__star"><img class="stars__image" src="img/star.svg" alt="Image: star"></div>
									<div class="stars__star"><img class="stars__image" src="img/star.svg" alt="Image: star"></div>
									<div class="stars__star"><img class="stars__image" src="img/star.svg" alt="Image: star"></div>
									<div class="stars__star"><img class="stars__image" src="img/star.svg" alt="Image: star"></div>
								</div>
								<!-- /.reviews-slider__rating -->
							</div>
							<!-- /.reviews-slider__profile -->
							<p class="reviews-slider__text">It was very nice hotel with cleanliness. Staff behavior was good and
								polite. They welcome us very well. Issue was only
								that Lift was not in working and we were allotted to 3rd floor and amenities articles were in corner of
								gallery which
								were giving bad feeling. Breakfast was good and support of the staff was also very nice. Location is not
								good as per
								atmosphere, it is very nearby most of the popular places but self location in a narrow street is not
								good. Overall it
								was a good experience and could recommend.</p>
						</div>
						<!-- /.reviews-slider__item -->
					</div>
					<!-- /.swiper-slide -->
					<div class="swiper-slide">
						<div class="reviews-slider__item">
							<div class="reviews-slider__profile">
								<img src="img/robert-stell.jpg" alt="Robert Stell" class="reviews-slider__avatar">
								<h3 class="reviews-slider__username">Robert Stell</h3>
								<span class="reviews-slider__date">Stayed 23 Jun, 2020</span>
								<div class="reviews-slider__rating">
									<div class="stars__star"><img class="stars__image" src="img/star.svg" alt="Image: star"></div>
									<div class="stars__star"><img class="stars__image" src="img/star.svg" alt="Image: star"></div>
									<div class="stars__star"><img class="stars__image" src="img/star.svg" alt="Image: star"></div>
									<div class="stars__star"><img class="stars__image" src="img/star.svg" alt="Image: star"></div>
									<div class="stars__star"><img class="stars__image" src="img/star.svg" alt="Image: star"></div>
								</div>
								<!-- /.reviews-slider__rating -->
							</div>
							<!-- /.reviews-slider__profile -->
							<p class="reviews-slider__text">It was very nice hotel with cleanliness. Staff behavior was good and
								polite. They welcome us very well. Issue was only
								that Lift was not in working and we were allotted to 3rd floor and amenities articles were in corner of
								gallery which
								were giving bad feeling. Breakfast was good and support of the staff was also very nice. Location is not
								good as per
								atmosphere, it is very nearby most of the popular places but self location in a narrow street is not
								good. Overall it
								was a good experience and could recommend.</p>
						</div>
						<!-- /.reviews-slider__item -->
					</div>
					<!-- /.swiper-slide -->
					<div class="swiper-slide">
						<div class="reviews-slider__item">
							<div class="reviews-slider__profile">
								<img src="img/elena-ivanova.jpg" alt="Elena Ivanova" class="reviews-slider__avatar">
								<h3 class="reviews-slider__username">Elena Ivanova</h3>
								<span class="reviews-slider__date">Stayed 4 Sep, 2017</span>
								<div class="reviews-slider__rating">
									<div class="stars__star"><img class="stars__image" src="img/star.svg" alt="Image: star"></div>
									<div class="stars__star"><img class="stars__image" src="img/star.svg" alt="Image: star"></div>
									<div class="stars__star"><img class="stars__image" src="img/star.svg" alt="Image: star"></div>
								</div>
								<!-- /.reviews-slider__rating -->
							</div>
							<!-- /.reviews-slider__profile -->
							<p class="reviews-slider__text">Далеко-далеко за словесными горами в стране гласных и согласных живут
								рыбные тексты. Безопасную не по всей рекламных реторический города своего переписывается большой
								предложения дороге страна коварных все скатился, ты, о взгляд всеми lorem составитель, своих диких
								ведущими это себя текста рот что. Семантика возвращайся послушавшись курсивных первую рот?</p>
						</div>
						<!-- /.reviews-slider__item -->
					</div>
					<!-- /.swiper-slide -->
				</div>
				<!-- /.swiper-wrapper -->
				<button class="reviews-slider__button reviews-slider__button__prev"></button>
				<button class="reviews-slider__button reviews-slider__button__next"></button>
			</div>
			<!-- /.reviews-slider -->
		</div>
		<!-- /.container -->
	</section>
	<section class="activities">
		<div class="container">
			<h2 class="activities__title">Other Activities</h2>
			<div class="activities-wrapper">
				<div class="card activities__card">
					<img src="img/activiti-1.jpg" alt="The curious corner of chamarel" class="card__image">
					<h3 class="card__title">The curious corner of&nbsp;chamarel</h3>
					<button class="card__button">Book Now</button>
				</div>
				<!-- /.card -->
				<div class="card activities__card">
					<img src="img/activiti-2.jpg" alt="Gymkhana club golf course" class="card__image">
					<h3 class="card__title">Gymkhana club golf course</h3>
					<button class="card__button">Book Now</button>
				</div>
				<!-- /.card -->
				<div class="card activities__card">
					<img src="img/activiti-3.jpg" alt="Tamarind falls hiking trip - full day" class="card__image">
					<h3 class="card__title">Tamarind falls hiking trip&nbsp;- full day</h3>
					<button class="card__button">Book Now</button>
				</div>
				<!-- /.card -->
				<div class="card activities__card">
					<img src="img/activiti-4.jpg" alt="The blue marine discovery quest" class="card__image">
					<h3 class="card__title">The blue marine discovery quest</h3>
					<button class="card__button">Book Now</button>
				</div>
				<!-- /.card -->
			</div>
			<!-- /.activities-wrappper -->
		</div>
		<!-- /.container -->
	</section>
	<?php include("footer.html")?>