<?php
/* 
o include_one e o require_once são usados para impedir que códigos php que já foram incluídos 
uma vez possam ser incluídos outra vez (isto causa um erro fatal no programa)

*/
require_once 'aula71.php';
require_once 'aula71.php'; // esta linha será ignorada

$resultado = somar(10, 20);
echo $resultado . '<br>';


?>