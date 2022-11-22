<?php
class Client{
    private $connexion;
    private $table = "client";

    // Paramètres publics

    public $id;
    public $username;
    public $nom;
    public $prenoms;
    public $dateDeNaissance;
    public $numeroDeTelephone;
    public $adresse;

    public function __construct($db){
        $this->connexion = $db;
    }

    public function readAll(){
        // On ecrit la synthaxe SQL de la requete
        $SQL_query = "SELECT * FROM ".$this.table;

        // On prepare l execution de la requete SQL
        $query = $this->connexion->prepare($SQL_query);

        // On execute la requete et on recupère la reponse
        $result = $query->execute();

        // On retourne le resultat
        return $result;
    }
}
