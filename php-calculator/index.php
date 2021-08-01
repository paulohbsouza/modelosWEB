<!DOCTYPE html>
<html>
<head>
	<title>Calculadora em PHP|</title>
</head>
<body>
	<form method="post" action="calcular.php">
		<br/>
		<label>
			Primeiro numero
			<input type="text" name="numero1">
		</label>
		<label>
			Primeiro segundo
			<input type="text" name="numero2">
		</label>
		<br/>
		<br/>
		Operação:<br/>
		<label>
			<input type="radio" name="operacao" value="somar">Somar
		</label>
		<label>
			<input type="radio" name="operacao" value="subtrair">Subtrair
		</label>
		<label>
			<input type="radio" name="operacao" value="multiplicar">Multiplicar
		</label>
		<label>
			<input type="radio" name="operacao" value="dividir">Dividir
		</label>
		<input type="submit" value="Calcular">
	</form>
</body>
</html>
