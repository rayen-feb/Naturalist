<?php
 
  require_once "../../controllers/utilisateurs/UtilisateurCB.php";
  //include "supprimeruser.php";

  $UtilisateurC=new UtilisateurC();
  $listeUsers=$UtilisateurC->afficherUtilisateurs();

?>

<!DOCTYPE html>
<html>
 <?php require './header.php'; ?>
    <!-- Side Navbar -->
    <?php require './sideNavBar.php'?>
    <?php require './topHeader.php';?>


 <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Utilisateurs</li>
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
           
               
          <table class="table caption-top" id="myTable">
  <caption>Liste des utilisateurs</caption>
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Mot de passe</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col">Type</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>

    </tr>
     <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
  </thead>
  
      <?PHP
        foreach($listeUsers as $user){
      ?>
        <tr>
          <td><?PHP echo $user['id']; ?></td>
          <td><?PHP echo $user['nom']; ?></td>
          <td><?PHP echo $user['pass']; ?></td>
          <td><?PHP echo $user['email']; ?></td>
          <td><?PHP echo $user['image']; ?></td>
          <td><?PHP echo $user['type']; ?></td>
          <td>
            <form method="POST" action="modifieruser.php">
              <input type="hidden" name="idUser" value="<?php echo $user['id']; ?>" >
              <input type="submit" name="modifier" value="modifier">            
            </form>            
          </td>
          <td>
            <form method="POST" action="supprimeruser.php">
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

  <button><a href="ajouterUser.php">Ajouter utilisateur</a></button><hr>


</div>
      <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
      <?php require './footer.php';?>
            <!-- Breadcrumb-->
     
        
     

   

  


  