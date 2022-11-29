<?php
include '../controllers/database.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {

	$idOfCommande = $_GET['id'];

	$checkIfCommandeExists = $BDD->prepare(
		"SELECT id
		FROM commandes
    WHERE id = ?"
	);
	$checkIfCommandeExists->execute([$idOfCommande]);

	if ($checkIfCommandeExists->rowCount() > 0) {

		// obtenir les informations du produit
		$commandeInfos = $checkIfCommandeExists->fetch();

		$deleteCommande = $BDD->prepare(
			"DELETE FROM commandes WHERE id = ?"
		);
		$deleteCommande->execute([$idOfCommande]);
		header('Location: commandes.php');

	}
} else {
	echo "Aucune commande n'a été trouvée";
}
