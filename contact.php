<?php

class Contact extends Database{
    public string $nom;
    public string $prenom;
    public string $mail;
    public string $motif;

    public function __construct($values){
        $this->nom= $values['nom'];
        $this->prenom= $values['prenom'];
        $this->mail= $values['email'];
        $this->motif= $values['motif'];
    }
    public function getForm(){
            $this->prenom = htmlentities($_POST['prenom']);
            $this->nom = htmlentities($_POST['nom']);
            $this->mail = htmlentities($_POST['email']);
            $this->motif = htmlentities($_POST['motif']);
            $sql = 'INSERT INTO contacts (prenom_contact, nom_contact, mail_contact, motif) 
            VALUES (:prenom, :nom, :mail, :motif)';
            Database::preparedQuery($sql, [':prenom' => $this->prenom, 
            ':nom' => $this->nom, 
            ':mail' => $this->mail, 
            ':motif'=> $this->motif]);
        }
    public static function ifIsset(){
        if (isset($_POST['soumettre'])) {
            $contact = new Contact($_POST);
            $contact->getForm();
        }
    }
}