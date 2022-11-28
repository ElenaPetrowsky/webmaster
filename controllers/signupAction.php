<?php
require 'controllers/database.php';

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
			$insertUserOnWebsite->execute(array($nom_client, $prenoms_client, $email_client, $contact_client, $motdepasse_client));

			// Récupérer les informations de l'utilisateur
			$getInfoUser = $BDD->prepare("SELECT id, nom_client, prenoms_client, email_client, contact_client FROM clients WHERE nom_client = ? AND  prenoms_client = ? AND email_client = ? AND contact_client = ?");
			$getInfoUser->execute(array($nom_client, $prenoms_client, $email_client, $contact_client));
			$userInfos = $getInfoUser->fetch();

			// Authentifier l'utilisateur sur le site et récupérer ses données dans des varibles globales de session
			$_SESSION['auth'] = true;
			$_SESSION['id'] = $userInfos['id'];
			$_SESSION['nom_client'] = $userInfos['nom_client'];
			$_SESSION['prenoms_client'] = $userInfos['prenoms_client'];
			$_SESSION['email_client'] = $userInfos['email_client'];
			$_SESSION['contact_client'] = $userInfos['contact_client'];

			// Aller à la page d'accueil
			header('Location: index.php');
		} else {
			$error = "L'utilisateur existe déjà sur le site ...";
		}
	} else {
		$error = "Veuiller compléter tous les champs svp ...";
	}
}
