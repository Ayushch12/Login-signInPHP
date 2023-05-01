<?php

$hostName = "localhost";
$dbUser= "root";
$dbPassword="";
$dbName= "login_registe" ;
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName) ;
if(!$conn){
    die("Something went wrong;" ) ;
}




?>
