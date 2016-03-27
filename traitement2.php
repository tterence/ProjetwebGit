<?php
echo "<table style = 'border: solid 1px black;'>"
."<tr><th>Auteur</th><th>Editeur</th><th>Année</th><th>Titre</th></tr>";
include 'basededonnees.php';
function getElements($filter1,$filter2,$filter3,$bdd){
	$sql = "SELECT auteur,editeur,annee FROM livres WHERE auteur='$filter1' AND editeur='$filter2' AND annee='$filter3'; ";
	$res =$bdd->query($sql);
	while($rows=$res->fetch()){
		echo "<tr><td>". $rows["auteur"]."</td><td>".$rows["editeur"]."</td><td>".$rows["annee"]."</td></tr>";
	}
}
function getAllElements($bdd){
	$sql = "SELECT * FROM livres;";
	$res = $bdd->query($sql);
	while($rows=$res->fetch()){
		echo "<tr><td>". $rows["auteur"]."</td><td>".$rows["editeur"]."</td><td>".$rows["annee"]."</td></tr>";
	}
}
function getElementbySearch($filter,$bdd){
	$sql = "SELECT auteur,editeur,annee,titre FROM livres WHERE titre LIKE '%$filter%';";
	$res = $bdd->query($sql);
	while($rows=$res->fetch()){
		echo "<tr><td>". $rows["auteur"]."</td><td>".$rows["editeur"]."</td><td>".$rows["annee"]."</td><td>".$rows["titre"]."</td></tr>";
	}
}
try{
	if((isset($_POST["at"]) && ($_POST["at"] != ""))&&(isset($_POST["ed"]) && ($_POST["ed"] != ""))&&(isset($_POST["an"]) && ($_POST["an"] != ""))) { 
	$ath = $_POST["at"];
	$edi=$_POST["ed"];
	$ann=$_POST["an"];
	getElements($ath,$edi,$ann,$bdd);
	}
	elseif(isset($_POST["tit"]) && ($_POST["tit"] == "")){
		getAllElements($bdd);
	}
	else{
		$title=$_POST["tit"];
		getElementbySearch($title,$bdd);
		
	}
}
catch(PDOException $e)
    {
    echo $sql."<br>Connection failed: " . $e->getMessage();
    }
$bdd=null;
?>