<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Desafio 1</title>
    <style>
        body{
            margin-top: 50px;
        }
    </style>
</head>
<body>
<div class="container">
    <form method="get" action="desafio1-media.php">
        <h2>Calculando a média de valores</h2><br>
        <?php
        $c = 1;
        while ($c <= 10){
            $value = "valor".$c;
            echo "<label for='$value'>Valor $c: </label>
                    <input type='number' id='$value' name='$value' placeholder='Digite o $c.° valor.' required><br>";
            $c++;
        }
        ?>
        <br><button type="submit" class="btn btn-primary">Calcular</button>
    </form>
</div>
</body>
</html>