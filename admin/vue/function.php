<?php
$t=0;
afficher(calcul(0));




function calcul($x){
    $s = 2*$x+3;

    return $s;
}

function afficher($af){
    echo $af;
}



?>