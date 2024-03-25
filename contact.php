<?php
require_once "classes/Contact.php";

session_start();

if (isset($_POST['soumettre'])) {
    // Set values from the form
    $values = array(
        'prenom' => $_POST['prenom'],
        'nom' => $_POST['nom'],
        'mail' => $_POST['mail'],
    );

    // Create an instance of Contact and pass the values
    $contact = new Contact($values);

    // Call the sendContact method
    $contact->sendContact($contact);
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
        <?php include 'include/header.php';?>
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
        <?php include 'include/footer.html';?>
    </footer>
</body>
</html>
