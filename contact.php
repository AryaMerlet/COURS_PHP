<?php
// script de connexion
require_once('class_contact.php');
require_once('base_donnee.php');
Contact::ifIsset($pdo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <footer>
        <?php include('header.php');?>
    </footer>
    <div class="label_home">
        <form action="#" method="post">
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
    <footer>
        <?php include('footer.php'); ?>
    </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>