<?php
require 'database.php';

// Validation du formulaire
if (isset($_POST['validate'])) {

	// Vérifier si l'utilisateur a bien complété tous les champs
	if (!empty($_POST['nom']) && !empty($_POST['prix']) && !empty($_POST['description']) && !empty($_POST['photo']) && !empty($_POST['categorie'])) {

		$nom_produit = htmlspecialchars($_POST['nom']);
		$prix_produit = htmlspecialchars($_POST['prix']);
		$description_produit = htmlspecialchars($_POST['description']);
		$photo_produit = htmlspecialchars($_POST['photo']);
		$categorie_produit = htmlspecialchars($_POST['categorie']);

		$insertProductOnWebsite = $BDD->prepare(
			"INSERT INTO produits(nom_produit, prix_produit, description_produit, photo_produit, id_categorie) 
      VALUES(?, ?, ?, ?, ?)"
		);
		$insertProductOnWebsite->execute([
			$nom_produit,
			$prix_produit,
			$description_produit,
			$photo_produit,
			$categorie_produit,
		]);

		$success = "Votre produit a bien été ajouté";
	} else {
		$error = "Veuiller compléter tous les champs svp ...";
	}
}
