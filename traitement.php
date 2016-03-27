<?php
	if(isset($_POST["lb"]) && ($_POST["lb"] != "")) { $limiteb = $_POST["lb"]; }
	if(isset($_POST["lh"]) && ($_POST["lh"] != "")) { $limiteh = $_POST["lh"]; }
		for ($i=$limiteb; $i<=$limiteh; $i++){
			for ($j=$limiteb; $j<=$limiteh; $j++){
				echo "$i*$j=",$i*$j," | ";
				if ($j==$limiteh){print "<br>";}
			}
		}
?>
