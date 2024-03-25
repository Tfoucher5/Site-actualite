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
    
        $sql = 'INSERT INTO contact (prenom, nom, mail) VALUES (:prenom, :nom, :mail)';
    
        try {
            if (empty($contact->prenom) || empty($contact->nom) || empty($contact->mail)) {
                header('Location: contact.php'); 
                exit();
            }
    
            $temp = Connexionbdd::ajout($sql);
            $temp->bindParam(":prenom", $contact->prenom, PDO::PARAM_STR);
            $temp->bindParam(":nom", $contact->nom, PDO::PARAM_STR);
            $temp->bindParam(":mail", $contact->mail, PDO::PARAM_STR);
    
            if ($temp->execute()) {
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