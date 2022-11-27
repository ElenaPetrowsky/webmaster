<?php
class Article{
    private $connexion;
    private $table = "articles";

    // Paramètres publics

    public $id;
    public $codeArticle;
    public $designation;
    public $categorie;
    public $prixUnitaire;
    public $stock;
    public $solde;

    public function __construct($db){
        $this->connexion = $db;
    }
    public function lire(){
        $SQL_statement ="SELECT * FROM ".$this->table.", image WHERE ".$this->table.".ID=objectID ORDER BY designation";
        $query = $this->connexion->prepare($SQL_statement);
        $query->execute();
        return $query;
    }
}