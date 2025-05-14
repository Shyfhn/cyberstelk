<?php
// $servername = "localhost";
// $nis = "root";
// $password = "";
// $database = "stelk_inter";


$database = new mysqli("localhost", "root", "", "stelk_inter");

if ($database->connect_error){
       die("Connection failed:  ".$database->connect_error);
   }
//    echo "Connection Sukses";
?>