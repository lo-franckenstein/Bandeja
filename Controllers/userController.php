<?php

require_once "Model/userModel.php";
require_once "Model/articleModel.php";

$uri = $_SERVER["REQUEST_URI"];



if ($uri === "/compte") { // Lorsque l'utilisateur clique sur compte, on vérifie s'il est connecté
    if(isset($_SESSION['user'])) {  // Si c'est le cas, on le mène vers la page où il pourra modifier ses informations personnelles
        if(isset($_POST["btnModification"])) {
            UpdateUser($pdo);
            UpdateSession($pdo);
            header('location:/compte');
        } elseif(isset($_POST["btnSuppression"])) {
            reactionNull($pdo);
            articleNull($pdo);
            deleteUser($pdo);
            session_destroy();
            header('location:/');
        } elseif(isset($_POST["btnDeconnexion"])) {
            session_destroy();
            header('location:/');
        } elseif(isset($_POST["btnClé_de_confirmation"])) {










            $tentativeKey = keyConfirmation($pdo);
            var_dump($tentativeKey);
            var_dump($_POST["Clé_de_confirmation"]);
            
            $tentativeKeyString = strval($tentativeKey->utilisateurConfKey);
            var_dump($tentativeKeyString);
            
            if ($tentativeKeyString === $_POST["Clé_de_confirmation"]) {
                var_dump("héh");
                modificationConfirmation($pdo);
                header('location:/');
            }








            
        }
        require_once "Templates/users/gestion-inscription.php";
    } else {    // Si ce n'est pas le cas, on le mène vers la page de connexion
        if(isset($_POST["btnConnexion"])){ 
            $messageErrorLogin = verifData();
            if(!$messageErrorLogin) {
                searchUser($pdo);
                header('location:/compte');
            }
        }
        require_once "Templates/users/connexion.php";
        
    }
} elseif ($uri === "/inscription") { // Lorsque l'utilisateur cliquera sur inscription, on le mène vers la page d'inscription
    require_once "Templates/users/gestion-inscription.php";
    if(isset($_POST["btnInscription"])) {
        $messageErrorLogin = verifData();
        if(!$messageErrorLogin) {
            $recupcode = recuperationCode();
            createUser($pdo, $recupcode);
            mailInscription($recupcode);
            header('location:/compte');
        }
    }

} elseif ($uri === "/mdpforget") {
    if(isset($_POST["btnOubli"])) {
        $messageErrorLogin = verifData();
        if(!$messageErrorLogin) {
            $mail = $_POST["email"];
            $recupcode = recuperationCode();
            envoieCode($mail, $recupcode, $pdo);
            $keyOubli = searchmail($pdo);
            sendMailOubli($keyOubli, $mail);
            if($keyOubli) {
                header('location:/connexion-cle');
            } else {
                header('location:/compte');
            }
        }
    }
    require_once "Templates/users/récupération.php";
} elseif ($uri === "/connexion-cle") {
    if(isset($_POST["btnCoKey"])) {
        $messageErrorLogin = verifData();
        if(!$messageErrorLogin) {
            searchUserKey($pdo);
            header('location:/compte');
            $recupcode = recuperationCode();
            envoieCode($mail, $recupcode, $pdo);
        }
    }
    require_once "Templates/users/connexion-cle.php";
} elseif ($uri === "/gestion-utilisateur") {
    if ($_SESSION['user']->utilisateurRole === "administrator") {
        $utilisateurs = searchAllUsers($pdo);
        require_once "Templates/users/administration-utilisateurs.php";
    } else {
        header:('location:/');
    }

    
} elseif ($uri === "/contact") {
    if(isset($_SESSION["user"])) {
        if(isset($_POST["btnContact"])) {
            $mailsadmins = searchMailAdmin($pdo);
            $contactuser = $_POST['message'];
            contactMail($mailsadmins, $contactuser);
        }
        require_once "Templates/users/contact.php";
    } else {
        header('location:/compte');
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




function recuperationCode() {
    $recupcode = "";
    for ($i = 1; $i <= 8; $i++) {
        $recupcode .= mt_rand(0,9);
    };
    return $recupcode;
}


// ATTENTION, POUR QUE VOTRE SYSTEME DE MAIL MARCHE:
//
// UTILISATEUR WAMP: https://www.youtube.com/watch?v=6y_czpK8_Hg
// UTILISATEUR XAMPP: https://www.youtube.com/watch?v=Pfvlpw7Q-uQ

function sendMailOubli($keyOubli, $mail) {

    if($keyOubli) {
        $to = $mail;
        $subject = "Mot de passe oublié - Clé";
        $message = "Bonjour, \n Vous nous avez demandez récemment une récupération de votre mot de passe sur notre site. \n Vous pouvez copier le code suivant et le mettre dans le champ demandé sur le site. \n" . $keyOubli->utilisateurOubli . "\n Bonne journée à vous... \n ATTENTION: Si vous n'êtes pas à l'origine de cette demande, merci d'ignorer ce message";
        $headers  = 'From: [220153]@site.asty-moulin.be' . "\r\n" .
                    'MIME-Version: 1.0' . "\r\n" .
                    'Content-type: text/html; charset=utf-8';
        if(mail($to, $subject, $message, $headers))
            echo "Envoi réussi";
        else
            echo "Échec de l'envoi";
    } else {
        $to = $mail;
        $subject = "Mot de passe oublié - Clé";
        $message = "Bonjour, <br> Vous nous avez demandez récemment une récupération de votre mot de passe sur notre site. <br> Mais le soucis, c'est que vous n'êtes pas inscrit... Donc, vous pouvez vous inscrire dès maintenant sur notre site <br> Bonne journée à vous... <br> ATTENTION: Si vous n'êtes pas à l'origine de cette demande, merci d'ignorer ce message";
        $headers  = 'From: [220153]@site.asty-moulin.be' . "\r\n" .
                    'MIME-Version: 1.0' . "\r\n" .
                    'Content-type: text/html; charset=utf-8';
        if(mail($to, $subject, $message, $headers))
            echo "Envoi réussi";
        else
            echo "Échec de l'envoi";
    }
    
}

function contactMail($mailsadmins, $contactuser) {
    foreach ($mailsadmins as $mailadmin) {
        $to = $mailadmin->utilisateurEmail;
        $subject = $_SESSION["user"]->utilisateurPrenom . " " . $_SESSION["user"]->utilisateurNom . "vous a envoyer un message";
        $message = "Les informations à propos de la personne: <br> Prénom: " . $_SESSION["user"]->utilisateurPrenom . "<br> Nom: " . $_SESSION["user"]->utilisateurNom . "<br> Mail: " . $_SESSION["user"]->utilisateurEmail . "<br> Pseudo: " . $_SESSION["user"]->utilisateurPseudo . "<br><br>Message:<br>" . $contactuser;
        $headers  = 'From: [220153]@site.asty-moulin.be' . "\r\n" .
                    'MIME-Version: 1.0' . "\r\n" .
                    'Content-type: text/html; charset=utf-8';
        mail($to, $subject, $message, $headers);
    }
}

function confirmationKey($mailsadmins, $contactuser) {
    foreach ($mailsadmins as $mailadmin) {
        $to = $mailadmin->utilisateurEmail;
        $subject = $_SESSION["user"]->utilisateurPrenom . " " . $_SESSION["user"]->utilisateurNom . "vous a envoyer un message";
        $message = "Les informations à propos de la personne: <br> Prénom: " . $_SESSION["user"]->utilisateurPrenom . "<br> Nom: " . $_SESSION["user"]->utilisateurNom . "<br> Mail: " . $_SESSION["user"]->utilisateurEmail . "<br> Pseudo: " . $_SESSION["user"]->utilisateurPseudo . "<br><br>Message:<br>" . $contactuser;
        $headers  = 'From: [220153]@site.asty-moulin.be' . "\r\n" .
                    'MIME-Version: 1.0' . "\r\n" .
                    'Content-type: text/html; charset=utf-8';
        mail($to, $subject, $message, $headers);
    }
}

function mailInscription($recupcode) {
    $to = $_POST["email"];
    $subject = "Inscription sur Bandeja";
    $message = "Bonjour, <br> vous vous êtes récemment inscrit sur notre site Bandeja. Afin de valider votre inscription, voici le code de confirmation a confirmer directement sur le site (Sur la page qui affiche votre compte) <br>" . $recupcode;
    $headers  = 'From: [220153]@site.asty-moulin.be' . "\r\n" .
                'MIME-Version: 1.0' . "\r\n" .
                'Content-type: text/html; charset=utf-8';
    mail($to, $subject, $message, $headers);
}


?>