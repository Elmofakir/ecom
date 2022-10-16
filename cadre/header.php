<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecom</title>
    <link rel="shortcut icon" href="../images/logo.jpeg">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    
</head>
<body>
<header>
        <div class="brand">
          <span class="fa-brands fa-ioxhost"></span>
          <h1>Ecom</h1>
        </div>
        <div class="navbar" id="nav">
          <div class="searchBox">
            <input type="text" placeholder="Search here..." />
            <span class="fas fa-search" id="searchIcon"></span>
          </div>
          <ul class="nav_elm">
            <li>
              <span class="fas fa-home" id="headIcon"></span>
              <a href="accueil.php"> Accueil </a>
            </li>
            <li>
              <span class="fas fa-question-circle" id="headIcon"></span>
              <a href="#"> Help </a>
            </li>
            <li>
              <span class="fas fa-lock" id="headIcon"></span>
              <a href="#"> Account </a>
            </li>
            <li>
              <?php if(!isset($_SESSION['user'])){?>
              <span class="fa fa-user-circle" id="headIcon"></span>
              <a href="./login.php"> Connexion </a>
              <?php }else{?>
              <span class="fa-solid fa-right-from-bracket" id="headIcon"></span>
              <a href="./out.php">Se déconnecter </a>
              <?php }?>
            </li>
          </ul>
        </div>
    </header>