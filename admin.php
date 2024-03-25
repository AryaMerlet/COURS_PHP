<?php
include_once('database.php');

class Menu extends Database{
    public $nom;
    
    public function __construct(array $values){
        $this->nom = $values['nom'];
    }
    public static function getMenu(){
        $sql = "SELECT DISTINCT nom FROM categories WHERE categorie IS null";
        return Database::preparedQuery($sql);
    }
    public static function getSousMenu(string $categorie ){
        $sql ="SELECT id_categorie FROM categories WHERE nom = :nom";
        $temp = Database::preparedQuery($sql,[':nom' => $categorie]);
        $sql="SELECT nom FROM categories WHERE categorie = :id";
        return Database::preparedQuery($sql,[':id' => $temp[0]['id_categorie']]);
    }
}

