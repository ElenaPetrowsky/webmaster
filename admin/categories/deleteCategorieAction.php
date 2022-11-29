<?php
include '../controllers/database.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {

	$idOfCategorie = $_GET['id'];

	$checkIfCategorieExists = $BDD->prepare(
		"SELECT id
		FROM categories
    WHERE id = ?"
	);
	$checkIfCategorieExists->execute([$idOfCategorie]);

	if ($checkIfCategorieExists->rowCount() > 0) {

		// obtenir les informations de la catégorie
		$categorieInfos = $checkIfCategorieExists->fetch();

		$deleteCategorie = $BDD->prepare(
			"DELETE FROM categories WHERE id = ?"
		);
		$deleteCategorie->execute([$idOfCategorie]);
		header('Location: categories.php');

	}
} else {
	echo "Aucune catégorie n'a été trouvée";
}
