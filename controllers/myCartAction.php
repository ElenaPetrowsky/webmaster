<?php
include 'controllers/database.php';

$getMyProducts = $BDD->prepare(
	"SELECT nom_produit, prix_produit, quantite
	FROM commandes
	NATURAL JOIN produits 
	WHERE id_client = ? 
	ORDER BY nom_produit"
);
$getMyProducts->execute([$_SESSION['id']]);
