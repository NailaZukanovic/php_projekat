<?php
    
    include "functions/init.php";

    if(isset($_GET['lekarid'])) {
        $id_lekar = $_GET['lekarid'];
        $lekar = get_lekar($id_lekar);

        $pacijent = get_user(); 

        $id_pacijent = $pacijent['id'];

     

        $sql = "INSERT INTO zahtev_promena_lekara (id_lekara ,id_pacijenta) ";
        $sql .= "VALUES($id_lekar, $id_pacijent)";
        $result = query($sql);
        
        if($result) {
            redirect("promenalekara.php");
            set_message("Zahtev je poslat!");
        } else {
            die("QUERY FAILED " . mysqli_error($con));
        }


    }
?>