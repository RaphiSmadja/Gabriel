<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
  <body>
    <h1>Page d'accueil</h1>
    <?php include("header.php")?>
    <?php 
    if(isset($_GET['msg']) && $_GET['msg']=="subscribe_success") {
      echo '<div class="alert alert-success" role="alert">
      Inscription validée!
    </div>';
    }
    if(isset($_GET['msg']) && $_GET['msg']=="connexion_success") {
      echo '<div class="alert alert-success" role="alert">
      Connexion validée! <br>
      Welcome
    </div>';
    }
    if(isset($_GET['msg']) && $_GET['msg'] == 'subscribe_error') {
      echo '
      <div class="alert alert-danger" role="alert">
        Pas bon frero !
      </div>';
    }
    ?>
  </body>
</html>