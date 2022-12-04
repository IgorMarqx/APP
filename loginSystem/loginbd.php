<?php
include_once("./conectdb.php");

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM login";

$verify = mysqli_query($con, $sql);

?>