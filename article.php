<?php
    include'connexion_base.php';

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
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<header>
    <?php include'header.html';?>
</header>
<main>
    <h3 class="titre"></h3>
</main>
</body>
</html>