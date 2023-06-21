<?php

$notasBimestre1 = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 4,
    'Isaac' => 7
];

$notasBimestre2 = [
    'Ana' => '10',
    'João' => 8,
    'Roberto' => 7,
];

/*var_dump(array_diff($notasBimestre1, $notasBimestre2));  ->  Retorna um novo array, contendo os elementos que existam no primeiro Array 
mas não exista nos próximos Arrays */
// Essa função só leva em consideração os valores de um array

//var_dump(array_diff_key($notasBimestre1, $notasBimestre2)); // Essa função leva em consideração somente a chave

//var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2)); // Essa função leva em consideração tanto a chave quanto o valor

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);

$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

//var_dump(array_combine($nomesAlunos, $notasAlunos)); // Combina os dois arrays passados por parâmetro, os arrays devem ser do mesmo tamanho.
var_dump(array_flip($alunosFaltantes)); // Inverte o array, o que é chave vira valor e vice-versa.

//var_dump(array_keys($alunosFaltantes)); // Essa função recebe um array e retorna somente as chaves, adicionando essas chaves em um novo array.

//var_dump(array_values($alunosFaltantes)); // Essa função recebe um array e retorna somente os valores, adicionando esses valores em um novo array