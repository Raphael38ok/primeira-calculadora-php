<?php

$numero1 = 0;
$numero2 = 0;
$resultado = 0;
$calcular = 'somar';


if (isset($_GET['numero1'], $_GET['numero2'], $_GET['calcular'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    $calcular = $_GET['calcular'];


    switch ($calcular) {
        case 'somar';
            $resultado = $numero1 + $numero2;
            break;
        case 'subtrair';
            $resultado = $numero1 - $numero2;
            break;

        case 'multiplicar';
            $resultado = $numero1 * $numero2;
            break;

        case 'dividir';
            $resultado = $numero1 / $numero2;
            break;
    }
}

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MInha Calculadora</title>
    <style>
    body {
     background-color:#010009;   
    }
    h4 {
     color: aqua;   
    }
   input {
   color: black; 
   }
   input {
    background-color: aqua;
   }

   select {
   color: green; 
   }

   select {
    background-color:#010009; 
   }
   p {
   background-color: aqua; 
   }
    </style>
</head>

<body>
    <h4>Calculadora Contnumbers</h4>
    <form>
        Primeiro Número <br />
        <input type="number" name="numero1" value=<?= $numero1 ?> required> <br>
        Segundo Número <br />
        <input type="number" name="numero2" value=<?= $numero2 ?> required> <br><br>
        <select name="calcular">
            <option value="somar" <?= ($calcular == 'somar') ? 'Selected' : ''; ?>>Somar</option>
            <option value="subtrair" <?= ($calcular == 'subtrair') ? 'Selected' : ''; ?>>Subtrair</option>
            <option value="multiplicar" <?= ($calcular == 'multiplicar') ? 'Selected' : ''; ?>>Multiplicar</option>
            <option value="dividir" <?= ($calcular == 'dividir') ? 'Selected' : ''; ?>>Dividir</option>
        </select>
        <br><br>
        <input type="submit" value="Calcular">
        <br> <br>
        <p>O Resultado é <?= $resultado ?> </p>

    </form>
</body>

</html>