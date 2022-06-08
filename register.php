<?php
    include_once 'inc/header.php';
    // login_check_pages();
    if(!isset($_SESSION['email']) && !isset($_SESSION['id'])) 
    { ?>


<!-- HEADER BANNER -->
<div class='login-banner'>
    <div class='kontakt-img'>
        <div class="paddingKontakt">
            <h2 class="headerNaslov1">Registracija</h2>
            <span style="color: transparent;" class="headerNaslov">Tu smo za vas.</span>
            <div class='border-bottom-banner'></div>
        </div>
    </div>
</div>

<div style="width:100%;" class="container">
    <div class="row">
        <div style="padding:0;" class="col-6">
            <ul class="breadcrumbs">
                <li>
                    <a class="parentKnt" href="index.php">Naslovna</a>
                </li>
                <i class="fas fa-angle-right iconc"></i>
                <li>
                    <a class="activeKnt">Registracija</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="formKontakt">
                <h1>Registracija</h1>

                <?php 
                    validate_user_registration();
                ?>


                <form method="POST">
                    <label for="fname">Ime</label>
                    <input type="text" id="fname" name="firstname" placeholder="Ime" required autocomplete="off">

                    <label for="lname">Prezime</label>
                    <input type="text" id="lname" name="lastname" placeholder="Prezime" required autocomplete="off">

                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Email" required autocomplete="off">

                    <label for="l">Lozinka</label>
                    <input type="password" id="lname" name="password" placeholder="Lozinka" required>

                    <label for="lname">Potvrda lozinke</label>
                    <input type="password" id="lname" name="password_repeat" placeholder="Potvrda lozinke" required>

                    <label for="pol">Pol</label>
                    <select id="pol" name="pol" required>
                        <option>Izaberite pol:</option>
                        <option value="muski">Muški</option>
                        <option value="zenski">Zenški</option>
                    </select>

                    <label for="nalog">Registrujte se kao</label>
                    <select id="nalog" name="nalog" required>
                        <option>Izaberite način registracije:</option>
                        <option value="lekar">Lekar</option>
                        <option value="pacijent">Pacijent</option>
                    </select>

                    <label for="drzavaRodj">Država rođenja</label>
                    <input type="text" id="drzavaRodj" name="drzavaRodj" placeholder="Država rođenja" required
                        autocomplete="off">

                    <label for="mestoRodj">Mesto rođenja</label>
                    <input type="text" id="mestoRodj" name="mestoRodj" placeholder="Mesto rođenja" required
                        autocomplete="off">

                    <label for="datum">Datum rođenja</label>
                    <input type="date" id="datum" name="datumRodj" placeholder="Datum rođenja" required>

                    <label for="jmbg">JMBG</label>
                    <input type="text" id="jmbg" name="jmbg" placeholder="JMBG" required autocomplete="off">

                    <label for="mobile">Mobilni telefon</label>
                    <input type="text" id="mobile" name="mobile" placeholder="Mobilni telefon" required
                        autocomplete="off">

                    <h5>Već imate nalog? Kliknite <a href="login.php">ovde</a></h5>

                    <input type="submit" name="register-submit" value="Registruj se">
                </form>
            </div>
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p>Popunite sva polja!</p>";
                    }
                    else if($_GET["error"] == "invaliduid"){
                        echo "<p>Izaberite drugo korisničko ime!</p>";
                    }
                    else if($_GET["error"] == "invalidemail"){
                        echo "<p>Izaberite odgovarajuću e-mail!</p>";
                    }
                    else if($_GET["error"] == "passwordsdontmatch"){
                        echo "<p>Lozinke se ne poklapaju!</p>";
                    }
                    else if($_GET["error"] == "stmtfailed"){
                        echo "<p>Nešto nije u redu, pokušajte ponovo!</p>";
                    }
                    else if($_GET["error"] == "usernametaken"){
                        echo "<p>Korisničko ime već postoji!</p>";
                    }
                    else if($_GET["error"] == "none"){
                        echo "<p>Uspešna registracija!</p>";
                    }
                }
                
            ?>
        </div>


        <div class="col-3">
            <div class="row">
                <div class="dflex-icons">

                    <div class="col-6 col-md-6">
                        <div class="list-icon-seat"></div>
                        <h3 class="icon-text">Prijatan i besprekorno čist ambijent</h3>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="list-icon-shake"></div>
                        <h3 class="icon-text">Ljubaznost i strpljenje</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="dflex-icons">
                    <div class="col-6 col-md-6">
                        <div class="list-icon-price"></div>
                        <h3 class="icon-text">Razumne cene za pružene usluge</h3>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="list-icon-bag"></div>
                        <h3 class="icon-text">Kvalitetna i kompletna zdravstvena usluga</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>
