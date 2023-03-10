<?php

// Exemplo 1: lendo variáveis dentro de função 
$nome = "toniolo";

function teste1() {
	echo $nome . '<br>';
}

function teste2() {
	global $nome;
	echo $nome . '<br>';
}

// aparecerá um erro. Variável $nome não faz parte do escopo de variável
teste1();

// vai dar certo. a função teste2() colocar a variável $nome no escopo da função teste2()
teste2();


// exemplo 2: lendo variáveis de fora da função
function setMessage(){
	// primeiro precisa setá-la como variável global para depois atribuir um valor para ela
	global $message;
	$message = "Hello World";
}

setMessage();

echo $message;

?>