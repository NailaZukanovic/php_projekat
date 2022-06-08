<?php
    
    include "functions/init.php";

    if(isset($_GET['lekarid'])) {
        $id_lekar = $_GET['lekarid'];
        $lekar = get_lekar($id_lekar);

        $pacijent = get_user(); 

        $id_pacijent = $pacijent['id'];

        $lekar_firstname = $lekar['firstname'];
        $lekar_lastname = $lekar['lastname'];
        $lekar_pol = $lekar['pol'];
        $lekar_jmbg = $lekar['jmbg'];
        $lekar_mobile = $lekar['mobile'];
        $lekar_email = $lekar['email'];
        $lekar_image = $lekar['image'];

        $pacijent_firstname = $pacijent['firstname'];
        $pacijent_lastname = $pacijent['lastname'];
        $pacijent_pol = $pacijent['pol'];
        $pacijent_jmbg = $pacijent['jmbg'];
        $pacijent_mobile = $pacijent['mobile'];
        $pacijent_email = $pacijent['email'];
        $pacijent_image = $pacijent['image'];
        $pacijent_mesto = $pacijent['mestoRodj'];

        $sql = "INSERT INTO lekarpacijent (id_lekara ,id_pacijenta, lekar_firstname, lekar_lastname, lekar_pol, lekar_jmbg, lekar_mobile, lekar_email, lekar_image, pacijent_firstname, pacijent_lastname, pacijent_pol, pacijent_jmbg, pacijent_mobile, pacijent_email, pacijent_image, pacijent_mesto) ";
        $sql .= "VALUES($id_lekar, $id_pacijent, '$lekar_firstname', '$lekar_lastname', '$lekar_pol', '$lekar_jmbg', '$lekar_mobile', '$lekar_email', '$lekar_image', '$pacijent_firstname', '$pacijent_lastname', '$pacijent_pol', '$pacijent_jmbg', '$pacijent_mobile', '$pacijent_email', '$pacijent_image', '$pacijent_mesto')";
        $result = query($sql);
        
        if($result) {
            redirect("vaslekar.php");
        } else {
            die("QUERY FAILED " . mysqli_error($con));
        }


    }
?>