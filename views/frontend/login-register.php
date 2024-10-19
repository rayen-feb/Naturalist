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
foreach ($tab_univ as $key => $produit){
  $total1=$total1+($produit['quantity']*$produit['prix']);
}

?>

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




<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:23:39 GMT -->
<?php include 'head.php'; ?>

<body class="">
	<div class="site-wrapper">
	
<?php include 'tete.php'; ?>
		


<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Login</li>
		</ol>
	</div>
</nav>
    <!--=============================================
    =            Login Register page content         =
    =============================================-->

    <main class="page-section pb--10 pt--50">
		<div class="container">
			<header class="entry-header">
				<h1 class="entry-titl titre1">SE CONNECTER</h1>
			</header>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
					<!-- Login Form s-->
					<form action="#" method="post" class="form-size1" >

						<h4 class="login-title">Login</h4>
						<div class="login-form">
							<div class="row">
								<div class="col-md-12 col-12 mb--20">
									<label>email address *</label>
									<input class="mb-0" type="email" name="emailLog"
									placeholder="name@example.com" required/>
								</div>
								<div class="col-12 mb--20">
									<label>Password</label>
									<input class="mb-0" type="password" name="passLog" placeholder="Your password..."
									pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
								</div>
								<div class="col-md-12">
									<div class="d-flex align-items-center flex-wrap">
										
										<div class="d-inline-flex align-items-center">
											<input type="checkbox" id="accept_terms" class="mb-0 mr-1">
											
											<label for="accept_terms" class="mb-0 font-weight-400">Remember Me</label>
										</div>
									</div>
									<p><a href="mdp.php" class="pass-lost mt-3">Lost your password?</a></p>
									<p>Vous n'avez pas de compte? <a href="register.php" class="pass-lost mt-3">Register</a></p>
								</div>

							</div>
							<button type="submit" class="btn btn-black   mr-3"><span>Login</span></button>
						</div>

					</form>
				</div>
				
			</div>
		</div>
	</main>

	<!--=====  End of Login Register page content  ======-->
  
  
    
<?php include_once 'footerContent.php'; ?>
<script src="js/plugins.js"></script>
<script src="js/ajax-mail.js"></script>
<script src="js/custom.js"></script>
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

</body>


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:24:41 GMT -->
</html>