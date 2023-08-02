<?php
// Throw - lança exceção - Try: catch: finaly:
// is_int() - verifica se é inteiro
function f2($nr) {
    if(!is_int($nr)){
        throw new Exception("O argumento é do tipo inexperado");
    }
}