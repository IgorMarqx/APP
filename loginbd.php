<?php

// print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
    // acessa sistema
    include_once('./config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // print_r('Email: ' . $email);
    // print_r('senha: ' . $senha);

    $sql = "SELECT * FROM registrar WHERE email = '$email' and senha = '$senha'";

    $resultado = $db->query($sql);

    // print_r($resultado);

    if(mysqli_num_rows($resultado) < 1){
        header('Location: ./index.php');
        echo "<script>alert('Credenciais inválidas')</script>"; 
    }else{
        header('Location: ./app.php');
    }
}else{
    // não deixa acessar
    header('location: ./index.php');
}