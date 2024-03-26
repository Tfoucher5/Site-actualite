<?php

require_once 'classes/Admin.php';
$categories = Admin::getdonnees();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Afficher un tableau avec toutes les Categories et sous-categories puis -->
<a href="ajoutCategorie.php">Ajouter une catégorie</a>
<table cellpadding="30" border="1px">
    <tr>
        <td>Id</td>
        <td>Nom</td>
        <td>Chemin</td>
        <td>Catégorie Id</td>
        <td>Modifier / Supprimer</td>
        
    </tr>
    <?php foreach ($categories as $categorie){?>
    <tr>
        <td><?= $categorie['id']?></td>
        <td><?= $categorie['nom']?></td>
        <td><?= $categorie['chemin']?></td>
        <td><?= $categorie['categorie_id'] ?></td>
        <td><a href="modificationCategorie.php?id=<?=$categorie['id']?>">Modifier</a> / <a href="">Supprimer</a></td>
    </tr>
    <?php }?>
    
</table>
<!-- Ajouter un bouton pour ajouter des nouvelles (sous-)catégories -->
<!-- Ajouter deux autres boutons au tableau pour modifier ou supprimer une (sous-)catégorie -->
    
</body>
</html>