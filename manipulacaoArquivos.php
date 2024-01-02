<?php

$arquivo = fopen("teste.txt",'w');/**no primeiro parametro pode passar o caminho do arquivo, ou se passar apenas o nome */
fwrite($arquivo,'Primeira Frase.'.PHP_EOL);
fwrite($arquivo,'Segunda Frase.'.PHP_EOL);
fwrite($arquivo,'Terceira Frase.'.PHP_EOL);
fwrite($arquivo,PHP_EOL);
fclose($arquivo);


$arquivo = fopen("teste.txt",'r');
while(!feof($arquivo)){
    echo fgets($arquivo);
}
fclose($arquivo);

$conteudo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta efficitur felis, a pulvinar mauris lobortis eu. Aenean vel aliquam neque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut iaculis mattis justo et tristique. Phasellus tincidunt molestie lacus eget scelerisque. In egestas ut mauris vitae blandit. Quisque eleifend sapien quis ex semper, a dictum sapien egestas. Praesent cursus ex eget tellus gravida congue. Aliquam at massa fermentum, ultricies orci nec, semper est. Donec in mattis nibh. Pellentesque vel ultricies libero.
Praesent suscipit lacus nec ante congue laoreet. Ut ornare dui ipsum, quis malesuada nisi mattis nec. Nullam id tellus nec nunc rutrum accumsan. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse lobortis fermentum elit, vitae semper libero maximus sed. Cras ultrices vulputate massa sed condimentum. Nulla condimentum nunc non ultricies scelerisque. Pellentesque congue leo sed lectus vehicula bibendum. Etiam porta libero nunc, a ornare est laoreet quis. Duis gravida risus ut sem tincidunt interdum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec ultrices euismod nisl sit amet consequat. Morbi mollis nulla non nibh scelerisque, at elementum metus semper. Aenean efficitur metus at elementum rutrum. Praesent finibus, arcu egestas posuere vestibulum, erat purus luctus libero, non tincidunt nunc nisi eu nisi. Nam vitae felis velit. Sed ultrices eleifend tempor. Duis suscipit posuere varius. Nunc congue dapibus urna, et interdum magna fermentum varius. Nullam nibh justo, semper quis orci id, vestibulum auctor mi. Duis luctus ullamcorper justo, sed iaculis ante sagittis faucibus. Nulla condimentum sed leo eu mollis. Nullam quam felis, dignissim sit amet pretium ut, tincidunt cursus lacus. Nunc ornare quam quis felis maximus tincidunt. Proin luctus ultricies nibh eu congue.
Mauris sapien magna, porttitor ac aliquet efficitur, rhoncus dignissim sapien. Aenean pretium mattis tincidunt. Curabitur sit amet tincidunt ligula. Nunc luctus mattis nunc posuere aliquam. Vivamus tincidunt mauris eget lectus laoreet, ac varius odio consectetur. Integer nisl dolor, fermentum quis tortor ut, porta sollicitudin metus. Etiam semper nibh vitae pulvinar tempor. Mauris id metus ipsum. Curabitur a consequat quam, eu mattis eros. Nunc diam ipsum, placerat id dui vitae, pretium sodales est. Aliquam ut quam justo. Nunc dolor massa, convallis sed nunc ut, rhoncus feugiat neque. Proin tempus blandit nulla vitae feugiat. Nullam euismod, leo ut pellentesque sodales, ipsum dui rutrum tellus, tincidunt elementum lacus orci eget neque. Proin in tincidunt velit, non efficitur erat.
Mauris eu neque in eros aliquet tristique. Maecenas facilisis, tellus a bibendum auctor, justo ipsum mollis augue, sed pretium tortor purus a nisi. Suspendisse eget volutpat neque, nec consequat turpis. Morbi nec massa eleifend, suscipit ipsum sed, accumsan ex. In fringilla venenatis nulla et euismod. Nunc nulla libero, posuere viverra dignissim sit amet, consequat eu nunc. Ut malesuada, tortor a iaculis vehicula, urna purus interdum nibh, tempus laoreet nulla purus quis est. Donec erat nibh, elementum quis rutrum ut, interdum nec lacus. Maecenas volutpat orci leo, quis iaculis turpis pharetra ut. Etiam ac nulla id velit suscipit consequat. Nulla eleifend nibh ac arcu facilisis, et condimentum libero mollis. Nulla fringilla eros eget libero molestie feugiat. Pellentesque tincidunt, sem id vestibulum blandit, erat metus tincidunt tellus, ut vulputate tortor velit posuere erat. Integer risus ex, mollis quis venenatis a, scelerisque ut elit.";

file_put_contents("nome_do_arquivo.txt",$conteudo);
/**Essa função executa fopen,fwrite e o fclose tudo junto */

echo file_get_contents("nome_do_arquivo.txt");
//fgetcsv(arquivo,delimitador); função nativa de leitura de csv
/**  CARRAGAR DADOS DE UM FICHEIRO PARA UM ARRAY */
$conteudo = file(dirname(__FILE__).'teste.txt',FILE_SKIP_EMPTY_LINES|FILE_IGNORE_NEW_LINES);/** tem que passar  caminho full do arquivo para nao dar erros */

/** CONVETER UM ARRAY EM ARQUIVO CSV */

$dados = [
    ['1','lucas','pai'],
    ['2','gabriela','mae'],
    ['3','hercules','filho']
];
$csv = fopen(dirname(__FILE__).'arquivo.csv','w');
foreach($dados as $linha){
     fputcsv($csv,$linha);
}
fclose($csv);

