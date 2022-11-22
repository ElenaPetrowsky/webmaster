<!DOCTYPE html>
<html lang="fr-FR">

<head>
	<meta charset="UTF-8">
	<meta name="title" content="Projet Webmaster">
	<meta name="description" content="Site E-commerce pour le cours de Webmaster des élèves ingénieurs 5è promotion">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/elegant-icons.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/jquery-ui.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/slicknav.min.css">
	<link rel="stylesheet" href="css/style.css">

	<title>Projet Webmaster</title>
</head>

<body>
	<!-- Page Preloader -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Humberger Begin -->
	<div class="humberger__menu__overlay"></div>
	<div class="humberger__menu__wrapper">
		<div class="humberger__menu__logo">
			<a href="./index.php"><img src="img/logo.png" alt="Logo Webmaster"></a>
		</div>
		<div class="humberger__menu__cart">
			<ul>
				<li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
				<li><a href="./panier.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
			</ul>
			<div class="header__cart__price">Total : <span>150.00</span></div>
		</div>
		<div class="humberger__menu__widget">
			<div class="header__top__right__auth">
				<a href="#"><i class="fa fa-user"></i> Connexion</a>
			</div>
		</div>
		<nav class="humberger__menu__nav mobile-menu">
			<ul>
				<li class="active"><a href="./index.php">Accueil</a></li>
				<!-- <li><a href="./offres.php">Nos magasins</a></li> -->
				<li><a href="./offres.php">Nos offres</a></li>
				<li><a href="./actualite.php">Actualités</a></li>
				<li><a href="./contact.php">Contacts</a></li>
				<!-- <li><a href="#">Pages</a>
					<ul class="header__menu__dropdown">
						<li><a href="./panier.php">Shoping Cart</a></li>
						<li><a href="./payement.php">Check Out</a></li>
						<li><a href="./actualite-details.php">actualite Details</a></li>
					</ul>
				</li> -->
			</ul>
		</nav>
		<div id="mobile-menu-wrap"></div>
	</div>
	<!-- Humberger End -->

	<!-- Header Section Begin -->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="header__logo">
						<a href="./index.php"><img src="img/logo.png" alt="Logo Webamster"></a>
					</div>
				</div>
				<div class="col-lg-6">
					<nav class="header__menu">
						<ul>
							<li class="active"><a href="./index.php">Accueil</a></li>
							<!-- <li><a href="./offres.php">Nos magasins</a></li> -->
							<li><a href="./offres.php">Nos offres</a></li>
							<li><a href="./actualite.php">Actualités</a></li>
							<li><a href="./contact.php">Contacts</a></li>
							<!-- <li><a href="#">Pages</a>
								<ul class="header__menu__dropdown">
									<li><a href="./panier.php">Shoping Cart</a></li>
									<li><a href="./payement.php">Check Out</a></li>
									<li><a href="./actualite-details.php">actualite Details</a></li>
								</ul>
							</li> -->
						</ul>
					</nav>
				</div>
				<div class="col-lg-3">
					<div class="header__cart">
						<ul>
							<li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
							<li><a href="./panier.php"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
						</ul>
						<div class="header__cart__price">Total : <span>150.00</span></div>
					</div>
				</div>
			</div>
			<div class="humberger__open">
				<i class="fa fa-bars"></i>
			</div>
		</div>
	</header>
	<!-- Header Section End -->