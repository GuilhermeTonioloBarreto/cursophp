<?php

// variáveis pré-definidas
// para o exemplo abaixo funcionar, adicione na sua url: ?a=123
$nome = $_GET['a'];
var_dump($nome);
echo '<br>';

// para o exemplo abaixo funcionar, adicione na sua url: ?a=gui&b=toniolo
$nome = $_GET['a'];
$sobrenome = $_GET['b'];

echo "$nome $sobrenome <br>";

// pegar ip do usuário
$ip = $_SERVER['REMOTE_ADDR'];
echo "$ip <br>";

// pegar nome do script php que está rodando
$script = $_SERVER['SCRIPT_NAME'];
echo "$script <br>";
?>