<?php
// all functions servers

require "pdo.php";

function insertUser($mail, $pseudo, $pwd)
{
    $pdo = connectBdd();
    $sql = "INSERT INTO user (email, pseudo, password) VALUES (?,?,?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$mail, $pseudo, $pwd]);
}

function loginUser($mail, $pwd)
{
    $pdo = connectBdd();
    $sql = "SELECT * FROM user WHERE (email = ? AND password = ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$mail, $pwd]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
}

function updateUser($email, $pseudo, $password, $id)
{
    $pdo = connectBdd();
    // Utilisation de paramètres nommés dans la requête SQL
    $sql = "UPDATE user SET email = :email, pseudo = :pseudo, password = :password WHERE id = :id";
    
    // Préparation de la requête
    $stmt = $pdo->prepare($sql);
    
    // Liaison des paramètres nommés à leurs valeurs respectives
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Exécution de la requête
    $stmt->execute();
}
