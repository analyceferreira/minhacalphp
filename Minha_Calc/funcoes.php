<?php
	
	require_once 'index.php';
	
	$val1=$_POST['val1'];
	$val2=$_POST['val2'];
	$opcao=$_POST['opcao'];
	
	private function soma($val1,$val2,$opcao){
		return $val1 + $val2;
	}
	function subtracao($val1,$val2,$opcao){
		return $val1 - $val2;
	}
	
	function divisao($val1,$val2,$opcao){
		return $val1 / $val2;
	}
	
	function multiplicacao($val1,$val2,$opcao){
		return $val1 * $val2;
	}
	
    function validar ($val1,$val2){
        return is_numeric($val1)&&is_numeric($val2);
    }
    
    if(validar($val1,$val2)){
		switch ($opcao) {
			case 'soma':
				echo soma;
				break;
			case 'subtracao':
				echo subtracao;
				break;
			case 'divisao':
				echo divisao;
				break;
			case 'multiplicacao':
				echo multiplicacao;
				break;
			
			default:
			echo "Nenhuma operação escolhida";
				break;
		}
	}
	else{
		echo "Valor informado não é valido";
	}
	
?>
 ?>