<?php
include 'database.php';

if (isset($_GET['id']) && !empty(isset($_GET['id']))) {
	$idOfProduct = $_GET['id'];
	$checkIfProductExists = $BDD->prepare("SELECT * FROM produits WHERE id = ?");
	$checkIfProductExists->execute([$idOfProduct]);

	if ($checkIfProductExists->rowCount() > 0) {
		$productInfos = $checkIfProductExists->fetch();
	} else {
		$error = "Aucun sujet n'a été trouvé";
	}
} else {
	$error = "Aucun sujet n'a été trouvé";
}
