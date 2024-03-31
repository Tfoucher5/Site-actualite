<?php

require_once 'classes/Connexionbdd.php';

class Page{
    
    public static function getIdPages(){
        $sql = 'SELECT id FROM page';
        $data = Connexionbdd::query($sql);
        return $data;
    }
    
    public static function getInfosPage($ref_nom) {
        
        $sql = 'SELECT * FROM page WHERE ref_nom = :ref';
        $params = [':ref' => $ref_nom];
    
        $data = Connexionbdd::query($sql, $params);
        
        
        // Si aucune donnée n'est retournée, retourner un tableau vide
        if (!$data) {
            return [];
        }
        
        // Retourner le premier élément du tableau $data
        return $data[0];
    }

}
