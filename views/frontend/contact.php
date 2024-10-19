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

 require_once '../../controllers/utilisateurs/contacterC.php';


       
      $error = "";
     $message ="";
    
     
      $visiteurC = new ContactC();

    if(
        isset($_POST['nomC']) &&
        isset($_POST['emailC']) && 
        isset($_POST['sujetC']) && 
        isset($_POST['messageC']) )
    {
        if(

            !empty($_POST['nomC']) && 
            !empty($_POST['emailC']) && 
            !empty($_POST['sujetC']) && 
            !empty($_POST['messageC']) )    
             {

                 ini_set("SMTP","smtp.gmail.com");
                 ini_set("sendmail_from", $_POST['emailC']);
                 ini_set("smtp_port",3306);
                 $subject = $_POST['sujetC'];
                 $message = ' '.$_POST['messageC'].'  ';

                       $head = 'From:'.$_POST['emailC'].' ' . "\r\n" .
                                  'Reply-To: '.$_POST['emailC'].'' . "\r\n" .
                                  'X-Mailer: PHP/' . phpversion();
                      if(mail("naturalist2a6@gmail.com", $subject, $message, $head))
                         {
                        
        $visiteur = new Contact(20, $_POST['nomC'], $_POST['emailC'], $_POST['sujetC'], $_POST['messageC'] );

                 $visiteurC->ajouterContact($visiteur);
                 header('Location: index.php');
                         }
                       else 
                         {
                          echo "Échec de l'envoi de l'email...";
                         }
 
                                            
             }
    
    }                
           
                  

                      



 ?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:23:39 GMT -->
<?php include 'head.php'?>

<body class="">
 
 <?php include 'tete.php'?>
					
<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Contact</li>
    </ol>
  </div>
</nav>


<section class="contact-page-section overflow-hidden">
    <div class="row">
      <div class="col-md-6">
        <div class="ct-single-side">
          <div class="ct-section-title">
            <h2>TELL US YOUR PROJECT</h2>
          </div>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="text" class="form-control" name="nomC" id="nom"  placeholder="Name..."  required/>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input name="sujetC"  id="sujet" placeholder="Subject..." type="text"  class="form-control" required/>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <input name="emailC" id="email" placeholder="exemple@gmail.com..." type="email" class="form-control" required/>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <textarea name="messageC" id="message" placeholder="Your Message*" style="width: 100%"></textarea>
                </div>
              </div>
              
             
              <div class="submit-btn">
                  <button type="submit" class="btn btn-black">Send Mail</button>
                </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6 bg-gray">
        <div class="ct-single-side">
          <div class="section-title mb--20">
            <h2>CONTACT US</h2>
          </div>
          <div class="contact-right-description">
            <article class="ct-article">
              <h3 class="d-none sr-only">blog-article</h3>
              <p> Nous sommes a votre écoute pour toute préocupation, toute 
              demande d'information et toute documentation</p>
            </article>
            <ul class="contact-list mb--35">
              <li><i class="fas fa-fax"></i>Address : Ariana Tunisie/2083 Tunis</li>
              <li><i class="fas fa-phone"></i>24 858 345</li>
              <li><i class="far fa-envelope"></i>naturalist2a6@gmail.com</li>
            </ul>
            <div class="working-hour">
              <h3>Working hours</h3>
              <p> <strong>Monday – Saturday</strong>: 08AM – 22PM</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

  
  
     <?php require './footerContent.php'; ?>
    </div>
    <script src="js/plugins.js"></script>
    <script src="js/ajax-mail.js"></script>
   
    <script type="text/javascript" src="./js/autocompleteSearch.js"></script>
    <script src="./js/filterSystem.js" type="text/javascript"></script>

<script src="js/custom.js"></script>
</body>


<!-- Mirrored from demo.hasthemes.com/petmark-v5/petmark/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Apr 2021 06:25:02 GMT -->
</html>
