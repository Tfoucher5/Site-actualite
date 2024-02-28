<?php
include 'connexion_base.php';

session_start();

if (isset($_POST['soumettre'])) {
    // récupérer les valeurs saisies
    $prenom = htmlentities($_POST['prenom']);
    $nom = htmlentities($_POST['nom']);
    $mail = htmlentities($_POST['mail']);

    $sql = 'INSERT INTO contact (prenom, nom, mail) VALUES (:prenom, :nom, :mail)';
    try {
        $temp = $pdo->prepare($sql);
        $temp->bindParam(":prenom", $prenom, PDO::PARAM_STR);
        $temp->bindParam(":nom", $nom, PDO::PARAM_STR);
        $temp->bindParam(":mail", $mail, PDO::PARAM_STR);
        $temp->execute();
        $_SESSION['contact'] = "Contact ajouté avec succès!";
        header('home.php');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        exit();
    }
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
        <div class="form-container">
            <p class="titre-formulaire">Nous contacter</p>
            <form action="contact.php" method="post">
                <label class="input-label" for="nom">Nom : </label>
                <input class="input-box" type="text" name="nom" maxlength="50" placeholder="Nom" />

                <label class="input-label" for="prenom">Prénom : </label>
                <input class="input-box" type="text" name="prenom" maxlength="50" placeholder="Prénom" />

                <label class="input-label" for="mail">E-mail : </label>
                <input class="input-box" type="email" name="mail" maxlength="100" placeholder="E-mail" />
                <input class="submmit-bouton" name="soumettre" type="submit" value="prendre contact" />
            </form>
        </div>
    </main>
    <footer>
        <?php include'footer.html';?>
    </footer>
</body>
</html>