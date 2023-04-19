<?php
function modifyIdArticle($pdo) {
    try {
        $query = "update article set utilisateurId = null WHERE utilisateurId =:utilisateurId";
        $modifyIdArticle = $pdo->prepare($query);
        $modifyIdArticle->execute([
            "utilisateurId" => $_SESSION["user"]->utilisateurId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function search3News($pdo)
{
    try{
        $query = "SELECT articleTitre, articleImage FROM `article_categorie` inner join article on article_categorie.articleId = article.articleId where categorieId = 2 order by articleDate LIMIT 3;"; 
        $selectSchool3 = $pdo->prepare($query);
        $selectSchool3->execute([]);
        $articles = $selectSchool3->fetchAll();
        return $articles;
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}




?>