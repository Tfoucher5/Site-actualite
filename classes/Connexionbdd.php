<?php

class Connexionbdd 
{

    public static function getPdo(){
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=actualite;charset=utf8mb4;port=3306", "root");
        return $pdo;
    }

    public static function ajout($sql){
        $pdo = Connexionbdd::getPdo();
        $temp = $pdo->prepare($sql);
        return $temp;
    }

    public static function query($sql, $params = []) {
        $pdo = Connexionbdd::getPdo();
        $stmt = $pdo->prepare($sql);
        
        foreach ($params as $param => $value) {
            $stmt->bindValue($param, $value);
        }
        
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $data;
    }
}
