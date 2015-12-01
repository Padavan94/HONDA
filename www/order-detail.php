<?php include("templates/header.php") ?>
<?php include("templates/navigation.php") ?>
<?php include("templates/main-navigation.php") ?>
<div class="main-wrapper clearfix">
	<div class="container">

		<?php include("templates/catalog-top-slider.php") ?>

		<div class="catalog-wrapper clearfix">

			<div class="col-md-9 right-catalog">
				
				<!-- order-detail start -->
				<div class="order-detail">
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
								<div class="order-detail__submit--capcha col-md-3">
									<input type="text">
									<img src="img/capcha.png" alt="capcha">
								</div>
								<div class="order-detail__submit--button col-md-9">
									<input type="submit" value="Отправить запрос">
								</div>
								
							</div>
						</form>
					</div>
				</div>
				<!-- order-detail end -->

				<!-- order-test drive start -->
				<div class="order-detail">
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
								<div class="order-detail__submit--capcha col-md-3">
									<input type="text">
									<img src="img/capcha.png" alt="capcha">
								</div>
								<div class="order-detail__submit--button col-md-9">
									<input type="submit" value="Отправить запрос">
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- order-testdrive end -->
				




				<!-- callback start -->
				<div class="order-detail">
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
								<div class="order-detail__submit--capcha col-md-3">
									<input type="text">
									<img src="img/capcha.png" alt="capcha">
								</div>
								<div class="order-detail__submit--button col-md-9">
									<input type="submit" value="Отправить запрос">
								</div>
								
							</div>
						</form>
					</div>
				</div>
				<!-- callback end -->

				<!-- callback start -->
				<div class="thank-box">
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




			</div>	
		</div>
	</div>
</div>
<?php include("templates/fortuna-group.php") ?>
<?php include("templates/footer.php") ?>
<?php include("templates/scripts.php") ?>
