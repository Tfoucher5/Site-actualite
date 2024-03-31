<?php

require_once "Connexionbdd.php";
require_once "ArticleInterface.php";

class Actualite implements ArticleInterface {
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
        $this->id = $values['id_article'] ?? null;
        $this->titre = $values['titre'] ?? '';
        $this->corps_texte = $values['corps_texte'] ?? '';
        $this->image = $values['image'] ?? '';
        $this->date_publication = $values['date_publication'] ?? '';
        $this->date_revision = $values['date_revision'] ?? '';
        $this->auteur = $values['auteur'] ?? '';
        $this->tags = $values['tags'] ?? '';
        $this->sources = $values['sources'] ?? '';
    }

    public static function getListe(){
        $sql = 'SELECT * FROM article ORDER BY date_revision LIMIT 5';
        $stmt = Connexionbdd::getPdo()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
            $query = "SELECT * FROM article WHERE id_article = :id";
            $stmt = Connexionbdd::getPdo()->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($data as $values) {
                $actualites[] = new Actualite($values);
            }
        }

        return $actualites;
    }
}
