<?php 

require_once 'Connexionbdd.php';

abstract class Admin extends Connexionbdd {
    
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
        $sql = "SELECT * FROM categories WHERE id = :id";
        $params = array(':id' => $id);
        $data = Connexionbdd::query($sql, $params);
        return isset($data[0]) ? $data[0] : null;
    }

    public static function modification($id, $nom, $chemin, $categorie_id){
        $sql = "UPDATE categories SET nom = :nom, chemin = :chemin, categorie_id = :categorie_id WHERE id = :id";
        $params = array(':id' => $id, ':nom' => $nom, ':chemin' => $chemin, ':categorie_id' => $categorie_id);
        Connexionbdd::query($sql, $params);
        header ('Location: administration.php');
    }

    public static function suppression($id){
        $sql = "DELETE FROM categories WHERE id = :id";
        $params = array(':id' => $id);
        Connexionbdd::query($sql, $params);
        header('Location: administration.php');
    }
}