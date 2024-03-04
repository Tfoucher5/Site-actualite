<?php

class Actualite{
    public $id;
    public $titre;
    public $corps_texte;
    public $image;
    public $date_publication;
    public $date_revision;
    public $auteur;
    public $tags;
    public $sources;

    public function __construct(int $id,
                                string $titre, 
                                string $corps_texte, 
                                string $image, 
                                string $date_publication, 
                                string $date_revision, 
                                string $auteur, 
                                string $tags, 
                                string $sources){

        $this->id = $id;
        $this->titre = $titre;
        $this->corps_texte = $corps_texte;
        $this->image = $image;
        $this->date_publication = $date_publication;
        $this->date_revision = $date_revision;
        $this->auteur = $auteur;
        $this->tags = $tags;
        $this->sources = $sources;
                                
    }
}
