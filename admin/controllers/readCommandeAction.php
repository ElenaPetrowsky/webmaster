<?php
include 'database.php';

if (isset($_GET['id']) && !empty(isset($_GET['id']))) {
	$idOfCommande = $_GET['id'];
	$checkIfCommandeExists = $BDD->prepare("SELECT * FROM commandes WHERE id = ?");
	$checkIfCommandeExists->execute([$idOfCommande]);

	if ($checkIfCommandeExists->rowCount() > 0) {
		$commandeInfos = $checkIfCommandeExists->fetch();
	} else {
		$error = "Aucun sujet n'a été trouvé";
	}
} else {
	$error = "Aucun sujet n'a été trouvé";
}
