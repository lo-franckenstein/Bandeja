<?php

function createUser($pdo)
{
    try{
        $query = "insert into users (nomUser, prenomUser, loginUser, passWordUser, role, emailUser) values (:nomUser, :prenomUser, :loginUser, :passWordUser, :role, :emailUser)"; //nom des colonnes utilisateur
        $newUser = $pdo->prepare($query);
        $newUser->execute([
            'nomUser' => $_POST["txtNom"],
            'prenomUser' => $_POST["txtPrenom"],
            'loginUser' => $_POST["txtLogin"],
            'passWordUser' => $_POST["txtMot_de_passe"],
            'role' => 'user',
            'emailUser' => $_POST["txtEmail"],
        ]);
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}




/*try {
    $query = "SELECT * FROM biens";
    $ajoute = $pdo->prepare($query);
    $ajoute->execute();
    $biens = $ajoute->fetchAll();
} catch (PDOException $e) {
    $message = $e->getMessage();
    die($message);
}
echo '<pre>' , var_dump($biens) , '</pre>';*/