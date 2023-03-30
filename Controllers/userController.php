<?php

require_once "Model/userModel.php";

$uri = $_SERVER["REQUEST_URI"];


if($uri === "/inscription"){
    if(isset($_POST["btnEnvoi"])){ 
        $messageErrorLogin = verifData();
        if(!$messageErrorLogin) {
            createUser($pdo);
            header('location:/connexion');
        }
    }
    require_once "Templates/users/inscriptionOrEditProfil.php";

} elseif ($uri === "/profil") {

    require_once "Templates/users/inscriptionOrEditProfil.php";

} else if($uri === "/connexion"){
    if(isset($_POST["btnEnvoi"])){ 
        $messageErrorLogin = verifData();
        if(!$messageErrorLogin) {
            searchUser($pdo);
            header('location:/');
        }
    }
    require_once "Templates/users/connexion.php";

} elseif ($uri === "/profil") {
    if(isset($_POST["btnEnvoi"])) {
        UpdateUser($pdo);
        UpdateSession($pdo);
        header('location:/profil');
    }
    require_once "Templates/users/inscriptionOrEditProfil.php";
} elseif ($uri === "/deconnexion") {
    session_destroy();
    header('location:/');
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