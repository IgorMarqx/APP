<?php
session_start();
// print_r($_SESSION);

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ./index.php');
}
$logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- MEU CSS -->
    <link rel="stylesheet" href="./css/login.css">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/0e7ec74f80.js" crossorigin="anonymous"></script>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Document</title>
</head>

<body>
    <h1>ola</h1>
    <a href="./sair.php" class="btn btn-danger">Sair</a>
    <?php
    if (empty($_SERVER["QUERY_STRING"])) {
        $url = "app.php";
        include_once("$url");
    } else {
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }
    ?>
</body>

</html>