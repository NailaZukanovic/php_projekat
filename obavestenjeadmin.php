<?php include('inc/header.php'); 
    // user_restrictions(); 
    if(isset($_SESSION['email']) && isset($_SESSION['id'])) 
    { ?>

<!-- STRANICA ZA PACIJENTA -->
<?php   if($_SESSION['nalog'] == 'admin') {?>


<div class="bt">

    <div class="container">
        <div class="row">
            <h1 class="text-center textColorProfile"><i class="fa-solid fa-gear"></i> Administrator</h1>
            <div style="width:100%;" class="container">
                <div class="row">
                    <div style="padding:0;" class="col-6">
                        <ul class="breadcrumbs1">
                            <li>
                                <a class="parentKnt" href="index.php">Naslovna</a>
                            </li>
                            <i class="fas fa-angle-right iconc"></i>
                            <li>
                                <a class="activeKnt">Dodaj obaveštenje</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- <div class="bt"></div> -->
            <h2 class="textColorProfile"><i class="fa-solid fa-user"></i>
                <?php $user = get_user(); echo $user['firstname'] . ' ' . $user['lastname']; ?></h2>

        </div>



        <div class="col-6">
            <?php if(isset($_GET['error'])) { ?>
            <div class="alert" role="alert">
                <?=$_GET['error']?>
            </div>
            <?php } ?>

            <?php create_posts_admin(); ?>
            <form method='POST' enctype="multipart/form-data">

                <label for='fname'>Naslov:</label>
                <input type='text' id='fname' name='naslov'>

                <label for='pregled'>Sadržaj:</label>
                <textarea id='pregled' name='sadrzaj' rows='5' cols='50'></textarea>

                <label for='lname'>Slika:</label>
                <!-- <div class="margin-file"> -->
                <input type="file" name="my_image">

                <input type='submit' value='Dodaj'>

            </form>
        </div>


        <h2 class="textColorProfile" style="text-align:center;">Interna Medicina</h2>

    </div>
</div>


</div>




<?php } else {echo "<h1>Nijedan pacijent nije zakazao termin</h1>";} ?>

<!-- FOOTER -->
<script>
<?php require_once("js/script2.js");?>
</script>
<?php include('inc/footer.php'); ?>


<?php  } else {
    header("Location: index.php");
} ?>