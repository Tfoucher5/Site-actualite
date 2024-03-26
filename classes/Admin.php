<?php 

require_once 'Connexionbdd.php';

class Admin extends Connexionbdd{
    
    public static function getDonnees(){
        $sql = 'SELECT * FROM categories';
        $categories = Connexionbdd::query($sql);
        return $categories;
    }

    public static function getDonneesAjout($nom, $chemin, $categorie_id){
        $sql = "INSERT INTO categories (nom, chemin, categorie_id) VALUES ('$nom', '$chemin', '$categorie_id')";
        Connexionbdd::ajoutCategorie($sql);
        header ('Location: administration.php');
    }

    public static function getValeurs($id){
        $sql = "SELECT * FROM categories WHERE id = '$id'";
        $data = Connexionbdd::query($sql);
        return $data;
    }
}