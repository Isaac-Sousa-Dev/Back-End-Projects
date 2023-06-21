<?php

$altura = 1.80;
$peso = 90;

$imc = $peso / ($altura * $altura);

echo "Seu IMC é $imc" . PHP_EOL;

if($imc >= 18 && $imc <= 25 ){
    echo "Voce está no peso ideal";
}else if($imc < 18 ){
    echo "Voce esta abaixo do peso";
}else{
    echo "Voce esta acima do peso";
}