<?php
	require_once "../../config.php";
	require_once "../../models/utilisateurs/Utilisateur.php";
	

	class UtilisateurC 
	{
		
		function ajouterUtilisateur($utilisateur)
		{
			$sql="INSERT INTO utilisateur (nom, pass, email, type, image) 
			VALUES(:nom, :pass, :email, :type, :image)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->bindValue(':nom', $utilisateur->getNom());
				$query->bindValue(':pass', $utilisateur->getPassword());
				$query->bindValue(':email', $utilisateur->getEmail());
				$query->bindValue(':type', $utilisateur->getType());
				$query->bindValue(':image', $utilisateur->getImage());
			
				$query->execute();			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherUtilisateurs()
		{
			
			$sql="SELECT * FROM utilisateur";
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

		function supprimerUtilisateur($id)
		{
			$sql="DELETE FROM utilisateur WHERE id= :id";
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
	
		function modifierUtilisateur($Utilisateur)
		{

			$sql="UPDATE utilisateur SET nom=:nom, pass= :pass, email= :email, image= :image WHERE id = :id";
			$db = config::getConnexion();
			try
			 {			
				$query = $db->prepare($sql);
				$query->bindValue(':id', $Utilisateur->getId());
				$query->bindValue(':nom', $Utilisateur->getNom());
				$query->bindValue(':pass', $Utilisateur->getPassword());
				$query->bindValue(':email', $Utilisateur->getEmail());
				$query->bindValue(':image', $Utilisateur->getImage());
			
				$query->execute();
			} 
			catch (PDOException $e) 
			{
				$e->getMessage();
			}



		} 



     function modifierMotDePasse($email, $password)
		{

			$sql="UPDATE utilisateur SET pass= :pass WHERE email = :email";
			$db = config::getConnexion();
			try
			{			
				$query = $db->prepare($sql);	
				$query->bindValue(':email', $email);		
				$query->bindValue(':pass', $password);			
				return $query->execute();
			} 
			catch (PDOException $e) 
			{
				$e->getMessage();
			}

		} 

		

		function recupererUtilisateur1(int $id)
		{
			$sql="SELECT * from utilisateur where id=:id";
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


		function verifEmail($email)
		{
			$sql="SELECT * from utilisateur where email=:email";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->bindValue(":email", $email);
				$query->execute();				
				return count($query->fetchALL());
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}		
	


		function connexion($email,$password)
		{
			$sql="SELECT * FROM utilisateur WHERE email='".$email."' and pass ='".$password."'";
			$db = config::getConnexion();
			try
			{
				$query=$db->prepare($sql);
				$query->execute();
				$count=$query->rowCount();
				if($count==0)
				{
					$message="pseudo ou le mot de passe est incorrect";
				}
					else
					{
						$x=$query->fetch();
						
					}
			}
			catch (Exception $e){ 
				$message = " ".$e->getMessage();
			}
			return $x;
		}


		function rechercherUtilisateur($id)
	{
		$sql="SELECT * from utilisateur where nom like '%$search_value%' or id like '%$search_value%' or email like '%$search_value%' ";
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

	 function trierEvents(){
        $sql="SELECT * from utilisateur ORDER BY nom ASC";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
			
		
	}
