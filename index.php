<?php
require_once('actualite.php');
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset= "UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/style.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	</head>
	<body>
        <header>
            <?=require_once('header.php');?>
        </header>
        <div id="notif"></div>
        <main>
        <?php 
        if(isset($_REQUEST['confirmation'])){
            $confirmation = htmlentities($_REQUEST['confirmation']);
            if($confirmation == 1){
                echo "message envoyé";
                $confirmation = 0;
            }
        }
        $temp = Actualite::getActualite();
        foreach ($temp as $t){
            $actualite = new Actualite($t); ?>
                <div>
                    <a href='article.php?id=<?=$actualite->id_actualite?>'>
                        <img class='miniature' src='images/<?=$actualite->image?>'/>
                        <p onload='calculMiseEnLigne()'><?=$actualite->date_modification?></p>
                        <p><?=$actualite->titre?></p>
                    </a>
                </div>
        <?php } ?>
        </main>
        <footer>
            <?=require_once('footer.php');?>
        </footer>
        <script src="JS/POO_js.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</body>
</html>
