<?php
require_once('menu.php');
Admin::delete();
Admin::modif();
Admin::add();
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
            <?=include_once('header.php');?>
        </header>
        <main>
            <form action="">
                <label for="nom">Nom : </label>
                <input type="text" name="nom" id="nom" placeholder="Nom" required>
                <label for="parent">Parent : </label>
                <input type="text" name="parent" id="parent" placeholder="">
                <button type="submit">Ajouter</button>
                <br/><br/>
                <a href="page_admin.php">Retour</a>
            </form>
            </form>
        </main>
        <footer>
            <?=include('footer.php');?>
        </footer>
        <script src="JS/POO_js.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</body>
</html>
