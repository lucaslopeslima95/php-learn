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
