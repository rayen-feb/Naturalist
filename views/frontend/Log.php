<?php 
  require_once '../../controllers/utilisateurs/UtilisateurC.php';
 //Login

   
    $message ="";
      $userC = new UtilisateurC();
    if (isset($_POST["emailLog"]) &&  isset($_POST["passLog"])) 
    {
        if (!empty($_POST["emailLog"]) &&  !empty($_POST["passLog"]))

        {

            if($row=$userC->connexion($_POST["emailLog"], $_POST["passLog"]))
            {

             //$_SESSION['email'] = $_POST["emailLog"];//

              $_SESSION['id'] = $row['id'];

             $_SESSION['nom'] = $row["nom"];

             $_SESSION['pass'] = $row["pass"];

             $_SESSION['image'] = $row["image"];

             $_SESSION['type'] = $row["type"];


            //  avec l'email à l'intérieur

            if($_SESSION['type']==0)
            {
              header('Location: index.php');
            }
            else 
                 header('Location: ../backend/index.php');

          }
        }
        else
            echo "Renseignez un mot de passe ou email correct !";
    }
    

?>


