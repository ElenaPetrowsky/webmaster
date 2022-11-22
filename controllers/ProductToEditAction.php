<?php
require 'controllers/database.php';


if (isset($_GET['id_subject']) && !empty(isset($_GET['id_subject']))) {
	$idOfProduct = $_GET['id_subject'];
	$checkIfProductExists = $BDD->prepare("SELECT * FROM subjects WHERE id_subject = ?");
	$checkIfProductExists->execute([$idOfProduct]);

	if ($checkIfProductExists->rowCount() > 0) {

		$productInfos = $checkIfProductExists->fetch();
		if ($productInfos['id_author'] == $_SESSION['id_user']) {

			$product_title = $productInfos['title_subject'];
			$product_content = $productInfos['content_subject'];
			$product_content = str_replace('<br />', '', $product_content);
		} else {
			$error = "Vous n'êtes pas l'auteur de cette product. Petit malin :)";
		}
	} else {
		$error = "Aucun sujet n'a été trouvé";
	}
} else {
	$error = "Aucun sujet n'a été trouvé";
}
