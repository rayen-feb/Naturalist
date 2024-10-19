<?php 
     
     require_once '../../controllers/utilisateurs/reponseSC.php';
    require_once '../../controllers/utilisateurs/UtilisateurC.php';
    require_once '../../controllers/utilisateurs/SujetFmC.php';
 
   
     $sujet = new SujetC();
?>


<?php require './header.php'; ?>
    <!-- Side Navbar -->
    <?php require './sideNavBar.php'?>
    <?php require './topHeader.php';?>


  
  <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Reponse</li>
          </ul>
        </div>
      </div>
      <br>
<?php 
  
  $affichage=  new RsujetC();
  if(isset($_POST["idUser"]))
  $listeC = $affichage->afficherRsujet($_POST['idUser']);

   

?>      


       <table class="table caption-top" id="myTable">
  <caption>Liste des reponses</caption>
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">id_sujet</th>
      <th scope="col">id_utilisateur</th>
      <th scope="col">Reponse</th>
      <th scope="col">Date reponse</th>
      <th scope="col">Supprimer</th>

    </tr>
     
  </thead>
  
      <?PHP
        foreach($listeC as $user)
        {
      ?>
        <tr>
          <td><?PHP echo $user['id']; ?></td>
          <td><?PHP echo $user['id_sujet']; ?></td>
          <td><?PHP echo $user['id_utilisateur']; ?></td>
          <td><?PHP echo $user['reponse']; ?></td>
          <td><?PHP echo $user['date_R']; ?></td>
            
          <td>
            <form method="POST" action="supprimerR.php">
              <input type="hidden" name="id" value="<?PHP echo $user['id']; ?>" >
            <input type="submit" name="supprimer" value="supprimer" 
             style="border: none; color: green; background: none">
            
            </form>
          </td>
        </tr>
      <?PHP
        }
      ?>
                                      
</table>

<button><a href="forum.php">Retour à la liste</a></button><hr>


      <?php require './footer.php';?>