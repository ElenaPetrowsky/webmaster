<?php
include 'database.php';

if (isset($_GET['id']) && !empty(isset($_GET['id']))) {
	$idOfClient = $_GET['id'];
	$checkIfClientExists = $BDD->prepare("SELECT * FROM clients WHERE id = ?");
	$checkIfClientExists->execute([$idOfClient]);

	if ($checkIfClientExists->rowCount() > 0) {
		$clientInfos = $checkIfClientExists->fetch();
	} else {
		$error = "Aucun client n'a été trouvé";
	}
} else {
	$error = "Aucun client n'a été trouvé";
}
