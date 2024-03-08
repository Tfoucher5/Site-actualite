<?php

require_once "Connexionbdd.php";

class Actualite extends Connexionbdd{
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

    

    public static function getListe(){

        $sql = 'SELECT * FROM article ORDER BY date_revision LIMIT 5 ';
        $temp = Connexionbdd::getPdo()->prepare($sql);
        $temp->execute();
    
        $data = $temp->fetchAll(PDO::FETCH_ASSOC);
    
        $actualites = [];
    
        foreach ($data as $values) {
            $actualites[] = new Actualite($values);
        }
    
        return $actualites;
    }

    public static function getArticle() {
        
        $actualites = [];

        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            // Récupérer les données de l'article avec l'ID spécifié
            $query = "SELECT * FROM article WHERE id_article = :id";
            $stmt = Connexionbdd::getPdo()->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            // Directly assign the fetched data to $actualites
            $donnee_article = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($donnee_article as $values) {
                $actualites[] = new Actualite($values);
            }
        }

        return $actualites;
    }
}
