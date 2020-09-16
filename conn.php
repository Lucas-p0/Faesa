<?php

	$usuario		=	"root";
	$senha 			=	"";
	$host			=	"localhost";
	$banco			=	"meame_loja";
	
	$conexao		=	mysqli_connect($host,$usuario,$senha,$banco);
	
	if($conexao){
		echo "Conectado com sucesso!";
	}else{
		echo "A conexao falhou!";
	}
	
?>