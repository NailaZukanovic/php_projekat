<?php include('inc/header.php'); 
    // user_restrictions(); 
    if(isset($_SESSION['email']) && isset($_SESSION['id'])) 
    { ?>

<!-- STRANICA ZA PACIJENTA -->
<?php   if($_SESSION['nalog'] == 'pacijent') {?>


<div class="bt">

    <div class="container">
        <div class="row">



            <h1 class="text-center textColorProfile"><i class="fa-solid fa-hospital-user"></i> Pacijent</h1>
            <div style="width:100%;" class="container">
                <div class="row">
                    <div style="padding:0;" class="col-6">
                        <ul class="breadcrumbs1">
                            <li>
                                <a class="parentKnt" href="index.php">Naslov</a>
                            </li>
                            <i class="fas fa-angle-right iconc"></i>
                            <li>
                                <a class="activeKnt">Promena lekara</a>
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
        <div class="disline">

            <ul class="navigationpacijent">
                <li><a href="vaslekar.php">Vaš lekar</a></li>
                <li><a href="pregledkartona.php">Pregled kartona</a></li>
                <li><a href="pregledobavestenja.php">Pregled obaveštenja</a></li>
                <li class="activevaslekar"><a href="promenalekara.php">Promena lekara</a></li>
            </ul>
        </div>

        <?php 
                
                $user = get_user();
                $user_id = $user['id'];
                $lekar_pacijent = get_lekar_pacijent($user_id);
                $lekar_id = $lekar_pacijent['id_lekara'];
                $query = "SELECT * FROM zahtev_promena_lekara where id_pacijenta = " . $user_id;
                $result = query($query);

                if($result->num_rows == 0) { ?>

        <div class="row">
            <div class="col-6">
                <div class="disline">
                    <h2 class="textColorProfile">Želite da promenite svog lekara?</h2>
                    <div class="ml-2">
                        <h4 class="textColorProfile">Ovde to mozete uraditi! <i class="fa-solid fa-down-long"></i>
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class='bodyLekari'>
            <section class='sectionLekari'>
                <div class='swiper mySwiper container-fluid'>
                    <div class='swiper-wrapper content'>
                        <?php display_lekari_promena(); ?>
                    </div>
                    <div class='swiper-button-next'></div>
                    <div class='swiper-button-prev'></div>
                    <div class='swiper-pagination'></div>
                </div>
            </section>
        </div>

        <h2 class='textColorProfile' style='text-align:center;'><i class='fa-solid fa-user-doctor'></i>
            Izaberite svog
            lekara!</h2>
        <?php } else {?>

        <h2 class="textColorProfile" style="text-align:center;">Poslali ste zahtev za promenu lekara,</h2>
        <h2 class="textColorProfile" style="text-align:center;">čeka se odobrenje od admina</h2>
        <?php }?>
        <br />
        <br />

        <h2 class="textColorProfile" style="text-align:center;">Interna Medicina</h2>

    </div>
</div>


</div>




<?php } else {echo "<h1>Nijedan pacijent nije zakazao termin</h1>";} ?>

<!-- FOOTER -->
<script src='https://unpkg.com/swiper/swiper-bundle.min.js'></script>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper('.mySwiper', {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
</script>
<script>
<?php require_once("js/script2.js");?>
</script>
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