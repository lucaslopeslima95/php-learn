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
echo "-----------------------------------------------------------";
/** Operações com datetime */
/**Date Interval */
$data = new DateTime('01-01-2000 00:00:00');

//$data->add(new DateInterval('P180D'));
//$data->add(new DateInterval('P12W'));
//$data->add(new DateInterval('PT72H'));

//$data->sub(new DateInterval('P180D'));
//$data->sub(new DateInterval('P12W'));
//$data->sub(new DateInterval('PT80H15M30S'));
echo "\n";
echo $data->format('d-m-Y H:i:s');

/**Criar datas a partir de um array de datas */
$datas = ['21-10-1998','12-09-1996','01-07-2001','08-12-2005','22-11-1987'];

foreach($datas as $data){
    $d = DateTime::createFromFormat('d-m-Y',$data);
    $d->add(new DateInterval('P180D'));
    echo $d->format('Y-m-d').PHP_EOL;
}

/** Calculo de intervalo entre duas datas */

$data_divida = new DateTime('10-03-1997');
$agora = new DateTime();

$intervalo = $data_divida->diff($agora);
print_r($intervalo);

/** TIMEZONE */

$brasil   = new DateTime('now',new DateTimeZone('America/Sao_Paulo'));
$portugal = new DateTime('now',new DateTimeZone('Europe/Lisbon'));

echo $brasil->format('d-m-Y H:i:s').PHP_EOL;

$portugal->modify('+1 year +1 hour +2 minutes');
$portugal->modify('-2 year +1 hour +2 minutes');
echo $portugal->format('d-m-Y H:i:s').PHP_EOL;