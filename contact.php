<?php
// script de connexion
require_once('base_donnee.php');

if (isset($_POST['soumettre'])) {

    $prenom = htmlentities($_POST['prenom']);
    $nom = htmlentities($_POST['nom']);
    $mail = htmlentities($_POST['email']);
    $motif = htmlentities($_POST['motif']);

    //On définit la requête sql qui va envoyer toutes les données a la base de données
    $sql = 'INSERT INTO contacts (prenom_contact, nom_contact, mail_contact, motif) 
            VALUES (:prenom, :nom, :mail, :motif)';
    $temp = $pdo->prepare($sql);
    $temp->Bindparam(":prenom", $prenom, PDO::PARAM_STR);
    $temp->Bindparam(":nom", $nom, PDO::PARAM_STR);
    $temp->Bindparam(":mail", $mail, PDO::PARAM_STR);
    $temp->Bindparam(":motif", $motif, PDO::PARAM_STR);
    $temp->execute();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php 
    include('header.php');
    ?>
    <div class="label_home">
        <form action="index.php?confirmation=1" method="post">
            <div class="label_box">
                <label for="prenom">Prénom : </label>
                <input type="text" name="prenom" id="prenom" placeholder="Prenom" required />
            </div>
            <div class="label_box">
                <label for="nom">Nom : </label>
                <input type="text" name="nom" id="nom" placeholder="Nom" required />
            </div>
            <div class="label_box">
                <label for="email">Email : </label> 
                <input type="text" name="email" id="email" placeholder="exemple@gmail.com" required />
            </div>
            <div class="label_box_projet">
                <label for="motif">Raison de votre demande : </label>
                <textarea name="motif" id="motif" ></textarea>
            </div>
                <input type="submit" name="soumettre" value="enregistrer" />
        </form>
    </div>
    <?php 
    include('footer.php');
    ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>