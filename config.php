<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "diamondapp";

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// $db = mysqli_connect("localhost","root","");

// $conn = mysqli_select_db($db, "diamondapp");

// if($conn){
//     echo "Conectado com sucesso";
// }else{
//     echo "Impossivel fazer conexão com o BD";
// }