<?php

$notas =[ 
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Rafael',
        'nota' => 7,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 8,
    ],
];

function ordenaNotas(array $nota1, array $nota2) : int
{
    if ($nota1['nota'] > $nota2['nota']){                               //SE A PRIMEIRA NOTA FOR > QUE A SEGUNDA RETORNA -1.
        return -1;
    }

    if ($nota2['nota'] > $nota1['nota']){                               //SE A SEGUNDA NOTA FOR > QUE A PRIMEIRA RETORNA 1.
        return 1;
    }

    return 0;                                                           //SENAO RETORNAR 0.
}

usort($notas,'ordenaNotas');                                            //A função usort() em PHP classifica um determinado array usando uma função de comparação definida pelo usuário
var_dump($notas);                                                       //SINTAXE :: boolean usort( $array, "function_name");