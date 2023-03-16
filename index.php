<?php
    require_once "Config/databaseConnexion.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <link rel="stylesheet" href="CSS/flex.css">
    <link rel="stylesheet" href="CSS/form.css">
    <title>RiQuizz</title>
</head>
<body>
    <?php if(isset($_SESSION['user'])) : ?>
                                    <section>
                                        <h3>Vous êtes connecté!</h3>
                                    </section>
                                <?php else :?>
                                    <section>
                                        <h3>Vous n'êtes pas connecté!</h3>
                                    </section>
                             <?php endif ?>

    <header>
        <ul class="flex space-evenly">
            <li class="menu"><a href="/">Home</a></li>
            <li class="menu"><a href="profil">Page profil</a></li>
            <li class="menu"><?php if(isset($_SESSION['user'])) : ?>
                                    <a href="deconnexion">Déconnexion</a>
                             <?php else :?>
                                    <a href="connexion">Connexion</a>
                             <?php endif ?></li>
    </header>
    <main>
        <?php 
            require_once "Controllers/bienController.php"; 
            require_once "Controllers/userController.php"; 
            
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
