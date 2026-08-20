<?php
$numeroAntes = 0;
$numeroAtual = 1;
for ($i = 0; $i < 15; $i++) {
    echo $numeroAntes . "\n";
    $numeroAtual = $numeroAntes + $numeroAtual;
    $numeroAntes = $numeroAtual - $numeroAntes;
}

?>