<?php

$notas = [
    'Ana' => 10,
    'Joao' => 8,
    'Rafael' => 5,
    'Vinicius' => 3
];

krsort($notas);
var_dump($notas);

//ksort - Ordena um array pelas chaves
//asort - Essa função ordena um array de forma que a correlação entre índices e valores é mantida
//usort — Ordena um array pelos valores utilizando uma função de comparação definida pelo usuário

