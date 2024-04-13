<?php
session_start();
include "functions.php";

$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

if (isset($pseudo) && strlen($pseudo) > 2 && isset($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if (isset($password) && strlen($password) > 3 && isset($confirmPassword) && $confirmPassword == $password) {
        echo("dedeeded");
        updateUser($email, $pseudo, $password, $_SESSION['idUser']);
    } else {
        updateUser($email, $pseudo, $_SESSION['passwordUser'], $_SESSION['idUser']);
    }
}

header("Location: ../frontend/myprofil-page.php");
