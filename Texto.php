<?php

include 'Faker.php';

$cadena = '???###habcdefg???###hiUVWXYZ###???';
$prueba = new Faker;
$resultado = $prueba->nuevaCadena($cadena, 20);
$letras = $prueba->letterify($resultado);
$numeros = $prueba->numerify($resultado);
$letras_numeros = $prueba->bothify($resultado);

echo $letras .'<br>';
echo $numeros .'<br>';
echo $letras_numeros .'<br>';
