<?php include('inc/header.php'); 
    // user_restrictions(); 
    if(isset($_SESSION['email']) && isset($_SESSION['id'])) 
    { ?>

<!-- STRANICA ZA ADMINA -->
<?php if($_SESSION['nalog'] == 'lekar') {?>
<div class="bt">

    <div class="container">
        <div class="row">


            <h1 class="text-center textColorProfile"><i class="fa-solid fa-user-doctor"></i> Lekar</h1>
            <div style="width:100%;" class="container">
                <div class="row">
                    <div style="padding:0;" class="col-6">
                        <ul class="breadcrumbs1">
                            <li>
                                <a class="parentKnt" href="profileLekar.php">Profil</a>
                            </li>
                            <i class="fas fa-angle-right iconc"></i>
                            <li>
                                <a class="activeKnt">Izmeni profil</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- <div class="bt"></div> -->
            <h2 class="textColorProfile"><i class="fa-solid fa-user"></i>
                <?php  $user = get_user(); echo $user['firstname'] . ' ' . $user['lastname'] ?>
            </h2>
            <div class="col-3">
                <div class="heightProfle">

                    <?php 
                    $id = $_GET['id'];
            $user = get_user($id); 
            
            echo "<img class='profile-image' src='" .  $user['image'] ."'>";        
        ?>

                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <?php $id = $_GET['id']; promeniProfil_lekar_validate($id);?>
                    <form method="POST">
                        <label class="textColorProfile">Ime:</label>
                        <input type="text" name="imepromena" required autocomplete="off"
                            value="<?php $id = $_GET['id'];  $user = get_user($id); echo $user['firstname'] ?>">
                        <label class="textColorProfile">Prezime:</label>
                        <input type="text" name="prezimepromena" required autocomplete="off"
                            value="<?php $id = $_GET['id'];  $user = get_user($id); echo $user['lastname'] ?>">
                        <label class="textColorProfile">Nova lozinka:</label>
                        <input type="password" name="passpromena" required autocomplete="off"
                            value="<?php  $user = get_user();  ?>">
                        <label class="textColorProfile">Potvrda lozinke:</label>
                        <input type="password" name="passrptpromena" required autocomplete="off"
                            value="<?php  $user = get_user(); ?>">
                        <div class="izmeniprofileFlex">
                            <input type="submit" value="Promeni" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>

<h2 class="textColorProfile" style="text-align:center;">Interna Medicina</h2>

</div>


<?php }  else { ?>
header("Location: index.php");
<?php } ?>
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