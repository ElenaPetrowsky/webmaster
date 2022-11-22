<?php
require 'controllers/showProductsAction.php';
require 'layouts/navbar.php';
?>

<!-- Hero Section Begin -->
<section class="hero hero-normal">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="hero__categories">
					<div class="hero__categories__all">
						<i class="fa fa-bars"></i>
						<span>Catégories</span>
					</div>
					<ul>
						<li><a href="#">Fresh Meat</a></li>
						<li><a href="#">Vegetables</a></li>
						<li><a href="#">Fruit & Nut Gifts</a></li>
						<li><a href="#">Fresh Berries</a></li>
						<li><a href="#">Ocean Foods</a></li>
						<li><a href="#">Butter & Eggs</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="hero__search">
					<div class="hero__search__form">
						<form action="#">
							<input type="text" placeholder="Que voulez-vous ?">
							<button type="submit" class="site-btn">Rechercher</button>
						</form>
					</div>
					<div class="header__cart">
						<ul>
							<li><a href="./favoris.php"><i class="fa fa-heart"></i> <span>1</span></a></li>
							<li><a href="./panier.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
						</ul>
						<div class="header__cart__price">Total : <span>150 FCFA</span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<div class="breadcrumb__text">
					<h2>Nos offres</h2>
					<div class="breadcrumb__option">
						<a href="./index.php">Accueil</a>
						<span>Nos offres</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-5">
				<div class="sidebar">
					<div class="sidebar__item">
						<h4>Catégories</h4>
						<ul>
							<li><a href="#">Légumes</a></li>
							<li><a href="#">Fruits</a></li>
							<li><a href="#">Mode</a></li>
							<li><a href="#">Boissons</a></li>
							<li><a href="#">Electronique</a></li>
							<li><a href="#">Mobilier</a></li>
						</ul>
					</div>
					<div class="sidebar__item">
						<h4>Prix</h4>
						<div class="price-range-wrap">
							<div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="540">
								<div class="ui-slider-range ui-corner-all ui-widget-header"></div>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
							</div>
							<div class="range-slider">
								<div class="price-input">
									<input type="text" id="minamount">
									<input type="text" id="maxamount">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-7">
				<!-- produits en solde -->
				<div class="product__discount">
					<div class="section-title product__discount__title">
						<h2>En solde</h2>
					</div>
					<div class="row">
						<!-- carousel des soldes -->
						<div class="product__discount__slider owl-carousel">
							<div class="col-lg-4">
								<div class="product__discount__item">
									<div class="product__discount__item__pic set-bg" data-setbg="img/product/discount/pd-1.jpg">
										<div class="product__discount__percent">-20%</div>
										<ul class="product__item__pic__hover">
											<li><a href="#"><i class="fa fa-heart"></i></a></li>
											<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
										</ul>
									</div>
									<div class="product__discount__item__text">
										<span>Dried Fruit</span>
										<h5><a href="./produit-details.php">Raisin’n’nuts</a></h5>
										<div class="product__item__price">30.00 FCFA <span>36.00 FCFA</span></div>
									</div>
								</div>
							</div>
						</div>
						<!-- fin carousel -->
					</div>
				</div>

				<!-- filtres -->
				<div class="filter__item">
					<div class="row">
						<div class="col-lg-4 col-md-5">
							<div class="filter__sort">
								<span>Trier par</span>
								<select>
									<option value="0">Nom</option>
									<option value="1">Prix</option>
									<option value="2">Date de publication</option>
								</select>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="filter__found">
								<h6><span>12</span> produits trouvés</h6>
							</div>
						</div>
						<div class="col-lg-4 col-md-3">
							<div class="filter__option">
								<span class="icon_grid-2x2"></span>
								<span class="icon_ul"></span>
							</div>
						</div>
					</div>
				</div>

				<!-- tableau des produits -->
				<div class="row">
					<?php while ($product = $getAllProducts->fetch()) { ?>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="product__item">
								<div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
									<ul class="product__item__pic__hover">
										<li><a href="#"><i class="fa fa-heart"></i></a></li>
										<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
									</ul>
								</div>
								<div class="product__item__text">
									<h6>
										<a href="produit-details.php?id=<?= $product['id']; ?>">
											<?= $product['nom_produit']; ?>
										</a>
									</h6>
									<h5><?= $product['prix_produit']; ?> FCFA</h5>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="product__pagination">
					<a href="#">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#"><i class="fa fa-long-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Product Section End -->

<?php require 'layouts/footer.php'; ?>