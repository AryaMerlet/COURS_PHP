<?php
require_once('C:\wamp64\www\GIT\COURS_PHP\Menu.php');

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
    public static function retrieve(){
        if(isset($_REQUEST['id'])){
            $id = htmlentities($_REQUEST['id']);
            $sql = "SELECT * FROM categories WHERE id_categorie = :id";
            $retrieve = Database::preparedQuery($sql, [':id' => $id]);
            return new Admin($retrieve[0]);
        }
    } 
    public static function modif(){
        if(isset($_REQUEST['modif'])){
            if(isset($_REQUEST['id'])){
                $id_categorie = htmlentities($_REQUEST['id']);
                $updateNom = htmlentities($_REQUEST['nom']);
                $updateCategorie = htmlentities($_REQUEST['parent']);
                $sql = "UPDATE categories SET nom = :nom, categorie = :categorie WHERE id_categorie = :id_categorie";
                $temp = Database::preparedQuery($sql,[':nom'=>$updateNom,':categorie'=>$updateCategorie,':id_categorie' => $id_categorie]);
            }else{
                $newNom = htmlentities($_REQUEST['nom']);
                $newCategorie = htmlentities($_REQUEST['parent']);
                $sql = "INSERT INTO categories (nom, categorie) VALUES (:nom, :categorie)";
                Database::preparedQuery($sql, [':nom' => $newNom, ':categorie'=>$newCategorie]);
            }
        }
    }
}

