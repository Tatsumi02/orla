<?php
if (isset($_POST['submint'])) {
 	# crecuperer lesinformations
 	$nom=$_POST['nom'];
 	$email=$_POST['email'];
 		$tel=$_POST['tel'];
 			$url=$_POST['url'];
 				$api=$_POST['api'];

 				#Afficher les resultats

 				echo 'nom: ' . $nom. 'email: '. $email . 'tel: '. $tel;
 				exit();
 } 


?>