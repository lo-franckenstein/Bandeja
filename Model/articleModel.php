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


?>