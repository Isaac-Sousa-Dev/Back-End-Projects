<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->deposita(500);
$primeiraConta->saca(300);
$primeiraConta->defineCpfTitular("123.456.789.00");
$primeiraConta->defineNomeTitular("Isaac Sousa");


echo $primeiraConta->recuperaSaldo();
echo $primeiraConta->recuperaCpfTitular();
echo $primeiraConta->recuperaNomeTitular();