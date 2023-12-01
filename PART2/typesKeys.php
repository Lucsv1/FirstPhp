<?php

$lista = [
    1 => "a",
    "1" => "b",
    1.5 => "c",
    true => "d",
];

foreach ($lista as $item) {
    echo $item . PHP_EOL;
};
