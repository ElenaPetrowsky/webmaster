<?php require 'layouts/navbar.php'; ?>

<!-- Hero Section Begin -->
<section class="hero">
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
							<input type="text" placeholder="Que voulez-vous">
							<button type="submit" class="site-btn">RECHERCHER</button>
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
				<div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
					<div class="hero__text">
						<span>FRUIT FRESH</span>
						<h2>Vegetable <br>100% Organic</h2>
						<p>Free Pickup and Delivery Available</p>
						<a href="./offres.php" class="primary-btn">Faîtes vos achats maintenant</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Hero Section End -->

<!-- Categories Section Begin -->
<section class="categories">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title from-actualite__title">
					<h2>Catégories</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="categories__slider owl-carousel">
				<div class="col-lg-3">
					<div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
						<h5><a href="#">Fresh Fruit</a></h5>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="categories__item set-bg" data-setbg="img/categories/cat-2.jpg">
						<h5><a href="#">Dried Fruit</a></h5>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="categories__item set-bg" data-setbg="img/categories/cat-3.jpg">
						<h5><a href="#">Vegetables</a></h5>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpg">
						<h5><a href="#">drink fruits</a></h5>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg">
						<h5><a href="#">drink fruits</a></h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>Nos produits</h2>
				</div>
				<div class="featured__controls">
					<ul>
						<li class="active" data-filter="*">All</li>
						<li data-filter=".oranges">Oranges</li>
						<li data-filter=".fresh-meat">Fresh Meat</li>
						<li data-filter=".vegetables">Vegetables</li>
						<li data-filter=".fastfood">Fastfood</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row featured__filter">
			<div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
				<div class="featured__item">
					<div class="featured__item__pic set-bg" data-setbg="img/featured/feature-1.jpg">
						<ul class="featured__item__pic__hover">
							<li><a href="#"><i class="fa fa-heart"></i></a></li>
							<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
					<div class="featured__item__text">
						<h6><a href="#">Crab Pool Security</a></h6>
						<h5>30.00</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
				<div class="featured__item">
					<div class="featured__item__pic set-bg" data-setbg="img/featured/feature-2.jpg">
						<ul class="featured__item__pic__hover">
							<li><a href="#"><i class="fa fa-heart"></i></a></li>
							<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
					<div class="featured__item__text">
						<h6><a href="#">Crab Pool Security</a></h6>
						<h5>30.00</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
				<div class="featured__item">
					<div class="featured__item__pic set-bg" data-setbg="img/featured/feature-3.jpg">
						<ul class="featured__item__pic__hover">
							<li><a href="#"><i class="fa fa-heart"></i></a></li>
							<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
					<div class="featured__item__text">
						<h6><a href="#">Crab Pool Security</a></h6>
						<h5>30.00</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
				<div class="featured__item">
					<div class="featured__item__pic set-bg" data-setbg="img/featured/feature-4.jpg">
						<ul class="featured__item__pic__hover">
							<li><a href="#"><i class="fa fa-heart"></i></a></li>
							<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
					<div class="featured__item__text">
						<h6><a href="#">Crab Pool Security</a></h6>
						<h5>30.00</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
				<div class="featured__item">
					<div class="featured__item__pic set-bg" data-setbg="img/featured/feature-5.jpg">
						<ul class="featured__item__pic__hover">
							<li><a href="#"><i class="fa fa-heart"></i></a></li>
							<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
					<div class="featured__item__text">
						<h6><a href="#">Crab Pool Security</a></h6>
						<h5>30.00</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
				<div class="featured__item">
					<div class="featured__item__pic set-bg" data-setbg="img/featured/feature-6.jpg">
						<ul class="featured__item__pic__hover">
							<li><a href="#"><i class="fa fa-heart"></i></a></li>
							<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
					<div class="featured__item__text">
						<h6><a href="#">Crab Pool Security</a></h6>
						<h5>30.00</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
				<div class="featured__item">
					<div class="featured__item__pic set-bg" data-setbg="img/featured/feature-7.jpg">
						<ul class="featured__item__pic__hover">
							<li><a href="#"><i class="fa fa-heart"></i></a></li>
							<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
					<div class="featured__item__text">
						<h6><a href="#">Crab Pool Security</a></h6>
						<h5>30.00</h5>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
				<div class="featured__item">
					<div class="featured__item__pic set-bg" data-setbg="img/featured/feature-8.jpg">
						<ul class="featured__item__pic__hover">
							<li><a href="#"><i class="fa fa-heart"></i></a></li>
							<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
						</ul>
					</div>
					<div class="featured__item__text">
						<h6><a href="#">Crab Pool Security</a></h6>
						<h5>30.00</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Featured Section End -->

