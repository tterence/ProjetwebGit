<?php  
	/*Source : http://www.phpdebutant.org/ */
	function miniature($fichierSource){  
    $largeurDestination = 200; 
    $hauteurDestination = 150; 
    $im = ImageCreateTrueColor ($largeurDestination, $hauteurDestination)  
            or die ("Erreur lors de la création de l'image");  
	$infosfichier = pathinfo($fichierSource);
	$extension = $infosfichier['extension'];
	
    if($extension=='png'){
		$source = ImageCreateFromPng($fichierSource);
	} else {
		$source = ImageCreateFromJpeg($fichierSource);
	}
     
    $largeurSource = imagesx($source); 
    $hauteurSource = imagesy($source); 
	$blanc = ImageColorAllocate ($im, 255, 255, 255); 
    $gris[0] = ImageColorAllocate ($im, 90, 90, 90);  
    $gris[1] = ImageColorAllocate ($im, 110, 110, 110);         
    $gris[2] = ImageColorAllocate ($im, 130, 130, 130);  
    $gris[3] = ImageColorAllocate ($im, 150, 150, 150);  
    $gris[4] = ImageColorAllocate ($im, 170, 170, 170);  
    $gris[5] = ImageColorAllocate ($im, 190, 190, 190);  
    $gris[6] = ImageColorAllocate ($im, 210, 210, 210);  
    $gris[7] = ImageColorAllocate ($im, 230, 230, 230);  

    for ($i=0; $i<=7; $i++) { 
        ImageFilledRectangle ($im, $i, $i, $largeurDestination-$i, $hauteurDestination-$i, $gris[$i]);     
    } 
	
    ImageCopyResampled($im, $source, 8, 8, 0, 0, $largeurDestination-(2*8), $hauteurDestination-(2*8), $largeurSource, $hauteurSource); 
     
    ImageString($im, 0, 12, $hauteurDestination-18, "$fichierSource - ($largeurSource x $hauteurSource)", $blanc);
	$fichierEx = explode("/",$fichierSource);
	$miniature = "mini_".$fichierEx[0]; 
	if($extension=='png'){
		ImagePng($im, 'Thumb/'.$miniature);
	} else {
		ImageJpeg($im, 'Thumb/'.$miniature);
	}
	return $miniature;
	} 
?>