<?php include 'layouts/navbar.php'; ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="breadcrumb__text">
					<h2>Actualités</h2>
					<div class="breadcrumb__option">
						<a href="./index.php">Accueil</a>
						<span>Actualités</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Breadcrumb Section End -->

<!-- actualite Section Begin -->
<section class="actualite spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-5">
				<div class="actualite__sidebar">
					<div class="actualite__sidebar__search">
						<form action="#">
							<input type="text" placeholder="Recherche...">
							<button type="submit"><span class="icon_search"></span></button>
						</form>
					</div>
					<div class="actualite__sidebar__item">
						<h4>Catégories</h4>
						<ul>
							<li><a href="#">Tous</a></li>
							<li><a href="#">Beauty (20)</a></li>
							<li><a href="#">Food (5)</a></li>
							<li><a href="#">Life Style (9)</a></li>
							<li><a href="#">Travel (10)</a></li>
						</ul>
					</div>
					<div class="actualite__sidebar__item">
						<h4>Les pépites</h4>
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
				</div>
			</div>
			<div class="col-lg-8 col-md-7">
				<div class="row">
					<?php while ($actualite = $getAllActualites->fetch()) { ?>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="actualite__item">
								<div class="actualite__item__pic">
									<img src="img/actualite/actualite-2.jpg" alt="">
								</div>
								<div class="actualite__item__text">
									<ul>
										<li><i class="fa fa-calendar-o"></i> <?= $actualite['date_actualite']; ?></li>
									</ul>
									<h5><a href="actualite-details.php"><?= $actualite['titre_actualite']; ?></a></h5>
									<p><?= substr($actualite['contenu_actualite'], 0, 100) ; ?></p>
									<a href="./actualite-details.php?id=<?= $actualite['id']; ?>" class="actualite__btn">LIRE PLUS<span class="arrow_right"></span></a>
								</div>
							</div>
						</div>
					<?php } ?>
					<div class="col-lg-12">
						<div class="product__pagination actualite__pagination">
							<a href="#">1</a>
							<a href="#">2</a>
							<a href="#">3</a>
							<a href="#"><i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- actualite Section End -->

<?php include 'layouts/footer.php'; ?>