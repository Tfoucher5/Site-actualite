<?php

class Contact{
    public $prenom;
    public $nom;
    public $mail;

    public function __construct(string $prenom, string $nom, string $mail){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->mail = $mail;
    }
}