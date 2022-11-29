<?php
include 'database.php';

// Validation du formulaire
if (isset($_POST['validate'])) {

	// Vérifier si l'utilisateur a bien complété tous les champs
	if (!empty($_POST['nom'])) {

		$libelle_categorie = htmlspecialchars($_POST['nom']);

		$insertProductOnWebsite = $BDD->prepare(
			"INSERT INTO categories(libelle_categorie) 
      VALUES(?)"
		);
		$insertProductOnWebsite->execute([
			$libelle_categorie,
		]);

		$success = "Votre categorie a bien été ajouté";
	} else {
		$error = "Veuiller compléter tous les champs svp ...";
	}
}
