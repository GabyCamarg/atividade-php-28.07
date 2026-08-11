<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>IMC</title>
</head>

<body>

<h1>Calculadora de IMC</h1>

<form method="post">

    Peso:
    <input type="number" name="peso" step="0.01">

    <br><br>

    Altura:
    <input type="number" name="altura" step="0.01">

    <br><br>

    <button type="submit">Calcular</button>

</form>

<?php

if (isset($_POST["peso"]) && isset($_POST["altura"])) {

    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $imc = $peso / ($altura * $altura);

    echo "Seu IMC é: " . number_format($imc, 2);

}

?>

</body>
</html>