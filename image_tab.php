<?php
	//Creation de la classe image_tab, vecteur d'image
	public class image_tab{
		protected image img[];//vecteur img[]
		//Constructeur, associant le tableau en paramètre à notre vecteur
		public function __construct(image im[]){
			for (int i = 0; i<nbr_img;i++){
				img[i] = im[i];
			}
		}
	}
?>