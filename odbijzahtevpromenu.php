<?php
    
    include "functions/init.php";

    if(isset($_GET['ukloniid'])) {
        $id_pacijent = $_GET['ukloniid'];
        $id_lekar = $_GET['id_lekar'];
        $user = get_user_promena_lekara($id_lekar, $id_pacijent);

        
        $lekar_id = $user['id_lekara'];
        $pacijent_id = $user['id_pacijenta'];
        
        $lekarr = get_user($lekar_id);
        $pacijentt = get_user($pacijent_id);

       
        $sql3 = "DELETE FROM zahtev_promena_lekara WHERE id_pacijenta=$pacijent_id";
        $result3 =  query($sql3);

        
        if($result3) {
            redirect("zahtevizapromenulekara.php");
        } else {
            die("QUERY FAILED " . mysqli_error($con));
        }


    }
?>