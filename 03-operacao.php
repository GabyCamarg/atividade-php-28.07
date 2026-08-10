<?php

$numero1 = 10;
$numero2 = 5;
$operacao = "somar";

if ($operacao == "somar") {
    echo $numero1 + $numero2;
} elseif ($operacao == "subtrair") {
    echo $numero1 - $numero2;
} elseif ($operacao == "multiplicar") {
    echo $numero1 * $numero2;
} elseif ($operacao == "dividir") {
    echo $numero1 / $numero2;
} else {
    echo "Operação inválida";
}

?>