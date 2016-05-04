<?php
session_start();
include 'basededonnees.php';
include 'fonction.php';
?>
<!DOCTYPE html>
<html>
	<body>
		<?php include 'menu.php'; ?>
		<div id="photo_tab">
		<section>
			<div class="photo_tab">
			<?php $sql = "SELECT photo_path FROM photo WHERE user_id = '$_SESSION[pseudo]'";
			$res = $bdd->query($sql);
			while($rows = $res->fetch()){
				echo "<div class = 'photo_div'>";
				echo "<img src =".$rows["photo_path"]." alt = \"photo\"></div>";
			}
			?>
			</div>
		<aside>
			<div id = "charger_photo">
				<form action="recup_donnees_photo.php" method="post" enctype="multipart/form-data">
					<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
					<input type="file" name="img" placeholder="Select images:" multiple>
					<input type="submit" value="charger">
				</form>
			</div>
			<!--div id = "supprimer_photo">
				<form action = "recup_donnees_photo.php" method="post">
					<input type="radio" name="image" value="Profil">Profil<br>
					<input type="radio" name="image" value="Photo">Photo<br>
					<input type="submit" value="Valider">
				-->
		</div>
		<?php $bdd = null;?>
	</body>
</html>
