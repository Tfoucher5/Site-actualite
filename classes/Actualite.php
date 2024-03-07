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

    public function __construct(array $values){

        $this->id = $values['id_article'];
        $this->titre = $values['titre'];
        $this->corps_texte = $values['corps_texte'];
        $this->image = $values['image'];
        $this->date_publication = $values['date_publication'];
        $this->date_revision = $values['date_revision'];
        $this->auteur = $values['auteur'];
        $this->tags = $values['tags'];
        $this->sources = $values['sources'];
                                
    }
}
