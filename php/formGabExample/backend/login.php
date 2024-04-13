<?php

include("functions.php");

$mail = $_POST["emailLogin"];
$pwd = $_POST["pwdLogin"];

$user = loginUser($mail, $pwd);

if(isset($user)){
    print_r($user);
    session_start();
    $_SESSION['idUser'] = $user['id'];
    $_SESSION['mailUser'] = $user['email'];
    $_SESSION['pseudoUser'] = $user['pseudo'];
    $_SESSION['passwordUser'] = $user['pwd'];
    $_SESSION['logged_in'] = true; 
    header("Location: ../frontend/index.php?msg=connexion_success");
} else {
    echo "desole";
}
?>