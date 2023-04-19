<?php
    session_start();
    require_once "Config/databaseConnexion.php";
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
    <title>Bandeja</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <img src="./Images/logo-bandeja.png" alt='Logo officielle du site: On voit un fond bleu, et une écriture par-dessus qui contient le mot: "Bandeja"'>
                <li><a href="/">Accueil</a></li>
                <li><a href="" class="inactiveLink">News</a>
                    <ul>
                        <li><a class="sousa" href="annonce">Annonce</a></li>
                        <li><a class="sousa" href="actualité">Actualité</a></li>
                    </ul>
                </li>
                <li><a href="" class="inactiveLink">Communauté</a>
                    <ul>
                        <li><a class="sousa" href="forum">Forum</a></li>
                        <li><a class="sousa" href="recherche-joueurs">Recherche Joueurs</a></li>
                        <li><a class="sousa" href="market">Market</a></li>
                        <li><a class="sousa" href="faq">FAQ</a></li>
                    </ul>
                </li>
                <li><a href="" class="inactiveLink">Compte</a>
                    <ul>
                        <li><a class="sousa" href="compte">Mon compte</a></li>
                        <li><a class="sousa" href="creer-un-article">Créer un article</a></li>
                        <li><a class="sousa" href="contact">Contacter</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <?php 
            require_once "Controllers/userController.php";
            require_once "Controllers/articleController.php";
        ?>
    


    </main>
    <footer>
        <div class="flex space-between align-item-center">
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>


