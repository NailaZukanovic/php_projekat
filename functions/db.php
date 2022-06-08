<?php


$serverName="localhost";
$dbUsername="id19024599_root";
$dbPassword="M%6zkXf+QD2}[f1y";
$dbName="id19024599_internamedicinaprojekat";

$con = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

function escape($string){
    global $con;
    return mysqli_real_escape_string($con,$string);
}

function query($query){
    global $con;
    return mysqli_query($con,$query);
}

function confirm($result) {
    global $con;
    if(!$result){
        die("QUERY FAILED " . mysqli_error($con));
    }
}
?>