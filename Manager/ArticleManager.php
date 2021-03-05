<?php
class ArticleManager{
    private ?PDO $db;

    public function __construct() {
        $this->db = DB::getInstance();
    }


    public function getArticle(){
        $pdo = DB::getInstance();
        $stmt = $pdo->prepare("
            SELECT Article.id, Article.title, Article.content, Categorie.name
            FROM Article
            INNER JOIN Categorie ON Article.category_fk = Categorie.id
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

    public function getArticleAlias() {
        $pdo = DB::getInstance();
        $stmt = $pdo->prepare("
            SELECT Article.id as articleId, Article.title as articleTitle, Article.content as articleContent, 
                   Categorie.name as categorieName
            FROM Article
            INNER JOIN Categorie ON Article.category_fk = Categorie.id
        ");
        $stmt->execute();
        foreach ($stmt->fetchAll() as $value) {
            echo "<div>";
            foreach ($value as $key => $item) {
                echo "<div>$key : $item </div>";
            }
            echo "</div>";
            echo "<br>";


        }
    }
}