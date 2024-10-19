<?php
include_once'../../config.php';

class PanierCtrl
{
	function getAllProd2(){
		$conn = config::getConnexion();
		$sql = "SELECT * FROM panier";

		try {
			$result=$conn->query($sql);
			$rows = $result->fetchAll(PDO::FETCH_ASSOC);
			return $rows;
			if(!empty($rows)){
				return $rows[0];
			}

		} catch (PDOException $e) {
			die('Erreur: '.$e->getMessage());
		}
	}

	function supprimerProduitPanier($produit,$id){
  //rechercher tous les produits dans le panier et voir celui qui correspond à l'id de celui qu'il faut supprimer
		if (isset($produit)) { 
			foreach ($produit as $key => $product) {
				if ($produit[$key]['id'] == $id){
					unset($produit[$key]);

				}
			}$produit=array_values($produit);

			return $produit;
		}
	}
	
	function ajouterPanier($panier){

		$conn = config::getConnexion();

		$sql = "INSERT INTO panier (id,designation,prix,quantity,image) VALUES (:id_produit,:designation,:prixV ,:quantiteEnvoyee,:img)";

		try {
			for ($i=0; $i < count($panier); $i++) { 
			
			$req = $conn->prepare($sql);
			$req->bindValue(":id_produit", $panier[$i]->getIdProd());
			$req->bindValue(":designation",$panier[$i]->getDesignation());
			$req->bindValue(":prixV", $panier[$i]->getPrix());
			$req->bindValue(":quantiteEnvoyee", $panier[$i]->getQtite());
			$req->bindValue(":img", $panier[$i]->getImg());

			$req->execute();
			}

		} catch (PDOException $e) {
			die('Erreur: '.$e->getMessage());
		}
	}

	function ajouterProduitPanier($produit,$id,$designation,$prix,$quantite,$image){
//verifier si le panier est vide ou pas
		if (isset($produit)) {
    //isoler la colonne de l'id pour pouvoir associer plus tard 
			$count=count($produit);

			$product_ids= array_column($produit, 'id');
    //verifier si le produit est déjà dans le panier et sinon l'ajouter
			if (!in_array($id,$product_ids)) {
				$produit[$count]=array
				('id' => $id, 
					'designation' => $designation,
					'prix' => $prix,
					'quantity' => $quantite,
					'image' => $image
				);
			}
			else{
      //associer la clé du tableau à l'id du produit
				for ($i=0; $i < count($product_ids) ; $i++) {
        //verifier si le produit est déjà dans le panier et sioui augmenter sa quantité
					if ($product_ids[$i] == $id) {
						$produit[$i]['quantity'] += $quantite;
					}
				}

			}
		}
  //si le panier est vide ajouter le produit soumis
		else{
			$produit[0]=array
			('id' => $id, 
				'designation' => $designation,
				'prix' => $prix,
				'quantity' => $quantite,
				'image' => $image
			);

		}
		return $produit;
	}

	function deletePanier(){
		$conn = config::getConnexion();
		$sql = "DELETE FROM panier";

		try {
			$req = $conn->prepare($sql);
			$req->execute();
		} catch (PDOException $e) {
			die('Erreur: '.$e->getMessage());
		}
	}

	function updateQuantite($quantite,$id){
		$conn = config::getConnexion();
		$query= $conn->prepare("UPDATE panier SET quantity=:qty WHERE id=:pid");
		try{
			$query->bindValue(":qty", $quantite);
			$query->bindValue(":pid", $id);
			$query->execute();
		}catch (PDOException $e) {
			die('Erreur: '.$e->getMessage());
		}
		echo $quantite;
	}
}

?>