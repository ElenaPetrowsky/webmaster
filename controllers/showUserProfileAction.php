<?php
require 'controllers/database.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {

	$idOfUser = $_GET['id'];
	$checkIfuserExists = $BDD->prepare("SELECT * FROM clients WHERE id = ?");
	$checkIfuserExists->execute([$idOfUser]);

	if ($checkIfuserExists->rowCount() > 0) {

		$userInfos = $checkIfuserExists->fetch();
		$nom_client = $userInfos['nom_client'];
		$email_client = $userInfos['email_client'];
		$contact_client = $userInfos['contact_client'];

		$getSomeoneProducts = $BDD->prepare("SELECT * FROM produits WHERE id = ?");
		$getSomeoneProducts->execute([$idOfUser]);
	} else {
		$error = "Aucun user trouvé";
	}
} else {
	$error = "Aucun utilisateur trouvé";
}
