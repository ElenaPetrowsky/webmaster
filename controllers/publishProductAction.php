<?php
require 'controllers/database.php';

// Validation du formulaire
if (isset($_POST['validate'])) {

	// Vérifier si l'utilisateur a bien complété tous les champs
	if (!empty($_POST['nom']) && !empty($_POST['prix'])) {

		$nom_produit = htmlspecialchars($_POST['nom']);
		$prix_produit = htmlspecialchars($_POST['prix']);

		$insertProductOnWebsite = $BDD->prepare(
			"INSERT INTO produits(nom_produit, prix_produit) 
      VALUES(?, ?)"
		);
		$insertProductOnWebsite->execute([
			$nom_produit,
			$prix_produit,
		]);

		$success = "Votre produit a bien été publié";
	} else {
		$error = "Veuiller compléter tous les champs svp ...";
	}
}
