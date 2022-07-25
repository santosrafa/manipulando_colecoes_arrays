<?php

//COMO ORDENAR UM ARRAY

//A FUNCAO SORT ORDENA O ARRAY, PORÉM ELA ESPERA UMA REFERENCIA

$notas = [
    10,
    8,
    5,
    1
];

$notas_ordenadas = $notas;
sort($notas_ordenadas);

echo "Desordenadas:";
var_dump($notas);

echo "Ordenadas:";
var_dump($notas_ordenadas);

