<?php

function esPalindromo($cadena) {
   
    $cadena = strtolower(preg_replace("/[^a-z0-9]/i", '', $cadena));

    
    return $cadena == strrev($cadena);
}


$frase1 = "Me gusta la pizza con queso";
$frase2 = "H'&'H";
$frase3 = "Hello";

if (esPalindromo($frase1)) {
    echo "\"$frase1\" es un palíndromo.\n";
} else {
    echo "\"$frase1\" no es un palíndromo.\n";
}

if (esPalindromo($frase2)) {
    echo "\"$frase2\" es un palíndromo.\n";
} else {
    echo "\"$frase2\" no es un palíndromo.\n";
}

if (esPalindromo($frase3)) {
    echo "\"$frase3\" es un palíndromo.\n";
} else {
    echo "\"$frase3\" no es un palíndromo.\n";
}
?>

