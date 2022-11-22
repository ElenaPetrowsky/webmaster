<?php

if (isset($_POST['validate'])) {
	if (!empty($_POST['nom']) && !empty($_POST['prix'])) {

		$new_nom_product = htmlspecialchars($_POST['nom']);
		$new_prix_product = nl2br(htmlspecialchars($_POST['prix']));

		$editProductOnWebsite = $BDD->prepare(
			"UPDATE produits 
			SET nom_produit = ?, prix_produit = ? 
			WHERE id = ?"
		);
		$editProductOnWebsite->execute([
			$new_nom_product,
			$new_prix_product,
			$idOfProduct,
		]);

		header('Location: offres.php');

		$success = "Votre produit a bien été modifié";
	} else {
		$error = "Veuiller compléter tous les champs svp ...";
	}
}
