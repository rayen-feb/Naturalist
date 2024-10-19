<?php
include_once '../../config.php';
class comprodC{

    function ajouterComprod($comprod){
        $conn = config::getConnexion();
        
        $sql = "INSERT INTO prod_commentaire ( id_produit , nom , mail , comment ) values ( :idProd, :nomComprod , :mailComprod , :commentprod ) ";
        try {
            $req = $conn->prepare($sql);
            $req->bindValue(':idProd',$comprod->getIdProduitCom());
            $req->bindValue(':nomComprod',$comprod->getNomCom());
            $req->bindValue(':mailComprod',$comprod->getMailComprod());
            $req->bindValue(':commentprod',$comprod->getCommentProd());
            
        
            $req->execute();
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }
    function getAllComprod(){
        $conn = config::getConnexion();
        $sql = "SELECT * FROM prod_commentaire";

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

   function liveSearch($search){
    $conn = config :: getConnexion();
    $sql = "SELECT * FROM prod_commentaire WHERE nom LIKE '%" .$search."%' ";
    try{
        $req = $conn->query($sql);
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    catch (PDOException $e) {
        die('Erreur: '.$e->getMessage());
    }
}

    function deleteComprod($idComprod){
        $conn = config::getConnexion();
        $sql = "DELETE FROM prod_commentaire WHERE id_comment=:idComprod";

        try {
            $req = $conn->prepare($sql);
            $req->bindValue(':idComprod', $idComprod);
            $req->execute();
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }

    function rechercher($input,$colonne) {
        if($colonne == "all") 
        {        $sql = "SELECT * from consultations WHERE ( Objet LIKE \"%$input%\") OR ( type_animal LIKE \"%$input%\") OR ( description_con LIKE \"%$input%\") ";
       } else {
   $sql = "SELECT * from consultations WHERE ( $colonne LIKE \"%$input%\")  "; }
   $db = config::getConnexion();
   try { $liste=$db->query($sql); 
    

       return $liste;
   }
   catch (PDOException $e) {
    die('Erreur: '.$e->getMessage());
   }
}
}
?>