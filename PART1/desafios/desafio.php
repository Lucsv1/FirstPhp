<?php

for ($contador = 1; $contador <= 10; $contador++){
    for ($numero = 1; $numero <= 10; $numero++){
        $resultado = $numero * $contador;
        echo " $numero x $contador = $resultado " . PHP_EOL;
        echo PHP_EOL;
    }
}