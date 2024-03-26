<?php
require_once 'classes/Admin.php';
$categories = Admin::getdonnees();

if (isset($_GET['id'])){
    $id = $_GET['id'];
    Admin::suppression($id); // Si un ID est présent dans l'URL, effectuer la suppression
}
?>

<!DOCTYPE html>
<html lang="en" class="admin">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>

<div class="box-buttons">
    <a href="index.php" class="bouton-ajouter">Retour</a>
    <a href="ajoutCategorie.php" class="bouton-ajouter">Ajouter une catégorie</a>
</div>
<div class="tableau-admin">
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
            <td>
                <a href="modificationCategorie.php?id=<?= $categorie['id']?>" class="boutons-tableau">Modifier</a> / 
                <a href="administration.php?id=<?= $categorie['id']?>" class="boutons-tableau" onclick="return confirm('Voulez-vous vraiment supprimer cette catégorie ?')">Supprimer</a>
            </td>
        </tr>
        <?php }?>
        
    </table>
</div>
    
</body>
</html>
