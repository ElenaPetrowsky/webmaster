<?php
require 'controllers/database.php';

// Validation du formulaire
if (isset($_POST['validate'])) {

	// Vérifier si l'utilisateur a bien complété tous les champs
	if (!empty($_POST['email']) && !empty($_POST['password'])) {
		$email_client = htmlspecialchars($_POST['email']);
		$motdepasse_client = htmlspecialchars($_POST['password']);

		// Vérifier si l'utilisateur existe
		$checkIfclientExists = $BDD->prepare("SELECT * FROM clients WHERE email_client = ?");
		$checkIfclientExists->execute(array($email_client));

		if ($checkIfclientExists->rowCount() > 0) {

			// Vérifier si l'utilisateur a entré un bon mot de passe
			$clientInfos = $checkIfclientExists->fetch();
			if (password_verify($motdepasse_client, $clientInfos['motdepasse_client'])) {

				// Authentifier l'utilisateur sur le site et récupérer ses données dans des varibles globales de session
				$_SESSION['auth'] = true;
				$_SESSION['id'] = $clientInfos['id'];
				$_SESSION['email_client'] = $clientInfos['email_client'];
				$_SESSION['nom_client'] = $clientInfos['nom_client'];
				$_SESSION['prenoms_client'] = $clientInfos['prenoms_client'];
				$_SESSION['contact_client'] = $clientInfos['contact_client'];

				// Aller à la page d'accueil
				header('Location: index.php');
			} else {
				$error = "Votre mot de passe est incorrect";
			}
		} else {
			$error = "Votre email est incorrect";
		}
	} else {
		$error = "Veuiller compléter tous les champs svp ...";
	}
}
