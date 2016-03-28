<?php
include 'basededonnees.php';
function valid_data ($bdd,$table_name,$filter,$post_name){
try{
	$sql = $res = "";
	$sql = "SELECT $filter FROM $table_name";
	$res = $bdd->query($sql);
	while ($rows = $res->fetch()){
		if (isset($_POST["$post_name"])&&($_POST["$post_name"]==$rows["$filter"] )){
			header ("Location: inscription_error2.php");
			exit;
			
		}
		else {
			return $_POST["$post_name"];
		}
	
	}
	if ($rows = $res->fetch()==NULL){
		return $_POST["$post_name"];
	}
}
catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
	$form=0;
    }
}

$lgn = valid_data($bdd,"utilisateur","login","login");

$confirm_pwd = $_POST["confirm_password"];
if (isset($_POST["password"])&&($_POST["password"]==$confirm_pwd)){
	$pwd = $_POST["password"];
}
else {
	header ("Location: accueil.php");
	echo "Mot de passe de confirmation et mot de passe differents";
	exit;
}

$name = $_POST["nom"];
$fname = $_POST["prenom"];
$username = valid_data($bdd,"customer","user_id","pseudo");
$email = $_POST["mail"];
$adress = $_POST["adresse"];
$tel = $_POST["numerotel"];
//Validation de la création d'un utilisateur en envoyant un mail contenant un lien vers le site. Si au bout 1 jour ce n'est pas fait, supprimer le compte.
//à faire

try{
	$sql = "INSERT INTO utilisateur(login,password,email) VALUES ('$lgn','$pwd','$email')";
	$bdd->exec($sql);
	$sql = "INSERT INTO customer (user_id,prenom,nom,email,adresse,tel,admin,photo_profil,nbr_photo) VALUES ('$username','$fname','$name','$email','$adress','$tel','1','','0')";
	$bdd->exec($sql);
	$form=1;
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
	$form=0;
    }

$bdd = null;
if ($form){
	header("Location: accueil.php");
	exit;
}
else {
	header("Location: inscription_error1.php");
	exit;
}
$bdd = null;
?>