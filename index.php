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
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>APP</title>
</head>

<body id="fundo">
    <?php
        include("conectdb.php");

        if (empty($_SERVER["QUERY_STRING"])) {
            $url = "app.php";
            include_once("$url");
        } else {
            $pg = $_GET['pg'];
            include_once("$pg.php");
        }


    ?>

    <div class="fundo">
        <img src="" alt="">
    </div>

    <div class="header">
        <header class="container">
            <div class="logo">
                <i class="fa-brands fa-react"></i>
            </div>

            <form action="">
                <div class="inputs">
                    <div class="inputUser">
                        <i class="fa-solid fa-user" id="user"></i>
                        <input id="email" type="text" placeholder="Informe seu usuário" required>
                    </div>

                    <div class="inputUser">
                        <i class="fa-solid fa-lock" id="user"></i>
                        <input id="senha" type="password" placeholder="Informe sua senha" required>
                    </div>

                    <div class="d-grid gap-2 col-12 mx-auto">
                        <button onclick="verificarLogin()" href="app.html" class="btn" id="btnCustom">Entrar</button>
                    </div>

                    <div class="button">
                        <span>Não possui cadastro?</span><a id="cadastrar" href="?pg=cadastro">Cadastre-se!</a>
                    </div>
                </div>
            </form>
        </header>
    </div>

    <script src="./js/login.js"></script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>