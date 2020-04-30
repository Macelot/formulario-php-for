<html>
<head>
	<title>Modelo</title>
	<meta charset="utf-8">
</head>
<body>
	<table>
		<form name="Formulario" method="post" action="modelo.php">
		<tr>
			<td>Valor 1<br><input type="text" name="valor1" value=""></td>
		</tr>
		<tr>
			<td>Valor 2<br><input type="text" name="valor2" value=""></td>
		</tr>
			<td><input type="button" name="Confirmar" value="Confirmar" onClick="submit();"></td>
		</tr>
		</form>
	</table>
<?php
$v="";
if(isset($_POST['valor1'])){
	$v=$_POST['valor1'];
}
if(isset($_POST['valor2'])){
	$v2=$_POST['valor2'];
}

echo "Você digitou ".$v;
echo "<br>";
echo "Você digitou ".$v2;

echo "<table border='1'>";
for($j=0;$j<$v2;$j++){
	echo "<tr>";
	for($i=0;$i<$v;$i++){
		echo "<td>linha $j testes</td>";
	}
	echo "</tr>";
}
echo "</table>";

?>

</body>
</html>