</div>

<!-- KARTE -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="cards">
                    <img class="img-thumbnail responsive" src="./images/our-team.jpg" />
                    <div class="cart-div">
                        <span class="cardTextDiv">
                            <h4>Naš tim</h4>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="cards">
                    <img class="img-thumbnail responsive" src="./images/pariske_komune.jpg" />
                    <div class="cart-div">
                        <span class="cardTextDiv">
                            <h4>Galerija</h4>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <div class="cards">
                    <img class="img-thumbnail responsive" src="./images/kardiologija-1.jpg" />
                    <div class="cart-div">
                        <span class="cardTextDiv">
                            <h4>Usluge</h4>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PORUKA BANNER  -->
<div style="width:100%;" class="container poruka">
    <div class="row">
        <div class="col-6">
            <div style="padding: 40px 40px 30px 40px;">
                <h2 style="color: #383c43;
                            font-size: 34px;
                            font-weight: 600; text-align:left">Interna medicina</h2>

                <p style="color: #383c43;
                            font-size: 24px;
                            font-weight: 300;
                            margin: 0;"> Interna medicina je grana i specijalnost medicine koja se bavi dijagnostikom i
                    nehirurškim lečenjem bolesti odraslih osoba, naročito oboljenja unutrašnih organa. Doktor
                    interne medicine koji se naziva i ,,Internista” tokom osnovnih studija i specijalizacije obučava
                    se na koji način da preventira, dijagnostikuje i leči bolesti od kojih obolevaju odrasle osobe.
                </p>
            </div>
        </div>
    </div>


    <!-- FOOTER -->
    <section class="section">
        <div style="width:100%" class="container footerM">
            <!-- Footer -->
            <footer class="page-footer font-small mdb-color pt-4">
                <div class="footerFlex">
                    <!-- Footer Links -->
                    <div class="container text-center text-md-left">
                        <!-- Footer links -->
                        <div class="row text-center text-md-left mt-3 pb-3">
                            <!-- Grid column -->
                            <div class="col-2 col1-footer">
                                <h2 class="text-uppercase mb-4 font-weight-bold">
                                    Radno vreme:
                                </h2>
                                <p>Radnim danima: 7:00-20:00</p>
                                <p>Subotom: 9:00-14:00</p>

                            </div>


                            <div class="col-2 col1-footer">
                                <h2 class="text-uppercase mb-4 font-weight-bold">
                                    Linkovi:
                                </h2>
                                <p>
                                    <a style="color: #383c43" href="login.php">Prijavi se</a>
                                </p>
                                <p>
                                    <a style="color: #383c43" href="kontakt.php">Kontakt</a>
                                </p>
                                <p>
                                    <a style="color: #383c43" href="galerija">Galerija</a>
                                </p>
                                <p>
                                    <a style="color: #383c43" href="O nama">O nama</a>
                                </p>
                            </div>


                            <div class="col-2 col1-footer">
                                <p>
                                    <i class="fas fa-home mr-3"></i> Tutin, Revolucije bb

                                </p>
                                <p>
                                    <i class="fas fa-envelope mr-3"></i>
                                    eldar.pepic@live.de
                                </p>
                                <p>
                                    <i class="fas fa-phone mr-3"></i> + 381 64 0600 600
                                </p>
                                <p>
                                    <i class="fas fa-print mr-3"></i> + 381 64 0600 600
                                </p>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Footer links -->
                    </div>
                </div>
            </footer>
            <!-- Footer -->
        </div>
    </section>

    <!-- FOOTER -->
    <div style="width:100%" class="container copyright">
        <div class="row">
            <div class="row d-flex align-items-center">
                <!-- Grid column -->
                <div class="col-3 text-centerft col-lg-8">
                    <!--Copyright-->
                    <p>
                        © 2022 Copyright:
                        <a href="https://mdbootstrap.com/">
                            <strong> eldar.pepic@live.de</strong>
                        </a>
                    </p>
                </div>
                <div class="col-3 text-centerft col-lg-4 ml-lg-0">
                    <!-- Social buttons -->
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
        </div>
    </div>
    </body>

    </html>
    <?php } else {
    header("Location: index.php");
} ?>