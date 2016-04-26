<?php
	session_start();
	include 'basededonnees.php';
	 function saveimage($bdd, $nom){
		try{
			$dossier = 'Upload/';
			if(isset($_FILES["$nom"]['name'])&&($_FILES["$nom"]['name']!=NULL)){
				$image = basename($_FILES["$nom"]['name']);
				$image_path = $dossier.$image;
			}
			if ($nom == "profil"){
				$sql = "UPDATE customer SET photo_profil = '$image_path' WHERE user_id = '$_SESSION[pseudo]'";
				$res = $bdd->exec($sql);
				header("Location: profil.php");
			}
			else {
				$sql = "INSERT INTO photo(photo_path) VALUES ('$image_path') WHERE user_id = '$_SESSION[pseudo]'";
				$res = $bdd->exec($sql);
				header("Location: photo.php");
			}
		}
		catch(PDOException $e){
			echo $sql."<br>Connection failed: " . $e->getMessage();
		}
		
	} 
	
	function verifimage($nom){
	 //Testons si le fichier n'est pas trop gros
        if ($_FILES["$nom"]['size'] <= 10000000)

        {

                // Testons si l'extension est autorisée

                $infosfichier = pathinfo($_FILES["$nom"]['name']);

                $extension_upload = $infosfichier['extension'];

                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

                if (in_array($extension_upload, $extensions_autorisees))

                {
					// On peut valider le fichier et le stocker définitivement
						$image_path = 'Upload/'.basename($_FILES["$nom"]['name']);
                        move_uploaded_file($_FILES["$nom"]['tmp_name'],$image_path);
						return true;
				}
				else {return false;}
		}else {
			return false;}
	}
	if (isset($_FILES["profil"]['name'])&&($_FILES["profil"]['name']!=NULL)){
		$image = "profil";
	}
	else {
		$image = "img";
	}
	if(verifimage($image)){
		saveimage($bdd,$image);
		}
	else {
		header("Location : profil.php");
		echo "<script>alert('Taille ou type du fichier incorrects')</script>";
	} 

$bdd = null;
?>