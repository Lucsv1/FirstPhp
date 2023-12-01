<?php
$idade1 = 22;
$idade2 = 23;
$idade3 = 24;
$idade4 = 25;

$lista = [$idade1, $idade2, $idade3, $idade4];

for ($i = 0; $i < count($lista); $i++) {
    $mostrarLista = $lista[$i];
    echo $mostrarLista .PHP_EOL ;
}