<?php
    
    include "functions/init.php";

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM obavestenja WHERE id=$id";
        $result =  query($sql);
        if($result) {
            redirect("obavestenjeadminpregled.php");
        } else {
            die("QUERY FAILED " . mysqli_error($con));
        }
    }
?>