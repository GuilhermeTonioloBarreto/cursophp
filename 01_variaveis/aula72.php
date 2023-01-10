<?php
/* 
o include é diferente do require. 
ambos incluem trechos de códigos em outros programas php.
a diferença entre eles é:
- caso o código incluído via require não exista ou esteja errado, o require impede que o programa rode
- caso o código incluído via include não exista ou esteja errado, o include tenta continuar rodando o programa 

atualmente, é bem melhor usar o require em seus projetos (pois ele confere se está tudo bem com o arquivo importado
ou se tem algum projeto rolando) 

o include é mais usado quando se está trabalhando com uma equipe de programadores que compartilham uma pasta com 
funções em comum!
para acessar esta pasta, deve-se usar o comando echo get_include_path();
daí, deve-se colocar todos os códigos que são usados em compartilhamento nesta pasta
*/
include_once 'aula71.php';

$resultado = somar(10, 20);
echo $resultado . '<br>';



?>