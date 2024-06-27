<?php
$username = readline ("ingrese nombre:");
$password = readline (" ingrese contraseña:");
define ("nombre"," paula" ); 
define ("contraseña"," Paula123");

if ($username== nombre && $password == contraseña) {
    echo "validacion exitosa";
}
else{
    echo "el requisito no se cumple";
}
?>