<?php
require_once('database.php');

class Actualite extends Database{
        /**id de l'actualité */
        public $id_actualite;
        /**titre de l'actualité */
        public $titre;
        /**sous-titre de l'actualité */
        public $sous_titre;
        /**texte de l'actualité */
        public $article;
        /**lien de l'image de l'actualité */
        public $image;
        /**date de creation de l'actualité */
        public $date_publication;
        /**date de modification de l'actualité */
        public $date_modification;  
        /**auteur de l'actualité */
        public $id_auteur;
        /**tags liées à l'actualité */
        public $id_tag  ;
        /**nom de la source de l'actualité */
        public $id_nom_source;        
        /**source de l'actualité */
        public $id_lien;
        

    public function __construct(array $values)
    {
        $this->id_actualite = $values['id_actualite'];
        $this->titre = $values['titre'];
        $this->sous_titre = $values['sous_titre'];
        $this->article = $values['article'];
        $this->image = $values['image'];
        $this->date_publication = $values['date_publication'];
        $this->date_modification = $values['date_modification'];
        $this->id_auteur = $values['id_auteur'];
        $this->id_tag = $values['id_tag'];
        $this->id_nom_source = $values['id_nom_source'];
        $this->id_lien = $values['id_lien'];
        
    }

    public static function getActualite(){
        $sql = 'SELECT * FROM 
        actualites,tags,auteurs,sources,liens WHERE 
        actualites.id_auteur = auteurs.id_auteur AND 
        actualites.id_tag = tags.id_tag AND 
        actualites.id_nom_source = sources.id_source AND
        actualites.id_lien = liens.id_lien ORDER BY
        actualites.date_modification DESC LIMIT 5';
        return Database::query($sql);
    }

    public static function getArticle(){
        $pdo = Database::getPDO();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = 'SELECT * FROM 
            actualites,tags,auteurs,sources,liens WHERE 
            actualites.id_actualite=:id AND
            actualites.id_auteur = auteurs.id_auteur AND 
            actualites.id_tag = tags.id_tag AND 
            actualites.id_nom_source = sources.id_source AND
            actualites.id_lien = liens.id_lien';
            return Database::query($sql,[':id' => $id]);
        }else{
            header('index.php');
        }
        
    }

    public function getAuteur(){
        $sql = "SELECT nom_auteur,fonction FROM auteurs WHERE id_auteur=:id";
        $temp = Database::query($sql,[':id' => $this->id_auteur]);
        foreach($temp as $t){
            return $t['nom_auteur'].' '.$t['fonction'];    
        }
    }
    // public function syntheseTexte() :string{
    //     return substr($this->texte, 0,100)."...";
    // }
    // public function getDateFr() : string{
    //     return date("d/m/Y", strtotime($this->date));
    // }
}