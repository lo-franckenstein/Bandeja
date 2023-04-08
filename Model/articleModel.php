<?php
function modifyIdArticle($pdo) {
    try {
        $query = "update article set utilisateurId = 0 WHERE utilisateurId =:utilisateurId";
        $modifyIdArticle = $pdo->prepare($query);
        $modifyIdArticle->execute([
            "utilisateurId" => $_SESSION["user"]->id
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}


function searchAllArticle($pdo)
{
    try{
        $query = "select articleTitre, articleDescription from article"; 
        $newUser = $pdo->prepare($query);
        $newUser->execute([]);
        return $articles
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}




?>