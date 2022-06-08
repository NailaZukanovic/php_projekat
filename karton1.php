<?php include('inc/header.php'); 
    // user_restrictions(); 
    if(isset($_SESSION['email']) && isset($_SESSION['id'])) 
    { ?>

<!-- STRANICA ZA PACIJENTA -->
<?php   if($_SESSION['nalog'] == 'lekar') {?>

<?php
    $user = get_user();
    $user_id = $user['id'];
    $sql = "SELECT * FROM lekarpacijent WHERE id_lekara = $user_id";
    $results = query($sql);

    if($results->num_rows > 0) {
        $lekar_pacijent = get_pacijent_lekar($user_id); // uzimamo lekara iz tabele lekarpacijent
        $lekar_pacijent_id = $lekar_pacijent['id'];
        $query = "SELECT * FROM pregled WHERE id_lekar = $user_id";
      
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
                                <a class="parentKnt" href="pacijenti.php">Pacijenti</a>
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

        <div>
            <?php 
           
           
        //    $pregled_pacijent = get_pregled_from_pacijent($id);
        //     $datum = $pregled_pacijent['datum'];
        //    $query = "SELECT * FROM pregled WHERE id_pacijent = $id AND datum = '$datum'";

                $id = $_GET['id_pacijent']; 
                
                $sql = "SELECT * FROM karton WHERE id_pacijent = $id";
                $results = query($sql);

                $pregled_id =  $_GET['karton'];
               


              
                $id_karton_pregled = probaaaaa($pregled_id);
                
                
                
                // echo $id_raspored_pregled;
                // echo $pregled_id;
                // echo $id_karton_pregled;
                
                // echo $datum;
            
                if($pregled_id == $id_karton_pregled) {
            $id = $_GET['id_pacijent']; 
            $query = "SELECT * FROM karton WHERE id_pacijent = $id";
            $result = query($query);
                    // echo $pregled_id;
                    // echo $id_karton_pregled;
        
            if($result->num_rows > 0) {
                
                while($row = $result->fetch_assoc()) {
                    $karton = get_karton($id); 
                    $id_pregleda = $karton['id_pregled'];
                    
                    foreach($result as $karton) { 
                        $prelged_od = $karton['id_pregled'];
                        $pregled = get_pregled($prelged_od);
                    $datum = $pregled['datum'];
                    $vreme = $pregled['vreme']; } } }
                echo "
                <div class='col-6'>

                <h2 class='textColorProfile' style='text-align:center;'>Za ovaj termin ste dodali karton</h2>

                <h2 class='textColorProfile' style='text-align:center;'>Pregled kartona <i
                        class='fa-solid fa-envelope'></i></h2>


                <div class='lekar_pacijent'>

                    <ul class='kartonul'>
                    <li class='likarton'>Pregled (" .$datum.") <i class='fa-solid fa-calendar-days'></i> </li>
                    <div  class='kartondiv hiddenRaspored'>
                    <h3 class='textColorProfile' style='text-align:center; margin: 15px 0px;'>Vreme pregleda: " . substr($vreme,0,5 ). 'h' . "</h3>
                
                    <label class='kartonlabel'>Nalaz:</label> <br/>
                    <p>" . $karton['nalaz'] . "</p>
                    <label class='kartonlabel'>Dijagnoza:</label> <br/>
                    <p>" . $karton['dijagnoza'] . "</p>
                    <label class='kartonlabel'>Pregled:</label> <br/>
                    <p>" . $karton['pregled'] . "</p>
                    </div>
                    </ul>
                </div>      
            </div>";
           }
           else { 
            $id = $_GET['id_pacijent']; 
            $pacijent = get_user($id);
            $query = "SELECT * FROM pregled WHERE id_pacijent = $id";
            $result = query($query);
           
        
            if($result->num_rows > 0) {
                
                while($row = $result->fetch_assoc()) {
                    
                    
                    foreach($row as $karton) { 
                        
                    $datum = $row['datum'];
                    $vreme = substr($row['vreme'],0,5); } } }
               echo "
               
            <h2 class='textColorProfile' style='text-align:center;'>Dodaj karton za " . $pacijent['firstname'] .' ' . $pacijent['lastname'] . " </h2>
            <form method='POST'>

                <label for='fname'>Lekarski nalaz:</label>
                <input type='text' id='fname' name='nalaz'>

                <label for='lname'>Dijagnoza:</label>
                <input type='text' id='lname' name='dijagnoza'>

                <label for='pregled'>Pregled:</label>
                <textarea id='pregled' name='pregled' rows='5' cols='50'></textarea>

                <label for='fnamee'>Termin pregleda:</label>
                <input type='text' id='fnamee' disabled value='$datum $vreme h 'h' h>

                <input type='submit' value='Dodaj'>
            </form>";
            
                  $user = get_user(); dodaj_karton($user['id'], $pregled_id); 
            }
        


        

?>
            <h2 class="textColorProfile" style="text-align:center;">Interna Medicina</h2>

        </div>
    </div>


</div>





<?php } ?>
<?php } ?>
<?php }  else {
    header("Location: index.php");
} ?>
<!-- FOOTER -->
<script>
<?php require_once("js/script2.js");?>
</script>
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