<?php
/* echo "<table style = 'border: solid 1px black;'>"
."<tr><th>Auteur</th><th>Titre</th></tr>"; */
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname="books";

try {
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	/* //Create a new DB
	$sql="CREATE TABLE editeurs(
		id INT(6)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		editeur VARCHAR (30) NOT NULL)";
	$bdd->exec($sql); */
	/* //Insert multiple values in the DB
		//Prepare SQL request and bind paramaters
		$sql=$bdd->prepare("INSERT INTO editeurs (editeur) VALUES(:editeur)");
		$sql->bindParam(':editeur',$editeur);
		//Insert value
		$editeur = "Folio";
		$sql->execute();
		//Another one
		$editeur = "Pocket";
		$sql->execute();
		$editeur = "Nathan";
		$sql->execute();
		$editeur = "Herve";
		$sql->execute(); */
	/* //show author and title of the DB
	$sql = "SELECT auteur,titre FROM livres";
    $res = $bdd->query($sql);
	while ($rows = $res->fetch()){
		echo "<tr><td>". $rows["auteur"]."</td><td>".$rows["titre"]."</td></tr>";
	} */
    }
catch(PDOException $e)
    {
    echo $sql."<br>Connection failed: " . $e->getMessage();
    }
/* echo "</table>"; */
/*$bdd=null;*/
 ?> 