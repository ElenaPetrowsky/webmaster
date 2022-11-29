<?php
include 'database.php';

$getAllCategories = $BDD->query("SELECT * FROM categories ORDER BY libelle_categorie");
$getAllClients = $BDD->query("SELECT * FROM clients ORDER BY nom_client, prenoms_client");
$getAllCommandes = $BDD->query("SELECT * FROM commandes");
$getAllProducts = $BDD->query("SELECT * FROM produits ORDER BY id DESC");

$getCountCategories = $BDD->query("SELECT COUNT(id) FROM categories");
$getCountClients = $BDD->query("SELECT COUNT(id) FROM clients");
$getCountCommandes = $BDD->query("SELECT COUNT(id) FROM commandes");
$getCountProducts = $BDD->query("SELECT COUNT(id) FROM produits");
