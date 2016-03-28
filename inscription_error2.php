<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css" href="accueil.php" href="image.css" type="text/css" />
		<script language="javascript" src="./inscrip_java.js" type="text/javascript"></script>
		<title>LifeOfEcePARTY</title>		
	</head>
	<body class="p">
		<header>
			<center > Live Event Of ECE </center>
			<div id="im"><!--logo de lecole qui sera sur les pages-->
			<img src="./logo.jpg"/>
			</div>
		</header>

		<img src="./campusece.jpg"/>
		<h2> Veuillez remplir ce formulaire pour vous inscrire: </h2>
		<div class="identify">
			<form method="post" action="recup_donnees_inscription.php">
				<fieldset>
					<table>
						<tr><td><p><span class="error">* champ obligatoire.</span></p></td></tr>
						<tr><td>Login:</td><td><input type="text" name="login" placeholder="exemple:johnece" required></td><td><font color="red">*</font></td></tr>
						<tr><td>Mot de passe:</td><td><input type="password" name="password" required></td><td><font color="red">*</font></td></tr>
						<tr><td>Confirmer MDP:</td><td><input type="password" name="confirm_password" required></td><td><font color="red">*</font></td></tr>
						<tr><td>Prenom:</td><td><input type="text" name="prenom" placeholder="exemple:John" required></td><td><font color="red">*</font></td></tr>
						<tr><td>Nom:</td><td><input type="text" name="nom" placeholder="exemple:Doe" required></td><td><font color="red">*</font></td></tr>
						<tr><td>Pseudonyme:</td><td><input type="text" name="pseudo" placeholder="exemple:Anonymous" required></td><td><font color="red">*</font></td></tr>
						<tr><td>Adresse mail:</td><td><input type="email" name="mail" placeholder="exemple:johndoe@exemple.com" required></td><td><font color="red">*</font></td></tr>
						<tr><td>Adresse:</td><td><input type="text" name="adresse" placeholder="exemple:36 quai de Grennelle 75015 Paris" ></td><td><font color="black">optionnel</font></td></tr>
						<tr><td>Telephone:</td><td><input type="number" name="numerotel" pattern="[0-9]{8}" title="Numero de telephone" placeholder="exemple:06000000"></td><td><font color="black">optionnel</font></td></tr>
					</table>
				<p><span class="error">Login ou Pseudo deja utilise(s), veuillez en saisir un autre</span></p>
				<br><br>
				<center ><input type="submit" value="Inscription"></center>
				</fieldset>
			</form>
			
		</div>

	</body>
</html>
