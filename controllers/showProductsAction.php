<?php
require 'controllers/database.php';

$getAllProducts = $BDD->query("SELECT * FROM produits ORDER BY id DESC");

if (isset($_GET['search']) && !empty($_GET['search'])) {

	$userSearch = $_GET['search'];
	$getAllProducts = $BDD->query(
		"SELECT * FROM produits 
		WHERE nom_produit 
		LIKE '%" . $userSearch . "%' ORDER BY id DESC"
	);
}
