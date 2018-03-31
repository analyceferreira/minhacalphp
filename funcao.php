<?php
	
	require_once 'index.html';
	if ($_POST){
	$val1=$_POST["val1"];
	$val2=$_POST["val2"];
	$opcao=$_POST["opcao"];
	}
	
	function validar ($val1,$val2){
        return is_numeric($val1)&&is_numeric($val2);
    }
	
	function soma($val1,$val2){
		if(validar($val1,$val2)) return $val1 + $val2;
		else echo "Valor informado não é valido";
	}
	function subtracao($val1,$val2){
		if(validar($val1,$val2)) return $val1 - $val2;
		else echo "Valor informado não é valido";
	}
	
	function divisao($val1,$val2){
		if(validar($val1,$val2)) return $val1 / $val2;
		else echo "Valor informado não é valido";
	}
	
	function multiplicacao($val1,$val2){
		if(validar($val1,$val2)) return $val1 * $val2;
		else echo "Valor informado não é valido";
	}
	
	if (isset($_POST['botCalcular'])) {
        if ($_POST['opcao'] == "soma") {
        
        $resultado = soma( $_POST['val1'] , $_POST['val2']);
        
        echo $resultado;
        
        } elseif ($_POST['opcao'] == "subtracao") {
        
        $resultado = subtracao($_POST['val1'] , $_POST['val2']);
        
        echo $resultado;
        
        } elseif ($_POST['opcao'] == 'multiplicacao') {
        
        $resultado = multiplicacao( $_POST['val1'] , $_POST['val2']);
        
        echo $resultado;
        
        } elseif ($_POST['opcao'] == 'divisao') {
        
        $resultado = divisao($_POST['val1'] , $_POST['val2']);
        
        echo $resultado;
		}
	}

	
 ?>