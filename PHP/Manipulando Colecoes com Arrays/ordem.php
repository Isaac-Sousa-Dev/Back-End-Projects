<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6
    ],
    [
        'aluno' => 'Isaac',
        'nota' => 10
    ],
    [
        'aluno' => 'Douglas',
        'nota' => 7
    ]
];

function ordenaNotas(array $nota1, array $nota2) : int
{
    //return $nota1['nota'] <=> $nota2['nota']; // comparação em ordem crescente
    return $nota2['nota'] <=> $nota1['nota']; // comparação em ordem decrescente
}


usort($notas, 'ordenaNotas');
var_dump($notas);

/*
$notasOrdenadas = $notas; // Fazendo uma cópia da variável $notas para $notasOrdenadas
sort($notasOrdenadas); // Sort ordena em ordem crescente. Pegando a variável e modificando exatamente ela, onde ela está de fato na memória
echo "Desordenadas";
var_dump($notas);

echo "Ordenadas";
var_dump($notasOrdenadas);
*/