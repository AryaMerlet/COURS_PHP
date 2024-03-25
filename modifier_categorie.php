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
            <table border=1>
                <tr>
                    <td>ID</td>
                    <td>Nom</td>
                    <td>Parent</td>
                </tr> 
            <?php 
            $temp = Admin::getAdminMenu();
            foreach($temp as $t){
                $tableau = new Admin($t);
                ?>
                <tr>
                    <td><?= $tableau->id_categorie;?></td>
                    <td><?= $tableau->nom;?></td>
                    <td><?php
                    if($tableau->categorie==null){
                        echo "aucun";
                    } else{
                        echo $tableau->categorie;
                    }
                    ?></td>
                    <td><form action="page_admin.php" method="post">
                        <input type="hidden" name="id_categorie" value="<?=$tableau->id_categorie?>">
                        <input type="submit" value="🗑️">
                        
                    </form></td>
                    <td><form action="modifier_categorie.php?id='<?=$tableau->id_categorie?>'" method="post">
                        <input type="hidden" name="nom" value="<?=$tableau->id_categorie?>">
                        <input type="submit" value="✏️">
                    </form></td>
                </tr>
            <?php 
            }
            ?> 
                <form action="ajout_formation.php" method="post">
                    <input type="hidden" name="nom" value="' . $r['nom'] . '">
                    <input type="submit" class="add-btn delete-btn" value="➕">
                </form>
            </table>
            <form action="#" method="post">

            </form>
        </main>
        <footer>
            <?=include('footer.php');?>
        </footer>
        <script src="JS/POO_js.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</body>
</html>
