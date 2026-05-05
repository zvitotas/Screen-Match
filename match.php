<?php

$opcao = 3;

$menuSelecionado = match ($opcao) {
    '1' => 'Saldo',
    '2' => 'Deposito',
    '3' => 'Saque',
    '4' => 'Sair',
    default => null,
};

 var_dump($menuSelecionado) . "\n";

 var_dump(match(true) {
    true => 1,
    false => 0
 });