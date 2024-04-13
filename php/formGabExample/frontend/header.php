<?php
session_start();
echo ('
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">

  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registration-page.php">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login-page.php">Login</a>
        </li>
        ');
if (isset($_SESSION["logged_in"])) {
  echo ('<li class="nav-item">
            <a class="nav-link" href="myprofil-page.php">MyProfile</a>
          </li>');
}
echo ('
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>');
