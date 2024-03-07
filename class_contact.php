<?php

class Contact{
    public $id;
    public $nom;
    public $prenom;
    public $mail;
    public $motif;
    private $pdo;

    public function __construct(array $values, $pdo){
        $this->id= $values['id_contact'];
        $this->nom= $values['nom_contact'];
        $this->prenom= $values['prenom_contact'];
        $this->mail= $values['mail_contact'];
        $this->motif= $values['motif'];
        $this->pdo= $pdo;
    }
    public function getForm(){
        if (isset($_POST['soumettre'])) {

            $this->prenom = htmlentities($_POST['prenom']);
            $nom = htmlentities($_POST['nom']);
            $mail = htmlentities($_POST['email']);
            $motif = htmlentities($_POST['motif']);

            $sql = 'INSERT INTO contacts (prenom_contact, nom_contact, mail_contact, motif) 
            VALUES (:prenom, :nom, :mail, :motif)';
            $temp = $this->pdo->prepare($sql);
            $temp->Bindparam(":prenom", $this->prenom, PDO::PARAM_STR);
            $temp->Bindparam(":nom", $this->nom, PDO::PARAM_STR);
            $temp->Bindparam(":mail", $this->mail, PDO::PARAM_STR);
            $temp->Bindparam(":motif", $this->motif, PDO::PARAM_STR);
            $temp->execute();
        }
    }
}