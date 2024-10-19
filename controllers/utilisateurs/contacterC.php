<?php
	require_once "../../config.php";
	require_once "../../models/utilisateurs/contacter.php";
	

	class ContactC
	{
	
		function ajouterContact($Contact)
		{
			
		$sql="INSERT INTO contact (nom, email, sujet, message) VALUES(:nom, :email, :sujet, :message)";
			$db = config::getConnexion();
			try
			{
				$query = $db->prepare($sql);
				$query->bindValue(':nom', $Contact->get_nom());
				$query->bindValue(':email', $Contact->get_email());
				$query->bindValue(':sujet', $Contact->get_sujet());
				$query->bindValue(':message', $Contact->get_message());
			
				$query->execute();		
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}


		   function repondreContact($Contact)
        {

  $sql="UPDATE contact SET  nom=:nom, email=:email, sujet=:sujet, message=:message WHERE id =:id";
            $db = config::getConnexion();
            try
             {          
                $query = $db->prepare($sql);
               $query->bindValue(':nom', $Contact->get_nom());
				$query->bindValue(':email', $Contact->get_email());
				$query->bindValue(':sujet', $Contact->get_sujet());
				$query->bindValue(':message', $Contact->get_message());
            
                $query->execute();
            } 
            catch (PDOException $e) 
            {
                $e->getMessage();
            }


        }

		function afficheContact()
		{
			
			$sql="SELECT * FROM contact";
			$db = config::getConnexion();
			//var_dump($db);
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerContact($id)
		{
			$sql="DELETE FROM contact WHERE id= :id";
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

		function recupererContact(int $id)
		{
			$sql="SELECT * from contact where id=:id";
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
	

	}		      
    

?>