<?php 

function verifyConversation($pdo)
{
    try{
        $query = "SELECT * FROM utilisateur_conversation natural join conversation where utilisateurId = :utilisateurIdConnected and conversationId in (SELECT conversationId FROM utilisateur_conversation where utilisateurId = :utilisateurId) and conversationType = 'binaire'"; 
        $verify = $pdo->prepare($query);
        $verify->execute([
            'utilisateurIdConnected' => $_SESSION['user']->utilisateurId,
            'utilisateurId' => $_GET["utilisateurId"]
        ]);
        $verify = $verify->fetch();
        return $verify;
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}


function createConversationBinaire($pdo) {
    try{
        $query = "INSERT conversation(conversationType) values (1)";
        $create = $pdo->prepare($query);
        $create->execute([]);
    } catch(PDOException $e) {
        $message = $e->getMessage();
        die($message);
    };
    $conversationId = $pdo->lastInsertId();
    try{
        $query = "INSERT utilisateur_conversation(conversationId, utilisateurId) values (:conversationId, :utilisateurId)";
        $create =$pdo->prepare($query);
        $create->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId,
            'conversationId' => $conversationId
        ]);
    } catch(PDOException $e) {
        $message = $e->getMessage();
        die($message);
    };
    try{
        $query = "INSERT utilisateur_conversation(conversationId, utilisateurId) values (:conversationId, :utilisateurId)";
        $create =$pdo->prepare($query);
        $create->execute([
            'utilisateurId' => $_GET["utilisateurId"],
            'conversationId' => $conversationId
        ]);
    } catch(PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }

}

function recupAllMessage($pdo) {
    try{
        $query = "SELECT article.articleId, article.articleTitre, article.articleDescription, article.articleDate, article.articleImage, utilisateur.utilisateurPseudo FROM article_categorie INNER JOIN article ON article_categorie.articleId = article.articleId INNER JOIN utilisateur ON article.utilisateurId = utilisateur.utilisateurId WHERE article_categorie.categorieId = 3"; 
        $forum = $pdo->prepare($query);
        $forum->execute([]);
        $articles = $forum->fetchAll();
        return $articles;
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function selectAllConv($pdo, $people) {
    try{
        $query = "SELECT conversationId FROM utilisateur_conversation WHERE utilisateurId =:utilisateurId"; 
        $conversation = $pdo->prepare($query);
        $conversation->execute([
            'utilisateurId' => $people
        ]);
        $AllConv = $conversation->fetchAll();
        return $AllConv;
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function searchIdIdentique($pdo, $conversation) {
    try{
        $query = "SELECT conversationId FROM utilisateur_conversation WHERE conversationId == :TentativeconversationId"; 
        $faq = $pdo->prepare($query);
        // $faq->execute([
        //     'TentativeconversationId' => $
        // ])
        $articles = $faq->fetchAll();
        return $articles;
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function selectAllMessage($pdo) {
    try{
        $query = "SELECT article.articleId, article.articleTitre, article.articleDescription, article.articleDate, utilisateur.utilisateurPseudo FROM article_categorie INNER JOIN article ON article_categorie.articleId = article.articleId INNER JOIN utilisateur ON article.utilisateurId = utilisateur.utilisateurId WHERE article_categorie.categorieId = 6"; 
        $faq = $pdo->prepare($query);
        $faq->execute([]);
        $articles = $faq->fetchAll();
        return $articles;
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}
function selectAllMessagesNew($pdo, $conversationId) {
    try {
        $query = "SELECT * FROM message WHERE conversationId = :conversationId"; 
        $selectAllMessageNew = $pdo->prepare($query);
        $selectAllMessageNew->execute([
            'conversationId' => $conversationId
        ]);
        $messages = $selectAllMessageNew->fetchAll();
        return $messages;
    } catch(PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}




?>