<?php

require_once "Model/articleModel.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/index.php" || $uri === "/") {
    searchAllArticle();
    selectAllArticle();
    require_once "Templates/Schools"
}

