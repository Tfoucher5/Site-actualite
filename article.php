<?php
include "include/connexion_base.php";

session_abort();

require_once "classes/Actualite.php";

$donnee_article = null;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Récupérer les données de l'article avec l'ID spécifié
    $query = "SELECT * FROM article WHERE id_article = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $donnee_article = $stmt->fetch(PDO::FETCH_ASSOC);
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

<header>
    <?php include 'include/html/header.html'; ?>
</header>

<main>
    <div class="content">
        <?php
        if ($donnee_article) {
            $actualite = new Actualite(
                $donnee_article['id_article'],
                $donnee_article['titre'],
                $donnee_article['corps_texte'],
                $donnee_article['image'],
                $donnee_article['date_publication'],
                $donnee_article['date_revision'],
                $donnee_article['auteur'],
                $donnee_article['tags'],
                $donnee_article['sources']
            );
        ?>
        <h3 class="titre-auteur"><?= $actualite->titre ?> écrit par <em><?= $actualite->auteur ?></em></h3>
        <img class="img" src="<?= $actualite->image ?>" alt="image article" title="image article" />
        <div class="a-droite">
            <p class="content-article"><?= $actualite->corps_texte ?></p>
        </div>
        <div class="infos-supplementaires">
            <p class="dates"><strong>Date de publication : </strong><?= $actualite->date_publication ?>
                <strong>. Dernière modification le : </strong><?= $actualite->date_revision ?></p>
            <p class="tags"><strong>Tags : </strong><?= $actualite->tags ?></p>
            <p class="source"><strong>Source(s) : </strong><?= $actualite->sources ?></p>
        </div>
        <?php } else { ?>
        <p>Article non trouvé.</p>
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
