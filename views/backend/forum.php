<?php 
   
    require_once '../../controllers/utilisateurs/SujetFmC.php';
   
   require_once '../../controllers/utilisateurs/UtilisateurC.php';

   

    $error = "";
    $message ="";
    

      
      

      $affiche = new SujetC();
      $listeUsers=$affiche->affichersujet();
      
      

   
 
?>


<?php require './header.php'; ?>
    <!-- Side Navbar -->
    <?php require './sideNavBar.php'?>
    <?php require './topHeader.php';?>
    <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Forum</li>
          </ul>
        </div>
      </div>
       <br>

       


       <table class="table caption-top" id="myTable">
  <caption>Les sujets</caption>
  <thead>
    <tr>
      <th scope="col">id_sujet</th>
      <th scope="col">id_utilisateur</th>
      <th scope="col">Type</th>
      <th scope="col">Message</th>
      <th scope="col">Date_publication</th>
      <th scope="col">Reponse</th>
      <th scope="col">Supprimer</th>

    </tr>
     
  </thead>
  
      <?PHP
        foreach($listeUsers as $user)
        {

      ?>
        <tr>
          <td><?PHP echo $user['id_sujet']; ?></td>
          <td><?PHP echo $user['id_utilisateur']; ?></td>
          <td><?PHP echo $user['type']; ?></td>
          <td><?PHP echo $user['message']; ?></td>
          <td><?PHP echo $user['date_p']; ?></td>
          <td>
            <form method="POST" action="reponse.php">
              <input type="hidden" name="idUser" value="<?php echo $user['id_sujet']; ?>" >
              <input type="submit" name="Reponse" value="Voir reponse">            
            </form>            
          </td>
          <td>
            <form method="POST" action="supprimerF.php">
              <input type="hidden" name="id" value="<?PHP echo $user['id_sujet']; ?>" >
            <input type="submit" name="supprimer" value="supprimer" 
             style="border: none; color: green; background: none">
            
            </form>
          </td>
        </tr>
      <?PHP
        }
      ?>
                                      
</table>
<?php require './footer.php';?>