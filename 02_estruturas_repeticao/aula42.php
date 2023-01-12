<!-- 
Observação:
se no form não tem nenhum action definido: o php envia os dados para a própria página
se no form não tem nenhum método definido: o php atribui como método get
-->
<form>
	<input type="text" name="nome"/>
	<input type="date" name="data"/>
	<input type="submit" value="OK"/>
</form>

<?php

if(isset($_GET)){
	foreach($_GET as $key => $value){
		echo "$key => $value<br>";
	}
}

?>