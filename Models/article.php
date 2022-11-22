<?php
class Article{
    private $connexion;
    private $table = "article";

    // Paramètres publics

    public $id;
    public $codeArticle;
    public $designation;
    public $categorie;
    public $prixUnitaire;
    public $image;

    public function __construct($db){
        $this->connexion = $db;
    }
}