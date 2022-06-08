<?php include('inc/header.php'); 
    // user_restrictions(); 
    if(isset($_SESSION['email']) && isset($_SESSION['id'])) 
    { ?>
<?php }  if($_SESSION['nalog'] == 'pacijent') {?>

<!-- STRANICA ZA PACIJENTA -->

<div class="bt">

    <div class="container">
        <div class="row">

            <h1 class="text-center textColorProfile"><i class="fa-solid fa-hospital-user"></i> Pacijent</h1>
            <div style="width:100%;" class="container">
                <div class="row">
                    <div style="padding:0;" class="col-6">
                        <ul class="breadcrumbs1">
                            <li>
                                <a class="parentKnt" href="index.php">Naslovna</a>
                            </li>
                            <i class="fas fa-angle-right iconc"></i>
                            <li>
                                <a class="activeKnt">Pregled kartona</a>
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


        <?php  $user = get_user(); 
            $user_id = $user['id'];
            
            $query = "SELECT * FROM lekarpacijent WHERE id_pacijenta = '$user_id'";
            $results = query($query);

            if($results->num_rows > 0) { 

                $query = "SELECT id_pacijenta FROM lekarpacijent WHERE id_pacijenta = '$user_id'";
                $result = query($query);

                $pregled = get_pregled_table_idpacijent($user_id);
                $pregled_id = $pregled['id_lekara'];
                $query2 = "SELECT * FROM pregled WHERE id_pacijent =" . $user_id;

                $result2 = query($query2);


        if($result->num_rows > 0 && $result2->num_rows == 0) { ?>


        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="disline">
                                <h2 class="textColorProfile"><i class="fa-solid fa-circle-check"></i> Prijavljeni ste
                                    kod lekara</h2>
                            </div>
                        </div>
                    </div>

                    <form method="POST">

                        <div class="lekar_pacijent">
                            <div class="lekar_prijavljen">

                                <?php $user = get_user();
                            $user_id = $user['id'];
                            $lekar_pacijent = get_lekar_pacijent($user_id);
                            $lekar_id = $lekar_pacijent['id_lekara'];
                            $raspored = get_raspored($lekar_id);
                            echo "<div class='img_lekar'><img class='profile-image' src='" .  $lekar_pacijent['lekar_image'] ."'></div>"; 
                            echo "<h2 class='color_lekar_font'><i class='fa-solid fa-user-doctor'></i> " . $lekar_pacijent['lekar_firstname'] . ' ' . $lekar_pacijent['lekar_lastname'] . "</h2>";
                            echo "<h4 class='color_lekar_font'><i class='fa-solid fa-envelope'></i> " . $lekar_pacijent['lekar_email'] . "</h4>";
                            echo "<h4 class='color_lekar_font'><i class='fa-solid fa-phone'></i> " . $lekar_pacijent['lekar_mobile'] . "</h4>";?>
                                <div class="flex_label">
                                    <label class='labelLekar' for='lekari'>Dostupni termini <i
                                            class='fa-solid fa-calendar-days'></i></label>
                                </div>
                                <div class='custom-select' style='margin-bottom: 20px;'>
                                    <select name='raspored'>
                                        <?php  display_raspored($lekar_id) ?>
                                    </select>
                                </div>
                                <?php        
                                
                        // echo "<a class='btnTermin' href='zakazitepregled.php?rasporedid=". $raspored['id'] . "?lekarpacijentid=". $lekar_pacijent['id'] ."'>Zakažite pregled <i class='fa-solid fa-calendar-check'></i></a>" ; ?>

                                <input class='btnTermin' type="submit" name="submit-termin" value="Zakažite pregled">
                            </div>
                        </div>
                        <?php zakazite_pregled($user_id) ?>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <h2 class="textColorProfile" style="text-align:center;">Interna Medicina</h2>
</div>

<?php } ?>
<?php } ?>

<?php  $user = get_user(); 
            $user_id = $user['id'];
            $query = "SELECT * FROM lekarpacijent WHERE id_pacijenta = '$user_id'";
            $results = query($query);

            if($results->num_rows > 0) { 

                $query = "SELECT id_pacijenta FROM lekarpacijent WHERE id_pacijenta = '$user_id'";
                $result = query($query);
            $pregled = get_pregled_table_idpacijent($user_id);
            $pregled_id = $pregled['id_lekara'];
            $query3 = "SELECT * FROM pregled WHERE id_pacijent =" . $user_id;
            
            $result3 = query($query3);  ?>

<?php if($result3->num_rows > 0) { ?>
<div class="container">
    <div class="row">
        <div class="col-6">

            <div class="disline">

                <ul class="navigationpacijent">
                    <li><a href="vaslekar.php">Vaš lekar</a></li>
                    <li class="activevaslekar"><a href="pregledkartona.php">Pregled kartona</a></li>
                    <li><a href="pregledobavestenja.php">Pregled obaveštenja</a></li>
                    <li><a href="promenalekara.php">Promena lekara</a></li>
                </ul>
            </div>

            <div class="col-6">

                <h2 class="textColorProfile" style="text-align:center;">Pregled kartona <i
                        class='fa-solid fa-envelope'></i></h2>


                <div class="lekar_pacijent">

                    <ul class="kartonul">
                        <?php
                         $user = get_user(); 
                         $user_id = $user['id'];
                             $query = "SELECT * FROM karton WHERE id_pacijent = $user_id";
                             $result = query($query);
                         
                             if($result->num_rows > 0) {
                                 
                                 while($row = $result->fetch_assoc()) {
                                     $karton = get_karton($user_id); 
                                     $id_pregleda = $karton['id_pregled'];
                                     
                                     foreach($result as $karton) { 
                                         $prelged_od = $karton['id_pregled'];
                                         $pregled = get_pregled($prelged_od);
                                     $datum = $pregled['datum'];
                                     $vreme = $pregled['vreme'];
                                      echo "
                                      <li class='likarton'>Pregled (" .$datum.") <i class='fa-solid fa-calendar-days'></i> </li>
                                        <div  class='kartondiv hiddenRaspored'>
                                        <h3 class='textColorProfile' style='text-align:center; margin: 15px 0px;'>Vreme pregleda: " . substr($vreme,0,5 ). 'h' . "</h3>
                                    
                                        <label class='kartonlabel'>Nalaz:</label> <br/>
                                        <p>" . $karton['nalaz'] . "</p>
                                        <label class='kartonlabel'>Dijagnoza:</label> <br/>
                                        <p>" . $karton['dijagnoza'] . "</p>
                                        <label class='kartonlabel'>Pregled:</label> <br/>
                                        <p>" . $karton['pregled'] . "</p>
                                        </div>";
                                     }
                                 }
                                }
                        ?>
                    </ul>

                </div>
            </div>



        </div>
    </div>
</div>
</div>

<h2 class="textColorProfile" style="text-align:center;">Interna Medicina</h2>
</div>

<?php }  ?>
<?php }  ?>

<?php  $user = get_user(); 
            $user_id = $user['id'];
            
            $query4 = "SELECT * FROM lekarpacijent WHERE id_pacijenta = '$user_id'";
            $result4 = query($query4); ?>

<?php if($result4->num_rows == 0) { ?>

<div class="row">
    <div class="col-6">
        <div class="disline">
            <h2 class="textColorProfile">Nemate svog lekara?</h2>
            <div class="ml-2">
                <h4 class="textColorProfile">Ovde se mozete prijaviti! <i class="fa-solid fa-down-long"></i>
                </h4>
            </div>
        </div>
    </div>

</div>

<div class='bodyLekari'>
    <section class='sectionLekari'>
        <div class='swiper mySwiper container-fluid'>
            <div class='swiper-wrapper content'>
                <?php display_lekari(); ?>
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
</div>
<h2 class="textColorProfile" style="text-align:center;">Interna Medicina</h2>

</div>

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





<?php }?>




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
                            <p>Radnim danima: 7:00-21:00</p>
                            <p>Subotom: 7:00-21:00</p>
                            <p>Nedeljom: 7:00-21:00</p>
                        </div>
                        <!-- <div class="col-2 col2-footer">
                            <h2 style="color: #383c43;">Lokacija</h2>
                            <div class="mapouter">
                                <div class="mapouter">
                                    <div class="gmap_canvas"><iframe width="325" height="140" id="gmap_canvas"
                                            src="https://maps.google.com/maps?q=tutin,%20revolucije&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                            href="https://fmovies-online.net"></a><br>
                                        <a href="https://www.embedgooglemap.net"></a>

                                    </div>
                                </div>
                            </div>
                        </div> -->
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
<script>
<?php require_once("js/script2.js");?>
</script>
</body>

</html>

<?php } else {
    header("Location: index.php");
} ?>