<?php
$dataNascimento = new DateTime('17-04-2021');
echo calcular_idade($dataNascimento);


function calcular_idade($dataNascimento){

    $agora = new DateTime();
    
    if($agora->format('Y') == $dataNascimento->format('Y')){
        $anos = 1;
    }else{
        $anos  = $agora->format('Y') - $dataNascimento->format('Y');
    }

    if($agora->format('m') < $dataNascimento->format('m')){
        $anos--;
    }else if($agora->format('m') == $dataNascimento->format('m')){

        if($agora->format('d') == $dataNascimento->format('d')){

            $anos--;
        }
    }
    return $anos != 1?"$anos" : "1 ano";
}
