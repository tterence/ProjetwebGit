<html>
	<body>
	<?php include 'basededonnees.php'; ?>
		<form action="traitement3.php" method ="post" >
			<input type="text" name="tit" placeholder="Titre" required><br>
			<br>
			<input type="text" name="at" placeholder="Auteur" required><br>
			<br>
			<input list="editeurs" name="ed" placeholder="Editeurs" required>
				<datalist id="editeurs">
					<?php 
					
					$sql="SELECT editeur FROM editeurs";
					$res=$bdd->query($sql);
					while ($rows=$res->fetch()){
						
					
						echo "<option value=$rows[editeur]>";
						}
					$bdd->null;
					?>
				</datalist><br>
			Année:<br>
			<input type="date" name="an" required><br>
			
			<input type="submit" value="OK">
		</form>
	</body>
</html>