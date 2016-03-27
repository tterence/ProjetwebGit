<?php
include 'basededonnees.php';
$title = $_POST["tit"];
$auth = $_POST["at"];
$edi = $_POST["ed"];
$ann = $_POST["an"];
try{
	$sql="INSERT INTO livres(auteur,titre,annee,editeur) VALUES ('$auth','$title','$ann','$edi')";
$bdd->exec($sql);
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$bdd = null;
?>