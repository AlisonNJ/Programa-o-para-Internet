<?php
$numero = 45;
if ($numero % 3 == 0 && $numero % 5 == 0){
    echo "O número é multiplo de 3 e 5 ao mesmo tempo";
}else if($numero % 3 == 0){
    echo "O número é multiplo de 3";
}else if($numero % 5 == 0){
    echo "O número é multiplo de 5";
}else{
    echo "O número não é multiplo de nenhum dos sois";
}
?>