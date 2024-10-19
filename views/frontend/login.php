<?php
    require_once '../../controllers/utilisateurs/UtilisateurC.php';
    include_once 'Log.php';


       
      $error = "";
     $message ="";
    // create user
     
    // create an instance of the controller
      $userC = new UtilisateurC();      
    if (isset($_POST["nomReg"]) &&  isset($_POST["passReg"]) && isset($_POST["emailReg"]) && isset($_POST['typeReg']) &&isset($_FILES["imageReg"])  ) 
    {
        if (!empty($_POST["nomReg"]) && !empty($_POST["passReg"]) && !empty($_POST["emailReg"]) && !empty($_POST['typeReg']) && !empty($_FILES["imageReg"]) )    
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
                      $localFile = 'images/';
                      $pathImage = $localFile . strtolower(str_replace(' ', '',$_POST["nomReg"]) . '.' . $file['extension']);
                      move_uploaded_file($_FILES['imageReg']['tmp_name'], $pathImage);
                      
                      $user = new Utilisateur(1, $_POST['nomReg'], $_POST['passReg'], $_POST['emailReg'],$_POST['typeReg'], $pathImage);

                     

                

                   ini_set("SMTP","smtp.gmail.com");
                   ini_set("sendmail_from","naturalist2a6@gmail.com");
                   ini_set("smtp_port",587);
                   $subject = "Confirmation d'Inscription";
                   $message = 'Cher '.$_POST['nomReg'].',
                               Vous etes desormais inscrit dans notre site web Naturalia';
                   $head = 'From:naturalist2a6@gmail.com' . "\r\n" .
                              'Reply-To: $email' . "\r\n" .
                              'X-Mailer: PHP/' . phpversion();
                  if(mail($_POST['emailReg'], $subject, $message, $head))
                     {
                     echo 'Email envoyé avec succès à '.$_POST['emailReg'].' ...';
                     }
                   else 
                     {
                      echo "Échec de l'envoi de l'email...";
                     }
         
                              
                     $userC->ajouterUtilisateur($user);
                     header('Location: index.html');
  
                    }
                  }                
           
           }
        else
       ;$error = "Missing information";
    }
  
    
    
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from htmldemo.hasthemes.com/minky-preview/minky/blog.phpl by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:28:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
  <?php include 'head.php'; ?>

    <body>
        <!-- Header Section Start From Here -->
       <?php include 'header.php'; ?>
        <!-- Header Section End Here -->    

        <!-- Mobile Header Section Start -->
  

    <!-- Search Category Start -->
    
  <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-content">
                            <ul class="nav">
                                <li><a href="index.html">Home</a></li>
                                <li>Login / Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Breadcrumb Area End-->
    <!-- login area start -->
    <div class="login-register-area pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-toggle="tab" href="#lg1">
                                <h4>login</h4>
                            </a>
                            <a data-toggle="tab" href="#lg2">
                                <h4>register</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="#" method="post">
                                            <input name="emailLog" type="email" class="form-control"  placeholder="name@example.com" required="" />
                                            <input name="passLog" type="password" class="form-control"  placeholder="Your password..." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox" />
                                                    <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                    <a href="mDpasse.php">Forgot Password?</a>
                                                </div>
                                                <button type="submit" class="form-control"><span>Login</span></button>
                                            </div>
                                        </form>
                                             
                                     

                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <input name ="nomReg" id="nom" type="text" placeholder="Username" class="form-control" required/>

                                            <input  name="passReg" name="password" placeholder="Password" type="password" id="password" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>   
                                                
                                            <input name="emailReg" placeholder="name@example.com" type="email" id="email" required="*@*.*" class="form-control" />
                                            <input type="hidden" name= "MAX_FILE_SIZE" value="5000000" />
                                            <input type="file"  name="imageReg" placeholder="Photo de profil" />  
                                            <div class="button-box">

                                                <button type="submit" class="form-control"><span>Register</span> </button>
                                            </div>
                                        </form>
                                    </div>
                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login area end -->
         <?php include 'bas.php'; ?>
            <!-- Brand area end -->

        <!-- Footer Area Start --> 
       <?php include 'footer.php'; ?>
        <!-- Footer Area End -->
        <!-- JS
============================================ -->

            <!-- Vendors JS -->
        <!-- <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
        <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
        <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script> -->

            <!-- Plugins JS -->
         <!-- <script src="assets/js/plugins/jquery-ui.min.js"></script>
        <script src="assets/js/plugins/slick.js"></script>
        <script src="assets/js/plugins/countdown.js"></script>
        <script src="assets/js/plugins/scrollup.js"></script>
        <script src="assets/js/plugins/ripples.js"></script>
        <script src="assets/js/plugins/elevateZoom.js"></script></script> -->

        <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <script src="assets/js/vendor/vendor.min.js"></script>
        <script src="assets/js/plugins/plugins.min.js"></script>

        <!-- Main Activation JS -->
        <script src="assets/js/main.js"></script>


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

<!-- Mirrored from htmldemo.hasthemes.com/minky-preview/minky/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:27:53 GMT -->
</html>
