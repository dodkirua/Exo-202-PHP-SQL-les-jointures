<?php
require "import.php";
/**
 * 1. Commencez par importer le script SQL disponible dans le dossier SQL.
 * 2. Connectez vous à la base de données blog.
 */

/**
 * 3. Sans utiliser les alias, effectuez une jointure de type INNER JOIN de manière à
 * récupérer :
 *   - Les articles :
 *     * id
 *     * titre
 *     * contenu
 *     * le nom de la catégorie ( pas l'id, le nom en provenance de la table Categorie ).
 *
 * A l'aide d'une boucle, affichez chaque ligne du tableau de résultat.
 */

$db = new ArticleManager();
$db->getArticle();


/**
 * 4. Réalisez la même chose que le point 3 en utilisant un maximum d'alias.
 */
echo "<br>";
echo "<br>";
$db->getArticleAlias();


/**
 * 5. Ajoutez un utilisateur dans la table utilisateur.
 *    Ajoutez des commentaires et liez un utilisateur au commentaire.
 *    Avec un LEFT JOIN, affichez tous les commentaires et liez le nom et le prénom de
 * l'utilisateur ayant écris le comentaire.
 */
$com = new CommentaireManager();
echo "<br>";
echo "<br>";
$com->getCom();