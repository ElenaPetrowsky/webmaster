<?php 

class Category 
{
    private $connexion;
    private $table = "categorie";

    public $ID;
    public $designation;


    public function __construct($db){
        $this->connexion = $db;
    }

    public function lire(){
        $SQL_statement ="SELECT * FROM ".$this->table.", image WHERE ".$this->table.".ID=objectID ORDER BY nom";
        $query = $this->connexion->prepare($SQL_statement);
        $query->execute();
        return $query;
    }
}
