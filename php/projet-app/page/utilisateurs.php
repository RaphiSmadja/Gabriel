<?php include '../composant/header.php' ?>
<?php include '../composant/menu.php' ?>
<style>
    #table-users {
        display: block;
        max-width: 960px;
        margin: 150px auto;
        background-color: #2b2b2b;
        color: #ffff;
    }

    th {
        padding: 10px;
        border-right: 2px solid;
        border-top: 2px solid;
    }

    td {
        padding: 10px;
        border-right: 2px solid;
        border-top: 2px solid;
    }
</style>
<script>
function deleteUser(id) {
    
    result = confirm("Etes vous sur de vouloir supprimer cet utilisateur ?");

    if(result) {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "../back/deleteuser.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                alert(xhr.responseText);
                location.reload();  // Recharger la page après la suppression
            }
        };
        xhr.send("id=" + id);
    }
}
</script>
<?php include '../back/fonction_admin.php';
$users = getAllUsers();
?>
<div id="table-users">
    <table>
        <tr>
            <th>Id</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Role</th>
            <th>Date de création</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        <?php
        for ($i = 0; $i < count($users); $i++) {
            echo '<tr>';
            echo '<td>' . $users[$i]['id'] . '</td>';
            echo '<td>' . $users[$i]['prenom'] . '</td>';
            echo '<td>' . $users[$i]['nom'] . '</td>';
            echo '<td>' . $users[$i]['email'] . '</td>';
            echo '<td>' . $users[$i]['telephone'] . '</td>';
            echo '<td>' . $users[$i]['role'] . '</td>';
            echo '<td>' . $users[$i]['datedecreation'] . '</td>';
            echo '<td> <i class="fa-solid fa-pen-to-square"></i></td>';
            echo '<td> <i class="fa-solid fa-trash" onclick="deleteUser('.$users[$i]['id'].')"></i></td>';
            echo '</tr>';
        }
        ?>
    </table>
</div>