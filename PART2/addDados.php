<?php

$aluno = ["Lucas ", "Joao", "Vitor", "zeca"];

$aluno[count($aluno)]  = "Mota";

foreach ($aluno as $i ) {
    echo $i . PHP_EOL;
}