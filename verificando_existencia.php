<?php

$notas = [
    'Ana' => 10,
    'Joao' => 8,
    'Rafael' => 5,
    'Vinicius' => null
];

krsort($notas);
var_dump($notas);

if (is_array($notas)){
    echo "Sim, é um array" . PHP_EOL;
}

var_dump(array_is_list($notas));                        //VERIFICA SE UM DADO ARRAY É UMA LISTA

echo "Vinicius fez a prova:" . PHP_EOL;
//var_dump(array_key_exists('Vinicius', $notas));      //VERIFICA SE A CHAVE VINICIUS EXISTE

var_dump(isset($notas['Vinicius']));                   //ISSET VERIFICA SE UMA VARIAVEL VAI ESTAR DEFINIDA, VERIFICA SE O INDICE EXISTE E SE NÃO É NULO