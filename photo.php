<?php
include 'basededonnees.php';
session_start();
?>
<!DOCTYPE html>
<html>
	<body>
		<?php include 'menu.php'; ?>
		<div id="photo_tab">
		<section>
			<div class="photo_div">
			<?php $sql = "SELECT photo_obj FROM photo WHERE user_id=$_SESSION["pseudo"]";
			$res = $bdd->query($sql);
			while($rows = $res->fetch()){
				echo res["photo_obj"];
			}
			?>
			</div>
		<aside>
			<div id = "charger_photo">
				<form action="recup_donnees_photo.php" method="post" >
					<input type="file" name="img" placeholder="Select images:" multiple>
					<input type="submit" value="charger">
				</form>
			</div>
		</div>
	</body>
</html>