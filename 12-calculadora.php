<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>

<body>

<h1>Calculadora</h1>

<form method="post">

    Número 1:
    <input type="number" name="numero1">

    <br><br>

    Número 2:
    <input type="number" name="numero2">

    <br><br>

    <button name="operacao" value="somar">Somar</button>
    <button name="operacao" value="subtrair">Subtrair</button>
    <button name="operacao" value="multiplicar">Multiplicar</button>
    <button name="operacao" value="dividir">Dividir</button>

</form>

<?php

if (isset($_POST["operacao"])) {

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operacao = $_POST["operacao"];

    if ($operacao == "somar") {
        echo "Resultado: " . ($numero1 + $numero2);

    } elseif ($operacao == "subtrair") {
        echo "Resultado: " . ($numero1 - $numero2);

    } elseif ($operacao == "multiplicar") {
        echo "Resultado: " . ($numero1 * $numero2);

    } elseif ($operacao == "dividir") {

        if ($numero2 != 0) {
            echo "Resultado: " . ($numero1 / $numero2);
        } else {
            echo "Não pode dividir por zero";
        }
    }

}

?>

</body>
</html>
