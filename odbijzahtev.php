<?php
    
    include "functions/init.php";

    if(isset($_GET['zahtevid'])) {
        $id = $_GET['zahtevid'];
        $user = get_userFromZahtevi($id);
      
        $email = $user['email'];

        $sql = "DELETE FROM `zahtevi` WHERE id=$id";
        $result =  query($sql);
        if($result) {
        send_email_decline_lekar($email);
        echo("<script>location.href = 'profileAdmin.php';</script>");
        } else {
            die("QUERY FAILED " . mysqli_error($con));
        }
    }
?>