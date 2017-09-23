<?php
if(!empty($_POST)){
	if(isset($_POST["Estado"])){
		if($_POST["Id"]!="" && $_POST["Estado"]!=""){
			include "../Conexion.php";
			
			$Id = $_POST["Id"];
			
			$conn = Conectar();
			
 			$sql = "call CATEGORIA_ELIMINAR('".$Id.")";
			$statement = $conn->prepare($sql);
			//$statement->bind_param("is", $Id,$Estado);
			$statement->execute();	
		}
	}
}
?>