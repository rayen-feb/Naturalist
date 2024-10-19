<?php
session_start();
include_once '../../models/panier&commande/Panier.php';
include_once '../../controllers/panier&commande/PanierC.php';

$panierC = new PanierCtrl();
if (isset($_SESSION['shopping_cart'])){
$produit = $_SESSION['shopping_cart'];
}
else{
$produit = array();
}
$idProd = filter_input(INPUT_POST, 'id_produit');
$designation = filter_input(INPUT_POST, 'designation');
$prix = filter_input(INPUT_POST, 'prix');
$quantite = filter_input(INPUT_POST, 'quantite');
$image = filter_input(INPUT_POST, 'image');
$url = filter_input(INPUT_GET, 'url');



if (filter_input(INPUT_POST, 'boutton')) {
  //ajout du produit au panier
	$temoin=array();
	$temoin2=array();
	$temoin2=$panierC->ajouterProduitPanier($produit,$idProd,$designation,$prix,$quantite,$image);

	for ($i=0; $i < count($temoin2); $i++) { 
		$temoin[$i]= new Panier($temoin2[$i]['id'],$temoin2[$i]['designation'],$temoin2[$i]['prix'],$temoin2[$i]['quantity'],$temoin2[$i]['image']);
		$panierC->deletePanier();
		$panierC->ajouterPanier($temoin);
	}
	$_SESSION['shopping_cart']=$temoin2;
}



if (filter_input(INPUT_GET, 'action') =='delete') {
	//retrait du produit du panier
	$temoin4=array();
	$temoin3=array(); 
	$temoin3 = $panierC->supprimerProduitPanier($_SESSION['shopping_cart'],filter_input(INPUT_GET, 'id'));
	for ($i=0; $i < count($temoin3); $i++) { 
		$temoin4[$i]= new Panier($temoin3[$i]['id'],$temoin3[$i]['designation'],$temoin3[$i]['prix'],$temoin3[$i]['quantity'],$temoin3[$i]['image']);
	}
	unset($_SESSION['shopping_cart']);
	$_SESSION['shopping_cart']=$temoin3;
	$panierC->deletePanier();
	$panierC->ajouterPanier($temoin4);
	header('Location: '.$url.'');
	
	
}
if(filter_input(INPUT_POST, 'big'))
{

$array=array();

$array=json_decode(filter_input(INPUT_POST, 'big'),true);
if(filter_input(INPUT_POST, big))
$panierC->updateQuantite($array[0]['qty'],$array[0]['pid']);

}



?>