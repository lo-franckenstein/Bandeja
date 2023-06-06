<?php

function createUser($pdo, $recupcode)
{
    try{
        $query = "insert into utilisateur (utilisateurNom, utilisateurPrenom, utilisateurPseudo, utilisateurEmail, utilisateurMotdepasse, utilisateurRole, utilisateurConf, utilisateurConfKey) values (:utilisateurNom, :utilisateurPrenom, :utilisateurPseudo, :utilisateurEmail, :utilisateurMotdepasse, :utilisateurRole, :utilisateurConf, :utilisateurConfKey)";
        $newUser = $pdo->prepare($query);
        $newUser->execute([
            'utilisateurNom' => $_POST["nom"],
            'utilisateurPrenom' => $_POST["prenom"],
            'utilisateurPseudo' => $_POST["login"],
            'utilisateurMotdepasse' => $_POST["mot_de_passe"],
            'utilisateurRole' => 'user',
            'utilisateurConf' => 0,
            'utilisateurEmail' => $_POST["email"],
            'utilisateurConfKey' => $recupcode
        ]);
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}


function searchUser($pdo)
{
    try{
        $query = "select * from utilisateur where utilisateurPseudo=:utilisateurPseudo and utilisateurMotdepasse=:utilisateurMotdepasse";
        $searchUser = $pdo->prepare($query);
        $searchUser->execute([
            'utilisateurPseudo' => $_POST["nom"],
            'utilisateurMotdepasse' => $_POST["mot_de_passe"]
        ]);

        $user=$searchUser -> fetch();
        if ($user) {
            $_SESSION['user']=$user;
        }
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function UpdateUser($pdo) {
    try {

        $query = "update utilisateur set utilisateurNom=:utilisateurNom, utilisateurPrenom=:utilisateurPrenom, utilisateurEmail=:utilisateurEmail, utilisateurMotdepasse=:utilisateurMotdepasse where utilisateurId=:utilisateurId";
        $changeUser = $pdo->prepare($query);
        $changeUser->execute([
            'utilisateurNom' => $_POST['nom'],
            'utilisateurPrenom' => $_POST['prenom'],
            'utilisateurMotdepasse' => $_POST['mot_de_passe'],
            'utilisateurEmail' => $_POST['email'],
            'utilisateurId' => $_SESSION['user']->utilisateurId

        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }

}
function UpdateSession($pdo) {
    try {
        $query = "select * from utilisateur where utilisateurId=:utilisateurId";
        $searchUser = $pdo->prepare($query);
        $searchUser->execute([
            'utilisateurId' => $_SESSION['user']->utilisateurId
        ]);
        $user=$searchUser -> fetch();
        $_SESSION['user']=$user;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function DeleteUser($pdo) {
    try {
        $query = "delete from utilisateur where utilisateurId=:utilisateurId";
        $deleteUser = $pdo->prepare($query);
        $deleteUser->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}


function searchOubli($pdo)
{
    try{
        $query = "select * from utilisateur where utilisateurPseudo=:utilisateurPseudo and utilisateurMotdepasse=:utilisateurMotdepasse";
        $searchUser = $pdo->prepare($query);
        $searchUser->execute([
            'utilisateurPseudo' => $_POST["login"],
            'utilisateurMotdepasse' => $_POST["mot_de_passe"]
        ]);

        $user=$searchUser -> fetch();
        if ($user) {
            $_SESSION['user']=$user;
        }
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}


function searchmail($pdo) {
    try{
        $query = "select utilisateurOubli from utilisateur where utilisateurEmail=:utilisateurEmail";
        $searchUser = $pdo->prepare($query);
        $searchUser->execute([
            'utilisateurEmail' => $_POST["email"]
        ]);
        $keyOubli = $searchUser->fetch();
        return $keyOubli;
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}



function searchUserKey($pdo) {
    try{
        $query = "select * from utilisateur where utilisateurOubli=:utilisateurOubli";
        $searchUser = $pdo->prepare($query);
        $searchUser->execute([
            'utilisateurOubli' => $_POST["key"]
        ]);

        $user=$searchUser -> fetch();
        if ($user) {
            $_SESSION['user']=$user;
        }
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}


function envoieCode($mail, $recupcode, $pdo) {
    try {
        $query = "update utilisateur set utilisateurOubli = :utilisateurOubli WHERE utilisateurEmail = :utilisateurEmail";
        $changeUser = $pdo->prepare($query);
        $changeUser->execute([
            'utilisateurOubli' => $recupcode,
            'utilisateurEmail' => $mail
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function searchMailAdmin($pdo) {
    try {
        $query = "SELECT utilisateurEmail FROM utilisateur WHERE utilisateurRole = 'administrator'";
        $searchmailAdmins = $pdo->prepare($query);
        $searchmailAdmins->execute([]);
        $mailsadmins = $searchmailAdmins->fetchAll();
        return $mailsadmins;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
















function keyConfirmation($pdo) {
    try {
        $query = "SELECT utilisateurConfKey FROM utilisateur WHERE utilisateurId = :utilisateurId";
        $Cléconfirmation = $pdo->prepare($query);
        $Cléconfirmation->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);
        $TentativeKey = $Cléconfirmation->fetch();
        $tentativeKeyString = strval($TentativeKey->utilisateurConfKey);
        return $TentativeKey;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}









function modificationConfirmation($pdo) {
    try {
        $query = "UPDATE utilisateur SET utilisateurConf = 1 WHERE utilisateurId =: utilisateurId";
        $Cléconfirmation = $pdo->prepare($query);
        $Cléconfirmation->execute([
            'utilisateurId' => $_SESSION["user"]->utilisateurId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}


function searchAllUsers($pdo)
{
    try{
        $query = "SELECT utilisateurId, utilisateurPseudo, utilisateurNom, utilisateurPrenom, utilisateurEmail FROM utilisateur"; 
        $searchAllUser = $pdo->prepare($query);
        $searchAllUser->execute([]);
        $utilisateurs = $searchAllUser->fetchAll();
        return $utilisateurs;
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}

function searchAllUsersButNotMe($pdo)
{
    try{
        $query = "SELECT utilisateurId, utilisateurPseudo, utilisateurNom, utilisateurPrenom, utilisateurEmail FROM utilisateur WHERE utilisateurId !=:utilisateurConnected"; 
        $searchAllUser = $pdo->prepare($query);
        $searchAllUser->execute([
            'utilisateurConnected' => $_SESSION["user"]->utilisateurId
        ]);
        return $searchAllUser;
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}



?>
