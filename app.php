<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ola</h1>
    <?php

    if (empty($_SERVER["QUERY_STRING"])) {
        $url = "app.php";
        include_once("$url");
    }else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }


    ?>
</body>

</html>