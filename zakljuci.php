<?php
    
    include "functions/init.php";

    if(isset($_GET['zahtevid'])) {
        $id_pacijent = $_GET['zahtevid'];
        $user = get_userFromZahtevi($id);
        
       
        $sql = "DELETE FROM lekarpacijent WHERE id_pacijenta=$id_pacijent";
        $result =  query($sql);
       
        // $sql2 = "DELETE FROM pregled WHERE id_pacijent=$id_pacijent";
        // $result2 =  query($sql2);
        if($result) {
            redirect("zakljucilecenje.php");
        } else {
            die("QUERY FAILED " . mysqli_error($con));
        }


    }
?>