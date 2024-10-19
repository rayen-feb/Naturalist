<?php
      require_once "../../config.php";
    require_once "../../models/utilisateurs/reponseS.php";


class RsujetC 
{
    
    function afficherRsujet($id)
    {
		$sql="SELECT id, id_sujet, id_utilisateur ,reponse, date_R  FROM reponse_sujet where id_sujet = " . $id;
            $db = config::getConnexion();
            
            try
            {
                $liste = $db->prepare($sql);
                $liste->execute();
                return $liste;
            }
            catch (Exception $e)
            {
                die('Erreur: '.$e->getMessage());
            }   
            
		
	}
	         

        function ajouterRsujet($Rsujet)
        {
            $sql="INSERT INTO reponse_sujet (id, id_sujet, id_utilisateur, reponse, date_R)
             VALUES(1, :id_sujet, :id_utilisateur, :reponse, NOW())";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);
                $query->bindValue(':id_sujet', $Rsujet->getid_sujet());
                $query->bindValue(':id_utilisateur', $Rsujet->getid_user());        
                $query->bindValue(':reponse', $Rsujet->getreponse()); 
                              
            
                $query->execute();          
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }           
        }

		
	

    

    

    function supprimerReponse($id)
        {
            $sql="DELETE FROM reponse_sujet WHERE id= :id";
            $db = config::getConnexion();
            $query=$db->prepare($sql);
            $query->bindValue(':id',$id);
            
            try{
            $query->execute();
         
                 }
            catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
         }

       
        function recupererRsujet(int $id)
        {
            $sql="SELECT * from reponse_sujet WHERE id=:id";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->bindValue(":id", $id);
                $query->execute();              
                $user = $query->fetch();
                return $user;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

        function rechercher($id)
    {
        $sql="SELECT * from reponse_sujet where id=$id";
        $db = config::getConnexion();
        try
        {
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


           
}

?>