<?php
	session_start();

	unset($_SESSION['user']);
	unset($_SESSION['rol']);

	header("Location: /EvPlan/");
?>