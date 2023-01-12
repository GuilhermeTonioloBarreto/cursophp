<?php

$condition = true;

while($condition){
	$num = rand(1,10);
	if($num === 3){
		echo "O número premiado $num foi sorteado!";
		$condition = false;
		continue;
	}
	
	echo "O número sorteado $num não é o premiado<br>";

}

?>