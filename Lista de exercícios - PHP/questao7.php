<?php
$numero = 20;
while ($numero >= 0) {
    if($numero == 0){
        echo $numero . "\n";
        $numero--;
    }else if($numero % 5 == 0) {
        echo $numero . " - Multiplo de 5\n";
        $numero--;
    }else if($numero % 5 != 0){
        echo $numero . "\n";
        $numero--;
    }
}

echo "Contagem encerrada";
?>