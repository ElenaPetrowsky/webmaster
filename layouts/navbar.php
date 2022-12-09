<?php
include 'controllers/requetesClient.php';
if(session_id() == '') {
    session_start();
}
?>

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
    <script src="js/jquery-3.3.1.min.js"></script>

	<title>Projet Webmaster</title>
</head>

<body>
	<!-- Page Preloader -->
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->

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
			<div class="header__cart__price">Total : <span>150</span></div>
		</div>
		<div class="humberger__menu__widget">
			<div class="header__top__right__auth">
				<a href="#"><i class="fa fa-user"></i> Connexion</a>
			</div>
		</div>
		<nav class="humberger__menu__nav mobile-menu">
			<ul>
				<li class="active"><a href="./index.php">Accueil</a></li>
				<li><a href="./about.php">Qui sommes-nous ?</a>
					<ul class="header__menu__dropdown">
						<li><a href="./about.php#historique">Historique</a></li>
						<li><a href="./about.php#organisation">Organisation</a></li>
						<li><a href="./about.php#engagements">Nos engagements</a></li>
					</ul>
				</li>
				<li><a href="./magasins.php">Nos magasins</a>
					<ul class="header__menu__dropdown">
						<li><a href="./magasins.php#gros">Magasins en gros</a></li>
						<li><a href="./magasins.php#demi-gros">Magasins en demi-gros</a></li>
						<li><a href="./magasins.php#details">Magasins en détails</a></li>
					</ul>
				</li>
				<li><a href="./offres.php">Nos offres</a>
					<ul class="header__menu__dropdown">
						<li><a href="./offres.php">Produits</a></li>
						<li><a href="./offres.php#livraisons">Livraisons</a></li>
						<li><a href="./offres.php#promotions">Promotions</a></li>
					</ul>
				</li>
				<li><a href="./actualite.php">Actualités</a>
					<ul class="header__menu__dropdown">
						<li><a href="./actualite.php#presse">Presse</a></li>
						<li><a href="./actualite.php#multimedia">Multimédia</a></li>
					</ul>
				</li>
				<li><a href="./contact.php">Contacts</a>
					<ul class="header__menu__dropdown">
						<li><a href="./contact.php#ressources-humaines">Ressources Humaines</a></li>
						<li><a href="./contact.php#service-commercial">Service commercial</a></li>
					</ul>
				</li>
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
						<a href="./index.php"><img src="img/logo.png" alt="Logo Webmaster"></a>
					</div>
				</div>
				<div class="col-lg-9">
					<nav class="header__menu">
						<ul>
							<li class="active"><a href="./index.php">Accueil</a></li>
							<li><a href="./about.php">Qui sommes-nous ?</a>
								<ul class="header__menu__dropdown">
									<li><a href="./about.php#historique">Historique</a></li>
									<li><a href="./about.php#organisation">Organisation</a></li>
									<li><a href="./about.php#engagements">Nos engagements</a></li>
								</ul>
							</li>
							<li><a href="./magasins.php">Nos magasins</a>
								<ul class="header__menu__dropdown">
									<li><a href="./magasins.php#gros">Magasins en gros</a></li>
									<li><a href="./magasins.php#demi-gros">Magasins en demi-gros</a></li>
									<li><a href="./magasins.php#details">Magasins en détails</a></li>
								</ul>
							</li>
							<li><a href="./offres.php">Nos offres</a>
								<ul class="header__menu__dropdown">
									<li><a href="./offres.php">Produits</a></li>
									<li><a href="./offres.php#livraisons">Livraisons</a></li>
									<li><a href="./offres.php#promotions">Promotions</a></li>
								</ul>
							</li>
							<li><a href="./actualite.php">Actualités</a>
								<ul class="header__menu__dropdown">
									<li><a href="./actualite.php#presse">Presse</a></li>
									<li><a href="./actualite.php#multimedia">Multimédia</a></li>
								</ul>
							</li>
							<li><a href="./contact.php">Contacts</a>
								<ul class="header__menu__dropdown">
									<li><a href="./contact.php#ressources-humaines">Ressources Humaines</a></li>
									<li><a href="./contact.php#service-commercial">Service commercial</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="humberger__open">
				<i class="fa fa-bars"></i>
			</div>
		</div>
	</header>

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
							<?php while ($categorie = $getAllCategories->fetch()) { ?>
								<li><a href="#"><?= $categorie['libelle_categorie']; ?></a></li>
							<?php } ?>
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
								<li>
									<a href="./favoris.php">
										<i class="fa fa-heart"></i> <span><?= 0 ?></span>
									</a>
								</li>
								<li>
									<a href="./panier.php">
										<i  class="fa fa-shopping-bag"></i> <span id="nb_produit"><?php
                                            if (isset($_SESSION["produit"])) echo count($_SESSION["produit"]); else echo 0;
                                            ?></span>
									</a>
								</li>
							</ul>
							<div class="header__cart__price">Total : <span id="total_panier"><?php
                                    if(isset($_SESSION["prix_pr"])) echo ($_SESSION["prix_pr"]); else echo  0;
                                    ?> FCFA</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero Section End -->