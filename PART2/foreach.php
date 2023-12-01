<?php

$aluno = ["Lucas ", "Joao", "Vitor", "zeca"];
$saldo = [100.00, 200.00, 150.50, 120.20];

$conta1 = [
    "nome" => $aluno[1],
    "saldo" => $saldo[1]
];

$conta2 = [
    "nome" => $aluno[0],
    "saldo" => $saldo[0]
];

$conta3 = [
    "nome" => $aluno[2],
    "saldo" => $saldo[3]
];

$conta4 = [
    "nome" => $aluno[3],
    "saldo" => $saldo[3]
];



$listaContas = [$conta1, $conta2, $conta3, $conta4];

foreach ($listaContas as $conta) {
    echo $conta . PHP_EOL;
}