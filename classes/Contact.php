<?php

class Contact{
    public $prenom;
    public $nom;
    public $mail;

    public function __construct(array $values){
        $this->prenom = $values['prenom'];
        $this->nom = $values['nom'];
        $this->mail = $values['mail'];
    }

    public static function sendContact($contact) {
        $host = '127.0.0.1';
        $db = 'actualite';
        $user = 'root';
        $pass = '';
        $port = '3306';
        $charset = 'utf8mb4';
    
        $dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
        $pdo = new PDO($dsn, $user, $pass);
    
        $sql = 'INSERT INTO contact (prenom, nom, mail) VALUES (:prenom, :nom, :mail)';
    
        try {
            // Data validation - you may want to implement more robust validation
            if (empty($contact->prenom) || empty($contact->nom) || empty($contact->mail)) {
                $_SESSION['validation'] = "Veuillez remplir tous les champs.";
                header('Location: contact.php'); // Redirect to the contact page or another appropriate page
                exit();
            }
    
            $temp = $pdo->prepare($sql);
            $temp->bindParam(":prenom", $contact->prenom, PDO::PARAM_STR);
            $temp->bindParam(":nom", $contact->nom, PDO::PARAM_STR);
            $temp->bindParam(":mail", $contact->mail, PDO::PARAM_STR);
    
            if ($temp->execute()) {
                $_SESSION['validation'] = "Vos informations ont bien été enregistrées";
                header('Location: index.php');
                exit();
            } else {
                echo "l'ajout d'un contact a échoué";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            exit();
        }
    }
}    