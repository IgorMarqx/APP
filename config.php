<?php

$db = mysqli_connect("localhost", "root", "");

$con = mysqli_select_db($db, "diamondapp");

// if($con -> connect_errno){
//     echo "Conectado com sucesso";
// }else{
//     echo "Falha ao conectar";
// }