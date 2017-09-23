<?php
if(!empty($_POST)){
	if(isset($_POST["Estado"])){
		if($_POST["Id"]!="" && $_POST["Estado"]!=""){
			include "../Conexion.php";
			
			$Id = $_POST["Id"];
			$Estado = $_POST["Estado"];
			$conn = Conectar();
			
 			$sql = "call CATEGORIA_ACTUALIZAR('".$Id."', '".$Estado."')";
			$statement = $conn->prepare($sql);
			//$statement->bind_param("is", $Id,$Estado);
			$statement->execute();
			
		}
	}
}
?>