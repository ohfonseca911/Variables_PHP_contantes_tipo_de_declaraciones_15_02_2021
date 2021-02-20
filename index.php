<?php

    $numero = (int) 50; 
    $decimales_grande = (float) 1.123456789;
    $decimales = (double) 1.12345678;
    $logico = (bool) false;

    $listas = (array) ["Oscar", 30, false];
    var_dump($listas);
    echo "<br>"; 

    $vaso = (object) [];
    $vaso->color = "rojo";
    $vaso->altura = 10;

    var_dump($vaso->altura);

    $letras = (string) "Oscar Fonseca";
    echo $letras;
    echo "<br>";
 
    $letras = (string) "Emanuel";
    echo $letras;

    define('letras', "Oscar");
    echo letras;
    echo "<br>";

    const numero = 30;
    echo numero;
    echo "<br>";

    const Numero = 50;
    echo Numero;

?>