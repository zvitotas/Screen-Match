<?php

declare(strict_types = 1);

$string = 'Valores textuais';
$int = 27;
$float = 15.5;
$bool = false;

$array = [134, 348417, 945718];

$valorNumerico = '27';
$valorInteiro = (int) $valorNumerico;

$valorDecimal = 27.5;
$valorInteiro = (int) $valorDecimal;

// var_dump($valorInteiro);
// var_dump((bool)'');

// var_dump((float) '27.5e');

if (0.1)  {
    echo 'verdadeiro' . "\n";
} else {
    echo 'falso' . "\n";
}

// Type Juggling

//var_dump('Valor numérico' == 0);
//var_dump('27' == 27);

var_dump('27' > 28);
var_dump('teste' > '28');

require __DIR__ . '/Screen-Match/src/funcoes.php';

exibeMensagemLancamento(intval('2025'));

//Comparações mais estritas

var_dump('27' == 27);
var_dump('27' === 27);

// $variavel = 'string';
// $variavel = 127;

// Se temos um código no php, e ele ja foi rodado uma vez, e está armazenado no cache, verificamos
// se ele está compilado, se não é executado e mandado para o processador, porem se ja for compilado
// ele é mandado direto ao processador.
// Suponhamos que ele nunca foi rodado, o primeiro passo é a tokenização, aonde é tudo transformado
// em tokens, feito isso ocorre o Parse, para verificar erros de sintaxe, se ele passa por isso ocorre
// a compilação e posteriormente ele é armazenado no opCache para a proxima execucação e então é executado.

// JIT Compile é quando o programa traduz partes do código para linguagem de maquina na hora que está rodando,
//  em vez de fazer isso antes, isso ajuda a executar mais rápido conforme vai sendo usado.