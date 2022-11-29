<?php

if (isset($_POST['validate'])) {
	if (!empty($_POST['nom']) && !empty($_POST['prix'])) {

		$new_nom_product = htmlspecialchars($_POST['nom']);
		$new_prix_product = htmlspecialchars($_POST['prix']);
		$new_description_product = nl2br(htmlspecialchars($_POST['description']));

		$editProductOnWebsite = $BDD->prepare(
			"UPDATE produits 
			SET nom_produit = ?, prix_produit = ?, description_produit = ?
			WHERE id = ?"
		);
		$editProductOnWebsite->execute([
			$new_nom_product,
			$new_prix_product,
			$new_description_product,
			$idOfProduct,
		]);

		header('Location: produits.php');

		echo "Votre produit a bien été modifié";
	} else {
		echo "Veuiller compléter tous les champs svp ...";
	}
}
