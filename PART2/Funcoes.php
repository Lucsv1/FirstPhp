<?php

function exibeMensagem($msg)
{
    echo $msg . "</br>";
}

function sacar(array &$conta, $valorSacar)
{

    if ($valorSacar < $conta) {
        exibeMensagem(" Voce nao pode sacar");
    } else {
        $conta["saldo"] -= $valorSacar;
    }

    return $conta;

}

function depositar(array &$conta, $valorDepositar)
{
    if ($valorDepositar > 0) {
        $conta["saldo"] += $valorDepositar;
    } else {
        exibeMensagem("Voce nao pode depositar um valor negativo ");
    }
    return $conta;
}

function trasnferir($valorTransferir, $saldoOrigem, $saldoDestino)
{
    $saldoOrigem -= $valorTransferir;
    $saldoDestino += $valorTransferir;
    return [$saldoOrigem, $saldoDestino];

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Contas Correntes</h1>

    <ul>
        <?php foreach ($listaContas as $conta) { ?>
            <li>$conta["nome"]</li>
            <li>$conta["saldo"]</li>
        <?php } ?>
    </ul>
</body>

</html>