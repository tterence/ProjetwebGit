<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" href="image.css" type="text/css" />
    <!--<script language="javascript" src="connexion.js" type="text/javascript"></script>-->
    <title>LifeOfEcePARTY</title>
</head>
<body class ="b">
		<?php
		include 'basededonnees.php';
		function afficher_data($bdd,$filter){
		$sql = "SELECT $filter FROM customer WHERE user_id = $_SESSION["pseudo"]";
		$res = $bdd->query($sql);
		echo $res["$filter"];
		}
		?>
		<?php include 'menu.php'; ?>
	<div class="c">
		<!--Afficher les infos personnelles-->
		<?php
		echo "<table class="identify">";
			."<tr><td>Pseudo:</td><td>afficher_data($bdd,"user_id")</td></tr>";
			."<tr><td>Prenom:</td><td>afficher_data($bdd,"prenom")</td></tr>";
			."<tr><td>Nom:</td><td>afficher_data($bdd,"nom")</td></tr>";
			."<tr><td>Email:</td><td>afficher_data($bdd,"email")</td></tr>";
			."<tr><td>Adresse:</td><td>afficher_data($bdd,"adresse")</td></tr>";
			."<tr><td>Telephone:</td><td>afficher_data($bdd,"tel")</td></tr>";
			."<tr><td>Photo de profil:</td><td>afficher_data($bdd,"photo_profil")</td></tr>";
			."<tr><td>Nombre de photos:</td><td>afficher_data($bdd,"nbr_photo")</td></tr>";
		?>
		
	</div>
	
</body>
</html>