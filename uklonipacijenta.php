<?php
    
    include "functions/init.php";

    if(isset($_GET['ukloniid'])) {
        $id = $_GET['ukloniid'];

        $sql = "DELETE FROM `users` WHERE id=$id";
        $result =  query($sql);
        if($result) {
            redirect("korisnici.php");
        } else {
            die("QUERY FAILED " . mysqli_error($con));
        }
    }
?>