<?php 
 require_once "../../controllers/utilisateurs/reponseSC.php";
 
  $UtilisateurC=new RsujetC();
 
	$UtilisateurC->supprimerReponse($_POST['id']);
	header('Location: forum.php');
  

?>
