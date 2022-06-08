<?php
    
    include "functions/init.php";

    if(isset($_GET['zahtevid'])) {
        $id = $_GET['zahtevid'];
        $user = get_userFromZahtevi($id);
        
        $nalog = $user['nalog'];
        $firstname = $user['firstname'];
        $lastname =$user['lastname'];
        $password = $user['password'];
        $pol = $user['pol'];
        $drzavaRodj =$user['drzavaRodj']; 
        $mestoRodj = $user['mestoRodj'];
        $datumRodj = $user['datumRodj'];
        $jmbg =$user['jmbg'];
        $mobile = $user['mobile'];
        $email = $user['email'];
        $image = $user['image'];

        $sql2 = "INSERT INTO users (nalog ,firstname, lastname, password, pol, drzavaRodj, mestoRodj, datumRodj, jmbg, mobile, email, image, verify) ";
        $sql2 .= "VALUES('$nalog', '$firstname', '$lastname', '$password', '$pol', '$drzavaRodj', '$mestoRodj', '$datumRodj', '$jmbg', '$mobile', '$email', '$image', 1)";
        $result2 = query($sql2);

        $sql = "DELETE FROM `zahtevi` WHERE id=$id";
        $result =  query($sql);
        if($result && $result2) {
        send_email_accept_lekar($email);
        echo("<script>location.href = 'profileAdmin.php';</script>");
    
        } else {
            die("QUERY FAILED " . mysqli_error($con));
        }


    }
?>