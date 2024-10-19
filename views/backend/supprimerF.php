<?php 
 require_once '../../controllers/utilisateurs/SujetFmC.php';
 session_start();
  $UtilisateurC=new SujetC();
 
	$UtilisateurC->supprimerforum($_POST['id']);
	header('Location: forum.php');
  

?>
