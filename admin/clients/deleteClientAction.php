<?php
include '../controllers/database.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {

	$idOfClient = $_GET['id'];

	$checkIfClientExists = $BDD->prepare(
		"SELECT id
		FROM clients
    WHERE id = ?"
	);
	$checkIfClientExists->execute([$idOfClient]);

	if ($checkIfClientExists->rowCount() > 0) {

		// obtenir les informations du client
		$clientInfos = $checkIfClientExists->fetch();

		$deleteClient = $BDD->prepare(
			"DELETE FROM clients WHERE id = ?"
		);
		$deleteClient->execute([$idOfClient]);
		header('Location: clients.php');

	}
} else {
	echo "Aucune produit n'a été trouvée";
}
