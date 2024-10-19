<?php

      require_once "../../config.php";
      require_once "../../models/utilisateurs/SujetFm.php";

class SujetC {

    function affichersujet()
    {
		$sql="SELECT id_sujet, id_utilisateur, type,message,date_p  FROM sujet ORDER BY date_p DESC";
            $db = config::getConnexion();
            
            try
            {
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e)
            {
                die('Erreur: '.$e->getMessage());
            }   
            
		
	}
	    
         
        function ajoutersujet($Sujet)
        {
         $sql="INSERT INTO sujet(id_sujet, id_utilisateur, type,message, date_p)
          VALUES(:id_sujet, :id_utilisateur, :type, :message, NOW())";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);
                $query->bindValue(':id_sujet', $Sujet->getid_sujet());
                $query->bindValue(':id_utilisateur', $Sujet->getid_user());
                $query->bindValue(':type', $Sujet->gettype());
            $query->bindValue(':message', $Sujet->getmessage());
                
            
                return $query->execute();          
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }           
       
        }

		
	

    

        function triersujet()
        {
        $sql="SELECT * from sujet ORDER BY date_p DESC";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
       }

    

    function supprimerforum($id_sujet)
        {
            $sql="DELETE FROM sujet WHERE id_sujet= :id_sujet";
            $db = config::getConnexion();
            $query=$db->prepare($sql);
            $query->bindValue(':id_sujet',$id_sujet);
            
            try{
            $query->execute();
         
                 }
            catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
         }

         function modifiersujet($Sujet)
        {

  $sql="UPDATE sujet SET  type=:type, message=:message, date_p=:NOW() WHERE id_sujet =:id_sujet";
            $db = config::getConnexion();
            try
             {          
                $query = $db->prepare($sql);
                $query->bindValue(':id_sujet', $Sujet->getid_sujet());
                $query->bindValue(':type', $Sujet->gettype());
                $query->bindValue(':message', $Sujet->getMessage());
                $query->bindValue(':NOW', $Sujet->getDate());
            
                $query->execute();
            } 
            catch (PDOException $e) 
            {
                $e->getMessage();
            }


        }

        function recupererSujet(int $id_sujet)
        {
            $sql="SELECT * from sujet WHERE id_sujet=:id_sujet";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->bindValue(":id_sujet", $id_sujet);
                $query->execute();              
                $user = $query->fetch();
                return $user;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

        function rechercher($id_sujet)
    {
        $sql="SELECT * from sujet WHERE nom like '%$search_value%' or id like '%$search_value%' or email like '%$search_value%'  ";
        $db = config::getConnexion();
        try
        {
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

   
           
}

?>