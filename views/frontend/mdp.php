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
   
   if (isset($_POST["emailL"])  ) 
    {
        if (!empty($_POST["emailL"]))

        {
           


            if($userC->verifEmail($_POST["emailL"]))
            {

              
               $_SESSION['emailOublie']= $_POST['emailL'];

               
                header('Location: Rmdp.php');
               
            
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





<!-- One "tab" for each step in the form: -->




  

<form method="POST" action="" enctype="multipart/form-data">
              
 <input name="emailL" id="email" placeholder="exemple@gmail.com..." type="email" class="form-control"   required/> <br>
   
    <div class="col-12 mb--20">
        
    
   <button type="submit" class="btn btn-black   mr-3"><span>Send</span></button>    </div>      
            </form> 
   


     


     <br> <br> <br>
    
    <?php include 'footer.php'; ?> 

<script src="js/plugins.js"></script>
<script src="js/ajax-mail.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>

<script src="js/custom.js"></script>



</body>


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:25:02 GMT -->
</html>






















