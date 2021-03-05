<?php
class CommentaireManager{
    private ?PDO $db;

    public function __construct(){
        $this->db = DB::getInstance();
    }

    public function getCom(){
        $pdo = DB::getInstance();
        $stmt = $pdo->prepare("
            SELECT Commentaire.id as commentaireId, Commentaire.content as contenue,
            Utilisateur.firstName AS nom, Utilisateur.lastName as prenom
            FROM Commentaire
            LEFT JOIN Utilisateur on Commentaire.article_fk = Utilisateur.id   

        ");
        $stmt->execute();
        foreach ($stmt->fetchAll() as $value){
            echo "<div>";
            foreach ($value as $key => $item){
                echo "<div>$key : $item </div>";
            }
            echo "</div>";
            echo "<br>";
            /* echo "<pre>";
             print_r($value);
             echo "</pre>";*/

        }
    }
}