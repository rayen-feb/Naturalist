<?php  
  
    require_once '../../controllers/utilisateurs/UtilisateurCB.php';
   


       
      $error = "";
     $message ="";
    // create user
     
    // create an instance of the controller
      $userC = new UtilisateurC();   
      $imageReal = "";
      if(isset($_POST["imagePrec"]))
        $imageReal = $_POST["imagePrec"];
   if (isset($_POST["id"]) && isset($_POST["nomReg"]) &&  isset($_POST["passReg"]) && isset($_POST["emailReg"]) &&  isset($_POST['typeReg']) ) 
    {
        if (!empty($_POST["id"]) &&!empty($_POST["nomReg"]) && !empty($_POST["passReg"]) && !empty($_POST["emailReg"]) && !empty($_POST['typeReg']) )    
             {
                if(isset($_FILES["imageReg"]))
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
                      $imageReal = $pathImage;
                    }
                   
                  } 
                         
                } 
                $user = new Utilisateur($_POST['id'], $_POST['nomReg'], $_POST['passReg'], $_POST['emailReg'],(int) $_POST['typeReg'] -1, $imageReal);
                 
                  $userC->modifierUtilisateur($user);
                     header('Location: afficheruser.php');           
           }
        else
       $error = "Missing information";
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
            <li class="breadcrumb-item active">Modifier utilisateur</li>
          </ul>
        </div>
      </div>
      <section>
        <button><a href="afficheruser.php">Retour à la liste</a></button><hr>
            <div id="error">
            <?php echo $error; ?>
        </div>
    
    <?php
      if (isset($_POST['idUser'])){

        $user = $userC->recupererUtilisateur1((int)$_POST['idUser']);
        
    ?>

        <div class="container-fluid">
          <!-- Page Header-->
             
               
 
        <div class="login-modifier-form">
                 <form action="" method="POST" enctype="multipart/form-data">
                                             
                                           
                                            
    <div class="mb-3">
   <input name ="id" id="id" type="hidden"  class="form-control"  value="<?php echo $user['id']; ?>"    />
    </div>                                  
    <div class="mb-3">
   <input name ="nomReg" id="nom" type="text" placeholder="Username" maxlength="30" class="form-control"  value="<?php echo $user['nom']; ?>" />
    </div>
  
    <div class="mb-3">
   <input  name="passReg"  placeholder="Password..." type="password" id="password" maxlength="10" class="form-control" value ="<?php echo $user['pass']; ?>" >
   </div>

    <div class="mb-3">
    <input name="emailReg" placeholder="name@example.com..." type="email" id="email" required="*@*.*" maxlength="100" class="form-control" value ="<?php echo $user['email']; ?>" >
    </div>

     <div class="mb-3">
  

    <select class=" form-control" id="type" name="typeReg" value="<?php echo $user['type']; ?>" required/>                                
                                <option value="1">Utilisateur</option> 
                                  <option value="2">Admin</option>    
                                
                            </select>
    </div>
    
    <div class="mb-3">
      <input type="hidden" name='imagePrec' value="<?php echo $user['image']; ?>" />
    <img src="<?php echo $user['image']; ?>" width="250" height="250" />
   <input type="hidden" name= "MAX_FILE_SIZE" value="5000000" value="<?php echo $user['image']; ?>" />  
   <input type="file"  name="imageReg" placeholder="Photo de profil..." />     
    </div>

    <div class="button-box">
             <button class="btn btn-primary" type="submit">Modifier</button></div>                            
                  
               </form>
    </div>


  <?php 
   } 
?>







        </div>
      </section>
       <?php require './footer.php';?>