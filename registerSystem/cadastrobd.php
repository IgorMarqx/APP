<header>
    <meta charset="UTF-8">
</header>
<?php
include_once('../config.php');

$email = $_POST["email"];
$senha = $_POST["senha"];


$sql = "SELECT email from registrar where email = '$email'";
$resultado = $conn->query($sql);

if (mysqli_num_rows($resultado) == 1) {
    echo "<script>alert('E-mail já cadastrado')</script>";
    header("Refresh: 0, ./cadastro.php");
} else {
    echo "<script>alert('Cadastrado com sucesso')</script>";
    header("Refresh: 0, ../index.php");
    $inserir = mysqli_query($conn, "INSERT INTO registrar (email, senha) VALUES ('$email', '$senha')");
}

#teste

// if($inserir){
//     echo "<script>alert('Cadastrado com sucesso')</script>";
//     header("Refresh: 0, ../index.php");
// }else{
//     echo "<br>";
//     echo "Falha ao conectar";
// }

?>