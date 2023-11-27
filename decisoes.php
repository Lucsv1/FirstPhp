<?php

$idade = 16;
$nPessoas = 2;

echo "Voce so pode entrar se for maior que 18 anos" . PHP_EOL;

if ($idade >= 18){
    echo "Voce tem $idade anos. Pode entrar";
}elseif ($idade >= 16 && $nPessoas > 1){
    echo "Voce possui $idade, porem esta acompanhada, pode entrar";
} else {
    echo "Voce é menor de idade, voce nao pode entrar";
}

