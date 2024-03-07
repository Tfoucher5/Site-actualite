<?php

// Sélection des données depuis la base de données
$sql = 'SELECT * FROM article ORDER BY date_revision LIMIT 5 ';
$temp = $pdo->prepare($sql);
$resultats = $temp->execute();

$donnee_article = null;
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Récupérer les données de l'article avec l'ID spécifié
    $query = "SELECT * FROM article WHERE id_article = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $donnee_article = $stmt->fetch(PDO::FETCH_ASSOC);
}


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
