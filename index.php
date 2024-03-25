<?php

require_once "classes/Actualite.php";

session_start();
    $actualite = Actualite::getListe();
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
        <?php foreach ($actualite as $article) { ?>
            <a href="article.php?id=<?= $article->id ?>">
                <div class="carte-article">
                    <p class="titre-carte"><?= $article->titre ?></p>
                    <img class="image-carte" src="<?= $article->image ?>" alt="image article" title="image article" />
                    <div class="desc-article">
                        <p class="date-publication">Date de publication : <?= $article->date_publication ?></p>
                        <p class="auteur-article">Auteur : <?= $article->auteur ?></p>
                        <p class="tags-article">Tags : <?= $article->tags ?></p>
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
