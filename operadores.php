<?php

// Precedencia e Assoaciatividade

$matematicos = 1 - 2 - 3;
echo $matematicos;

$a = ($b = ($c = 1));
// $logicos = (1 < 2) < 3;

// Operador de String

$mensagem = 'Soma: ';
$mensagem .= 2 + 2;

echo "Soma: " . 2 + 2;

// Operadores de Arrays
$array1 = [
    1,
    2
];

$array2 = [
    1 => 2, 0 => 1
];

var_dump($array1 == $array2);

// Ternário e Elvis ( ?: )

// Nulo
$nulo = null;

$array[3] ??= 'default';

var_dump($array1[3]);

echo $array1[4];
