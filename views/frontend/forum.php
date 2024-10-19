<?php 

// include '../../controllers/produits/cathegorieProd.php';
// // // include '../../controllers/produits/animalProdController.php';
// include '../../controllers/produits/produitsController.php';
// include '../../controllers/panier&commande/PanierC.php';
// include '../../public/util/processPanier.php';

// // $cathProd = new CathProdController();
// // $animalProd = new AnimalProdController();
// $prod = new ProduitCtrl();
// // // $fonctions = new PanierCtrl;

// //$page = $_GET['page'];
// //$next = $page + 1;
// //$previous = $page-1;
// $tab_univ=array();
// $temoin2=$fonctions->getAllProd2();
// $tab_univ=$temoin2;
// $url="shop-left-sidebar.php"; 

// //calcul total du panier
// $total1=0;
// foreach ($tab_univ as $key => $produit){
//   $total1=$total1+($produit['quantity']*$produit['prix']);
// }

include '../../controllers/produits/cathegorieProd.php';
include '../../controllers/produits/animalProdController.php';

$cathProd = new CathProdController();
$animalProd = new AnimalProdController();

?>



<?php 
   
    require_once '../../controllers/utilisateurs/SujetFmC.php';
   
   require_once '../../controllers/utilisateurs/UtilisateurC.php';
   
    $userC = new UtilisateurC();

    $error = "";
    $message ="";
    

      
      $formC = new SujetC();

      $affiche = new SujetC();
      $listeUsers=$affiche->affichersujet();
   
    if (isset($_SESSION['id']) && isset($_POST["typeRo"]) && isset($_POST["messageRo"])) 
    {
        if (!empty($_SESSION['id']) && !empty($_POST["typeRo"]) && !empty($_POST["messageRo"]))
        {
          
 $form = new Sujet(66,(int) $_SESSION['id'], $_POST['typeRo'], $_POST['messageRo'],date("Y-m-d H:i:s"));
          if($formC->ajoutersujet($form))
           
            header("Refresh:0");
        }
    }
 
?>

<?php require './header.php'; ?>

<!-- Modal -->

<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Forum</li>
        </ol>
    </div>
</nav>

<main class="section-padding shop-page-section">
<div class="container1 row">
    <?php
        foreach($listeUsers as $sujet)
        {   
      ?>
    
        <ul class="list-group ">
        
        <li class="list-group-item">
            <div class="col-sm-12">
            <img  src="<?php echo $userC->recupererUtilisateur1($sujet['id_utilisateur'])['image']; ?>"
                class="mr-3 rounded-circle" width="50" alt="User" />
                <span class="text-secondary font-weight-bold"><?php echo $sujet['date_p']; ?></span>
            </div>
            <div class="col-sm-8 right">
                <h4><a data-toggle="" data-target=".forum-content" class="text-body">
                        <?php echo $userC->recupererUtilisateur1($sujet['id_utilisateur'])['nom']; ?></a></h4>
                <p  class="text-body">
                    <?php echo $sujet['type']; ?></p>
                <p class="text-secondary">
                    <?php echo $sujet['message']; ?>
                </p>
            </div>
            <div class="col-sm-12">
            <form method="post" action="discussion.php">
                <input type="hidden" name="id_sujet" value="<?PHP echo $sujet['id_sujet']; ?>" />
                <button type="submit" name="Repondre" class="btn btn-black   mr-3"><span>REPONDRE</span></button>
            </form>
            </div>
        </li>
    </ul>
    <?php
        }
      ?>
</div>

    <section class="contact-page-section overflow-hidden">
        <button class="btn btn-black   mr-3" type="button" data-toggle="modal" data-target="#threadModal"
            style="width:30%">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-plus mr-2">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
            NOUVELLE DISCUSSION
        </button><br /><br />



        <!-- Forum List -->


        <!-- New Thread Modal -->
        <div class="modal fade" id="threadModal" tabindex="-1" aria-labelledby="threadModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form action="" method="POST">
                        <div class="modal-header d-flex align-items-center bg-primary text-white">
                            <h6 class="modal-title mb-0" id="threadModalLabel">New Discussion</h6>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <select class=" form-control" id="type" name="typeRo" style="width:77%">
                                    <option value="Generalités">Generalités</option>
                                    <option value="Critiques">Critiques</option>
                                    <option value="Suggestions">Suggestions</option>
                                    <option value="Produits">Produits </option>
                                </select>
                            </div>
                            <textarea type="text" id="message" name="messageRo" placeholder="message"
                                class="form-control" style="width:77%" style="height:500px" required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </section>


</main>
<?php require './footerContent.php'; ?>
</div>
<script src="js/plugins.js"></script>
<script src="js/ajax-mail.js"></script>
<script src="js/custom.js"></script>
<script src="js/autocompleteSearch.js" type="text/javascript"></script>
</body>

</html>