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
			<td><input type="button" name="Confirmar" value="Confirmar" onClick="submit();"></td>
		</tr>
		</form>
	</table>
<?php
$v="";
if(isset($_POST['valor1'])){
	$v=$_POST['valor1'];
}

echo "Você digitou ".$v;

?>

</body>
</html>





