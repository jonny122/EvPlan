<html>
<head>
	<meta charset="UTF-8">
	<?php include ("../Assets/header.php");?>
	<title>Categoria</title>
</head>
<body>
	<a href="javascript:void(0);" class="btn btn-primary" onclick="window.location = '../index.php'">Inicio</a>
	<br/><br/>

	<form action="/EvPlan/EvPlan/DA/Categoria/Insertar.php" method="post" name="form1">
		<table width="25%" border="0" class="table table-stripped">
			<tr> 
				<td>Estado</td>
				<td><input class="form-control" type="text" name="Estado"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input class="btn btn-success" type="submit" name="Submit" value="Agregar"></td>
			</tr>
		</table>
	</form>
</body>
</html>