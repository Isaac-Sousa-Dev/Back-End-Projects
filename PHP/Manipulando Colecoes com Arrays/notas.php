<?php

$notas = [
    'Ana' => '10',
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Isaac' => null
];

//ksort($notas); // Ordenando pela chave em ordem alfabética crescente
krsort($notas); // Ordenando pela chave em ordem alfabética decrescente
//asort($notas); // Ordem inversa da função sort ordenando por valores, mantendo a chave vinculada ao valor de forma crescente
//arsort($notas); // Ordem inversa da função sort ordenando por valores, mantendo a chave vinculada ao seu valor de forma decrescente
//uksort() -> Compara pela chave do Array
var_dump($notas);

if(is_array($notas)){
    echo "Sim, é um array" . PHP_EOL;
} 

// var_dump(array_is_list($notas)); -> função a partir do PHP 8

echo "Isaac fez a prova?" . PHP_EOL;
var_dump(isset($notas['Isaac'])); // isset verifica se uma "chave" existe e não é "nula"
// array_key_exists('chave', $variável) -> verifica se uma "chave" existe

echo "Alguém tirou 10?" . PHP_EOL;
var_dump(in_array(10, $notas));
// in_array = verifica se o "valor" existe
var_dump(in_array(10, $notas, true)); // Faz uma verificação mais rigorosa comparando o valor e o tipo (===).

echo "Quem tirou 10?" . PHP_EOL;
echo array_search(10, $notas); // Faz uma busca na chave que possui o valor 10 dentro do array $notas
var_dump(array_search(6, $notas, true)); // Faz uma busca mais rigorosa comparando o valor e o tipo (===).