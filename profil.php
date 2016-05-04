<?php session_start();
include 'fonction.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?php
	include 'basededonnees.php';
	$sql = "SELECT prenom,nom FROM customer WHERE user_id = '$_SESSION[pseudo]'";
	$res = $bdd->query($sql);
	while($rows = $res->fetch()){
    echo "<title>".$rows["prenom"]." ".$rows["nom"]."</title>"; //le prénom, nom de la personne connectée seront affichés
	}
	?>
    <link rel="stylesheet" href="style.css" href="image.css" type="text/css" />
    <!--<script language="javascript" src="connexion.js" type="text/javascript"></script>-->
    <title>LifeOfEcePARTY</title>
</head>
<body class ="b">
		<?php
		function afficher_data($bdd,$filter){
		$sql = "SELECT $filter FROM customer WHERE user_id = '$_SESSION[pseudo]'";
		$res = $bdd->query($sql);
		while ($rows = $res->fetch()){
			 echo $rows["$filter"];
		}
		}
		?>
		<?php include 'menu.php'; ?>
	<section>
		<div class="info">
			<!--Afficher les infos personnelles-->
			<?php
			echo "<table>
				<tr><td>Pseudo:</td><td>",afficher_data($bdd,'user_id'),"</td></tr>
				<tr><td>Prenom:</td><td>",afficher_data($bdd,'prenom'),"</td></tr>
				<tr><td>Nom:</td><td>",afficher_data($bdd,'nom'),"</td></tr>
				<tr><td>Email:</td><td>",afficher_data($bdd,'email'),"</td></tr>
				<tr><td>Adresse:</td><td>",afficher_data($bdd,'adresse'),"</td></tr>
				<tr><td>Telephone:</td><td>",afficher_data($bdd,'tel'),"</td></tr>
				<tr><td>Nombre de photos:</td><td>",afficher_data($bdd,'nbr_photo'),"</td></tr></table>";
			?>
			
		</div>
		<aside>
			<div class ="photo_profil">
				<?php include 'miniature.php';
					$sql = "SELECT photo_profil FROM customer WHERE user_id = '$_SESSION[pseudo]'";
					$res = $bdd->query($sql);
					$afficher = false;
					while ($rows = $res->fetch()){
						if ($rows['photo_profil']==''){
							$afficher = true;
						}
						
					if ($afficher){
						echo "<img src =";
						echo "Thumb/";
						echo miniature("ledzep.png");
						echo " "."alt = ''>";
					}else{
						echo "<img src =";
						echo "Thumb/";
						echo miniature($rows['photo_profil']);
						echo " "."alt =''>";
					}
					}echo "<center>".$afficher."</center>";
				?>
			</div>
			<form action="recup_donnees_photo.php" method="post" enctype="multipart/form-data"> 
					<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
					<input type="file" name="profil" placeholder="Select images:" multiple><br>
					<input type="submit" value="charger">
			</form>
		</aside>
	<?php $bdd = null;?>
</body>
</html>