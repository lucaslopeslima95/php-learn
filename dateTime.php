<?php
echo 'Ano (c) '.date('Y');
echo "\n";
echo 'Data completa (c) '.date('d/m/Y');
echo "\n";
echo 'Data Hora (c) '.date('d/m/Y H:i:s');
echo "\n";
/** Valor em segundos desde 1 jan 1970*/
echo time();
echo "\n";
/** valor em segundos de amanha */
echo time()+24*60*60;
echo "\n";
/** Valor em microsegundos desde 1 jan 1970 | unixtimestamp */
echo microtime(true);
echo "\n";
$agora = new DateTime();
$agora->setTimezone(new DateTimeZone('America/Sao_Paulo'));
/** Como definir a data de forma manual */
$agora->setDate(2010,1,7);
/** Como definir a hora de forma manual */
$agora->setTime(23,30,20);
echo $agora->format('d-m-Y H:i:s');
echo "\n";

