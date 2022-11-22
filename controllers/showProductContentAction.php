<?php
require 'controllers/database.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {

	$idOfProduct = $_GET['id'];
	$checkIfProductExists = $BDD->prepare("SELECT * FROM produits WHERE id = ?");
	$checkIfProductExists->execute([$idOfProduct]);

	if ($checkIfProductExists->rowCount() > 0) {

		$productInfos = $checkIfProductExists->fetch();

		$product_name = $productInfos['nom_produit'];
		$product_price = $productInfos['prix_produit'];
	} else {
		$error = "Aucun sujet n'a été trouvé";
	}
} else {
	$error = "Aucun sujet n'a été trouvé";
}
