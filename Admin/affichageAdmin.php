<?php
require_once('admin.php');
Admin::delete();
Admin::modif();

class affichageAdmin extends Admin{
    public static function afficherTableau(){?>
        <table border=1>
            <tr>
                <td>Nom</td>
                <td>Parent</td>
            </tr> 
            <?php
            $temp = Admin::getAdminMenu();
            foreach($temp as $t){
                $tableau = new Admin($t);
                ?>
                <tr>
                    <td><?= $tableau->nom;?></td>
                    <td><?=self::afficherTableauCategorie($tableau);?></td>
                    <td><?=self::afficherTableauForm($tableau);?></td>
            <?php } ?>
        </table>  
                    <form action="modifier_categorie.php" method="post">
                        <input type="hidden" name="nom" value="' . $r['nom'] . '">
                        <input type="submit" class="add-btn delete-btn" value="➕">
                    </form>
            <?php 
            }
        
    public static function afficherTableauCategorie($tableau){
        if($tableau->categorie==null){
            echo "aucun";
        } else{
            echo $tableau->categorie;
        }
    }
    public static function afficherTableauForm($tableau){?>
            <td>
                <form action="page_admin.php" method="post">
                    <input type="hidden" name="id_categorie" value="<?=$tableau->id_categorie?>">
                    <input type="submit" value="🗑️">
                </form>
            </td>
            <td>
                <form action="modifier_categorie.php?id=<?=$tableau->id_categorie?>" method="post">
                    <input type="hidden" name="nom" value="<?=$tableau->id_categorie?>">
                    <input type="submit" value="✏️">
                </form>
            </td>
        </tr>

<?php
    }
    public static function afficherPageModif(){
        $retrieve = Admin::retrieve();?>
        <form action="modifier_categorie.php?id=<?=isset($retrieve->id_categorie)?$retrieve->id_categorie:'' ;?>">
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom" placeholder="Nom" value="<?=isset($retrieve->nom) ? $retrieve->nom : ''; ?>" required>
        <label for="parent">Parent : </label>
        <input type="text" name="parent" id="parent" value="<?=isset($retrieve->categorie) ? $retrieve->categorie : ''?>" placeholder="">
        <input type="submit" name="modif"></input>
        <br/><br/>
        <a href="page_admin.php">Retour</a>
    </form>
    <?php
    }
}