<?php
require_once('Menu.php');

class affichageMenu extends Menu {
    public static function afficherMenu() {
        $temp = Menu::getMenu();
        foreach ($temp as $t){
            $menu = new Menu($t) ?>
            <p class="nav"><?=$menu->nom?></p>
            <?php
            $res = Menu::getSousMenu($menu->nom); 
            foreach($res as $r){ ?>
                <a href="<?=$r['nom']?>.php"><?=$r['nom']?></a>
            <?php }
            }?>
    </div>
<?php
    }

}