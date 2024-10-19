<?php

include '../../config.php';


class consultationC{

    function ajouterConsultation($consultation){
        $conn = config::getConnexion();
        
        $sql = "INSERT INTO consultations (Objet , type_animal , age ,id_utilisateur, description_con ) values (:objetCon, :typeAni, :ageAni,:idUser, :descriptionCon ) ";
        try {
            $req = $conn->prepare($sql);
            $req->bindValue(':objetCon',$consultation->getObjet());
            $req->bindValue(':typeAni',$consultation->getTypeAnim());
            $req->bindValue(':ageAni',$consultation->getAge());
            $req->bindValue(':descriptionCon',$consultation->getDescription());
            $req->bindValue(':idUser',$consultation->getIdUser());
            
        
            $req->execute();
        } catch (PDOException $e) {
            die('Erreur: '.$e->getMessage());
        }
    }
    function getAllCon(){
        $conn = config::getConnexion();
        $sql = "SELECT * FROM consultations";

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
    function deleteConsultation($idConsultation){
        $conn = config::getConnexion();
        $sql = "DELETE FROM consultations WHERE id_consultation=:idConsultation";

        try {
            $req = $conn->prepare($sql);
            $req->bindValue(':idConsultation', $idConsultation);
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