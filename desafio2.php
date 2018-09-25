<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Desafio 2</title>
</head>
<body>
<div class="container"><br>

    <?php
    $values = array(5,8,7,9,2);
    $bigger = 0;
    foreach ($values as $value){
        if($value > $bigger){
            $bigger = $value;
        }
    }
    echo "<p>O número $bigger é o maior dentre os digitados.</p>";

    ?>
</div>
</body>
</html>