<?php

/**Formas de declarar */

$nomes1   = array('a','b','c');
$nomes2   = ['a','b','c'];
$nomes3[] = 'a,b,c';

print_r($nomes1);
print_r($nomes2);
print_r($nomes3);

/**Formas de uso */
$cliente1 = [
    'nome'     =>'Lucas',
    'idade'    =>28,
    'profissao'=>'Programador'
];
print_r($cliente1);

$cliente2['nome'] = 'Lucas';
print_r($cliente2);

$nomes = ['maria','jose','carlos'];
list($nome1,$nome2,$nome3) = $nomes;
echo $nome1.PHP_EOL;
echo $nome2.PHP_EOL;
echo $nome3.PHP_EOL;

list($nome1,,$nome3) = 'Lucas';
echo $nome3;

$familia = [
    'Lucas'   => 'Pai',
    'Gabriela'=>'esposa',
    'Hercules'=>'filho'
];
extract($familia);
echo $Lucas;

/**Count Recursive - contador de array considerando itens subarrays*/
$empresa  = [
    "ADM"=>[
        'Lucas',
        'Gabriela'
    ],
    "Diretoria"=>[
        "Hercules"
    ]
];
echo PHP_EOL.count($empresa,COUNT_RECURSIVE);

















