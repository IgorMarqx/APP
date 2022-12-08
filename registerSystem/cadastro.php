<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- MEU CSS -->
    <link rel="stylesheet" href="../css/login.css">
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
    <div class="topo">
        <?= include_once('../includes/topo.php')?>
        <h4 style="margin: 0 2rem; color: #fff; font-size: 2.5rem;">APP</h4>
    </div>

    <div class="center">
        <?= include_once('./cadastro.include.php')?>
        
        <?= include_once('../includes/footer.php')?>
    </div>

</body>
