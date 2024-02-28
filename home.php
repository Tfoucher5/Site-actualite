<?php

include("connexion_base.php");

// Sélection des données depuis la base de données
$sql = 'SELECT * FROM article ORDER BY date_publication, date_revision LIMIT 5 ';
$temp = $pdo->prepare($sql);
$temp->execute();

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
        <?php include("header.html");?>  
    </header>  <br />
    <main>
        <?php
            while ($resultats = $temp->fetch()){
                echo '<a href="article.php?id=' . $resultats['id_article'] . '">';
                echo '<div class="carte-article">';
                    echo '<p class="titre-carte">' . $resultats['titre'] . '</p>';
                    echo '<img class="image-carte" src="' .  $resultats['image'] . '" alt="image article" title="image article" />';
                    echo '<div class="desc-article">';
                        echo '<p class="date-publication">Date de publication : ' . $resultats['date_publication'] . '</p>';
                        echo '<p class="auteur-article">Auteur : ' .  $resultats['auteur'] . '</p>';
                        echo '<p class="tags-article">Tags : ' .  $resultats['tags'] . '</p>';
                    echo '</div>';
                echo '</div>';
                echo '</a>';
            }
    ?>
        
    </main>

    <footer>
        <?php include'footer.html'?>
    </footer>
</body>
</html>