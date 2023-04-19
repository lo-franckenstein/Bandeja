<?php

require_once "Model/articleModel.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/index.php" || $uri === "/") {
    $articles = search3News($pdo);
    require_once "Templates/articles/acceuil.php";
}






?>