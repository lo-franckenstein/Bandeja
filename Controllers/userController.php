<?php

require_once "Model/userModel.php";
require_once "Model/articleModel.php";

$uri = $_SERVER["REQUEST_URI"];



if ($uri === "/compte") { // Lorsque l'utilisateur clique sur compte, on vérifie s'il est connecté
    if(isset($_SESSION['user'])) {  // Si c'est le cas, on le mène vers la page où il pourra modifier ses informations personnelles
        require_once "Templates/users/gestion-inscription.php";
        if(isset($_POST["btnModification"])) {
            UpdateUser($pdo);
            UpdateSession($pdo);
            header('location:/profil');
        } elseif(isset($_POST["btnSuppression"])) {
            modifyIdArticle($pdo);
            deleteUser($pdo);
            session_destroy();
            header('location:/');
        } elseif(isset($_POST["btnDeconnexion"])) {
            session_destroy();
            header('location:/');
        }
    } else {    // Si ce n'est pas le cas, on le mène vers la page de connexion
        require_once "Templates/users/connexion.php";
        if(isset($_POST["btnConnexion"])){ 
            $messageErrorLogin = verifData();
            if(!$messageErrorLogin) {
                searchUser($pdo);
                header('location:/compte'); // et pour finir sa connexion, on le redirige vers la page qu'il voulait initialement, c'est à dire la page compte
            }
        }
    }
} elseif ($uri === "/inscription") { // Lorsque l'utilisateur cliquera sur inscription, on le mène vers la page d'inscription
    require_once "Templates/users/gestion-inscription.php";
    if(isset($_POST["btnInscription"])) {
        $messageErrorLogin = verifData();
        if(!$messageErrorLogin) {
            createUser($pdo);
            header('location:/compte');
        }
    }

}


function verifData(){
    foreach ($_POST as $key => $value) {
        if (empty($value)){
            $messageErrorLogin[$key] = "Votre " . $key . " est vide";
            $messageErrorLogin[$key] = str_replace('_', ' ', $key);
            
        } else if (ctype_space($value)){
            $messageErrorLogin[$key] = "Votre " . str_replace('_', ' ', $key) . " est vide";
        }

    }

    if (isset($messageErrorLogin)) {
        return $messageErrorLogin;
    } else {
        return false;
    }
}


?>