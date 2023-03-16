<?php

require_once "Model/userModel.php";

$uri = $_SERVER["REQUEST_URI"];


if($uri === "/inscription"){
    if(isset($_POST["btnEnvoi"])){ 
        $messageErrorLogin = verifData();
        if(!isset($messageErrorLogin)) {
            createUser($pdo);
            header('location:/connexion');
        }
    }
    require_once "Templates/users/inscriptionOrEditProfil.php";

} elseif ($uri === "/profil") {

    require_once "Templates/users/profil.php";

} else if($uri === "/connexion"){

    if(isset($_POST["btnEnvoi"])){ 
        $messageErrorLogin = verifData();
        if(!isset($messageErrorLogin)) {
            searchUser($pdo);
            header('location:/');
        }
    }
    require_once "Templates/users/connexion.php";

} elseif ($uri === "/profil") {
    require_once "Templates/users/profil.php";
} elseif ($uri === "/deconnexion") {
    session_destroy();
    header('location:/');
}



function verifData(){
    foreach ($_POST as $key => $value) {
        if (empty($value)){
            $messageErrorLogin[$key] = "Votre " . $key . " est vide";
            
        } else if (ctype_space($value)){
            $messageErrorLogin[$key] = "Votre " . $key . " est composé que de blancs";
        }
    }
    return $messageErrorLogin;
}


?>