<?PHP
  require_once "../../controllers/utilisateurs/contacterC.php";
  

  $userA=new ContactC();
  $listeUsers=$userA->afficheContact();

?>


 <?php require 'header.php'; ?>
    <!-- Side Navbar -->
    <?php require 'sideNavBar.php'?>
    <?php require 'topHeader.php';?>
            <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Contact</li>
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->

      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

          <table class="table caption-top" id="myTable" >
  <caption>Liste des personnes nous ayant contacté</caption>
  <thead>
    <tr>
      <th>id</th>
      <th>Nom</th>
      <th >Email</th>
      <th >Sujet</th>
      <th >Message</th>
      <th >Supprimer</th>

    </tr>
  </thead>
   
  <?PHP
        foreach($listeUsers as $user2){
      ?>
        <tr>
          <td><?PHP echo $user2['id']; ?></td>
          <td><?PHP echo $user2['nom']; ?></td>
          <td><?PHP echo $user2['email']; ?></td>
          <td><?PHP echo $user2['sujet']; ?></td>
          <td><?PHP echo $user2['message']; ?></td>
         
          <td>
            <form method="POST" action="supprimerContact.php">
              <input type="hidden" name="id" value="<?PHP echo $user2['id']; ?>" >
            <input type="submit" name="supprimer" value="supprimer" 
             style="border: none; color: green; background: none">
            
            </form>
          </td>
        </tr>
      <?PHP
        }
      ?>
                                      
</table>

        </div>
      </section>
    

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