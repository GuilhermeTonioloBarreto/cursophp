<?php

// padrão camelCase para escrita de nome de variável
$anoNascimento = 1990;
$nomeCompleto = "Guilherme Toniolo";

// pode colocar número no nome das variáveis, mas o número não pode ser estar no 
// início da variável (não pode ser o primeiro caractere)
$nome1 = "João";

// não pode inicar nome de variável com caracteres especiais, exceto o underline
$_nome = "Ricardo";

// comentários de linha são feitos com duas barras laterais
/*
Já comentários de bloco são feitos conforme mostrado agora
e podem durar várias linhas
*/

/*
Não se pode utilizar nomes de variáveis pré definidas

Exemplo:

$this
$_SERVER
$_SESSION
*/

// Apagando variáveis
$nome1 = "Larissa";
echo $nome1 . "<br>";

unset($nome1);
echo $nome1 . "<br>";


/*
Como exibir os erros de código no PHP?

1) Modifique o parâmetro display_errors do arquivo php.ini de Off para On
Este arquivo está em /etc/php/versaoPhp/apache2/php.ini

2) restart o servidor (usando o comando sudo service apache2 restart)

3) verifique se o parâmetro display_errors está como On
Para verificar rode a função phpinfo() no código php e visualize a página web
*/


// verifica se a variável existe (diferente de null)
if(isset($nome1) == false){
	echo 'variavel indefinida';
	echo '<br>';
}

// concatenar strings
$nome = "Guilherme";

$sobrenome = "Toniolo";

$nomeCompleto = $nome . ' ' . $sobrenome;
echo $nomeCompleto . "<br>";

/*
Tipos de dados
- São divididos em 3 grupos:
-- tipo básico (inteiro, string, ponto flutuante e booleano)
-- tipos compostos (array e objeto)
-- tipos especiais (resource e null)
*/

// string
$nome = "Guilherme";
$site = 'www.toniecletico.com.br';

// inteiro
$ano = 1995;

// ponto flutuante
$salario = 5500.99;

// booleano
$bloqueado = false;

// array
$frutas = array("abacaxi", "laranja", "manga");

// objeto
$nascimento = new DateTime();
var_dump($nascimento);
echo '<br>';

// resource
$arquivo = fopen('aula2.php', 'r');
var_dump($arquivo);
echo '<br>';

// null
$nulo = NULL;



?>