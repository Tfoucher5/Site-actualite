<?php
class Connexionbdd {
        public $host = '127.0.0.1';
        public $db = 'actualite';
        public $user = 'root';
        public $pass = '';
        public $port = '3306';
        public $charset = 'utf8mb4';

        public $dsn;
        public $pdo;

        public function __construct(){
            $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset};port={$this->port}";
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
        }
}