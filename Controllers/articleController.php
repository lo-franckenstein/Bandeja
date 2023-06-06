<?php

require_once "Model/articleModel.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/index.php" || $uri === "/") {
    $articles = search3News($pdo);
    require_once "Templates/articles/acceuil.php";
} elseif ($uri === "/creer-un-article") {
    if(isset($_SESSION['user'])) {
        if(isset($_POST["btnCréerArticle"])) {
            newArticle($pdo);
            header('location:/');
        }
        require_once "Templates/articles/creer-un-article.php";
    } else {
        header('location:/compte');
    }
} elseif ($uri === "/forum") {
    $articles = articleForum($pdo);
    require_once "Templates/articles/lireArticles.php";
} elseif ($uri === "/recherche-joueurs") {
    $articles = articleRecherche($pdo);
    require_once "Templates/articles/lireArticles.php";
} elseif ($uri === "/market") {
    $articles = articleBoutique($pdo);
    require_once "Templates/articles/lireArticles.php";
} elseif ($uri === "/faq") {
    $articles = articleFaq($pdo);
    require_once "Templates/articles/lireArticles.php";
} elseif ($uri === "/gestion-article") {
    if($_SESSION['user']->utilisateurRole === "administrator") {
        $articleForum = articleForum($pdo);
        $articleFaq = articleFaq($pdo);
        $articleRecherche = articleRecherche($pdo);
        $articleBoutique = articleForum($pdo);
        require_once 'Templates/articles/administration-articles.php';
    } else {
        header:('location:/');
    }
} elseif (substr($uri, 0, 12) === "/voirArticle") {
    if ($uri === "/voirArticle?articleId=" . $_GET["articleId"]) {
        $article = selectOneArticle($pdo);
        require_once "Templates/articles/OneArticle.php";
    }
}

?>