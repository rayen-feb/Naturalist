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
    require_once '../../controllers/utilisateurs/reponseSC.php';


    require_once '../../controllers/utilisateurs/UtilisateurC.php';

    $userC = new UtilisateurC();

    $commentaireC = new RsujetC();


   if (isset($_POST["id_sujet"]) &&  isset($_POST["reponseR"]) &&  isset($_SESSION['id'])) 
    {
   if(!empty($_SESSION['id']) && !empty($_POST["id_sujet"]) && !empty($_POST["reponseR"]))
        {      
 
 $commentaire= new Rsujet(1,(int) $_POST['id_sujet'],(int) $_SESSION['id'], $_POST['reponseR'],date("Y-m-d H:i:s"));          

          $commentaireC->ajouterRsujet($commentaire);


         }

     }

   
            
 ?>

<!DOCTYPE html>
<html lang="en">


<?php include 'head.php'; ?>

<body class="">
  

<?php include 'tete.php'; ?>

<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Forum</li>
    </ol>
  </div>
</nav>

  <br> <br>



<button><a href="forum.php">Consulter la liste des sujets</a></button><hr>
       
<?php 
  
  $affichage=  new RsujetC();
  
  $listeC = $affichage->afficherRsujet($_POST['id_sujet']);

   

?>


 

<?PHP
        foreach($listeC as $forum)
        {
      ?>

      <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                <div class="card mb-2">
                    <div class="card-body p-2 p-sm-3">
                        <div class="media forum-item">
                            <a  data-toggle="" data-target=".forum-content"><img src="<?php 
                                  echo $userC->recupererUtilisateur1($forum['id_utilisateur'])['image']; ?>" class="mr-3 rounded-circle" width="50" alt="User" /></a>
                            <div class="media-body">

                                <h6><a  data-toggle="" data-target=".forum-content" class="text-body"> 
                                  <?php 
                                  echo $userC->recupererUtilisateur1($forum['id_utilisateur'])['nom']; ?>
                                    
                                  </a></h6><br />
                                <p class="text-secondary">
                                     <?php echo $forum['reponse']; ?>
                                </p>
                                <p class="text-muted"><a href="javascript:void(0)"> Repondu le :</a>  <span class="text-secondary font-weight-bold"><?php echo $forum['date_R']; ?></span></p>
                            </div>
                           
                        </div>
                    </div>
                </div>
              </div>
        
      <?PHP
        }
      
      ?>
  

   


               
  <div class="container">
  <form action="" method="post">
    <div class="row">      
      <div class="col-75" >
        <textarea id="reponse" name="reponseR" placeholder="Commenter..." style="height:200px" ></textarea>
      </div>
      <input type="hidden" name="id_sujet" value="<?php echo $_POST['id_sujet']; ?>">
    </div>
    <div class="row"><br>
      <input type="submit" value="Repondre">
    </div>
  </form>
</div>
                     
             
    
     


     <br> <br> <br>
    
    <?php include 'footer.php'; ?> 

<script src="js/plugins.js"></script>
<script src="js/ajax-mail.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>

<script src="js/custom.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:25:02 GMT -->
</html>