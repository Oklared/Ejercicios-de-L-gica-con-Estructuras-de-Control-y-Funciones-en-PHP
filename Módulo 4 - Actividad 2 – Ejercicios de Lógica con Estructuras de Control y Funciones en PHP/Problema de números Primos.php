<?php

function esPrimo($numero) {
   
    if ($numero < 2) {
        return false;
    }

   
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; 
        }
    }

    return true; 
}


$numero = 0;

if (esPrimo($numero)) {
    echo "$numero es un número primo.";
} else {
    echo "$numero no es un número primo.";
}
?>







