<?php
session_start();
include 'basededonnees.php';
$lgn = $_POST["login"];
$pwd = $_POST["password"];
try{
	$sql="SELECT login,password FROM utilisateur";
	$res=$bdd->query($sql);
	while($rows=$res->fetch()){
		if (($lgn==$rows["login"])&&($pwd==$rows["password"])){		//vérification du login et mot de passe dans la base de données
			/* Insertion de l'attribut 'pseudo' dans une variable globale de session*/
			$sql = "SELECT user_id FROM customer WHERE login = '$lgn'"; 
			$res = $bdd->query($sql);
			while ($rows = $res->fetch()){
				$_SESSION["pseudo"]=$rows["user_id"];
			}
			header ("Location: entrer.php");
		}	
		else{
			session_destroy();	
			header ("Location: accueil_error1.php");
		}		
	}
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$bdd = null;
?>