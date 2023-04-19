<?php

function createUser($pdo)
{
    try{
        $query = "insert into utilisateur (utilisateurNom, utilisateurPrenom, utilisateurPseudo, utilisateurEmail, utilisateurMotdepasse, utilisateurRole) values (:utilisateurNom, :utilisateurPrenom, :utilisateurPseudo, :utilisateurEmail, :utilisateurMotdepasse, :utilisateurRole)"; //nom des colonnes utilisateur
        $newUser = $pdo->prepare($query);
        $newUser->execute([
            'utilisateurNom' => $_POST["nom"],
            'utilisateurPrenom' => $_POST["prenom"],
            'utilisateurPseudo' => $_POST["login"],
            'utilisateurMotdepasse' => $_POST["mot_de_passe"],
            'utilisateurRole' => 'user',
            'utilisateurEmail' => $_POST["email"],
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


?>