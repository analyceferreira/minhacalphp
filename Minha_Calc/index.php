<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="funcoes.php" method="post">
	Valor1: <input type="text" name="val1">
	<select name="opcao">
		<option value="soma">+</option>
		<option value="subtracao">-</option>
		<option value="divisao">/</option>
		<option value="multiplicacao">x</option>
	</select>
	<p></p>
	Valor2: <input type="text" name="val2">
	
	<p></p>
	<input type="submit" name="botCalcular" value="Calcular" />
	
</form>
</body>
</html>