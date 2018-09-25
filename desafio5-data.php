<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Desafio 5 - Data</title>
</head>
<body>
<div class="container"><br><br>
    <?php
    $key = isset($_GET["data"])?$_GET["data"]:0;

    $date = explode("-",$key);

    $inverted = array_reverse($date);

    echo implode('/',$inverted);

    ?>
</div>
</body>
</html>
