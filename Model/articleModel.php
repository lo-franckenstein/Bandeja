<?php
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

function reactionNull($pdo) {
    try {
        $query = "UPDATE reaction_utilisateur_article SET utilisateurId = null WHERE utilisateurId =:utilisateurId";
        $modifyReaction = $pdo->prepare($query);
        $modifyReaction->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function articleNull($pdo) {
    try {
        $query = "UPDATE article SET utilisateurId = null WHERE utilisateurId =:utilisateurId";
        $modifyArticle = $pdo->prepare($query);
        $modifyArticle->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function newArticle($pdo) {
    if ($_POST['articleType'] == 'faq') {
        try {
            $query = "insert into article (articleTitre, articleDescription, articlePost, utilisateurId) values (:articleTitre, :articleDescription, :articlePost, :utilisateurId)";
            $sendNewArticle = $pdo->prepare($query);
            $sendNewArticle->execute([
                'articleTitre' => $_POST["Titre"],
                'articleDescription' => $_POST["Description"],
                'articlePost' => 1,
                'utilisateurId' => $_SESSION['user']->utilisateurId
            ]);
        } catch(PDOException $e) {
            $message = $e->getMessage();
            die($message);
        };
        $articleId = $pdo->lastInsertId();
        try {
            $query = "insert into article_categorie (articleId, categorieId) values (:articleId, :categorieId)";
            $sendNewArticle_Categorie = $pdo->prepare($query);
            $sendNewArticle_Categorie ->execute([
                'articleId' => $articleId,
                'categorieId' => '6'
            ]);
        } catch(PDOException $e) {
            $message = $e->getMessage();
            die($message);
        }
    } else if ($_POST['articleType'] == 'forum') {
        try {
            $query = "insert into article (articleTitre, articleDescription, articleTexte, articleImage, articlePost, utilisateurId) values (:articleTitre, :articleDescription, :articleTexte, :articleImage, :articlePost, :utilisateurId)";
            $sendNewArticle = $pdo->prepare($query);
            $sendNewArticle->execute([
                'articleTitre' => $_POST["Titre"],
                'articleDescription' => $_POST["Description"],
                'articleTexte' => $_POST["Contenu"],
                'articleImage' => $_POST["Image"],
                'articlePost' => 1,
                'utilisateurId' => $_SESSION['user']->utilisateurId
            ]);
        } catch(PDOException $e) {
            $message = $e->getMessage();
            die($message);
        };
        $articleId = $pdo->lastInsertId();
        try {
            $query = "insert into article_categorie (articleId, categorieId) values (:articleId, :categorieId)";
            $sendNewArticle_Categorie = $pdo->prepare($query);
            $sendNewArticle_Categorie ->execute([
                'articleId' => $articleId,
                'categorieId' => '3'
            ]);
        } catch(PDOException $e) {
            $message = $e->getMessage();
            die($message);
        }
    } else if ($_POST['articleType'] == 'rechercheJoueurs') {
        try {
            $query = "insert into article (articleTitre, articleDescription, articlePost, utilisateurId) values (:articleTitre, :articleDescription, :articlePost, :utilisateurId)";
            $sendNewArticle = $pdo->prepare($query);
            $sendNewArticle->execute([
                'articleTitre' => $_POST["Titre"],
                'articleDescription' => $_POST["Description"],
                'articlePost' => 1,
                'utilisateurId' => $_SESSION['user']->utilisateurId
            ]);
        } catch(PDOException $e) {
            $message = $e->getMessage();
            die($message);
        };
        $articleId = $pdo->lastInsertId();
        try {
            $query = "insert into article_categorie (articleId, categorieId) values (:articleId, :categorieId)";
            $sendNewArticle_Categorie = $pdo->prepare($query);
            $sendNewArticle_Categorie ->execute([
                'articleId' => $articleId,
                'categorieId' => '4'
            ]);
        } catch(PDOException $e) {
            $message = $e->getMessage();
            die($message);
        }
    }else if ($_POST['articleType'] == 'boutique') {
        try {
            $query = "insert into article (articleTitre, articleDescription, articleImage, articlePost, utilisateurId) values (:articleTitre, :articleDescription, :articleImage, :articlePost, :utilisateurId)";
            $sendNewArticle = $pdo->prepare($query);
            $sendNewArticle->execute([
                'articleTitre' => $_POST["Titre"],
                'articleDescription' => $_POST["Description"],
                'articleImage' => $_POST["Image"],
                'articlePost' => 1,
                'utilisateurId' => $_SESSION['user']->utilisateurId
            ]);
        } catch(PDOException $e) {
            $message = $e->getMessage();
            die($message);
        };
        $articleId = $pdo->lastInsertId();
        try {
            $query = "insert into article_categorie (articleId, categorieId) values (:articleId, :categorieId)";
            $sendNewArticle_Categorie = $pdo->prepare($query);
            $sendNewArticle_Categorie ->execute([
                'articleId' => $articleId,
                'categorieId' => '4'
            ]);
        } catch(PDOException $e) {
            $message = $e->getMessage();
            die($message);
        }
    }
}

function articleForum($pdo)
{
    try{
        $query = "SELECT article.articleId, article.articleTitre, article.articleDescription, article.articleImage, utilisateur.utilisateurPseudo FROM article_categorie INNER JOIN article ON article_categorie.articleId = article.articleId INNER JOIN utilisateur ON article.utilisateurId = utilisateur.utilisateurId WHERE article_categorie.categorieId = 4"; 
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

function articleRecherche($pdo)
{
    try{
        $query = "SELECT article.articleId, article.articleTitre, article.articleDescription, utilisateur.utilisateurPseudo FROM article_categorie INNER JOIN article ON article_categorie.articleId = article.articleId INNER JOIN utilisateur ON article.utilisateurId = utilisateur.utilisateurId WHERE article_categorie.categorieId = 4
        "; 
        $recherche = $pdo->prepare($query);
        $recherche->execute([]);
        $articles = $recherche->fetchAll();
        return $articles;
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function articleBoutique($pdo)
{
    try{
        $query = "SELECT article.articleId, article.articleTitre, article.articleImage, utilisateur.utilisateurPseudo FROM article_categorie INNER JOIN article ON article_categorie.articleId = article.articleId INNER JOIN utilisateur ON article.utilisateurId = utilisateur.utilisateurId WHERE article_categorie.categorieId = 5
        "; 
        $boutique = $pdo->prepare($query);
        $boutique->execute([]);
        $articles = $boutique->fetchAll();
        return $articles;
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function articleFaq($pdo)
{
    try{
        $query = "SELECT article.articleId, article.articleTitre, article.articleDescription, utilisateur.utilisateurPseudo FROM article_categorie INNER JOIN article ON article_categorie.articleId = article.articleId INNER JOIN utilisateur ON article.utilisateurId = utilisateur.utilisateurId WHERE article_categorie.categorieId = 6"; 
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

function selectOneArticle($pdo) {
    try {
        $query = "select * from article where articleId =: articleId";
        $selection = $pdo->prepare($query);
        $selection->execute([
            "articleId" => $_GET["articleId"]
        ]);
        $article = $selection->fetch();
        return $article;
    } catch(PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}






?>