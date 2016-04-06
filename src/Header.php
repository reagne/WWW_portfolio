<?php
$currentPage = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <title>"<?php
        if($currentPage == '/WWW_RAnam/index.php'){
            echo("Strona główna | ");
        } elseif($currentPage == '/WWW_RAnam/cv.php'){
            echo("O mnie | ");
        } elseif($currentPage == '/WWW_RAnam/projects.php'){
            echo("Realizacje | ");
        } elseif($currentPage == '/WWW_RAnam/kontakt.php'){
            echo("Kontakt | ");
        }
        ?>Tworzenie stron WWW | Regina Anam"</title>
    <meta charset="UTF-8">
    <meta name="decription" content="Profesjonalne projektowanie i tworzenie stron WWW">
    <meta name="keywords" content="www, tworzenie stron, projektowanie stron, tworzenie WWW, projektowanie www,strony internetowe, strona internetowa">

    <link href="css/css_stylesheet.css" type="text/css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Nawigacja -->
<div id="header">
    <div id="slogan">
        <img src="images/header_slogan.png" alt="It's not about ideas. It's about making ideas happen." />
    </div>
    <div id="pattern">
    </div>
    <div id="nav_menu">
        <ul>
            <li <?php if($currentPage == '/WWW_RAnam/index.php'){ echo('id="current"'); } ?>><a href="index.php"><img src="images/home_button.jpg" alt="Home"></a></li>
            <li <?php if($currentPage == '/WWW_RAnam/cv.php'){ echo('id="current"'); } ?>><a href="cv.php">O mnie</a></li>
            <li <?php if($currentPage == '/WWW_RAnam/projects.php'){ echo('id="current"'); } ?>><a href="projects.php">Portfolio</a></li>
            <li <?php if($currentPage == '/WWW_RAnam/kontakt.php'){ echo('id="current"'); } ?>><a href="kontakt.php">Kontakt</a></li>
        </ul>
    </div>
</div>