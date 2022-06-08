<?php
    include "functions/init.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="css/main.css" /> -->
    <style>
    <?php include "css/main.css";
    ?>
    </style>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="css/mainLekar.css" /> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"
        integrity="sha512-fzff82+8pzHnwA1mQ0dzz9/E0B+ZRizq08yZfya66INZBz86qKTCt9MLU0NCNIgaMJCgeyhujhasnFUsYMsi0Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Interna medicina</title>

</head>

<body>
    <!-- Navigacija -->
    <header class="header">

        <nav class="header-nav nav">
            <input type="checkbox" id="check" />
            <label for="check" class="btnNav23 navbar-toggler menu-btn checkbtnNav">
                <div class="navbar-toggler1"></div>
            </label>

            <a class="logo" href="index.php"><img src="im-ft.png" alt="logo" /></a>
            <ul>
                <li><a href="index.php">Početna</a></li>
                <li><a href="onama.php">O nama</a></li>
                <li><a href="nastim.php">Naš tim</a></li>
                <li><a href="galerija.php">Galerija</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
                <?php if(!isset($_SESSION['email'])) {
               echo "<li><a href='login.php'>Prijavi se</a></li>";
            } else if($_SESSION['nalog'] == 'admin') {
                $user = get_user();
                echo "<div class='navbar'>
    
                    <div class='dropdown'>
                        <button class='dropbtn'>
                            " . $user['firstname'] . "
                            <i class='fa fa-caret-down'></i>
                        </button>
                        <div class='dropdown-content'>
                            <a href='profileAdmin.php'>Profil</a>
                            <a href='korisnici.php'>Korisnici</a>
                            <a href='obavestenjeadminpregled.php'>Novosti</a>
                            <a href='zahtevizapromenulekara.php'>Zahtevi</a>
                            <a href='logout.php'>Odjavi se</a>
                        </div>
                    </div>
                </div>";
            } else if($_SESSION['nalog'] == 'lekar') {
            $user = get_user();
            echo "<div class='navbar'>

                <div class='dropdown'>
                    <button class='dropbtn'>
                        " . $user['firstname'] . "
                        <i class='fa fa-caret-down'></i>
                    </button>
                    <div class='dropdown-content'>
                        <a href='profileLekar.php'>Profil</a>
                        <a href='pacijenti.php'>Pacijenti</a>
                        <a href='logout.php'>Odjavi se</a>
                    </div>
                </div>
            </div>";
            } else if($_SESSION['nalog'] == 'pacijent') {
                $user = get_user();
                echo "<div class='navbar'>
    
                    <div class='dropdown'>
                        <button class='dropbtn'>
                            " . $user['firstname'] . "
                            <i class='fa fa-caret-down'></i>
                        </button>
                        <div class='dropdown-content'>
                            <a href='profile.php'>Profil</a>
                            <a href='vaslekar.php'>Vaš lekar</a>
                            <a href='logout.php'>Odjavi se</a>
                        </div>
                    </div>
                </div>";
            } else {
            echo "<li><a href='login.php'>Prijavi se</a></li>";
            }
            ?>
            </ul>
        </nav>
    </header>