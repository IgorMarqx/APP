<?php

$con = mysqli_connect("localhost", "root", "");

$select = mysqli_select_db($con, "app");

// if($con){
//     echo "Conectado com sucesso";
// }else{
//     echo "Falha ao conectar";
// }