<?php
// include 'controllers/database.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {

	$idOfActualite = $_GET['id'];
	$checkIfActualiteExists = $BDD->prepare("SELECT * FROM actualites WHERE id = ?");
	$checkIfActualiteExists->execute([$idOfActualite]);

	if ($checkIfActualiteExists->rowCount() > 0) {

		$actualiteInfos = $checkIfActualiteExists->fetch();

		$actualite_titre = $actualiteInfos['titre_actualite'];
		$actualite_contenu = $actualiteInfos['contenu_actualite'];
		$actualite_date = $actualiteInfos['date_actualite'];
	} else {
		$error = "Aucun sujet n'a été trouvé";
	}
} else {
	$error = "Aucun sujet n'a été trouvé";
}
