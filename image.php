<?php
//Creation de la classe image
	public class image
	{
		protected String path; //chemin de la photo
		protected static int nbr_img;//nombre d'image
		//Constructeur
		public function __construct(String path){
			this.path = path;
			nbr_img=+;
		}
		//Getteurs
		public function getpath(){
			return path;
		}
		public function get_nbr_image(){
			return nbr_img;
		}
	}
?>