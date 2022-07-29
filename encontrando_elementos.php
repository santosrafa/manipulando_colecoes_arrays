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
var_dump(isset($notas['Vinicius']));                    //ISSET VERIFICA SE A CHAVE EXISTE E NÃO É NULA

echo "Alguem tirou nota 8 ?" . PHP_EOL;
var_dump(in_array(8, $notas));                          //IN_ARRAY VAI VERIFICAR SE O VALOR EXISTE DENTRO DO ARRAY

echo "Quem tirou 10?" . PHP_EOL;
var_dump(array_search(10, $notas, true));               //array_search — Procura por um valor em um array e retorna sua chave correspondente caso seja encontrado
