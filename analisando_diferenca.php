<?php

$notas_bimestre1 = [
    'Vinicius' => 3,
    'Joao' => 8,
    'Ana' => 10,
    'Roberto' => 7,
];

$notas_bimestre2 = [
    'Vinicius' => 6,
    'Joao' => 8,
    'Ana' => 10,
    'Roberto' => 5,
];

//var_dump(array_diff($notas_bimestre1, $notas_bimestre2));                 //ARRAY_DIFF VERA O QUE TEM DE DIFERENTE DE UM ARRAY PARA OUTRO. ELA SO LEVA EM CONSIDERACAO OS VALORES

//var_dump(array_diff_key($notas_bimestre1, $notas_bimestre2));             //ARRAY_DIFF_KEY AQUI ELE IRA VERIFICAR A DIFERENÇA NO CONTEUDO E NAO NO VALOR.

var_dump(array_diff_assoc($notas_bimestre1, $notas_bimestre2));             //ELE VAI COMPARAR TANTO A CHAVE QUANTO O VALORx    