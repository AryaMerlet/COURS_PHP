<?php

class Contact{
    public string $nom;
    public string $prenom;
    public string $email;
    public string $motif;
    private $pdo;

    public function __construct($values, $pdo){
        $this->nom= $values['nom'];
        $this->prenom= $values['prenom'];
        $this->email= $values['email'];
        $this->motif= $values['motif'];
        $this->pdo= $pdo;
    }
    public function getForm(){
            $this->prenom = htmlentities($_POST['prenom']);
            $this->nom = htmlentities($_POST['nom']);
            $this->email = htmlentities($_POST['email']);
            $this->motif = htmlentities($_POST['motif']);

            $sql = 'INSERT INTO contacts (prenom_contact, nom_contact, mail_contact, motif) 
            VALUES (:prenom, :nom, :mail, :motif)';
            $temp = $this->pdo->prepare($sql);
            $temp->Bindparam(":prenom", $this->prenom, PDO::PARAM_STR);
            $temp->Bindparam(":nom", $this->nom, PDO::PARAM_STR);
            $temp->Bindparam(":mail", $this->email, PDO::PARAM_STR);
            $temp->Bindparam(":motif", $this->motif, PDO::PARAM_STR);
            $temp->execute();
        }
    public static function ifIsset($pdo){
        if (isset($_POST['soumettre'])) {
            $contact = new Contact($_POST,$pdo );
            $contact->getForm();
        }
    }
}