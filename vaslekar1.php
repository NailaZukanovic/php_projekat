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
                                <a class="activeKnt">Vaš lekar</a>
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
                $pregled_id = $pregled['id'];
                $query2 = "SELECT * FROM pregled WHERE id_lekar_pacijent =" . $pregled_id;

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
            $pregled_id = $pregled['id'];
            $query3 = "SELECT * FROM pregled WHERE id_lekar_pacijent =" . $pregled_id;
            
            $result3 = query($query3);  ?>

<?php if($result3->num_rows > 0) { ?>
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

            proba
            <?php echo $pregled_id; ?>

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






<?php include('inc/footer.php'); ?>

<?php } else {
    header("Location: index.php");
} ?>