<?php

include "include/connexion_base.php";
require_once "classes/Actualite.php";

session_start();

// Sélection des données depuis la base de données
$sql = 'SELECT * FROM article ORDER BY date_revision LIMIT 5 ';
$temp = $pdo->prepare($sql);
$temp->execute();

$actualites = []; // Array to store Actualite objects

while ($resultats = $temp->fetch()) {
    $actualite = new Actualite(
        $resultats['id_article'],
        $resultats['titre'],
        $resultats['corps_texte'],
        $resultats['image'],
        $resultats['date_publication'],
        $resultats['date_revision'],
        $resultats['auteur'],
        $resultats['tags'],
        $resultats['sources']
    );

    $actualites[] = $actualite;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\styles.css">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_SESSION['validation'])){
        echo $_SESSION['validation'];
    }
    ?>
    <header>
        <?php include 'include/html/header.html';?>
    </header>  
    <br />
    <main>
        <?php foreach ($actualites as $actualite) { ?>
            <a href="article.php?id=<?= $actualite->id ?>">
                <div class="carte-article">
                    <p class="titre-carte"><?= $actualite->titre ?></p>
                    <img class="image-carte" src="<?= $actualite->image ?>" alt="image article" title="image article" />
                    <div class="desc-article">
                        <p class="date-publication">Date de publication : <?= $actualite->date_publication ?></p>
                        <p class="auteur-article">Auteur : <?= $actualite->auteur ?></p>
                        <p class="tags-article">Tags : <?= $actualite->tags ?></p>
                    </div>
                </div>
            </a>
        <?php } ?>
    </main>

    <footer>
        <?php include 'include/html/footer.html';?>
    </footer>
</body>
</html>
