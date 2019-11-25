<?php

			include "../Conexion.php";
			
			$conn = Conectar();
			
 			$sql = "SELECT * FROM categoria";
 			$result = mysqli_query($conn,$sql);
			//$statement = $conn->prepare($sql);
			//$statement->bind_param("is", $Id,$Estado);
			//$result = $statement->execute();
			while($fila = mysqli_fetch_assoc($result)){
				$categorias = array('id' => $fila['idCategoria'], 'estado' => $fila['Estado']);
			}
			session_start();
			$_SESSION['CATEGORIAS'] = $categorias;
?>