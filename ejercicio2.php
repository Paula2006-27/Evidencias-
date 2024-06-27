<?php
echo "por favor ingrese un numero entero: ";
$numero = readline();
$numero = intval($numero);
if ($numero > 0) {
    $signo = "positivo";
} elseif ($numero < 0) {
    $signo = "negativo";
} else {
    $signo = "cero";
}
if ($numero % 2 == 0) {
    $paridad = "par";
} else {
    $paridad = "impar";
}
echo "El número $numero es $signo y $paridad.\n";
?>