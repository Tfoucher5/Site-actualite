<?php 
require_once 'classes/Categories.php';

$categories = Categories::getCategories();
?>

<div class="logo-header">
    <img src="images/logo.png" alt="Logo 'site'" title="Logo 'site'" />
</div>
<div class="titre-header">
    <h1>Live Actu</h1>
    <p>Toute l'actualité en direct</p>
</div>
<div class="menu-header">
    <nav>
        <?php foreach ($categories as $categorie) { ?>
            <select onchange="location = this.value;">
                <option value=""><?= $categorie['nom'] ?></option>
                <?php
                $souscategories = Categories::getSousCategories($categorie['id']);
                
                foreach ($souscategories as $souscategorie) { ?>
                    <option value="<?= $souscategorie['chemin'] ?>"><?= $souscategorie['nom'] ?></option>
                <?php } ?>
            </select>
        <?php } ?>
        <a href="administration.php">Administration</a>
    </nav>
</div>
