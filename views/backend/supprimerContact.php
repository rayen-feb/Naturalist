<?php 
 require_once "../../controllers/utilisateurs/contacterC.php";
  session_start();
  $UtilisateurC=new ContactC();
 
	$UtilisateurC->supprimerContact($_POST['id']);
	header('Location: contact.php');
  

?>
