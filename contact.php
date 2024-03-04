<?php
include"include/connexion_base.php";
require_once "classes/Contact.php";

session_start();

if (isset($_POST['soumettre'])) {

    $contact = new Contact($_REQUEST['prenom'], $_REQUEST['nom'], $_REQUEST['mail']);
    $sql = 'INSERT INTO contact (prenom, nom, mail) VALUES (:prenom, :nom, :mail)';
    try {
        $temp = $pdo->prepare($sql);
        $temp->bindParam(":prenom", $contact->prenom, PDO::PARAM_STR);
        $temp->bindParam(":nom", $contact->nom, PDO::PARAM_STR);
        $temp->bindParam(":mail", $contact->mail, PDO::PARAM_STR);
        $temp->execute();
        $_SESSION['contact'] = "Contact ajouté avec succès!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        exit();
    }
    if ($temp->execute()) {
        $_SESSION['validation'] = "Vos informations ont bien été enregistrées";
        header('Location: index.php');
        exit();
    } else {
        echo 'Modification failed';
    }
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
        <?php include'include/html/header.html';?>
    </header>
    <main>
        <div class="form-container">
            <p class="titre-formulaire">Nous contacter</p>
            <form action="contact.php" method="post">
                <label class="input-label" for="nom">Nom : </label>
                <input class="input-box" type="text" name="nom" maxlength="50" placeholder="Nom" required /><br />

                <label class="input-label" for="prenom">Prénom : </label>
                <input class="input-box" type="text" name="prenom" maxlength="50" placeholder="Prénom" required /><br />

                <label class="input-label" for="mail">E-mail : </label>
                <input class="input-box" type="email" name="mail" maxlength="100" placeholder="E-mail" required /><br />
                <input class="submit-bouton" name="soumettre" type="submit" value="prendre contact" />
            </form>
        </div>
    </main>
    <footer>
        <?php include'include/html/footer.html';?>
    </footer>
</body>
</html>