<?php
/*Readme:
Palabra, secuencia de caracteres o numeros que se lee igual de izquierda a derecha que 
de derecha a izquierda.

    Ej:Ana, ala, oso, radar, someteros, 12321, 45654, etc.

*/

//Obtener la palabra o numero a evaluar
$stringIngresado = "12321";

echo "La palabra sin invertir es: " . $stringIngresado . "\n"."<br>";

//Convertir a un formato estandar, es decir, eliminar espacios y convertir a minusculas
//Si es numero, convertir a string para evaluar cada caracter
$stringEstandarizado1 = trim(strtolower($stringIngresado));
echo "La palabra estandarizada con trim y strtolower es: " . $stringEstandarizado1 . "\n"."<br>";

$stringEstandarizado2 = str_replace(" ", "", strtolower($stringIngresado));
echo "La palabra estandarizada con str_replace y strtolower es: " . $stringEstandarizado2 . "\n"."<br>";

//Comparar cada caracter de la palabra o numero con su inversa
$stringInvertido = strrev($stringEstandarizado2);
echo "La palabra invertida con strrev es: " . $stringInvertido . "\n"." <br>";

$stringArray = str_split($stringEstandarizado2);
echo "La palabra estandarizada convertida a array con str_split es: " . "\n";
print_r($stringArray);
echo "<br>";

for ($i = 0; $i < strlen($stringEstandarizado2); $i++) {
    if ($stringEstandarizado2[$i] !== $stringInvertido[$i]) {
        echo "La palabra o numero no es un palindromo." . "\n";
        exit;
    }
}

//Devolver el resultado de la comparación

echo "La palabra o numero es un palindromo." . "\n";
