<?php
require 'database.php';

// Validation du formulaire
if (isset($_POST['validate'])) {

	// Vérifier si l'utilisateur a bien complété tous les champs
	if (!empty($_POST['nom']) && !empty($_POST['prenoms']) && !empty($_POST['email']) && !empty($_POST['contact']) && !empty($_POST['password'])) {
		$nom_client = htmlspecialchars($_POST['nom']);
		$prenoms_client = htmlspecialchars($_POST['prenoms']);
		$email_client = htmlspecialchars($_POST['email']);
		$contact_client = htmlspecialchars($_POST['contact']);
		$motdepasse_client = password_hash($_POST['password'], PASSWORD_DEFAULT);

		$checkIfUserAlreadyExists = $BDD->prepare("SELECT email_client FROM clients WHERE email_client = ?");
		$checkIfUserAlreadyExists->execute(array($email_client));

		if ($checkIfUserAlreadyExists->rowCount() == 0) {

			// Insérer l'utilisateur dans la base de données
			$insertUserOnWebsite = $BDD->prepare(
				"INSERT INTO clients(nom_client, prenoms_client, email_client, contact_client, motdepasse_client) VALUES(?, ?, ?, ?, ?)"
			);
			$insertUserOnWebsite->execute([
				$nom_client,
				$prenoms_client,
				$email_client,
				$contact_client,
				$motdepasse_client
			]);
		}
		$success = "Votre produit a bien été ajouté";
	} else {
		$error = "Veuiller compléter tous les champs svp ...";
	}
}
