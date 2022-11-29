<?php
include 'controllers/database.php';

$getAllCategories = $BDD->query("SELECT * FROM categories ORDER BY libelle_categorie");
$getAllClients = $BDD->query("SELECT * FROM clients ORDER BY nom_client, prenoms_client");
$getAllCommandes = $BDD->query("SELECT * FROM commandes");
$getAllProducts = $BDD->query("SELECT * FROM produits ORDER BY id DESC");
$getAllActualites = $BDD->query("SELECT * FROM actualites ORDER BY date_actualite DESC");

$getCountCategories = $BDD->query("SELECT COUNT(id) FROM categories");
$getCountClients = $BDD->query("SELECT COUNT(id) FROM clients");
$getCountCommandes = $BDD->query("SELECT COUNT(id) FROM commandes");
$getCountProducts = $BDD->query("SELECT COUNT(id) FROM produits");

$getMinProducts = $BDD->query("SELECT MIN(prix_produit) FROM produits");
$getMaxProducts = $BDD->query("SELECT MAX(prix_produit) FROM produits");

$getSoldes = $BDD->query("SELECT nom_produit, prix_produit, pourcentage FROM produits INNER JOIN soldes ON produits.id = soldes.id_produit");

$getCountCart = $BDD->prepare("SELECT COUNT(id) FROM commandes WHERE id_client = ? AND etat = 0");
$getCountCart->execute([$_SESSION['id']]);

$getMyProducts = $BDD->prepare(
	"SELECT nom_produit, prix_produit, quantite
	FROM commandes
	NATURAL JOIN produits 
	WHERE id_client = ? AND etat = 0
	ORDER BY nom_produit"
);
$getMyProducts->execute([$_SESSION['id']]);

$getCountCart = $BDD->prepare("SELECT COUNT(id) FROM commandes WHERE id_client = ? AND etat = 0");
$getCountCart->execute([$_SESSION['id']]);

$getMyProducts = $BDD->prepare(
	"SELECT nom_produit, prix_produit, quantite
	FROM commandes
	NATURAL JOIN produits 
	WHERE id_client = ? AND etat = 0
	ORDER BY nom_produit"
);
$getMyProducts->execute([$_SESSION['id']]);


if (isset($_GET['search']) && !empty($_GET['search'])) {

	$userSearch = $_GET['search'];
	$getAllProducts = $BDD->query(
		"SELECT * FROM produits 
		WHERE nom_produit 
		LIKE '%" . $userSearch . "%' ORDER BY id DESC"
	);
}

if (isset($_GET['search']) && !empty($_GET['search'])) {

	$userSearch = $_GET['search'];
	$getAllCategories = $BDD->query(
		"SELECT * FROM categories 
		WHERE libelle_categorie 
		LIKE '%" . $userSearch . "%' ORDER BY libelle_categorie"
	);
}
