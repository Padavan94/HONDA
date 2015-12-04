<?php include("templates/header.php") ?>
<?php include("templates/navigation.php") ?>
<!-- right micro buttons start-->
<div class="buttons-container">
	<a href=".testdrive-popup" class="button-right open-popup" >
		<div class="button-right__icon" style="background-image: url('../img/sedan-bg.png');">
		</div>
		<div class="button-right__name">
			Записаться на Тест Драйв
		</div>
	</a>
	<a href=".order-popup" class="button-right button-right--gray-mod open-popup">
		<div class="button-right--gray-mod__icon" style="background-image: url('../img/set-bg.png');">
		</div>
		<div class="button-right--gray-mod__name">
			Заказать запчасти
		</div>
	</a>
	<a href=".callback-popup" class="button-right open-popup" >
		<div class="button-right__icon" style="background-image: url('../img/phone-bg.png');">
		</div>
		<div class="button-right__name">
			Заказать обратный звонок
		</div>
	</a>
</div>
<!-- right micro buttons end -->

<!-- slider start -->
	<div class="main-slider-wrapper">
		<!-- slider controls start -->	
		<div class="main-slider__control main-slider__prev">
			<img src="img/prev.png" height="26" width="17" alt="prev">
		</div>
		<div class="main-slider__control main-slider__next">
			<img src="img/next.png" height="26" width="17" alt="next">
		</div>
		<!-- slider controls end -->
		<!-- slider init start -->		
		<div class="main-slider">
			<div class="main-slider__slide">
				<img src="img/slide.png" alt="slide">
			</div>
			<div class="main-slider__slide">
				<img src="img/slide.png" alt="slide">
			</div>
			<div class="main-slider__slide">
				<img src="img/slide.png" alt="slide">
			</div>
			<div class="main-slider__slide">
				<img src="img/slide.png" alt="slide">
			</div>
			<div class="main-slider__slide">
				<img src="img/slide.png" alt="slide">
			</div>
		</div>
		<!-- slider init end -->
	</div>
	<!-- slider end -->
	
	<?php include("templates/main-navigation.php") ?>

	<!-- saitro-section start -->
	<div class="saitro-section">
		<div class="saitro-section__block">
			<img src="img/photo.png" height="144" width="340" alt="photo">
			<span class="saitro-section__quote">Жизнь коротка, скорость необходима, чтобы достичь желаемого в ограниченное время, которым мы располагаем.</span>
			<span class="saitro-section__autor">Соитиро Хонда.</span>
		</div>
	</div>
	<!-- saitro-section end -->
	

	<!-- start hidden popups -->
				<div class="order-detail mfp-hide order-popup">
					<div class="order-detail__header">
						Заказать запчасти
					</div>
					<div class="order-detail__body">
						<form action="" class="order-detail__form">
							<div class="order-detail__form--input">
								<input type="text" placeholder="ФИО">
							</div>
							<div class="order-detail__form--input">
								<input type="text" placeholder="Номер телефона">
							</div>
							<div class="order-detail__form--input">
								<input type="text" placeholder="E-mail">
							</div>
							
							<div class="order-detail__form--select">
								<select name="" id="">
									<option value="">Тема сообщения</option>
									<option value="">Тема сообщения</option>
									<option value="">Тема сообщения</option>
									<option value="">Тема сообщения</option>
									<option value="">Тема сообщения</option>
								</select>
							</div>
							<div class="order-detail__important">
								<span >*</span> - Поля, обязательные для заполнения
							</div>
							<div class="order-detail__submit clearfix row">
								<div class="order-detail__submit--button col-md-12">
									<input type="submit" value="Отправить запрос">
								</div>
								
							</div>
						</form>
					</div>
				</div>
				<!-- order-detail end -->

				<!-- order-test drive start -->
				<div class="order-detail mfp-hide testdrive-popup">
					<div class="order-detail__header testdrive__header--mod">
						Заказать тестдрайв
					</div>
					<div class="order-detail__body">
						<form action="" class="order-detail__form">
							<div class="order-detail__form--select">
								<select name="" id="">
									<option value="">Выбирите авто</option>
									<option value="">Выбирите авто</option>
									<option value="">Выбирите авто</option>
									<option value="">Выбирите авто</option>
									<option value="">Выбирите авто</option>
									<option value="">Выбирите авто</option>
								</select>
							</div>
							<div class="order-detail__form--input">
								<input type="text" placeholder="Ваше имя и фамилия">
							</div>
							<div class="order-detail__form--input">
								<input type="text" placeholder="Номер телефона">
							</div>
							<div class="order-detail__form--input">
								<input type="text" placeholder="E-mail">
							</div>
							<div class="order-detail__form--input">
								<input type="text" placeholder="Желаемая дата проведения тест-драйва">
							</div>
							<div class="order-detail__form--input">
								<input type="text" placeholder="Желаемое время проведения тест-драйва">
							</div>
							<div class="order-detail__form--select">
								<select name="" id="">
									<option value="">Тема сообщения</option>
									<option value="">Тема сообщения</option>
									<option value="">Тема сообщения</option>
									<option value="">Тема сообщения</option>
									<option value="">Тема сообщения</option>
								</select>
							</div>
							<div class="order-detail__important">
								<span >*</span> - Поля, обязательные для заполнения
							</div>
							<div class="order-detail__submit clearfix row">
								<div class="order-detail__submit--button col-md-12">
									<input type="submit" value="Отправить запрос">
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- order-testdrive end -->
				
				<!-- callback start -->
				<div class="order-detail mfp-hide callback-popup">
					<div class="order-detail__header callback__header--mod">
						Заказать обратный звонок
					</div>
					<div class="order-detail__body">
						<form action="" class="order-detail__form">
							<div class="order-detail__form--input">
								<input type="text" placeholder="Имя">
							</div>
							<div class="order-detail__form--input">
								<input type="text" placeholder="E-mail">
							</div>
							<div class="order-detail__form--input">
								<input type="text" placeholder="Номер телефона">
							</div>
							<div class="order-detail__form--textarea">
								<textarea name="" id="" placeholder="Текст сообщения"></textarea>
							</div>
							<div class="order-detail__important">
								<span >*</span> - Поля, обязательные для заполнения
							</div>
							<div class="order-detail__submit clearfix row">
								<div class="order-detail__submit--button col-md-12">
									<input type="submit" value="Отправить запрос">
								</div>
								
							</div>
						</form>
					</div>
				</div>
				<!-- callback end -->

				<!-- callback start -->
				<div class="thank-box mfp-hide">
					<div class="thank-box__ty">
						Спасибо за ваш выбор!
					</div>
					<div class="thank-box__message">
						В ближайшее время с<br>Вами свяжется наш менеджер. 
					</div>
					<div class="thank-box__respect">
						<i class="fa fa-map-marker"></i>С уважением, ООО "ФОРТУНА ГРУП ЛТД" М. Грушевского, 15а, ул. Артиллерийская, 4
					</div>
				</div>
				<!-- callback end -->
	<!-- start hidden popups -->

<?php include("templates/fortuna-group.php") ?>
<?php include("templates/footer.php") ?>
<?php include("templates/scripts.php") ?>