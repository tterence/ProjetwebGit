<?php
include 'basededonnees.php';
$lgn = $_POST["login"];
$pwd = $_POST["password"];
try{
	$sql="SELECT login,password FROM utilisateur";
	$res=$bdd->query($sql);
	while($rows=$res->fetch()){
		if (($lgn==$rows["login"])&&($pwd==$rows["password"])){
			header ("Location: exo5_3.php");
		}	
		else {
			header ("Location: accueil_error.php");
		}
		
	}
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$bdd = null;
?>