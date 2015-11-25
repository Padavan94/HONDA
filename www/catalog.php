<?php include("templates/header.php") ?>
<?php include("templates/navigation.php") ?>
<?php include("templates/main-navigation.php") ?>
<div class="main-wrapper clearfix">
	<div class="container">
		<?php include("templates/catalog-top-slider.php") ?>
		<div class="catalog-wrapper clearfix">
			<div class="col-md-3 left-sidebar">
				<ul class="sidebar" id="menu">
					<li class="">
						<a href="#" aria-expanded="true">
							<span class="sidebar-nav-item-icon fa fa-github fa-lg"></span>
							<span class="sidebar-nav-item">metisMenu</span>
							<span class="fa arrow"></span>
						</a>
						<ul aria-expanded="false" class="collapse" style="height: 0px;">
							<li>
								<a href="https://github.com/onokumus/metisMenu">
									<span class="sidebar-nav-item-icon fa fa-code-fork"></span>
									Fork
								</a>
							</li>
							<li>
								<a href="https://github.com/onokumus/metisMenu">
									<span class="sidebar-nav-item-icon fa fa-star"></span>
									Star
								</a>
							</li>
							<li>
								<a href="https://github.com/onokumus/metisMenu/issues">
									<span class="sidebar-nav-item-icon fa
									fa-exclamation-triangle"></span>
									Issues
								</a>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="#" aria-expanded="false">Menu 0 <span class="fa
						arrow"></span></a>
						<ul aria-expanded="false" class="collapse" style="height: 0px;">
							<li><a href="#">item 0.1</a></li>
							<li><a href="#">item 0.2</a></li>
							<li><a href="http://onokumus.com">onokumus</a></li>
							<li><a href="#">item 0.4</a></li>
						</ul>
					</li>
					<li class="">
						<a href="#" aria-expanded="false">Menu 1 <span class="glyphicon
						arrow"></span></a>
						<ul aria-expanded="false" class="collapse" style="height: 0px;">
							<li><a href="#">item 1.1</a></li>
							<li><a href="#">item 1.2</a></li>
							<li class="">
								<a href="#" aria-expanded="true">Menu 1.3 <span class="fa
								plus-times"></span></a>
								<ul aria-expanded="false" class="collapse" style="height: 0px;">
									<li><a href="#">item 1.3.1</a></li>
									<li><a href="#">item 1.3.2</a></li>
									<li><a href="#">item 1.3.3</a></li>
									<li><a href="#">item 1.3.4</a></li>
								</ul>
							</li>
							<li><a href="#">item 1.4</a></li>
							<li class="">
								<a href="#" aria-expanded="false">Menu 1.5 <span class="fa
								plus-minus"></span></a>
								<ul aria-expanded="false" class="collapse" style="height: 0px;">
									<li><a href="#">item 1.5.1</a></li>
									<li><a href="#">item 1.5.2</a></li>
									<li><a href="#">item 1.5.3</a></li>
									<li><a href="#">item 1.5.4</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="#" aria-expanded="true">Menu 2 <span class="glyphicon
						arrow"></span></a>
						<ul aria-expanded="false" class="collapse" style="height: 0px;">
							<li><a href="#">item 2.1</a></li>
							<li><a href="#">item 2.2</a></li>
							<li><a href="#">item 2.3</a></li>
							<li><a href="#">item 2.4</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="col-md-9 right-catalog">
				<div class="top-filter-tape">
					<a href="#" class="top-filter-tape__filter">
						<img class="svg" src="img/kahel.svg" alt="svg">Список
					</a>
					<a href="#" class="top-filter-tape__filter">
						<img class="svg" src="img/squares.svg" alt="svg">Плитка
					</a>
					<a href="#" class="top-filter-tape__filter">
						По цене
					</a>
					<a href="#" class="top-filter-tape__filter">
						По мощности
					</a>
					
				</div>
				<div class="top-filter-tape">
					<div class="top-filter-tape__filter">asdas</div>
					<div class="top-filter-tape__filter">asdas</div>
					<div class="top-filter-tape__filter">asdas</div>
					<div class="top-filter-tape__filter">asdas</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("templates/footer.php") ?>
<?php include("templates/scripts.php") ?>