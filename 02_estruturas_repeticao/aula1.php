<?php

// if else if else
$idade = '12';

if($idade < 12){
	echo 'Criança';
}else if($idade < 18){
	echo 'Adolescente';
}else if($idade < 65){
	echo 'Adulto';
}else{
	echo 'Idoso';
}

echo '<br>';

// operador ternário

echo ($idade < 18) ? 'menor de idade' : 'maior de idade';

?>