<?php

require_once "Model/userModel.php";
require_once "Model/conversationModel.php";

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/dashboarddiscussion") {
    $Allutilisateurs = searchAllUsersButNotMe($pdo);
    require_once "Templates/conversation/dashboard.php";
    var_dump("Hey");
}elseif (substr($uri, 0, 10) === "/creerconv") {
    if ($uri === "/creerconversation?utilisateurId=" . $_GET["utilisateurId"]) {
        $verify = verifyConversation($pdo);
        if($verify){
            
        } else {
            createConversationBinaire($pdo);
        }
        header('location:/conversation?utilisateurId=' . $_GET['utilisateurId']);
        
    }
} elseif (substr($uri, 0, 12) === "/conversatio") {
    if($uri === "/conversation?utilisateurId=" . $_GET["utilisateurId"]) {

        $conversation = verifyConversation($pdo);

        $messages = selectAllMessagesNew($pdo, $conversation->conversationId);

        require_once 'Templates/conversation/tchat.php';

    } 
}






?>