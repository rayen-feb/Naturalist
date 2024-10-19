<?php
   
    require_once '../../controllers/utilisateurs/UtilisateurCB.php';


       
      $error = "";
     $message ="";
    // create user
     
    // create an instance of the controller
      $userC = new UtilisateurC();      
    if (isset($_POST["nomReg"]) && isset($_POST["passReg"]) && isset($_POST["emailReg"]) && isset($_POST["typeReg"]) && isset($_FILES["imageReg"])  ) 
    {
        if (!empty($_POST["nomReg"]) && !empty($_POST["passReg"]) && !empty($_POST["emailReg"]) && !empty($_POST["typeReg"]) && !empty($_FILES["imageReg"]) )   
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
                      
                      $user = new Utilisateur(24, $_POST['nomReg'], $_POST['passReg'], $_POST['emailReg'],(int)$_POST['typeReg'] -1, $pathImage);
                
                     $userC->ajouterUtilisateur($user);
                     header('Location: afficheruser.php');
  
                    }
                  }                
           
           }
        
      
    }
   
    
   
    
    
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
            <li class="breadcrumb-item active">Ajouter utilisateur</li>
          </ul>
        </div>
      </div>
       <button><a href="afficheruser.php">Consulter la liste</a></button><hr>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
                   
                      <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="" method="post" enctype="multipart/form-data">
                                          <div class="mb-3">
                                            <input name ="nomReg" id="nom" type="text" placeholder=" Username" class="form-control" required/>
                                          </div>
                                          <div class="mb-3">
                                            <input  name="passReg"  placeholder="Password" type="password" id="password" class="form-control" required/>       </div>
                                            <div class="mb-3">
                                            <input name="emailReg" placeholder="name@example.com" type="email" id="email" required="*@*.*" class="form-control" />
                                               </div>
                                            
                                            <div class="mb-3">
                                    
                        <select class=" form-control" id="type" name="typeReg" required/>                                
                                <option value="1">Utilisateur</option> 
                                  <option value="2">Admin</option>    
                                
                            </select>
                                               </div>


                                               <div class="mb-3">
                                            <input type="hidden" name= "MAX_FILE_SIZE" value="5000000" />
                                            <input type="file"  name="imageReg" placeholder="Photo de profil" /> 
                                             </div>
                                            <div class="button-box">
                                                
                                               <button type="submit" button class="btn btn-primary" class="form-control"><span>Ajouter</span> </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>




        </div>
      </section>
           <?php require './footer.php';?>
   
