<?php
mkdir('teste');/**pode passar apenas a pasta cria no local ou se passar o diretorio tbm funciona */
rmdir('teste');/**Remove a pasta */
echo dirname(__FILE__);/**Retorna o diretorio do arquivo atual ou do propio arquivo */
touch('teste.php');/**Cria um arquivo */
chdir('destino');/** mesma coisa que o cd destino */

