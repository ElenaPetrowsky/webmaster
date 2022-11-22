<?php
session_start();
if (!isset($_SESSION['auth'])) {
	header('Location: login.php');
}
require 'database.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {

	$idOfProduct = $_GET['id'];

	$checkIfProductExists = $BDD->prepare(
		"SELECT id
		FROM produits
    WHERE id = ?"
	);
	$checkIfProductExists->execute([$idOfProduct]);

	if ($checkIfProductExists->rowCount() > 0) {

		// 
		$productInfos = $checkIfProductExists->fetch();
		if ($productInfos['id'] == $_SESSION['id']) {

			$deleteProduct = $BDD->prepare(
				"DELETE FROM produits WHERE id = ?"
			);
			$deleteProduct->execute([$idOfProduct]);

			header('Location: offres.php');
		} else {
			echo "Vous n'avez pas le droit de supprimer ce produit";
		}
	}
} else {
	echo "Aucune product n'a été trouvée";
}
