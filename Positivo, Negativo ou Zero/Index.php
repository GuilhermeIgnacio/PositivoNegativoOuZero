<!DOCTYPE html>
<html>
<head>
	<title>Valor Positivo, Negativo ou igual a Zero.</title>
</head>
<body>
<form action="" method="get">
	Insira um valor numérico aqui: <input type="text" name="num">
	<input type="submit" value="Enviar!">



<?php 
//Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".

$valor = $_GET['num'];
$resultado = "";

if ($valor > 0) {
 $resultado = "Valor Positivo";
} elseif ($valor < 0) {
 $resultado = "Valor Negativo";
}
else{$valor = "Zero";}

echo $resultado;

?>

</body>
</html>