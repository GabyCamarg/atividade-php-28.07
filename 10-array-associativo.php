<?php

$pessoa = [
    "Nome" => "Carlos",
    "Idade" => 20,
    "Cidade" => "São Paulo",
    "Tchola" => "Sim"
];

foreach ($pessoa as $chave => $valor) {
    echo "$chave: $valor<br>";
}

?>