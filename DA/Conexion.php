<?php
	define("Server",     "localhost");
	define("User",     "root");
	
	define("Password",     "1234");
	define("DB",     "organigrama");

	function Conectar(){
		$conn = new mysqli(Server, User, Password, DB);

		if($conn){
			return $conn;
		}else{
			echo $conn->connect_errno;
		}
	}
	Conectar();
?>