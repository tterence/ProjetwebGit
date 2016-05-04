<?php
	session_start();
	include 'basededonnees.php';
	//include 'fonction.php';
?>	
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" href="image.css" href="inscription.html" href="image.html" type="text/css" />
    <script language="javascript" src="connexion.js" type="text/javascript"></script>
    <title>LifeOfEcePARTY</title>
  </head>

  <body class="p">

    <header>
        <center > Live Event Of ECE </center>
        <div id="im"><!--logo de lecole qui sera sur les pages-->
        <img src="./logo.jpg"/>
        </div>
    </header>
	<div class="menug">
    <fieldset>
    <nav>
      <ul>
	  <?php
		$sql = "SELECT prenom,nom FROM customer WHERE user_id = '$_SESSION[pseudo]'";
		$res = $bdd->query($sql);
		while ($rows = $res->fetch()){//le prénom, nom de la personne connectée seront affichés
			echo "<li><a href=\"#actualites\"> Actualités </a></li>
        <li><a href=\"profil.php\">".$rows["prenom"]." ".$rows["nom"]."</a></li>";
		}
        ?>
        <li><a href="#amis">Amis</a></li>
        <li><a href="#deconnexion">Se deconnecter</a></li>";
      </ul>
    </fieldset>
      <!--<SPAN style="position: absolute; top: 50 px; left: 500 px;">-->
  </div>
	<?php
	/*Modification administrateur*/
	$sql = "SELECT admin FROM customer WHERE user_id = '$_SESSION[pseudo]'";
	$res = $bdd->query($sql);
	while ($rows = $res->fetch()){
		if ($rows["admin"]==1){
			echo "<section><aside><form action = 'admin.php' method='post' id='admin'>
			<center><input type='submit' value='gerer les utilisateurs'></center>
					</form></aside></section>";
		}
	}
	?>
	<div id="deconnexion">
		<?php
			session_destroy();
			//header("Location: accueil.php");
			echo "coucou";
		?>
	</div>
	<div id="amis"><h2>Mes amis sont:</h2></div>
	<?php $bdd = null;?>
  </body>
</html>
