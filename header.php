<a href="index.php"><img src="images_mep/logo.png" alt="" id="logo" href="home.php"/></a>
<p id="marque">Axis</p>
<div id="navbar">
    <?php 
    require_once('menu.php');
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
<p id='barre'></p>
