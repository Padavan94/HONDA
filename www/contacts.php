<?php include("templates/header.php") ?>
<?php include("templates/navigation-mini.php") ?>
<?php include("templates/main-navigation.php") ?>
 <!-- main-wrapper start -->
<div class="main-wrapper clearfix ">
	<div class="container">
		<div class="contact-page clearfix">
			<div class="contact-page__header">
				Автоцентр HONDA на <b>ул. М. Грушевского, 15а,</b> г. Одесса : <br><span class="red">Салон, Сервисный центр</span>
			</div>
			<div class="contact-page__image">
				<img src="img/contact-img.png" alt="contact-img">
			</div>
			<div class="contact-page__descr clearfix">
				<div class="col-md-7 contact-page__descr--left">
					<div class="contact-page__descr--tape">
						<div class="name col-md-3">Отдел продаж:</div>
						<div class="phone col-md-3">(048) 788 18 11</div>
						<div class="mail col-md-5">service@honda-odessa.com</div>
					</div>
					<div class="contact-page__descr--tape">
						<div class="name col-md-3">Отдел запчастей:</div>
						<div class="phone col-md-3">(048) 788 18 11</div>
						<div class="mail col-md-5">service@honda-odessa.com</div>
					</div>
					<div class="contact-page__descr--tape">
						<div class="name col-md-3">Отдел сервиса:</div>
						<div class="phone col-md-3">(048) 788 18 11</div>
						<div class="mail col-md-5">service@honda-odessa.com</div>
					</div>
				</div>
				<div class="col-md-5 contact-page__descr--right">
					<div class="col-md-12 inner-wrapper">
						<div class="row">
							<div class="col-md-4 desc">
								Время работы Сервисного центра:
							</div>
							<div class="col-md-8 time">
								с 8.00 до 20.00
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 desc">
								Время работы Салона:
							</div>
							<div class="col-md-8 time">
								с 9.00 до 19.00 <br>Без обеда и выходных.
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- map start -->
			<div id="map_canvas" style="height:280px"></div>
			<!-- map end -->

			<div class="contact-page__header">
				Салон HONDA на <b>ул. Артиллерийской, 4,</b> г. Одесса
			</div>
			<div class="contact-page__image">
				<img src="img/contact-img2.png" alt="contact-img">
			</div>
			<div class="contact-page__descr clearfix">
				<div class="col-md-7 contact-page__descr--left">
					<div class="contact-page__descr--tape">
						<div class="name col-md-3">Отдел продаж:</div>
						<div class="phone col-md-3">(048) 789 18 11</div>
						<div class="mail col-md-5">art_sales@honda-odessa.com</div>
					</div>
				</div>
				<div class="col-md-5 contact-page__descr--right">
					<div class="col-md-12 inner-wrapper">
						<div class="row">
							<div class="col-md-4 desc">
								Время работы Салона:
							</div>
							<div class="col-md-8 time">
								Понедельник - пятница<br>
								с 9.00 до 18.00 <br>
								Суббота с 9.00 до 16.00<br>
								Воскресенье выходной.
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- map start -->
			<div id="map_canvas_2" style="height:280px"></div>
			<!-- map end -->
		</div>
	</div>
</div>
 <!-- main-wrapper start -->
<?php include("templates/footer.php") ?>
<?php include("templates/scripts.php") ?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>
function initialize()
{
    var latlng = new google.maps.LatLng(46.477466, 30.694711);
    var latlng2 = new google.maps.LatLng(46.450753, 30.736233);
    var myOptions =
    {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var myOptions2 =
    {
        zoom: 15,
        center: latlng2,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    
    var map2 = new google.maps.Map(document.getElementById("map_canvas_2"), myOptions2);

    var myMarker = new google.maps.Marker(
    {
        position: latlng,
        map: map,
        icon: "../img/marker.png"

   });

    var myMarker2 = new google.maps.Marker(
    {
        position: latlng2,
        map: map2,
        icon: "../img/marker.png"

    });
}

$(document).ready(function() {
	initialize();
});
</script> 