<?php
session_start(); 

// print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    // acessa sistema
    include_once('./config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // print_r('Email: ' . $email);
    // print_r('senha: ' . $senha);

    $sql = "SELECT * FROM registrar WHERE email = '$email' and senha = '$senha'";

    $resultado = $conn->query($sql);

    // print_r($resultado);

    if(mysqli_num_rows($resultado) < 1){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ./index.php');
    }else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ./app.php');
    }
}else{
    // não deixa acessar
    header('location: ./index.php');
}