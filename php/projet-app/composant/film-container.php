<?php
include('../back/fonction.php');

$films = getAllFilms();
// Boucle à travers chaque film et ses détails
foreach ($films as $film) {
    echo '<div class="film-container">';
    echo '<div class="film-affiche">';
    // Si vous avez une image, ajoutez-la ici
    echo'<iframe width="560" height="315"
        src="https://www.youtube.com/embed/dQw4w9WgXcQ"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe>';
    echo '</div>';
    echo '<div class="film-detail">';
    echo '<h3>' . htmlspecialchars($film['titre']) . '</h3>';
    echo '<h4>' . htmlspecialchars($film['categories']) . '</h4>'; // Assurez-vous que 'categorie' est bien un champ retourné
    echo '<p>' . htmlspecialchars($film['description']) . '</p>';
    echo '</div>';
    echo '<div class="film-salle">';
    echo '<div class="film-seance">';
    echo 'Séance à ' . htmlspecialchars($film['horraire']) . ', Salle : ' . htmlspecialchars($film['salle_nom']);
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
