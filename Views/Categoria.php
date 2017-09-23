<html>
<head>
	<meta charset="UTF-8">
	
	<title>Categoria</title>
	<link rel="stylesheet" href="../Assets/Bootstrap/css/bootstrap.min.css">
	<script src="../Assets/angular.min.js"></script>
	<script src="../Assets/jquery-3.2.1.js"></script>
</head>

<body>
	<a href="<?php echo URL;?>/index.php">Inicio</a>
	<br/><br/>

	<form action="/EvPlan/EvPlan/DA/Categoria/Insertar.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Id</td>
				<td><input type="text" name="Id"></td>
			</tr>
			<tr> 
				<td>Estado</td>
				<td><input type="text" name="Estado"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Agregar"></td>
			</tr>
		</table>
	</form>
</body>
</html>