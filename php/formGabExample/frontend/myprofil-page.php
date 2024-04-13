<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <h1>My Profil</h1>
    <?php include("header.php") ?>
    <form class="row" action="../backend/myprofil.php" method="POST" style="margin-top: 50px">
        <div class="col">
            <label for="validationCustom01" class="form-label">Pseudo</label>
            <input name="pseudo" type="text" class="form-control" id="validationCustom01" value=<?php echo $_SESSION["pseudoUser"];?> required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col">
            <label for="validationCustom02" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="validationCustom02" value=<?php echo $_SESSION["mailUser"];?> required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col">
            <label for="validationCustomUsername" class="form-label">Password</label>
            <div class="input-group has-validation">
                <input name="password" type="password" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <div class="col">
            <label for="validationCustomUsername" class="form-label">Confirm Password</label>
            <div class="input-group has-validation">
                <input name="confirmPassword" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</body>
</hml>