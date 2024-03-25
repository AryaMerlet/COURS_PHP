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

class Admin extends Menu{
    public $id_categorie;
    public $categorie;

    public function __construct(array $values){
        $this->id_categorie = $values['id_categorie'];
        $this->nom = $values['nom'];
        $this->categorie = $values['categorie'];
    }
    public static function getAdminMenu(){
        $sql = "SELECT * FROM categories";
        return Database::preparedQuery($sql);
    }
    public static function delete(){
        if(isset($_REQUEST['id_categorie'])){
            $id_categorie = htmlentities($_REQUEST['id_categorie']);
            $sql = "DELETE FROM categories WHERE id_categorie = :id_categorie";
            $temp = Database::preparedQuery($sql,[':id_categorie' => $id_categorie]);
        }
    }
    public static function modif(){
        if(isset($_REQUEST['id_categorie'])){
            $id_categorie = htmlentities($_REQUEST['id_categorie']);
            $sql = "DELETE FROM categories WHERE id_categorie = :id_categorie";
            $temp = Database::preparedQuery($sql,[':id_categorie' => $id_categorie]);
        }
    }
    public static function add(){
        if(isset($_REQUEST['id_categorie'])){
            $id_categorie = htmlentities($_REQUEST['id_categorie']);
            $sql = "DELETE FROM categories WHERE id_categorie = :id_categorie";
            $temp = Database::preparedQuery($sql,[':id_categorie' => $id_categorie]);
        }
    }

}