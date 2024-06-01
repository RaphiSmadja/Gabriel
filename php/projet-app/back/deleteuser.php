<?php
include 'fonction_admin.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    deleteUser($id);
}

?>
