<?php
    include_once "inc/header.php";
?>

<head>
    <style>
    <?php include "css/lightbox.min.css";
    ?>
    </style>
    <script src="js/lightbox-plus-jquery.min.js"></script>
</head>
<!-- HEADER BANNER -->
<div class='onama-banner'>
    <div class='kontakt-img'>
        <div class="paddingKontakt">
            <h2 class="headerNaslov1">Naš tim</h2>
            <span style="color:transparent;" class="headerNaslov">sadddddsasadddddd</span>
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
                    <a class="activeKnt">Naš tim</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class='bodyLekari'>
                <section class='sectionLekari'>
                    <div class='swiper mySwiper container-fluid'>
                        <div class='swiper-wrapper content'>
                            <?php nas_tim(); ?>
                        </div>
                        <div class='swiper-button-next'></div>
                        <div class='swiper-button-prev'></div>
                        <div class='swiper-pagination'></div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>





<div class="my-4"></div>


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