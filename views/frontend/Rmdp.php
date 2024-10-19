<?php 

include '../../controllers/produits/cathegorieProd.php';
include '../../controllers/produits/animalProdController.php';
include '../../controllers/produits/produitsController.php';
include '../../controllers/panier&commande/PanierC.php';
include '../../public/util/processPanier.php';

$cathProd = new CathProdController();
$animalProd = new AnimalProdController();
$prod = new ProduitCtrl();
$fonctions = new PanierCtrl;

//$page = $_GET['page'];
//$next = $page + 1;
//$previous = $page-1;
$tab_univ=array();
$temoin2=$fonctions->getAllProd2();
$tab_univ=$temoin2;
$url="shop-left-sidebar.php"; 

//calcul total du panier
$total1=0;
foreach ($tab_univ as $key => $produit)
{
  $total1=$total1+($produit['quantity']*$produit['prix']);
}

?>

<?php
require_once '../../controllers/utilisateurs/UtilisateurC.php';

   $userC = new UtilisateurC();

   if(isset($_POST['Nouveau']) && isset($_POST['confirmNouveau']) )
   {
      if(!empty($_POST['Nouveau']) && !empty($_POST['confirmNouveau']))
      {

      


 if($userC->modifierMotDePasse($_SESSION['emailOublie'],$_POST['Nouveau']))
               {
              
                 header('Location: login-register.php');

               }
               
            

      }

   }

    

?>



<!DOCTYPE html>
<html lang="en">



<?php include 'head.php'; ?>
 

<body class="">
  <div class="site-wrapper">
  
<?php include 'tete.php'; ?>
                


<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">mdp</li>
    </ol>
  </div>
</nav>
<br> <br>

<div>
<form method="post" action=""  onSubmit="return verify(this.Nouveau, this.confirmNouveau)" enctype="multipart/form-data">



<div class="col-md-12 col-12 mb--20">
									
	<input class="mb-0" type="password" name="Nouveau"
									placeholder="Your password..." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
								</div>
<div class="col-md-12 col-12 mb--20">
									
	<input class="mb-0" type="password" name="confirmNouveau"
									placeholder="Confirm your password..." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
								</div>

 <button type="submit" class="btn btn-black   mr-3"><span>Send</span></button>          
            </form> 

</div>
<br>

    <?php include 'footer.php'; ?> 

<script src="js/plugins.js"></script>
<script src="js/ajax-mail.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>

<script src="js/custom.js"></script>


<script type="text/javascript">
<!-- Debut

var fieldalias="mot de passe"


function verify(element1, element2)

 {
  var passed=false


   if (element1.value=='')

   {
    alert("Veuillez entrer votre "+fieldalias+" dans le premier champ!")

    element1.focus()

   }

   else if (element2.value=='')
   {
    alert("Veuillez confirmer votre "+fieldalias+" dans le second champ!")
    element2.focus()
   }

   else if (element1.value!=element2.value)

   {
    alert("Les deux "+fieldalias+" ne condordent pas")

    element1.select()

   }

     <script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

   else
   passed=true
   return passed
 }
// fin du script -->
</script>

</body>


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:25:02 GMT -->
</html>
