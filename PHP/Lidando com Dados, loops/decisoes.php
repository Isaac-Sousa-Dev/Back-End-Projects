<?php

$idade = 17;
$numeroDePessoas = 1;

echo "Voce só pode entrar se tiver a partir de 18 anos";
echo " ou a partir de 16 anos acompanhado" . PHP_EOL;

if($idade >= 18) {
    echo "Voce tem $idade anos.". PHP_EOL;
    echo  'Pode entrar';
} else if($idade >= 16 && $numeroDePessoas > 1) {
    echo "Voce tem $idade anos, está acompanhado, então pode entrar" . PHP_EOL;
} else {
    echo "Voce só tem $idade anos, não poderá entrar" . PHP_EOL;
}
    


echo "Adeus!";