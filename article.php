<?php   
session_start();

require_once "classes/Actualite.php";

$actualite = Actualite::getArticle();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>

<header>
    <?php include 'include/html/header.html'; ?>
</header>

<main>
    <div class="content">
        <?php foreach ($actualite as $article) { ?>
            <h3 class="titre-auteur"><?= $article->titre ?> écrit par <em><?= $article->auteur ?></em></h3>
            <img class="img" src="<?= $article->image ?>" alt="image article" title="image article" />
            <div class="a-droite">
                <p class="content-article"><?= $article->corps_texte ?></p>
            </div>
            <div class="infos-supplementaires">
                <p class="dates"><strong>Date de publication : </strong><?= $article->date_publication ?>
                    <strong>. Dernière modification le : </strong><?= $article->date_revision ?></p>
                <p class="tags"><strong>Tags : </strong><?= $article->tags ?></p>
                <p class="source"><strong>Source(s) : </strong><?= $article->sources ?></p>
            </div>
        <?php } ?>
        <div class="retour-container">
            <a class="bouton-retour" href="index.php">Retour</a>
        </div>
    </div>
</main>

<footer>
    <?php include 'include/html/footer.html'; ?>
</footer>
</body>
</html>

