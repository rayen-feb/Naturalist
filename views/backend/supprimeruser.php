<?php 
include "../../controllers/utilisateurs/UtilisateurCB.php";
 session_start();
  $UtilisateurC=new UtilisateurC();
 
	$UtilisateurC->supprimerUtilisateur($_POST['id']);
	header('Location: afficheruser.php');
  

?>
