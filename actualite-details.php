<?php
include 'layouts/navbar.php';
include 'controllers/showActualiteContentAction.php';
?>

<!-- actualite Details Hero Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="breadcrumb__text">
					<h2><?= $actualite_titre ?></h2>
					<div class="breadcrumb__option">
						<a href="./index.php">Accueil</a>
						<a href="./actualite.php">Actualités</a>
						<span><?= $actualite_titre ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- actualite Details Hero End -->

<!-- actualite Details Section Begin -->
<section class="actualite-details spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-5 order-md-1 order-2">
				<div class="actualite__sidebar">
					<div class="actualite__sidebar__search">
						<form action="#">
							<input type="text" placeholder="Recherche ...">
							<button type="submit"><span class="icon_search"></span></button>
						</form>
					</div>
					<div class="actualite__sidebar__item">
						<h4>Categories</h4>
						<ul>
							<li><a href="#">All</a></li>
							<li><a href="#">Beauty (20)</a></li>
							<li><a href="#">Food (5)</a></li>
							<li><a href="#">Life Style (9)</a></li>
							<li><a href="#">Travel (10)</a></li>
						</ul>
					</div>
					<div class="actualite__sidebar__item">
						<h4>Recent News</h4>
						<div class="actualite__sidebar__recent">
							<a href="#" class="actualite__sidebar__recent__item">
								<div class="actualite__sidebar__recent__item__pic">
									<img src="img/actualite/sidebar/sr-1.jpg" alt="">
								</div>
								<div class="actualite__sidebar__recent__item__text">
									<h6>09 Kinds Of Vegetables<br /> Protect The Liver</h6>
									<span>MAR 05, 2019</span>
								</div>
							</a>
							<a href="#" class="actualite__sidebar__recent__item">
								<div class="actualite__sidebar__recent__item__pic">
									<img src="img/actualite/sidebar/sr-2.jpg" alt="">
								</div>
								<div class="actualite__sidebar__recent__item__text">
									<h6>Tips You To Balance<br /> Nutrition Meal Day</h6>
									<span>MAR 05, 2019</span>
								</div>
							</a>
							<a href="#" class="actualite__sidebar__recent__item">
								<div class="actualite__sidebar__recent__item__pic">
									<img src="img/actualite/sidebar/sr-3.jpg" alt="">
								</div>
								<div class="actualite__sidebar__recent__item__text">
									<h6>4 Principles Help You Lose <br />Weight With Vegetables</h6>
									<span>MAR 05, 2019</span>
								</div>
							</a>
						</div>
					</div>
					<div class="actualite__sidebar__item">
						<h4>Recherche par</h4>
						<div class="actualite__sidebar__item__tags">
							<a href="#">Apple</a>
							<a href="#">Beauty</a>
							<a href="#">Vegetables</a>
							<a href="#">Fruit</a>
							<a href="#">Healthy Food</a>
							<a href="#">Lifestyle</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-7 order-md-1 order-1">
				<div class="actualite__details__text">
					<img src="img/actualite/details/details-pic.jpg" alt="">
					<?= $actualite_contenu ?>
				</div>
				<div class="actualite__details__content">
					<div class="row">
						<div class="col-lg-6">
							<div class="actualite__details__author">
								<div class="actualite__details__author__pic">
									<img src="img/actualite/details/details-author.jpg" alt="">
								</div>
								<div class="actualite__details__author__text">
									<h6>Michael Scofield</h6>
									<span>Admin</span>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="actualite__details__widget">
								<ul>
									<li><span>Categories:</span> Food</li>
									<li><span>Tags:</span> All, Trending, Cooking, Healthy Food, Life Style</li>
								</ul>
								<div class="actualite__details__social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- actualite Details Section End -->

<!-- Related actualite Section Begin -->
<section class="related-actualite spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title related-actualite-title">
					<h2>Post You May Like</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="actualite__item">
					<div class="actualite__item__pic">
						<img src="img/actualite/actualite-1.jpg" alt="">
					</div>
					<div class="actualite__item__text">
						<ul>
							<li><i class="fa fa-calendar-o"></i> May 4,2019</li>
							<li><i class="fa fa-comment-o"></i> 5</li>
						</ul>
						<h5><a href="#">Cooking tips make cooking simple</a></h5>
						<p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="actualite__item">
					<div class="actualite__item__pic">
						<img src="img/actualite/actualite-2.jpg" alt="">
					</div>
					<div class="actualite__item__text">
						<ul>
							<li><i class="fa fa-calendar-o"></i> May 4,2019</li>
							<li><i class="fa fa-comment-o"></i> 5</li>
						</ul>
						<h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
						<p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="actualite__item">
					<div class="actualite__item__pic">
						<img src="img/actualite/actualite-3.jpg" alt="">
					</div>
					<div class="actualite__item__text">
						<ul>
							<li><i class="fa fa-calendar-o"></i> May 4,2019</li>
							<li><i class="fa fa-comment-o"></i> 5</li>
						</ul>
						<h5><a href="#">Visit the clean farm in the US</a></h5>
						<p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Related actualite Section End -->

<?php include 'layouts/footer.php'; ?>