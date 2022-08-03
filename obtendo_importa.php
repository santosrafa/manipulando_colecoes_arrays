<?php

$notas_bimestre1 = [
    'Vinicius' => 6,
    'Joao' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notas_bimestre2 = [
    'Joao' => 8,
    'Ana' => 9,
    'Roberto' => 7,
];

$alunos_faltantes = array_diff_key($notas_bimestre1, $notas_bimestre2);

//var_dump(array_keys($alunos_faltantes));                                            //MOSTRARA QUAIS FORAM OS ALUNOS FALTANTES
//var_dump(array_values($alunos_faltantes));                                          //ARRAY_VALUES MOSTRARA O VALOR DOS ARRAYS FALTANTES

$nomes_alunos = array_keys($alunos_faltantes);
$notas_alunos = array_values($alunos_faltantes);

var_dump(array_combine($nomes_alunos, $notas_alunos));                              //ARRAY_COMBINE IRA COMBINAR OS ARRAYS    