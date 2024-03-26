<?php 

require_once 'classes/Admin.php';

if (isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $valeurs = Admin::getValeurs($id);
    $nom_defini = $valeurs['nom'];
    $chemin_defini = $valeurs['chemin'];
    $categorieID_defini = $valeurs['categorie_id'];
}

if (isset($_POST['soumettre'])){
    $nom = $_POST['nom']; 
    $chemin = $_POST['chemin'];
    $categorie_id = $_POST['categorie_id'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" onsubmit="<?php if (isset($_POST['soumettre'])){ Admin::getDonneesAjout($nom, $chemin, $categorie_id);}?>">
        <label for="nom">Nom : </label>
            <input type="text" name="nom" id="nom" placeholder="Nom de la Catégorie" value="<?=$nom_defini?>"  />
        <label for="chemin">Chemin : </label>
            <input type="text" name="chemin" id="chemin" placeholder="Chemin vers la page" value="<?=$chemin_defini?>" />
        <label for="categorie_id">Id de la catégorie mère : </label>
            <input type="text" name="categorie_id" id="categorie_id" placeholder="id de la catégorie mère" value="<?=$categorieID_defini?>" />
        <input type="submit" href="enregistrement_reussie.php" name="soumettre" value="Ajouter" />
    </form>
</body>
</html>