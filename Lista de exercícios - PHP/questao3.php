<?php
$numero = 1;
$taboada = 1;

while ($taboada <= 10) {
    $numero = 1;
    while ($numero <= 10) {
        $resultado = $taboada * $numero;
        echo $taboada . " x " . $numero . " = " . $resultado . "\n";
        $numero++;
    }
    $taboada++;
}
?>