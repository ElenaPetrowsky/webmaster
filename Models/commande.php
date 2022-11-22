<?php
class Commande{
    private $connexion;
    private $table = "commande";

    // Paramètres publics

    public $id;
    public $utilisateur;
    public $dateCommande;

    public function __construct($db){
        $this->connexion = $db;
    }
}