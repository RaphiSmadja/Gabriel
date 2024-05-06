<?php include('../composant/header.php'); ?>
<?php include('../composant/menu.php'); ?>
<?php include('../back/fonction.php'); ?>
<?php
$id_film = $_GET['id'];
$film = getAllSeanceByFilm($id_film);
?>
<style>
    body { font-family: Arial, sans-serif; }
    .container { margin: 20px; }
    .video { width: 100%; height: auto; background-color: #ccc; }
    .info, .calendar, .sessions { margin-top: 20px; padding: 20px; }
    .info { background-color: #f8d7da; }
    .calendar { background-color: #d4edda; }
    .sessions { background-color: #fff3cd; }
</style>

<div class="container">
    <div class="video">
        <!-- Placeholder for video/trailer -->
        
    </div>
    <div class="info">
        <h2>Titre du film</h2>
        <p>Description...</p>
        <p>Durée: ...</p>
        <p>Note: ...</p>
        <p>Date de sortie: ...</p>
    </div>
    <div class="calendar">
        <!-- Placeholder for calendar -->
        Calendrier à faire
    </div>
    <div class="sessions">
        <!-- Loop through sessions -->
        <?php foreach ($film as $session): ?>
        <p>Session horaire: <?= $session['time'] ?></p>
        <?php endforeach; ?>
    </div>
</div>
