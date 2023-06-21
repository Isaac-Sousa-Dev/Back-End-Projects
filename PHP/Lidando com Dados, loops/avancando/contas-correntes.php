<?php

$conta1 = [
    'titular' => 'Isaac',
    'saldo' => 800
];
$conta2 = [
    'titular' => 'Maria',
    'saldo' => 1000
];
$conta3 = [
    'titular' => 'João',
    'saldo' => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}