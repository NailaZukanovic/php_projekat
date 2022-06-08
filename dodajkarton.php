<?php include('inc/header.php'); 
    // user_restrictions(); 
    if(isset($_SESSION['email']) && isset($_SESSION['id'])) 
    { ?>

<!-- STRANICA ZA PACIJENTA -->
<?php   if($_SESSION['nalog'] == 'lekar') {?>

<?php
    $user = get_user();
    $user_id = $user['id'];
    $sql = "SELECT * FROM lekarpacijent WHERE id_lekara = '$user_id'";
    $results = query($sql);

    if($results->num_rows > 0) {
        $lekar_pacijent = get_pacijent_lekar($user_id); // uzimamo lekara iz tabele lekarpacijent
        $lekar_pacijent_id = $lekar_pacijent['id'];
        $query = "SELECT * FROM pregled WHERE id_lekar = '$user_id'";
        $result = query($query);  
         if($result->num_rows > 0)  { ?>
<div class="bt">

    <div class="container">
        <div class="row">

            <h1 class="text-center textColorProfile"><i class="fa-solid fa-user-doctor"></i> Lekar</h1>
            <div style="width:100%;" class="container">
                <div class="row">
                    <div style="padding:0;" class="col-6">
                        <ul class="breadcrumbs1">
                            <li>
                                <a class="parentKnt" href="index.php">Naslovna</a>
                            </li>
                            <i class="fas fa-angle-right iconc"></i>
                            <li>
                                <a class="activeKnt">Dodaj karton</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- <div class="bt"></div> -->
            <h2 class="textColorProfile"><i class="fa-solid fa-user"></i>
                <?php  $user = get_user(); echo $user['firstname'] . ' ' . $user['lastname'] ?>
            </h2>



        </div>



        <div class="container">
            <div class="row">
                <div class="col-6">

                    <div class="disline">
                        <ul class="navigationpacijent">
                            <li><a href="pacijenti.php">Pacijenti</a></li>
                            <li class="activevaslekar"><a href="dodajkarton.php">Dodaj karton</a></li>
                            <li><a href="obavestenje.php">Dodaj obaveštenje</a></li>
                            <li><a href="zakljucilecenje.php">Zaključi lečenje</a></li>
                        </ul>
                    </div>
                    <div class="disline">
                        <h2 class="textColorProfile">Dodaj karton za svog pacijenta <i
                                class="fa-solid fa-folder-plus"></i>
                        </h2>
                    </div>

                    <?php
                            $user = get_user(); 
                            $user_id = $user['id'];
                            
                         ?>

                </div>

            </div>


            <div class="row">

                <?php
                    
                display_pacijent_pregled_card($user_id);
                 ?>

            </div>
            <div class="probadiv1 hiddenRaspored">
                gagagaga
            </div>


        </div>
    </div>

    <h2 class="textColorProfile" style="text-align:center;">Interna Medicina</h2>

</div>

<?php } else { "ea";} ?>






<?php } else {echo "<h1>Nijedan pacijent nije zakazao termin</h1>";} ?>

<?php } ?>
<!-- FOOTER -->
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
<?php  } else {
    header("Location: index.php");
} ?>