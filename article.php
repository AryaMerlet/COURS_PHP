<?php 
require_once('actualite.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <?php require_once('header.php'); ?>
    </header>
<?php
    $temp = Actualite::getArticle();
    foreach ($temp as $t){
        $actualite = new Actualite($t); ?>
        <main>
            <section id='section'> 
                <h2><?=$actualite->titre?></h2>                
                <h3><?=$actualite->sous_titre?></h3>
                <aside>
                    <img class="image_article" src='images/<?=$actualite->image?>'/>
                    <p><?=$actualite->getAuteur()?></p>
                    <p>Publié le : <?=$actualite->date_publication?> Dénière modification le : <?=$actualite->date_modification?></p>
                </aside>
                <article>
                    <p><?=$actualite->article?></p>
                    <a href="<?=$actualite->id_lien?>"><?=$actualite->id_nom_source?></a>
                </article>
            </section>
        </main> 
    <?php }?>
    <footer>
        <?php require_once('footer.php')?>
    </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>