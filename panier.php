<?php require 'layouts/navbar.php'; ?>

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
						<li><a href="#">Fastfood</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="hero__search">
					<div class="hero__search__form">
						<form action="#">
							<input type="text" placeholder="Que voulez-vous ?">
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
					<h2>Mon panier</h2>
					<div class="breadcrumb__option">
						<a href="./index.php">Accueil</a>
						<span>Mon panier</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section class="panier spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="shoping__cart__table">
					<table>
						<thead>
							<tr>
								<th class="shoping__product">Produits</th>
								<th>Prix</th>
								<th>Quantité</th>
								<th>Total</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="shoping__cart__item">
									<img src="img/cart/cart-1.jpg" alt="">
									<h5>Vegetable’s Package</h5>
								</td>
								<td class="shoping__cart__price">
									55
								</td>
								<td class="shoping__cart__quantity">
									<div class="quantity">
										<div class="pro-qty">
											<input type="text" value="1">
										</div>
									</div>
								</td>
								<td class="shoping__cart__total">
									110
								</td>
								<td class="shoping__cart__item__close">
									<span class="icon_close"></span>
								</td>
							</tr>
							<tr>
								<td class="shoping__cart__item">
									<img src="img/cart/cart-2.jpg" alt="">
									<h5>Fresh Garden Vegetable</h5>
								</td>
								<td class="shoping__cart__price">
									39
								</td>
								<td class="shoping__cart__quantity">
									<div class="quantity">
										<div class="pro-qty">
											<input type="text" value="1">
										</div>
									</div>
								</td>
								<td class="shoping__cart__total">
									39.99
								</td>
								<td class="shoping__cart__item__close">
									<span class="icon_close"></span>
								</td>
							</tr>
							<tr>
								<td class="shoping__cart__item">
									<img src="img/cart/cart-3.jpg" alt="">
									<h5>Organic Bananas</h5>
								</td>
								<td class="shoping__cart__price">
									69
								</td>
								<td class="shoping__cart__quantity">
									<div class="quantity">
										<div class="pro-qty">
											<input type="text" value="1">
										</div>
									</div>
								</td>
								<td class="shoping__cart__total">
									69.99
								</td>
								<td class="shoping__cart__item__close">
									<span class="icon_close"></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="shoping__cart__btns">
					<a href="./offres.php" class="primary-btn cart-btn">CONTINUER SHOPPING</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="shoping__payement">
					<ul>
						<li>Total commande <span>454.98</span></li>
					</ul>
					<a href="./payement.php" class="primary-btn">PASSER AU PAYEMENT</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Shoping Cart Section End -->

<?php require 'layouts/footer.php'; ?>