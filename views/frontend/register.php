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


    $error = "";
     $message ="";
    // create user
     
    // create an instance of the controller
      $userC = new UtilisateurC();      
    if (isset($_POST["nomReg"]) &&  isset($_POST["passReg"]) && isset($_POST["emailReg"]) &&  isset($_POST["typeReg"])) 
    {
        if (!empty($_POST["nomReg"]) && !empty($_POST["passReg"]) && !empty($_POST["emailReg"]) && !empty($_POST["typeReg"]))    
             {
                  $textFile = ['png', 'jpg','jpeg','bmp'];
                  $text = 0;
                  $file = pathinfo($_FILES['imageReg']['name']);
                  if(isset($file['extension']))
                  {
                    if (isset($file['extension'], $textFile) && $_FILES['imageReg']['size'] <= 5000000)
                    $text = 1;
                    if($text)
                    {
                      $localFile = '../../images/';
                      $pathImage = $localFile . strtolower(str_replace(' ', '',$_POST["nomReg"]) . '.' . $file['extension']);
                      move_uploaded_file($_FILES['imageReg']['tmp_name'], $pathImage);
                      
                      $user = new Utilisateur(100, $_POST['nomReg'], $_POST['passReg'], $_POST['emailReg'],(int) $_POST['typeReg'] -1, $pathImage);

                     

                

                       ini_set("SMTP","smtp.gmail.com");
                       ini_set("sendmail_from","naturalist2a6@gmail.com");
                       ini_set("smtp_port",3306);
                       $subject = "Confirmation d'Inscription";
                       $message = 'Cher '.$_POST['nomReg'].',
                                   Vous etes desormais inscrit dans notre site web Naturalia';
                       $head = 'From:naturalist2a6@gmail.com' . "\r\n" .
                                  'Reply-To: $email' . "\r\n" .
                                  'X-Mailer: PHP/' . phpversion();
                      (mail($_POST['emailReg'], $subject, $message, $head));
                       
                         $userC->ajouterUtilisateur($user);
                         $_SESSION['nom']  = $_POST["nomReg"];
                        
                        

            
                        
            
                         $_SESSION['image'] = $_POST["imageReg"];
            
            
                         header('Location: index.php');
                              
                       
                    }
                  }          
           
           }
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
      <li class="breadcrumb-item active" aria-current="page">Register</li>
    </ol>
  </div>
</nav>


<section class="contact-page-section overflow-hidden">

	 <main class="page-section pb--10 pt--50">
		<div class="container">
			<header class="entry-header">
				<h1 class="entry-title titre1">S'INSCRIRE</h1>
			</header>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
					<form action="" class="form-size1" method="post" enctype="multipart/form-data">
						<div class="login-form">
							<div class="row">
								<div class="col-md-12 col-12 mb--20">
									<label>Username</label>
									<input type="text" class="mb-0" name ="nomReg" id="nom"  placeholder="Username" required/>
								</div>
								<div class="col-md-12 col-12 mb--20">
									<label>Email Address</label>
									<input type="email" class="mb-0" name="emailReg" placeholder="name@example.com"  id="email" required="*@*.*"/>
								</div>
								<div class="col-12 mb--20">
									<label>Password</label>
									<input type="password" class="mb-0" name="passReg" placeholder="Password"  id="password" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
								</div>
                               
                <input type="hidden" class="mb-0" name ="typeReg" id="type"  placeholder="type" value="1" required/>


                <div class="col-12 mb--20">
                  <label>Image</label>
                  <input type="" name= "MAX_FILE_SIZE" value="5000000" />
                <input type="file"  name="imageReg" /> 
                </div>
							

							<p> Vous avez un compte? <a href="login-register.php" class="pass-lost mt-3">Sign in</a></p>
						</div>
	           <button type="submit" class="btn btn-black   mr-3"><span>Register</span></button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</main>

   
</section>

  
  
 <?php include 'footerContent.php'; ?> 

<script src="js/plugins.js"></script>
<script src="js/ajax-mail.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
<script src="js/autocompleteSearch.js" type="text/javascript"></script>

<script src="js/custom.js"></script>
  
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


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:25:02 GMT -->
</html>