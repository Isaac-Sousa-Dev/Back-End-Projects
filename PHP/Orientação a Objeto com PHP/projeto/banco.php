<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Cpf;


$endereco = new Endereco('Fortaleza', 'Planalto', 'Padre Cicero', '901');
$isaac = new Titular(new Cpf("123.456.789-00"), "Isaac Sousa", $endereco);
$primeiraConta = new Conta($isaac);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);



echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;


$joao = new Titular(new Cpf("789.456.123-00"), "João", $endereco);
$segundaConta = new Conta($joao);
$segundaConta->deposita(2000);
$segundaConta->saca(1500);

echo $segundaConta->recuperaSaldo() . PHP_EOL;
echo $segundaConta->recuperaCpfTitular() . PHP_EOL;
echo $segundaConta->recuperaNomeTitular() . PHP_EOL;

$outroEndereco = new Endereco('Rio de Janeiro', 'Rio', 'Rua teste', '800');
$outra = new Conta(new Titular(new Cpf('124.563.789-00'), 'Outra', $outroEndereco));

unset($segundaConta);

echo Conta::recuperaNumeroDeContas();
