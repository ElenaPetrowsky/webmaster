<?php

if (isset($_POST['validate'])) {
	if (!empty($_POST['nom']) && !empty($_POST['prenoms']) && !empty($_POST['email']) && !empty($_POST['contact'])) {

		$new_nom_client = htmlspecialchars($_POST['nom']);
		$new_prenoms_client = htmlspecialchars($_POST['prenoms']);
		$new_email_client = htmlspecialchars($_POST['email']);
		$new_contact_client = htmlspecialchars($_POST['contact']);

		$editClientOnWebsite = $BDD->prepare(
			"UPDATE clients 
			SET nom_client = ?, prenoms_client = ?, email_client = ?, contact_client = ?
			WHERE id = ?"
		);
		$editClientOnWebsite->execute([
			$new_nom_client,
			$new_prenoms_client,
			$new_email_client,
			$new_contact_client,
			$idOfClient,
		]);

		header('Location: clients.php');

		echo "Votre client a bien été modifié";
	} else {
		echo "Veuiller compléter tous les champs svp ...";
	}
}
