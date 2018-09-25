<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Desafio 3 - Idades</title>
</head>
<body>
<div class="container"><br><br>
    <?php
    $key = $_GET["idades"];
    $ages = explode(",",$key);
    $qtMaior = 0;

    foreach($ages as $age){
        if($age >= 18){
            $qtMaior++;
        }
    }
    $qtMenor = count($ages) - $qtMaior;

    echo "Das idades digitadas, $qtMaior são maiores de idade e $qtMenor são menores de idade.";

    ?>
</div>
</body>
</html>


