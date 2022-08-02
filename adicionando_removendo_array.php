<?php

$alunos2021 = [
    'Vinicius',
    'Aline',
    'Ana',
    'Roberto',
    'Maria',

];

$novosalunos = [
    'Patricia',
    'Nico',
    'Kiko',
    'Daiane',
];

$alunos2022 = [...$alunos2021, 'Carlos Vinicius', ...$novosalunos];

array_push($alunos2022, 'Alice', 'Bob', 'Charlie');                         //INTRODUZ O DADO NO FINAL DO ARRAY

array_unshift($alunos2022, 'Stefany', 'Rafael');                            //INTRODUZ O DADO NO INICIO DO ARRAY

var_dump($alunos2022);



