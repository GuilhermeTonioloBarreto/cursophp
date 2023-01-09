<?php

// operadores de atribuição
$nome = 'guilherme';

// operador de concatenação (um dos operadores de string)
echo $nome . ' toniolo barreto' . '<br>';

// operador de 	atribuição de concatenação (outro dos operadores de string)
$nome .= ' toniolo barreto';
echo "$nome <br>";

// operadores combinados
$valorTotal = 0;
$valorTotal += 30;
$valorTotal += 40;
$valorTotal -= 10;
$valorTotal *= 0.9;
echo "$valorTotal <br>";

// operadores aritméticos
$a = 54;
$b = 23;

echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';
echo $a ** $b . '<br>';

// operadores de comparação
// $a é maior que $b
var_dump($a > $b);
echo '<br>';

// $a é menor que $b
var_dump($a < $b);
echo '<br>';

// $a é maior e igual a  $b
var_dump($a >= $b);
echo '<br>';

// $a é menor e igual a $b
var_dump($a <= $b);
echo '<br>';

// compara se o valor e o tipo são iguais
$a = 55.0;
$b = '55';

// compara se $a é igual a $b, indepentende do tipo
var_dump($a == $b);
echo '<br>';

// compara se $a é igual a $b em relação ao valor e ao tipo (comparador de identidade)
var_dump($a === $b);
echo '<br>';

// compara se $a é diferente a $b, indepentende do tipo
var_dump($a != $b);
echo '<br>';

// compara se $a é diferente a $b em relação ao valor e ao tipo
var_dump($a !== $b);
echo '<br>';

/*comparador spaceship
se $a é maior que $b: retorna 1
se $a for igual a $b: retorna 0
se $a for menor que $b: retorna -1
*/
$a = 41;
$b = 20;
echo $a <=> $b;
echo '<br>';

$a = 40;
$b = 40;
echo $a <=> $b;
echo '<br>';

$a = 10;
$b = 40;
echo $a <=> $b;
echo '<br>';

// comparador de coalescência nula (null coalescing)
$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c;
echo '<br>';


// operadores incrementais
$a = 10;
echo $a++;
echo '<br>';
echo $a;
echo '<br>';

$a = 10;
echo ++$a;
echo '<br>';
echo $a;
echo '<br>';

// operadores decrementais
$a = 10;
echo $a--;
echo '<br>';
echo $a;
echo '<br>';

$a = 10;
echo --$a;
echo '<br>';
echo $a;
echo '<br>';

// precedência de operadores
$resultado = 10 + 3 / 2;
echo "$resultado <br>";

// comparadores lógicos
// comparador E
$a = true && false;
var_dump($a);
echo '<br>';

// comparador OU
$a = true || false;
var_dump($a);
echo '<br>';

?>