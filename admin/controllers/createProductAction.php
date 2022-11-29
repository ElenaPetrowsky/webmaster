<?php
include 'database.php';

// Validation du formulaire
if (isset($_POST['validate'])) {

	// Vérifier si l'utilisateur a bien complété tous les champs
	if (!empty($_POST['nom']) && !empty($_POST['prix']) && !empty($_POST['description'])) {

		$nom_produit = htmlspecialchars($_POST['nom']);
		$prix_produit = htmlspecialchars($_POST['prix']);
		$description_produit = htmlspecialchars($_POST['description']);

		$insertProductOnWebsite = $BDD->prepare(
			"INSERT INTO produits(nom_produit, prix_produit, description_produit) 
      VALUES(?, ?, ?)"
		);
		$insertProductOnWebsite->execute([
			$nom_produit,
			$prix_produit,
			$description_produit
		]);

		$success = "Votre produit a bien été ajouté";
	} else {
		$error = "Veuiller compléter tous les champs svp ...";
	}
}
