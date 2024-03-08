<?php

require_once "Connexionbdd.php";

class Contact extends Connexionbdd{
    public $prenom;
    public $nom;
    public $mail;

    public function __construct(array $values){
        $this->prenom = $values['prenom'];
        $this->nom = $values['nom'];
        $this->mail = $values['mail'];
    }

    public static function sendContact($contact) {
        
        $connexion = new Connexionbdd();
    
        $sql = 'INSERT INTO contact (prenom, nom, mail) VALUES (:prenom, :nom, :mail)';
    
        try {
            // Data validation - you may want to implement more robust validation
            if (empty($contact->prenom) || empty($contact->nom) || empty($contact->mail)) {
                $_SESSION['validation'] = "Veuillez remplir tous les champs.";
                header('Location: contact.php'); // Redirect to the contact page or another appropriate page
                exit();
            }
    
            $temp = $contact->pdo->prepare($sql);
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