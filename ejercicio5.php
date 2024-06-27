<?php 
echo "Ingresa el día: ";
$dia = readline();
echo "Ingresa el mes: ";
$mes = readline();
echo "Ingresa el año: ";
$año = readline();
echo "La fecha es: $año-$mes-$dia";

if ($mes == 2 && $dia == 30):
    echo "la fecha es incorrecta";
endif;

if ($mes == 4 && $dia == 31):
    echo "la fecha es incorrecta";
endif;

?>
