<?php

require_once 'Connexionbdd.php';

abstract class Categories extends Connexionbdd {

    public static function getCategories(){
            $sql = 'SELECT * FROM categories WHERE categorie_id IS NULL';
            $categories = Categories::query($sql);
            return $categories;
    }

    public static function getSousCategories($categorie_id){
        $sql = 'SELECT * FROM categories WHERE categorie_id = :categorie_id';
    
        $souscategories = Connexionbdd::query($sql, [':categorie_id' => $categorie_id]);
    
        return $souscategories;
    }
}