    <?php
    include "include/connexion_base.php";

    session_abort();

    require_once "classes/Actualite.php";

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
                $actualite = new Actualite($donnee_article);

                $actualites[] = $actualite;
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
