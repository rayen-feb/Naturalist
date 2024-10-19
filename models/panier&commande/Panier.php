<?php

class Panier 
{
	private $idProd,$designation,$prix,$quantity,$image;
	
	function __construct($idProd, $designation, $prix, $qtite, $img)
	{
		$this->idProd = $idProd;
		$this->designation = $designation;
		$this->prix = $prix;
		$this->quantity = $qtite;
		$this->image = $img;
	}

	function getIdProd(){
		return $this->idProd;
	}

	function getDesignation(){
		return $this->designation;
	}

	function getPrix(){
		return $this->prix;
	}

	function getQtite(){
		return $this->quantity;
	}

	function getImg(){
		return $this->image;
	}
}


?>