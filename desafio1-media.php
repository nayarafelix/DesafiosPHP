<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Desafio 1 - Media</title>
    <style>
        body{
            margin-top: 50px;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    $c = 0;
    while ($c < 10){
        $c++;
        $key = "valor".$c;
        $value = $_GET["$key"];
        $sum += $value;
    }
    $average = $sum/$c;
    echo "<div class='alert alert-success'>A média dos valores digitados é $average</div>";
    ?>
</div>
</body>
</html>