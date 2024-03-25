<?php 

class Admin extends Connexionbdd{
    
    public static function getDonnees(){
        $sql = 'SELECT * FROM categories';
        $categories = Categories::query($sql);
        return $categories;
    }
}