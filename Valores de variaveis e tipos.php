<!DOCTYPE html>
<html>
<body>


<?php
	$variavel = 198;
 
	echo 'O valor da variavel é: ',  $variavel, '<br>';
 
	if (is_int($variavel)){
		echo 'A variavel é: ',gettype($variavel),'<br>';
	} else {
		echo 'Variavel é: ',gettype($variavel),'<br>';
	}
	
 
	$variavel = "Romarinho";
	
	echo 'O valor da variavel é: ',  $variavel, '<br>';
 
	if (is_string($variavel)){
		echo 'A variavel é: ',gettype($variavel),'<br>';
	} else {
		echo 'Variavel é: ',gettype($variavel),'<br>';
	}
	
 
 
	$variavel = array("nome" => "Pedro Luiz", "endereco" => "Av Taquara", "telefone" => "(51) 5151-51511");
	
	
	if (is_array($variavel)){
		echo 'A variavel é: ',gettype($variavel),'<br>';
	} else {
		echo 'Variavel é: ',gettype($variavel),'<br>';
	}
	
	print_r ($variavel);
	
 
?>

</body>
</html>




