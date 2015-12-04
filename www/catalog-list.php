<?php include("templates/header.php") ?>
<?php include("templates/navigation.php") ?>
<?php include("templates/main-navigation.php") ?>
<div class="main-wrapper clearfix">
	<div class="container">
	
		<?php include("templates/catalog-top-slider.php") ?>

		<div class="catalog-wrapper clearfix">
			<div class="buttons-container">
				<a href="#" class="button-right" >
					<div class="button-right__name">
						Установка <br> <span>ГБО</span>
					</div>
				</a>
				<a href="#" class="button-right button-right--gray-mod">
					<div class="button-right--gray-mod__icon" style="background-image: url('../img/car-bg.png');">
					</div>
					<div class="button-right--gray-mod__name">
						техника с пробегом
					</div>
				</a>
				<a href="#" class="button-right" >
					<div class="button-right__icon" style="background-image: url('../img/pen-bg.png');">
					</div>
					<div class="button-right__name">
						Запиcь на ТО
					</div>
				</a>
				
			</div>
			<!-- left sidebar start -->
			<?php include("templates/left-sidebar.php") ?>
			<!-- left sidebar end -->

			<div class="col-md-9 right-catalog">
				<?php include("templates/filters.php") ?>
				
				<!-- product wrapper start -->	
				<div class="product-tape-wrapper">
					<div class="product-tape clearfix">
						<?php include("templates/product-list.php") ?>
					</div>
					<!-- pagination start -->	
					<nav>
					  <ul class="pagination">
					    <li>
					      <a href="#" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					      </a>
					    </li>
					    <li><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li><a href="#">4</a></li>
					    <li><a href="#">5</a></li>
					    <li><a href="#">6</a></li>
					    <li><a href="#">7</a></li>
					    <li><a href="#">8</a></li>
					    <li><a href="#">9</a></li>
					    <li>
					      <a href="#" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					      </a>
					    </li>
					  </ul>
					</nav>
					<!-- pagination end -->	
				</div>
				<!-- product wrapper end -->
			</div>
		</div>
	</div>
</div>

<?php include("templates/footer.php") ?>
<?php include("templates/scripts.php") ?>
