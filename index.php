<?php
    session_start();
    require_once "Config/databaseConnexion.php";
    $uri = $_SERVER["REQUEST_URI"];
    $urititle = str_replace('/', '', $uri);
    $urititle = str_replace('-', ' ', $urititle);
    $urititle = ucfirst($urititle);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/nav_footer.css">
    <link rel="stylesheet" href="CSS/card.css">
    <link rel="stylesheet" href="CSS/connexion.css">
    <link rel="stylesheet" href="CSS/gestion.css">
    <link rel="stylesheet" href="CSS/administration.css">
    <link rel="stylesheet" href="CSS/article.css">
    <link rel="stylesheet" href="CSS/conversation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/409724db41.js" crossorigin="anonymous"></script>
    <script src="JS/script.js"></script>
    <title>Bandeja - <?=$urititle?></title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <img src="./Images/logo-bandeja.png" alt='Logo officielle du site: On voit un fond bleu, et une écriture par-dessus qui contient le mot: "Bandeja"'>
                <li><a href="/">Accueil</a></li>
                <li><a href="" class="inactiveLink">Communauté</a>
                    <ul>
                        <li><a class="sousa" href="forum">Forum</a></li>
                        <li><a class="sousa" href="recherche-joueurs">Recherche Joueurs</a></li>
                        <li><a class="sousa" href="market">Market</a></li>
                        <li><a class="sousa" href="faq">FAQ</a></li>
                        <?php if(isset($_SESSION["user"])) :?><li><a class="sousa" href="dashboarddiscussion">Discussion</a></li><?php endif ?>
                    </ul>
                </li>
                <li><a href="" class="inactiveLink">Compte</a>
                    <ul>
                        <li><a class="sousa" href="compte">Mon compte</a></li>
                        <li><a class="sousa" href="creer-un-article">Créer un article</a></li>
                        <li><a class="sousa" href="contact">Contacter</a></li>
                    </ul>
                </li>
                <?php if(isset($_SESSION["user"])) :?>
                    <?php if ($_SESSION["user"]->utilisateurRole == "administrator") :?>
                        <li><a href="" class="inactiveLink">Administration</a>
                            <ul>
                                <li><a class="sousa" href="gestion-utilisateur">Gestion des utilisateurs</a></li>
                                <li><a class="sousa" href="gestion-article">Gestion des articles</a></li>
                            </ul>
                        </li>
                    <?php endif ?></p>
                <?php endif ?>
                
            </ul>
        </nav>
    </header>
    <main>
        <?php 
            require_once "Controllers/userController.php";
            require_once "Controllers/articleController.php";
            require_once "Controllers/conversationController.php"
        ?>
    </main>
</body>
</html>


