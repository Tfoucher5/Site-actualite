<?php

require_once 'classes/Page.php';

if (isset($_GET['id'])) {
    $ref_nom = $_GET['id'];
    // Récupérer les informations de la page 
    $pages = Page::getInfosPage($ref_nom);

    if (empty($pages)) {
        echo 'Aucune page correspondante trouvée';
        exit; // Arrête l'exécution du script car aucune page n'a été trouvée
    }
} else {
    echo 'Aucune page correspondante trouvée';
    exit; // Arrête l'exécution du script car aucun ID de page n'a été fourni
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title><?= isset($pages['nom']) ? $pages['nom'] : 'Titre par défaut' ?></title>
</head>

<body>
    <header>
        <?php include 'include/header.php'; ?>
    </header>
    <br />
    <main>
        <div class="content">
            <h3 class="titre-auteur"><?= $pages['nom'] ?></h3>
            <img class="img" src="<?= $pages['image'] ?>" alt="image article" title="image article" />
            <div class="a-droite">
                <p class="content-article"><?= $pages['contenu'] ?></p>
            </div>
            <div class="infos-supplementaires">
                <p class="dates"><strong>Date de publication : </strong><?= $pages['date_publication'] ?></p>
                <p class="tags"><strong>Tags : </strong><?= $pages['tags'] ?></p>
            </div>
            <div class="retour-container">
                <a class="bouton-retour" href="index.php">Retour</a>
            </div>
        </div>
    </main>
    <footer>
        <?php include 'include/footer.html'; ?>
    </footer>
</body>

</html>
