<?php
	if (!isset($_SESSION["pseudo"])){
		session_destroy();
		header("Location: accueil.php");
		exit();
	}
?>