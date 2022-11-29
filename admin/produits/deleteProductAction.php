<?php
include '../controllers/database.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {

	$idOfProduct = $_GET['id'];

	$checkIfProductExists = $BDD->prepare(
		"SELECT id
		FROM produits
    WHERE id = ?"
	);
	$checkIfProductExists->execute([$idOfProduct]);

	if ($checkIfProductExists->rowCount() > 0) {

		// obtenir les informations du produit
		$productInfos = $checkIfProductExists->fetch();

		$deleteProduct = $BDD->prepare(
			"DELETE FROM produits WHERE id = ?"
		);
		$deleteProduct->execute([$idOfProduct]);
		header('Location: produits.php');

	}
} else {
	echo "Aucune produit n'a été trouvée";
}
