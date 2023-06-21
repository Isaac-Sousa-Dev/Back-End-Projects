<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '613.557.383-77' => [
        'titular' => 'Isaac',
        'saldo' => 1200
    ], 
    '123.456.789-10' => [
        'titular' => 'João',
        'saldo' => 800
    ], 
    '789.456.123-00' => [
        'titular' => 'Neide',
        'saldo' => 3000
    ], 
];

unset($contasCorrentes['123.456.789-10']);

//titularComLetrasMaiusculas($contasCorrentes['613.557.383-77']);

$contasCorrentes['613.557.383-77'] = sacar($contasCorrentes['613.557.383-77'], 50);
$contasCorrentes['789.456.123-00'] = sacar($contasCorrentes['789.456.123-00'], 900);

$contasCorrentes['789.456.123-00'] = depositar($contasCorrentes['789.456.123-00'], 500);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas Correntes</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta){ ?>   
            <dt>
                <h3><?php echo $conta['titular'] ?> - <?php echo $cpf ?></h3>
            </dt>
            <dt>
                Saldo: <?= $conta['saldo']; ?>
            </dt>
        <?php } ?>
    </dl>
</body>
</html>
