<?php include_once('base_donnee.php'); 

$sql = 'SELECT * FROM 
actualites,tags,auteurs,sources,liens WHERE 
actualites.id_auteur = auteurs.id_auteur AND 
actualites.id_tag = tags.id_tag AND 
actualites.id_nom_source = sources.id_source AND
actualites.id_lien = liens.id_lien ORDER BY
actualites.date_modification DESC LIMIT 5';
$temp = $pdo -> prepare($sql);
$temp -> execute();
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	</head>
	<body>
        <?php 
        include('header.php');
        echo "<main>";
        if(isset($_REQUEST['confirmation'])){
            $confirmation = htmlentities($_REQUEST['confirmation']);
            if($confirmation == 1){
                echo "message envoyé";
                $confirmation = 0;
            }
        }
        foreach ($temp as $t){
            $date_modification = $t['date_modification'];
            echo 
            "
                <div>
                    <a href='article.php?id=".$t['id_actualite']." '>
                        <img class='miniature' src='images/".$t['image']."'/>
                        <p onload='calculMiseEnLigne()'>".$t['date_modification']."</p>
                        <p>".$t['titre']."</p>
                    </a>
                </div>";
        }
        echo "</main>";
        include('footer.php');
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</body>
</html>
