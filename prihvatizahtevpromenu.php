<?php
    
    include "functions/init.php";

    if(isset($_GET['prihvatiid'])) {
        $id_pacijent = $_GET['prihvatiid'];
        $id_lekar = $_GET['id_lekar'];
        $user = get_user_promena_lekara($id_lekar, $id_pacijent);

        
        $lekar_id = $user['id_lekara'];
        $pacijent_id = $user['id_pacijenta'];
        
        $lekarr = get_user($lekar_id);
        $pacijentt = get_user($pacijent_id);

        $lekar_firstname = $lekarr['firstname'];
        $lekar_lastname = $lekarr['lastname'];
        $lekar_pol = $lekarr['pol'];
        $lekar_jmbg = $lekarr['jmbg'];
        $lekar_mobile = $lekarr['mobile'];
        $lekar_email = $lekarr['email'];
        $lekar_image = $lekarr['image'];

        $pacijent_firstname = $pacijentt['firstname'];
        $pacijent_lastname = $pacijentt['lastname'];
        $pacijent_pol = $pacijentt['pol'];
        $pacijent_jmbg = $pacijentt['jmbg'];
        $pacijent_mobile = $pacijentt['mobile'];
        $pacijent_email = $pacijentt['email'];
        $pacijent_image = $pacijentt['image'];
        $pacijent_mesto = $pacijentt['mestoRodj'];

        $sql = "DELETE FROM lekarpacijent WHERE id_pacijenta=$pacijent_id";
        $result =  query($sql);

        $sql2 = "INSERT INTO lekarpacijent (id_lekara ,id_pacijenta, lekar_firstname, lekar_lastname, lekar_pol, lekar_jmbg, lekar_mobile, lekar_email, lekar_image, pacijent_firstname, pacijent_lastname, pacijent_pol, pacijent_jmbg, pacijent_mobile, pacijent_email, pacijent_image, pacijent_mesto) ";
        $sql2 .= "VALUES($lekar_id, $pacijent_id, '$lekar_firstname', '$lekar_lastname', '$lekar_pol', '$lekar_jmbg', '$lekar_mobile', '$lekar_email', '$lekar_image', '$pacijent_firstname', '$pacijent_lastname', '$pacijent_pol', '$pacijent_jmbg', '$pacijent_mobile', '$pacijent_email', '$pacijent_image', '$pacijent_mesto')";
        $result2 = query($sql2);

        $sql3 = "DELETE FROM zahtev_promena_lekara WHERE id_pacijenta=$pacijent_id";
        $result3 =  query($sql3);

        
        if($result && $result2 && $result3) {
            redirect("zahtevizapromenulekara.php");
        } else {
            die("QUERY FAILED " . mysqli_error($con));
        }


    }
?>