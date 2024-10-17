<?php 

function generarFibonacci($n) {

    $fibonacci = [0, 1];
    
  
    if ($n == 1) {
        return [0];
    }

    
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}


$n = 100;
$serieFibonacci = generarFibonacci($n);

echo implode(", ", $serieFibonacci);

?>