<!-- Latest Product Section Begin -->
<section class="latest-product spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="latest-product__text">
					<h4>Derniers ajouts</h4>
					<div class="latest-product__slider owl-carousel">
						<div class="latest-prdouct__slider__item">
							<a href="#" class="latest-product__item">
								<div class="latest-product__item__pic">
									<img src="img/latest-product/lp-1.jpg" alt="">
								</div>
								<div class="latest-product__item__text">
									<h6>Crab Pool Security</h6>
									<span>30.00</span>
								</div>
							</a>
							<a href="#" class="latest-product__item">
								<div class="latest-product__item__pic">
									<img src="img/latest-product/lp-2.jpg" alt="">
								</div>
								<div class="latest-product__item__text">
									<h6>Crab Pool Security</h6>
									<span>30.00</span>
								</div>
							</a>
							<a href="#" class="latest-product__item">
								<div class="latest-product__item__pic">
									<img src="img/latest-product/lp-3.jpg" alt="">
								</div>
								<div class="latest-product__item__text">
									<h6>Crab Pool Security</h6>
									<span>30.00</span>
								</div>
							</a>
						</div>
						<div class="latest-prdouct__slider__item">
							<a href="#" class="latest-product__item">
								<div class="latest-product__item__pic">
									<img src="img/latest-product/lp-1.jpg" alt="">
								</div>
								<div class="latest-product__item__text">
									<h6>Crab Pool Security</h6>
									<span>30.00</span>
								</div>
							</a>
							<a href="#" class="latest-product__item">
								<div class="latest-product__item__pic">
									<img src="img/latest-product/lp-2.jpg" alt="">
								</div>
								<div class="latest-product__item__text">
									<h6>Crab Pool Security</h6>
									<span>30.00</span>
								</div>
							</a>
							<a href="#" class="latest-product__item">
								<div class="latest-product__item__pic">
									<img src="img/latest-product/lp-3.jpg" alt="">
								</div>
								<div class="latest-product__item__text">
									<h6>Crab Pool Security</h6>
									<span>30.00</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="latest-product__text">
					<h4>Les mieux notés</h4>
					<div class="latest-product__slider owl-carousel">
						<div class="latest-prdouct__slider__item">
							<a href="#" class="latest-product__item">
								<div class="latest-product__item__pic">
									<img src="img/latest-product/lp-1.jpg" alt="">
								</div>
								<div class="latest-product__item__text">
									<h6>Crab Pool Security</h6>
									<span>30.00</span>
								</div>
							</a>
							<a href="#" class="latest-product__item">
								<div class="latest-product__item__pic">
									<img src="img/latest-product/lp-2.jpg" alt="">
								</div>
								<div class="latest-product__item__text">
									<h6>Crab Pool Security</h6>
									<span>30.00</span>
								</div>
							</a>
							<a href="#" class="latest-product__item">
								<div class="latest-product__item__pic">
									<img src="img/latest-product/lp-3.jpg" alt="">
								</div>
								<div class="latest-product__item__text">
									<h6>Crab Pool Security</h6>
									<span>30.00</span>
								</div>
							</a>
						</div>
						<div class="latest-prdouct__slider__item">
							<a href="#" class="latest-product__item">
								<div class="latest-product__item__pic">
									<img src="img/latest-product/lp-1.jpg" alt="">
								</div>
								<div class="latest-product__item__text">
									<h6>Crab Pool Security</h6>
									<span>30.00</span>
								</div>
							</a>
							<a href="#" class="latest-product__item">
								<div class="latest-product__item__pic">
									<img src="img/latest-product/lp-2.jpg" alt="">
								</div>
								<div class="latest-product__item__text">
									<h6>Crab Pool Security</h6>
									<span>30.00</span>
								</div>
							</a>
							<a href="#" class="latest-product__item">
								<div class="latest-product__item__pic">
									<img src="img/latest-product/lp-3.jpg" alt="">
								</div>
								<div class="latest-product__item__text">
									<h6>Crab Pool Security</h6>
									<span>30.00</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="latest-product__text">
					<h4>Meilleurs soldes</h4>
					<div class="latest-product__slider owl-carousel">
						<div class="latest-prdouct__slider__item">
							<a href="#" class="latest-product__item">
								<div class="latest-product__item__pic">
									<img src="img/latest-product/lp-1.jpg" alt="">
								</div>
								<div class="latest-product__item__text">
									<h6>Crab Pool Security</h6>
									<span>30.00</span>
								</div>
							</a>
							<a href="#" class="latest-product__item">
								<div class="latest-product__item__pic">
									<img src="img/latest-product/lp-2.jpg" alt="">
								</div>
								<div class="latest-product__item__text">
									<h6>Crab Pool Security</h6>
									<span>30.00</span>
								</div>
							</a>
							<a href="#" class="latest-product__item">
								<div class="latest-product__item__pic">
									<img src="img/latest-product/lp-3.jpg" alt="">
								</div>
								<div class="latest-product__item__text">
									<h6>Crab Pool Security</h6>
									<span>30.00</span>
								</div>
							</a>
						</div>
						<div class="latest-prdouct__slider__item">
							<a href="#" class="latest-product__item">
								<div class="latest-product__item__pic">
									<img src="img/latest-product/lp-1.jpg" alt="">
								</div>
								<div class="latest-product__item__text">
									<h6>Crab Pool Security</h6>
									<span>30.00</span>
								</div>
							</a>
							<a href="#" class="latest-product__item">
								<div class="latest-product__item__pic">
									<img src="img/latest-product/lp-2.jpg" alt="">
								</div>
								<div class="latest-product__item__text">
									<h6>Crab Pool Security</h6>
									<span>30.00</span>
								</div>
							</a>
							<a href="#" class="latest-product__item">
								<div class="latest-product__item__pic">
									<img src="img/latest-product/lp-3.jpg" alt="">
								</div>
								<div class="latest-product__item__text">
									<h6>Crab Pool Security</h6>
									<span>30.00</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Latest Product Section End -->

<!-- actualite Section Begin -->
<section class="from-actualite spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title from-actualite__title">
					<h2>Actualités</h2>
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
<!-- actualite Section End -->

<?php require 'layouts/footer.php'; ?>