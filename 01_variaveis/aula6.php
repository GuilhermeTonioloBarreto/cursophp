<?php

/*
Interpolação de variáveis
Interpolação é quando se combina texto com variáveis
Só é possível fazer interpolação quando se inicia com aspas duplas
*/

$nome = 'Guilherme';

// o exemplo abaixo é possível fazer interpolação porque está sendo utilizado aspas duplas
echo "O nome dele é $nome <br>";

// o exemplo abaixo não é possível fazer interpolação porque está sendo utilizado aspas simples
echo 'O nome dele é $nome <br>';

// deixar a string inteira em maiúsculo
$nome = 'guilherme';
echo strtoupper($nome);
echo '<br>';

// deixar a string inteira em minúsculo
$nome = 'GUILHERME';
echo strtolower($nome);
echo '<br>';


// deixar a primeira letra da string em maiúscula (não interfere nas outras)
$nomeCompleto = 'guilHERME TONiolo barretO';
echo ucfirst($nomeCompleto);
echo '<br>';

// deixar a primeira letra de todas as palavra em maiúscula (não interfere nas outras letras);
$nomeCompleto = 'guilHERME TONiolo barretO';
echo ucwords($nomeCompleto);
echo '<br>';

// troca de um caractere específico da string por outro
$nome = "guilherme";
$nome = str_replace('e', '2', $nome);
echo "$nome <br>";

// localiza uma palavra específica dentro de uma string
$frase = "o bom é inimigo do ótimo";
$q = strpos($frase, 'inimigo');
var_dump($q);
echo '<br>';

// truncar a string
$frase = 'o bom é inimigo do ótimo';
$palavra = 'inimigo';
$q = strpos($frase, $palavra);

$texto1 = substr($frase, 0, $q);
var_dump($texto1);
echo '<br>';

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto2);
echo '<br>';

?>