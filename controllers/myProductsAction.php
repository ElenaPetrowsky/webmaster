<?php
require 'controllers/database.php';

$getMyProducts = $BDD->prepare(
	"SELECT id, nom_produit, prix_produit 
	FROM produits 
	WHERE id = ? 
	ORDER BY id DESC"
);
$getMyProducts->execute([$_SESSION['id']]);
