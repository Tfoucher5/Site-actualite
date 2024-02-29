<?php
    include"include/connexion_base.php";

    session_abort();

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        // Récupérer les données de l'étudiant avec l'ID spécifié
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

<?php 
    if (isset($_REQUEST['nom']))

?>

<header>
    <?php include'include/html/header.html';?>
</header>
<main>
    <div class="content">
        <h3 class="titre-auteur"><?php echo $donnee_article['titre']; ?> écrit par <em><?php echo $donnee_article['auteur'];?></em></h3>
        <img class="img" src="<?php echo $donnee_article['image'] ?>" alt="image article" title="image article" />
        <div class="a-droite">
            <p class="content-article"><?php echo $donnee_article['corps_texte']; ?></p>
        </div>
        <div class="infos-supplementaires">
            <p class="dates"><strong>Date de  publication : </strong><?php echo $donnee_article['date_publication']; ?><strong>. Dernière modification le : </strong><?php echo $donnee_article['date_revision']; ?>
            <p class="tags"><strong>Tags : </strong><?php echo $donnee_article['tags']; ?></p>
            <p class="source"><strong>Source(s) : </strong><?php echo $donnee_article['sources']; ?></p>
        </div>
        <div class="retour-container">
            <a class="bouton-retour" href="home.php">Retour</a>
        </div>
    </div>
</main>
<footer>
    <?php include'include/html/footer.html';?>
</footer>
</body>
</html>