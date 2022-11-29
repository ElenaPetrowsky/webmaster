<?php

if (isset($_POST['validate'])) {
	if (!empty($_POST['nom'])) {

		$new_libelle_categorie = htmlspecialchars($_POST['nom']);

		$editCategorieOnWebsite = $BDD->prepare(
			"UPDATE categories 
			SET libelle_categorie = ?
			WHERE id = ?"
		);
		$editCategorieOnWebsite->execute([
			$new_libelle_categorie,
			$idOfCategorie,
		]);

		header('Location: categories.php');

		echo "Votre categorie a bien été modifiée";
	} else {
		echo "Veuiller compléter tous les champs svp ...";
	}
}
