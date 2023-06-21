<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new Cpf('123.456.789-10'),
        'Isaac Freitas',
        new Endereco('Fortaleza', 'Ayrton Senna', 'Padre Cícero', '920')
    ),
);

$conta->transfere();
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();