<?php

$contasCorrentes = [
    61355738377 => [
        'titular' => 'Isaac',
        'saldo' => 1200
    ], 
    61355738375 => [
        'titular' => 'João',
        'saldo' => 800
    ], 
    61355736377 => [
        'titular' => 'Neide',
        'saldo' => 3000
    ], 
];

$contasCorrentes[13246578910] = [
    'titular' => 'Cláudia',
    'saldo' => 1500
];

foreach($contasCorrentes as $cpf => $conta){
    echo $conta['titular'] . PHP_EOL;
    echo $cpf . PHP_EOL;
}