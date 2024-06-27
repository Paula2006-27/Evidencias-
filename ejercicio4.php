<?php
$ladoP= readline("ingresa el valor del lado A: ");
$ladoA= readline("ingresa el valor del lado B: ");
$ladoU= readline("ingresa el valor del lado C ");

if ($ladoP + $ladoA > $ladoU && $ladoP + $ladoU > $ladoA && $ladoA + $ladoU > $ladoP) {
    if ($ladoP == $ladoA && $ladoA == $ladoU) {
        echo "El triángulo es equilátero.";
    } elseif ($ladoP == $ladoA || $ladoP == $ladoU || $ladoA == $ladoU) {
        echo "El triángulo es isósceles";
    } else {
        echo "El triángulo es escaleno";
    }
} else {
    echo "Los lados no forman un triángulo válido";
}
?>