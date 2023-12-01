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
    "nome" => $aluno[4],
    "saldo" => $saldo[4]
];

$listaContas = [$conta1, $conta2, $conta3, $conta4];

for ($i = 0; $i < count($listaContas); $i++) {
    echo $listaContas[$i]["nome"] . PHP_EOL;
}