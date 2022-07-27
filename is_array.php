<?php

$notas = [
    'Ana' => 10,
    'Joao' => 8,
    'Rafael' => 5,
    'Vinicius' => 3
];

krsort($notas);
var_dump($notas);

if (is_array($notas)){                                 //ESSA FUNCAO IS_ARRAY VERIFICA SE A VARIÁVEL É UM ARRAY (is_array($notas))
    echo "Sim é um array" . PHP_EOL;                  //ESSA FUNCAO ARRAY_IS_LIST ELE RECEBE UM PARAMETRO E RETORNA VERDADEIRO SE ESSE ARRAY FOR NUMERICO
}

var_dump(array_is_list($notas));
