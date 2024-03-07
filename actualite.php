<?php

class Actualite{
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

        private $pdo;
        
    /**Constructeur de la class actualite
     * @param int $id id de l'actualite
     * @param string $titre titre de l'actu
     * @param string $texte texte de l'actu
     * @param string $lien_image lien de l'image de l'actu
     * @param string $date date de creation de l'actu
     * @param string $date_revision date de revision de l'actu
     * @param int $id_auteur id de l'auteuer de l'actu
     * @param string $id_tags tags lié a l'actu
     * @param string $sources sources de l'actu
     */

    public static function getActualite($pdo){

        $pdo->exec("SET CHARACTER SET utf8mb4");
        $sql = 'SELECT * FROM 
        actualites,tags,auteurs,sources,liens WHERE 
        actualites.id_auteur = auteurs.id_auteur AND 
        actualites.id_tag = tags.id_tag AND 
        actualites.id_nom_source = sources.id_source AND
        actualites.id_lien = liens.id_lien ORDER BY
        actualites.date_modification DESC LIMIT 5';
        $temp = $pdo -> prepare($sql);
        $temp -> execute();
        return $temp;
    }

    public static function getArticle($pdo){
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = 'SELECT * FROM 
            actualites,tags,auteurs,sources,liens WHERE 
            actualites.id_actualite=:id AND
            actualites.id_auteur = auteurs.id_auteur AND 
            actualites.id_tag = tags.id_tag AND 
            actualites.id_nom_source = sources.id_source AND
            actualites.id_lien = liens.id_lien';
            $temp = $pdo -> prepare($sql);
            $temp -> bindParam(':id', $id, PDO::PARAM_INT);
            $temp -> execute();
            return $temp;
        }else{
            throw new Exception('Vous n"êtes pas censé être ici sans lien depuis un article');
        }
        
    }

    public function __construct(array $values, $pdo)
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
        $this->pdo = $pdo;
    }

    public function getAuteur(){
        $sql = "SELECT nom_auteur,fonction FROM auteurs WHERE id_auteur=:id";
        $temp = $this->pdo->prepare($sql);
        $temp->bindParam(':id',$this->id_auteur,PDO::PARAM_INT);
        $temp->execute();
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