<?php
$dinheiro = 5000;

if ($dinheiro < 1000) {
    echo "Pobre";
} elseif ($dinheiro < 5000) {
    echo "Classe Média";
} elseif ($dinheiro < 10000) {
    echo "Riquinho"; 
} elseif ($dinheiro < 100000) {
    echo "Ricão";
} else {
    echo "Elon Musk";
}
?>