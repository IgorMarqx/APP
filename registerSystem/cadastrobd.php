<?php
include_once('../config.php');

$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";

$inserir = mysqli_query($GLOBALS[$con], $sql);

if($inserir){
    echo "<script>alert('Cadastrado com sucesso')</script>";
    header("Refresh: 0, ./cadastro.php");
}else{
    echo "Falha ao conectar";
}

?>