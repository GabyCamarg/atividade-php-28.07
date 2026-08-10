<?php

$numeros = [4, 7, 127849.9];

foreach ($numeros as $numero) {

    echo "Tabuada do $numero:<br>";

    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) .
 "<br>";
}
}

?>