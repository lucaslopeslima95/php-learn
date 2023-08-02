<?php
/** pode compara int com string !=, para considerar o tipo !=== (identico) <>(diferente)*/
$endereco = [
    'cep'=>'123456',
    'numero'=>'872',
    'cidade'=>'Blumenau',
    'estado'=>'Santa Catarina',];

    print($endereco['cidade']);
   /**isset - verifica se existe */
   if(isset($endereco['cep1'])){
        print(' - cidade linda');
   }else{
        print('Não é uma cidade linda');
   }
   //** ++$a(incrementa na mesma linha)  pré incremento e pos incremento $a++(só adiciona pra a proxima instrução) */
?>