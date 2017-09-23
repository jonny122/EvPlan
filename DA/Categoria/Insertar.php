<?php
if(!empty($_POST)){
	if(isset($_POST["Estado"])){
		if($_POST["Id"]!="" && $_POST["Estado"]!=""){
			include "../Conexion.php";
			
			$Id = 0;
			$Estado = $_POST["Estado"];
			$conn = Conectar();
			
 			$sql = "call CATEGORIA_INSERTAR('".$Id."', '".$Estado."')";
			$statement = $conn->prepare($sql);
			//$statement->bind_param("is", $Id,$Estado);
			$statement->execute();
			
		}
	}
}
?>