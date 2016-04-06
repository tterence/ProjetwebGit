<?php
	include 'basededonnees.php';
	function chargerClasse($classe)
{
  require $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
}
	//Test d'ajout pour 1 seule image, pour plusieurs, $image_tab= array($image);
	spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.										
	if(isset($_POST["img"])&&($_POST["img"]!=NULL)){
		$image=$_POST["img"];
	}
	echo ""
?>