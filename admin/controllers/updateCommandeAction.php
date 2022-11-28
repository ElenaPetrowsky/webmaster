<?php

if (isset($_POST['validate'])) {
	if (!empty($_POST['client'])) {

		$new_client_commande = htmlspecialchars($_POST['client']);

		$editCommandeOnWebsite = $BDD->prepare(
			"UPDATE commandes 
			SET id_client = ?
			WHERE id = ?"
		);
		$editCommandeOnWebsite->execute([
			$new_client_commande,
			$idOfCommande,
		]);

		header('Location: commandes.php');

		echo "Votre commande a bien été modifié";
	} else {
		echo "Veuiller compléter tous les champs svp ...";
	}
}
