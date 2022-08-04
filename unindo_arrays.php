<?php

$alunos2021 = [
    'Vinicius',
    'Joao',
    'Ana',
    'Roberto',
    'Maria'
];

$novos_alunos = [
    'Patricia',
    'Nico',
    'Rafael',
    'Daiane'
];

$alunos2022 = array_merge($alunos2021, $novos_alunos);                      //ARRAY_MERGE JUNTARA OS ARRAYS
                                                                            //OUTRA FORMA DE UNIR O ARRAY É COM O OPERADOR + USA AS CHAVES DO PRIMEIRO ARRAY E NUNCA SOBRESCREVE SEUS VALOR COM O SEGUNDO
//$alunos2022 = $alunos2021 + $novos_alunos;

var_dump($alunos2022);