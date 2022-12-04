<?php
include_once('../conectdb.php');

$email = $_POST["email"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "INSERT INTO register (email, usuario, senha) VALUES ('$email', '$usuario', '$senha')";

$inserir = mysqli_query($con, $sql);

if($inserir){
    echo "Cadastrado com sucesso";
    header("Refresh: 0, ./cadastro.php");
}else{
    echo "Falha ao conectar";
}

?>