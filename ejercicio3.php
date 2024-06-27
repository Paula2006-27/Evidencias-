<?php
echo "Ingrese el primer numero: ";
$num1 = intval(readline());
echo "Ingrese el segundo numero: ";
$num2 = intval(readline());
$suma = $num1 + $num2;
echo "La suma es: " . $suma . "\n";
$resta = $num1 - $num2;
echo "La resta es: " . $resta . "\n";
$multiplicacion = $num1 * $num2;
echo "La multiplicacion es: " . $multiplicacion . "\n";

if ($num2 != 0) {
    $division = $num1 / $num2;
    echo "La division es: " . $division . "\n";
} else {
    echo "No se puede dividir por cero.\n";
}
$modulo = $num1 % $num2;
echo "El modulo es: " . $modulo . "\n";

?>