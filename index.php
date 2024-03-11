<?php
/*
 * Escribe un programa que muestre por consola (con un print) los
 * números de 1 a 100 (ambos incluidos y con un salto de línea entre
 * cada impresión), sustituyendo los siguientes:
 * - Múltiplos de 3 por la palabra "fizz".
 * - Múltiplos de 5 por la palabra "buzz".
 * - Múltiplos de 3 y de 5 a la vez por la palabra "fizzbuzz".
 */

$contador = 1;
while ($contador <= 100) {
    echo multiploDeNumero($contador);
    $contador++;
}

function multiploDeNumero($numeroRecibido)
{
    if ($numeroRecibido % 3 == 0 && $numeroRecibido % 5 == 0) {
        $fizzBuzz = "fizzbuzz\n";
        $numeroRecibido = $fizzBuzz;
        return $numeroRecibido;
    }
    if ($numeroRecibido % 3 == 0) {
        $fizz = "fizz\n";
        $numeroRecibido = $fizz;
        return $numeroRecibido;
    }
    if ($numeroRecibido % 5 == 0) {
        $buzz = "buzz\n";
        $numeroRecibido = $buzz;
        return $numeroRecibido;
    }

    return $numeroRecibido . "\n";
}
?>