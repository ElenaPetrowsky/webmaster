<?php
include 'database.php';

if (isset($_GET['id']) && !empty(isset($_GET['id']))) {
	$idOfCategorie = $_GET['id'];
	$checkIfCategorieExists = $BDD->prepare("SELECT * FROM categories WHERE id = ?");
	$checkIfCategorieExists->execute([$idOfCategorie]);

	if ($checkIfCategorieExists->rowCount() > 0) {
		$categorieInfos = $checkIfCategorieExists->fetch();
	} else {
		$error = "Aucun catégorie n'a été trouvée";
	}
} else {
	$error = "Aucun catégorie n'a été trouvée";
}
