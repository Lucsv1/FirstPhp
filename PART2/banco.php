<?php

require_once 'Funcoes.php';

$cpf = "1234567810";
$cpf2 = "1234567811";
$cpf3 = "1234567812";
$cpf4 = "1234567813";


$listaContas = [
    $cpf => [
        "nome" => "Lucas ",
        "saldo" => 100.00
    ],

    $cpf2 => [
        "nome" => "Joao",
        "saldo" => 200.00
    ],

    $cpf3 => [
        "nome" => "Vitor",
        "saldo" => 150.50
    ],

    $cpf4 => [
        "nome" => "zeca",
        "saldo" => 120.20
    ],
];



$listaContas[$cpf2] = sacar($listaContas[$cpf2], 300);
$listaContas[$cpf] = sacar($listaContas[$cpf], 50);
$listaContas[$cpf3] = depositar($listaContas[$cpf3], -300);

[$novoSaldoOrigem, $novoSaldoDestino] = trasnferir(
    50,
    $listaContas[$cpf3]["saldo"],
    $listaContas[$cpf]["saldo"],
);


exibeMensagem("novo saldo da conta origem: $novoSaldoOrigem");
exibeMensagem("novo saldo da conta destino: $novoSaldoDestino");


// echo "<ul>";
// foreach ($listaContas as $conta) {
//     exibeConta($conta);
// }
// echo "</ul>";